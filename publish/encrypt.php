<?php

declare(strict_types=1);

return [

    /*
     |--------------------------------------------------------------------------
     | Encryption Key
     |--------------------------------------------------------------------------
     |
     | This key is used by the Illuminate encrypter service and should be set
     | to a random, 32 character string, otherwise these encrypted strings
     | will not be safe. Please do this before deploying an application!
     |
     */

    'key' => env('APP_KEY','base64:Wmp8pOvKkx58GWU32C5C6IBiXrmUR6O8Dn4Z7/GHiKs='),

    'cipher' => 'AES-256-CBC',

];