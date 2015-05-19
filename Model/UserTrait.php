<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait UserTrait
{
    use IdTrait;

    /**
     * @var UserNameInterface
     *
     * @ORM\OneToOne(targetEntity="UserName", mappedBy="user")
     */
    private $userName;

    /**
     * @var UserPasswordInterface
     *
     * @ORM\OneToOne(targetEntity="UserPassword", mappedBy="user")
     */
    private $password;

    /**
     * @var ArrayCollection<EmailInterface>
     *
     * @ORM\OneToMany(targetEntity="Email", mappedBy="user")
     */
    private $emails;


    /**
     * @var ArrayCollection<RoleInterface>
     *
     * @ORM\ManyToMany(targetEntity="Role")
     */
    private $roles;


    /**
     * {@inheritdoc}
     */
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setUserName(UserNameInterface $userName)
    {
        $this->userName = $userName;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * {@inheritdoc}
     */
    public function setPassword(UserPasswordInterface $password)
    {
        $this->password = $password;

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getEmails()
    {
        if (is_null($this->emails)) $this->emails = new ArrayCollection();
        
        return $this->emails;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addEmail(EmailInterface $email)
    {
        if (is_null($this->emails)) $this->emails = new ArrayCollection();
        $this->emails->add($email);
    
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeEmail(EmailInterface $email)
    {
        if (is_null($this->emails)) $this->emails = new ArrayCollection();
        $this->emails->removeElement($email);
    }
    
    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        if (is_null($this->roles)) $this->roles = new ArrayCollection();
        
        return $this->roles;
    }
    
    /**
     * {@inheritdoc}
     */
    public function addRole(RoleInterface $role)
    {
        if (is_null($this->roles)) $this->roles = new ArrayCollection();
        $this->roles->add($role);
    
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function removeRole(RoleInterface $role)
    {
        if (is_null($this->roles)) $this->roles = new ArrayCollection();
        $this->roles->removeElement($role);
    }
}
