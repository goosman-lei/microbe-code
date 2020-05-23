<?php
namespace MicrobeDemo\Action\Welcome;
class Sayhi extends \Microbe\Action {
    public function execute() {
        $this->templateEngine->assign('name', $this->request->getQuery('name'));
    }
}
