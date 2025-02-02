```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
      // Or, you might choose to skip the non-numeric value:
      // continue;
    }
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); // Warning: Non-numeric value encountered in array, then output: 12
```