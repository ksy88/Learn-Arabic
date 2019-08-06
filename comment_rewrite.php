<?php 

include("Functions.php");

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

$counter=count(file("./Comment_Folder/".$go_to.".txt"));

$identifier=$counter.$User_Name;

if(isset($User_Name)) {
	$identifier=$User_Name.$counter;
	$counter=$counter+1;
}

file_put_contents("./Comment_Folder/".$go_to.".txt", "<li id=$identifier>$User_Name :  $Comment".$rewrite_button."</li>\n", FILE_APPEND );




header("Location: ".$_SERVER("HTTP_REFERER"));
?>