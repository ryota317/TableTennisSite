'use strict';
{

// const open = document.getElementById('open');
const close = document.getElementById('close');
const modal = document.getElementById('modal');
const mask = document.getElementById('mask');

var p = document.createElement('p');
//null todo
// console.log(modal);
// console.log(mask);


window.addEventListener('load', (event) => {
  modal.classList.remove('hidden');
  mask.classList.remove('hidden');
  p.textContent = 'お帰りなさい。本日のイベントは！！';


  modal.insertBefore(p, modal.firstChild);

// modal.appendChild(p);
close.textContent = "閉じる";
});



close.addEventListener('click',()=>{

modal.classList.add('hidden');
mask.classList.add('hidden');
});

mask.addEventListener('click',()=>{

//
// modal.classList.add('hidden');
// mask.classList.add('hidden');

close.click();
});

}
