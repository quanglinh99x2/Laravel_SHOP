<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //file config > permissions.php chứa các config về quyền
        $this->registerPolicies();
        // Phân quyền Sử dụng gate và policy
        // phân quyền category
        Gate::define('list-category','App\Policies\CategoryPolicy@view' );
        Gate::define('add-category','App\Policies\CategoryPolicy@create' );
        Gate::define('edit-category','App\Policies\CategoryPolicy@update' );
        Gate::define('delete-category','App\Policies\CategoryPolicy@delete' );

        Gate::define('list-menu','App\Policies\MenuPolicy@view' );
        Gate::define('add-menu','App\Policies\MenuPolicy@create' );
        Gate::define('edit-menu','App\Policies\MenuPolicy@update' );
        Gate::define('delete-menu','App\Policies\MenuPolicy@delete' );

        Gate::define('list-product','App\Policies\ProductPolicy@view' );
        Gate::define('add-product','App\Policies\ProductPolicy@create' );
        Gate::define('edit-product','App\Policies\ProductPolicy@update' );
        Gate::define('delete-product','App\Policies\ProductPolicy@delete' );

        Gate::define('list-role','App\Policies\RolePolicy@view' );
        Gate::define('add-role','App\Policies\RolePolicy@create' );
        Gate::define('edit-role','App\Policies\RolePolicy@update' );
        Gate::define('delete-role','App\Policies\RolePolicy@delete' );

        Gate::define('list-slider','App\Policies\SliderPolicy@view' );
        Gate::define('add-slider','App\Policies\SliderPolicy@create' );
        Gate::define('edit-slider','App\Policies\SliderPolicy@update' );
        Gate::define('delete-slider','App\Policies\SliderPolicy@delete' );

        Gate::define('list-setting','App\Policies\SettingPolicy@view' );
        Gate::define('add-setting','App\Policies\SettingPolicy@create' );
        Gate::define('edit-setting','App\Policies\SettingPolicy@update' );
        Gate::define('delete-setting','App\Policies\SettingPolicy@delete' );

        Gate::define('list-user','App\Policies\UserPolicy@view' );
        Gate::define('add-user','App\Policies\UserPolicy@create' );
        Gate::define('edit-user','App\Policies\UserPolicy@update' );
        Gate::define('delete-user','App\Policies\UserPolicy@delete' );

        Gate::define('list-trademark','App\Policies\TrademarkPolicy@view' );
        Gate::define('add-trademark','App\Policies\TrademarkPolicy@create' );
        Gate::define('edit-trademark','App\Policies\TrademarkPolicy@update' );
        Gate::define('delete-trademark','App\Policies\TrademarkPolicy@delete' );
    }
}
