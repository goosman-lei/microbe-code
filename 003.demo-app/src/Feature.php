<?php
namespace MicrobeDemo;
class Feature extends \Microbe\Chain\Feature {
    protected function init($request) {
        $this->set('user-agent', $request->getServer('HTTP_USER_AGENT'));
    }
}
