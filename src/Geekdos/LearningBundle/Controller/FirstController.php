<?php

namespace Geekdos\LearningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FirstController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekdosLearningBundle:First:index.html.twig', array(
            // ...
        ));
    }

}
