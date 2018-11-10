# callbackable-array-functions
Some wrappers for php array functions, which provides callback-ability to them

#### Advantages
It is not another implementation of core same-named functions. Packet internally uses php core same-named functions (all magic from Decorators), so you can be sure, that callbackable function will work totally like same core function of your php version 

#### Implemented functions
+ array_unique

#### Installation

Use composer:
````
comsposer require jizuscreed/callbackable-array-functions 
````

#### Using

````
<?php
use jizuscreed\CallbackableArrayFunctions\ArrayUnique;

// array of objects or another multidimensional arrays
$array = [...];

$array = ArrayUnique::run($array, function($arrayValue){
    // some logic, that returns string representation of one array value. Be carefull with it because array elements will be checked for differences by result of this callback
});

````

#### License
MIT, so feel free to do whatever with this code