<?php

namespace Application\Controller;

use Application\Form\ProdutoForm;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class ProdutosController extends AbstractActionController
{

    public function indexAction()
    {
        
    }

    public function novoAction()
    {
        $form = new ProdutoForm();

        $view = new ViewModel(array(
            'form' => $form
        ));
    }
}