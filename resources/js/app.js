import './bootstrap';

const toggle = document.querySelector(".toggle")
const menuDashboard = document.querySelector(".menu-dashboard")
const iconoMenu = toggle.querySelector("i")
const enlacesMenu = document.querySelectorAll(".enlace")

toggle.addEventListener("click", () => {
    menuDashboard.classList.toggle("open")

    if(iconoMenu.classList.contains("bx-menu")){
        iconoMenu.classList.replace("bx-menu", "bx-x")
    }else {
        iconoMenu.classList.replace("bx-x", "bx-menu")
    }
})

enlacesMenu.forEach(enlace => {
    enlace.addEventListener("click", () => {
        menuDashboard.classList.add("open")
        iconoMenu.classList.replace("bx-menu", "bx-x")
    })
})

document.addEventListener('DOMContentLoaded', () => {
    const enlaces = document.querySelectorAll('.enlace');
    const contentContainer = document.getElementById('content-container');

    enlaces.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            const url = enlace.getAttribute('data-url');
            
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    contentContainer.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error al cargar el contenido:', error);
                });
        });
    });
});


