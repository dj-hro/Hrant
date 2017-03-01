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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
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
        'client_id' => '677513915753918', 
        'client_secret' => '5716a11c503475c2c1fe959b29191e8b', 
        'redirect' => 'http://project.tun/login/facebook/callback', 
    ],

    'google' => [
        'client_id' => '147645027669-jo81bqveat8trqkvb4cnn8c5682opoic.apps.googleusercontent.com', 
        'client_secret' => 'psnl3PqibAfFv8RBOXcnqClm', 
        'redirect' => 'http://project.am/login/google/callback', 
    ],


];
