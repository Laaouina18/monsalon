
<template>
  <div>
    <header class="l-header" id="header">
      
                <a href="/" style="color:black;font-family:var(--font-cursive) ;font-size:x-large;">Beuty<span style="color:brown">Salon</span></a>
             
            
    </header>
    <BaseHeader />
    <div class="rendez-vous">
      <div class="rendez-card shadow-lg" id="card">
        <h1 class="text-center text-4xl font-semibold" style="color:#c30f60">Rendez vous</h1>
        <!-- <v-date-picker
          v-model="TodayDate"
          :max-date="dateAfterMonth"
          :min-date="new Date()"
          @dayclick="onDayClick"
        /> -->
        <div class="select-time">
       
          
          <form action="">
            <input type="date" id="start" name="trip-start"
     
       min="2023-01-01" max="2023-12-31" class="form-control" style="margin: 4px;">
            <select 
              id="countries" class="form-control" aria-label="Default select example" 
              style="display:flex;flex-direction: column;margin: 4px;">
              <!-- <option disabled selected>Choose a Time</option>
              <option
                v-for="date in aviablesHours"
                :value="date.time"
                :key="date"
                :v-model="SelectedTime"
              >
                {{ date.time }}
              </option> -->
              <option class="form-control" value="">10-11</option>
              <option  class="form-control" value="">10-11</option>
            </select>
      
            <button type="submit" class="btn">Confirmer</button>
          </form>
          
        </div>
      </div>
      
    </div>
    <div  class="resevertion bg-white m-auto w-full">
      <!-- get length of userAppointments -->
      
      <!-- <h1 class="text-center text-4xl font-semibold">Votre Réversation</h1>
                 <div>
              <button class="btn">
                  Annuler
                </button>
                <button
                  class="btn">
                  Modifier
                </button>
                 </div> -->

    </div>

    <BaseFooter />
    <div class="footer">
        <div class="footer__list section container grid">
            <div class="footer__data">
                <h1><a href="#"><img src=" @/assets/img/logo.svg" alt=""></a></h1>
                <div class="footer__data-social">
                    <a href=""><i class="bx bxl-facebook social__icon"></i></a>
                    <a href=""><i class="bx bxl-instagram social__icon"></i></a>
                    <a href=""><i class="bx bxl-whatsapp social__icon"></i></a>
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
          
            <span>Creé 🤎 par Nouha@NH</span>
        </div>
</div>
  </div>
</template>

<style scoped>
.rendez-vous {
  width: 100%;
  height: 80vh;
  background-size: cover;
  display: grid;
  justify-content: center;
  align-content: center;
}
#card {
  width: 40vw;
  min-height: 60vh;
  background-color: whitesmoke;
  border-radius: 5px;
  padding: 0 0.5rem;
  display: grid;
  gap: 1rem;
  justify-content: center;
  align-content: center;
}
@media (max-width: 850px) {
  #card {
    width: 90vw;
  }
}
</style>