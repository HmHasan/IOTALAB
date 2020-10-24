<?php 

// Question One Answaer
echo "Question One Answer <br>";
echo "<hr>";

$city = ["Bangladesh"=>"Dhaka","India"=>"New Delhi","Chittagoung"=>"Noakhali"];

foreach($city as $key=>$value)
{
    echo $value ." is capital of " .$key ."<br/ >";
}

echo "<hr>";

echo "Question Two answer <br>";

// Question Two Answer

$sum = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
62, 62, 65, 64, 68, 73, 75, 79, 73];

$avg =  array_sum($sum) / count($sum);

echo "avg number is = " .$avg;

echo "<hr>";

echo "Question three answer <br>";

$str = ["abcd","abc","de","hjjj","g","wer"];

$minAndMax = array_map('strlen',$str);
echo "Maximum StringLenths Is = ". max($minAndMax)  . "  And   MinimumStringLenght  = ".min($minAndMax  );


echo "<hr>";

echo "Question Four answer <br>";
// Date Time 

date_default_timezone_set("Asia/Dhaka");

function howManyDays($date){
        $date = new DateTime($date);
        $todayDate = new DateTime("2020-10-30 00:00:00");
        $answer = $todayDate->diff($date)->format("%d");
        return $answer;
    }
    echo "The given day will come after " . howManyDays("2020-10-20 00:00:00"). " days";
?>