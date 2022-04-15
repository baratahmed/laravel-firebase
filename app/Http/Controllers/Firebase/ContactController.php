<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->table_name = 'contacts';
    }

    public function index(){
        $contacts = $this->database->getReference($this->table_name)->getValue();
        $total_contacts = $this->database->getReference($this->table_name)->getSnapshot()->numChildren();
        return view('firebase.contact.index',compact('contacts','total_contacts'));
    }

    public function create()
    {
        return view('firebase.contact.create');

    }

    public function store(Request $request)
    {
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $postRef = $this->database->getReference($this->table_name)->push($postData);
        if ($postRef) {
            return redirect('contacts')->with('status', 'Contact Added Successfully.');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Added.');

        }

    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $key = $id;
        $editData = $this->database->getReference($this->table_name)->getChild($key)->getValue();
        if ($editData) {
            return view('firebase.contact.edit', compact('editData','key'));
        } else {
            return redirect('contacts')->with('status', 'Contact ID Not Found.');
        }


    }

    public function update(Request $request, $id)
    {
        $key = $id;
        $updateData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ];
        $res_updated = $this->database->getReference($this->table_name.'/'.$key)->update($updateData);
        if ($res_updated) {
            return redirect('contacts')->with('status', 'Contact Updated Successfully.');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Updated.');
        }

    }

    public function destroy($id)
    {
        $key = $id;

        $del_data = $this->database->getReference($this->table_name.'/'.$key)->remove();
        if ($del_data) {
            return redirect('contacts')->with('status', 'Contact Deleted Successfully.');
        } else {
            return redirect('contacts')->with('status', 'Contact Not Deleted.');

        }
    }
}
