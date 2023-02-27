<?php 
require_once'person.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $objPerson = new Person();

    $objPerson->setName($name);
    $objPerson->setEmail($email);


    echo "<p>Name: " . $objPerson->getName() . "</p></br>";
    echo "<p>Email: " . $objPerson->getEmail() . "</p></br>";
}

?>

