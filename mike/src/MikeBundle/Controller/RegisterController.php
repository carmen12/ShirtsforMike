<?php

namespace MikeBundle\Controller;

use MikeBundle\Entity\User;
use MikeBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\Security\Core\User\User;

class RegisterController extends Controller
{
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();

            $user->upload();
            $em->persist($user);
            $em->flush();

            $this->addFlash('notice', 'Success! Thank you for registering!');

            return $this->redirectToRoute('register');
        }


        return $this->render('MikeBundle:register:register.html.twig', array(
            'formRegister' => $form->createView()
        ));
    }
}
