<?php
session_start();
date_default_timezone_set("Asia/Taipei");

class DB{
protected $dsn="mysql:host=localhost;charset=utf8;dbname=web004";
protected $user="root";
protected $pw='pw';
protected $pdo;

public $Total='total';
public $Title='title';
public $Header='heaer';
public $Button='button';
public $Append='append';
public $Upload='upload';

private function __construct($table){
$this->table=$table;
$this->pdo=new PDO($this->dsn,$this->root,$this->pw);
}

public function find($id){
$sql="SELECT * FROM $this->table WHERE";
if(is_array($id)){
foreach($id as $key=>$value){
$tmp[]="`$key`='$value'";
}
$sql .=implode(" AND ",$tmp);
}
else{
$sql .=implode("`id`='$id'");
}
return $this->pdo->query($sql)->fetch(PDO::ASSOC);
}

public function all(...$arg){
    $sql="SELECT * FROM $this->table ";
switch(count($arg)){
    case 1:
        if(is_array($arg[0])){
            foreach($arg[0] as $key => $value){
            $tmp[]="`$key`='$value'";
                }
                $sql .=" WHERE ".implode(" && ",$tmp);
            }else{
            $sql .= $arg[0]; 
        }
            break;
        case 2:
        foreach($arg[0] as $key => $value){
                $tmp[]="`$key`='$value'";
            }
            $sql .=" WHERE ".implode(" && ",$tmp);
        break;
            }
            
            return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

public function math($method,$col,...$arg){
    $sql="SELECT $method($col) FROM $this->table ";

    switch(count($arg)){
        case 2:
            foreach($arg[0] as $key => $value){
                $tmp[]="`$key`='$value'";
            }
          
            $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];
            

        break;
        case 1:
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }
                $sql .= " WHERE ".implode(" AND ",$tmp);
            }else{
                $sql .= $arg[0];

            }
            return $this->pdo->query($sql)->fetchColumn(PDO::FETCH_ASSOC);       
    }


public function save(){
$sql="SELECT * FROM $this->table WHERE";
if(is_array($id)){
foreach($id as $key=>$value){
$tmp[]="`$key`='$value'";
}
$sql .=implode(" AND ",$tmp);
}
else{
$sql .=implode("`id`='$id'");
}
return $this->pdo->$sql(exec);    
}

public function delete(){
    $sql="SELECT * FROM $this->table WHERE";
if(is_array($id)){
foreach($id as $key=>$value){
$tmp[]="`$key`='$value'";
}
$sql .=implode(" AND ",$tmp);
}
else{
$sql .=implode("`id`='$id'");
}
return $this->pdo->query($sql)->fetch(PDO::ASSOC);
}


function to($url){
    header.location();
}

function dd($array){
echo "<pre>";
print_r($array);
echo"</pre>";
}

}

?>