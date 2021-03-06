<?php 
namespace MCM\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="FsnameRepository")
 * @ORM\Table(name="mcmDemoFsname")
 * @ORM\HasLifecycleCallbacks
 */
class Fsname
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $first_name;


    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $second_name;



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
     * @return Fsname
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
     * @return Fsname
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Fsname
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     *
     * @return Fsname
     */
    public function setSecondName($secondName)
    {
        $this->second_name = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string
     */
    public function getSecondName()
    {
        return $this->second_name;
    }
}
