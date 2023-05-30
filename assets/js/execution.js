
let btnProfil = document.querySelector('#btnProfil');

let btnInscri = document.querySelector('#btnInscri');


let btnCreerGalerie = document.querySelector('#navBtn');
btnCreerGalerie.addEventListener('click', toggleCreerGalerie);


if (btnProfil == true) {
    btnProfil.addEventListener('click', toggleProfil);
}
else
{
    btnInscri.addEventListener('click', toggleProfil);
}


