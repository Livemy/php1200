<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
if($_SESSION[username]=="")
 {
  echo "<script>alert('���ȵ�¼��ſ��Է����ʼ�!');history.back();</script>"; 
  exit;
 }
  $id=strval($_GET[id]);
 
	    
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>alert('�������Ѿ���ѡ��!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  
  header("location:indexs.php?lmbs=������");
?> 