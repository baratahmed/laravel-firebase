<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'apiKey' => env('FIREBASE_API_KEY',"AIzaSyBMMr6L1wH83Mm3e7l4cFNJkdqZX0YiNjM"),
        'authDomain' => env('FIREBASE_AUTH_DOMAIN',"laravel-firebase-crud-bff21.firebaseapp.com"),
        'databaseURL' => env('FIRABASE_DATABASE_URL',"https://laravel-firebase-crud-bff21-default-rtdb.firebaseio.com"),
        'projectId' => env('FIREBASE_PROJECT_ID',"laravel-firebase-crud-bff21"),
        'storageBucket' => env('FIREBASE_STORAGE_BUCKET',"laravel-firebase-crud-bff21.appspot.com"),
        'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID',"146114856648"),
        'appId' => env('FIREBASE_APP_ID',"1:146114856648:web:91bd070ceb63136b89c7fd"),
        'measurementId' => env('FIREBASE_MEASUREMENT_ID',"G-FTSDXY4PZ2")
    ],

    // apiKey: "AIzaSyBMMr6L1wH83Mm3e7l4cFNJkdqZX0YiNjM",
    // authDomain: "laravel-firebase-crud-bff21.firebaseapp.com",
    // databaseURL: "https://laravel-firebase-crud-bff21-default-rtdb.firebaseio.com",
    // projectId: "laravel-firebase-crud-bff21",
    // storageBucket: "laravel-firebase-crud-bff21.appspot.com",
    // messagingSenderId: "146114856648",
    // appId: "1:146114856648:web:91bd070ceb63136b89c7fd",
    // measurementId: "G-FTSDXY4PZ2"

];
