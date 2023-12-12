<?php
//indexing aRRay

$user =['badhon',25];
echo $user;

$user =['badhon',25];
var_dump($user);

$user =['badhon',25];
print_r($user);
$user =['badhon',25];
echo "<pre>";
print_r($user);
echo "</pre>";

$user =['badhon',25];
echo "<pre>";
print_r($user[0]);
echo "</pre>";

$user =['badhon',25];
echo "<pre>";
echo ( $user[0] );
echo "</pre>";

$user =['badhon',25,'listening to music', 'full-stack-development'];
echo "<pre>";
print_r($user[3]);
echo "</pre>";

$user =['badhon',25,'listening to music', 'full-stack-development'];
echo "<pre>";
print_r($user);
echo "</pre>";

$user =['badhon',25,'listening to music', 'full-stack-development'];
$user = 'new data';
echo "<pre>";
print_r($user);
echo "</pre>";

$user =['badhon',25,'listening to music', 'full-stack-development'];
$user = 'new data';
echo "<pre>";
var_dump($user);
echo "</pre>";

$user =['badhon',25,'listening to music', 'full-stack-development'];
$user[] = 'new data';
$user[] = 'new data2';
echo "<pre>";
var_dump($user);
echo "</pre>";


//associative aRRay

$user =[
   'name' => 'badhon',
   'age'  => 25,
  'hobby' =>'listening to music', 
'occupassion' => 'full-stack-development'
];
echo "<pre>";
print_r($user);
echo "</pre>";

$user =[
    'name' => 'badhon',
    'age'  => 25,
   'hobby' =>'listening to music', 
 'occupassion' => 'full-stack-development'
 ];
 $user["testingdata"] = "datatesting";
 echo "<pre>";
 print_r($user);
 echo "</pre>";



//multi dimen array

$user=[
    [
        'name' => 'badhon',
        'age'  => 25,
       'hobby' =>'listening to music', 
     'occupassion' => 'full-stack-development',
        'edu'   =>  [
        'hsc',
        'ssc',
         'hons',
         'msc'
      ],
      'social' =>[
        'facebook' =>[
            'Real' => 'www.facebook.com',
            'fake' => 'fake.facebook.com'
        ]
      ]
    ],
  [
    'name' => 'onie',
    'age'  => 25,
    'hobby' =>'listening to music', 
     'occupassion' => 'full-stack-development',
        'edu'   =>[
            'hsc',
            'ssc'
        ],
        'social' =>[
            'facebook' =>[
                'Real' => 'www.facebook.com',
                'fake' => 'fake.facebook.com'
            ],
            'insta' =>[
                'Real' => 'www.insta.com',
                'fake' => 'fake.insta.com'
            ]
          ]
   ],
];
$user[0]['testing']= ['testing data'];
$user[0]['edu']['testing']=['testing data'];
$user[0]['edu'][]='testing data';
echo "<pre>";
print_r($user[0]['social']['facebook']['Real']);
echo "</pre>";
echo "<pre>";
print_r($user[1]['social']['insta']['Real']);
echo "</pre>";
echo "<pre>";
print_r($user[1]['social']['insta']['Real']);
echo "</pre>";
echo "<pre>";
print_r($user);
echo "</pre>";


//string function//strtouppeR

$name ="badhon";
echo strtoupper($name);

$name = "badhon";
$email = "BADHON@gmail.com";
echo strtolower($email); 

$name = "badhon sen";
$email = "BADHON@gmail.com";
echo ucwords($name);

$name = "badhon sen";
$email = "BADHON@gmail.com";
echo ucfirst($name);


//strrev

$name = "badhon";
echo strrev($name);

$name = 151;
echo strrev($name);

$num = 123;
function numberChecKer($num){
  if($num == strrev($num)){
    echo "yes";
  }else{
    echo "no";
  }
}numberChecKer(55);

$num = 123;
function numberChecKerR($num){
 echo $num == strrev($num) ? "yes" : "no";
}numberChecKerR(53);


//stRpos()

