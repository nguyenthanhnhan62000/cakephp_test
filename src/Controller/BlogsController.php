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

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
    }
    public function home()
    {
        $this->loadModel('Articles');

        $articles = $this->Articles->find('all')->order(['Articles.id DESC']);


        $articleList = $this->Articles->find('list')->limit('8');

        $this->set('articles', $this->paginate($articles, ['limit' => 2]));
        $this->set('articleList', $articleList);
    }

    public function about()
    {
    }
    public function contact()
    {
    }
    public function view($id = 1)
    {
        $this->loadModel('Articles');
        $articles = $this->Articles->get($id);

        $this->set('articles', $articles);
    }
}
