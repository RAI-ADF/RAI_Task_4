var ajaxRequest = new XMLHttpRequest();
		function ajaxFunctionLoadUser(){	
			ajaxRequest.onreadystatechange = processQueryLoadUser;

			ajaxRequest.open("GET", "_all_user_data.php");
			ajaxRequest.send();
		}

		function processQueryLoadUser(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				document.getElementById('allUser').innerHTML = ajaxRequest.responseText;
			}
		}

		function viewDetail(id){
			//alert(id);
			ajaxRequest.onreadystatechange = viewDetailProcess;

			ajaxRequest.open("GET", "_userDetail.php?id="+id);
			ajaxRequest.send();
		}

		function viewDetailProcess(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				document.getElementById('user-detail').innerHTML=ajaxRequest.responseText;
			}
		}

		function closeDetail(){
			//alert("ok");
			document.getElementById('user-detail').innerHTML="";
		}

		function searchUser(){
			var username = document.getElementById('username-search').value;

			ajaxRequest.onreadystatechange = searchProcess;

			ajaxRequest.open("GET", "_searchUser.php?username="+username);
			ajaxRequest.send();
		}

		function searchProcess(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				if(ajaxRequest.responseText==0){
					document.getElementById('user-detail').innerHTML="user not found";
				}else{
					document.getElementById('user-detail').innerHTML=ajaxRequest.responseText;
				}
			}
		}
		function change(id){
			ajaxRequest.onreadystatechange = changeProcess;

			ajaxRequest.open("GET", "_changeUserLevel.php?id="+id+"&level="+level);
			ajaxRequest.send();
		}

		function changeProcess(){
			if(ajaxRequest.readyState==4){
				document.getElementById('level').innerHTML=ajaxRequest.responseText;
			}
		}
		/*
		function change()}{

			ajaxRequest.onreadystatechange = changeProcess;

			ajaxRequest.open("GET", "_changeUserLevel.php?id="+id);
			ajaxRequest.send();
		}
		/*
		function changeProcess(){
			if(ajaxRequest.readyState==4){
				document.getElementById('level').innerHTML=ajaxRequest.responseText;
			}
		}*/