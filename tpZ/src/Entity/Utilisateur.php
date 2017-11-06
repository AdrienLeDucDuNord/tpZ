<?php
/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 06/11/17
 * Time: 15:47
 */
class Utilisateur
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    var $nom;

    /**
     * @var string
     * @ORM\Column(type="string", length=60)
     */
    var $prenom;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    var $email;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    var $github;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    var $discord_username;

    function __construct($n, $p, $e, $g, $d)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $e;
        $this->github = $g;
        $this->discord_username = $d;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }
}