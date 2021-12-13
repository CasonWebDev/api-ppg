<?php return [
    // This contains the Laravel Packages that you want this plugin to utilize listed under their package identifiers
    'packages' => [
        'maatwebsite/excel' => [
            // Service providers to be registered by your plugin
            'providers' => [
                '\Maatwebsite\Excel\ExcelServiceProvider',
            ],
            
            // Aliases to be registered by your plugin in the form of $alias => $pathToFacade
            'aliases' => [
                'Excel' => '\Maatwebsite\Excel\Facades\Excel',
            ],
            
            // The namespace to set the configuration under. For this example, this package accesses it's config via config('purifier.' . $key), so the namespace 'purifier' is what we put here
            'config_namespace' => 'excel',
            
        ],
    ],
];