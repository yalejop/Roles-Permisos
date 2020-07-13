<?php

use App\Permission\Model\Role;
use Illuminate\Routing\Route;

Route::get('/test', function () {

/* return Role::create([
    'name' => 'Admin',
    'slug' => 'admin',
    'description' => 'Adminitrator',
    'full-access' => 'yes'
]); */

/* return Role::create([
    'name' => 'Guest',
    'slug' => 'guest',
    'description' => 'Guest',
    'full-access' => 'no'
    ]); */

/*  return Role::create([
    'name' => 'Test',
    'slug' => 'test',
    'description' => 'Test',
    'full-access' => 'no'
    ]); */

//$user = User::find(1);

//$user->roles()->attach([1,3]);
/* $user->roles()->detach([1,3]); */
//$user->roles()->sync([5,7]);

//return $user->roles;

/*  return Permission::create([
    'name' => 'List Product',
    'slug' => 'product.index',
    'description' => 'A User can list a Products',
]); */ 

$role = Role::find(6);

$role->permissions()->sync([1,2]);

return $role->permissions; 

});