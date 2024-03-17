//------------------------- HEADER
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

//------------------------- MESSAGE BOX
if(document.querySelector(".MessageBox")){
    const messageBox = document.querySelector(".MessageBox");

    messageBox.classList.add('MessageBox--active');
    setTimeout(()=>{ messageBox.classList.remove('MessageBox--active') }, 2500)
}

//------------------------- FORMS HANDLER
const inputsName = ['name','email','phone','city','subject','message','service','vacancy']
const regExp = {
    name: /^[a-zA-Z _-]{5,50}$/ ,
    // email: /^[\w]+@{1}[\w]+\.[a-z]{2,3}$/,
    phone: /^[\d\s-]{7,20}$/
}

function validateInput(name, value){
    if(name == 'message') return (value.length < 3000)
    if(name == 'subject') return (value.length < 200)
    if(name == 'city') return ((value.length < 40) && (value.length > 4))
    if(name == 'email') return ((value.length < 50) && (value.length > 12))

    return regExp[name].test(value)
}

function colourInput(name, result){
    const input = document.querySelector(`#${name}-input`);
    if(result && input.classList.contains('ContactSection__input--error')){ input.classList.remove('ContactSection__input--error') }
    if(!result && !input.classList.contains('ContactSection__input--error')){ input.classList.add('ContactSection__input--error') }
}


function sendMail(e){
    if(e.target.dataset.sending){
        console.log("No se puede. Se esta enviando");
        e.preventDefault();
    }
    e.target.dataset.sending = "on"
    const submitButton = e.target.childNodes[e.target.childNodes.length - 2];
    submitButton.value = "Enviando..."
    submitButton.classList.add("ContactSection__submit--sending")
};

document.body.addEventListener('keyup', e=>{
    const { target } = e;

    if(inputsName.includes(target.getAttribute('name'))){
        const name = target.getAttribute('name'); 
        colourInput(name, validateInput(name, target.value))
        //console.log(target.getAttribute('name') + ": " + validateInput(target.getAttribute('name'), target.value))
    }
})