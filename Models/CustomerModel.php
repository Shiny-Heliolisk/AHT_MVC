<?php

namespace MVC\Models;
echo 'namespace MVC\model\customermodel.php<br>';
use MVC\Core\Model;

class CustomerModel extends Model
{
    protected $id;
    protected $customer_name;
    protected $customer_address;
    protected $customer_tel;
    
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($customer_name)
    {
        $this->customer_name = $customer_name;
    }
    public function getName()
    {
        return $this->customer_name;
    }

    public function setAddress($customer_address)
    {
        $this->customer_address = $customer_address;
    }
    public function getAddress()
    {
        return $this->customer_address;
    }

    public function setPhoneNumber($customer_tel)
    {
        $this->customer_tel = $customer_tel;
    }
    public function getPhoneNumber()
    {
        return $this->customer_tel;
    }

}
