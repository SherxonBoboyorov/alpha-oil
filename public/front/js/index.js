$(document).ready(function(){
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
      });
    
      // Or with jQuery
    
      $(document).ready(function(){
        $('.modal').modal();
      });

      // -------------------------------------------------------------------

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
      });
    
      // Or with jQuery
    
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
});

// -------------------------------===========-------------------------------

const buttons_5 = document.querySelectorAll('.header__menu__links');
buttons_5.forEach(function(button, index) {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    
    this.parentNode.classList.toggle('header__link__none__active');
    
    buttons_5.forEach(function(button2, index2) {
      if ( index !== index2 ) {
        button2.parentNode.classList.remove('header__link__none__active');
      }
    });
  });
});

// -------------------------------===========-------------------------------

$(function(){
  let Catalog_max__pro__link = document.querySelectorAll('.blogIn__pagination__link');
  for(let i = 0; i<Catalog_max__pro__link.length; i++){
    Catalog_max__pro__link[i].addEventListener('click',function(){
      for(let j = 0; j<Catalog_max__pro__link.length;j++){
        Catalog_max__pro__link[j].classList.remove('active');
      }
      this.classList.add('active');
    })
  }
});

// -------------------------------===========-------------------------------