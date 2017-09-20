$(document).ready(function(){

	var controller = new ScrollMagic.Controller();


	var ourScene2 = new ScrollMagic.Scene({
		triggerElement: '#partners'
	})
	.setClassToggle('.li-partners','fadein')
	// .addIndicators({
	// 	name: 'fade',
	// })

	.addTo(controller);

	var ourScene1 = new ScrollMagic.Scene({
	triggerElement: '#product',
	})
	.setClassToggle('.icon-wrapper','fade-in')
	// .addIndicators({
	// 	name: 'fade scene',
	// })
	.addTo(controller);


	// certification and accredication

	var pinIntroScene = new ScrollMagic.Scene({
		triggerElement: '#wrapper',
		triggerHook: 0.06,
		duration: '200%'
	})
	.setPin('#bg-trigger')
	.addTo(controller);

	// pin again
	// var pinIntroScene2 = new ScrollMagic.Scene({
	// 	triggerElement: '#design-bg',
	// 	triggerHook: 0.4,
	// 	duration: '90%'
	// })

	// .setPin('#project1', {pushFolloweres: false})
	// .addTo(controller);


	

});