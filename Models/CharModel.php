<?php

namespace MVC\Models;
echo 'namespace MVC\model\taskmodel.php<br>';
use MVC\Core\Model;

class CharModel extends Model
{
    protected $id;
    protected $name;
    protected $type;
    protected $damage;
    protected $hp;
    
    
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }
    public function getDamage()
    {
        return $this->damage;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }
    public function getHp()
    {
        return $this->hp;
    }
}
?>