<?php

namespace App\Models;
use Spatie\Permission\Models\Role as OriginalRole;

class Role extends OriginalRole
{
    const ROLE_ADMIN = 'admin';
    const ROLE_SELLER = 'seller';
    const ROLE_CUSTOMER = 'customer';
    protected $fillable =
    [
        'name',
        'guard_name',
        'updated_at',
        'created_at'
    ];
}


