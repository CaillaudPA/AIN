<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Antoine
 * Date: 15/11/2016
 * Time: 10:56
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class FacebookAccount
 * @ORM\Entity
 * @ORM\Table(name="facebookaccount")
 */
class FacebookAccount
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", length=255, type="string")
     * @ORM\Id
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="facebookaccount")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return FacebookAccount
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return FacebookAccount
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
