<?php
namespace MicrobeDemo\Daemon\Welcome;
class Sayhi extends \Microbe\Scene\Daemon\Action {
    public function exec() {
        $this->response->print("ENV_A: " . $this->request->getEnv('ENV_A') . "\n");
        $this->response->printf("Options:\n%s\n\n", print_r($this->request->getOptions(), TRUE));
        $this->response->printf("Args:\n%s\n\n", print_r($this->request->getArgs(), TRUE));
    }
}
