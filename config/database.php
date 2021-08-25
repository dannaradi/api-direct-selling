<?php

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
        // QPRO LIST DB
        'qpro_serpong' => [
            'driver' => 'sqlsrv',
            'odbc' => true,
            'odbc_datasource_name' => env('DB_DATASOURCE_QPRO_NAME', 'qpro_dev_serpong'),
            'host' => env('DB_HOST_QPRO', '192.168.0.32'),
            'port' => env('DB_PORT_QPRO', '1433'),
            'database' => env('DB_DATABASE_QPRO', 'Erha'),
            'username' => env('DB_USERNAME_QPRO', 'wil1'),
            'password' => env('DB_PASSWORD_QPRO', '123123'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ],
        // 'qpro_pondok_indah' => [
        //     'driver' => 'sqlsrv',
        //     'odbc' => true,
        //     'odbc_datasource_name' => env('DB_DATASOURCE_QPRO_NAME', null),
        //     'host' => env('DB_HOST_QPRO', 'localhost'),
        //     'port' => env('DB_PORT_QPRO', '1433'),
        //     'database' => env('DB_DATABASE_QPRO', 'forge'),
        //     'username' => env('DB_USERNAME_QPRO', 'forge'),
        //     'password' => env('DB_PASSWORD_QPRO', ''),
        //     'charset' => 'utf8',
        //     'collation' => 'utf8_unicode_ci'
        // ],
        'qpro_kemanggisan' => [
            'driver' => 'sqlsrv',
            'odbc' => true,
            'odbc_datasource_name' => 'qpro_dev_kemanggisan',
            'host' => '192.168.0.36',
            'port' => '1433',
            'database' => 'Erha',
            'username' => 'sa',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ],
        // END LIST DB QPRO

        // EMR LIST DB
        // 'emr' => [
        //     'driver' => 'mysql',
        //     'host' => env('DB_HOST_EMR'),
        //     'port' => env('DB_PORT_EMR'),
        //     'database' => env('DB_DATABASE_EMR'),
        //     'username' => env('DB_USERNAME_EMR'),
        //     'password' => env('DB_PASSWORD_EMR'),
        //     'charset'   => 'utf8',
        //     'collation' => 'utf8_unicode_ci',
        // ],
        'emr_mssql' => [
            'driver' => 'sqlsrv',
            'odbc' => true,
            'odbc_datasource_name' => 'emr_dev',
            'host' => '192.168.0.90',
            'port' => '1433',
            'database' => 'eMR_DB',
            'username' => 'apidev',
            'password' => 'apiFirehot20#',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ],
        'emr_mysql' => [
            'driver' => 'mysql',
            'host' => '192.168.10.131',
            'port' => '3306',
            'database' => 'zuluerha01',
            'username' => 'Chan',
            'password' => '123123',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
        'e21' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST_E21'),
            'database' => env('DB_DATABASE_E21'),
            'username' => env('DB_USERNAME_E21'),
            'password' => env('DB_PASSWORD_E21'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ]
];
