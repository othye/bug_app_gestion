<?php

namespace App\Controller;

use App\SomeFormType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TestController extends AbstractController
{
    public function test()
    {
        $form = $this->createForm(BsoinType::class);
        // error will happen on previous line
    }
}