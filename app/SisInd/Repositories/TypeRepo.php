<?php

/**
 * Description of TypeRepo
 *
 * @author jhonny
 */

namespace SisInd\Repositories;

use SisInd\Entities\Type;

class TypeRepo {

    public function getList() {
        return Type::lists('name', 'id');
    }

}
