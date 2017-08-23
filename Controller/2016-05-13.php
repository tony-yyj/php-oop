<?php

//厨师做菜的方法
class cook{

	public function meal(){
		echo '番茄炒蛋', PHP_EOL;
	}
	
	public function drink(){
		echo '紫菜蛋汤', PHP_EOL;
	}

	public function ok(){
		echo 'over', PHP_EOL;
	}
}

//命令调用的接口
interface Command{
	public function execute();
}

//做菜的命令实现
class MealCommand implements Command{
	private $cook;

	public function __construct(cook $cook){
		$this->cook = $cook;
	}

	public function execute(){
		$this->cook->meal();
	}
}

//做饮料的接口实现
class DrinkCommand implements Command{
	private $cook;

	public function __construct(cook $cook){
		$this->cook = $cook;
	}

	public function execute(){
		$this->cook->drink();
	}
}


//厨师接收命令
class cookControl{
	private $mealcommand;
	private $drinkcommand;

	public function addCommand(Command $mealcommand, Command $drinkcommand){
		$this->mealcommand = $mealcommand;
		$this->drinkcommand = $drinkcommand;
	}

	public function callmeal(){
		$this->mealcommand->execute();
	}

	public function calldrink(){
		$this->drinkcommand->execute();
	}
}

$control = new cookControl;
$cook = new cook;
$mealcommand = new MealCommand($cook);
$drinkcommand = new DrinkCommand($cook);
$control->addCommand($mealcommand, $drinkcommand);
$control->callmeal();
$control->calldrink();
