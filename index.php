<?php 
// echo 'hello';
$color = 'red';

/* function renderColor()
{
     static $name = 'Hang PH';

    echo $name;
        $name = 'Nam';
}
renderColor();
renderColor(); */


$carcolor = "aaa red pink";
// $number = 0x10;
// // echo $number;
// // echo strlen($color);
// // echo str_word_count($carcolor);
// // echo strrev($carcolor);
// var_dump(strpos($carcolor, $color));
// echo str_replace('red', 'blue', $carcolor);
// $PI = 3.14;
// // echo pi();
// echo sqrt (9);
// echo round($number);

/* function getPow($number, $number2)
{
    echo pow($number, $number2);
    echo $number ** $number2;
}
getPow(2,3); */



// $names = ['nam', 'Mai']

// $age = null;




// function incre()
// {
//     static $countRun = 1;  // khi chạy không cần xóa biến đi, cứ tiếp tục chạy thì sẽ in lần lượt là 123
//     echo $countRun;
//     $countRun ++;
// }

// function another()
// {
//     incre();
// }

// incre();
// incre();
// incre();
// 


// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
function startsWith($string, $substring) 
{
     $length = strlen($substring);
     return substr($string, 0, $length) === $substring;
}

$string = "Hello, world!";
$substring = "Hello";

if (startsWith($string, $substring)) {
    echo "Chuỗi bắt đầu bằng chuỗi con.";
} else {
    echo "Chuỗi không bắt đầu bằng chuỗi con.";
}
 /*Trong ví dụ trên, chúng ta đã tạo một hàm tên là startsWith() nhận vào hai tham số: $string là chuỗi gốc và $substring là chuỗi con mà chúng ta muốn kiểm tra xem chuỗi gốc có bắt đầu bằng chuỗi con này hay không.

Trong hàm startsWith(), chúng ta lấy độ dài của chuỗi con bằng cách sử dụng strlen($substring). Sau đó, chúng ta sử dụng hàm substr($string, 0, $length) để lấy một phần của chuỗi gốc với độ dài là độ dài của chuỗi con. Cuối cùng, chúng ta so sánh phần chuỗi này với chuỗi con bằng toán tử === để kiểm tra xem chuỗi gốc có bắt đầu bằng chuỗi con hay không.

Trong phần sau, chúng ta gọi hàm startsWith() và kiểm tra kết quả trả về. Nếu kết quả là true, tức là chuỗi bắt đầu bằng chuỗi con, chúng ta hiển thị thông báo "Chuỗi bắt đầu bằng chuỗi con." Ngược lại, nếu kết quả là false, tức là chuỗi không bắt đầu bằng chuỗi con, chúng ta hiển thị thông báo "Chuỗi không bắt đầu bằng chuỗi con."

Khi chạy chương trình, kết quả sẽ được hiển thị dựa trên chuỗi và chuỗi con mà chúng ta đã cung cấp. */

 // 7. Chuyển đổi chuỗi thành chữ hoa sử dụng hàm strtoupper().
 $string = "hello, world!";
$uppercaseString = strtoupper($string);
echo $uppercaseString; // Output: HELLO, WORLD!

// /*Trong ví dụ trên, chúng ta khai báo một biến $string và gán giá trị là chuỗi "hello, world!". Sau đó, chúng ta sử dụng hàm strtoupper() để chuyển đổi chuỗi thành chữ hoa và lưu kết quả vào biến $uppercaseString. Cuối cùng, chúng ta hiển thị chuỗi chữ hoa bằng cách sử dụng lệnh echo.

//Khi chạy chương trình, kết quả được hiển thị là "HELLO, WORLD!" - chuỗi gốc đã được chuyển đổi thành chữ hoa. */


// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function convertToLowercase($string) 
{
    $lowercaseString = strtolower($string);
    return $lowercaseString;
}

// Sử dụng hàm để chuyển đổi chuỗi
$string = "bui, DUNG";
$convertedString = convertToLowercase($string);
echo $convertedString; 

/*ta đã tạo một hàm có tên convertToLowercase(), nhận một tham số $string là chuỗi cần chuyển đổi. Bên trong hàm, chúng ta sử dụng hàm strtolower() để chuyển đổi chuỗi thành chữ thường và lưu kết quả vào biến $lowercaseString. Cuối cùng, chúng ta trả về giá trị của biến $lowercaseString.

Sau đó, chúng ta sử dụng hàm convertToLowercase() để chuyển đổi chuỗi "bui, DUNG". Kết quả được lưu vào biến $convertedString và được hiển thị bằng lệnh echo.

Khi chạy chương trình, kết quả sẽ là "bui, DUNG" - chuỗi đã được chuyển đổi thành chữ thường. */


//9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function convertToTitleCase($string) {
    $titleCaseString = ucwords($string);
    return $titleCaseString;
}

// Sử dụng hàm để chuyển đổi chuỗi
$string = "hello, world!";
$convertedString = convertToTitleCase($string);
echo $convertedString; // Output: Hello, World!

