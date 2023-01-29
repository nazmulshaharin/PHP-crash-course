<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $food = 'pizza';
  $Food = 'Burger';
  echo 'I love to eat ' . $food . '<br>';
  // php variable
  $age = 10;
  echo 'My age is ' . $age . ', I read in class 12' . '<br>';

  //
  $x = 3;
  $y = 3;
  echo $x + $y . '<br>';

  //php echo and print statement

  print $x + $y . '<br>';

  print $food . '<br>';
  $foods = print('drinks');
  echo $foods;

  // php data types
  $name = 'Nazmul';
  $name1 = 'Shaharin';
  $age = 30;
  $age1 = 30.5;
  $religion = true;
  $fruits = array('apple', 'banana', 'plum');
  $null = null;
  var_dump($fruits);

  //php object
class phone{
  var $model;
  function phoneModel($number){
    global $model;
    $model = $number;
    echo "this is $model <br>";
  }
}
$apple = new phone;
$apple-> phoneModel('i phone 13');

$samsung = new phone;
$samsung-> phoneModel('Galaxy A20s');
//string
echo strlen('I love to eat pizza') . '<br>';
echo str_word_count('I love to eat pizza') . '<br>';
echo strrev('I love to eat pizza') . '<br>';
echo strpos('I love to eat pizza', 'pizza');

$test = strpos('I love to eat pizza', 'rice');
var_dump($test);

echo str_replace('love', 'like', 'I love to eat pizza',) . '<br>'; 

//number

//math
echo (pi()) . '<br>';

echo (min(15, 7, 8, 21, 5, 25, 45)) . '<br>';
echo (max(15, 7, 8, 21, 5, 25, 45)) . '<br>';
echo (abs(-10)) . '<br>';
echo (sqrt(25)) . '<br>';
echo (round(pi())) . '<br>';
echo (rand()) . '<br>';
echo (rand(10, 50)) . '<br>';

//constant
define('a', 17);
define('cars', [
  'BMW',
  'TOWOTA',
  'MAZDA'
]);
echo(cars[0]);
echo (a);
var_dump(cars);
var_dump(a);
//
function name(){
  $x = 25;
  echo($x) . '<br>';
  echo(cars[0]) . '<br>';
}
name();

//php operator
echo ($x + $y) . '<br>';
echo $x % $y . '<br>';
echo $x ** $y . '<br>'; // to the power

//Assignment operator
$z = $x + $y;
$x += $y; // $x = $x + $y;
$x -= $y ; // $x = $x - $y;
$x *= $y ; // $x = $x * $y;
$x /= $y ; // $x = $x / $y;
echo $x = $y . '<br>';
echo $x;
echo $z;

//php comparison operator
$a = 50;
$b = '50';
//var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
var_dump($a <= $b);
var_dump($a >= $b);
//php if else

?>
</body>
</html>