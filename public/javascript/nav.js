// Obtén el elemento del botón del menú, la imagen dentro del sidebar y el elemento del sidebar
const menuButton = document.getElementById('menu');
const menuImage = document.getElementById('menuImage');
const sidebar = document.getElementById('sidebar');

let listElements = document.querySelectorAll('.list_button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=> {
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        console.log(menu.scrollHeight);
        if (menu.clientHeight == "0"){
            height = menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});

// Agrega un evento de clic al botón del menú
menuButton.addEventListener('click', toggleSidebar);

// Agrega un evento de clic a la imagen dentro del sidebar
menuImage.addEventListener('click', toggleSidebar);

// Agrega un evento de clic al documento
document.addEventListener('click', closeSidebar);

// Función para alternar el estado del sidebar
function toggleSidebar() {
  sidebar.classList.toggle('active');
}

// Función para cerrar el sidebar si se hace clic fuera de él o en la imagen dentro del sidebar
function closeSidebar(event) {
  if (!sidebar.contains(event.target) && event.target !== menuButton && event.target !== menuImage) {
    sidebar.classList.remove('active');
  }
}
