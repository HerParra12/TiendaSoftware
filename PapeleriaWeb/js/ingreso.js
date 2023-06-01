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

//Desplegar las opciones en el formulario de registro
function validateForm() {
    var selectField = document.getElementById("opciones");
    if (selectField.value === "") {
      alert("Por favor, selecciona una opción válida");
      return false;
    }
  
    // Validación exitosa, enviar formulario de manera programática y redirigir
    var form = document.querySelector('.formulario-sign-up'),
        form2 = document.querySelector('.formulario');
    form.submit();
    form2.submit();
    window.location.href = "papeleria.html";
  
    return false; // Evitar el envío del formulario de manera predeterminada
  }

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