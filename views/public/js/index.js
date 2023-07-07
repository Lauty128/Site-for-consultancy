const Header = document.querySelector(".Header") || document.querySelector(".ServicesHeader")

Header.addEventListener('click', e=>{
    const { target } = e
    const subMenu = (target.nextElementSibling && target.nextElementSibling.classList.contains('Menu__subMenu')) ? target.nextElementSibling : null

    if(target.classList.contains('Menu__a') && subMenu !== null){
        subMenu.classList.toggle('Menu__subMenu--active')
        target.classList.toggle('Menu__a--active')
        return
    }

    //------- If you don't click on the over the Menu, then the subMenus are hidden
    const subMenus = document.querySelectorAll('.Menu__subMenu--active');
    if(subMenus.length > 0){
        //console.log('Removing submenu');
        document.querySelectorAll('.Menu__a--active').forEach(element => element.classList.remove('Menu__a--active'))
        subMenus.forEach(subMenu=> subMenu.classList.remove('Menu__subMenu--active'))
    }
})

document.querySelector('.Menu__exitButton').addEventListener('click', ()=> document.querySelector('.Menu').classList.remove('Menu--active') )
document.querySelector('.MenuMobile__button').addEventListener('click', ()=>{ 
    document.querySelector('.Menu').classList.add('Menu--active')
})