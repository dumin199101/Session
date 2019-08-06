<?php
/**
 * Created by PhpStorm.
 * User: goosuu
 * Date: 2019/8/6
 * Time: 13:43
 */
header("Content-Type: text/html;charset=utf-8");
function show($msg){
    echo '<pre>';
    print_r("当前数据" . $msg);
    echo '</pre>';
    echo '<br/>';
}

# 开启session
session_start();

# 打印当前session
show(session_id());

# 设置session数据
$_SESSION['name'] = "lieyan123";
$_SESSION['age'] = 22;
$_SESSION['addr'] = 'beijing';


# 删除name
unset($_SESSION['name']);
print_r($_SESSION);
echo '<br/>';

# 清空session数据
# 方式1
# session_unset();
# 方式2
/*$_SESSION = array();
print_r($_SESSION);
echo '<br/>';*/

# 销毁session
session_destroy();
# 销毁session，但是不会马上销毁内存中的session变量，当下次访问时，session才清空
show($_SESSION['addr']);

show(session_id());