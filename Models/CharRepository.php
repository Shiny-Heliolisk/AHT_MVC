<?php

namespace MVC\Models;
echo 'namespace MVC\model\taskrepository.php<br>';
use MVC\Models\CharResourceModel;

class CharRepository
{
    private $charResource;
    public function __construct()
    {
        $this->charResource = new CharResourceModel();
    }
    public function add($model)
    {
        return $this->charResource->add($model);
    }

    public function edit($model)
    {
        return $this->charResource->edit($model);
    }

    public function get($id)
    {
        return $this->charResource->get($id);
    }

    public function delete($model)
    {
        return $this->charResource->delete($model);
    }

    public function getAll()
    {
        return $this->charResource->getAll();
    }
}