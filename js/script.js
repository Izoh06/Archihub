$(function (){
    $(".counter").counterUp({
        delay:10,
        time: 2000
    });
});



const nav = document.querySelector('.navbar');

window.onscroll = function() {
	var top = window.scrollY;

	if(top >= 50){
		nav.classList.add('active')
	}
	else{
		nav.classList.remove('active');
	}
}