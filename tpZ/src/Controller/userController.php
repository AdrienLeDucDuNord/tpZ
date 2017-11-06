<?php
/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 06/11/17
 * Time: 16:21
 */
namespace App\Controller;

use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class usercontrol{

    function ajout(){

    }
    /** donner tableau utilisateur
     * @Route("/index", name="index")
     */
    public function index()
    {
    }

    /** recuperer utilisateur qd on clique, il va recuperer un id
     * @Route("/show", name="show")
     */
    public function show($users, $i)
    {
        echo $users[$i];
    }

}