<?php

namespace Acme\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="Book")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Acme\TestBundle\Entity\BookRepository")
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var string
     * @Assert\Regex(
     * pattern="/\d/",
     * match=false,
     * message="Your name cannot contain a number")
     * @ORM\Column(name="author", type="text", nullable=false)
     */
    protected $name;

    /**
     * @var string
     * @Assert\Email
     * @ORM\Column(name="mail", type="text", nullable=false)
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(name="message_post", type="text", nullable=false)
     */
    protected $message;

    /**
     * @var \DateTime
     * @ORM\Column(name="time_add_book", type="datetime")
     */
    private $timeAddBook;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->timeAddBook= new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Post
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set timeAddBook
     *
     * @param \DateTime $timeAddBook
     * @return Book
     */
    public function setTimeAddBook($timeAddBook)
    {
        $this->timeAddBook = $timeAddBook;

        return $this;
    }

    /**
     * Get timeAddBook
     *
     * @return \DateTime 
     */
    public function getTimeAddBook()
    {
        return $this->timeAddBook;
    }
}
