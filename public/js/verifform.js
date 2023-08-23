
const pass = document.querySelector("#password");
const pseudo = document.querySelector("#pseudo");
const agree = document.querySelector('#agree');
const agreeDiv = document.querySelector('#agreeDiv');

pseudo.addEventListener("blur", () => {
	     
    if (pseudo.value==""){ 
        document.querySelector("#pbPseudo").innerText='Le champ " Pseudo " est vide !' ;
        pseudo.style.background = "yellow";
     }
    else if (pseudo.value.length<2){ 
        document.querySelector("#pbPseudo").innerText='2 lettres minimum !' ;
    }

    else if (pseudo.value.length>255){ 
        document.querySelector('#pbPseudo').innerText='255 lettres maximum !' ;
    }
     else { 
        document.querySelector("#pbPseudo").innerText='' ;
        pseudo.style.background = "white";
    }

});

     password.addEventListener("blur", () => {
	     
    if (pass.value==""){ 
        document.querySelector("#pbPassword").innerText='Le champ " mot de passe " est vide !' ;
        pass.style.background = "yellow";
    }
    else if (pass.value.length<2){ 
        document.querySelector("#pbPassword").innerText='2 lettres minimum !' ;
    }

    else if (pass.value.length>255){ 
        document.querySelector('#pbPassword').innerText='255 lettres maximum !' ;
    }
    else { 
        document.querySelector("#pbPassword").innerText='' ;
        pass.style.background = "white";
    }    
});


	     
if (agree.checked==false){ 
    document.querySelector("#pbAgree").innerText='Nous devons avoir votre accord !' ;
    agreeDiv.style.background = "yellow";
}

    agree.addEventListener("change", () => {
        if (agree.checked==true){ 
    document.querySelector("#pbAgree").innerText='' ;
    agreeDiv.style.background = "whitesmoke";
        }
        else{
            document.querySelector("#pbAgree").innerText='Nous devons avoir votre accord !' ;
            agreeDiv.style.background = "yellow";
        }

   
});

   

