# encrypt
encrypt可逆加密,从laravel中提取出来,用于php 比如hyperf框架，其它非框架也可以用

## 基本使用

1、 下载包
```bash
composer require wll/encrypt
```

2、 发布配置生成文件:config/autoload/hashing.php
```bash
bin/hyperf.php vendor:publish wll/encrypt
```

3、 开始使用 - 授权控制器中写
```bash

use Wll\Encrypt\Encryption\EncryptionHyperfServiceProvider;		//hyperf 中使用
//use Wll\Encrypt\Encryption\EncryptionLaravelServiceProvider;  //laravel 中使用 然当也可以用app()方式调用
//use Wll\Encrypt\Encryption\EncryptionPhpServiceProvider;		//php 中使用

 public function index(){	
 
   $encryptionHyperfServiceProvider = new EncryptionHyperfServiceProvider();
   $encrypt = $encryptionHyperfServiceProvider->register();
   //生成密码
   $pass = $encrypt->encrypt('admin', true);     
   //解密  
   $descPass=$encrypt->decrypt($pass, true);
   //
   return ['pass'=>$pass,'descPass'=>$descPass];
}

