<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TriRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AjouterType;
use App\Entity\Tri;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Response;

class ajouterController extends AbstractController{

/**
*@var TriRepository
*/
private $repository;

private $manager;

public function __construct(TriRepository $repository, EntityManagerInterface $manager){
  $this->manager = $manager;
  $this->repository = $repository;
}
/**
*
*@return \Symfony\Component\HttpFoundation\Response;
*/

  public function AjouterType(Tri $Tri = null, Request $request, EntityManagerInterface $manager){
  if(!$Tri){ //Si tri est vide alors on crée une tache //
  $Tri = new Tri();
  }
  $form = $this->createForm(AjouterType::class, $Tri); // On envoie le formulaire qui a était créer /:
  $form->handleRequest($request); // permet de recuperer et d'envoyer la requette //
 if ($form->isSubmitted() && $form->isValid()){ // si le formulaire est envoyer //
              $modif = $Tri->getId() !== null; //
              $manager->persist($Tri); // Les infos entrer dans le formulaire sont recuperer //
              $manager->flush(); //On envoie les données dans la BDD //
              return $this->redirectToRoute('home'); // on redirige vers la page d'accueil //
}
return $this->render('Pages/ajouter.html.twig',[ // Si tri est vide alors on envoie le formulaire permettant a l'utiisateur d'entrer les données //
    'Tri' => $Tri,
    'form' => $form->createView(),
    'ismodificated' => $Tri->getId() !== null
]);
   return $this->redirectToRoute('Pages/Home.html.twig');
   }

}

 ?>
