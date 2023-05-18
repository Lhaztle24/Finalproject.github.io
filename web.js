const checkbox = document.getElementById('check');
const menu = document.querySelector('.menu');

checkbox.addEventListener('click', () => {
  menu.classList.toggle('active');
});

