import './bootstrap';

const btn = document.querySelector('#btn');
const menu = document.querySelector('#menu');

btn.addEventListener('click',()=>{
    console.log('Has hecho click');
    menu.classList.toggle('hidden');
})
