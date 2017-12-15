<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/", name="user")
     */
    public function index()
    {
    	$users = $this->getDoctrine()
		              ->getRepository(User::class)
		              ->findAll();

    	return $this->render('user/index.html.twig', [
    		'users' => $users
	    ]);
    }
}
