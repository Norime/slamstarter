<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
		
        return $this->render('base.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

    }

	/**
     * @Route("/index", name="index")
     */

    public function project(){
	    $projects = array();
	 
        $projects[0]["name"] = "Project 1";
		$projects[1]["name"] = "Project 2";
		$projects[2]["name"] = "Project 3";
        return $this->render('base.html.twig',[
            'projects' =>$projects,
        ]);
    }

}
