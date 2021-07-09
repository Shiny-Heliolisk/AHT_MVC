<?php

namespace MVC\Models;
echo 'namespace MVC\model\customerrepository.php<br>';
use MVC\Models\CustomerResourceModel;

class CustomerRepository
{
    private $customerResource;
    public function __construct()
    {
        $this->customerResource = new CustomerResourceModel();
    }
    public function add($model)
    {
        return $this->customerResource->add($model);
    }

    public function edit($model)
    {
        return $this->customerResource->edit($model);
    }

    public function get($id)
    {
        return $this->customerResource->get($id);
    }

    public function delete($model)
    {
        return $this->customerResource->delete($model);
    }

    public function getAll()
    {
        return $this->customerResource->getAll();
    }
}