
$(document).ready(() => {

	let sidenav = false;
	
	$('#bars').click(function(){
		if(!sidenav){
			$('#sidenav').addClass('active');
			sidenav = true;
		}else{
			$('#sidenav').removeClass('active');
			sidenav = false;
		}
	});


	setTimeout(() => {
		let height = $('header').height();
		$('main').attr('style', 'padding-top:' + height * 1.5 +'px');
	}, 300);
	
});
