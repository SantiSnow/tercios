<script setup>
import ContactFormStaff from "@/Components/CustomComponents/Contact/ContactFormStaff.vue";
import RedBanner from "@/Components/CustomComponents/RedBanner.vue";
</script>

<template>
    <PageLayout>
        <RedBanner />

        <section class="bg-light-form py-20">
            <div class="container mt-12">
                <div class="row d-flex align-center sm-flex-col-reverse">
                    <div class="col-12 col-md-8 bg-tu-red" id="tured-carousel">
                    </div>
                    <div class="col-12 col-md-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-inner service-text-box" id="">
                                <div class="carousel-item active">
                                    <p class="dms-sans-reg">
                                        Con nuestro sistema podrás imponerte en el mercado inmobiliario de tu zona,
                                        brindando además el mejor asesoramiento estratégico para el crecimiento y
                                        consolidación de tus clientes.
                                    </p>
                                    <p class="dms-sans-reg">
                                        <span class="redfox-red">RedFox </span>puede brindarte un sistema de servicios para que puedas explotar
                                        tus talentos, potenciar tu trabajo y darle a tu vida un cambio que valga
                                        la pena vivirlo.
                                    </p>
                                    <p class="dms-sans-reg">
                                        Queremos ayudarte a desarrollar tu negocio, alcanzar una carrera exitosa
                                        y lograr los objetivos que decidiste para tu vida.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light-form py-20">
            <div class="container d-flex justify-center my-4">
                <div class="row">
                    <h4 class="redfox-red letter-spacing-2 my-2">
                        SUMATE A NUESTRO EQUIPO
                    </h4>
                </div>
            </div>
            <ContactFormStaff />
        </section>
    </PageLayout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";

export default {
    name: "Tu Red",
    components: {Banner, PageLayout}
}
</script>

<style scoped>
.bg-light-form
{
    background-color: #F3F5F5;
}

.bg-tu-red
{
    background-image: url("/images/red/river-building.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 450px;
}


#carouselExampleIndicators
{
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

@media screen and (max-width: 576px) {
    .sm-flex-col-reverse
    {
        display: flex;
        flex-direction: column-reverse;
    }
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
