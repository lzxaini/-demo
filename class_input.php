<?php
/**
 * 
 */
class input{
		/*定义一个函数post，用于检查用户输入*/
		function post( $word ){
			if ( $word == '' ) {
				return false;
			}
		/*定义一个数组用于存放禁止使用的昵称*/
		$n = ["张三","李四","小明"];
		/*循环判断输入的昵称是否为禁止使用的昵称*/
		foreach ($n as $usname) {
			if ($word == $usname) {
				// return false;
				echo "<script> alert('不合法的主题！') </script>";
				die('<br />'.'警告：'.'禁止使用该主题！');
			}
		}
		return true;
	}
}
?>