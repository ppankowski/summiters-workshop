<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 */
class Review
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
     * @ORM\Column(length=13)
     * @Assert\NotBlank
     */
    public $author = '';

    /**
     * @var string A nice person
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $review = '';

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    public $rate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    public $createdAt;

    /**
     * @var string A nice person
     *
     * @ORM\ManyToOne(targetEntity="Book")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    public $bookId;


    public function getId(): int
    {
        return $this->id;
    }
}
