<html>

 <head>
  <title>PHP Test</title>
 </head>
 <body>

 <?php echo '<p>Hello World:tai1234</p>'; ?> 

 </body>

 <?php
   // Coercive mode
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, '3', 4.1));
?>

</html>