<?php

namespace App\Providers;

use App\Repositories\IUserRepository;
use App\Repositories\UserRepository;
use App\Services\AuthInterface;
use App\Services\AuthService;
use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthInterface::class, AuthService::class);
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot(): void
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->name, function ($user) use ($permission) {
                    return $user->hasPermissionTo($permission);
                });
            });
        } catch (\Exception $e) {
            report($e);
        }

        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
});

Blade::directive('endrole', function ($role) {
return "<?php endif; ?>";
});
}
}