<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{

//creation de la page age
    /**
     * @Route("/age" ,name="age_page")
     * @param Request $request
     */
    public function age(Request $request){ // je fait une request pour choper les element de l url
        $age = $request->query->get('age'); // je dit que je recupere la variable age
        $nom = $request->query->get('nom');//je recupere le nom dans l url
        $prenom = $request->query->get('prenom');//je recupere le prenom dans l url

        if ($age >=18){//si $age plus grand que 18 j affiche
            echo "bienvenue : ".$nom." ".$prenom. " tu a plus de 18 ans";
            die;
        }else{//si moin grand que 18 j affiche
            die('degage morveux');
        }
    }
    /**
     * je creer une nouvelle page qui s apelle home
     * @Route ("/home",name="home")
     */
    public function home():Response{
        return $this->render('homepage.html.twig');// je demande d afficher la page homepage
    }
    //je creer une page contact
    /**
     * @route ("/contact",name="contact_page")
     */
    public  function  contact(){

        die("coucou");
    }


}