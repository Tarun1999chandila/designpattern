<?php 
//ques 4
class Singletonexample { 
				
	private static $obj; 
				
	private final function __construct() { 
		echo __CLASS__ . " initialize"; 
	} 
	
	public static function getConnect() { 
		if (!isset(self::$obj)) { 
			self::$obj = new Singletonexample(); 
		} 
		
		return self::$obj; 
	} 
} 

$obj1 = Singletonexample::getConnect(); 
$obj2 = Singletonexample::getConnect(); 

var_dump($obj1 == $obj2); 

//ques2

$array = ['a'=>'5'];

$message = $array['a'] ?? 'not set';
echo $message.PHP_EOL;


//ques3
interface Factory {    
    public function getProduct(); 
    }
    interface Product {     
    public function getName(); 
    }
    class FirstFactory implements Factory {
        public function getProduct() {
            return new FirstProduct();
        }
    }
    class SecondFactory implements Factory {
        public function getProduct() {
            return new SecondProduct();
        }
    }
    class FirstProduct implements Product {
     public function getName() {        
    return 'The first product';    
    } }
    class SecondProduct implements Product {
     public function getName() {        
    return 'Second product';    
    }
    }
    $factory = new FirstFactory();
    $firstProduct = $factory->getProduct();
    $factory = new SecondFactory();
    $secondProduct = $factory->getProduct();
    print_r($firstProduct->getName());
    print_r($secondProduct->getName());
    
    
?>

