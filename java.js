// JavaScript Document


$(document).ready(function(){ 
$('body').on('click','#respnav-button a', function(e){
	e.preventDefault();
	$('#link-group').slideToggle();
  });
});
const links = document.querySelectorAll('.link');
const sections = document.querySelectorAll('section');

let activeLink = 0;

links.forEach((link, i) => {
    link.addEventListener('click', () => {
        if(activeLink != i){
            links[activeLink].classList.remove('active');
            link.classList.add('active');
            sections[activeLink].classList.remove('active');

            setTimeout(() => {
                activeLink = i;
                sections[i].classList.add('active');
            }, 1000);
        }
    })
	
$(document).ready(function(){
  
  $("button").click(function(){
     
      if($("button").text() == "☰"){
       $("button").text("🞬");
      }else{
        $("button").text("☰");
      }
    
    /* this function toggle the visibility of our "li" elements */
    $("li").toggle("slow");
  });
});
		 