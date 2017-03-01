<html>
<body>
<h2>魔术变量</h2>
<?php 
	echo '__LINE__文件中的当前行号 这是第'.__LINE__.'行'.'<br>';
	echo '__FILE__文件的完整路径和文件名  该文件位于'.__FILE__.'<br>';
	echo "__DIR__文件所在的目录。如果用在被包括文件中，则放回别包括的文件所在目录".'<br>';
	echo __DIR__.'<br>';
	echo '__FUNCTION__ PHP4.3.0 新加，在PHP5起常量返回该函数被定义时的名字';
	function  test(){
			echo '函数名为:'.__FUNCTION__;
	}
	test();
	//--------------------------------------
	echo '__CLASS__'.'返回该类被定义时的名字'.'<br>';

	class test{
			function _print(){
			echo '类名为'.__CLASS__."<br>";
			echo "函数名为:".__FUNCTION__;
			}
	}
	$t = new test();
	$t->_print();
//----------------------------------------------
echo '__TRAIT__  PHP5.4.0添加自PHP5.4.0 PHP实现了代码复用的一个方法成为traits';
class Base{
	public function sayHello(){
		echo 'Hello';
	}
} 

trait SayWorld{
	public function sayHello(){
	parent::sayHello();
	echo 'World';
	}
}

class MyHelloWold extends Base{
	use SayWorld;
}

$o = new MyHelloWold();
$o->sayHello();
//----------------------------------------------
echo '__METHOD__'.'PHP5.0.0新加 返回该方法被定义时的名字';
function test2(){
	echo '函数名为：'.__METHOD__.'<br>';
}
test2();

//----------------------------------------
namespace Project{
	
echo '__NAMESPACE__ PHP5.3.0  当前命名空间的名称'.'<br>';
echo '命名空间为:'.__NAMESPACE__;
	
}
?>
</body>
</html>