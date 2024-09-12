// Przycisk i panel logowania
const accountBtn = document.getElementById('account-btn');
const loginPanel = document.getElementById('login-panel');
const closeBtn = document.getElementById('close-btn');
const registerLink = document.getElementById('register-link');
const registrationForm = document.getElementById('registration-form');
const loginForm = document.getElementById('login-form');

// Funkcje otwierania i zamykania panelu
accountBtn.addEventListener('click', () => {
    loginPanel.classList.remove('hidden');
});

closeBtn.addEventListener('click', () => {
    loginPanel.classList.add('hidden');
});

// Przełączanie między formularzem logowania a rejestracji
registerLink.addEventListener('click', (e) => {
    e.preventDefault();
    loginForm.classList.add('hidden');
    registrationForm.classList.remove('hidden');
});

// Możesz dodać obsługę formularzy logowania i rejestracji tutaj
// document.getElementById('login-form').addEventListener('submit', handleLogin);
// document.getElementById('register-form').addEventListener('submit', handleRegistration);
