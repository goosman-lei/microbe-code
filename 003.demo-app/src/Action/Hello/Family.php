<?php
namespace MicrobeDemo\Action\Hello;
class Family extends \Microbe\Scene\Webpage\Action {
    public function exec() {
        $name = $this->request->getQuery('name', 'Unknown');
        /* 非模板方式 */
        /*
        $this->response->appendBody("Hello, {$name}!<br />\n");
        if ($this->request->isMatch('use-ie')) {
            $this->response->appendBody("你使用的是IE<br />\n");
        } else {
            $this->response->appendBody("你使用的不是IE<br />\n");
        }
        */

        $this->response->abortNormal('Hello World!', 2020, [
            'name' => $name,
        ]);

        /* 模板方式 */
        $this->response->templateEngine->assign('name', $name);
    }
}
