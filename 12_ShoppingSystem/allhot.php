<?php
	include_once 'system/system.inc.php';
	$arraycommo=$seppage->ShowDate("select * from tb_commo order by sell,id desc",$conn,3,$_GET["pages"]);	
	$smarty->assign("showpage",$seppage->ShowPage("商品","个"," ","a1",$_GET["page"])); //定义输出分页数据的模板变量showpage
    $smarty->assign("allhot",$arraycommo);	
?>