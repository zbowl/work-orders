<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('editor', 'Editor', [
            'read',
            'create',
            'update',
        ])->description('Editor users have the ability to read, create, and update.');

        Jetstream::role('developer', 'Developer', [
            'read',
            'create',
            'update',
        ])->description('Developer users can do everything.');

        Jetstream::role('project-manager', 'Project Manager', [
            'read',
            'create',
            'update',
        ])->description('Project Manager users manage projects.');

        Jetstream::role('tech-support', 'Tech Support', [
            'read',
            'create',
            'update',
        ])->description('Tech Support users have the ability to troubleshoot customer issues.');

        Jetstream::role('fiber-technician', 'Fiber Technician', [
            'read',
            'create',
            'update',
        ])->description('Fiber Technician users manage and maintain the fiber plant.');

        Jetstream::role('contractor', 'Contractor', [
            'read',
            'create',
            'update',
        ])->description('Contractor users support the fiber technician teams.');

        Jetstream::role('dispatcher', 'Dispatcher', [
            'read',
            'create',
            'update',
        ])->description('Dispatcher users have the ability to dispatch and schedule employees.');
    }
}
