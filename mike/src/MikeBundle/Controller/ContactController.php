<?php

namespace MikeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MikeBundle\Entity\Form;
use MikeBundle\Form\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactController extends Controller
{
    public function newAction(Request $request)
    {

        $contact =new Form();
        $contact->setName('');
        $contact->setEmail('');
        $contact->setMessage('');

//        $form = $this->createFormBuilder($contact)
//            ->add('name', TextType::class, array('label' => 'Name'))
//            ->add('email', TextType::class, array('label' => 'Email'))
//            ->add('message', TextareaType::class, array('label' => 'Message'))
//            ->add('submit', SubmitType::class, array('label' => 'Send'))
//            ->getForm();

        $form = $this->createForm(FormType::class, $contact);

        $form->handleRequest($request);


        if ($form->isValid() && $form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $this->addFlash('notice', 'Thanks for the email!  I\'ll be in touch shortly.');

            return $this->redirectToRoute('contact');
        }


        return $this->render('MikeBundle:contact:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}