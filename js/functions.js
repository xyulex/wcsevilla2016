jQuery(document).ready(function(){
	var contador = 0;

	jQuery(".wcsevilla").click(function() {
		if (contador === 0) {
			jQuery(".entry-header").append("<div>Hecho en WordCamp Sevilla 2016</div>").hide().fadeIn('slow');
			contador++;
		}
	});
});