<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        echo Phalcon\Tag::linkTo('Index','test index');
        exit;
    }

}

