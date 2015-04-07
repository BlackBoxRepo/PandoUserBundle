<?php

namespace BlackBoxCode\Pando\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(
 *     name="Email",
 *     indexes={@ORM\Index(columns={"emailUser"})}
 * )
 * @ORM\Entity
 */
class Email
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $emailUser;

    /**
     * @var Domain
     *
     * @ORM\ManyToOne(targetEntity="Domain")
     */
    protected $domain;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="emails")
     */
    protected $user;


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
     * Set emailUser
     *
     * @param string $emailUser
     * @return Email
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set Domain
     *
     * @param Domain $domain
     * @return Email
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get Domain
     *
     * @return Domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set User
     *
     * @param User $user
     * @return Email
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get User
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
