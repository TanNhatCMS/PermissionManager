<?php

namespace Backpack\PermissionManager\app\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    use CrudTrait;

    protected $fillable = ['name', 'title', 'guard_name', 'updated_at', 'created_at'];
}
