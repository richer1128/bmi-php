<?php
$weight = $_POST['weight'];
$height = $_POST['height'];

if (is_numeric($weight) && is_numeric($height)){

    // $height = $height / 100 ;

    $bmi = $weight / (($height/100) * ($height/100));
    
 //round 取小數值後兩位
    $bmi = round($bmi, 2);
    echo "您的身高為: " .$height;
    echo "<br>";
    echo "您的體重為: " .$weight;
    echo "<br>";
    echo "您的 BMI 為 :" . $bmi;
    echo"<br>";
    echo "您的 BMI 為";

    if ($bmi >=18.5 && $bmi <24){
echo "恭喜!您的BMI值在正常範圍內!";
    }else {
        echo  "您的BMI值，不在正常範圍內!";
        echo "<br>";
    
        if ($bmi <= 18.5) {
            echo "您的BMI值小於範圍內 !";
        }else {
            echo "您的BMI值已經超飆 !";
        }
    }
    } else {
        echo"您輸入資訊有誤，請重新輸入 ! ";
        }
echo "<br>";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>showEnd</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
  <!-- <label for="">BMI 結果</label> -->

  <!-- <div>您的 BMI: <?php echo $bmi;?></div> -->
  <a href='bmi.php'>回表單</a>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>