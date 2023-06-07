<?php
// //Câu 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo " Câu 1: ";
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$Number = 6;
if (isEven($Number)) {
    echo "$Number là số chẵn ";
} else {
    echo "$Number là số lẻ ";
}
?>
<?php echo "<br>" ?>

<?php
// Câu 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "Câu 2: ";
function isSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 20;
$sum = isSum($n);
echo " Tổng của các số từ 1 đến $n la: $sum";
?>
<?php echo "<br>" ?>

 <?php
// Câu 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "Câu 3: ";
function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        echo "Bảng cửu chương của  $i: <br>" ;
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo $i . " x " . $j . " = " . $result . "<br>";
        }
        echo "<br>";
    }
}
multiplicationTable();
?>
<?php echo "<br>" ?>
<?php
//Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "Câu 4: ";
function containsWord($string, $word) {
    $position = strpos($string, $word);
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Nguyen Tran Nhu Loc";
$word = "Huong";
if (containsWord($string, $word)) {
    echo "Chuỗi có chứa từ '{$word}'.";
} else {
    echo "Chuỗi không có chứa từ '{$word}'.";
}
?>
<?php echo "<br>" ?>

<?php
// Câu 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo "Câu 5: ";
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];
    $length = count($array);

    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }

        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return array('min' => $min, 'max' => $max);
}

$array = array(10, 20, 2, 4, 100, 39, 21);
$result = findMinMax($array);

echo "Giá trị nhỏ nhất trong mảng là: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất trong mảng là: " . $result['max'];

?>
<?php echo "<br>" ?>

<?php
// Câu 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Câu 6: ";
function sortArrayAscending($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}
$array = array(1, 4, 7, 9, 3, 32, 24);
$sortedArray = sortArrayAscending($array);

echo "Mảng sau khi được sắp xếp theo thứ tự tăng dần là: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
?>
<?php echo "<br>" ?>

<?php
// Câu 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "Câu 7: ";
function factorial($number) {
    if ($number === 0 || $number === 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

$number = 11;
$factorial = factorial($number);

echo "Giai thừa của " . $number . " là: " . $factorial;

?>
<?php echo "<br>" ?>

<?php
//Câu 8.  Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Câu 8: ";
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function findPrimesInRange($start, $end) {
    $primes = array();

    for ($number = $start; $number <= $end; $number++) {
        if (isPrime($number)) {
            $primes[] = $number;
        }
    }

    return $primes;
}


$start = 3;
$end = 50;
$primeNumbers = findPrimesInRange($start, $end);

echo "Các số nguyên tố trong khoảng từ " . $start . " đến " . $end . " là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Câu 9: ";
function sumArray($array) {
    $sum = 0;
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        $sum += $array[$i];
    }

    return $sum;
}

$array = array(11, 30, 12, 55, 100);
$total = sumArray($array);

echo "Tổng của các số trong mảng là: " . $total;

?>
<?php echo "<br>" ?>

<?php
// Câu 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. 
echo "Câu 10: ";
function fibonacci($n) {
    if($n == 0) {
        return 0;
    } elseif($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

function print_fibonacci($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        echo fibonacci($i) . " ";
    }
}

$start = 0;
$end = 10;
echo "Các số Fibonacci từ $start đến $end là: ";
print_fibonacci($start, $end);
?>
<?php echo "<br>" ?>

<?php
// Câu 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. 
echo "Câu 11: ";
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = countDigits($number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += power($digit, $numDigits);
        $temp = (int) ($temp / 10);
    }

    return $sum === $number;
}

function countDigits($number) {
    $count = 0;

    while ($number > 0) {
        $count++;
        $number = (int) ($number / 10);
    }

    return $count;
}

function power($base, $exponent) {
    $result = 1;

    for ($i = 0; $i < $exponent; $i++) {
        $result *= $base;
    }

    return $result;
}

$number = 051002;
$isArmstrong = isArmstrongNumber($number);

if ($isArmstrong) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không là số Armstrong.";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Câu 12: ";
function insertElement($array, $element, $position) {
    $length = count($array);
    
    if ($position < 0 || $position > $length) {
        // Nếu vị trí chèn không hợp lệ, trả về mảng ban đầu
        return $array;
    }

    $result = array();
    
    for ($i = 0; $i < $length; $i++) {
        if ($i === $position) {
            $result[] = $element;
        }
        
        $result[] = $array[$i];
    }

    // Nếu vị trí chèn là cuối mảng, thêm phần tử vào cuối mảng
    if ($position === $length) {
        $result[] = $element;
    }

    return $result;
}

// Ví dụ
$array = array(1, 2, 3, 4, 5);
$element = 2;
$position = 20;

$newArray = insertElement($array, $element, $position);

echo "Mảng sau khi chèn phần tử là: ";
print_r($newArray);

?>
<?php echo "<br>" ?>

<?php
// Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Câu 13: ";
function removeDuplicates($array) {
    $result = array();
    
    foreach ($array as $element) {
        if (!inArray($element, $result)) {
            $result[] = $element;
        }
    }
    
    return $result;
}

function inArray($element, $array) {
    foreach ($array as $value) {
        if ($element === $value) {
            return true;
        }
    }
    
    return false;
}

$array = array(20, 30, 40, 45, 69, 40, 30, 70, 69);
$uniqueArray = removeDuplicates($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($uniqueArray);

?>
<?php echo "<br>" ?>

<?php
// Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Câu 14: ";
function findPosition($array, $element) {
    $position = -1;
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $element) {
            $position = $i;
            break;
        }
    }
    
    return $position;
}

