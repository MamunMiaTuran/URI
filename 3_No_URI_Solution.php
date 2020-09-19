<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
   <body>
      <?php
         $x = $y = $z = $invalid = $invalid1 = "" ;
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $a = $_POST['input1'];
         $b = $_POST['input2'];
         $c = $_POST['input3'];
         
         if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
          $x = ($b * $b)-(4*$a*$c);
         
         if ($x < 0){
         $invalid1 = 2;
             }
         elseif ($a == 0){
          $invalid1 = 2;
              }
         else {
          $y = ((-$b + sqrt($x))/($a+$a));
          $z = ((-$b - sqrt($x))/($a+$a)); 
         }
         
         }
         else $invalid = 1;
         
         }
         ?>
      <div class="container">
         <h1 class=" bg-dark text-light text-center">Bhaskara's Formula</h1>
         <form method="POST">
            <div class="form-group">
               <label class="col-2"><b>Enter  a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="input1" required>
            </div>
            <div class="form-group">
               <label  class="col-2"><b>Enter  a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="input2" required>
            </div>
            <div class="form-group">
               <label class="col-2"><b>Enter a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="input3" required>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-success" name="save">Submit</button>
            </div>
            <br><br>
            <div class="form-group">
               <label class="col-2"><b>Solution </b></label><br>
               <?php
                  if($invalid == 1){
                   echo "invaild Input , Please enter a numeric value";
                  }else{
                    if($invalid1 == 2){
                          echo "Impossivel calcular" ;
                     }
                   elseif(! empty($y) && ! empty($z)){
                        echo "R1 = ".round($y,5)."<br>";
                        echo "R2 = ".round($z)."<br>"; 
                    }     
                }
                  ?>
            </div>
         </form>
      </div>
      </form>
      </div>
      <div class=" col-12 p-4">
         <a href="index.php"><button type="button" class="text-white btn btn-danger">
            Back to Home
         </button></a>
      </div>
      </div><br>
      <footer>
         <div class=" container bg-dark text-light text-center">
            <h1>Thank you</h1>
         </div>
      </footer>
   </body>
</html>

