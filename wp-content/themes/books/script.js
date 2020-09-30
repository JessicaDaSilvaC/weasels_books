const menus = document.getElementsByClassName('pages');
/*menu.addEventListener('click', function(){
    console.log('coucou')
});*/
console.log(menu);
for(let menu of menus){
    menu.addEventListener('click', function(e){
        console.log('coucou')
        e.preventDefault();
    })
}