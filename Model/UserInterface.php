<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface UserInterface extends IdInterface
{
    /**
     * @return UserNameInterface
     */
    public function getUserName();

    /**
     * @param UserNameInterface $userName
     * @return $this
     */
    public function setUserName(UserNameInterface $userName);

    /**
     * @return PasswordInterface
     */
    public function getPassword();

    /**
     * @param PasswordInterface $password
     * @return $this
     */
    public function setPassword(PasswordInterface $password);

    /**
     * @return ArrayCollection<EmailInterface>
     */
    public function getEmails();

    /**
     * @param EmailInterface $email
     * @return $this
     */
    public function addEmail(EmailInterface $email);

    /**
     * @param EmailInterface $email
     * @return $this
     */
    public function removeEmail(EmailInterface $email);

    /**
     * @return ArrayCollection<Role>
     */
    public function getRoles();

    /**
     * @param RoleInterface $role
     * @return $this
     */
    public function addRole(RoleInterface $role);

    /**
     * @param RoleInterface $role
     * @return $this
     */
    public function removeRole(RoleInterface $role);
}