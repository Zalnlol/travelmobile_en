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

    'facebook' => [
        'client_id' => '1248967588867271',
        'client_secret' => 'fdf740fd459dfd8d90684e0e0e54b34e',
        'redirect' => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '546794289656-sd1dr6cvtfltgc4mh8fjqtv1qb4rahmd.apps.googleusercontent.com',
        'client_secret' => 'G8DphBSuPDAmdXp1e2G3NkT1',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],


];
