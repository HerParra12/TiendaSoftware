//Cambiar de display entre registro e inicio de sesión
const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});


//Limpiar los form
const $btnFormSignUp = document.getElementById('btn-form-sign-up'),
        $btnFormSingIn = document.getElementById('btn-form-sign-in'),
        $signUpContainer = document.querySelector('.formulario-sign-up'),
        $signInContainer = document.querySelector('.formulario');

    $btnFormSignUp.addEventListener('click', e =>{
        if (e.target === $btnFormSignUp){
            $signUpContainer.reset();
        }
     });
     
     $btnFormSingIn.addEventListener('click', e =>{
        if (e.target === $btnFormSingIn){
            $signInContainer.reset();
        }
     });

const fechaNacimientoInput = document.getElementById("fechaNacimiento");
const fechaNacimiento = new Date(fechaNacimientoInput.value);
// Obtener el valor del input de fecha
$(function() {
    $("#fechaNacimiento").datepicker({
      dateFormat: 'yyyy-mm-dd' // Establece el formato de fecha personalizado
    });
  });







