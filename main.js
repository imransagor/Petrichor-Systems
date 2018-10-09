//login
document.getElementById("submit").addEventListener("click", login);
function login(){
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("result").innerHTML=this.responseText;
		}
	}
  xmlhttp.open("POST","login.php");
  xmlhttp.send();
	
	
	return false;
};
//Search
document.getElementById("btnSearch").addEventListener("click", searchbtn);
function searchbtn(){
	//alert(document.getElementById("search_box").value);
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("result").innerHTML=this.responseText;
		}
	}
  xmlhttp.open("GET","search.php?findName="+document.getElementById("search_box").value,true);
  xmlhttp.send();
	
	
	return false;
};

//ShowEmployeeList
document.getElementById("showEL").addEventListener("click", showELbtn);
function showELbtn(){
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("result").innerHTML=this.responseText;
		}
	}
  xmlhttp.open("GET","showEmployeeList.php");
  xmlhttp.send();
	
	
	return false;
};

//ShowUserList
document.getElementById("showUL").addEventListener("click", showULbtn);
function showULbtn(){
	
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (this.readyState==4 && this.status==200) {
			document.getElementById("result").innerHTML=this.responseText;
		}
	}
  xmlhttp.open("GET","showUserList.php");
  xmlhttp.send();
	
	
	return false;
};



