<?php

class MyForm {

    private $method;
    private $action;

    public function __construct($method, $action) {
        $this->method = $method;
        $this->action = $action;
    }

    public function addLabel($for, $string) {
        return '<label for="' . $for . '">' . $string . '</label>';
    }

    public function addInput($type, $name, $value) {
        return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
    }

    public function addForm($type, $name, $value, $string, $for) {
        $form = '<form class="m-5"  action="' . $this->action . '" method="' . $this->method . '">';
        $form .= $this->addLabel($for, $string);
        $form .= $this->addInput($type, $name, $value);
        $form .= '<button type="submit" class="btn btn-success mx-3 ">Submit</button>';
        $form .= '</form>';


        return $form;
    }
}


