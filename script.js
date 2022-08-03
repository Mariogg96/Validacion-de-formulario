const formulario = document.querySelector('.formulario'),
    inputs = document.querySelectorAll('.formulario input'),
    $btnSignIn = document.querySelector('.sign-in-btn'),
    $btnSignUp = document.querySelector('.sign-up-btn'),
    $signUp = document.querySelector('.sign-up'),
    $signIn = document.querySelector('.sign-in');


// Funcion para que se cambien los formularios
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
        document.querySelector('.error_notify').classList.remove('active');
    }
});


//Reglas de expresiones para los inputs
const expresiones_regulares = {
    nombre: /^[a-zA-ZÁ\s]{1,40}$/,
    password: /^.{4,12}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
}

const campos = {
    name:false,
    password:false,
    email:false
}

//Valiracion de los formularios
const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
              validarCampo(expresiones_regulares.nombre,e.target.value,'name');
            break;
        case "email":
            validarCampo(expresiones_regulares.email,e.target.value,'email');
            break;
        case "password":
            validarCampo(expresiones_regulares.password,e.target.value,'password');
            break;
        default:
            break;
    }
}

//valida los campos de los formularios
const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input)) {
        document.getElementById(campo).classList.remove('error')
        campos[campo]= true;
      } else {
        document.getElementById(campo).classList.add('error');
        campos[campo]= false;
      }
}


inputs.forEach(input => {
    input.addEventListener('keyup', validarFormulario); //señana el input seleccionado
    input.addEventListener('blur', validarFormulario); //Se lanza cuando se sale del input seleccionado anteriormente
});

//Envia el formulario para ver si fue correcto o no valido
formulario.addEventListener('submit', e => {
    
    if (campos.name && campos.password && campos.email) {
        document.querySelector('.check_notify').classList.add('active');
        document.querySelector('.error_notify').classList.remove('active');
        //Para que desaparezca el mensaje despues de cierto tiempo
        setTimeout(() => {
            document.querySelector('.check_notify').classList.remove('active');
        }, 9999); 

    } else {
        e.preventDefault();
        document.querySelector('.error_notify').classList.add('active');
        document.querySelector('.check_notify').classList.remove('active');
    }
})