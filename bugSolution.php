function my_function($a, $b) {
  // Check if both $a and $b are numeric
  if (is_numeric($a) && is_numeric($b)) {
    if ($a > $b) {
      return $a;
    } else {
      return $b;
    }
  } else {
    // Handle the case where one or both of the arguments are not numeric
    trigger_error('Error: Both arguments must be numeric', E_USER_WARNING);
    return null;
  }
}

//This is a robust example which covers errors and returns null on invalid inputs
$result = my_function(10, 'abc');
var_dump($result); //Warning: Both arguments must be numeric
$result = my_function(10, 20);
var_dump($result); //int(20)
$result = my_function('abc', 'def');
var_dump($result); //Warning: Both arguments must be numeric