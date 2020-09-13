<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController {

    /**
     * @Route("/",name="home")
     */
    function index(PropertyRepository $propertyRepository):Response
    {
       $properties=$propertyRepository->findLastest();
        return new Response($this->renderView('home.html.twig',array('properties'=>$properties)));
    }

    /**
     * @Route("/show",name="show")
     */
    function show(PropertyRepository $propertyRepository,Request $request):Response
    {
        //return new Response($this->renderView('show.html.twig',array('slug'=>$request->request->get('slug'))));
        $id=$request->query->get('id');
        $property=$propertyRepository->find($id);
        return new Response($this->renderView('show.html.twig',array('property'=>$property )));

    }

}



