<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface UserPasswordInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getPassword();
    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function setUser(UserInterface $user);
}
