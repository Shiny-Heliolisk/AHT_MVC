<?php

namespace MVC\Controllers;

use Collator;
use MVC\Core\Controller;
use MVC\Models\CharModel;
use MVC\Models\CharRepository;

class CharController extends Controller{

    function index(){
        $charRepository = new CharRepository();

        $d['character'] = $charRepository->getAll();
        // var_dump($charRepository->getAll());die;
        $this->set($d);
        $this->render('index');
    }

    function create()
    {
        if (isset($_POST["name"])) {
            $charRepository = new CharRepository();
            $charModel = new CharModel();
            // var_dump($_POST);die;
            $charModel->setName($_POST["name"]);
            $charModel->setType($_POST["type"]);
            $charModel->setDamage($_POST["damage"]);
            $charModel->setHp($_POST["hp"]);

            if ($charRepository->add($charModel)) {
                header("Location: " . WEBROOT . "char/index");
            }
        }
        $this->render("add");
    }

    // Edit
    function edit($id)
    {
        $charRepository = new CharRepository();
        $d["character"] = $charRepository->get($id);
        if (isset($_POST["name"])) {
            $charModel = new CharModel();
            $charModel->setId($id);
            $charModel->setName($_POST["name"]);
            $charModel->setType($_POST["type"]);
            if ($charRepository->edit($charModel))
            {
                header("Location: " . WEBROOT . "char/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    // Delete
    function delete($id)
    {
        $charRepository = new CharRepository();
        $charModel = new CharModel();
        $charModel->setId($id);
        if ($charRepository->delete($charModel))
        {
            header("Location: " . WEBROOT . "char/index");
        }
    }
}