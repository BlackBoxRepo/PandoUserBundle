<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IsTypeInterface;

interface RoleInterface extends IsTypeInterface
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER  = 'ROLE_USER';
}
