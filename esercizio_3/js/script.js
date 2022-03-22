// Creare una pagina HTML/Javascript con un form che contenga email, password e conferma
// password.
// Controllare, utilizzando JQuery, che le due password siano identiche e che rispettino i seguenti
// parametri:

// 1. Lunghezza minima 12.
// 2. Una lettera maiuscola.
// 3. Un numero.
// 4. Un carattere speciale.
// Per il campo email, non utilizzare un input di tipo email ma di tipo text.
// Controllare con JQuery che l'email contenga il carattere @ e validarla.


$(function(){

    $.validator.addMethod('passwordCheck', function(value, element) {
        return this.optional(element)
        || value.length >= 12 // lunghezza
        && /\d/.test(value) // numero
        && /(?=.*[A-Z])/.test(value) // uppercase
        && /[!@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]/.test(value) // carattere speciale
    }, 'Almeno 12 caratteri, un numero, una lettera maiuscola e un carattere speciale.')

    $("#form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                passwordCheck: true
            },
            password2: {
                required: true,
                equalTo: "#password"
            },
        },
            messages: {
                email: {
                    required: "Inserisci un'email",
                    email: "Inserisci un'email valida!"
                },
                password: {
                    required: "Inserisci una password",
                    pwcheck: "La password deve contenere:"
                },
                password2: {
                    required: "Inserisci una password",
                    equalTo: "Le password non sono uguali "
                }
            }
    });
    
    

});