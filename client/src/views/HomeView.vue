<script>
import axios from 'axios';

export default {
   
  data() {
    return {
        date: '',
      time: '',
      reference: '',
     
      isAuthenticated: 'false',
      divVisible: false
    };
  },
  methods: {
  async  login() {
        const response = await axios.get(`http://localhost/monsalon/api/clients/login.php?Customer_reference=${this.reference}`);
      const client = response.data;
      if(client.client){
        this.isAuthenticated =true
        console.log(this.isAuthenticated );
        localStorage.client=client.client[0].CustomerID
        console.log(localStorage.client)
        this.$router.push('/rendez_vous') 
      }else{
        console.log("la refrence n'existe pas")
        alert("la reference n'existe pas")
        this.divVisible=false;
        this.$router.push('/')
      }

      
    },
    logout() {
      // Effacer les informations de l'utilisateur stockées

      this.isAuthenticated = false;
      console.log(this.isAuthenticated );
      this.$router.push('/');
    },
    checkAuth() {
      // Vérifier si l'utilisateur est authentifié en vérifiant s'il y a des informations stockées
      const client = localStorage.getItem('client');
   
      
     
 
    },
    afficherDiv() {
      this.divVisible = true;
    }
  },
  mounted() {
    console.log(this.$route.params);
    const { date, time } = this.$route.params;
    
    console.log(this.divVisible);
    console.log(localStorage.client)
    this.isAuthenticated = true
    console.log(this.isAuthenticated)
  },
  
};
</script>

<template>
<div class="cont w-[100]">

    <header class="l-header" id="header">
        <div class="navbar container flex" style="display:flex;justify-content:space-between;">
    <router-link to="/"         href="/" style="color:black;font-family:var(--font-cursive);font-size:x-large;">
Beuty<span style="color:brown">Salon</span>
    </router-link> 
    <div v-if="this.isAuthenticated==true ">
        <button  @click="logout" class="btne" id="logout">Logout</button>
    </div>
    <div v-else>
        <button @click="afficherDiv" class="btne">Login</button>
    </div>
</div>
       </header>
       
    <main>
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="hero__img">
                        <img src="@/assets/img/home-img.png" alt="">
                    </div>
                    <div class="hero__content">
                        <h1>Bien venue chez<br><span>BeautySalon</span></h1>
                        <p>Lorem  Optio distinctio quae veritatis voluptates quam possimus, illum iste ut laborum quidem dolorem minus aliquam soluta 
                          neque iusto ipsam necessitatibus aperiam culpa.</p>
                          <div class="flex"> <a href="/inscrir" class="btne">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" style="width:19%;">
  <path strokeLinecap="round" strokeLinejoin="round"
   d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 
  0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0
   11-6 0 3 3 0 016 0z" />
</svg>
Creer un compte</a>
                    <a href="/rendez_vous" class="btne "><svg xmlns="http://www.w3.org/2000/svg" 
                          fill="none" viewBox="0 0 24 24"
                           stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width:19%;">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>Prise de rendez vous</a></div>
                       
                    </div>
                </div>
            </div>
        </section>
        <section class="about section" id="about">
            <div class="container">
                <div class="row">
                    <div class="section__title">
                        <h1>Notre Histoire</h1>
                        <span>BeautySalon</span>
                    </div>
                    <div class="about__detail">
                        <div class="about__detail__content">
                            <div class="about__img">
                                <img src="@/assets/img/about-img.jpg" alt="">
                            </div>
                            <div class="about__descripion">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Velit possimus a sint.</p>
                                <p>Obcaecati porro accusamus iusto rem aperiam. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Velit possimus a sint.</p>
                                <p>Eligendi nostrum architecto 
                                    quibusdam. Neque odio enim quasi ad culpa similique 
                                    quas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div  id="reference">
            <form @submit.prevent="login"  v-if="divVisible" style="display: block;" class="log">
    <div class="mb-3">
      <input type="text" v-model="reference" class="form-control" id="ref" placeholder="Entrer votre reference" name="reference">
    </div>
    <button type="submit" class="btn" >Confirmer</button>
  </form>
  <form @submit.prevent="login" v-else style="display:none;" class="log">
    <div class="mb-3">
      <input type="text" v-model="reference" class="form-control" id="ref" placeholder="Entrer votre reference" name="reference">
    </div>
    <button type="submit" class="btn" >Confirmer</button>
  </form>
        </div>
        <section class="services section" id="services">
            <div class="services__content">
                <div class="row">
                    <div class="section__title">
                        <h1> Nos Services</h1>
                      
                    </div>
                </div>
                <div class="services__content__descripion grid container">
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/manicure.png" alt="">
                            <p>Manicures</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/pedicure.png" alt="" >
                            <p>Pédicures</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/maquiagem.png" alt="">
                            <p>Maquiages</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/pentado.png" alt="">
                            <p>Penté</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/corte.png" alt="">
                            <p>Coupe de cheveux</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/sobrancelha.png" alt="">
                            <p>design</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/depilacao.png" alt="">
                            <p>
                              épilation à la cire</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/limpeza.png" alt="">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <section class="gallery section" id="gallery">
            <div class="gallery__content">
                <div class="row">
                    <div class="section__title">
                        <h1>Galerie</h1>
                        <span>Nos Princesses</span>
                    </div>
                </div>
                <div class="gallery__list__img row container" >
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto1.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto2.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto3.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto4.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto5.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto6.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto7.png" alt="">
                    </div>
                    <div class="gallery__img">
                        <img src="@/assets/img/img-insta/foto8.png" alt="">
                    </div>
                </div>
                <button class="btne">en savoir plus</button>
            </div>
        </section>
     
    </main>
    <div class="footer">
        <div class="footer__list section container grid">
            <div class="footer__data">
                <h1><a href="#"><img src="" at=""></a></h1>
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
    <!-- javascript -->
  </div>


</template>
<style>



#reference{
    
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
    display: flex;
  justify-content: center;
  align-items: center;
 /* Pour centrer la carte verticalement également */
 background-color:var(--main-color);
  
}



</style>
