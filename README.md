# Black Cat Tools/Yii2-Basic

This project contains basic extensions for the Yii2 framework.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist blackcattools/yii2-base
```

```
composer require --prefer-dist blackcattools/yii2-base
```

or add

```json
"blackcattools/yii2-base": "~1.0.2"
```

to the `require` section of your composer.json.


Basic Usage
-----------

The following example shows how to use this extension:

```php

use blackcattools\base\Bit;

$value = 10;   //bits 1 and 3 active

Bit::test(1,$value); //return true
Bit::test(0,$value); //return false
Bit::test(3,$value); //return true
Bit::test(9,$value); //return false

```


