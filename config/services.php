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

    'google' => [
    'client_id' =>'989521392121-au4k06d79m7qq0f0dnu8aupqfe9k1gvs.apps.googleusercontent.com',
    'client_secret' =>'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',
    'redirect' => 'https://vimbisotest.herokuapp.com/review/google/callback',
],

'facebook' => [
    'client_id' => '413235483803463',
    'client_secret' => '826c846b7a30eff16a63f7e45711b69f',
    'redirect' => 'https://vimbisotest.herokuapp.com/login/facebook/callback',
],

];
