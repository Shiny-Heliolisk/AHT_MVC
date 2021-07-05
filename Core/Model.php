<?php
namespace MVC\Core;
echo 'namespace MVC\Core\model.php<br>';
class Model
{
    function getProperties()
    {
        return get_object_vars($this);
    }
}