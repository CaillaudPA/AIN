<?php
/**
 * Created by PhpStorm.
 * User: Pierre-Antoine
 * Date: 15/11/2016
 * Time: 08:59
 */

namespace AppBundle\Entity;

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

    /**
     * @ORM\OneToMany(targetEntity="FacebookAccount", mappedBy="user", cascade={"persist", "remove"})
     */
    private $facebookaccount;

    /**
     * @ORM\Column(type="string")
     */
    private $twitterID;

    /**
     * @ORM\Column(type="string")
     */
    private $facebookID;

    /**
     * @ORM\OneToMany(targetEntity="TwitterAccount", mappedBy="user")
     */
    private $twitteraccount;

    /**
     * @ORM\OneToMany(targetEntity="InstagramAccount", mappedBy="user")
     */
    private $instagramaccount;
    /**
     * @ORM\OneToMany(targetEntity="GoogleAccount", mappedBy="user")
     */
    private $googleaccount;

    /**
     * @ORM\OneToMany(targetEntity="YoutubeAccount", mappedBy="user")
     */
    private $youtubeaccount;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add instagramaccount
     *
     * @param \AppBundle\Entity\InstagramAccount $instagramaccount
     *
     * @return User
     */
    public function addInstagramaccount(\AppBundle\Entity\InstagramAccount $instagramaccount)
    {
        $this->instagramaccount[] = $instagramaccount;

        return $this;
    }

    /**
     * Remove instagramaccount
     *
     * @param \AppBundle\Entity\InstagramAccount $instagramaccount
     */
    public function removeInstagramaccount(\AppBundle\Entity\InstagramAccount $instagramaccount)
    {
        $this->instagramaccount->removeElement($instagramaccount);
    }

    /**
     * Get instagramaccount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInstagramaccount()
    {
        return $this->instagramaccount;
    }


    /**
     * Add facebookaccount
     *
     * @param \AppBundle\Entity\FacebookAccount $facebookaccount
     *
     * @return User
     */
    public function addFacebookaccount(\AppBundle\Entity\FacebookAccount $facebookaccount)
    {
        $this->facebookaccount[] = $facebookaccount;

        return $this;
    }

    /**
     * Remove facebookaccount
     *
     * @param \AppBundle\Entity\FacebookAccount $facebookaccount
     */
    public function removeFacebookaccount(\AppBundle\Entity\FacebookAccount $facebookaccount)
    {
        $this->facebookaccount->removeElement($facebookaccount);
    }

    /**
     * Get facebookaccount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFacebookaccount()
    {
        return $this->facebookaccount;
    }

    /**
     * Add twitteraccount
     *
     * @param \AppBundle\Entity\TwitterAccount $twitteraccount
     *
     * @return User
     */
    public function addTwitteraccount(\AppBundle\Entity\TwitterAccount $twitteraccount)
    {
        $this->twitteraccount[] = $twitteraccount;

        return $this;
    }

    /**
     * Remove twitteraccount
     *
     * @param \AppBundle\Entity\TwitterAccount $twitteraccount
     */
    public function removeTwitteraccount(\AppBundle\Entity\TwitterAccount $twitteraccount)
    {
        $this->twitteraccount->removeElement($twitteraccount);
    }

    /**
     * Get twitteraccount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTwitteraccount()
    {
        return $this->twitteraccount;
    }

    /**
     * Add googleaccount
     *
     * @param \AppBundle\Entity\GoogleAccount $googleaccount
     *
     * @return User
     */
    public function addGoogleaccount(\AppBundle\Entity\GoogleAccount $googleaccount)
    {
        $this->googleaccount[] = $googleaccount;

        return $this;
    }

    /**
     * Remove googleaccount
     *
     * @param \AppBundle\Entity\GoogleAccount $googleaccount
     */
    public function removeGoogleaccount(\AppBundle\Entity\GoogleAccount $googleaccount)
    {
        $this->googleaccount->removeElement($googleaccount);
    }

    /**
     * Get googleaccount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGoogleaccount()
    {
        return $this->googleaccount;
    }

    /**
     * Add youtubeacount
     *
     * @param \AppBundle\Entity\YoutubeAccount $youtubeacount
     *
     * @return User
     */
    public function addYoutubeacount(\AppBundle\Entity\YoutubeAccount $youtubeacount)
    {
        $this->youtubeacount[] = $youtubeacount;

        return $this;
    }

    /**
     * Remove youtubeacount
     *
     * @param \AppBundle\Entity\YoutubeAccount $youtubeacount
     */
    public function removeYoutubeacount(\AppBundle\Entity\YoutubeAccount $youtubeacount)
    {
        $this->youtubeacount->removeElement($youtubeacount);
    }

    /**
     * Get youtubeacount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getYoutubeacount()
    {
        return $this->youtubeacount;
    }

    /**
     * Add youtubeaccount
     *
     * @param \AppBundle\Entity\YoutubeAccount $youtubeaccount
     *
     * @return User
     */
    public function addYoutubeaccount(\AppBundle\Entity\YoutubeAccount $youtubeaccount)
    {
        $this->youtubeaccount[] = $youtubeaccount;

        return $this;
    }

    /**
     * Remove youtubeaccount
     *
     * @param \AppBundle\Entity\YoutubeAccount $youtubeaccount
     */
    public function removeYoutubeaccount(\AppBundle\Entity\YoutubeAccount $youtubeaccount)
    {
        $this->youtubeaccount->removeElement($youtubeaccount);
    }

    /**
     * Get youtubeaccount
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getYoutubeaccount()
    {
        return $this->youtubeaccount;
    }

    /**
     * @return mixed
     */
    public function getTwitterID()
    {
        return $this->twitterID;
    }

    /**
     * @param mixed $twitterID
     */
    public function setTwitterID($twitterID)
    {
        $this->twitterID = $twitterID;
    }

    /**
     * @return mixed
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * @param mixed $facebookID
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;
    }

}
