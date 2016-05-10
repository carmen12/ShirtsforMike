<?php

namespace MikeBundle\Controller;

use MikeBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function searchAction(Request $request)
    {
       $item = $request->query->get('s');
//  If there is no search term
        if ($item == null){
            return $this->render('MikeBundle:search:search.html.twig');
        }

        $products = $this->getDoctrine()->getManager();
        $query = $products->createQueryBuilder()
            ->from('MikeBundle:Products', 'p')
            ->select("p")
            ->where("p.name LIKE :item ESCAPE '!'")
            ->setParameter('item', '%'.$item.'%')
            ->getQuery();
        $products = $query->getResult();

//  If nothing matches the search term
        if (!$products) {
            return $this->render('MikeBundle:search:search.html.twig',  array('not_found' => 'No shirt matches your search term.'));
        }


        return $this->render('MikeBundle:search:search.html.twig',
            array('products' => $products, 'search_term'=> $item));

    }
}
