<?php
return array(
    "database"=>array(
        "host"=>"localhost",
        "username"=>"root",
        "password"=>123456,
        "dbname"=>"fengyi",
        "port"=>3308
    ),
    "smarty"=>array(
        "templateDir"=>TPL_PATH,
        "compileDir"=>COMPILE_PATH,
        "cacheDir"=>CACHE_PATH
     ),
    "code"=>array(
     "type"=>"png",
     "width"=>400,
     "height"=>60,
     "codeLen"=>4,
     "seed"=>"abcdefhjkmnABCDFEGKJHOUY123456789",
     "fontSize"=>array("min"=>15,"max"=>30),
     "fontAngle"=>array("min"=>-15,"max"=>15),
     "lineNum"=>array("min"=>2,"max"=>4),
     "lineWidth"=>array("min"=>1,"max"=>4),
     "pixNum"=>array("min"=>30,"max"=>50),
     "fontFile"=>"D:/software/wampserver/www/server/mvc-test/application/static/font/simkai.ttf",
        "ischeck"=>false

     )
);