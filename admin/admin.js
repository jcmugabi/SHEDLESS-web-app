const topbar=document.getElementById('topbar');
const leftbar=document.getElementById('leftbar');
const rightbar=document.getElementById('rightbar');
const menubar=document.getElementById('menubar');
const xmark=document.querySelector('#xmark img:nth-child(2)');

menubar.addEventListener('click',()=>{
    topbar.classList.toggle('deactive');
    rightbar.classList.toggle('deactive');
    leftbar.classList.toggle('activate');
    topbar.classList.toggle('active');
    rightbar.classList.toggle('active');
    leftbar.classList.toggle('inactive');
    menubar.style.display='none';
    xmark.style.display='block';
});
xmark.addEventListener('click',()=>{
    topbar.classList.toggle('deactive');
    rightbar.classList.toggle('deactive');
    leftbar.classList.toggle('activate');
    topbar.classList.toggle('active');
    rightbar.classList.toggle('active');
    leftbar.classList.toggle('inactive');
    xmark.style.display='none';
    menubar.style.display='block';
});