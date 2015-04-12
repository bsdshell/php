<?php

$s = new stdClass();
$s->name = "My Name";
$s->addr = "Santa Clara, Redmond, Redwood City, Redwood Shore, Seattle, Bellieve, Cupertino, JanpTown, Los Alto, Mountain view, Sunnyvale";

class Info
{
    public $info;
    public function __construct($obj)
    {
        $this->info = $obj;
    }
    public function show()
    {
        var_dump($this->info);
        print_r("name=".$this->info->name . "\n");
        print_r("addr=".$this->info->addr . "\n");
    }
} 
    
$info = new Info($s);
$info->show();
?>
