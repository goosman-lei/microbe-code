<?php
namespace MicrobeDemo\Daemon\Welcome;
class Sayhi extends \Microbe\Scene\Daemon\Action {
    public function exec() {
        printf("ENV_A: %s\n", $this->request->getEnv('ENV_A', 'Haha Default'));
        echo "\nOptions:\n";
        print_r($this->request->getOptions());
        echo "\nArgs:\n";
        print_r($this->request->getArgs());
    }
}
