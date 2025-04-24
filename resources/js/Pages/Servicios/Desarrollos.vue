<script setup>
import { Link } from "@inertiajs/vue3";
import MapsCarousel from "@/Components/CustomComponents/MapsCarousel.vue";
import ServiceBanner from "@/Components/CustomComponents/Services/ServiceBanner.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";

var img_2=new Image();
img_2.src="/images/services-carousel/carousel-desarrollos2.jpg";
var img_3=new Image();
img_3.src="/images/services-carousel/carousel-desarrollos3.jpg";
</script>

<template>
    <PageLayout>
        <ServiceBanner
            title="Desarrollos e inversiones inmobiliarias"
            subtitle=""
            subtitle_second=""
            background="desarrollo"
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
                                        Nuestros equipos multidisciplinarios de profesionales se especializan en
                                        ofrecer soluciones estratégicas y personalizadas para generar desarrollos
                                        inmobiliarios con una visión de eficiencia funcional, comercial
                                        marcada por nuestros valores.
                                    </p>
                                    <p class="dms-sans-reg">
                                        Trabajamos de manera coordinada para asegurar que cada proyecto o inversión
                                        inmobiliaria se gestione de forma segura y exitosa, y se adapte a los desafíos
                                        específicos de cada cliente y entorno.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="dms-sans-reg">
                                        Nuestros equipos asesoran a desarrolladoras y constructoras en: adquisiciones
                                        inmobiliarias, compra de campos y terrenos; resolviendo problemáticas jurídicas,
                                        contables e impositivas. Diseñamos valor cumpliendo los plazos estipulados,
                                        asegurando que cada proyecto logre los estándares deseados de calidad y eficacia.
                                    </p>
                                    <p class="dms-sans-reg">
                                        Desde el inicio hasta la finalización de cada desarrollo, gestionamos las
                                        complejidades inherentes a cada fase, optimizando los costos fiscales,
                                        resolviendo contratiempos jurídicos y maximizando el rendimiento del proyecto.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="dms-sans-reg">
                                        Nos destacamos por nuestra:
                                    </p>
                                    <ul class="dms-sans-reg p-1">
                                        <li><strong>Creatividad</strong> en la búsqueda de soluciones innovadoras.</li>
                                        <li><strong>Flexibilidad</strong> para adaptarnos a los requerimientos específicos de cada cliente.</li>
                                        <li><strong>Innovación</strong> en procesos y estrategias de desarrollo.</li>
                                        <li><strong>Profesionalismo</strong> en la ejecución de cada proyecto, asegurando resultados de alta calidad.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        <MiddleBanner />-->
<!--        <section class="bg-color-lightblue">-->
<!--            <div class="container py-12">-->
<!--                <div class="row d-flex justify-center">-->
<!--                    <MapsCarousel />-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

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
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-desarrollos2.jpg)";
            }

            if(currentSlide==2)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-desarrollos3.jpg)";
            }

            if(currentSlide==3)
            {
                slider.style.backgroundImage = "url(/images/services-carousel/carousel-desarrollos1.jpg)";
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
    background-image: url("/images/services-carousel/carousel-desarrollos1.jpg");
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
