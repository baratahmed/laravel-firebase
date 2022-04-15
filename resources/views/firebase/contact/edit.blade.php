@extends('firebase.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Contact <a href="{{ route('contacts') }}" class="btn btn-sm btn-danger float-end">Back</a></h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('contact.update', $key) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" value="{{ $editData['fname'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" value="{{ $editData['lname'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" value="{{ $editData['phone'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" value="{{ $editData['email'] }}" class="form-control">
                        </div>
                        <div class="d-grid form-group mb-3">
                            <button type="submit" class="btn btn-warning btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
