<?php

namespace MVC\Controllers;
echo 'namespace MVC\controller\customercontroller.php<br>';
use MVC\Core\Controller;
use MVC\Models\CustomerModel;
use MVC\Models\CustomerRepository;

class CustomerController extends Controller
{
    function index()
    {
        $customers = new CustomerRepository();

        $d['customers'] = $customers->getAll();
        $this->set($d);
        $this->render("index");
    }
    
    // Create
    function create()
    {
        if (isset($_POST["customer_name"])) {
            $customer = new CustomerRepository();
            $customerModel = new CustomerModel();
            $customerModel->setName($_POST["customer_name"]);
            $customerModel->setAddress($_POST["customer_address"]);
            $customerModel->setPhoneNumber($_POST["customer_tel"]);
            if ($customer->add($customerModel)) {
                header("Location: " . WEBROOT . "customer/index");
            }
        }
        $this->render("add");
    }

    // Edit
    function edit($id)
    {
        $customer = new CustomerRepository();
        $d["customers"] = $customer->get($id);
        if (isset($_POST["customer_name"])) {
            $customerModel = new CustomerModel();
            $customerModel->setId($id);
            $customerModel->setName($_POST["customer_name"]);
            $customerModel->setAddress($_POST["customer_address"]);
            $customerModel->setPhoneNumber($_POST["customer_tel"]);
            // var_dump($_POST["customer_tel"]);die;
            if ($customer->edit($customerModel))
            {
                header("Location: " . WEBROOT . "customer/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    // Delete
    function delete($id)
    {
        $customer = new CustomerRepository();
        $customerModel = new CustomerModel();
        $customerModel->setId($id);
        if ($customer->delete($customerModel))
        {
            header("Location: " . WEBROOT . "customer/index");
        }
    }
}