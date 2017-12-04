<?php

/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 04/12/17
 * Time: 13:58
 */

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

// DON'T forget this use statement!!!
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Class Player
 * @package App\Entity
 * @UniqueEntity(fields="name")
 * @ORM\Entity
 */
class Player
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 4,
     *      max = 20,
     *      minMessage = "Le prénom doit faire au minimum {{ limit }} lettres",
     *      maxMessage = "Le prénom ne peut dépasser {{ limit }} lettres"
     * )
     * @ORM\Column(type="string")
     */
    var $name;

    /**
     * @Assert\Range(
     *      min = 9,
     *      max = 99,
     *      minMessage = "l'age doit être au minimum de {{ limit }}",
     *      maxMessage = "L'age ne doit pas dépasser{{ limit }}"
     * )
     * @ORM\Column(type="integer")
     */
    var $age;

    /**
     * @Assert\NotBlank()
     * @Assert\Choice({"France","Belgique"})
     * @ORM\Column(type="string", length=50)
     */
    var $country;
}