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
            title="SERVICIOS DE DESARROLLOS Y EMPRENDIMIENTOS INMOBILIARIOS"
            subtitle="ADMINISTRAMOS Y ASESORAMOS A INVERSORES PARA PERMITIRLES DETECTAR"
            subtitle_second="OPORTUNIDADES DE NEGOCIOS EN LAS DIFERENTES SITUACIONES MACROECONÓMICAS."
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
                                        Nuestro equipo de desarrollo inmobiliario cuenta con herramientas
                                        modernas para ayudarte a expandir tu negocio.
                                    </p>
                                    <p class="dms-sans-reg">
                                        En un mercado saturado de nuevas propuestas, la capacidad de planificar
                                        y evaluar estrategias que conduzcan a proyectos y programas sostenibles
                                        es esencial. Nuestro equipo de profesionales, el cual abarca los campos
                                        inmobiliario, contable, impositivo y jurídico, nos permite lograr este objetivo.
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <p class="dms-sans-reg">
                                        Nuestros expertos en la materia podrán conducir en forma exitosa
                                        tus proyectos, gracias a su:
                                    </p>
                                    <ul class="dms-sans-reg p-1">
                                        <li>Creatividad.</li>
                                        <li>Flexibilidad.</li>
                                        <li>Innovación.</li>
                                        <li>Profesionalismo.</li>
                                    </ul>
                                    <Link href="/contacto" class="btn btn-danger uppercase dms-sans-reg mx-2 px-4">contactanos</Link>
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
