

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
   <body>
      <div class="container">
         <h1 class=" bg-dark text-light text-center">Salary Increase</h1>
         <form method="POST">
            <div class="form-group">
               <label class="col-2"><b>Please input a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="input1" required>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-success" name="save">Submit</button>
            </div>
            <br><br>
            <div class="form-group">
               <label class="col-2"><b>Solution </b></label><br>
               <?php
                  $invalid = $a = $b = $c = "" ;
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $a = $_POST['input1'];
                  
                       if(is_numeric($a)){
                                  
                           if ($a >=0 && $a <=400.00 ){
                               $b = ($a*15)/100;
                               $salary = $a + $b;
                               $p = 15;
                           }
                           else if($a >= 400.01 && $a <= 800.00){
                               $b = ($a*12)/100;
                               $salary = $a + $b;
                               $p = 12;
                           }
                           else if($a >= 800.01 && $a <= 1200.00){
                               $b = ($a*10)/100;
                               $salary = $a + $b;
                               $p = 10;
                           }
                           else if($a >= 1200.01 && $a <= 2000.00){
                               $b = ($a*7)/100;
                               $salary = $a + $b;
                               $p = 7;
                           }
                           else {
                                   $b = ($a*4)/100;
                               $salary = $a + $b;
                               $p = 4;
                       }
                  
                       echo "To new salary : ". $salary."<br>";
                       echo "Gain adjustment : ". $b."<br>";
                       echo "In percentage : ". $p."%".$c."<br>";
                   }
                    else echo "invaild Input , Please enter a numeric value";
                  
                  }
                  ?>
            </div>
         </form>
      </div>
      </form>
      </div>
      </div><br>
      <div class=" container col-12 p-4">
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

