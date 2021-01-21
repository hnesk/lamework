<?php

class Request {

    public $action;
    public $data;
    public $files;

    public function __construct($action, $data = [], $files = [], $session = []) {
        $this->action = $action;
        $this->data = $data;
        $this->files = $files;
        $this->session = $session;
    }

    public function getAction() {
        return $this->action;
    }

    public static function createFromGlobals() {
        $action = $_REQUEST['action'];
        unset($_REQUEST['action']);
        return new self($action, $_REQUEST, $_FILES, $_SESSION);
        #self ist wie $this, nur für statische Klassen ($this bezieht sich auf die Instanz)
    }

}
