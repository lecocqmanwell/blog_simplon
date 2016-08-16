<?php

namespace SR\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="SR\BlogBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\OneToMany(targetEntity="SR\BlogBundle\Entity\Comment", mappedBy="article")
     */
    private $comments; // Notez le « s », un article est lié à plusieurs commentaires


    /**
     * @ORM\ManyToOne(targetEntity="SR\BlogBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */

    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published ;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


//    public function __construct()
//
//    {
//        $this->date = new \Datetime();
//
//    }




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return bool
     */
     public function getPublished()
     {
        return $this->published;
     }

     public function __construct()
     {
         $this->comments = new ArrayCollection();
         // ...
     }

     public function addComment(Comment $comment)
     {
      $this->comments[] = $comment;
      $comment->setArticle($this);

      return $this;
     }

     public function removeComment(Comment $comment)
     {
      $this->comments->removeElement($comment);
     }

     public function getComments()
     {
      return $this->comments;
     }

}

