<script>
import axios from 'axios';

export default {
 
  data() {
    return {
      idr:localStorage.idr,
      dater: localStorage.dater,
      temp: localStorage.temp,
      date:'',
      time:'',
      datemodifier:'',
      tempmodifier:'',
      idclient: localStorage.client,
      rendezVous: [],
      test: [],
      reserved: []
    }
  },
  computed: {
    availableHours() {
      if (!this.dater) return []

      const dayOfWeek = new Date(this.dater).getDay()
      let hours = []
      if (dayOfWeek === 0) { // dimanche
        hours = this.generateHours(9, 12)
      } else if (dayOfWeek >= 1 && dayOfWeek <= 3 || dayOfWeek === 6) { // lundi à jeudi et samedi
        hours = this.generateHours(9, 12).concat(this.generateHours(14, 20))
      } else if (dayOfWeek === 4) { // vendredi
        hours = this.generateHours(9, 12).concat(this.generateHours(16, 22))
      }

      // Vérification de la disponibilité des créneaux dans l'API
      const availableHours = []
      for (let i = 0; i < hours.length; i++) {
        const hour = hours[i]
        const found = this.rendezVous.find(r => r.dater === this.dater && r.temp === hour)
        if (!found) {
          if (!this.test.includes(hour)&& hour!=this.tempmodifier) {
   
      console.log(hour)
    
          availableHours.push(hour)

        }}
        
      }
      return availableHours
    },
  },
  methods: {
    generateHours(startHour, endHour) {
      const hours = []
      for (let i = startHour; i <= endHour; i++) {
        hours.push(`${i.toString().padStart(2, '0')}:00`)
      }
      return hours
    },

    async updateAvailableHours() {
      this.temp = null
      const response = await axios.get(`http://localhost/monsalon/api/rendez_vous/lireUn.php?date=${this.dater}`);
      const existingAppointments = response.data;
      if (existingAppointments.length > 0) {
     for(let i=0;i< existingAppointments.length;i++){
      
       this.test.push(existingAppointments[i].temp);
     };} else {
      this.test = [];
     }
      
     
     
    },
 
     
    

  
async createAppointment() {
  console.log(this.idr)
      if (this.temp === "reserved") {
        alert('Le créneau sélectionné n\'est pas disponible.');
        return;
      }

      const response = await axios.post(`http://localhost/monsalon/api/rendez_vous/modifier.php?id=${this.idr}`, {
      dater: this.dater,
      temp: this.temp
      
      
      })
      .then(response => {
        console.log(response.data)
        alert('Vous avez pris un rendez-vous.')
        this.$router.push('/rendez_vous')
      })
      .catch(error => {
        console.log(error);
        alert('Une erreur s\'est produite lors de la création du client.');
      });
    },
   

  },

 
};
</script>
<template>
  <div>
    <header class="l-header" id="header">
      
      <router-link to="/"         href="/" style="color:black;font-family:var(--font-cursive);font-size:x-large;">
Beuty<span style="color:brown">Salon</span>
    </router-link> 
            
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
      
          <form @submit.prevent="createAppointment">
            <input v-model="dater" type="date" id="start" name="dater"
            aria-label="Default select example"
       min="2023-01-01" max="2023-12-31" class="form-control" style="margin: 4px;"  @change="updateAvailableHours">
            <select name="temp" v-model="temp"
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
              <option 
                :value="temp"  class="form-control" >
                {{ temp }}
             
              </option>
              <option v-for="hour ,index in availableHours"
               :key="index" :value="hour"  class="form-control" >
                {{ hour }}
             
              </option>
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

    <BaseFooter />
    <div class="footer">
        <div class="footer__list section container grid">
            <div class="footer__data">
                <!-- <h1><a href="#"><img src=" @/assets/" alt=""></a></h1> -->
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