<?php
/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 06/11/17
 * Time: 13:36
 */
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class totoController extends Controller
{
    /**
     * @Route("/hello", name="hello")
     */

    public function afficheTest()
    {
        $val = "hello salut hi hola";
        return new Response('<html><body>'.$val.'</body></html>');
    }

    public function hola()
    {
        $val = "hola";
        return new Response('<html><body>'.$val.'</body></html>');
    }

    /**
     * @Route("/lol", name="lol")
     */
    public function lol()
    {
        return $this->render("toto/lol.html.twig");
    }

    /**
     * @Route("/yolo", name="yolo")
     */
    public function yolo()
    {
        return $this->render("toto/yolo.html.twig");
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render("toto/menu.html.twig");
    }

}

