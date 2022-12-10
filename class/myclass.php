
<?php

     class Human
     {
         public $name;
         public $age;

         public function info()
         {

            echo $this->name . ", lat:" ;
            echo $this->age . "<br>";
        
         }

     }
     $p1 = new Human();
     $p1->name = "Adam";
     $p1->age = 22;

     $p2 = new Human();
     $p2->name = "Edek";
     $p2->age = 222;

     class Dino
     {
         public $name;
         public $rrr;
         public $age;
         
         

         public function info()
         {

            echo $this->names . ", lat:" ;
            echo $this->rrr . ",:" ;
            echo $this->ages .  "<br>";
            
         }

     }
      
     $p3 = new Dino();
     $p3->names = "Edek";
     $p3->rrr = "brrr";
     $p3->ages = 222;

     class Lion extends Human //dziedziczenie
     {

        


     }

     $p4 = new Lion();
     $p4->name = "zgrEdek";
     $p4->age = 22;
     

     
    

     















?>