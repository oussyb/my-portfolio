let menu = document.querySelector('#menu-icon');
let nav = document.querySelector('.nav');


menu.onclick = () => {
    menu.classList.toggle('bx-x');
    nav.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});


sr.reveal('.hero-text', {delay:200, origin:'top'});
sr.reveal('.hero-img', {delay:450, origin:'top'});
sr.reveal('.icons', {delay:500, origin:'left'});
sr.reveal('.scroll-down', {delay:500, origin:'right'});
sr.reveal('.card', {delay:450, origin:'top'});




var tablinks = document.getElementsByClassName("tab-link");
  var tabcontents = document.getElementsByClassName("tab-content");

  function opentab(tabname){
    for(tablink of tablinks){
      tablinks.classList.remove("active");
    }
  }

  function opentab(tabname){
    for(tabcontent of tabcontents){
      tabcontents.classList.remove("active-tab");
    }

  }
