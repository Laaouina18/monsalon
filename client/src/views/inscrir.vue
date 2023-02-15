
<template>
    
    <div>
       <header class="l-header" id="header">
  
                <a href="/" style="color:black;font-family:var(--font-cursive) ;font-size:x-large;margin-left: 10%;">Beuty<span style="color:brown">Salon</span></a>
                <!-- <a href="/login" class="login">Login</a> -->
            
           

      


            
    </header>
    
    <form action="/action_page.php" class="log">
        <div class="mb-3 mt-3">
    <label for="email" class="form-label">Nom:</label>
    <input type="text" class="form-control" id="nom" placeholder="Enter email" name="FirstName">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Prénom:</label>
    <input type="text" class="form-control" id="prenom" placeholder="Enter email" name="LastName">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Adresse:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Ville:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Numéro de thélèphone:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  
  <button type="submit" class="btn btn-primary">Confirmer</button>
</form>
<div class="footer">
        <div class="footer__list section container grid">
            <div class="footer__data">
                <h1><a href="#"><img src=" @/assets/img/logo.svg" alt=""></a></h1>
                <div class="footer__data-social">
                    <a href=""><i class='bx bxl-facebook social__icon'></i></a>
                    <a href=""><i class='bx bxl-instagram social__icon' ></i></a>
                    <a href=""><i class='bx bxl-whatsapp social__icon' ></i></a>
                </div>
            </div>
            <div class="footer__data">
                <h2>Adresse</h2>
                <p>Rue Rahma, 123<br> Résidence Naouras</p>
            </div>
            <div class="footer__data">
                <h2>Les horaires d'ouvertures</h2>
                <p>Lundi à Vendredi<br>du 09:00 jusqu'à 18:00</p>
            </div>
            <div class="footer__data">
                <h2>Pour nous contactez</h2>
                <p>(+212) 52323-2323</p>
                <p>(+212) 5141-4141</p>
            </div>
        </div>
        <div class="copy">
          
            <span>Creez 🤎 par Nouha@NH</span>
        </div>
</div>
</div>
  </template>
  
  <style>
  .log{
    margin-left: auto;
    margin-right: auto;
    width:60%;
  }
 
  </style>
  