$msg = "i am badhon";
echo  strpos($msg, "badhon");

$msg = "i am badhon";
var_dump(strpos($msg, "badhon"));

$msg = "i am salmon";
var_dump(strpos($msg, "badhon"));

$msg = "i am badhon";
$email = "badhon@gamil.com";
echo strpos($email, "@");

$msg = "i am badhon";
$email = "badhon@gamil.com";
var_dump(strpos($email, "@"));

$msg = "i am badhon";
$email = "badhongamil.com";
var_dump(strpos($email, "@"));

$msg = "i am badhon";
$email = "badhongamil.com";
if(strpos($email, "@") != false){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhon@gamil.com";
if(strpos($email, "@") != false){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhon@gamil.com";
if(strpos($email, "@") != true){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhongamil.com";
if(strpos($email, "@") != true){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhon@gamil.com";
if(strpos($email, "@") == true){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhon@gamil.com";
if(strpos($email, "@") > 0){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am badhon";
$email = "badhon@gamil.com";
if(strpos($email, "@") < 0){
  echo "valid email";
}
else{
  echo "invalid email";
}

$msg = "i am Badhon";
$email = "badhon@gamil.com";
var_dump(strpos($msg, "badhon"));




//stRipos

$msg = "i am Badhon";
$email = "badhon@gamil.com";
var_dump(stripos($msg, "badhon"));



//substR

$msg = "i am Badhon";
echo substr($msg,0,1);

$message = "i am Badhon";
echo substr($message,0,10);

$name ="LoRem ipsum dolor sit amet consectetur adipisicing elit. Adipisci officia corporis harum quia ratione tempora eius, a fugiat id rem earum excepturi veniam unde magnam dolor molestiae debitis neque nemo?";
echo substr($name,0,50)."...";

$name ="LoRem ipsum dolor sit amet consectetur adipisicing elit. Adipisci officia corporis harum quia ratione tempora eius, a fugiat id rem earum excepturi veniam unde magnam dolor molestiae debitis neque nemo?";
echo substr($name,6,5)."...";



//stR_Replaces

$msg = "i am badhon";
echo str_replace("badhon","srk",$msg);

$msg = " amr nam oni hasan. ami ekjon guiteRist";
echo str_replace(["oni hasan","guiteRist"],["badhon sen","web developeR"],$msg);

$msg = "myself oni hasan, i am a guiteRist. i woRK as a musician.";
$oniRevieweRs =["oni hasan","guiteRist","musician"];
$badhonRevieweRS =["badhon sen","developeR","pRogRammeR"];
echo str_replace($oniRevieweRs,$badhonRevieweRS,$msg);



//tRiM

$password = "97070 ";
var_dump(rtrim($password));

$password = " 97070";
var_dump(ltrim($password));

$password = " 97070 ";
var_dump(trim($password));



//Md5 SH1

$passwoRd = "97070";
echo md5($passwoRd);

$passwoRd = "97070";
echo sha1($passwoRd);

$passwoRd = "97070";
var_dump(md5($passwoRd)); 

$passwoRd = "97070";
var_dump(sha1($passwoRd)); 

$passwoRd = "97070";
var_dump(md5($passwoRd)) . "<br>";
var_dump(md5($passwoRd));

$passwoRd = "97070";
var_dump(sha1($passwoRd)) . "<br>";
var_dump(sha1($passwoRd));



//passwoRd HasH

$passwoRd = "97070";
echo password_hash($passwoRd, PASSWORD_BCRYPT);

$passwoRd = "97070";
var_dump(password_hash($passwoRd, PASSWORD_BCRYPT));


//STRLeN

$passwoRd = "97070";
echo strlen(password_hash($passwoRd,PASSWORD_BCRYPT));

$phone = "01866326476";
echo strlen($phone) ==11 ? "yes, this is valid number" : "no, this is in-valid number"; 

$phone = "018663264776";
echo strlen($phone) ==11 ? "yes, this is valid number" : "no, this is in-valid number";


?>
