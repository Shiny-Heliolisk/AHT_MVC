<?php

namespace MVC\Models;
echo 'namespace MVC\models\charresourcemodel<br>';
use MVC\Core\ResourceModel;
use MVC\Models\CharModel;

class CharResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init('character', 'id', new CharModel());
    }
}