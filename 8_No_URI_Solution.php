

<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
   <body>
      <div class="container">
         <h1 class=" bg-dark text-light text-center">Six Odd Numbers</h1>
         <form method="POST">
            <div class="form-group">
               <label class="col-2"><b>Enter </b></label>
               <input  class="col-2" type="text" class="form-control" name="input" required >
            </div>
            <div class="col-12">
               <button type="submit" class="btn btn-success" name="save">Submit</button>
            </div>
            <br><br>
            <div class="form-group">
               <label class="col-2"><b>Solution </b></label><br>
               <?php
                  $n = $i =  "" ;
                      
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $n = $_POST['input'];
                  
                   if(is_numeric($n)){
                             if ( $n%2==0)$n++;
                             for($i = 0;$i < 6;$i++){
                                  echo $n."<br>" ;
                                 $n = $n + 2;
                               }
                      
                     }
                       else  echo "invaild Input , Please enter a numeric value";
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

