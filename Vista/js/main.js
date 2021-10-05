let body = document.querySelector('body');
let closeAside = document.getElementById('close-aside');

// Click : toggle
document.getElementById('toggle-menu').addEventListener('click', 
() => {
  menu.classList.add('active');
  closeAside.style.display = "flex";

   window.onclick = function(event) {
     if (event.target == body) {
        menu.classList.remove('active');
        closeAside.style.display = "none";
    }
   }
});

document.getElementById('close-aside').addEventListener('click', () =>{
  menu.classList.remove('active');
  closeAside.style.display = "none";
});


// Pop up : profile
function profilePopup() {
  var x = document.getElementById("profile-popup");

  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }

   window.onclick = function(event) {
     if (event.target == body) {
       x.style.display = "none";
    }
   } 
};


/* Dark mode */
const btnSwitch = document.querySelector('#switch');
const on = document.getElementById('on')

  btnSwitch.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  on.classList.toggle('fa-toggle-on');
   
  /* Guardando el modo en localstorage*/
  if(document.body.classList.contains('dark')){
    window.localStorage.setItem('modo-oscuro', 'true');
  } else {
      window.localStorage.setItem('modo-oscuro', 'false');
  }
});

  /* Obteniendo el modo actual */ 
  if(window.localStorage.getItem('modo-oscuro') === 'true'){
    document.body.classList.add('dark');
    on.classList.add('fa-toggle-on');
  } else{
    document.body.classList.remove('dark');
    on.classList.remove('fa-toggle-on');
  }


// Accesibilidad
document.onkeydown = function(e) {
  if(e.keyCode === 13) { // La tecla Enter/Return
    document.activeElement.click();
  }
};