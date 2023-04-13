function toggleProfil() {
    let profil = document.querySelector('.dropMenu');
    let nav = document.querySelector('#navbar');
    let nomSite = document.querySelector('#nomSite');

    if (profil.style.display == "flex") 
    {
        profil.style.display = "none";
        nav.style.backgroundColor = "#00000077";
        nomSite.style.color = "#fff";
        console.log('non visible');
    }
    else
    {
        profil.style.display = "flex";
        nav.style.backgroundColor = "#fff";
        nomSite.style.color = "#000";
        console.log('visible');
    }
    
}

let btnProfil = document.querySelector('#btnProfil');
btnProfil.addEventListener('click', toggleProfil);
