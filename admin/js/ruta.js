// Obtener elementos del DOM
const modal = document.getElementById('imageModal');
const clickableImage = document.querySelector('.n-ruta');
const closeButton = document.querySelector('.close-button');

// Abrir modal al hacer clic en la imagen
clickableImage.addEventListener('click', () => {
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevenir scroll del body
});

// Cerrar modal al hacer clic en el botón de cerrar
closeButton.addEventListener('click', () => {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto'; // Restaurar scroll del body
});

// Cerrar modal al hacer clic fuera del contenido
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});

// Cerrar modal con la tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.style.display === 'flex') {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
});