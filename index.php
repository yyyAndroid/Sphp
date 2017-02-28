<html>
<body>
<h2>变量部分</h2>
<h5>PHP static 关键字</isindex></h5>
<?php

// baseTypeFloatFunction();
// baseTypeArrayFunction();
// baseTypeNullFunction();
// baseTypeStringFunction();
// baseTypeConstantFunction();
// baseTypeConstantFunction2();
// baseTypeConstantFunction();
// baseTypeOperator();
// baseTypeString();
// baseOperatorThree();
// baseOperatorArray();
// functioTeset("abe","男");
// functionTest2();
// functionTest2("abe");

// functionArray5();
// functionArraySort();
  // functionArraySort3();
  // 
// functionServer();

// functionRequest();
// functionPost();
functionGet();


function functionGet(){
	?>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			echo "Study" . $_GET['subject'] . " at" . $_GET['web'];
		 ?>	
	</body>
	</html>

	<?php
}



function functionPost(){
	?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			Name:<input type="text" name="fname">
				<input type="submit">
		</form>

	<?php
	$name = $_POST['fname'];
	echo "输入内容为:".$name;
}
/**
 * PHP $_REQUEST 用于收集HTML表单提交的数据
 * [functionRequest description]
 * @return [type] [description]
 */
function functionRequest(){
	?>
	<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name:<input type="text" name="fname">
		<input type="submit">
	</form>
				

	<?php
	$name = $_REQUEST['fname'];
	echo "输入内容为：".$name;
}
/**
 * _SERVER 超全局变量保存关于 报头、路径和位置的信息
 * [functionServer description]
 * @return [type] [description]
 */
function functionServer(){
	echo $_SERVER['PHP_SELF'];//index.php
	echo "<br>";
	echo $_SERVER["SERVER_NAME"];//localhost
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];//Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];	//index.html
	echo "<br>";
	echo $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	echo $_SERVER['REMOTE_PORT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>";
	echo $_SERVER['HTTPS'];


}
/**
 * [functionGlobals 超全局变量]
 * @return [type] [description]
 */
function functionGlobals(){

		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}





/**
 * sort() - 以升序对数组进行排序
 * rsort() - 以降序对数组进行排序
 * 
 * asort() - 根据值，以升序关联数组进行排序
 * ksort() -根据健 ，以升序对关联数组进行排序
 * 
 * arsort() -根据值，以降序对关联数组进行排序
 * krsort() -根据健,以降序对关联数组进行排序
 * [functionArraySort 数组排序]
 * @return [type] [description]
 */

function functionArraySort3(){
	$age = array("Bill" => "23","Steve" => "534","Peter" => "2");

	krsort($age);

	foreach ($age as $key => $value) {
		echo "Key = ".$key." , Value = ".$value;
		echo "<br>";
		# code...
	}
}

function functionArraySort2(){
	$numbers = array(3,5,1,55,22);
	sort($numbers);
	foreach ($numbers as $value) {
		echo $value . "<Br>";
		# code...
	}
}

function functionArraySort(){
		$cars = array("Volvo","SAW","SAAB");
		sort($cars);
		foreach ($cars as $x) {
			echo $x."<br>";
			# code...
		}
}


function functionArray5(){
	$age = array("Bill" => "43","Steve" => "34","Peter" => "23");

	foreach ($age as $key => $value) {
		echo "Key = ".$key ."  , Value = ".$value;
		echo "<br>";
		# code...
	}
}

function functionArray4(){
	$age = array("Peter" => "32", "Ben" => "45","Joe" => "43");

	$age['Peter'] = "43";
	$age['Ben'] = "45";
	$age['Joe'] = "65";

	echo " Peter is ".$age['Peter']." yesars old";
}

function functionArray3(){
	$cars = array("Volvo","BMW","SAAB");
	$cars[0] = "voloe";
	$cars[2] = "bmw";
	echo " this cars is ".$cars[0].",".$cars[1].",".$cars[2]."<br>";
	echo count($cars);
}

function functionTest3($x,$y){
	$z = $x + $y;
	return $z;
}

function functionTest2($name = "小刘"){
	echo $name;
}

function functioTeset($name,$sex){
	echo "姓名".$name." ".$sex;
}

function baseOperatorArray(){
	$colors = array("red","green","blue","yellow");
		foreach ($colors as $value) {
			# code...
			echo $value."<br>";
		}
}

