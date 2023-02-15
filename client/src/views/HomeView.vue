<script setup>

</script>

<template>
<div class="cont w-[100]">

    <header class="l-header" id="header">
        <div class="navbar container flex">
            <div style="display:flex;justify-content: space-between; " >
                <a href="#" style="color:black;font-family:var(--font-cursive) ;font-size:x-large;">Beuty<span style="color:brown">Salon</span></a>
                <a href="" >Login</a>
            </div>
           

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
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
                          <div class="flex"> <a href="#" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                            strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" style="width:19%;">
  <path strokeLinecap="round" strokeLinejoin="round"
   d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 
  0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0
   11-6 0 3 3 0 016 0z" />
</svg>
Creer un compte</a>
                    <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" 
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
                            <img src="@/assets/img/servicos/pedicure.png" alt="">
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
                            <p>penteado</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/corte.png" alt="">
                            <p>corte de cabelo</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/sobrancelha.png" alt="">
                            <p>design de sobrancelha</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/depilacao.png" alt="">
                            <p>depiliação com cera</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="inner">
                            <img src="@/assets/img/servicos/limpeza.png" alt="">
                            <p>limpeza de pele</p>
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
                        <span>As princesas do nosso instragram</span>
                    </div>
                </div>
                <div class="gallery__list__img row container">
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
                <button class="btn">en savoir plus</button>
            </div>
        </section>
     
    </main>
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
    <!-- javascript -->
  </div>


</template>
<style>





/* font */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;700;800&display=swap');
/*---------------VARIABLES CSS-------------------*/
:root {
    --header-height: 6.25rem;

    /*---------------COLLORS -------------------*/
    --main-color: #f7e6df;
    --first-color: #75492b;
    --second-color: #dfd6a7;
    --white-color: #ffffff;
    --black-color: #151515;

    /*---------------FONT  AND TYPOGRAPHY-------------------*/
    --font-cursive: 'Great Vibes', cursive;
    --body-font: 'Montserrat', sans-serif;
    --big-font-size: 3rem;
    --h1-font-size: 2.25rem;
    --h2-font-size: 1.5rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: 0.813rem;

    /*---------------FONT WEIGHT-------------------*/
    --font-light: 300;
    --font-medium: 400;
    --font-semi-bold: 700;
    --font-bold: 800;

    /*---------------MARGINS-------------------*/
    --mb-05: 0.5rem;
    --mb-1: 1rem;
    --mb-1-5: 1.5rem;
    --mb-2: 2rem;
    --mb-2-5: 2.5rem;
    --mb-3: 3rem;

    /*---------------Z INDEXS-------------------*/
    --Z-fixed: 100;
    --z-tooltip: 10;
    --z_negative: -1;
}

/* base */
*, ::after, ::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  
}
html{
    scroll-behavior: smooth;
}
body{
    background-color: var(--white-color);
    font-size: var(--normal-font-size);
    font-family: var(--body-font);
    overflow-x: hidden;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}
