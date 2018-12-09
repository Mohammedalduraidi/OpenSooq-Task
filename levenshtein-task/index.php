<?php 
include("levenshteinDistance.php");
$levenshtein = new levenshtein; //instantiation
$hamming = new Hamming; //instantiation
if(isset($_POST['string1'])){
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    //  print_r($_POST);
}

$levenshteinDistance = ($levenshtein -> edDisRecursive($string1, $string2));
$hammingDistance = ($hamming -> hammingDistance($string1, $string2));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opensooq task</title>
</head>
<body>
    <form method="POST" action="index.php">
        <div>
            <label>First String</label><br>
            <input type="text" name="string1">
        </div>
        <div>
            <label>Second String</label><br>
            <input type="text" name="string2">
        </div>  
        <input type="submit" value="Submit">
    </form>
    <?php 
       echo "<br>";
       echo "<br>";
       echo "The edit distance between two strings is ";
       echo $levenshteinDistance;
       echo "<br>";
       echo "<br>";
       echo "The hamming distance between two strings is ";
       echo $hammingDistance;
    ?>
</body>
</html>