function my_function($a, $b) {
  if ($a > $b) {
    return $a;
  } else {
    return $b;
  }
}

//This function will throw a warning if $a or $b is not an integer
//It also will not handle cases where $a or $b are not numbers at all
//It also returns only one value, even if the inputs are not numbers
$result = my_function(10, 'abc');
var_dump($result); //Warning: > cannot be applied to string and integer