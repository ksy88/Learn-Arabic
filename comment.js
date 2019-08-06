
		var current_page = window.location.href;
		current_page=current_page.substr(current_page.lastIndexOf('/')+1);
		if (current_page!='index.php') {
			current_page = current_page.split('=');
			var page_name = current_page[1];
		}
		else {
			var page_name = current_page.substr(0, current_page.indexOf('.'));
		}


function checkedRadio() {
		var radio_group=document.querySelectorAll("input."+page_name);
 		for(var i =0; i<radio_group.length; i++) {
  		if(radio_group[i].checked) {
  			var checked_radio=radio_group[i].id;
    		 }
 		}
 		return checked_radio;
}


function switchChecked() {
	if(self.checked) {
		self.checked="true";
	}
	else {
		self.checked="false";
	}
	
}

function deleteRewrite() {
	var checked_radio=checkedRadio();
	document.getElementById('which_radio').value=checked_radio;
	// document.getElementById('which_user').value=target_line_user_comment[0];
	// document.getElementById('which_comment').value=target_line_user_comment[1];
}



function rewriteComment() {


		var checked_radio=checkedRadio();
		// var target_line_user_comment = fetchText();
       	fetch('./Comment_Folder/'+page_name+'.txt').then(function(response){
        response.text().then(function(text){

        var comment_array={};
        comment_array=text.split("\n");
        
        var target_line_user_comment=new Array();
       	var target_line_user_comment = comment_array[checked_radio].split("  :  ");
       	document.getElementById('User_Name').value=target_line_user_comment[0];
       	document.getElementById('Comment_txt').innerHTML=target_line_user_comment[1];
  		console.log(target_line_user_comment[0]);
  		console.log(text);
       		})
  		})

}







 
	







