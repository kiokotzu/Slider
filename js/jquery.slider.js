/*----------------------------------
 Autor: Esteban Vera
 Twitter : @kiokotzu
 Correo : esteban.vg@outlook.com
 ----------------------------------*/


 $(function(){
	jQuery.fn.Slider = function(opciones){

		/*configuracion por defecto */
		var configuracion = jQuery.extend({
			tiempo : 5000
		}, opciones);

		this.each(function(){
			var slider =  $(this);
			var total  =  slider.find('li');
			var izquierda = $(".izquierda");
			var derecha = $(".derecha");
			var i      =  0;

			setInterval(function(){

				setTimeout(function(){
					total.eq(i).find(".izquierda").animate({bottom : 200+'%'},500);
				  total.eq(i).find(".derecha").animate({top : 200+'%'},500);
				},configuracion.tiempo*80/100)

				i = (i + 1) % total.length;
				total.hide();

				izquierda.animate({bottom : -100+'%'});
				derecha.animate({top : -100+'%'});

				total.eq(i).show();
				total.eq(i).find(".izquierda").animate({bottom : 0},500);
				total.eq(i).find(".derecha").animate({top : 0},500);	

			},configuracion.tiempo);

		});
	}
});