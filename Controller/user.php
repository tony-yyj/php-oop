<?php

/**
 * 单利测试
 */

class user
{

	// 私有化构造方法，阻止外部实例化
	private function __construct()
	{

	}

    public static function &instance()
    {
        static $instance;
        if(empty($instance)){
            $instance = new self();
        }

        return $instance;
    }
}

// $user = &user::instance();

$arr = [
	['uid' => 'a', 'name' => 'tony',],
	['uid' => 'b', 'name' => 'tony2',],
	['uid' => 'c', 'name' => 'tony3',],
	['uid' => 'e', 'name' => 'tony4',],
];

$uids = array_column($arr, 'uid');

$new = array_combine($uids, $arr);

print_r($new);
