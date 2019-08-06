<?php 
$checkbox_number=$_POST['which_radio'];
$User_name=$_POST['which_user'];
$Comment_txt=$_POST['which_comment'];

echo $User_name;

$before_url=$_SERVER['HTTP_REFERER'];
$before_url=str_replace($_SERVER['SERVER_NAME'], "", $before_url);
$before_url=str_replace("http://", "", $before_url);

if($before_url!="/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php")
	$go_to=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=", "", $before_url);
else {
	$go_to="index";
}

$old_text=file_get_contents('./Comment_Folder/'.$go_to.'.txt');
$old_text_array=explode("\n", $old_text);

unset($old_text_array[$checkbox_number]);
$after_deleted_text=implode("\n", $old_text_array);

file_put_contents('./Comment_Folder/'.$go_to.'.txt', "$after_deleted_text");



if($go_to!="index") {
	header("Location: /WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=".$go_to);
}

else {
	header("Location: /WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php");
}

?>