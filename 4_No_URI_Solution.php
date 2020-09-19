

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
      <h1 class=" bg-dark text-light text-cEnter">Coordinates of a Point</h1>
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
         <h3>
            <?php 
               $value1 = $value2 = "";
               
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                   $a = $_POST['value1'];
                   $b = $_POST['value2'];
                    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
               
                   if($a==0 && $b==0)
                        echo("Origem ");
               
                  else if($b==0)
                        echo("Eixo X ");
               
                  else if($a==0)
                        echo("Eixo Y ");
               
                  else if($a>0 && $b>0)
                        echo("Q1 ");
               
                  else if($a<0 && $b>0)
                        echo("Q2 ");
               
                  else if($a<0 && $b<0)
                        echo("Q3 ");
                  else
                        echo("Q4 ");
                      }
                      else  echo "invaild Input , Please Enter a numeric value";
                
                }
               ?>
         </h3>
      </div>
      <div class="col-12 p-4">
         <a href="index.php"><button type="button" class="text-white btn btn-danger">
            Back to Home
         </button></a>
      </div>
      <footer>
         <div class=" container bg-dark text-light text-cEnter">
            <h1>Thank you</h1>
         </div>
      </footer>
   </body>
</html>

