

const loginButton = document.querySelector("#login-button");

// selezioniamo la "x" per chiudere il form
const closeButton = document.querySelector(".close-button");

// selezioniamo il form di login
const loginForm = document.querySelector("#login-form");

const buttLogin = document.querySelector(".btn-login");
const name = document.querySelector("#name");
const password = document.querySelector("#password");

// aggiungiamo un evento al click del bottone "Accedi"
loginButton.addEventListener("click", () => {
    // rendiamo il form di login visibile
    loginForm.style.display = "block";
});

// aggiungiamo un evento al click della "x"
closeButton.addEventListener("click", () => {
    // nascondiamo il form di login
    loginForm.style.display = "none";
});

// aggiungiamo un evento in hover sulla "x" per renderla rossa
// closeButton.addEventListener("mouseover", () => {
//     closeButton.style.color = "red";
// });

// aggiungiamo un evento al click sulla "x" per nascondere il form di login
closeButton.addEventListener("click", () => {
    loginForm.style.display = "none";
});

