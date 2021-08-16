<?php


namespace App\Services\Permission\Traits;


use App\Models\Permission;

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

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', array_flatten($permissions))->get();
    }


}
