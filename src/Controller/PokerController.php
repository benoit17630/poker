<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PokerController
{
    /**
     * @Route("/age" ,name="age_page")
     * @param Request $request
     */
    public function age(Request $request){
        $age = $request->query->get('age');
        if ($age >=18){
            echo "bienvenue tu a plus de 18 ans";
        }else{
            echo "degage morveux";
        }
    }
}