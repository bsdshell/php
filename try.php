<?php

class MyClass
{
    const NAME_SPACE = 'moneyengine_processors_credit_card_'; 
    public $name = "MyClass";
    //const myname = strtolower(str_replace("/", "_", __NAMESPACE__)) . "_";
    //private $myname = strtolower("ABC"); 
    private $myname;  
    public function __construct()
    {
        echo __METHOD__ . "\n";
        $this->myname = strtolower("ARON");
    }

    private static function mystatic($var)
    {
        echo "var=" . $var;
    }
    public function myfun()
    {
        $metric_name = self::NAME_SPACE . strtolower("dogDog");

        echo __METHOD__ . "\n";
        echo __FUNCTION__. "\n";
        echo $metric_name . "\n";
        echo "myname=" . $this->myname;
        self::mystatic("aronsitu");
    }

}


class SubClass1 extends MyClass 
{
    public $name = "SubClass1";
    public function show()
    {
        echo "name=" . $this->name . "\n";
        //echo "parent name=" . parent::name . "\n";
    }
}

$c = new MyClass();
$c->myfun();

$function_name = "funname";


$out = strtolower(str_replace("\\", "_", __NAMESPACE__ . "_" . $function_name));
echo __NAMESPACE__ . "\n";
echo $out . "\n";

//$myvar = 'dog\cat\cow';
//$lower = strtolower(str_replace("\", "_", $myvar));


$d1 = new \DateTime("2015-04-20 19:18:3.11", new \DateTimeZone('UTC'));

var_dump($d1) . "\n";
echo "N=" . $d1->format("N");


//$today = new \DateTime("2015-04-20 19:18:3.11", new \DateTimeZone('UTC'));
$today = new \DateTime("23:59:59", new \DateTimeZone('America/Los_Angeles'));
var_dump($today) . "\n";

var_dump($today) . "\n";

//$day1 = new \DateTime("now", new \DateTimeZone('America/Los_Angeles'));
$day1 = new \DateTime("23:58:58", new \DateTimeZone('America/Los_Angeles'));
$day2 = new \DateTime("23:59:59", new \DateTimeZone('America/Los_Angeles'));

$diff = $day1->diff($day2);
$diff_second = $day2->getTimeStamp() - $day1->getTimeStamp();
print_r($diff_second . "\n");

var_dump($day1 == $day2);
var_dump($day1 < $day2);
var_dump($day1 > $day2);

$var1 = null;
$var2 = 0;
$var3 = false;

if($var1 == $var2)
    echo "var1(null) == var2(0)" . "\n";
else
    echo "var1(null) != var2(0)" . "\n";
    
if($var1 == $var3)
    echo "var1(null) == var3(false)" . "\n";
else
    echo "var1(null) != var3(false)" . "\n";

if($var2 == $var3)
    echo "var2(0) == var3(false)" . "\n";
else
    echo "var2(0) != var3(false)" . "\n";
 
if($var1 === $var2)
    echo "var1(null) == var2(0)" . "\n";
else
    echo "var1(null) !== var2(0)" . "\n";
    
if($var1 === $var3)
    echo "var1(null) === var3(false)" . "\n";
else
    echo "var1(null) !== var3(false)" . "\n";

if($var2 === $var3)
    echo "var2(0) === var3(false)" . "\n";
else
    echo "var2(0) !== var3(false)" . "\n";
 
$id = 99;
$query = sprintf("id < %d", $id);
print_r("query=" . $query . "\n");


echo "strval=" . strval("20.0044") . "\n";
echo "strval=" . strval("335sdf") . "\n";

$date = new \DateTime('now', new \DateTimeZone('UTC'));
var_dump($date);

$names = ["dog", "cat"];
foreach($names as $name)
{
    echo "name=" . $name . "\n";
}
for($i=0; $i<sizeof($names); $i++)
{
    echo "arr name=" . $names[$i] . "\n";
}

$sub = new SubClass1();
$sub->show();

$myarray = [ 
    "Portage"=>"val0",
    "ELCaminoReal"=>"val1",
    "PageMills"=>"val2",
    "PageMills4"=>"val3",
    "PageMills7"=>"val4"
    ];
foreach($myarray as $key => $val) {
    echo $key . "=>" . $val . "\n";
}

class DumpClass 
{
    const c1 = 1;
    const c2 = 2;
    const c3 = 3;
    const c4 = 4;
    public $myarr = [ 
        self::c1=>"Withdraw",
        self::c2=>"Withdrew",
        self::c3=>"Withdrawn",
        self::c4=>"Withdrawal",
        ];
    public function show()
    {
        foreach($this->myarr as $key => $val)
        {
            echo $key . "=>" . $val . "\n";
        }
    }
}
$dc = new DumpClass();
$dc->show();

?>
