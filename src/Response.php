<?php

class Response {
    protected $content = '';
    protected $header = [];
    protected $statusCode = 200;

    public function __construct($content, $header = [], $statusCode = 200) {
        $this->content = $content;
        $this->header = $header;
        $this->statusCode = $statusCode;
    }

    public function send() {
        http_response_code($this->statusCode);
        foreach($this->header as $name => $value) {
            header($name.': '.$value);
        }
        echo $this->content;
    }
}
