<script setup>
import MapsCarousel from "@/Components/CustomComponents/MapsCarousel.vue";
import ServiceBanner from "@/Components/CustomComponents/Services/ServiceBanner.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";
import { Link } from "@inertiajs/vue3";

var img_3=new Image();
img_3.src="/images/services-carousel/carousel-juridico3.jpg";
var img_4=new Image();
img_4.src="/images/services-carousel/carousel-juridico4.jpg";
var img_5=new Image();
img_5.src="/images/services-carousel/carousel-juridico5.jpg";

</script>

<template>
    <PageLayout>
        <ServiceBanner
            title="SERVICIOS JURÍDICOS"
            subtitle=""
            subtitle_second=""
            background="juridico"
        />
        <section class="py-24 bg-servicios">
            <div class="container">
                <div class="row d-flex align-center sm-flex-col-reverse">
                    <div class="col-12 col-md-8 bg-Ruta9dejulio" id="fadeSliderService">
                    </div>
                    <div class="col-12 col-md-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false">
                            <div class="carousel-inner service-text-box" id="">
                                <div class="carousel-item active">
                                    <p class="dms-sans-reg">
                                        Nuestra red de profesionales está comprometida en ofrecer soluciones legales multidisciplinarias,
                                        estratégicas y personalizadas. Conformamos equipos de abogados con presencia en diversas jurisdicciones
                                        para proteger los derechos e intereses de nuestros clientes en un mundo cada vez más dinámico y complejo.
                                    </p>
                                    <p class="dms-sans-reg">
                                        Asesoramos y litigamos a nivel nacional e internacional. A través de la incorporación
                                        de distintos estudios asociados logramos una cobertura integral y global para ofrecer
                                        soluciones legales de vanguardia.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="dms-sans-reg">
                                        Nuestra filosofía se basa en la eficiencia, la transparencia y el compromiso con la excelencia.
                                        Buscando incorporar y potenciar a los profesionales asociados a Tercios.
                                    </p>
                                    <strong class="dms-sans-reg">
                                        Áreas de especialización:
                                    </strong>
                                    <ul class="dms-sans-reg p-1">
                                        <li>Derecho Penal</li>
                                        <li>Derecho Civil y Comercial</li>
                                        <li>Derecho Laboral y Seguridad Social</li>
                                        <li>Compliance</li>
                                        <li>Negocios Inmobiliarios</li>
                                        <li>Concursos y Quiebras</li>
                                        <li>Derecho Tributario</li>
                                        <li>Fusiones y Adquisiciones</li>
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

            if(currentSlide===1)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-juridico3.jpg)";
            }

            if(currentSlide===2)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-juridico4.jpg)";
            }

            if(currentSlide===3)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-juridico5.jpg)";
            }

            if(currentSlide===4)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-juridico1.jpg)";
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
    background-image: url("/images/services-carousel/carousel-juridico1.jpg");
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

.service-text-box
{
    padding-right: 20px;
    padding-left: 20px;
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
