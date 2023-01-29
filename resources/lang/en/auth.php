<?php

return [
    'sign_in' => 'Log ind',
    'go_to_login' => 'Gå til log ind',
    'failed' => 'Der blev ikke fundet nogen konto, der matcher disse oplysninger.',

    'forgot_password' => [
        'label' => 'Glemt kodeord?',
        'label_help' => 'Indtast din konto-e-mailadresse for at modtage instruktioner om nulstilling af din adgangskode.',
        'button' => 'Gendan konto',
    ],

    'reset_password' => [
        'button' => 'Nulstil og log ind',
    ],

    'two_factor' => [
        'label' => '2-Factor Token',
        'label_help' => 'Denne konto kræver et andet lag af godkendelse for at fortsætte. Indtast venligst koden genereret af din enhed for at fuldføre dette login.',
        'checkpoint_failed' => 'To-faktor-godkendelsestokenet var ugyldigt.',
    ],

    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'password_requirements' => 'Adgangskoden skal være på mindst 8 tegn og skal være unik for dette websted.',
    '2fa_must_be_enabled' => 'Administratoren har krævet, at 2-Factor Authentication er aktiveret for din konto for at bruge panelet.',
];
