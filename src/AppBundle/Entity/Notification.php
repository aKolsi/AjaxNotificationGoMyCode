<?php
/**
 * Created by PhpStorm.
 * User: Kolsi Ahmed
 * Date: 08/07/2017
 * Time: 09:49
 */

namespace AppBundle\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="notification")
 */
class Notification
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomprenom;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $message;

    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $vu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomprenom()
    {
        return $this->nomprenom;
    }

    /**
     * @param mixed $nomprenom
     */
    public function setNomprenom($nomprenom)
    {
        $this->nomprenom = $nomprenom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * @param mixed $vu
     */
    public function setVu($vu)
    {
        $this->vu = $vu;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }





}