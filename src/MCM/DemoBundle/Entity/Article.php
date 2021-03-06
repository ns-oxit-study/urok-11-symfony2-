<?php 
namespace MCM\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ArticleRepository")
 * @ORM\Table(name="mcmDemoArticle")
 * @ORM\HasLifecycleCallbacks
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;


    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $short_content;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $create_date;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $edit_date;


    public function __toString()
    {
    	return $this->title;
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
     * Set shortContent
     *
     * @param string $shortContent
     *
     * @return Article
     */
    public function setShortContent($shortContent)
    {
        $this->short_content = $shortContent;

        return $this;
    }

    /**
     * Get shortContent
     *
     * @return string
     */
    public function getShortContent()
    {
        return $this->short_content;
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Article
     * @ORM\PrePersist
     */
    public function setCreateDate()
    {
        $this->create_date = new \DateTime('now');

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set editDate
     *
     * @param \DateTime $editDate
     *
     * @return Article
     * @ORM\PreUpdate()
     */
    public function setEditDate()
    {
        $this->edit_date = new \DateTime('now');

        return $this;
    }

    /**
     * Get editDate
     *
     * @return \DateTime
     */
    public function getEditDate()
    {
        return $this->edit_date;
    }
}
