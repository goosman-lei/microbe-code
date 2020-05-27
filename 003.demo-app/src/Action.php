<?php
namespace MicrobeDemo;
class Action extends \Microbe\Chain {
    public function exec($request, $response) {
        $name = $request->getQuery('name', 'Unknown');
        $response->appendBody("Hello, {$name}!");
    }
}
