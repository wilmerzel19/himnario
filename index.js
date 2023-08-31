const toggleButton = document.getElementById('dark-mode-toggle');
const body = document.body;

toggleButton.addEventListener('change', () => {
    body.classList.toggle('dark-mode');
});