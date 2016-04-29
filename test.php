// démarre la session, création d'un cookie(valeur qui va être renvoyé systématiquement vers le serveur, sert à nous reconnaître)
// si l'utilisateur désactive les cookies , le navigateur va le rajouter dans l'URL
//création d'un identifiant de session ( si il y en a un il l'utilise , sinon il en crée un)
session_start();

//mémoriser des données

if(!isset($_SESSION['compte'])){ // si pas de compte, il lui met la valeur 0
    $_SESSION['compte'] = 0;
}else{
    $_SESSION['compte']++; // sinon il l'incrémente
}
echo $_SESSION['compte']; 
