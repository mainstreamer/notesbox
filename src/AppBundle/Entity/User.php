<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    private $firstName;

    private $lastName;

    private $createdOn;

    private $posts;

    private $messagesSent;

    private $messagesReceived;

    public function __construct()
    {
        parent::__construct();
        $this->createdOn = new \DateTime();
        $this->posts = new ArrayCollection();
        $this->messagesReceived = new ArrayCollection();
        $this->messagesSent = new ArrayCollection();
    }

    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param mixed $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    public function addPost(Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }


    public function removePost(Post $post)
    {
        $this->posts->removeElement($post);
    }

    public function getPosts()
    {
        return $this->posts;
    }

    public function addMessageSent(Message $message)
    {
        $this->messagesSent[] = $message;

        return $this;
    }

    public function removeMessageSent(Message $message)
    {
        $this->messagesSent->removeElement($message);
    }

    public function getMessagesSent()
    {
        return $this->messagesSent;
    }

    public function addMessageReceived(Message $message)
    {
        $this->messagesReceived[] = $message;

        return $this;
    }


    public function removeMessageReceived(Message $message)
    {
        $this->messagesReceived->removeElement($message);
    }

    public function getMessagesReceived()
    {
        return $this->messagesReceived;
    }
}