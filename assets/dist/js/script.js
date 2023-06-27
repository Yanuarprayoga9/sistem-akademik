const user  = getUser()
console.log(user)


// 
const email = document.getElementById('email')
const sandi = document.getElementById('sandi')
const createEmail = document.getElementById('createEmail')
const createSandi = document.getElementById('createSandi')
const formLogin = document.getElementById('formLogin');
const formRegister = document.getElementById('formRegister')
console.log(formLogin,formRegister)

function changeInterface(){
    const hTitle = document.getElementById('hTitle')
    hTitle.innerText = "Register"

}

function getUser(){
    return[
        {
            email:"yanuar@gmail,com",
            sandi :12345678
        },
        {
            email:"abdau@gmail,com",
            sandi :123
        }
    ]
}


function createData(email,sandi){
    return [
        email,
        sandi
    ]
}
