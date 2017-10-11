# crypt
##一个简单的对称加密算法
[![Build Status](https://travis-ci.org/kphcdr/crypt.svg?branch=master)](https://travis-ci.org/kphcdr/crypt)

###特性

* 支持命名空间
* 支持单元测试 phpunit
* 支持自定义salt

你可以用来加密以下信息

* URL中的敏感信息
* 缓存的临时参数
* cookie或者session信息

不要用来加密用户密码，因为可以被破解哦！


###使用方法


	<?php
	//更换加密salt
	\Crypt\Crypt::setSalt('salt);
	
	//加密
	$encode = \Crypt\Crypt::encrypt('crypt');
	
	//解密
	$decode = \Crypt\Crypt::encrypt($encode);
	


