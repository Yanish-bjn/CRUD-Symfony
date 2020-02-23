<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TriRepository;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController{

  /**
  *@var TriRepository
  */
  private $repository;

  public function __construct(TriRepository $repository){
    $this->repository = $repository;
  }
  public function index()
  {
    $a = $this->repository->findAll(); //On recuperer les données de la BDD //
      return $this->render('Pages/Home.html.twig', compact('a')); //On redirige les les données vers la page home.html.twig et on affiche les données sous forme de tableau //
  }

}
 ?>
