$(document).ready(function()
{
	// Para hacer que al pulsar el botón se vaya arriba
	$('.ir-arriba').click(function()
	{
		$('body, html').animate({
			scrollTop: '0px'
		}, 400);
	});

	// Para crear el efecto de que aparezca y desaparezca el botón
	$(window).scroll(function()
	{
		if ($(this).scrollTop() > 0)
		{
			$('.ir-arriba').slideDown(300);
		}
		else
		{
			$('.ir-arriba').slideUp(300);
		}
	});

});