// Obtén una referencia al elemento checkbox
const themeToggleCheckbox = document.getElementById('theme-toggle'); // Reemplaza 'tuCheckboxId' con el ID de tu elemento checkbox

// Escucha el evento 'change' en el checkbox
themeToggleCheckbox.addEventListener('change', function() {
    // Toggle icons dentro del checkbox
    /*themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');*/

    // Verifica el estado del checkbox
    if (themeToggleCheckbox.checked) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
    }
});

// Verifica y aplica el tema almacenado en localStorage al cargar la página
document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'dark') {
            document.documentElement.classList.add('dark');
            themeToggleCheckbox.checked = true; // Marcar el checkbox si está en modo oscuro
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleCheckbox.checked = false; // Desmarcar el checkbox si está en modo claro
        }
    }
});
