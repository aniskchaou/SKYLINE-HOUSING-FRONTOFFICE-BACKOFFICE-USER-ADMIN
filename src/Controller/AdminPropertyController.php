<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\PropertyType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AdminPropertyController  extends AbstractController{

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
     * @Route("/admin/properties",name="admin.property.index")
     */
    function index():Response
    {  
        $properties=$this->repository->findAll();
        $this->em->flush();
        return new Response($this->renderView('admin/properties.html.twig',array('properties'=>$properties)));
    }

     /**
     * @Route("/admin/edit",name="admin.property.edit")
     */
    function edit(Request $request,ValidatorInterface $validator):Response
    {
        $id=$request->query->get('id');
        $property=$this->repository->find($id);
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            
            
            
            
            
            $errors = $validator->validate($property);

            if (count($errors) > 0) {
                /*
                * Uses a __toString method on the $errors variable which is a
                * ConstraintViolationList object. This gives us a nice string
                * for debugging.
                */
                $errorsString = (string) $errors;

                return new Response($errorsString);
            }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            $this->em->flush();
            $this->addFlash('info','property has been updated');
            return $this->redirectToRoute('admin.property.index');
        }

        return new Response($this->renderView('admin/edit.html.twig',array(
        'property'=>$property ,
        'form' => $form->createView())));

    }

     /**
     * @Route("/admin/create",name="admin.property.create")
     */
    function create(Request $request):Response
    {
        
        $property=new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $this->em->persist($property);
            $this->em->flush();
            $this->addFlash('info','property has been created');
            return $this->redirectToRoute('admin.property.index');
        }

        return new Response($this->renderView('admin/create.html.twig',array(
        'property'=>$property ,
        'form' => $form->createView())));

    }

    /**
     * @Route("/admin/delete",name="admin.property.delete")
     */
    function delete(Request $request):Response
    {
        
        $id=$request->query->get('id');
        $property=$this->repository->find($id);
        $this->em->remove($property);
        $this->em->flush();
        $this->addFlash('info','property has been deleted');
        return $this->redirectToRoute('admin.property.index');
        
    }

}



