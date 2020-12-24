

<h3 style="background: blue; color: white; padding: 11px;">Chris' PHP BMI Calculator</h3>
<hr>
<p>Calculate in Kilograms and Meters</p>
<form action="#" method="post">
    <input type="number" name="userWeight" id="userWeight" placeholder="Enter Weight in Kg's" step="any">
    <input type="number" name="userHeight" id="userHeight" placeholder="Enter Height in Meters" step="any">
    <button style="background: lightblue" type="submit">Calculate</button>

</form>
<br><hr>
<p>Calculate in Pounds and Inches</p>
<form action="#" method="post">
    <input type="number" name="userWeight2" id="userWeight2" placeholder="Enter Weight in Pounds">
    <input type="number" name="userHeight2" id="userHeight2" placeholder="Enter Height in Inches">
    <button style="background: lightgreen" type="submit">Calculate</button>

</form>
<br><hr>
<?php
    $userHeight = ($_POST['userHeight']);
    $userWeight = ($_POST['userWeight']);

    $userHeight2 = ($_POST['userHeight2']);
    $userWeight2 = ($_POST['userWeight2']);

    function calculateBmi($w, $h){

        $userHeightSquared = $h * $h;
        
        $bmi = $w / $userHeightSquared;
        $ouput = floor($bmi); //Rounds the final value down
        
        echo("<p style='background: lightblue; padding: 11px;'>Your Calculated Body Mass Index is " . $ouput . "<br><hr>");
        }

    function bmiCalc2($w, $h){

        $times705 = $w * 705;
        $firstDivide = $times705 / $h;
        $secondDivide = $firstDivide / $h;
        $flooredBmi = floor($secondDivide); //Rounds the final value down
    
        echo("<p style='background: lightgreen; padding: 11px;'>Your Calculated Body Mass Index is " . $flooredBmi . "<br><hr>");
    }

    if(isset($_POST['userHeight'])){

        if(!$_POST['userHeight'] || !$_POST['userWeight']){
            echo "<p style='background: lightblue'>Please enter in your info before hitting the calculate button.</p>";
        } else {
            calculateBmi( $userWeight, $userHeight);
        }
    } 

    if(isset($_POST['userHeight2'])){

        if(!$_POST['userHeight2'] || !$_POST['userWeight2']){
            echo "<p style='background: lightgreen'>Please enter in your info before hitting the calculate button.</p>";

        } else {
            bmiCalc2( $userWeight2, $userHeight2);

        }
        }
?>