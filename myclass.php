<?php
    //PHP Inheritance example
    class MyBaseClass
    {
        public function printItem()
        {
            echo "MyBaseClass printItem()\n";
        }
        public function myself()
        {
            print __class__;
            self::printItem();
            var_dump($this);
            echo "get_cass()\n";
            echo get_class($this);
        }
    }

    class SubClass1 extends MyBaseClass
    {
        public function printItem()
        {
            echo "SubClass1 printItem()\n";
        }
        public function myself()
        {
            print __class__;
            self::printItem();
            parent::printItem();
            var_dump($this);
            echo "get_cass()\n";
            echo get_class($this);
        }
    }

    class SubClass2 extends SubClass1 
    {
        public function printItem()
        {
            echo "SubClass1 printItem()\n";
        }
        public function myself()
        {
            print __class__;
            self::printItem();
            parent::printItem();
            MyBaseClass::printItem();
            var_dump($this);
            echo "get_cass()\n";
            echo get_class($this);
        }
    }

    
    $base = new MyBaseClass();
    $base->printItem();
    $base->myself();
    
    $sub = new SubClass1();
    $sub->printItem();
    $sub->myself();

    $sub2 = new SubClass2();
    $sub2->printItem();
    $sub2->myself();


    //PHP reference example
    class DumpyClass
    {
         public $num;
         public function __construct()
         {
            $this->num = 100;
         }
    }
    class MyClassDumpy extends DumpyClass
    {
        public $myobj;
        public function __construct()
        {
            $this->myobj = new DumpyClass();
        }
        public function getReferenec()
        {
            return $this->myobj;
        }
    }

    echo "\n";
    $myclassdumpy = new MyClassDumpy();

    $c1 = $myclassdumpy->myobj;
    $c2 = $myclassdumpy->getReferenec();
    $myclassdumpy->myobj->num = 200;
    $c3 = $myclassdumpy->myobj;

    echo $c1->num ."\n";
    echo $c2->num ."\n";
    echo $c3->num ."\n";
?>
