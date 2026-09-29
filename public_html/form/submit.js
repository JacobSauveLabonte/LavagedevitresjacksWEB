function RefreshCaptcha() {
	var img = document.getElementById("ImgCaptcha");
	img.src = "/form/captcha.php";
}

$(document).ready(function() {
	$("#FrmHome, #FrmContact, #FrmAlreadyClient").submit(function(e) {
	var $this = $(this);
	e.preventDefault();
	
	////////////////////////////////////////////////// client side validations - start // codepen.io/iovis/pen/mdbQbWJ
	if ($('#number').val().length != 12) { // if (phoneInput.value.length != 10) {
		if ($('#language').val() == "english")
			$("#DivMsg").html('<p class="error"><b>' + 'Phone Number is not valid !' + '</b></p>');
		else
			$("#DivMsg").html('<p class="error"><b>' + 'Le numéro de téléphone n\'est pas valide !' + '</b></p>');
	} else if ($('#message').val().length > 300) {
		if ($('#language').val() == "english")
			$("#DivMsg").html('<p class="error"><b>' + 'Message exceeds 300 characters !' + '</b></p>');
		else
			$("#DivMsg").html('<p class="error"><b>' + 'Le message dépasse 300 caractères !' + '</b></p>');
	}
	else {
		/////////////////////// validations all valid - start
		$ele = $("#BtnSubmit");
		$ele.attr('disabled','disabled');

		$.ajax({
			url: '/form/submit.php',
			type: 'POST',
			data: {name:$('#name').val(),email:$('#email').val(),number:$('#number').val(),service:$('#service').val(),message:$('#message').val(),captcha:$('#captcha').val(),frompage:$('#frompage').val(),address:$('#address').val(),city:$('#city').val(),province:$('#province').val(),country:$('#country').val(),date:$('#date').val()},
			success: function(response){
				if(response == 'success') {
					if ($('#language').val() == "english")
						$("#DivMsg").html('<p class="success"><b>Quote submitted successfully. We will contact you in next 12 working hours.</b></p>');
					else
						$("#DivMsg").html('<p class="success"><b>Devis soumis avec succès. Nous vous contacterons dans les 12 prochaines heures ouvrables.</b></p>');
					$this[0].reset();								
				} else {
					$("#DivMsg").html('<p class="error"><b>' + response + '</b></p>');
					$(captcha).val('');
				}
				$ele.attr('disabled',false);
			}
		});
		/////////////////////// validations all valid - end
	}	
	////////////////////////////////////////////////// client side validations - end
});
});

$(document).ready(function() { 
	$("#FrmNewClient").submit(function(e) {
	var $this = $(this);
	e.preventDefault();

	////////////////////////////////////////////////// client side validations - start // codepen.io/iovis/pen/mdbQbWJ
	if ($('#number').val().length != 12) { // if (phoneInput.value.length != 10) {
		if ($('#language').val() == "english")
			$("#DivMsg").html('<p class="error"><b>' + 'Phone Number is not valid !' + '</b></p>');
		else
			$("#DivMsg").html('<p class="error"><b>' + 'Le numéro de téléphone n\'est pas valide !' + '</b></p>');
	} else if ($('#message').val().length > 300) {
		if ($('#language').val() == "english")
			$("#DivMsg").html('<p class="error"><b>' + 'Message exceeds 300 characters !' + '</b></p>');
		else
			$("#DivMsg").html('<p class="error"><b>' + 'Le message dépasse 300 caractères !' + '</b></p>');
	}
	else {
		/////////////////////// validations all valid - start
		$ele = $("#BtnSubmit");
		$ele.attr('disabled','disabled');

		$.ajax({ // cloudways.com/blog/php-file-upload/
			url: '/form/submit.php',
			type: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(response){
				if(response == 'success') {
					if ($('#language').val() == "english")
						$("#DivMsg").html('<p class="success"><b>Quote submitted successfully. We will contact you in next 12 working hours.</b></p>');
					else
						$("#DivMsg").html('<p class="success"><b>Devis soumis avec succès. Nous vous contacterons dans les 12 prochaines heures ouvrables.</b></p>');
					$this[0].reset();								
				} else {
					$("#DivMsg").html('<p class="error"><b>' + response + '</b></p>');
					$(captcha).val('');
				}
				$ele.attr('disabled',false);
			}
		});
		/////////////////////// validations all valid - end
	}
	////////////////////////////////////////////////// client side validations - end
});
});