<?php
    class Book{
        //properties
        private $title;
        private $author;
        private $price;
        //private is an access modifier. The value could be public, private or protected.
        //commonly properties are set to private. 

        // setter - a function/method that is used to assign a value to the property.
        function setTitle($title) //the function doesn't have an access modifier. By default, the method is public. Which means, it could be accessed outside from the class/object
        {
            $this->title = $title;
            // $this->title ===> this refers to the property
            // $title ====> refers to the argument
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        //getter - returns the value of the property. Since, the properties are set to PRIVATE, we need to declare a getter function.
        public function getTitle() //the function has now an access modifier- public. It means that it is accessible outside of the class/object
        { 
            return $this->title;
        }

        //the access modifier is set to private. it means that the function cannot be called outside of the object or of the class. The function could only be called within the class.
        private function calculateDiscount($percentage_of_the_discount){
            return $this->price * $percentage_of_the_discount;
        }

        public function getDiscountedPrice()
        {
            //$this->calculateDiscount(.1) calls a declared function inside the class. .1 is an argument. It means 10% discount.
            $discount_amount = $this->calculateDiscount(.1);
            $final_price = $this->price -$discount_amount;
            return $final_price;
        }

        // When calling a property or method, you start with $this->{name of function / name of property}
        //example: $this->title;
        //example: $this->calulateDiscount(.1);
    }

    //instantiation-> the process of creating an object from a class. It calls the constructor
    //Object -> it is a collection of variables and functions
    //to instantiate:
    $mathObj = new Book(); //new Book() calls the constructor to create an object. By default, each class has a constructor even if it is not explicitly declared inside the class.
    
    // new Book() creates an object from the class Book
    //the object is assigned to the variable $mathObj so that we could call/access the properties and methods

    //accessing properties
    // $mathObj->title = "Integration for beginners";
    // echo $mathObj->title;
    // THe code above will cause an error because the properties are set to private. It cannot be accessed outside from the object/class 

    $mathObj->setTitle("Algebra for Beginners");
    $mathObj->setPrice(255);
    echo $mathObj->getTitle(),"<br>";
    echo $mathObj->getDiscountedPrice(),"<br>";

    //test comment
?>
