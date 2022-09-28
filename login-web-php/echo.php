<center>

<?php








echo "<hr>";echo "<br>";


















echo "<hr>";echo "<br>";




$h = 1;

while($h <= 5) {
  echo "The number is: $h <br>";
  $h+=1;
}






















echo "<hr>";echo "<br>";

$favcolor = "Green";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is $favcolor !";
    break;
  case "blue":
    echo "Your favorite color is $favcolor !";
    break;
  case "Green":
    echo "Your favorite color is $favcolor !";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}









echo "<hr>";echo "<br>";

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
















echo "<hr>";echo "<br>";

echo(pi());


























echo "<hr>";echo "<br>";
function funcion6() {
  static $g = 0;
  echo $g.",";
  $g++;
}
funcion6();
funcion6();
funcion6();
funcion6();
funcion6();
funcion6();
funcion6();
funcion6();










echo "<hr>";echo "<br>";
$e = 2;
$f = 100;
function funcion4() {
  $GLOBALS['f'] = $GLOBALS['e'] + $GLOBALS['f'];
}

funcion4();

echo $f;


/////////////////////////////
echo "<hr>";echo "<br>";
$c = 5;
$d = 10;
function funcion3() {
  global $c, $d;
  $d = $c + $d;
}
funcion3();
echo $d; // outputs 15
///////////////////////////




echo "<hr>";echo "<br>";
$a = 6;
function funcion() {
  echo "<p>Variable a Dentro de la function is: $a</p>";
}
funcion();
echo "<p>Variable a fuera de la function is: $a</p>";



echo "<hr>";echo "<br>";
function funcion2() {
$b = 6;
  echo "<p>Variable b Dentro de la function is: $b</p>";
}
funcion2();
echo "<p>Variable b fuera de la function is: $b</p>";


echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>


<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

echo "<br>";echo "<br>";
echo strlen("Hello Camilo!"); // outputs 12

echo "<br>";echo "<br>";
echo str_word_count("Hello Camilo!"); // outputs 2

echo "<br>";echo "<br>";
echo strrev("Hello Camilo!"); // outputs !dlrow olleH


echo "<hr>";echo "<br>";
echo str_replace("world", "Camilo", "Hello world!"); // outputs Hello Dolly!

echo "<hr>";echo "<br>";
$txt = "W3Schools.com";
echo "I love $txt!";


echo "<hr>";echo "<br>";
$txt = "W3Schools.com";
echo "Camilo "."I love " . $txt . "!";

echo "<br>";echo "<br>";
$x = 2020;
$y = 1986;
$z = 18;
echo "En novienbre $z de $x Camilo cumple ".($x - $y)." años";



?>
</center>
