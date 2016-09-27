(function($){

	console.log('hello');

	/**
	*	Crée une instance
	*   executé par la function monajax
	**/
	function createInstance() {
	        var req = null;
			if (window.XMLHttpRequest){
	 			req = new XMLHttpRequest();
			} 
			else if (window.ActiveXObject) {
				try {
					req = new ActiveXObject("Msxml2.XMLHTTP");
				} 
				catch (e) {
					try {
						req = new ActiveXObject("Microsoft.XMLHTTP");
					} 
					catch (e) {
						alert("XHR not created");
					}
				}
		    }
	        return req;
	}

	/**
	*	Gere l'affichage
	* 	
	**/
	function monAffichage(data, element){

		console.log(data);
		var element = document.getElementById('storage');
		element.innerHTML = data;

	}

	/**
	*	Gere la requete asynchrone
	*
	**/
	function monAjax(){
		//console.log('monajax');
		$('.progress').removeClass('display_none');
		var req = createInstance();
		//var url = document.ajax.url.value;
		var login = document.form_login.login.value;
		var password = document.form_login.password.value;
		var data = "login="+login+"&password="+password;
		console.log("req = "+req);
		console.log("data = "+data);

		req.onreadystatechange = function() {
			if(req.readyState == 4)	{
				if(req.status == 200) {
					//	monAffichage(req.responseText, element);
					//console.log('réponse : ' + req.responseText);
					var reponse = req.responseText;
					console.log(reponse);
					if (!reponse == " ") {
			
						$('.progress').addClass('display_none');
						$('#modal1').closeModal();
	  					Materialize.toast('Bonjour '+reponse, 4000) // 4000 is the duration of the toast	
				

					}
				}	
				else {
					alert("Erreur AJAX : " + req.status + " " + req.statusText);
				}	
			} 
		}
		req.open("POST","login_ajax.php", true); 
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(data); 
	} 

	$('.exec_ajax').click(function() { 
		monAjax();
	});
  
})(jQuery);
