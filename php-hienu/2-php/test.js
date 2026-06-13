function calculator2($a, $b) {
  $a += 10;
  $b += 5;
}

$a = 3;
$b = 4;
calculator2($a, $b);
console.log(">>> a=", $a);
console.log(">>> b=", $b);

$name = "Hoàng";

$getAll = function () {
  console.log($name);
};
$getAll();

numbers = [1, 2, 3, 4, 5];
numbers.map((number) => {
  console.log(number);
});
