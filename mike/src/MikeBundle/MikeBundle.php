<?php

namespace MikeBundle;

use MikeBundle\Entity\User;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MikeBundle extends Bundle
{
    public function boot(){

//        $session = $this->getRequest()->getSession();
//
//        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){
//            /** @var User $user */
//            $user = $this->getUser()->getUsername();
//            $this->container->get('twig')->addGlobal('user', $user);
//        }else{
//            $user = "";
//        }
//

    }
}