$array = array(10, 20, 32, 50, 33);
$element = 32;

$position = findPosition($array, $element);

if ($position !== -1) {
    echo "Phần tử $element được tìm thấy ở vị trí $position trong mảng.";
} else {
    echo "Phần tử $element không được tìm thấy trong mảng.";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 15. Viết chương trình PHP để đảo ngược một chuỗi.
echo "Câu 15: ";
function reverseString($str) {
    $length = strlen($str);
    $reversedStr = '';
    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedStr .= $str[$i];
    }
    
    return $reversedStr;
}

$string = "Tran Nhu Loc";
$reversedString = reverseString($string);

echo "Chuỗi sau khi đảo ngược là: $reversedString";
?>
<?php echo "<br>" ?>

<?php
// Câu 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Câu 16: ";
// Hàm tính số lượng phần tử trong mảng
function countElements($array) {
    $count = 0;
    
    foreach ($array as $element) {
        $count++;
    }
    
    return $count;
}

$array = array(10, 21, 22, 40, 33, 43, 50);
$elementCount = countElements($array);

echo "Số lượng phần tử trong mảng là: $elementCount";

?>
<?php echo "<br>" ?>

<?php
// Câu 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "Câu 17: ";
function isPalindrome($str) {
    $str = strtolower($str); // Chuyển đổi chuỗi thành chữ thường
    
    $length = strlen($str);
    $mid = floor($length / 2);
    
    for ($i = 0; $i < $mid; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            return false;
        }
    }
    
    return true;
}

$string = "nhuloc";

if (isPalindrome($string)) {
    echo "Chuỗi '$string' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$string' không là chuỗi Palindrome.";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Câu 18: ";
function countOccurrences($array, $element) {
    $count = 0;
    
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
    
    return $count;
}

$array = array(1, 2, 3, 5, 5, 4 ,3, 2, 2, 2, 1);
$element = 2;
$occurrenceCount = countOccurrences($array, $element);

echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrenceCount";

?>
<?php echo "<br>" ?>

<?php
// Câu 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo " Câu 19: ";
function sortDescending($array) {
    $length = count($array);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                // Hoán đổi vị trí của hai phần tử
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    
    return $array;
}

$array = array(5, 2, 9, 1, 7);
$sortedArray = sortDescending($array);

echo "Mảng sau khi sắp xếp giảm dần là: ";
foreach ($sortedArray as $value) {
    echo "$value ";
}

?>

<?php echo "<br>" ?>

<?php
// Câu 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Câu 20: ";
function addToBeginning($array, $element) {
    array_unshift($array, $element);
    return $array;
}

function addToEnd($array, $element) {
    $array[] = $element;
    return $array;
}

$array = array(1, 3, 5, 10, 20);
$element = 50;

$newArray = addToBeginning($array, $element);
echo "Mảng sau khi thêm phần tử vào đầu là: " . implode(", ", $newArray) . "<br>";

$newArray = addToEnd($array, $element);
echo "Mảng sau khi thêm phần tử vào cuối là: " . implode(", ", $newArray);
?>
<?php echo "<br>" ?>
<?php
// Câu 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Câu 21: ";
function findSecondLargest($array) {
    $length = count($array);
    
    if ($length < 2) {
        return null; // Trả về null nếu mảng không đủ phần tử
    }
    
    $max = $array[0];
    $secondMax = null;
    
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] > $max) {
            $secondMax = $max;
            $max = $array[$i];
        } elseif ($array[$i] < $max && ($secondMax === null || $array[$i] > $secondMax)) {
            $secondMax = $array[$i];
        }
    }
    
    return $secondMax;
}