.container{
    max-width: 1200px;
    margin: 0 auto;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
.section{
    padding: calc(var(--header-height) + 20px) 0;
}
.grid{
    display: grid;
    gap: 20px;
}
.flex{
    display: flex;
    align-items: center;
    justify-content: center;
}
.section__title{
    margin: 0 auto;
    text-align: center;
}
.section__title h1{
    font-family: var(--font-cursive);
    font-size: var(--big-font-size);
    font-weight: var(--font-medium);
    line-height: var(--big-font-size);
    color: var(--first-color);
}
.section__title span{
    font-weight: var(--font-light);
    font-size: var(--h2-font-size);
    line-height: var(--h2-font-size);
    color: var(--black-color);
}
/* BUTTON */
.btn{
    width: 240px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: var(--first-color);
    color: var(--white-color);
    border: 1px solid var(--first-color);
    border-radius: 50px;
    font-size: var(--normal-font-size);
    font-weight: var(--font-semi-bold);
    text-transform: uppercase;
    line-height: var(--normal-font-size);
    padding: 10px 20px;
    outline: none;
    cursor: pointer;
    transition: all 400ms ease;
}
.btn:hover{
    background-color: transparent;
    color: var(--first-color);
}
.btn__outline{
    width: 280px;
    background-color: transparent;
    color: var(--first-color);
    padding: 5px 10px 5px 0;
    transition: all 400ms ease-in-out;
    position: relative;
}
.btn__outline::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 18%;
    height: 100%;
    background-color: var(--first-color);
    border: 1px solid var(--first-color);
    border-radius: 50px;
    transition:  all 400ms ease-in-out;
}
.btn__outline i{
    margin-right: var(--mb-1-5);
    font-size: var(--h2-font-size);
    color: var(--white-color);
    z-index: var(--z-tooltip);
}
.btn__outline:hover::before{
    width: 100%;
    z-index: var(--z_negative);
}
.btn__outline:hover{
    color: var(--white-color);
    z-index: var(--z-tooltip);
}
/* NAV */
.l-header{
    width: 100%;
    height: var(--header-height);
    background-color: rgba(255, 255, 255, 0.4);
    /* position: fixed; */
    /* top: 0; */
    /* left: 0; */
    /* z-index: 999999; */
    transition: all 400ms ease;
}
.navbar{
    justify-content: space-between;
    padding: 20px;
}
.nav__toggle{
    font-size: var(--h1-font-size);
    padding: 5px 5px 0;
    border: 2px solid transparent;
    cursor: pointer;
    z-index: var(--Z-fixed);
}
.nav__toggle:hover{
    color: var(--first-color);
    border: 2px solid var(--first-color);
}
/* MEDIA QUERY NAVBAR */
@media (max-width: 960px){
    .nav{
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100vh;
        background-color: var(--main-color);
        font-size: var(--h2-font-size);
        text-align: center;
        text-transform: capitalize;
        padding-top: var(--header-height);
        transition: all 400ms ease-in-out;
    }
    .nav__item{
        padding: 15px 0;
    }
    .show-menu{
        width: 60%;
    }
}
.nav__link{
    font-weight: var(--font-bold);
    color: var(--black-color);
    position: relative;
    transition: all 400ms ease;
}
.nav__link::before{
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: var(--first-color);
    transition: all 400ms ease-in-out;
}
.nav__link:hover::before{
    width: 100%;
}
.nav__link:hover,
.nav__link.active-link{
    color: var(--first-color);
}
.scroll-header{
    background-color: var(--white-color);
}
/* HERO */
.hero{
    width: 100%;
    height: 100vh;
    background-color: var(--main-color);
    border-radius: 0 0 300px 0;
}
.hero .hero__img{
    display: none;
}
.hero .hero__content{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.hero__content h1{
    font-family: var(--font-cursive);
    font-size: var(--big-font-size);
    line-height: calc(var(--big-font-size) + 30px);
    letter-spacing: 0.1em;
    color: var(--first-color);
    margin-bottom: var(--mb-1-5);
}
.hero__content p{
    font-weight: var(--font-medium);
    text-align: center;
    line-height: calc(var(--normal-font-size) + 10px);
    padding: 0 3rem;
    letter-spacing: 0.2em;
    color: var(--black-color);
    margin-bottom: var(--mb-1-5);
}
/* ABOUT */
.about{
    width: 100%;
    background-image: url(../img/arabesco-left-bottom.svg);
    background-repeat: no-repeat;
    background-position: bottom left;
    z-index: var(--z_negative);
}
.about__detail{
    width: 100%;
    padding: 2rem;
}
.about__detail__content{
    border: 2px solid var(--first-color);
    border-radius: 30px;
    padding: 1rem;
}
.about__img img{
    width: 100%;
    border-radius: 30px;
    filter: drop-shadow(16px 16px 16px rgba(0,0,0,0.25));
}
.about__descripion{
    position: relative;
    padding: 2rem;
}
.about__descripion::before{
    content: "";
    position: absolute;
    width: 100%;
    height: 110%;
    top: -10%;
    left: 0;
    background: var(--main-color);
    border-radius: 30px;
    box-shadow:  4px 8px 16px rgba(0,0,0,0.25);
    z-index: var(--z_negative);
}
.about__descripion p{
    font-weight: var(--font-medium);
    line-height: calc(var(--normal-font-size) + 12px);
    color: var(--black-color);
}
/* SERVICES */
.services{
    width: 100%;
    background-image: url(../img/arabesco-left-top.svg);
    background-repeat: no-repeat;
    background-position: top left;
    z-index: var(--z_negative);
}
.services__content__descripion{
    width: 100%;
    padding: 2rem;
    text-align: center;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}
.services__content__descripion .box{
    padding: 20px;
}
.services__content__descripion .box .inner img{
    width: 90px;
    margin-bottom: var(--mb-1);
}
.services__content__descripion .box .inner{
    font-size: var(--h3-font-size);
    font-weight: var(--font-semi-bold);
    text-transform: capitalize;
    color: var(--first-color);
    padding: 10px;
    position: relative;
}
.services__content__descripion .box .inner::before,
.services__content__descripion .box .inner::after{
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    transition: all 0.8s ease;
}
.services__content__descripion .box .inner::before{
    bottom: 0;
    left: 0;
    border-bottom: 3px solid transparent;
    border-left: 3px solid transparent;
}
.services__content__descripion .box .inner::after{
    top: 0;
    right: 0;
    border-top: 3px solid transparent;
    border-right: 3px solid transparent;
}
.services__content__descripion .box:hover .inner::before,
.services__content__descripion .box:hover .inner::after{
    border-color: var(--first-color);
    width: 100%;
    height: 100%;
}
/*PACKAGE */
.package{
    width: 100%;
    background-color: var(--main-color);
    border-radius: 0 300px;
}
.package__cards{
    margin-top: var(--mb-2-5);
}
.card{
    height: 360px;
    background-color: var(--white-color);
    box-shadow: 8px 8px 16px rgba(0,0,0,0.25);
    border-radius: 30px;
    padding: 1.5rem;
    margin: 10px auto;
    transition: all 400ms ease-in-out;
}
.card:hover{
    transform: scale(1.1);
}
.card__title{
    text-align: center;
    margin-bottom: var(--mb-1-5);
}
.card__title h1{
    font-weight: var(--font-bold);
    font-size: var(--h1-font-size);
    line-height: var(--h1-font-size);
    color: var(--black-color);
}
.card__items{
    margin-bottom: var(--mb-1);
}
.item{
    display: flex;
    align-items: center;
}
.item p{
    font-weight: var(--font-bold);
    line-height: calc(var(--normal-font-size) + 10px);
    color: var(--first-color);
    margin-left: var(--mb-05);
}
.item p span{
    font-size: var(--small-font-size);
    font-weight: var(--font-light);
}
.item .x__icon, .item .check__icon{
    font-size: var(--h3-font-size);
}
.item .x__icon, .item .not{
    color: var(--second-color);
}
.item .check__icon{
    color: var(--first-color);
}
.card__items button{
    margin: 0 auto;
    margin-top: var(--mb-1);
}
/* GALLERY */
.gallery{
    width: 100%;
    position: relative;
}
.gallery::before{
    content: "";
    width: 100%;
    height: 60%;
    background-color: var(--main-color);
    position: absolute;
    top: 20%;
    left: 0;
    z-index: var(--z_negative);
}
.gallery__list__img{
    width: 100%;
    justify-content: center;
    margin: var(--mb-2-5) auto;
    position: relative;
}
.gallery__img img{
    margin: var(--mb-05);
    background-color: rgba(255, 255, 255, 0.4);
    filter: drop-shadow(16px 16px 16px rgba(0,0,0,0.2));
}
.gallery__img img:hover{
    transform: scale(1.1);
}
.gallery__content button{
    margin: 0 auto;
}
/* TESTIMONIALS */
.testimonials{
    background-color: var(--main-color);
    border-radius: 300px 0;
}
.testimonials__content{
    padding: 2rem;
}
.testimonials__card{
    width: 420px;
    margin-top: var(--mb-3);
    grid-template-columns: 1fr;
}
.testimonials__item{
    flex-direction: column;
    margin-bottom: var(--mb-1);
    position: relative;
}
.testimonials__item::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: var(--second-color);
    border-radius: 30px;
}
.testimonials__img img{
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    position: absolute;
    top: 15px;
    left: 15px;
    transition: all 0.8s ease;
    z-index: var(--Z-fixed);
}
.testimonials__item:hover .testimonials__img img{
    transform: translateX(300px) rotate(360deg);
}
.testimonials__box{
    position: relative;
    padding: 30px;
    z-index: var(--z-tooltip);
}
.testimonials__name{
    margin-bottom: var(--mb-1);
    text-align: center;
}
.testimonials__name h2{
    font-weight: var(--font-medium);
    font-size: var(--h2-font-size);
    line-height: var(--h2-font-size);
    margin-bottom: var(--mb-05);
}
.testimonials__name .star__icon{
    color: var(--first-color);
    font-size: var(--h3-font-size);
}
.testimonials__descripition p{
    line-height: var(--h2-font-size);
    margin-top: var(--mb-2);
}
/* FOOTER */
.footer__list{
    grid-template-columns: repeat(2, 1fr);
    justify-content: space-around;
    align-items: center;
    border-bottom: 1px solid var(--first-color);
}
.footer__data-social .social__icon{
    color: var(--first-color);
    font-size: var(--h2-font-size);
}
.footer__data-social .social__icon:hover{
    border-bottom: 1px solid var(--first-color);
}
.footer__data{
    text-align: center;
    margin-bottom: var(--mb-1);
}
.footer__data-social{
    margin-top: var(--mb-1);
}
.footer__data h2{
    font-weight: var(--font-bold);
    font-size: var(--h2-font-size);
    line-height: var(--h2-font-size);
    color: var(--first-color);
    margin-bottom: var(--mb-1);
    text-transform: capitalize;
}
.footer__data p{
    font-weight: var(--font-medium);
    line-height: calc(var(--normal-font-size) + 10px);
    text-align: center;
}
.footer .copy{
    text-align: center;
    padding: 1rem 0;
}
.footer .copy p{
    font-weight: var(--font-bold);
    line-height: var(--h3-font-size);
}
.footer .copy span{
    font-size: var(--small-font-size);
    line-height: var(--small-font-size);
}
/* MEDIA QUERY */
@media (min-width: 660px){
    .services__content__descripion{
        grid-template-columns: repeat(3, 1fr);
    }
}
/* MEDIA QUERY */
@media (min-width: 860px){
    .about__detail__content{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        z-index: var(--z-tooltip);
    }
    .about__descripion::before{
        height: 120%;
        top: -10%;
    }
    .services__content__descripion{
        grid-template-columns: repeat(4, 1fr);
    }
    .gallery::before{
        height: 50%;
        top: 25%;
    }
    .testimonials__card{
        width: 820px;
        grid-template-columns: repeat(2, 1fr);
    }
    .testimonials__item:hover .testimonials__img img{
        transform: translateX(300px) rotate(360deg);
    }
}
@media (min-width: 960px){
    .nav__menu{
        display: flex;
        align-items: center;
        padding: 0;
    }
    .nav__item:not(:last-child){
        margin-right: var(--mb-2-5);
    }
    .nav__link{
        font-size: var(--normal-font-size);
        font-weight: var(--font-bold);
        text-transform: capitalize;
        color: var(--black-color);
        transition: all 400ms ease;
        position: relative;
    }
    .nav__toggle{
        display: none;
    }
    .hero .hero__img{
        display: block;
    }
    .hero .hero__img, .hero .hero__content{
        width: 50%;
        height: 100vh;
    }
    .hero .hero__img img{
        max-width: 100%;
        height: 100%;
    }
    .hero .hero__content,
    .hero .hero__content p{
        align-items: flex-start;
        text-align: left;
        padding: 0;
    }
    .hero .hero__content h1{
        font-size: 4rem;
    }
    .footer__list{
        grid-template-columns: repeat(4, 1fr);
    }
}
@media (min-width: 1100px){
    .about__descripion::before{
        height: 150%;
        top: -25%;
    }
}
</style>
