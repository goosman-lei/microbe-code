<?php
namespace MicrobeDemo\Action\Welcome;
class Sayhi extends \Microbe\Scene\Webpage\Action {
    public function exec() {
        $name = $this->request->getQuery('name', 'Unknown');
        $this->response->appendBody("Hello, {$name}!<br />\n");
        if ($this->request->isMatch('use-ie')) {
            $this->response->appendBody("你使用的是IE<br />\n");
        } else {
            $this->response->appendBody("你使用的不是IE<br />\n");
        }
    }
}
