function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}

add_action('wp_enqueue_scripts', 'searchToggle');

function myFunction() {
    var dots = document.getElementById("more");
    var moreText = document.getElementById("less");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "View more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "See less"; 
      moreText.style.display = "inline";
    }
  }


add_action('wp_enqueue_scripts', 'searchToggle');



