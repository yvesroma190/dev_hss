<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Event\EventInterface;

//use Cake\Core\InstanceConfigTrait;


class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        // Authentification utilisateurs
        $this->loadComponent('Auth');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
            'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],
                    'userModel' => 'Users'
                ],
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'storage' => 'Session'
        ]);
        /*$this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                        ]
                    ]
                ],
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                // Si pas autorisé, on renvoit sur la page précédente
                'unauthorizedRedirect' => $this->referer()
            ]);

        $this->Auth->allow(['login', 'logout']);*/



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
        $this->Auth->allow(['login', 'logout']);
    }
}
