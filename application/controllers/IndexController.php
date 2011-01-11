<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this -> view -> assign('sections', array('Section 1', 'Section 2', 'Section 3', 'Section 4'));
    }


}

