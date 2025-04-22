<script setup>
import { Link } from "@inertiajs/vue3";
import MapsCarousel from "@/Components/CustomComponents/MapsCarousel.vue";
import ServiceBanner from "@/Components/CustomComponents/Services/ServiceBanner.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";

var img_2=new Image();
img_2.src="/images/services-carousel/carousel-contable2.jpg";
var img_3=new Image();
img_3.src="/images/services-carousel/carousel-contable3.jpg";
</script>

<template>
    <PageLayout>
        <ServiceBanner
            title="SERVICIOS CONTABLES"
            subtitle=""
            subtitle_second=""
            background="contable"
        />
        <section class="py-24 bg-servicios">
            <div class="container">
                <div class="row d-flex align-center sm-flex-col-reverse">
                    <div class="col-12 col-md-8 bg-Ruta9dejulio" id="fadeSliderService">
                    </div>
                    <div class="col-12 col-md-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="dms-sans-reg">
                                        Nuestra red de profesionales contables ofrece un asesoramiento a nivel nacional e
                                        internacional. Abordamos los desafíos financieros, fiscales e inmobiliarios de
                                        nuestros clientes de manera estratégica y personalizada.
                                    </p>
                                    <p class="dms-sans-reg">
                                        A través de nuestra experiencia y de las alianzas estratégicas y colaborativas con
                                        profesionales de otras jurisdicciones, proporcionamos soluciones adaptadas a las
                                        necesidades específicas de cada cliente, asegurando una gestión eficiente y el
                                        cumplimiento normativo en todos los niveles.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="dms-sans-reg">
                                        Contamos con un equipo de expertos que, con transparencia y compromiso, trabaja
                                        para optimizar la administración financiera, minimizar riesgos y garantizar el
                                        cumplimiento de las regulaciones fiscales e impositivas a nivel local e internacional.
                                    </p>
                                    <p class="dms-sans-reg">
                                        Áreas de especialización:
                                    </p>
                                    <ul class="dms-sans-reg p-1 custom-list">
                                        <li>Asesoramiento impositivo para Empresas, Pymes y Personas Físicas.</li>
                                        <li>Auditorias de procesos internos.</li>
                                        <li>Análisis y liquidación de impuestos.</li>
                                        <li>Gestión de inspecciones fiscales.</li>
                                        <li>Proyectos de inversión y planificación estratégica.</li>
                                        <li>Administración de fideicomisos.</li>
                                        <li>Registración contable, elaboración de balances y auditorías.</li>
                                        <li>Diseño y confección de regímenes de facilidades de pago impositivos.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <MiddleBanner />
        <section class="bg-color-lightblue">
            <div class="container py-12">
                <div class="row d-flex justify-center">
                    <MapsCarousel />
                </div>
            </div>
        </section>

    </PageLayout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";

export default {
    name: "Inmobiliario",
    components: {Banner, PageLayout},
    mounted() {

        let slider = document.getElementById("fadeSliderService");
        let currentSlide = 1;

        setInterval(() => {

            if(currentSlide==1)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-contable2.jpg)";
            }

            if(currentSlide==2)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-contable3.jpg)";
            }

            if(currentSlide==3)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-contable1.jpg)";
                currentSlide = 1;
                return;
            }

            currentSlide++;

        }, 4000);

    }
}
</script>

<style scoped>
.bg-Ruta9dejulio
{
    background-image: url("/images/services-carousel/carousel-contable1.jpg");
    background-position: center;
    background-size: cover;
    min-height: 450px;
    transition: all ease-in 1s;
}
.bg-banner-desarrollo
{
    background-image: url("/images/servicios/services-contact-banner.png");
    background-position: center;
    background-size: cover;
}

.bg-servicios
{
    background-color: #F3F5F5;
}

#carouselExampleIndicators
{
    min-height: 420px;
    background-color: #fff;
    padding: 2rem 1rem;
    margin-left: -3rem;
}

.carousel-indicators
{
    left: 0;
    right: auto;
    margin: 1rem;
}
.carousel-indicators>button
{
    background-color: #707070;
    width: 8px;
    height: 8px;
    border: 1px solid #DB5447;
    border-radius: 100px;
    margin-right: 0.5rem;
}

.carousel-indicators>button.active
{
    background-color: #D84E44;
    width: 8px;
    height: 8px;
    border: 1px solid #DB5447;
    border-radius: 100px;
    margin-right: 0.5rem;
}

.carousel-indicators>button.active
{
    background-color: #D84E44;
    width: 8px;
    height: 8px;
    border: 1px solid #DB5447;
    border-radius: 100px;
    margin-right: 0.5rem;
}
.carousel-indicators [data-bs-target][data-v-fba323c4] {
    background-color: #DB5447;
}
.carousel-indicators [data-bs-target]
{
    background-color: #D84E44;
}

.btn-danger
{
    border-radius: 2px;
}

.btn.btn-dark
{
    padding: 1rem 2rem;
    border-radius: 0;
    font-weight: bold;
    letter-spacing: 1px;
}
.img-side
{
    align-items: center;
}

.subtitle-section
{
    font-size: 1.4rem;
    color: #4b5563;
}

.lista-inmobiliario
{
    list-style-type: square;
}

.btn-custom
{
    max-width: 250px;
    border-radius: 0;
}

.btn-custom1
{
    max-width: 250px;
    border-radius: 0;
    color: #D84E44;
}

@media screen and (max-width: 576px) {
    .sm-flex-col-reverse
    {
        display: flex;
        flex-direction: column-reverse;
    }
    #carouselExampleIndicators
    {
        margin-left: 0;
    }
}
</style>
