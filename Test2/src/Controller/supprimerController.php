<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TriRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\supprimerType;
use App\Entity\Tri;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Response;

class supprimerController extends AbstractController{

/**
*@var TriRepository
*/

private $repository;

public function __construct(TriRepository $repository, EntityManagerInterface $manager){
  $this->repository = $repository;
  $this->manager = $manager;
}

/**
* @Route("/supprimer/{id}", name="tri_supprimer")
*
*/

public function supprimerType(Tri $Tri){
  $manager = $this->getDoctrine()->getmanager(); // Permets de récupérer et d'envoyer la requête //
  $manager->remove($Tri);  // On supprime l'ancienne tache //
  $manager->flush(); // On envoie la requête dans la BDD //
  return $this->redirectToRoute('home'); // On redirige vers la page d'accueil //
  }
}
  ?>
