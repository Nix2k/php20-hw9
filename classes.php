class $Car
{
	private $vendor;
	private $model;
	private $color;
	private $velocity = 0;
	private $acceleration = 0;
	
	public function __constructor($vendor,$model,$color){
		$this->vendor = $vendor;
		$this->model = $model;
		$this->color = $color;
	}
	
	public futction startEngine(){
		
	}
	
	public function stopEngine() {
		
	}	
}

class $Tv
{
	private $vendor;
	private $model;
	private $screenSize;
	private $channel = 0;
	
	public function __constructor($vendor,$model,$screenSize){
		$this->vendor = $vendor;
		$this->model = $model;
		$this->screenSize = $screenSize;
	}
	
	public futction nextChannel(){
		$this->channel++;
	}
	
	public futction prevChannel(){
		$this->channel--;
	}
}

class $Pen
{
	private $color;
	private $price;
	
	public function __constructor($color,$price){
		$this->color = $color;
		$this->price = $price;
	}
	
	public futction getPrice(){
		return $this->price = $price;
	}
}

class $Duck
{
	private $weight;
	private $sex;
	
	public function __constructor($weight,$sex){
		$this->weight = $weight;
		$this->sex = $sex;
	}
	
	public futction sayQuack(){

	}
	
	public futction takeoff(){

	}
	
	public futction landing(){

	}
}

class $Goods
{
	private $vendor;
	private $name;
	private $price;
	
	public function __constructor($vendor,$name,$price){
		$this->vendor = $vendor;
		$this->name = $name;
		$this->price = $price;
	}
	
	public futction getPrice(){
		return $this->price;
	}	
}