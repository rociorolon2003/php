<?php 
class Client{
    var $name;
    var $age;
    var $city;
    public function __construc(){}
}

#objeto a json
$cliente = new Client();
$cliente ->age =35;
$cliente->city = "San Lorenzo";

$code_json = json_encode($cliente);

echo $code_json;
?>