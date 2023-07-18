<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    define("EMAIL","thuenaratt@gmail.com </br>");
    echo EMAIL;

    define("myCon",true);
    if(myCon){
        //echo "Constant Definition in PHP </br>";
    }
     define("ONCONSTANT", "some value</br>");
   

     define("CONSTANT", "Hello world.");
     echo CONSTANT;
   ?>
</body>
</html>