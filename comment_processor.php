<?php


$User_Name=$_POST["user_name"];
$Comment=$_POST["comment_txt"];
$before_url=$_SERVER['HTTP_REFERER'];
$before_url=str_replace($_SERVER['SERVER_NAME'], "", $before_url);
$before_url=str_replace("http://", "", $before_url);

if($before_url!="/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php")
	$go_to=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=", "", $before_url);
else {
	$go_to="index";
}

$counter=count(file("./Comment_Folder/".$go_to.".txt"))+1;

$identifier=$counter.$go_to;

if(isset($User_Name)) {
	$identifier=$counter."/".$go_to;
}


file_put_contents("./Comment_Folder/".$go_to.".txt", "$User_Name  :  $Comment\n", FILE_APPEND );


if($go_to!="index") {
	header("Location: /WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=".$go_to);
}

else {
	header("Location: /WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php");
}


?>