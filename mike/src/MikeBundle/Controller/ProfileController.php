<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function profileAction()
    {
        return $this->render('MikeBundle:register:profile.html.twig');
    }
}
