<?php

namespace MVC\Models;
echo 'namespace MVC\models\customerresourcemodel<br>';
use MVC\Core\ResourceModel;
use MVC\Models\CustomerModel;

class CustomerResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init('customer', 'id', new CustomerModel());
    }
}