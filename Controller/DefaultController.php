<?php

namespace Google\ReCaptchaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GoogleReCaptchaBundle:Default:index.html.twig', array('name' => $name));
    }
}
