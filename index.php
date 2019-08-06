<?php 
require_once("Functions.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel='stylesheet' href='style.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/JavaScript" src="comment.js"></script>
	</head>
	<body>
		<h1 id="main_title"><a href="index.php">Learn Arabic</a></h1>
	<div id=grid>
		<div>
		<ol id="side_menu">
			<?php 
				print_menu();
			?>


			<!-- <li><a href="index.php?id=About_Arabic">About Arabic</a></li>
			<li><a href="index.php?id=Arabic_alphabet">Arabic alphabet</a></li>
			<li><a href="index.php?id=How_to_write_Arabic">How to write Arabic</a></li>
			<li><a href="index.php?id=How_to_make_a_sentence">How to make a sentence</a></li>
			<li><a href="index.php?id=Most_frequently_used_words_in_Arabic">Most frequently used words in Arabic</a></li> -->
		</ol>
		</div>
		<div id="maintext">
			<h2 id="second_title">
				<?php print_title(); ?></h2>

			<p id="text">
				<?php print_maintext() ?>
			</p>
			<div id="Whole_Comment_Section">
		        <form id="Comment_Form" action="comment_processor.php" method="post">
		          
		               
		              <div>Name :<input  id='User_Name' name="user_name" type="text" placeholder="type user name" value=""></div> 
		                <div id=grid2>
		                  <div id='textarea_area'><textarea  id='Comment_txt' name="comment_txt" placeholder="make a comment!"></textarea></div>
		                  <div id='submit_button_area'><input id='Submit_Button' type="submit" value="submit"></div>
		                </div>
		                
		        </form>
		     	<div id='grid3'>
		        <div id='rewrite_area'>
		        <input type='button' name='rewrite' value='rewrite' onclick="
		        rewriteComment();">
		        </div>
		        <form id='delete_area'action='delete_comment.php' method='post'>
				
				<input id='which_radio'type='hidden' name='which_radio' value=''>
		        <input id='which_user'type='hidden' name='which_user' value=''>
		        <input id='which_comment'type='hidden' name='which_comment' value=''>
		        
		        <input type='submit' name='delete_rewrit' value='delete rewrite' onclick="
		        deleteRewrite();">
		       	
		    	</form>
		    	</div>
		        <ol>
		           	<?php 
						print_comments();
		           	?>
		      	</ol>
	      	</div>
		</div>

	</div>
	</body>
</html>
