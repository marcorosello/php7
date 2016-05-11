<?php

namespace ast;

class User
{
    private $name = 'Marco';

    public function getName()
    {
     return $this->name;
    }

    public function iLove(string $name = 'Vaida') : string
    {
        print 'I love ' . $name;
        return 'I love ' . $name;
    }
}

$user = new User;
$user->iLove();
$user->getName();


for ($i=0; $i < 100; $i++) {
    print 'Hello' . $i . 'th time';
}
