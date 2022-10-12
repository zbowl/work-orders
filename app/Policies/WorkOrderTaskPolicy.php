<?php

namespace App\Policies;

use App\Models\WorkOrderTask;
use Illuminate\Auth\Access\HandlesAuthorization;
use LdapRecord\Models\ActiveDirectory\User;

class WorkOrderTaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, WorkOrderTask $workOrderTask)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \LdapRecord\Models\ActiveDirectory\User  $user
     * @param  \App\Models\WorkOrderTask  $workOrderTask
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, WorkOrderTask $workOrderTask)
    {
        //
    }
}
