buttonresponsive=document.getElementById('navToggle');
main=document.getElementById('navItems')

buttonresponsive.addEventListener('click',()=>{
    main.classList.toggle('navItemsshow')
})
