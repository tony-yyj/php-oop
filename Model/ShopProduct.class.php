<?php 

/**
 * Description of ShopProduct
 *
 * @author tony
 */
class ShopProduct {
	
	public $_title = "default product";
	public $_producterMainName = 'main name';
	public $_producterFirstName = 'first name';
	public $_price = 0;
	
	function __construct($title, $firstName, $mainName, $price) {
		$this->_title = $title;
		$this->_producterFirstName = $firstName;
		$this->_producterMainName = $mainName;
		$this->_price = $price;
	}
	
	function getProducer(){
		return "{$this->_producterFirstName}" . " {$this->_producterMainName}";
	}
	
	function getSummaryLine(){
		$base = "{$this->_title} {$this->_producterMainName}, {$this->_producterFirstName}";
		return $base;
	}
	
}
