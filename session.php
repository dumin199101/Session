<?php
/**
 * Created by PhpStorm.
 * User: goosuu
 * Date: 2019/8/6
 * Time: 11:39
 */

function show($msg){
    echo '<pre>';
    print_r($msg);
    echo '</pre>';
    echo '<br/>';
}

# 开启session
session_start();

# 获取session_id()
show(session_id());
# 设置session_id
session_id("lieyan123456");
show(session_id());

# 打印session_name
show(session_name());