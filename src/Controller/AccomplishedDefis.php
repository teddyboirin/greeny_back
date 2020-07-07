<?php
/**
 * Created by PhpStorm.
 * User: Hetic
 * Date: 2020-07-06
 * Time: 20:33
 */

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class AccomplishedDefis
{

    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke( User $data)
    {

        $user = $data;
        $user->getId();
    }
}