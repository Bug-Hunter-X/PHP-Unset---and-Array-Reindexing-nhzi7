function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]); //This will cause an error if you try to access an element later
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

// Trying to access a removed element can lead to issues like undefined offset errors
echo $result[1]; // Notice: Undefined offset: 1 in ...