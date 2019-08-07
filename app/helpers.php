<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-8-7
 * Time: 10:14
 */

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}