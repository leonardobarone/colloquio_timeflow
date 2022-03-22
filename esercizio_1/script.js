// Javascript

// Realizzare una pagina HTML, che utilizzando codice Javascript assolva le seguenti funzioni:
// 1. Richiedere all’utente, prima del caricamento della pagina, nome e cognome e utilizzare
// un pop-up box per accogliere l’utente in base al nome;

let nome = prompt("Inserisci il tuo nome");
while (!isNaN(nome)) {
    nome = prompt("Il campo nome non può essere vuoto ne contenere numeri!");
}
nome = nome[0].toUpperCase() + nome.slice(1).toLowerCase();

let cognome = prompt("Inserisci il tuo cognome");
while (!isNaN(cognome)) {
    cognome = prompt("Il campo cognome non può essere vuoto ne contenere numeri!");
}
cognome = cognome[0].toUpperCase() + cognome.slice(1).toLowerCase();

let messaggio = `Ciao ${nome}`;
alert(messaggio); // CREA POP-UP

// 2. Visualizzare la data corrente nella pagina nel seguente formato : 30 Ottobre 200. Non
// visualizzare l’ora;

let oggi = new Date();
let giorno = oggi.getDate().toString();
let mese = oggi.toLocaleString('default', {month: 'long'});
mese = mese[0].toUpperCase() + mese.slice(1);
let anno = oggi.getFullYear().toString();
let data = `${giorno} ${mese} ${anno}`;

let dataContainer = document.getElementById("data");
dataContainer.innerHTML = data;


// 3. Visualizzare la data dell’ultima modifica del documento;

let ultimaModifica = document.lastModified;
let modificaContainer = document.getElementById("modifica");
modificaContainer.innerHTML += " " + ultimaModifica;

// 4. Visualizzare un messaggio che riporti, nella riga di stato, la parola “buongiorno”, se è al
// mattino, “buon pomeriggio”, se è nel pomeriggio, “buonasera” se è in serata,
// “buonanotte” se è notte.

let ora = oggi.getHours();
let saluto;
if (ora > 6 && ora <= 11) {
    saluto = "Buongiorno " + nome;
} else if (ora > 11 && ora <= 18) {
    saluto = "Buon pomeriggio " + nome;
} else if (ora > 18 && ora <= 0) {
    saluto = "Buonasera " + nome;
} else {
    saluto = "Buonanotte " + nome;
}
let salutoContainer  = document.querySelector("#saluto");
salutoContainer.innerHTML = saluto;