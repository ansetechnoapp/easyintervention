let form = document.querySelector('#form');



form.firstName.addEventListener("change", function() {
     validFirstName(this);
});
form.lastName.addEventListener("change", function() {
     validLastName(this);
});
form.email.addEventListener("change", function() {
     validEmail(this);
});
form.password.addEventListener("change", function() {
     validPassword(this);
});
form.confPassword.addEventListener("change", function() {
     validConfPassword(this);
});

form.addEventListener("submit", function(e) {
     e.preventDefault();

     if (validFirstName(form.first_name)) {

          console.log('valide');

          //   form.submit();   
     }else{
          console.log('non valide');
     };
     
});  



const validFirstName = (inputvalue) => {

     const firstNameValue = inputvalue.value.trim();

     if (!firstNameValue.match(/^[a-zA-Z]/)) {
          let message = "votre prenom doit commencer pas une lettre";
          setError(firstName, message);
     } else {
          let letterNum = firstNameValue.length;
          if (letterNum < 3) {
               let message = "votre prenom doit avoir au moins 3 caractères";
               setError(firstName, message);
          } else {
               let message = "Accepter";
               setSuccess(firstName, message);
          }
     }
};


const validLastName = (inputvalue) => {
     const lastNameValue = inputvalue.value.trim();

     let letterNumLastNameValue = lastNameValue.length;
          if (letterNumLastNameValue < 3) {
               let message = "votre prenom doit avoir au moins 3 caractères";
               setError(lastName, message);
          } else {
               let message = "Accepter";
               setSuccess(lastName, message);
          }
};

const validEmail = (inputvalue) => {
     const emailValue = inputvalue.value.trim();

     if (!isValidEmail(emailValue)) {

          let message = "Donnez une adresse de messagerie valide";
          setError(email, message);

     } else {
          let message = "Accepter";
          setSuccess(email,message);
     }
};

const validPassword = (inputvalue) => {
     const passwordValue = inputvalue.value.trim();

     if ( !passwordVerify(passwordValue)) {

          let message = "La chaîne doit contenir au moins: 1 caractère numérique et 1 caractère alphabétique";

          setError(password, message);

     } else {
          let message = "Accepter";
          setSuccess(password),message;
     }

};



const validConfPassword = (inputvalue) => {
     
     const confPasswordValue = inputvalue.value.trim();
     const passwordValue = form.password.value.trim();

     if (passwordValue !== confPasswordValue) {

          let message = "Les mots de passe ne sont pas identique";
          setError(confPassword, message);
     }else {

          let message = "Accepter";
          setSuccess(confPassword, message);
     }
};

const passwordVerify = inputvalue => {
     const re =
          /("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})")/;
     return re.test(String(inputvalue.value).toLowerCase());
}

const isValidEmail = inputvalue => {
     const re =
          /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     return re.test(String(inputvalue.value).toLowerCase());
};

const setError = (element, message) => {
     const inputControl = element.parentElement;
     const errorDisplay = inputControl.querySelector(".error");

     errorDisplay.innerText = message;
     inputControl.classList.add("error");
     inputControl.classList.remove("success");

     return false;
};

const setSuccess = (element, message) => {
     const inputControl = element.parentElement;
     const errorDisplay = inputControl.querySelector(".error");

     errorDisplay.innerText = message;
     inputControl.classList.add("success");
     inputControl.classList.remove("error");

     return true;
};
