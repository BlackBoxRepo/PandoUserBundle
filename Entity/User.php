<?php

namespace BlackBoxCode\Pando\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="User")
 * @ORM\Entity
 */
class User
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
     * @var UserName
     *
     * @ORM\OneToOne(targetEntity="UserName", mappedBy="user")
     */
    protected $userName;

    /**
     * @var UserPassword
     *
     * @ORM\OneToOne(targetEntity="UserPassword", mappedBy="user")
     */
    protected $userPassword;

    /**
     * @var ArrayCollection<Email>
     *
     * @ORM\OneToMany(targetEntity="Email", mappedBy="user")
     */
    protected $emails;

    /**
     * @var ArrayCollection<Role>
     *
     * @ORM\ManyToMany(targetEntity="Role")
     */
    protected $roles;


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
     * Set UserName
     *
     * @param UserName $userName
     * @return User
     */
    public function setUserName(UserName $userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get UserName
     *
     * @return UserName
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set UserPassword
     *
     * @param UserPassword $userPassword
     * @return User
     */
    public function setUserPassword(UserPassword $userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get UserPassword
     *
     * @return UserPassword
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Add Email
     *
     * @param Email $email
     * @return User
     */
    public function setEmails($email)
    {
        $this->emails->add($email);

        return $this;
    }

    /**
     * Remove Email
     *
     * @param Email $email
     * @return User
     */
    public function removeEmail($email)
    {
        $this->emails->add($email);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Add Role
     *
     * @param Role $role
     * @return User
     */
    public function setRole($role)
    {
        $this->roles->add($role);

        return $this;
    }

    /**
     * Remove Role
     *
     * @param Role $role
     * @return User
     */
    public function removeRole($role)
    {
        $this->roles->add($role);

        return $this;
    }

    /**
     * @return ArrayCollection<Role>
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
