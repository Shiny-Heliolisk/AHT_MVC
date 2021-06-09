<?php

namespace MVC\Models;
echo 'namespace MVC\models\taskresourcemodel<br>';
use MVC\Core\ResourceModel;
use MVC\Models\TaskModel;

class TaskResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init('tasks', 'id', new TaskModel());
    }
}