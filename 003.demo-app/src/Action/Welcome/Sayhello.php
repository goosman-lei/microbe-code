<?php
namespace MicrobeDemo\Action\Welcome;
class Sayhello extends \Microbe\Action {
    public function execute() {
        $this->templateEngine->assign([
            'code' => 0,
            'msg'  => 'success',
            'datas' => [
                'hello' => $this->request->getQuery('name') ?: 'Everyone',
            ],
        ]);
    }
}
