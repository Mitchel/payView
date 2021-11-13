<?php

return [
    'pagename' => [
        'login'                 => 'Login with your account',
        'register'              => 'Create an account',
        'activate'              => 'Activate your account',
        'dashboard'             => 'Dashboard',
        'settings'              => 'Settings',
        'transactions' => [
            'overview'          => 'Transactions Overview',
            'month'             => 'Transactions: :month',
            'year'              => 'Transactions: :year',
            'edit'              => 'Edit the transaction',
        ],
    ],

    'dashboard' => [
        'welcome'               => 'Welcome back,',
        'today'                 => 'Lets talk about today,',
        'statics' => [
            'revenue'           => 'Revenue',
            'expenses'          => 'Expenses',
            'reservations'      => 'Reservations',
            'balance'           => 'Balance',
        ],
        'subscriptions' => [
            'title'             => 'Most recent subscription(s)',
            'euro'              => '&euro;',
            'nothing'           => 'Currently you don\'t have any subscriptions, so we can\'t show you these either.',
            'button' => [
                'view'          => 'View all',
                'add'           => 'Add subscription',
            ],
        ],
        'transactions' => [
            'title'             => 'Most recent transaction(s)',
            'euro'              => '&euro;',
            'nothing'           => 'Currently you don\'t have any transactions, so we can\'t show you these either.',
            'button' => [
                'view'          => 'View all',
                'add'           => 'Add transaction',
            ],
        ],
    ],

    'auth' => [
        'login' => [
            'title'             => 'Login with your account',
            'description'       => 'Use the form below to log into your personal area of payView.',
            'email'             => 'E-mail address',
            'password'          => 'Password',
            'submit'            => 'Sign in',
            'account'           => 'Don\'t have an account yet?',
            'signup'            => 'Sign up',
            'error'             => 'Something didn\'t go quite right..',
            'success'           => 'That went absolutely well!',
            'details'           => 'Your provided credentials could not be verified.',
            'dashboard'         => 'You have successfully logged into your personal payView environment.',
        ],

        'register' => [
            'title'             => 'Create an new account',
            'description'       => 'Use the form below to create an account for your personal area and other services of payView.',
            'firstname'         => 'Firstname',
            'lastname'          => 'Lastname',
            'email'             => 'E-mail address',
            'password'          => 'Password',
            'submit'            => 'Create new account',
            'account'           => 'Already have an account yet?',
            'signin'            => 'Sign in',
            'error'             => 'Something didn\'t go quite right..',
            'success'           => 'Your account has been created, please check your email to activate your account.',
        ],

        'activate' => [
            'title'             => 'Activate your\'re account',
            'description'       => 'By clicking on the button below you will immediately activate your account and be able to use your personal environment of payView.',
            'submit'            => 'Activate my account',
            'success'           => 'Your account has been successfully activated, you can now log in immediately to use payView.',
            'error'             => 'You have not yet activated your account, please check your email for more information regarding your activation.',
        ],

        'logout' => [
            'success'           => 'You have just been successfully logged out, hopefully we will see you again soon!',
        ],
    ],

    'transactions' => [
        'title'                 => 'Lets talk about transactions,',
        'title-specific'        => 'Lets talk about specific transactions for the month,',
        'title-specific-year'   => 'Lets talk about specific transactions for the year,',
        'overview'              => 'Overview',
        'success'               => 'Your transaction has been successfully modified!',
        'delete'                => 'Your transaction has been successfully removed!',
        'month' => [
            'jan'               => 'january',
            'feb'               => 'february',
            'mar'               => 'march',
            'apr'               => 'april',
            'may'               => 'may',
            'jun'               => 'june',
            'jul'               => 'july',
            'aug'               => 'august',
            'sep'               => 'september',
            'oct'               => 'october',
            'nov'               => 'november',
            'dec'               => 'december',
        ],
    ],

    'settings' => [
        'title'                 => 'Lets talk about settings,',
        'overview'              => 'Overview',
        'email' => [
            'title'             => 'E-mail',
            'edit'              => 'Edit you\'re e-mail'
        ],
        'information'           => 'Information about your settings',
        'text'                  => 'Within payView you have several settings that you can adjust to your liking. Currently you are visiting the overview page where there are no settings. On the left side of this page you will find a menu where you can go to the desired page with the specific settings.',
        'password' => [
            'title'             => 'Password',
            'edit'              => 'Edit you\'re password'
        ],
    ],
];
