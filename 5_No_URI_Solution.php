

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
      <h1 class=" bg-dark text-light text-center">Triangle Types</h1>
      <form method="POST">
      <div class="form-group">
         <label class="col-2"><b>Enter  a value</b></label>
         <input  class="col-2" type="text" class="form-control" name="value1" required>
      </div>
      <div class="form-group">
         <label class="col-2"><b>Enter  a value </b></label>
         <input  class="col-2" type="text" class="form-control" name="value2" required>
      </div>
      <div class="form-group">
         <label class="col-2"><b>Enter  a value </b></label>
         <input  class="col-2" type="text" class="form-control" name="value3" required>
      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-success" name="save">Submit</button>
      </div>
      <br><br>
      <div class=" container form-group">
         <label class="col-2"><b>Solution</b></label><br>
         <h3>
            <?php 
               $a = $b = $c  = $temp = "";
               
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                   $a = $_POST['value1'];
                   $b = $_POST['value2'];
                   $c = $_POST['value3'];
               
                   if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
               
                  if ($a < $b)
               
                  {
                      $temp = $a;
                      $a = $b;
                      $b = $temp;
                  }
               
                  if ($b < $c)
               
                  {
                      $temp = $b;
                      $b = $c;
                      $c = $temp;
                  }
               
                  if ($a < $b)
                  {
                      $temp = $a;
                      $a = $b;
                      $b = $temp;
                  }
               
                  if ($a >= $b + $c)
               
                  {
                     echo "NOT TRIANGLE FORM";
                  }
               
                  else if ($a * $a == $b * $b + $c * $c)
               
                  {
                     echo "RECTANGLE TRIANGLE";
                  }
               
                  else if ($a * $a > $b * $b + $c * $c)
               
                  {
                     echo "OBTUSANGULAR TRIANGLE";
                  }
               
                  else if ($a * $a < $b * $b + $c * $c)
               
                  {
                     echo "TRIANGLE ACUTANGLE";
                  }                  
                  if ($a == $b && $b == $c)
               
                  {
                     echo "TRIANGULO EQUILATERO\n";
                  }
               
                  else if ($a == $b || $b == $c)
               
                  {
                     echo "TRIANGULO ISOSCELES";
                  }
                }
                else  echo "invaild Input , Please enter a numeric value";
                }
               ?>
         </h3>
      <div class=" col-12 p-4">
         <a href="index.php"><button type="button" class="text-white btn btn-danger">
            Back to Home
         </button></a>
      </div>
           </div>
      <footer>
         <div class=" container bg-dark text-light text-center">
            <h1>Thank you</h1>
         </div>
      </footer>
   </body>
</html>

