const toggleButton = document.getElementById('toggleForm');
const closeButton = document.getElementById('closeForm');
const inputForm = document.getElementById('inputForm');

toggleButton.addEventListener('click', () => {
    inputForm.classList.remove('hidden');
});

closeButton.addEventListener('click', () => {
    inputForm.classList.add('hidden');
});