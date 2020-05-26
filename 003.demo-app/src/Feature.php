<?php
namespace MicrobeDemo;
class Feature extends \Microbe\Chain\Feature {
    protected function init($request) {
        $this->set('user-agent', $_SERVER['HTTP_USER_AGENT']);
    }
}
