

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
   <body>
      <div class="container">
         <h1 class=" bg-dark text-light text-center">Game Time</h1>
         <form method="POST">
            <div class="form-group">
               <label class="col-2"><b>Enter  a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="Enter1" required>
            </div>
            <div class="form-group">
               <label  class="col-2"><b>Enter  a value</b></label>
               <input class="col-2" type="text" class="form-control" name="Enter2" required>
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-success" name="save">Submit</button>
            </div>
            <br><br>
            <div class="form-group">
               <label class="col-2"><b>Solution </b></label><br>
               <?php
                  $invalid = "" ;
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $a = $_POST['Enter1'];
                    $b = $_POST['Enter2'];
                    
                       if(is_numeric($a) && is_numeric($b)){
                   if($a==$b)
                       echo"The game lasted hour (s) = ",  24-$a+$b;
                   else if($a<=$b)
                       echo "THE GAME LASTED AN HOUR (S) =", $b-$a;
                   else
                       echo"THE GAME LASTED AN HOUR (S) = ",  24-$a+$b;
                   }
                    else echo "invaild Enter , Please enter a numeric value";
                  
                  }
                  ?>
            </div>
         </form>
      </div>
      </form>
      </div>
      </div><br>
      <div class=" col-12 p-4">
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

