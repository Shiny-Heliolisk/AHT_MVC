<?php

namespace MVC\Core;
echo 'namespace MVC\Core\resourcemodelinterface<br>';
interface ResourceModelInterface
{
 
    function _init($table, $id, $model);
    function add($model);
    function edit($model);
    function delete($model);

}