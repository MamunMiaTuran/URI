

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
   <body>
      <div class="container">
         <h1 class=" bg-dark text-light text-center">Taxes</h1>
         <form method="POST">
            <div class="form-group">
               <label class="col-2"><b>Enter a value</b></label>
               <input  class="col-2" type="text" class="form-control" name="input" required >
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-success" name="save">Submit</button>
            </div>
            <br><br>
            <div class="form-group">
               <label class="col-2"><b>Solution </b></label><br>
               <?php
                  $invalid = $a = "" ;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $a = $_POST['input'];                 
                       if(is_numeric($a)){
                               if($a>=0 && $a<=2000)
                                   printf("Isento");
                               else if($a>=2000.01 && $a<=3000)
                               {
                                   $a-=2000;
                                   $b= $a*.08;
                                   printf("R$ %.2lf",$b);
                               }
                               else if($a>=3000.01 && $a<=4500)
                               {
                                   $a-=3000;
                                   $b= $a*.18+80;
                                   printf("R$ %.2lf",$b);
                               }
                               else
                               {
                                   $a-=4500;
                                   $b= $a*.28+350;
                                   printf("R$ %.2lf",$b);
                               }
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

