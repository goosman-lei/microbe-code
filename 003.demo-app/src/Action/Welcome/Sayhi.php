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

        /*
        $mysqli = \Microbe\Microbe::$ins->workApp->resourceFactory->get('mysqli://default/master');
        $rs     = $mysqli->query('SELECT * FROM user');
        $users  = [];
        while ($row = $rs->fetch_assoc()) {
            array_push($users, $row);
        }
        $this->response->templateEngine->assign('users', $users);
        */

        /*
        $userInfoProxy = \Microbe\Microbe::$ins->workApp->serviceFactory->get('service', 'UserInfo');
        $userInfoRes   = $userInfoProxy->getInfo($name);
        if (\Microbe\Service::isSuccess($userInfoRes)) {
            $userInfo = $userInfoRes['data'];
            $this->response->templateEngine->assign('userInfo', $userInfo);
        }
        */

        $userModel = new \MicrobeDemo\Model\User();

        /*
        $users = $userModel->getRows();
        $this->response->templateEngine->assign('users-from-model', $users);
        */

        /*
        $users = $userModel->getRows([':ge', 'score', 80]);
        $this->response->templateEngine->assign('users-from-model-score-ge-80', $users);
        */

        /*
        $user = $userModel->getRow([':ge', 'score', 80]);
        $this->response->templateEngine->assign('user-from-model-score-ge-80', $user);
        */

        /*
        $cnt = $userModel->count([':ge', 'score', 80]);
        $this->response->templateEngine->assign('user-count-from-model-score-ge-80', $cnt);
        */

        /*
        $user = $userModel->getRow(['id', 1]);
        $this->response->templateEngine->assign('user-from-model-id-eq-1', $user);
        $userModel->update(['name' => 'J.K.', 'score = score + 1'], ['id', 1]);
        $user = $userModel->getRow(['id', 1]);
        $this->response->templateEngine->assign('user-from-model-id-eq-1-after-update', $user);
        */

        /*
        $user = $userModel->getRow(['id', 2]);
        $this->response->templateEngine->assign('user-from-model-id-eq-2', $user);
        $userModel->replace(['id' => 2, 'name' => 'Tom && Jerry']);
        $user = $userModel->getRow(['id', 2]);
        $this->response->templateEngine->assign('user-from-model-id-eq-2-after-replace', $user);
        */

        /*
        $users = $userModel->getRows(['id', [3, 4]]);
        $this->response->templateEngine->assign('users-from-model-id-in-3~4', $users);
        $userModel->multiReplace([
            ['id' => 3, 'name' => 'John.'],
            ['id' => 4, 'name' => 'Lucas.'],
        ]);
        $users = $userModel->getRows(['id', [3, 4]]);
        $this->response->templateEngine->assign('users-from-model-id-in-3~4-after-multi-replace', $users);
        */

        /*
        $userModel->insert([
            'name'     => 'Malcolm',
            'passwd'   => 123456,
            'location' => 'Germany',
            'gender'   => 'male',
            'province' => 'Berlin',
            'ctime'    => time(),
            'score'    => 76,
        ]);
        $user = $userModel->getRow(['id', $userModel->getLastId()]);
        $this->response->templateEngine->assign('last-insert-id', $userModel->getLastId());
        $this->response->templateEngine->assign('last-insert-user', $user);
        */

        /*
        $user = $userModel->getRow(['id', 6]);
        $this->response->templateEngine->assign('user-id-6', $user);
        $userModel->insert([
            'id'       => 6,
            'name'     => 'Malcolm',
            'passwd'   => 123456,
            'location' => 'Germany',
            'gender'   => 'male',
            'province' => 'Berlin',
            'ctime'    => time(),
            'score'    => 76,
        ], ['name', 'passwd', 'location']);
        $user = $userModel->getRow(['id', 6]);
        $this->response->templateEngine->assign('user-id-6-after-insert-ondup', $user);
        */

        /*
        $userModel->multiInsert([
            [
                'name'     => 'John',
                'passwd'   => 123456,
                'location' => 'Germany',
                'gender'   => 'male',
                'province' => 'Berlin',
                'ctime'    => time(),
                'score'    => 76,
            ],
            [
                'name'     => 'Nikita',
                'passwd'   => 123456,
                'location' => 'America',
                'gender'   => 'male',
                'province' => 'CA',
                'ctime'    => time(),
                'score'    => 79,
            ],
        ]);
        $users = $userModel->getRows([], '*', 2, 0, 'id DESC');
        $this->response->templateEngine->assign('multi-multi-insert-users', $users);
        */

        /*
        $cnt = $userModel->count();
        $this->response->templateEngine->assign('user-count', $cnt);
        $userModel->delete([':gt', 'id', 10], 1);
        $cnt = $userModel->count();
        $this->response->templateEngine->assign('user-count-after-delete-id-gt-15', $cnt);
        */
    }
}
