<?php
namespace App\Controller;

use App\Entity\Player;
use App\Form\PlayerType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class PlayerController
 * @package App\Controller
 * @Route("/player")
 */
class PlayerController extends Controller
{
    /**
     *  @Route("/new", name="entity_player_new")
     */
    public function newPlayer(Request $request){
        // Seul les auteurs doivent avoir access.

            $player = new Player();
            $em = $this->getDoctrine()->getManager();
            $form = $this->createForm(PlayerType::class, $player);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $em->persist($player);
                $em->flush();
                return $this->redirect($this->generateUrl('entity_player_index'));
            }
            return $this->render("Player/new.html.twig", array("form"=>$form->createView()));

    }

    /**
     *  @Route("/index", name="entity_player_index")
     */
    public function index(){
        $em = $this->getDoctrine()->getManager();
        $players = $em->getRepository(Player::class)->findAll();
        return $this->render('Player/index.html.twig', array("player" => $players));
    }
}