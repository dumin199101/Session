<?php
/**
 * Created by PhpStorm.
 * User: goosuu
 * Date: 2019/8/6
 * Time: 13:32
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

# 获取session数据
show($_SESSION['name']);


