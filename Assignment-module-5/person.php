<?php 

class Person{
    private $name;
    private $email;

    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}

// $objPerson = new Person();

// $objPerson->setName('Nahin');
// $objPerson->setEmail('dev.nahin@gmail.com');

// echo $objPerson->getName() ."\n";
// echo $objPerson->getEmail();