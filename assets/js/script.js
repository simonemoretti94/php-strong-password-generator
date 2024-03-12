const input = document.getElementById('input_password');
const parameters = document.getElementById('p_parameters');

input.addEventListener('keydown', function () {
    if (input.value) {
        const tempVal = parseInt(input.value)
        parameters.innerText = 'Lunghezza password: ' + `${tempVal}`;
        //parameters.classList.add('d-none');
    }
    else {
        parameters.innerText = 'Nessun parametro valido inserito';
        //parameters.classList.remove('d-none');
    }
    console.log('input log:', input.value, ' ', typeof (input.value));
});