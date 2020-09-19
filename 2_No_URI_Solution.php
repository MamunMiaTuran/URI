<!DOCTYPE html>
<html>
   <head>
      <title>URI</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <?php 
         $value = $notas = $moedas = $invalid = "";
         $n100 =  $n50 = $n20 = $n10 = $n5 = $n2 = "";
               
               if($_SERVER["REQUEST_METHOD"] == "POST") {
               $value = $_POST['value'];
               $notas = $value;
               $moedas = ($value - $notas) * 100;           
               if(is_numeric($value)){
                //NOTES PRAT
                    $n100 = $notas/100;
                    $notas = $notas%100;
                    $n50 = $notas/50;
                    $notas = $notas%50;
                    $n20 = $notas/20;
                    $notas = $notas%20;
                    $n10 = $notas/10;
                    $notas = $notas%10;
                    $n5 = $notas/5;
                    $notas = $notas%5;
                    $n2 = $notas/2;
                    $notas = $notas%2;
                  }
              else  $invalid = 1;
            }
         ?>
      <div class="container">
      <h1 class=" bg-dark text-light text-cEnter">Banknotes</h1>
      <form method="POST">
      <div class="form-group">
         <label class="col-2"><b>Enter a value</b></label>
         <input  class="col-2" type="text" class="form-control" name="value" required>
      </div>
      <div class="col-12">
         <button type="submit" class="btn btn-success" name="save">Submit</button>
      </div>
      <br><br>
      <div class=" container form-group">
         <label class="col-2"><b>Note And Coins </b></label><br>
         <h7><?php 
            if($invalid == 1){
            echo "invaild Input , Please Enter a numeric value"; }
            else{
                  echo "nota(s) de R$ 100.00 = ". (int)$n100."<br>";
                  echo "nota(s) de R$ 50.00 = " . (int)$n50."<br>";
                  echo "nota(s) de R$ 20.00 =" . (int)$n20."<br>";
                  echo "nota(s) de R$ 10.00 =" . (int)$n10."<br>";
                  echo "nota(s) de R$ 5.00 ="  . (int)$n5."<br>";
                  echo "nota(s) de R$ 2.00 = "  . (int)$n2."<br>";
            }
            ?>
         </h7>
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

