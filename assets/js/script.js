const input = document.getElementById('input_password');
const parameters = document.getElementById('p_parameters');

/* check s/n radio*/

const btnYes = document.getElementById('check_si');
const btnNo = document.getElementById('check_no');

/* letters , numbers , symbols */
const btnLettere = document.getElementById('lettere');
const btnNumeri = document.getElementById('numeri');
const btnSimboli = document.getElementById('lettere');

/* buttons */
const dismissButton = document.getElementById('button_dismiss');

dismissButton.addEventListener('click', (e) => {
    input.innerText = '1';
});

let tempVal;
input.addEventListener('keydown', function () {
    if (input.value) {
        tempVal = parseInt(input.value);
        if (btnYes) {
            tempVal + ' yes: ' + parseInt(input.btnYes.value);
            console.log('yes: ', btnYes.value);
        }
        if (btnNo) {
            tempVal + ' no: ' + parseInt(input.btnNo.value);
            console.log('no: ', btnNo.value);
        }
        if (btnLettere) {
            tempVal + ' letters: ' + parseInt(input.btnLettere.value);
            console.log('lettere: ', btnLettere.value);
        }
        if (btnNumeri) {
            tempVal + ' numbers: ' + parseInt(input.btnNumeri.value);
            console.log('numbers: ', btnNumeri.value);
        }

        if (btnSimboli) {
            tempVal + ' symbols: ' + parseInt(input.btnNumeri.btnSimboli);
            console.log('symbols: ', btnSimboli.value);
        }
        parameters.innerText = 'Lunghezza password: ' + `${tempVal}`;
        //parameters.classList.add('d-none');
    }
    else {
        parameters.innerText = 'Nessun parametro valido inserito';
        //parameters.classList.remove('d-none');
    }
    console.log('input log:', input.value, ' ', typeof (input.value));
});