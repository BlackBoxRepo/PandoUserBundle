<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

interface RoleInterface
{
    const ROLE_USER  = 'ROLE_USER';
    const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @param string $name
     * @return RoleInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();
}
