<?php
$a1 = "Topeka";
$a2 = "Denver";
$a3 = "Richmond";
$a4 = "Sacremento";
$a5 = "Pierre";

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$correct = 0;
echo "Here are your results from the quiz" . "<br>" . "<br>";
echo "Question 1: What is the capital of Kansas?" . "<br>";
echo "You answered: " . $q1 . "<br>";
echo "Correct answer: " . $a1 . "<br><br>";
if ($q1 == $a1)
{
    $correct ++;
}

echo "Question 2: What is the capital of Colorado?" . "<br>";
echo "You answered: " . $q2 . "<br>";
echo "Correct answer: " . $a2 . "<br><br>";
if ($q2 == $a2)
{
    $correct ++;
}

echo "Question 3: What is the capital of Virginia?" . "<br>";
echo "You answered: " . $q3 . "<br>";
echo "Correct answer: " . $a3 . "<br><br>";
if ($q3 == $a3)
{
    $correct ++;
}

echo "Question 4: What is the capital of California?" . "<br>";
echo "You answered: " . $q4 . "<br>";
echo "Correct answer: " . $a4 . "<br><br>";
if ($q4 == $a4)
{
    $correct ++;
}

echo "Question 5: What is the capital of South Dakota?" . "<br>";
echo "You answered: " . $q5 . "<br>";
echo "Correct answer: " . $a5 . "<br><br>";
if ($q5 == $a5)
{
    $correct ++;
}

echo "<br>" . "You got " . $correct . " answers correct.";
echo "Your score is " . ($correct*20) . "% ";

?>
