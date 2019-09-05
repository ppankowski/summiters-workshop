<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ORM\Entity
 */
class Book
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
    public $isbn = '';

    /**
     * @var string A nice person
     *
     * @ORM\Column(length=255)
     * @Assert\NotBlank
     */
    public $title = '';

    /**
     * @var string A nice person
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    public $abstract = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    public $publicationDate;

    /**
     * @var string A nice person
     *
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    public $averageReviewRate;

    /**
     * @var string A nice person
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    public $authorId;


    public function getId(): int
    {
        return $this->id;
    }
}
