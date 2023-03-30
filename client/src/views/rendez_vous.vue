<script>
import axios from 'axios';

export default {
 
  data() {
    return {
      dater: null,
      temp: null,
      date:'',
      time:'',
      idr:'',
      datemodifier:'',
      tempmodifier:'',
      idclient: localStorage.client,
      rendezVous: [],
      test: [],
      reserved: [],
      //  aujourdhui : new Date(),
      // jour :aujourdhui.getDate(),
      //   mois : aujourdhui.getMonth() + 1,
      //    annee : aujourdhui.getFullYear(),
      // d:jour + "/" + mois + "/" + annee
    }
  },
  computed: {
    availableHours() {
      if (!this.dater) return []

      const dayOfWeek = new Date(this.dater).getDay()
      let hours = []
      if (dayOfWeek === 0) { // dimanche
        hours = this.generateHours(9, 12)
      } else if (dayOfWeek >= 1 && dayOfWeek <= 4 || dayOfWeek === 6) { // lundi à jeudi et samedi
        hours = this.generateHours(9, 12).concat(this.generateHours(14, 20))
      } else if (dayOfWeek === 5) { // vendredi
        hours = this.generateHours(9, 12).concat(this.generateHours(16, 22))
      }

      // Vérification de la disponibilité des créneaux dans l'API
      const availableHours = []
      for (let i = 0; i < hours.length; i++) {
        const hour = hours[i]
        const found = this.rendezVous.find(r => r.dater === this.dater && r.temp === hour)
        if (!found) {
          // if (!this.test.includes(hour)) {
   
      console.log(hour)
    
          availableHours.push(hour)

        }
        
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
 
     
    

    read(){
      console.log(this.idclient)
 axios.get(`http://localhost/monsalon/api/rendez_vous/lire.php?id=${this.idclient}`)
    .then(response => {
      const existingrendez = response.data.client;
   
     console.log(response.data.client)
        for (let i = 0; i < existingrendez.length; i++) {
          this.reserved.push(existingrendez[i]);
          console.log(existingrendez[i])
        };
   
    })
    .catch(error => {
      console.log(error);
    });
    },
   
    createAppointment(hour) {
      const existingAppointment = this.reserved.find(r => r.dater === this.dater);
  if (existingAppointment) {
    alert('Vous avez déjà un rendez-vous pour cette date.');
    return;
  }

  // Vérifier si le créneau horaire est disponible
  if (this.temp === "reserved") {
    alert('Le créneau sélectionné n\'est pas disponible.');
    return;
  }

  this.temp=hour
      if (this.temp === "reserved") {
        alert('Le créneau sélectionné n\'est pas disponible.');
        return;
      }

      axios.post('http://localhost/monsalon/api/rendez_vous/creer.php', {
      dater:this.dater,
        temp: this.temp,
        idclient: this.idclient
      })
      .then(response => {
        console.log(response.data)
        console.log(this.temp)
        console.log(this.dater)
        alert('Vous avez pris un rendez-vous.')
      
      
        // reload() 
    
      })
      .catch(error => {
        console.log(error);
      
      });
    },
   
    echec(){
   
      alert('ce rendez vous est réservé')
    },
    goToEditPage(hour) {
     console.log(hour.tamp)
     this.datemodifier=hour.dater;
     this.tempmodifier=hour.tamp;
     console.log(this.datemodifier);
     console.log(this.tempmodifier)
     localStorage.idr=hour.idr
     localStorage.dater=hour.dater
     localStorage.temp=hour.tamp
     $this.router.push('/modifier')
    // Naviguer vers la page de modification et transmettre les données nécessaires
   
  },
 async supprimerRendezVous(hour){
  alert("ètes vous sur");
  console.log("Suppression du rendez-vous en cours...");
  console.log(hour.idr)
 await axios.get(`http://localhost/monsalon/api/rendez_vous/supprimer.php?idr=${hour.idr}`)
console.log("Rendez-vous supprimé avec succès !");
       
        
    // .catch(error => {
    //   console.error("Une erreur s'est produite lors de la suppression du rendez-vous : ", error);
    //   $this.router.push('/home');
    // });
    
}
  },
  mounted() {
    let aujourdhui = new Date();
let jour = aujourdhui.getDate();
let mois = aujourdhui.getMonth() + 1;
let annee = aujourdhui.getFullYear();
console.log(jour + "/" + mois + "/" + annee);
 if(this.idclient){
  console.log(this.idclient)
 }
    this.read();
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
      
         
          <input v-model="dater" type="date" id="start" name="dater"
            aria-label="Default select example"
       min="2023-01-01" max="2023-12-31" class="form-control" style="margin: 4px;"  @change="updateAvailableHours">
         
      
       <!-- <select 
              id="countries" class="form-control" aria-label="Default select example" 
              style="display:flex;flex-direction: column;margin: 4px;"> -->
              <!-- <option disabled selected>Choose a Time</option>
              <option
                v-for="date in aviablesHours"
                :value="date.time"
                :key="date"
                :v-model="SelectedTime"
              >
                {{ date.time }}
              </option> -->
            </div>
      </div>
      
    </div>
    <div class="row" style="width:100%;justify-content: center;">
      <div v-for="hour ,index in availableHours"   :key="index" :value="hour"  style="margin:22px" >
            
         

       
        <a href="/rendez_vous"  v-if="!this.test.includes(hour)" >  <button  @click="createAppointment(hour)"  type="submit"  class="btn btn-info" style="background-color: cyan important;"
              >
                {{ hour }}
             
            </button></a>
            <a href="/rendez_vous" v-else ><button class="btn btn-danger  " @click="echec()">
             {{ hour }}
            </button></a>
      
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
    <div class="table-responsive">
      <h1>Mes Rendez_Vous</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">heure</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>

      <tr  v-for="hour ,index in reserved
"
               :key="index">
        <th scope="row">{{  index+1}}</th>
        <td>{{ hour.dater }}</td>
        <td>{{ hour.tamp }}</td>
        <div>
          <td  style="display:flex;justify-content: space-around;"><a href="/modifier" ><button class="btn btn-primary " @click="goToEditPage(hour)">Modifier</button></a><a href="/rendez_vous">
          <button  v-if="new Date().toLocaleDateString() !== new Date(hour.dater).toLocaleDateString()"  class="btn btn-danger" @click="supprimerRendezVous(hour)">Annuler</button></a></td>
        </div>

      </tr>
    
     
    </tbody>
  </table>
</div>

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