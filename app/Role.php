<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
   public function hasPerm($permission)
   {
        return in_array( $permission->id, array_keys(
            $this->perms()->get()->keyBy('id')->toArray()
        ));
   }
}