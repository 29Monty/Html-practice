<?php
$name = "Philimon Alex";
$hash = hash('sha256', $name);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?> Monty</title>
</head>
<body>
    <h1><?php echo $name; ?> Monty</h1>
    
    <pre>
     ######
  #          #
  #          #
  #          #
  #  ######  
  #         
  #
  #
  #    
    </pre> 

    <p>The SHA256 hash of "<?php echo $name; ?>" is <?php echo $hash; ?></p>

 <a href="check.php">Click here to check error setting</a><br>
 <a href="fail.php">Click here to see a fatal error</a><br>
</body>
</html>