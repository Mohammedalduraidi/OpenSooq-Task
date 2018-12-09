<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
<?php 
include("levenshteinDistance.php");
//instantiation
$levenshtein = new levenshtein; 
$hamming = new Hamming; 
echo 'Expect edDisRecursive("","") toBe ';
echo $levenshtein -> edDisRecursive('', ''); // should be 0
echo "<br>";
echo "<br>";

echo 'Expect edDisRecursive("a","") toBe ';
echo $levenshtein -> edDisRecursive('a', ''); // should be 1
echo "<br>";
echo "<br>";

echo 'Expect edDisRecursive("abc","") toBe ';
echo $levenshtein -> edDisRecursive('abc', ''); //should be 3
echo "<br>";
echo "<br>";
echo " /-----------------------------Second Test-----------------------------------/ ";
echo "<br>";
echo "<br>";

echo "//Should just add I to the beginning.";
echo "<br>";
echo 'Expect edDisRecursive("islander","slander") toBe ';
echo $levenshtein -> edDisRecursive('islander', 'slander'); // should be 1
echo "<br>";
echo "<br>";

echo "//Needs to substitute M by K, T by M and add an A to the end";
echo "<br>";
echo 'Expect edDisRecursive("mart","karma") toBe ';
echo $levenshtein -> edDisRecursive('mart', 'karma'); //should be 3
echo "<br>";
echo "<br>";

echo "//Substitute K by S, E by I and insert G at the end.";
echo "<br>";
echo 'Expect edDisRecursive("kitten","sitting") toBe ';
echo $levenshtein -> edDisRecursive('kitten', 'sitting'); //should be 3
echo "<br>";
echo "<br>";

echo "//Should add 4 letters FOOT at the beginning.";
echo "<br>";
echo 'Expect edDisRecursive("ball","football") toBe ';
echo $levenshtein -> edDisRecursive('ball', 'football'); //should be 4
echo "<br>";
echo "<br>";

echo "//Needs to substitute the first 5 chars: INTEN by EXECU";
echo "<br>";
echo 'Expect edDisRecursive("intention","execution") toBe ';
echo $levenshtein -> edDisRecursive('intention', 'execution'); // should be 5
?>
   
</body>
</html>





  
   