<?php

class User{
    //propiétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    //methodes
    public function __construct($pseudo, $email, $signature){
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->signature = $signature;
        $this->actif = true;
        //echo "construct";
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10) {
            $this->pseudo = $newPseudo;
        }
        else{
            echo"<p>nope</p>";
        }
    }

    public function envoyerEmail($titre, $message)
    {
        mail($this->email, $titre, $message);
    }

    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100) 
        {
            $this->email = $newEmail;
        }
        else{
            echo"<p>Email vide ou trop long</p>";
        }
    }

    public function bloquer(){
        $this->actif = false;
        $this->envoyerEmail("Alerte User", "Vous etes bloqué");
    }

}
?>