$(document).ready(function(e) {
	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#", "");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});

function Habilitar(checkbox, idCampo) {
	var campo = document.getElementById(idCampo);
	if (checkbox.checked) {
		campo.disabled = false;
	} else {
		campo.disabled = true;
	}
}

$("#i-forgot").on("click", function() {
	$("#login-form").fadeOut("fast", function() {
		$("#i-forgot-form").fadeIn("slow").removeClass("hidden");
	});
});

$("#i-remember").on("click", function() {
	$("#i-forgot-form").fadeOut("fast", function() {
		$("#login-form").fadeIn("slow").removeClass("hidden");
	});
});