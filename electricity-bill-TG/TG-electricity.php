<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Eelectricity Bill Calculator</title>
</head>
<body>
<!-- HEADER -->
<div>
  <h3> Electricity Bill Designed By TG</h3>
    <form action="" method = "POST" id = "myform">
      <input type="number" name = "units" placemaent= "please enter units" style ="width=200px"/>
      <input type="submit" name="btn" value = "submit"> 
    </form>
</div>
<!-- END OF HEADER -->

<!-- INPUTS -->
<?Php
    function calcBill ($units){
        $firstCost = 3.50;
        $secondCost = 4.00;
        $thirdCost = 5.20;
        $fourthCost = 6.50;

        if ($units <=50){
            $bill = $units * $firstCost;
        } elseif ($units >=51 && $units <=150){
            $firstSet = 50 * $firstCost;
            $current = ($units-50)* $secondCost;
            $bill= $firstSet + $current;
        }elseif ($units >=151 && $units <=250){
            $firstSets = (50 * $firstCost) + (100 * $secondCost);
            $current = ($units-150)* $thirdCost;
            $bill= $firstSets + $current;
        }else{
            $firstSets = (50 * $firstCost) + (100 * $secondCost) +  (100 * $thirdCost);
            $current = ($units-250)* $fourthCost;
            $bill= $firstSets + $current;
        }
        return number_format($bill,2). " ";
        }
        if (isset($_POST['btn'])){
            $units = ($_POST['units']);
            if ($units==""){
                echo "please enter amount of units!";
            }else{
                $result = calcBill($units);
                echo "total amount for", $units, "units", "= ", $result, "NGN";
            }
        }
    ?>
<!-- END OF INPUTS -->


</body>
</html>