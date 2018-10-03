<?php
return [
    /**
     * Configure the SendReport service
     *
     * - API_Url (string) - URL to send the report, default our database.
     */
    'sendReport' => [
        'API_Url' => env('IMMUNE_URL','http://localhost:8001/api/v1/'),
        'API_KEY' => env('IMMUNE_KEY', 'DVhGRcOqjT85bTU6DPSOLhZ7w9McUQ9YBOFpUe2bKvpwtigaZuTeeExppBGDtQ')
    ]
];