function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

echo $result[0]; // Output: foo
echo $result[1]; // Output: baz