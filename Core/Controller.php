<?php

namespace MVC\Core;

    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            extract($this->vars);
            ob_start();
            // var_dump(ucfirst(str_replace('Controller', '', get_class($this))));
            // var_dump(get_class($this);

            // $preprocess = str_replace('Controller', '', get_class($this));

            // var_dump($preprocess);



            $stringTask = str_replace('Controller', '', get_class($this));
            // var_dump($stringTask);die;
            $dem = strrpos($stringTask, '\\');
            $nameTask = substr($stringTask, $dem + 1);
            require(ROOT . "Views/" . $nameTask . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>