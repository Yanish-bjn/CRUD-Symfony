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
  $form = $this->createForm(AjouterType::class, $Tri); // On envoie le formulaire qui a été créer/:
  $form->handleRequest($request); // Permets de récupérer et d'envoyer la requête //
 if ($form->isSubmitted() && $form->isValid()){ // si le formulaire est envoyé //
              $modif = $Tri->getId() !== null; //
              $manager->persist($Tri); // Les infos entrées dans le formulaire sont récupéré //
              $manager->flush(); //On envoie les données dans la BDD //
              return $this->redirectToRoute('home'); // on redirige vers la page d'accueil //
}
return $this->render('Pages/ajouter.html.twig',[ // Si la variable tri est vide alors on envoie le formulaire permettant à l'utilisateur d'entrer les données //
    'Tri' => $Tri,
    'form' => $form->createView(),
    'ismodificated' => $Tri->getId() !== null
]);
   return $this->redirectToRoute('Pages/Home.html.twig');
   }

}

 ?>
