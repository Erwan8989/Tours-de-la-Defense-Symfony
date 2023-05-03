<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class indexController extends AbstractController
{
	/**
	 * Page d'accueil
	 *
	 * @Route("/home", name="accueil")
	 */
	public function home()
	{
		return $this->render('index.html.twig');
	}
}