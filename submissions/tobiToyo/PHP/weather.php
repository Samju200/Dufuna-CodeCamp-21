<?php
  
  function weather ($temp){
      if ($temp <= 20) {
        echo "It is freezing today";
      }
      elseif ($temp > 20 && $temp < 30) {
        echo "The weather is just perfect.";
      }
      elseif ($temp >= 30 && $temp < 40) {
        echo "It's so hot today.";
      }
      else {
        echo "Am I in Sahara Desert?!<br>";
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather</title>
</head>
<body>
  <h2>How's the weather?</h2>
    
  <form  method="post">
    <label for="temperature">Enter Your Temperature </label>
    <br><br>
    <input type="number" name="temperature" id="">
    <br><br>
    <?php
       $temp = $_POST["temperature"];

       if ($_POST["temperature"]) {
         weather($temp);
       }
    ?>
    <br><br>
    <input type="submit" value="Tell Me">
  </form>

<br>
    <a href="hobby-arrays.php">Find out about hobbies here</a>

</body>
</html>



