<?php

class Family{
    public $peopleCount;
    public $lastName;
    public $mother;
    public $father;
    public function __construct(Father $f,Mother $m,string $lN){
    $this->mother=$m;
    $this->mother->lastName=$lN."а";

    $this->father=$f;
    $this->father->lastName=$lN;


    $this->mother->husband=$this->father;
    $this->father->wife=$this->mother;


    $this->lastName=$lN."ы";
    $this->peopleCount=2;
    }

    public function addSon(Child $c)
    {   
        $c->lastName=$this->father->lastName;
        $this->mother->child=$this->father->child=$c;
        $this->peopleCount++;
    }

    public function addDaugter(Child $c){
        $c->lastName=$this->mother->lastName;
        $this->mother->child=$this->father->child=$c;
        $this->peopleCount++;
    }

    public function Printfam(){
        print_r($this);
    }
}


class Mother{
    public $husband;
    public $age;
    public $child;
    public $firstname;
    public $lastName;

    public function __construct(int $age,string $firstname)
    {
        $this->age=$age;
        $this->firstname=$firstname;
    }
}

class Father{
    public $wife;
    public $child;
    public $age;
    public $firstname; 
    public $lastName;

    public function __construct(int $age,string $firstname)
    {
        $this->age=$age;
        $this->firstname=$firstname;
     }
}

class Child{
    public $age;
    public $sex;
    public $firstname;
    public $lastName;

    public function __construct(int $age,string $firstname,string $sex)
    {
        $this->age=$age;
        $this->firstname=$firstname;
        $this->$sex=$sex;
     }

}

$papa=new Father(34,"Андрей");
$mama=new Mother(28,"Анна");
$family=new Family($papa,$mama,"Молотоков");
$son=new Child(8,"Коля","мужской");
$family->addSon($son);
$family->Printfam();


?>