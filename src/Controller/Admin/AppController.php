<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
// use Cake\Event\Event;
use Cake\Event\EventInterface;




class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        // $this->loadComponent('Flash');

        // // Authentification utilisateurs
        // $this->loadComponent('Auth', [
        //     'loginAction' => [
        //         'controller' => 'Users',
        //         'action' => 'login',
        //     ],
        //     'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
        //     'authenticate' => [
        //         'Form' => [
        //             'fields' => ['username' => 'email', 'password' => 'password']
        //         ]
        //     ],
        //     'storage' => 'Session'
        // ]);



        
        // $this->loadComponent('Auth', [
        //     'loginAction' => [
        //         'controller' => 'Users',
        //         'action' => 'login',
        //     ],
        //     'authError' => 'Acces non autorisé.',
        //     'authenticate' => [
        //         'Form' => [
        //             'fields' => ['username' => 'email', 'password' => 'password']
        //         ]
        //     ],
        //     'storage' => 'Session'
        // ]);

        // $this->Auth->setConfig('authenticate', ['Form']);

        // $this->Auth->setConfig('authenticate', [
        //     'Form' => ['userModel' => 'Users'],
        // ]);


        //$this->loadComponent('Auth');
        // if($this->request->prefix == 'admin'){
        //     $this->loadComponent('Auth', [
        //         'loginAction' => [
        //             'controller' => 'Users',
        //             'action' => 'login',
        //             'prefix' => 'admin'
        //         ],
        //         'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
        //         'authenticate' => [
        //             'Form' => [
        //                 'fields' => [
        //                     'username' => 'email',
        //                     'password' => 'password'
        //                 ],
        //                 'userModel' => 'Users'
        //             ],
        //         ],
        //         'loginRedirect' => [
        //             'controller' => 'Users',
        //             'action' => 'index'
        //         ],
        //         'logoutRedirect' => [
        //             'controller' => 'Users',
        //             'action' => 'login'
        //         ],
        //         'storage' => 'Session'
        //     ]);

        //     //$this->Auth->config('authenticate', ['Form']);

        //     //$this->Auth->config('authenticate', [
        //         //'Form' => ['userModel' => 'Users'],
        //     //]);

        //     $this->Auth->allow(['login', 'logout']);
        // }else{
        //     return
        //     $this->redirect(['controller' => 'Uers', 'action' => 'login']);
        // }

        // $this->loadComponent('Auth', [
        //         'loginAction' => [
        //             'controller' => 'Users',
        //             'action' => 'login',
        //             'prefix' => 'admin'
        //         ],
        //         'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
        //         'authenticate' => [
        //             'Form' => [
        //                 'fields' => [
        //                     'username' => 'email',
        //                     'password' => 'password'
        //                 ],
        //                 'userModel' => 'Users'
        //             ],
        //         ],
        //         'loginRedirect' => [
        //             'controller' => 'Users',
        //             'action' => 'index'
        //         ],
        //         'logoutRedirect' => [
        //             'controller' => 'Users',
        //             'action' => 'login'
        //         ],
        //         'storage' => 'Session'
        //     ]);

        //     $this->Auth->getConfig('authenticate', ['Form']);

        //     $this->Auth->getConfig('authenticate', [
        //         'Form' => ['userModel' => 'Users'],
        //     ]);

        // $this->Auth->allow(['login', 'logout']);



        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

    }


    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
        //$this->Auth->allow(['login', 'index', 'add']);
        // $this->Auth->allow(['login', 'logout']);
    }
}
