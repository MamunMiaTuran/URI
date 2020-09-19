

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <?php 
         $value1 = $value2 = $sum  = $invalid = "";
          if($_SERVER["REQUEST_METHOD"] == "POST") {
               $value1 = $_POST['value1'];
               $value2 = $_POST['value2'];
               if(is_numeric($value1) && is_numeric($value2)){
                $sum = $value1 / $value2 ;
             } 
               else $invalid = 1;
               
               }
             ?>
      <div class="container">
      <h1 class=" bg-dark text-light text-center">Consumption</h1>
      <form method="POST">
      <div class="form-group">
         <label class="col-2"><b>Enter  a value</b></label>
         <input  class="col-2" type="text" class="form-control" name="value1" required>
      </div>
      <div class="form-group">
         <label class="col-2"><b>Enter  a value </b></label>
         <input  class="col-2" type="text" class="form-control" name="value2" required>
      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-success" name="save">Submit</button>
      </div>
      <br><br>
      <div class=" container form-group">
         <label class="col-2"><b>Solution</b></label><br>
         <?php
            if($invalid == 1){
             echo "invaild Input , Please enter a numeric value";
            }else{
              echo $sum ;} ?>
      </div>
      <div class=" test-center col-12 p-4">
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

