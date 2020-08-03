<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Flash');

        // Authentification utilisateurs
        if(!empty($this->request->getParam(['prefix']))){
            if($this->request->getParam(['prefix']) == 'admin'){
                $this->loadComponent('Auth', [
                    'loginAction' => [
                        'controller' => 'Users',
                        'action' => 'login',
                    ],
					'loginRedirect' => [
						'controller' => 'Souscriptions',
						'action' => 'index'
					],
					'logoutRedirect' => [
						'controller' => 'Users',
						'action' => 'login'
					],
                    'authError' => 'Accès interdit.',
                    'authenticate' => [
                        'Form' => [
                            'fields' => ['username' => 'email', 'password' => 'password']
                        ]
                    ],
                    'storage' => [
                        'className' => 'Session',
                        'key' => 'Auth.Admin',
                    ]
                ]);
                // $this->Auth->getConfig('authenticate', ['Form']);

                // $this->Auth->getConfig('authenticate', [
                //     'Form' => ['userModel' => 'Users'],
                // ]);
                $this->viewBuilder()->setLayout('admin');
                // $this->Auth->allow(['login', 'index', 'add']);
            }
        }else{
            //Authentification pour le frontend
            $this->loadComponent('Auth', [
                'loginAction' => [
                    'controller' => 'Clients',
                    'action' => 'login',
                ],
                'loginRedirect' => [
                    'controller' => 'Souscriptions',
                    'action' => 'index'
                ],
                'logoutRedirect' => [
                    'controller' => 'Offres',
                    'action' => 'index'
                ],
                'authError' => 'Accès interdit.',
                'authenticate' => [
                    'Form' => [
                        'fields' => ['username' => 'email', 'password' => 'password']
                    ]
                ],
                'storage' => 'Session'
            ]);
            // $this->Auth->getConfig('authenticate', ['Form']);

            $this->Auth->getConfig('authenticate', [
                'Form' => ['userModel' => 'Clients'],
            ]);
            $this->Auth->allow(['login', 'index', 'add','subscribe', 'payment']);
        }

        


        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

        /*$this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
            'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
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

        $this->Auth->config('authenticate', ['Form']);

        $this->Auth->config('authenticate', [
            'Form'=>['userModel'=>'Users'],
            ]);*/


    }

	
}
