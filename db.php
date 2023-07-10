<?php

header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

// DB 주소, DB 계정 아이디, DB 계정 비밀번호, DB 이름
$db = new mysqli("20.41.116.36", "alex", "!qas123456789", "jin");
$db->set_charset("utf8");

function mq($sql)
{
    global $db;
    return $db->query($sql);
}

?>
