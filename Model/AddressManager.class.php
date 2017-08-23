<?php 

/**
 * Description of AddressManager
 *
 * @author tony
 */
class AddressManager {
	
	private $_addresses = array("209.131.36.159", "74.125.19.106");
	
	function outPutAddresses($resolve){
		foreach($this->_addresses as $address){
			print $address;
			if($resolve){
				print "(".gethostbyaddr($address).")";
			}
			print "\n";
		}
	}
	
}
