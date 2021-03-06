<?php 

	return  [
    // HTTP 请求的超时时间（秒）
	    'timeout' => 5.0,

	    // 默认发送配置
	    'default' => [
	        // 网关调用策略，默认：顺序调用
	        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

	        // 默认可用的发送网关
	        'gateways' => [
	           	'aliyun', 'alidayu',
	        ],
	    ],
	    // 可用的网关配置
	    'gateways' => [
	        'errorlog' => [
	            'file' => '/tmp/easy-sms.log',
	        ],
	        'aliyun' => [
	            'access_key_id' => 'LTAImd1xsF8UjMQ9',
	            'access_key_secret' => 'dTXFILhjHO7PJ79JnwDYBEfGCPqQv2',
	            'sign_name' => 'zgy',
	        ],
	        'alidayu' => [
	            //...
	        ],
	    ],
	];
 ?>