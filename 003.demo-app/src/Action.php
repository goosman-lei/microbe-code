<?php
namespace MicrobeDemo;
class Action extends \Microbe\Chain {
    public function exec($request, $response) {
        $name = $request->getQuery('name', 'XXX');

        if ($request->isMatch('use-ie')) {
            $response->appendBody("你好 {$name}, 请远离IE!\n<br />");
        } else {
            $response->appendBody("你好 {$name}, 你已经远离IE!\n<br />");
        }

    }
}
