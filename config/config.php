<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Config
    |--------------------------------------------------------------------------
    |
    */

    'namespace' => 'Modules',

    'stubs' => [
        // 'path' => base_path('stubs/laravel-starter-stubs'),

        'path' => base_path('vendor/dungdeha/module-manager/src/stubs'),
    ],

    'module' => [
        'files' => [
            'composer' => ['composer.stub', 'composer.json'],
            'json' => ['module.stub', 'module.json'],
            'config' => ['Config/config.stub', 'Config/config.php'],
            'database' => ['database/migrations/stubMigration.stub', 'database/migrations/stubMigration.php', 'rename'],
            'factories' => ['database/factories/stubFactory.stub', 'database/factories/stubFactory.php', 'rename'],
            'seeders' => ['database/seeders/stubSeeders.stub', 'database/seeders/stubSeeders.php', 'rename'],
            'command' => ['Console/Commands/StubCommand.stub', 'Console/Commands/StubCommand.php', 'rename'],
            'enum_status' => ['Enums/stubStatus.stub', 'Enums/stubStatus.php'],
            'lang' => ['lang/en/text.stub', 'lang/en/text.php'],
            'lang_ja' => ['lang/ja/text.stub', 'lang/ja/text.php'],
            'models' => ['Models/stubModel.stub', 'Models/stubModel.php'],
            'services' => ['Services/stubService.stub', 'Services/stubService.php'],
            'helper' => ['Helpers/stubHelper.stub', 'Helpers/stubHelper.php'],
            'providersRoute' => ['Providers/RouteServiceProvider.stub', 'Providers/RouteServiceProvider.php'],
            'providersEvent' => ['Providers/EventServiceProvider.stub', 'Providers/EventServiceProvider.php'],
            'providersHelper' => ['Providers/HelperServiceProvider.stub', 'Providers/HelperServiceProvider.php'],
            'providers' => ['Providers/stubServiceProvider.stub', 'Providers/stubServiceProvider.php'],
            'route_web' => ['routes/web.stub', 'routes/web.php'],
            'route_api' => ['routes/api.stub', 'routes/api.php'],
            'controller_backend' => ['Http/Controllers/Backend/stubBackendController.stub', 'Http/Controllers/Backend/stubBackendController.php'],
            'controller_frontend' => ['Http/Controllers/Frontend/stubFrontendController.stub', 'Http/Controllers/Frontend/stubFrontendController.php'],
            'request_store_backend' => ['Http/Requests/Backend/StorestubRequest.stub', 'Http/Requests/Backend/StorestubRequest.php'],
            'request_update_backend' => ['Http/Requests/Backend/UpdatestubRequest.stub', 'Http/Requests/Backend/UpdatestubRequest.php'],
            'views_backend_index' => ['Resources/views/backend/stubViews/index.blade.stub', 'Resources/views/backend/stubViews/index.blade.php'],
            'views_backend_block_search' => ['Resources/views/backend/stubViews/includes/search.blade.stub', 'Resources/views/backend/stubViews/includes/search.blade.php'],
            'views_backend_index_datatable' => ['Resources/views/backend/stubViews/index_datatable.blade.stub', 'Resources/views/backend/stubViews/index_datatable.blade.php'],
            'views_backend_create' => ['Resources/views/backend/stubViews/create.blade.stub', 'Resources/views/backend/stubViews/create.blade.php'],
            'views_backend_form' => ['Resources/views/backend/stubViews/form.blade.stub', 'Resources/views/backend/stubViews/form.blade.php'],
            'views_backend_show' => ['Resources/views/backend/stubViews/show.blade.stub', 'Resources/views/backend/stubViews/show.blade.php'],
            'views_backend_edit' => ['Resources/views/backend/stubViews/edit.blade.stub', 'Resources/views/backend/stubViews/edit.blade.php'],
            'views_frontend_index' => ['Resources/views/frontend/stubViews/index.blade.stub', 'Resources/views/frontend/stubViews/index.blade.php'],
            'views_frontend_show' => ['Resources/views/frontend/stubViews/show.blade.stub', 'Resources/views/frontend/stubViews/show.blade.php'],
            'test_feature_backend_list' => ['Tests/Feature/Backend/ListstubTest.stub', 'Tests/Feature/Backend/ListstubTest.php'],
            'test_feature_backend_create' => ['Tests/Feature/Backend/CreatestubTest.stub', 'Tests/Feature/Backend/CreatestubTest.php'],
            'test_feature_backend_edit' => ['Tests/Feature/Backend/EditstubTest.stub', 'Tests/Feature/Backend/EditstubTest.php'],
            'test_feature_backend_show' => ['Tests/Feature/Backend/ShowstubTest.stub', 'Tests/Feature/Backend/ShowstubTest.php'],
            'test_feature_backend_delete' => ['Tests/Feature/Backend/DeletestubTest.stub', 'Tests/Feature/Backend/DeletestubTest.php'],
            'test_feature_frontend_list' => ['Tests/Feature/Frontend/ListstubTest.stub', 'Tests/Feature/Frontend/ListstubTest.php'],
            'test_feature_frontend_detail' => ['Tests/Feature/Frontend/DetailstubTest.stub', 'Tests/Feature/Frontend/DetailstubTest.php'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Composer
    |--------------------------------------------------------------------------
    |
    | Config for the composer.json file
    |
    */

    'composer' => [
        'vendor' => 'dungdeha',
        'author' => [
            'name' => 'DungDD',
            'email' => 'dungdd@deha-soft.com',
        ],
    ],

    'files' => [
        'module-list' => base_path('modules_statuses.json'),
    ],
];
