<?php

namespace SisInd\Repositories;
use SisInd\Entities\Role;

/**
 * Description of RoleRepo
 *
 * @author jhonny
 */
class RoleRepo {
    
    public function getList()
    {
        return Role::lists('name', 'id');
    }
}
