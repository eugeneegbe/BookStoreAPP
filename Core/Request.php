<?php

/**
 * Created by PhpStorm.
 * User: newbel
 * Date: 11/4/16
 * Time: 3:05 PM
 */
namespace  Bookstore\Core;

class Request
{
    const GET = 'GET';
    const POST = 'POST';

    private $domain;
    private  $path;
    private  $method;


    public function __construct()
    {
        $this->domain = $_SERVER['HTTP_HOST'];
        $this->path = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

    }

    public function getUrl() {

        return $this->domain.$this->path;

    }

    public function getDomain(){

        return $this->domain;

    }

    public function

}