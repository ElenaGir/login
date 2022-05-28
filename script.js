const form = document.querySelector('form');
const btnSubmit = document.querySelector('#submit');
const inputEmail = document.querySelector('#email');
const inputPassword = document.querySelector('#password');

btnSubmit.addEventListener('click', function(){
    //  for email 
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputEmail.value)){
        document.querySelector('#errorEmail').classList.add("invisible");
       
    }else{
        document.querySelector('#errorEmail').classList.remove("invisible");
    }

    //  for password 
    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/.test(inputPassword.value)){
        document.querySelector('#errorPassword').classList.add("invisible");
    }else{
        document.querySelector('#errorPassword').classList.remove("invisible");
    }

})

form.addEventListener('submit', function(e){
    e.preventDefault()
    let formData = new FormData(form)
    // let url = './php/script.php';
    fetch(url,{
        method: 'POST',
        body: formData
    })
    .then((response) => {
        return response.json()
    })
    .then((data) => {
        console.log(data);
        /* return form.reset() */
    })
})