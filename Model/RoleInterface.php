<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\HasIdInterface;

interface RoleInterface extends HasIdInterface
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER  = 'ROLE_USER';

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
