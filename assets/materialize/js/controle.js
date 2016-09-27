(function($){
  $(function(){

  function verif() {
		retour = true;

		//console.log('ok');

		//imput à tester
		auteur = document.editer.auteur ;
		categorie = document.editer.categorie ;
		titre = document.editer.titre ;
		contenu = document.editer.contenu ;
		//div form à modifier

		//$('input').css('color','green');

	//test catégorie ----------------------------------------------------
		if (isNaN(categorie.value)) 
		{
			$('#editer').find('input')
					.eq( 1 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');
			retour = false;
		}
		else if (categorie.value == "" || categorie.value == 0)
		{
			$('#editer').find('input')
					.eq( 1 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');
			retour = false;
		}
		else if (categorie.value == 3)
		{
			$('#editer').find('input')
					.eq( 1 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');
			retour = false;
		}
	//test Titre ----------------------------------------------------
		if (titre.value == "")
		{
			$('#editer').find('input')
					.eq( 2 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');
			retour = false;
		}
	//test Contenu ----------------------------------------------------
		if (contenu.value == "")
		{
			$('#editer').find('textarea')
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');
			retour = false;

		}
	//test auteur ----------------------------------------------------
		if (isNaN(auteur.value)) 
		{
			$('#editer').find('input')
					.eq( 0 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');

			retour = false;
		}
		else if (auteur.value == ""  || categorie.value == 0)
		{
			$('#editer').find('input')
					.eq( 0 )
					.css('background-color','rgba(255, 0, 0, 0.31)')
					.css('border-radius','3px')
					.css('color','white');

			retour = false;
			
		}

		return retour;

	}

	$("form").submit(function( event ) {
	      if (verif() != true) {
	          event.preventDefault();
	      }
	});

	console.log('ready');

	//url = document.get(url);
	//console.log(url);
	//$('#editer').find('input').eq( 0 ).css('background-color','red');

  }); // end of document ready
  
})(jQuery); // end of jQuery name space

