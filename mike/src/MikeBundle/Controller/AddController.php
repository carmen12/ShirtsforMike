<?php

namespace MikeBundle\Controller;
use MikeBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AddController extends Controller
{
    public function createAction()
    {
        $em = $this->getDoctrine()->getManager();

        $product1 = new Products();
        $product1->setSku(101);
        $product1->setName("Logo Shirt, Red");
        $product1->setImg('bundles/framework/images/img/shirts/shirt-101.jpg');
        $product1->setPrice(18.00);
        $product1->setPaypal("9P7DLECFD4LKE");


        $product2 = new Products();
        $product2->setSku(102);
        $product2->setName("Mike the Frog Shirt, Black");
        $product2->setImg('bundles/framework/images/img/shirts/shirt-102.jpg');
        $product2->setPrice(20.00);
        $product2->setPaypal("SXK3THN2EES3J");

        $product3 = new Products();
        $product3->setSku(103);
        $product3->setName("Mike the Frog Shirt, Blue");
        $product3->setImg('bundles/framework/images/img/shirts/shirt-103.jpg');
        $product3->setPrice(20.00);
        $product3->setPaypal("7T8LK5WXT5Q9J");

        $product4 = new Products();
        $product4->setSku(104);
        $product4->setName("Logo Shirt, Green");
        $product4->setImg('bundles/framework/images/img/shirts/shirt-104.jpg');
        $product4->setPrice(18.00);
        $product4->setPaypal("YKVL5F87E8PCS");

        $product5 = new Products();
        $product5->setSku(105);
        $product5->setName("Mike the Frog Shirt, Yellow");
        $product5->setImg('bundles/framework/images/img/shirts/shirt-105.jpg');
        $product5->setPrice(25.00);
        $product5->setPaypal("4CLP2SCVYM288");

        $product6 = new Products();
        $product6->setSku(106);
        $product6->setName("Logo Shirt, Gray");
        $product6->setImg('bundles/framework/images/img/shirts/shirt-106.jpg');
        $product6->setPrice(20.00);
        $product6->setPaypal("TNAZ2RGYYJ396");

        $product7 = new Products();
        $product7->setSku(107);
        $product7->setName("Logo Shirt, Teal");
        $product7->setImg('bundles/framework/images/img/shirts/shirt-107.jpg');
        $product7->setPrice(20.00);
        $product7->setPaypal("S5FMPJN6Y2C32");

        $product8 = new Products();
        $product8->setSku(108);
        $product8->setName("Mike the Frog Shirt, Orange");
        $product8->setImg('bundles/framework/images/img/shirts/shirt-108.jpg');
        $product8->setPrice(25.00);
        $product8->setPaypal("JMFK7P7VEHS44");

        $product9 = new Products();
        $product9->setSku(109);
        $product9->setName("Get Coding Shirt, Gray");
        $product9->setImg('bundles/framework/images/img/shirts/shirt-109.jpg');
        $product9->setPrice(20.00);
        $product9->setPaypal("B5DAJHWHDA4RC");

        $product10 = new Products();
        $product10->setSku(110);
        $product10->setName("HTML5 Shirt, Orange");
        $product10->setImg('bundles/framework/images/img/shirts/shirt-110.jpg');
        $product10->setPrice(22.00);
        $product10->setPaypal("6T2LVA8EDZR8L");

        $product11 = new Products();
        $product11->setSku(111);
        $product11->setName("CSS3 Shirt, Gray");
        $product11->setImg('bundles/framework/images/img/shirts/shirt-111.jpg');
        $product11->setPrice(22.00);
        $product11->setPaypal("MA2WQGE2KCWDS");
/////////////////////////////////////////////////////////
        $product12 = new Products();
        $product12 -> setSku(112);
        $product12 -> setName("HTML5 Shirt, Blue");
        $product12 -> setImg("bundles/framework/images/img/shirts/shirt-112.jpg");
        $product12 -> setPrice(22.00);
        $product12 -> setPaypal('FWR955VF5PALA');

        $product13 = new Products();
        $product13 -> setSku(113);
        $product13 -> setName("CSS3 Shirt, Black");
        $product13 -> setImg("bundles/framework/images/img/shirts/shirt-113.jpg");
        $product13 -> setPrice(22.00);
        $product13 -> setPaypal('4ELH2M2FW7272');

        $product14 = new Products();
        $product14 -> setSku(114);
        $product14 -> setName("PHP Shirt, Yellow");
        $product14 -> setImg("bundles/framework/images/img/shirts/shirt-114.jpg");
        $product14 -> setPrice(24.00);
        $product14 -> setPaypal('AT3XQ3ZVP2DZG');

        $product15 = new Products();
        $product15 -> setSku(115);
        $product15 -> setName("PHP Shirt, Purple");
        $product15 -> setImg("bundles/framework/images/img/shirts/shirt-115.jpg");
        $product15 -> setPrice(24.00);
        $product15 -> setPaypal('LYESEKV9JWE3A');

        $product16 = new Products();
        $product16 -> setSku(116);
        $product16 -> setName("PHP Shirt, Green");
        $product16 -> setImg("bundles/framework/images/img/shirts/shirt-116.jpg");
        $product16 -> setPrice(24.00);
        $product16 -> setPaypal('KT7MRRJUXZR34');

        $product17 = new Products();
        $product17 -> setSku(117);
        $product17 -> setName("Get Coding Shirt, Red");
        $product17 -> setImg("bundles/framework/images/img/shirts/shirt-117.jpg");
        $product17 -> setPrice(20.00);
        $product17 -> setPaypal('5UXJG8PXRXFKE');

        $product18 = new Products();
        $product18 -> setSku(118);
        $product18 -> setName("Mike the Frog Shirt, Purple");
        $product18 -> setImg("bundles/framework/images/img/shirts/shirt-118.jpg");
        $product18 -> setPrice(25.00);
        $product18 -> setPaypal('KHP8PYPDZZFTA');

        $product19 = new Products();
        $product19 -> setSku(119);
        $product19 -> setName("CSS3 Shirt, Purple");
        $product19 -> setImg("bundles/framework/images/img/shirts/shirt-119.jpg");
        $product19 -> setPrice(22.00);
        $product19 -> setPaypal('BFJRFE24L93NW');

        $product20 = new Products();
        $product20 -> setSku(120);
        $product20 -> setName("HTML5 Shirt, Red");
        $product20 -> setImg("bundles/framework/images/img/shirts/shirt-120.jpg");
        $product20 -> setPrice(22.00);
        $product20 -> setPaypal('RUVJSBR9FXXWQ');
////////////////////////////////////////////////////
        $product21 = new Products();
        $product21 -> setSku(121);
        $product21 -> setName("Get Coding Shirt, Blue");
        $product21 -> setImg("bundles/framework/images/img/shirts/shirt-121.jpg");
        $product21 -> setPrice(20.00);
        $product21 -> setPaypal('PGN6ULGFZTXL4');

        $product22 = new Products();
        $product22->setSku(122);
        $product22->setName('PHP Shirt, Gray');
        $product22->setImg('bundles/framework/images/img/shirts/shirt-122.jpg');
        $product22->setPrice(24.00);
        $product22->setPaypal('PYR4QH97W2TSJ');

        $product23 = new Products();
        $product23->setSku(123);
        $product23->setName('Mike the Frog Shirt, Green');
        $product23->setImg('bundles/framework/images/img/shirts/shirt-123.jpg');
        $product23->setPrice(25.00);
        $product23->setPaypal('STDAUJJTSPT54');

        $product24 = new Products();
        $product24->setSku(124);
        $product24->setName('Logo Shirt, Yellow');
        $product24->setImg('bundles/framework/images/img/shirts/shirt-124.jpg');
        $product24->setPrice(20.00);
        $product24->setPaypal('2R2U74KWU5RXG');

        $product25 = new Products();
        $product25->setSku(125);
        $product25->setName('CSS3 Shirt, Blue');
        $product25->setImg('bundles/framework/images/img/shirts/shirt-125.jpg');
        $product25->setPrice(20.00);
        $product25->setPaypal('GJG7F8EW3XFAS');

        $product26 = new Products();
        $product26->setSku(126);
        $product26->setName('Doctype Shirt, Green');
        $product26->setImg('bundles/framework/images/img/shirts/shirt-126.jpg');
        $product26->setPrice(25.00);
        $product26->setPaypal('QW2LFRYGU7L4Q');

        $product27 = new Products();
        $product27->setSku(127);
        $product27->setName('Logo Shirt, Purple');
        $product27->setImg('bundles/framework/images/img/shirts/shirt-127.jpg');
        $product27->setPrice(20.00);
        $product27->setPaypal('GFV6QVRMJU7F8');

        $product28 = new Products();
        $product28->setSku(128);
        $product28->setName('Doctype Shirt, Purple');
        $product28->setImg('bundles/framework/images/img/shirts/shirt-128.jpg');
        $product28->setPrice(25.00);
        $product28->setPaypal('BARQMHMB565P');

        $product29 = new Products();
        $product29->setSku(129);
        $product29->setName('Get Coding Shirt, Green');
        $product29->setImg('bundles/framework/images/img/shirts/shirt-129.jpg');
        $product29->setPrice(20.00);
        $product29->setPaypal('DH9GXABU3P8GS');

        $product30 = new Products();
        $product30->setSku(130);
        $product30->setName('HTML5 Shirt, Teal');
        $product30->setImg('bundles/framework/images/img/shirts/shirt-130.jpg');
        $product30->setPrice(22.00);
        $product30->setPaypal('4LZ3EUVCBENE4');

        $product31 = new Products();
        $product31->setSku(131);
        $product31->setName('Logo Shirt, Orange');
        $product31->setImg('bundles/framework/images/img/shirts/shirt-131.jpg');
        $product31->setPrice(20.00);
        $product31->setPaypal('7BNDYJBKWD36431');

        $product32 = new Products();
        $product32->setSku(132);
        $product32->setName('Mike the Frog Shirt, Red');
        $product32->setImg('bundles/framework/images/img/shirts/shirt-132.jpg');
        $product32->setPrice(25.00);
        $product32->setPaypal('Y6EQRE445MYYW');


        $em->persist($product1);
        $em->persist($product2);
        $em->persist($product3);
        $em->persist($product4);
        $em->persist($product5);
        $em->persist($product6);
        $em->persist($product7);
        $em->persist($product8);
        $em->persist($product9);
        $em->persist($product10);
        $em->persist($product11);
        $em->persist($product12);
        $em->persist($product13);
        $em->persist($product14);
        $em->persist($product15);
        $em->persist($product16);
        $em->persist($product17);
        $em->persist($product18);
        $em->persist($product19);
        $em->persist($product20);
        $em->persist($product21);
        $em->persist($product22);
        $em->persist($product23);
        $em->persist($product24);
        $em->persist($product25);
        $em->persist($product26);
        $em->persist($product27);
        $em->persist($product28);
        $em->persist($product29);
        $em->persist($product30);
        $em->persist($product31);
        $em->persist($product32);

        $em->flush();

        return new Response('Saved the new product(s).');
    }
}
