<?php
/**
 * Created by PhpStorm.
 * User: Mr.Zhangwp
 * Date: 2019/7/9
 * Time: 11:52
 * Nerver Stop Learning.
 */
function test_helper() {
    return 'OK';
}

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}