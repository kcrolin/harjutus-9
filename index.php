<!DOCTYPE HTML>
  <head>
    <title>Harjutus 9</title>
	<link href='http://fonts.googleapis.com/css?family=Crafty+Girls' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
	
	<?php
    function bg_color($value) {
        return $value;
    }

    $color = bg_color("red");
?>
    <style>
	body {
    background-color: #ccc;
}
	
 .container {max-width: 200px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid red;
  text-align: center;}
  
  .container p {font-family: 'Crafty Girls', cursive;
  font-size: 18px;}
  
  
  
	</style>
  </head>
  <body>
  <h2>Funktsiooni defineerimine</h2>
  
  <h3>Argumendita funktsioon</h3>
<?php
    
    function say_hello() {
      echo 'Minu esimene funktsioon!<br>';
  }
 say_hello();
?>
<h3>Argumendiga funktsioon</h3>
 
  <?php
    
    function say_hello_to($person) {
      echo "<div class='container'><p>Tere {$person}!<br></p></div>";
  }
 say_hello_to("Cärolin");
?>
  
   <?php
    
say_hello();
say_hello_to("Anneli");
?>
  
  <h3>Väärtuse tagastamine</h3>
  <?php
    
    function add($number1, $number2) {
      $sum = $number1 + $number2;
	  return $sum;
  }
 $result = add(3, 4);
 echo $result;
?>

<h3>Mitme väärtuse tagastamine</h3>
 <ul>
<?php
  function calculate($nr1, $nr2) {
    $plus = $nr1 + $nr2;
    $minus = $nr1 - $nr2;

    return array($plus, $minus);
  }

  $result = calculate(10, 5);

  echo "<li>Numbrite summa on {$result[0]}</li>";
  echo "<li>Numbrite vahe on {$result[1]}</li>";
  
?>
 </ul>
 <ol>
 <?php
    function calc($nr1, $nr2) {
        $plus = $nr1 + $nr2;
        $minus = $nr1 - $nr2;

        return array($plus, $minus);
    }

    list($plus, $minus) = array(100, 50);
	echo "<li>Numbrite summa on {$plus}</li>";
  echo "<li>Numbrite vahe on {$minus}</li>";
	
?>
  </ol>
  
  
  
  
  
  </body>
  </html>