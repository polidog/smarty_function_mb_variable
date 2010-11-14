<?php
$smarty = new Smarty();

$smarty->plguin_dir[] = "../plugin";
$smarty->template_dir = "./templates";
$smarty->complate_dir = "./templates_c";

$smarty->assign("たなか","ゆうた");
$smarty->assign("好き", array("食べ物" => "ラーメン二郎"))
$smarty->display('index');