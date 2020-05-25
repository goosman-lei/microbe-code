<?php
namespace MicrobeDemo;
class Feature extends \Microbe\Hook\Feature {
    protected function initEnv($request) {
        $this->set('user-agent', $_SERVER['HTTP_USER_AGENT']);
    }
}
