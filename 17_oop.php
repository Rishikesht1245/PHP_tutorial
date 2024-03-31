<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural 
  or object oriented way. OOP consists of classes that can hold 
  "properties" and "methods". Objects can be created from classes.
*/


class User{

      /* Access Modifiers : Public, private and Protected
         public - Can be accessed from anywhere
         private - can only be accessed from inside the class
         protected - can only be accessed from inside the class and by 
         inheriting classes */

      // Properties : variables - attributes belongs to a class
      public $name;
      public $email;
      public $password;


      /* Constructor : A constructor is a function or method that runs 
      when an object is created automatically */
      public function __construct($name, $email, $password){
            // echo "constructor running";
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
      }

      // Methods in Classes
      //  Functions that belongs to a class

      // set method : setter
      function set_name($name){
            // don't use $symbol
            $this->name = $name;
      }

      // get method : getter
      function get_name(){
            return $this->name;
      }
}

// Instantiate a User Object
// $user1 = new User();

// // -> is used instead of . to access properties inside the object
// $user1->name = "Rishi";

// // will throw error if the variable is protected
// echo $user1->name;
// // var_dump($user1)

// $user1->set_name("Vasu");
// echo $user1->name;

// // while accessing properties we don't have to use the $ symbol
// $user2 = new User();
// $user2->name = "Alby";
// echo $user2->name;
// $user2->set_name("Jomon");
// echo $user2->name;

// echo $user1->get_name();

$user3 = new User("Rishikesh", "rishikesh@gmail.com", "Rsk@3000");
echo $user3->email;

// Inheritance
class Employee extends User {
      public function __construct($name, $email, $password, $title){
            // likes as super in js : calling parent constructor
            parent::__construct($name, $email, $password);
            $this->title = $title;
      }

      public function get_title(){
            return $this->title;
      }
}

$employee1 = new Employee("ris", "ris@gmail.com", "ris#123", "Manager");
echo $employee1->get_title();

?>