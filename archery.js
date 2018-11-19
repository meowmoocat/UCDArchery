/* 
	Orla Keating
	15205679
 */
 
 
/* // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickytop() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} */

/* 
Toggle between adding and removing the "responsive" 
class to topnav when the user clicks on the icon 
*/
function dropdown()
{
	var x = document.getElementById("navbar");
	if (x.className === "header")
	{
		x.className += " responsive";
	} else
	{
		x.className = "header";
	}
}

function initMap()
{
	var ucd = {lat: 53.3082451, lng: -6.2291632};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: ucd
	});
	var marker = new google.maps.Marker({
		position: ucd,
		map: map
	});
}



//Home page cycle through 3 pictures

// Next/previous
function plusSlides(n)
{
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n)
{
	showSlides(slideIndex = n);
}

function showSlides(n)
{
	var i;
	var slides = document.getElementsByClassName("slides");
	var dots = document.getElementsByClassName("dot");
	if(n > slides.length)
	{
		slideIndex = 1;
	} 
	if(n<1)
	{
		slideIndex = slides.length;
	}
	for(i=0; i<slides.length; i++)
	{
		slides[i].style.display = "none"; 
	}
	for(i=0; i<dots.length; i++)
	{
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block"; 
	dots[slideIndex-1].className += " active";
}