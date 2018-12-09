 <?php
class levenshtein {
  function edDisRecursive($str1, $str2){
        //Create  edit distance matrix for str1 and str2
        $distanceMatrix=[[0]];
        // Filling the first row of the matrix.
        // If this is the first row then we're transforming empty string to str1.
        // In this case the number of transformations equals to size of str1 substring.
        for ($i = 1; $i <= strlen($str1); $i++){
      $distanceMatrix[0][$i]=$i; 
      if($i<= strlen($str2)){
         array_push($distanceMatrix,[]);
         $distanceMatrix[$i][0]=$i; 
      }
  }
        // Filling the first column of the matrix.
        // If this is the first column then we're transforming empty string to str2.
        // In this case the number of transformations equals to size of str2 substring.
         for ($i = strlen($str1); $i <= strlen($str2); $i++){
         array_push($distanceMatrix,[]);
         $distanceMatrix[$i][0]=$i; 
      }
   for ($j = 1; $j <= strlen($str1); $j++){
      for ($i = 1; $i <= strlen($str2); $i++){
          if($str1[$j-1] == $str2[$i-1]) $distanceMatrix[$i][$j] = $distanceMatrix[$i-1][$j-1];
         else  $distanceMatrix[$i][$j]= $this->min($distanceMatrix[$i-1][$j-1],$distanceMatrix[$i][$j-1],$distanceMatrix[$i-1][$j])+1;
      }
  }
  return $distanceMatrix[strlen($str2)][strlen($str1)];
  }
  private function min($o,$t,$th){
      if($o<=$t and $o<=$th) return $o;
      if($t<=$o and $t<=$th) return $t;
      else return $th;
  }
}

 
class Hamming {
    function hammingDistance($str1, $str2) {
        $distance = 0;
        if(strlen($str1) < strlen($str2))
            {
             $str1= str_pad($str1,strlen($str2)," ");
            } else if(strlen($str2) < strlen($str1))
            {
            $str2= str_pad($str2,strlen($str1)," ");
            }
        for ($i = 0; $i < strlen($str1); $i++){
            if ($str1[$i] !== $str2[$i]) {
                $distance++;
            }
        }
        return $distance;
    }
}
?>