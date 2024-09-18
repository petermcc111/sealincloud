<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/gettext-multi-language-website/
 */
$lang = $_GET["lang"]; //取得 lang 參數
if ($lang == null) { //如果網址的 lang 參數為空
    //header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
    echo '$_GET["lang"] is null.';
    exit;
}
if ($lang == "en") { //English
    setcookie("lang", "en", time() + (86400 * 30), "/"); //設定 Cookie lang 為 en_US
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
if ($lang == "zh-hk") { //正體中文 (台灣)
    setcookie("lang", "zh-hk", time() + (86400 * 30), "/"); //設定 Cookie lang 為 zh_TW
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
if ($lang == "zh-cn") { //简体中文 (中国)
    setcookie("lang", "zh-cn", time() + (86400 * 30), "/"); //設定 Cookie lang 為 zh_CN
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
?>