// const form = document.querySelector('form');
// const btnSubmit = document.querySelector('#submit');
// const inputEmail = document.querySelector('#email');
// const inputPassword = document.querySelector('#password');

// btnSubmit.addEventListener('click', function(){
//     //  for email 
//     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputEmail.value)){
//         document.querySelector('#errorEmail').classList.add("invisible");
       
//     }else{
//         document.querySelector('#errorEmail').classList.remove("invisible");
//     }

//     //  for password 
//     if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test(inputPassword.value)){
//         document.querySelector('#errorPassword').classList.add("invisible");
//     }else{
//         document.querySelector('#errorPassword').classList.remove("invisible");
        
//     }

// })
const form = document.querySelector('form');
const btn = document.querySelector('#submit');
let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//let passwordRegex = /^ ( ?=.* [ 0 - 9 ] ) ( ?=.* [ a - z ] ) ( ?=.* [ A - Z ] ) ( ?=.* [ *.!@ $% ^& ( ) { } [ ] :;<>,.?/~ _ +-=| \ ] ) . { 8 , 32 } $/;


form.addEventListener('submit', e => {
    e.preventDefault()
    const formData = new FormData(form);

    fetch('inscription.php', {
        method: 'POST',
        body: formData
    })
    .then((response) =>{
        return response.json()
    })
    .then((data) =>{
        console.log(data);
        document.querySelector("#msg").style.display ='flex';
        document.querySelector('#accueil').style.display = 'none';
        document.querySelector('#mail').style.display = 'none';
        document.querySelector("#lab").style.display = 'none';
        document.querySelector("#lab1").style.display = 'none';
        document.querySelector('#password').style.display = 'none';
        document.querySelector('#signup').style.display = 'none';
        document.querySelector('#have').style.display = 'none';
        document.querySelector('hr').style.display = 'none';
        let Myelement = document.forms['FORM']['submit'];
        Myelement.setAttribute('value','create blog');
        // form.reset();
           
    })
})