function baseOperatorThree(){
	$x = array("a" => "red","b" => "green");
	$y = array("b" => "blue" , "a" => "yellow");
	$z = $x + $y;
	echo "x=".$x[0][0]."<br>";
	var_dump($z);
	echo "<br>";
	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);

}


function baseOperatorTwo(){
	$x = 100;
	$y = "100";

	var_dump($x == $y);
	echo "<br>";
	var_dump($x === $y);
	echo "<br>";
	var_dump($x != $y);
	echo "<br>";
	var_dump($x !== $y);



}


function baseOperator(){
	$x = 10;
	echo ++$x."<br>";
	 $y = 20;
	 echo $y++ . "<br>";

	 $x = 5;
	 echo $x ."<br>";

}

function baseTypeString(){
	$a = "Hello";
	$b = $a . "world!";
	echo $b . "<br>";

	$x = "Hello";
	$x .= "wold";
	echo $x." abe_dev";
}

function baseTypeOperator(){
	$x = 10;
	$y = 44;
	echo $x + $y;
	echo "<br>";
	echo $x - $y;
	echo "<br>";
	echo $x * $y;
	echo "<br>";
	echo $x / $y;
	echo "<br>";
	echo $x % $y;
}

/**
 * 设置PHP常量 deine()函数
 * 1.收个参数定义常量的名称
 * 2.第二个参数定义常量的值
 * 3.可选的第三个参数规定常量名是否对大小写敏感，默认是false
 * [baseTypeConstantFunction 常量]
 * @return [type] [description]
 */
function baseTypeConstantFunction(){
		// define("GREETING", "Welcome to W3School.com.cn");
		// echo GREETING;
} 
/**
 * [baseTypeConstantFunction2 description]
 * @return [type] [description]
 */
function baseTypeConstantFunction2(){
	define("GREETING", "Welecom to W2School.com.cn",true);
	echo greeting;
}

function baseTypeStringFunction(){
	echo strlen("hello world");//  strlen()字符串长度
	echo "<br>";
	echo strpos("hello world", "world");//strpos用于检索字符串内指定的字符或文本

}

function baseTypeNullFunction(){
	$x = "Hello world";
	$x = null;
	var_dump($x);
}

/*
*汽车对象
*/
class Car{
	var $color;
	function Car($color = "green"){
		$this->color = $color;
	}
	function what_color(){
		return $this->color;
	}
}
//数组  PHP var_dump() 会返回变量的数据类型和值
function baseTypeArrayFunction(){
	$cars = array("Volvo","BMW","SAAB");
	var_dump($cars);
}

//浮点型
function baseTypeFloatFunction(){
	$x = 10.26;
	var_dump($x);
	echo "<br>";

	$x = 2.5e5;
	var_dump($x);
	echo "<br>";

	$x = 8E-5;
	var_dump($x);
}

function baseTypeIntFunction(){
	$x = 3456;
	var_dump($x);
	echo "<br>";

	$x = -123;
	var_dump($x);
	echo "<br>";

	$x = 0x8c;//十六进制
	var_dump($x);
	echo "<br>";

	$x = 032;//八进制
	var_dump($x);
	echo "<br>";


}

//布尔类型
function baseTypeBoolanFunction(){
	$x = true;
	$y = false;
}

//基本类型  字符串
function baseTypeFunction(){
	$x = "hello world";
	echo $x;
	echo "<br>";
	$x = 'Hello world';
	echo $x;
}

function myTest(){
	static $x = 0;

	echo "<br>$x";
	$x++;
}

#echo 和 print之间的差异
#echo - 能够输出一个以上的字符串
#print - 只能数据一个字符串
#提示：echo比print稍快，因为它不用返回任何值；
#
function echoFunction(){
	$txt1 = "Learn PHP";
	$txt2 = "WDFKDLFJDK";
	$cars = array("Volvo" , "BMW");

	echo $txt1;
	echo "<br>";
	echo "Study PHP at $txt2";
	echo "My car is a {$cars[0]}";
}

function printFunction(){
	print "<h2> PHP is fun!</h2>";
	print "Hello world!<br>";
	print "learn php";
	$txt1 = "lean PHP";
	$txt2 = "W34djfksdfl.cn";
	$cars = array("Volvo","BMC");

	print $txt1;
	print $txt2;
	print "Study PHP at $txt2<br>";
	print "My Car is a {$cars}";
}
?>

</body>
</html>

