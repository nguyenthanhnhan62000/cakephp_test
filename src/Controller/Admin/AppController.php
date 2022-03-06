<?php

declare(strict_types=1);


namespace App\Controller\Admin;

use Cake\Controller\Controller;


class AppController extends Controller
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');


        $this->loadComponent('Authentication.Authentication');

        // $this->loadComponent('Auth', [
        //     'authenticate' => [
        //         'Form' => [
        //             'fields' => [
        //                 'username' => 'email',
        //                 'password' => 'password'
        //             ]
        //         ]
        //     ],
        //     'loginAction' => [
        //         'controller' => 'Users',
        //         'action' => 'login'
        //     ],
        //     'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
        // ]);


        // $this->set('username', $this->Auth->user('email'));

        $this->loadComponent('UserLogs');

        // $this->Auth->allow(['login', 'index']);

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        // $this->Authentication->addUnauthenticatedActions(['index', 'view']);
    }
}
