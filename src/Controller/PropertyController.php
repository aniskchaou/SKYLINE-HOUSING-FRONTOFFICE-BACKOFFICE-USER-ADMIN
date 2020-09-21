<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class PropertyController  extends AbstractController{

    /**
     * @var PropertyRepository
     */
    private $repository;
   
    /**
     * @var EntityManagerInterface
     */
    private  $em;

   public function __construct(PropertyRepository $repository, EntityManagerInterface $em) {
       $this->repository = $repository;
       $this->em=$em;
   }
   
   
    /**
     * @Route("/properties",name="properties")
     */
    function index(Request $request, PropertyRepository $propertyRepository,PaginatorInterface $paginator):Response
    {  
        $properties = $paginator->paginate(
            $propertyRepository->findAllPagination(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );

        return new Response($this->renderView('properties.html.twig',array('properties'=>$properties)));
    }
}