/* ta đã tạo một hàm có tên convertToTitleCase(), nhận một tham số $string là chuỗi cần chuyển đổi. Bên trong hàm, chúng ta sử dụng hàm ucwords() để chuyển đổi chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ và lưu kết quả vào biến $titleCaseString. Cuối cùng, chúng ta trả về giá trị của biến $titleCaseString.

Sau đó, chúng ta sử dụng hàm convertToTitleCase() để chuyển đổi chuỗi "hello, world!". Kết quả được lưu vào biến $convertedString và được hiển thị bằng lệnh echo.

Khi chạy chương trình, kết quả sẽ là "Hello, World!" - chuỗi đã được chuyển đổi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ.*/

// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeWhitespace($string) {
    $trimmedString = trim($string);
    return $trimmedString;
}

// Sử dụng hàm để loại bỏ khoảng trắng
$string = "  Hello, world!   ";
$trimmedString = removeWhitespace($string);
echo $trimmedString; // Output: "Hello, world!"

/*Trong ví dụ trên, chúng ta đã tạo một hàm có tên removeWhitespace(), nhận một tham số $string là chuỗi cần loại bỏ khoảng trắng. Bên trong hàm, chúng ta sử dụng hàm trim() để loại bỏ khoảng trắng ở đầu và cuối chuỗi và lưu kết quả vào biến $trimmedString. Cuối cùng, chúng ta trả về giá trị của biến $trimmedString.

Sau đó, chúng ta sử dụng hàm removeWhitespace() để loại bỏ khoảng trắng ở đầu và cuối chuỗi " Hello, world! ". Kết quả được lưu vào biến $trimmedString và được hiển thị bằng lệnh echo.

Khi chạy chương trình, kết quả sẽ là "Hello, world!" - chuỗi đã được loại bỏ khoảng trắng ở đầu và cuối */

//11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeFirstCharacter($string) 
{
    $newString = substr($string, 1);
    return $newString;
}

// Sử dụng hàm để loại bỏ ký tự đầu tiên
$string = "Hello, world!";
$modifiedString = removeFirstCharacter($string);
echo $modifiedString;

// //12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeLastCharacter($string) 
{
    $trimmedString = rtrim($string, substr($string, -1));
    return $trimmedString;
}
    $string = "Hello World!";
    $trimmedString = removeLastCharacter($string);
    echo $trimmedString;  // Kết quả: "Hello World"

//13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function splitStringToArray($string, $delimiter) 
{
    $explodedArray = explode($delimiter, $string);
    return $explodedArray;
}
    $string = "apple,banana,orange,grape";
    $delimiter = ",";

    $explodedArray = splitStringToArray($string, $delimiter);

    print_r($explodedArray);

//14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function joinArrayToString($array, $glue) 
{
    $implodedString = implode($glue, $array);
    return $implodedString;
}
    $array = array("apple", "banana", "orange", "grape");
    $glue = ", ";

    $implodedString = joinArrayToString($array, $glue);

    echo $implodedString;

//15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addStringToPadding($string, $padding, $length, $position = STR_PAD_RIGHT) 
{
    $paddedString = str_pad($string, $length, $padding, $position);
    return $paddedString;
}
    $string = "Hello";
    $padding = "World";
    $length = 12;
    $position = STR_PAD_RIGHT;

    $paddedString = addStringToPadding($string, $padding, $length, $position);

    echo $paddedString;

//16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
function endsWith($string, $substring) 
{
    $length = strlen($substring);
    if ($length == 0) {
        return true;
    }
    return substr($string, -$length) === $substring;
}
    $string = "Hello World";
    $substring = "World";

    if (endsWith($string, $substring)) {
        echo "The string ends with the substring.";
    } else {
        echo "The string does not end with the substring.";
    }

//17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function containsSubstring($string, $substring) 
{
    return strpos($string, $substring) !== false;
}
    $string = "Hello World";
    $substring = "World";

    if (containsSubstring($string, $substring)) {
        echo "The string contains the substring.";
    } else {
        echo "The string does not contain the substring.";
    }

//18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceNonAlphanumericCharacters($string, $replacement) 
{
    $pattern = '/[^a-zA-Z0-9]/';
    $replacedString = preg_replace($pattern, $replacement, $string);
    return $replacedString;
}
    $string = "Hello 123!@# World";
    $replacement = "*";

    $replacedString = replaceNonAlphanumericCharacters($string, $replacement);

    echo $replacedString;

//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
//Hàm is_int() trong PHP không được sử dụng để kiểm tra xem một chuỗi có phải là một số nguyên hay không. Thay vào đó, hàm is_int() được sử dụng để kiểm tra xem một biến có kiểu dữ liệu là số nguyên hay không.
//Để kiểm tra xem một chuỗi có phải là một số nguyên hay không, bạn có thể sử dụng hàm ctype_digit()
function isStringInteger($string) 
{
    return ctype_digit($string);
}
    $string = "12345";

    if (isStringInteger($string)) {
        echo "The string is an integer.";
    } else {
        echo "The string is not an integer.";
    }

//20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
function isValidEmail($email) 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
    $email = "buithidung1269@gmail.com";

    if (isValidEmail($email)) {
        echo "The email is valid.";
    } else {
        echo "The email is not valid.";
    }





