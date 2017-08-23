<?php

class ShopProductWriter{
	
	public function write($shopProduct){
		$str = "{$shopProduct->_title}:" . $shopProduct->getProducer(). "({$shopProduct->_price})\n";
		print $str;
	}
	
}
