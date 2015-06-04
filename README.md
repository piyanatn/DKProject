DKProject
============================

  โปรเจคระดับเทพที่ต้องการพัฒนาระบบสารสนเทศด้านสาธารณสุข เพื่อให้ คปสอ ได้เข้าถึงข้อมูลสุขภาพของผู้ป่วยที่มารับบริการ

REQUIREMENTS
------------

 แค่ใจก็พอ


INSTALLATION
------------

 Copy ไปวางที่ folder ที่ใช้เก็บไฟล์เว็บไซต์ เช่น d:\xampp\htdocs\ เป็นต้น


### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.0.0"
php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=ไอพีเครื่องเว็บ server;dbname=ฐานข้อมูล',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

