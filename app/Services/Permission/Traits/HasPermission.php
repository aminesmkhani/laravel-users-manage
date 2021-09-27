<?php


namespace App\Services\Permission\Traits;


use App\Models\Permission;
use Illuminate\Support\Arr;

trait HasPermission
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function givePermissionsTo(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        if ($permissions->isEmpty()) return $this;

        $this->permissions()->syncWithoutDetaching($permissions);

        return $this;
    }

    public function withdrawpermissions(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        $this->permissions()->detach($permissions);

        return $this;

    }

    public function refreshPermissions(... $permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        $this->permissions()->sync($permissions);

        return $this;
    }

    protected function getAllPermissions(... $permissions)
    {
        return Permission::whereIn('name', Arr::flatten($permissions))->get();
    }


    public function hasPermission(Permission $permissions)
    {
        return $this->permissions->contains($permissions);
    }

    protected function hasPermissionsThroughRole (Permission $permission)
    {
        dd($permission->roles);
    }

}
