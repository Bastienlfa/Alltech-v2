function valider(){
    mdp = document.register.mdp.value;
    cmdp= document.register.cmdp.value;
    


    if (mdp != cmdp) {
        alert("Mauvaise confirmation du mot de passe ")
        return false;
    } 
    else 
        return true;



}