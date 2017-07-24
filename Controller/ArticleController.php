<?php

namespace Core\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function viewAction()
    {
        return $this->render('CoreArticleBundle:Article:view.html.twig');
    }
    public function createAction()
    {
        return $this->render('CoreArticleBundle:Article:create.html.twig');
    }
    public function editAction()
    {
        return $this->render('CoreArticleBundle:Article:edit.html.twig');
    }
    public function deleteAction()
    {
        return $this->render('CoreArticleBundle:Article:delete.html.twig');
    }
}
