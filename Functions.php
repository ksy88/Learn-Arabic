<?php
function Console_Log($data) {
	echo "<script> console.log($data); </script>";
}

function print_title() {
	if(isset($_GET['id'])) {
		$title = str_replace("_", " ", $_GET['id']);
		echo $title;
	}
	else {
		echo "Welcome to \"Learn Arabic\"!";
	}
}

function print_menu() {
	$menu_list = scandir("./data");
	unset($menu_list[0]);
	unset($menu_list[1]);
	$str_menu_list = implode("<br>", $menu_list);
	$str_menu_list = str_replace("_", " ", $str_menu_list);
	$new_menu_list = explode("<br>", $str_menu_list);
	$i = 0;
	$ii=$i+2;
	while ($i < count($new_menu_list)) {
		echo "<li><a href = \"index.php?id=$menu_list[$ii]\">$new_menu_list[$i]</a></li>\n";
		$i=$i+1;
		$ii=$i+2;
	}
}
			//while($i < count($menu_list)) {
			//$str_menu_list[$i]=str_replace("_", " ", $menu_list[$i]);
			//echo "<li><a href='index.php?id=$menu_list[$i]'> $str_menu_list[$i]</a></li>";
			//$i=$i+1;
			//}

			// if($menu_list[$i]!= '.') {
			// 		if($menu_list[$i]!= '..') {
			// 			while($i < count($menu_list)) {
			// 			echo "<li><a href=\"index.php?id=$menu_list[$i]\">$menu_list[$i]</a></li>\n";
			// 			$i=$i+1;
			// 			}
			// 		}else {
			// 			$i=$i+1;
			// 		}
			// 	}else {
			// 			$i=$i+1;
			// 		}



function print_maintext() {
	if(isset($_GET['id'])) {
		echo file_get_contents("./data/".$_GET['id']);
	}
	else {
		echo "This is a index page.";
	}
}





function print_comments() {
	$file_name="";
	if($_SERVER['REQUEST_URI']!="/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php") {
		$file_name=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=", "", $_SERVER['REQUEST_URI']);
	}
	else {
		$file_name=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php", "", $_SERVER['REQUEST_URI']);
	}
	if($_SERVER['REQUEST_URI']!="/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php") {
		$file_name=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php?id=", "", $_SERVER['REQUEST_URI']);
	}
	else {
		$file_name=str_replace("/WEB/PRACTICE2/ARABIC_PAGE_PHP/index.php", "", $_SERVER['REQUEST_URI']);
	}



	if($file_name!="") {
	   	$comment_list=file_get_contents("./Comment_Folder/".$file_name.".txt");
	   }
	else {
		$comment_list=file_get_contents("./Comment_Folder/index.txt");
		}



    if(boolval($comment_list)) {
    	$i=0;
     	$print_this=explode("\n", $comment_list);
 		array_pop($print_this);
     	while($i<count($print_this)) {
      		if($file_name==true) {
      			echo "<li><input class='".$file_name."' id='".$i."' type='radio' name='comments' checked='false' onclick='switchChecked()'>".$print_this[$i]."</li>";
      			$i=$i+1;
      		}
      		else {
      			echo "<li><input class='index' id='".$i."' type='radio' name='comments' checked='false' onclick='switchChecked()'>".$print_this[$i]."</li>";
      			$i=$i+1;
      		}	
      	}
    	
    }
    else {
      echo "There is no comment!";
    }
}



?>
