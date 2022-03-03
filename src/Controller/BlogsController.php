<?php

declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController
{

    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout('blog');
    }
    public function home()
    {
        $this->loadModel('Articles');

        $articles = $this->Articles->find('all')->order(['Articles.id DESC'])->limit(3);

        $this->set('articles', $this->paginate($articles,['limit' => 3]));
    }
    
    public function about(){
        
    }
    public function contact(){

    }
}
