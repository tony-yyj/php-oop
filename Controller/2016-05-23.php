<?php

//进程接口
interface process{

	public function process();

}

//解码实现
class playerencode implements process{

	public function process(){
		echo "encode\r\n";
	}
}


//输出实现
class playeroutput implements process{

	public function process(){
		echo "output\r\n";
	}
}

//播放器的调度管理器
class playProcess{

	private $message = null;

	public function __construct(){

	}

	//接收到事件的请求后，就调用进程来处理
	public function callback(event $event){

		$this->message = $event->click();

		if($this->message instanceof process){
			$this->message->process();
		}

	}
}


class mp4{

	public function work(){

		$playProcess = new playProcess();

		$playProcess->callback(new event('encode'));

		$playProcess->callback(new event('output'));

	}
}

class event{

	private $m = null;

	public function __construct($me){
		$this->m = $me;
	}

	public function click(){
		switch($this->m){
			case 'encode':{
				return new playerencode();
				break;
			}
			case 'output':{
				return new playeroutput();
				break;
			}

		}
	}
}


$mp4 = new mp4();

$mp4->work();


