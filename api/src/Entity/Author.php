<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 */
class Author
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $firstName = '';

    /**
     * @var string A nice person
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $lastName = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    public $birthday = '';

    public function getId(): int
    {
        return $this->id;
    }
}
