<?php
namespace MicrobeDemo\Action\Welcome;
class Sayhi extends \Microbe\Scene\Webpage\Action {
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

        $mysqli = \Microbe\Microbe::$ins->workApp->resourceFactory->get('mysqli://default/master');
        $rs     = $mysqli->query('SELECT * FROM user');
        $users  = [];
        while ($row = $rs->fetch_assoc()) {
            array_push($users, $row);
        }

        $userInfoProxy = \Microbe\Microbe::$ins->workApp->serviceFactory->get('service', 'UserInfo');
        $userInfoRes   = $userInfoProxy->getInfo($name);
        if (\Microbe\Service::isSuccess($userInfoRes)) {
            $userInfo = $userInfoRes['data'];
            $this->response->templateEngine->assign('userInfo', $userInfo);
            $this->response->templateEngine->assign('users', $users);
        }
    }
}
