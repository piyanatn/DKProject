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

กำลังทำรอก่อนนะ
~~~

~~~

เข้าใช้งานโดยเข้า URL
~~~
http://localhost/dkproject
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