$array = array(12, 30, 20, 50, 22, 44, 55);
$secondLargest = findSecondLargest($array);

if ($secondLargest !== null) {
    echo "Số lớn thứ hai trong mảng là: $secondLargest";
} else {
    echo "Mảng không đủ phần tử.";
}

?>

<?php echo "<br>" ?>

<?php
// Câu 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Câu 22: ";

function findUSCLN($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findBSCNN($a, $b)
{
    $uscln = findUSCLN($a, $b);
    $bscnn = ($a * $b) / $uscln;
    return $bscnn;
}

// Hai số nguyên dương
$a = 24;
$b = 36;

// Tìm USCLN và BSCNN
$uscln = findUSCLN($a, $b);
$bscnn = findBSCNN($a, $b);

// In kết quả
echo "USCLN của $a và $b là: " . $uscln . "<br>";
echo "BSCNN của $a và $b là: " . $bscnn;
echo "<br>" ?>

<?php
// Câu 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. Tổng các ước thực sự của a((trừ a)) bằng a thì a là số hoàn hảo
echo "Câu 23: ";
function isPerfectNumber($number)
{
    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

// Số cần kiểm tra
$number = 22;

// Kiểm tra xem số có phải là số hoàn hảo hay không
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?>

<?php echo "<br>" ?>

<?php
//Câu 24.  Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Câu 24: ";
function findLargestOddNumber($arr)
{
    $largestOddNumber = null;

    foreach ($arr as $number) {
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }

    return $largestOddNumber;
}


$array = [20, 11, 22, 23, 33, 40, 55];
$largestOdd = findLargestOddNumber($array);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
?>  

<?php echo "<br>" ?>

<?php
// Câu 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Câu 25: ";
function isPrimeNumber($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Số cần kiểm tra
$number = 17;

// Kiểm tra xem số có phải là số nguyên tố hay không
if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
?>

<?php echo "<br>" ?>

<?php
// Câu 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Câu 26: ";
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0) {
            if ($largestPositive === null || $number > $largestPositive) {
                $largestPositive = $number;
            }
        }
    }

    return $largestPositive;
}

$array = array(-10, -2, 0, 5, 10, 5);
$largestPositive = findLargestPositive($array);

if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $largestPositive";
} else {
    echo "Không có số dương trong mảng.";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Câu 27: ";
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0) {
            if ($largestNegative === null || $number > $largestNegative) {
                $largestNegative = $number;
            }
        }
    }

    return $largestNegative;
}

$array = array(2, 10, 22, -11, -12, -30);
$largestNegative = findLargestNegative($array);

if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative";
} else {
    echo "Không có số âm trong mảng.";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo " Câu 28: ";
function sumOddNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }

    return $sum;
}

$n = 22;
$sum = sumOddNumbers($n);

echo "Tổng các số lẻ từ 1 đến $n là: $sum";

?>
<?php echo "<br>" ?>

<?php
// Câu 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Câu 29: ";
function isPerfectSquare($number) {
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

function findPerfectSquares($start, $end) {
    $perfectSquares = array();

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }

    return $perfectSquares;
}

$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($perfectSquares as $number) {
    echo $number . " ";
}

?>
<?php echo "<br>" ?>

<?php
// Câu 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Câu 30: ";
function isSubstring($string, $substring) {
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;

        while ($j < $substringLength && $string[$i + $j] == $substring[$j]) {
            $j++;
        }
        if ($j == $substringLength) {
            return true;
        }
    }

    return false;
}


$string = "Tran Nhu Loc";
$substring = "Long";

if (isSubstring($string, $substring)) {
    echo "$substring là chuỗi con của $string";
} else {
    echo "$substring không phải là chuỗi con của $string";
}

?>