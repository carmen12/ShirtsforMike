<?php

namespace MikeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MikeBundle\Entity\Sizes;
use MikeBundle\Form\SizesType;

/**
 * Sizes controller.
 *
 */
class SizesController extends Controller
{
    /**
     * Lists all Sizes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sizes = $em->getRepository('MikeBundle:Sizes')->findAll();

        return $this->render('sizes/index.html.twig', array(
            'sizes' => $sizes,
        ));
    }

    /**
     * Creates a new Sizes entity.
     *
     */
    public function newAction(Request $request)
    {
        $size = new Sizes();
        $form = $this->createForm(new SizesType(), $size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($size);
            $em->flush();

            return $this->redirectToRoute('sizes_show', array('id' => $size->getId()));
        }

        return $this->render('sizes/new.html.twig', array(
            'size' => $size,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sizes entity.
     *
     */
    public function showAction(Sizes $size)
    {
        $deleteForm = $this->createDeleteForm($size);

        return $this->render('sizes/show.html.twig', array(
            'size' => $size,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sizes entity.
     *
     */
    public function editAction(Request $request, Sizes $size)
    {
        $deleteForm = $this->createDeleteForm($size);
        $editForm = $this->createForm(new SizesType(), $size);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($size);
            $em->flush();

            return $this->redirectToRoute('sizes_edit', array('id' => $size->getId()));
        }

        return $this->render('sizes/edit.html.twig', array(
            'size' => $size,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sizes entity.
     *
     */
    public function deleteAction(Request $request, Sizes $size)
    {
        $form = $this->createDeleteForm($size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($size);
            $em->flush();
        }

        return $this->redirectToRoute('sizes_index');
    }

    /**
     * Creates a form to delete a Sizes entity.
     *
     * @param Sizes $size The Sizes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sizes $size)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sizes_delete', array('id' => $size->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
