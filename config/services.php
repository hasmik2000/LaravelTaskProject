<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id'     => '1397312820398971',
        'client_secret' => 'c98943730fe755c2612a71810cfe4080',
        'redirect'      => 'http://localhost:8000/login/facebook/callback',
    ],
    'google' => [
        'client_id'     => '897400242898-kqitvs75o5u1d3dvkp3fhepj3kqa428i.apps.googleusercontent.com',
        'client_secret' => 'fHsAu0tyMOcXBpWgQI_QOiES',
        'redirect'      => 'http://localhost:8000/login/google/callback',
    ],
];