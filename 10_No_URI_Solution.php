<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
      <h1 class=" bg-dark text-light text-center"> Sequence IJ 1</h1>
      <h4 class="container">
         <?php
            $I = $J = "";
              for($I = 1, $J = 60; $J >= 0; $I += 3 , $J -= 5){
                    echo "I = ".$I." "."J = ".$J."<br>";
                }
             ?>
      </h4>
      <div class="col-12 p-4">
         <a href="index.php"><button type="button" class="text-white btn btn-danger">
            Back to Home
         </button></a>
      </div>
      <footer>
         <div class=" container bg-dark text-light text-center">
            <h1>Thank you</h1>
         </div>
      </footer>
   </body>
</html>

