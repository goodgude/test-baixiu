<?php 
//define方法只能用一次，多次require会重复定义报错。
require_once 'config.php';

?>

<h1>前台页面</h1>
<p><?php echo DB_USER ?></p>