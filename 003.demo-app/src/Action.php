<?php
namespace MicrobeDemo;
class Action extends \Microbe\Chain {
    public function exec($request, $response) {
        $name = $request->getQuery('name', 'Unknown');
        $response->appendBody("Hello, {$name}!<br />\n");
        if ($request->isMatch('use-ie')) {
            $response->appendBody("你使用的是IE<br />\n");
        } else {
            $response->appendBody("你使用的不是IE<br />\n");
        }
    }
}
