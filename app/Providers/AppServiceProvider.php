<?php

namespace App\Providers;

use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\IUserRepository;
use App\Repositories\UserRepository;
use App\Services\AuthInterface;
use App\Services\AuthService;
use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use App\Repositories\AgencyRepositoryInterface;
use App\Repositories\AgencyRepository;
use App\Repositories\PropertyRepositoryInterface;
use App\Repositories\PropertyRepository;
use App\Repositories\PropertyTypeRepositoryInterface;
use App\Repositories\PropertyTypeRepository;
use App\Repositories\ContactInfoRepositoryInterface;
use App\Repositories\ContactInfoRepository;
use App\Repositories\PropertyAmenityRepositoryInterface;
use App\Repositories\PropertyAmenityRepository;


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
        $this->app->bind(AgencyRepositoryInterface::class, AgencyRepository::class);
        $this->app->bind(PropertyRepositoryInterface::class, PropertyRepository::class);
        $this->app->bind(PropertyTypeRepositoryInterface::class, PropertyTypeRepository::class);
        $this->app->bind(ContactInfoRepositoryInterface::class, ContactInfoRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(PropertyAmenityRepositoryInterface::class, PropertyAmenityRepository::class);
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