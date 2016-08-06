<?php

namespace AppBundle\Entity;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

//    /**
//     * @var \DateTime
//     */
//    private $createdOn;

    /**
     * @var boolean
     */
    private $sent;

    /**
     * @var \DateTime
     */
    private $sentOn;

    /**
     * @var boolean
     */
    private $delivered;

    /**
     * @var \DateTime
     */
    private $deliveredOn;

    /**
     * @var boolean
     */
    private $isRead;

    /**
     * @var \DateTime
     */
    private $readOn;

    /**
     * @var \AppBundle\Entity\User
     */
    private $receiver;

    /**
     * @var \AppBundle\Entity\User
     */
    private $sender;

    public function __construct()
    {
        $this->delivered = false;
        $this->sentOn = new \DateTime();
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
     * Set body
     *
     * @param string $body
     *
     * @return Message
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

//    /**
//     * Set createdOn
//     *
//     * @param \DateTime $createdOn
//     *
//     * @return Message
//     */
//    public function setCreatedOn($createdOn)
//    {
//        $this->createdOn = $createdOn;
//
//        return $this;
//    }

//    /**
//     * Get createdOn
//     *
//     * @return \DateTime
//     */
//    public function getCreatedOn()
//    {
//        return $this->createdOn;
//    }

    /**
     * Set sent
     *
     * @param boolean $sent
     *
     * @return Message
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return boolean
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set sentOn
     *
     * @param \DateTime $sentOn
     *
     * @return Message
     */
    public function setSentOn($sentOn)
    {
        $this->sentOn = $sentOn;

        return $this;
    }

    /**
     * Get sentOn
     *
     * @return \DateTime
     */
    public function getSentOn()
    {
        return $this->sentOn;
    }

    /**
     * Set delivered
     *
     * @param boolean $delivered
     *
     * @return Message
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Get delivered
     *
     * @return boolean
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * Set deliveredOn
     *
     * @param \DateTime $deliveredOn
     *
     * @return Message
     */
    public function setDeliveredOn($deliveredOn)
    {
        $this->deliveredOn = $deliveredOn;

        return $this;
    }

    /**
     * Get deliveredOn
     *
     * @return \DateTime
     */
    public function getDeliveredOn()
    {
        return $this->deliveredOn;
    }

    /**
     * Set read
     *
     * @param boolean $read
     *
     * @return Message
     */
    public function setIsRead($read)
    {
        $this->isRead = $read;

        return $this;
    }

    /**
     * Get read
     *
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set readOn
     *
     * @param \DateTime $readOn
     *
     * @return Message
     */
    public function setReadOn($readOn)
    {
        $this->readOn = $readOn;

        return $this;
    }

    /**
     * Get readOn
     *
     * @return \DateTime
     */
    public function getReadOn()
    {
        return $this->readOn;
    }

    /**
     * Set receiver
     *
     * @param \AppBundle\Entity\User $receiver
     *
     * @return Message
     */
    public function setReceiver(\AppBundle\Entity\User $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set sender
     *
     * @param \AppBundle\Entity\User $sender
     *
     * @return Message
     */
    public function setSender(\AppBundle\Entity\User $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \AppBundle\Entity\User
     */
    public function getSender()
    {
        return $this->sender;
    }
}

