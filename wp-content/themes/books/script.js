const menus = document.getElementsByClassName('pages');
/*menu.addEventListener('click', function(){
    console.log('coucou')
});*/
console.log("test");
for(let menu of menus){
    menu.addEventListener('click', function(e){
        console.log('coucou')
        document.querySelector('.deroulante').classList.toggle('is-active')
        // e.preventDefault();
    })
}