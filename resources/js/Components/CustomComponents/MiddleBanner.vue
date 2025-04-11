<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-banner-desarrollo pb-12 py-12">
        <div class="container">
            <div class="row">
                <h3 class="uppercase text-4xl tracking-widest text-center text-white">¿querés comprar, vender o alquilar?</h3>
            </div>
            <div class="row py-8">
                <p class="uppercase text-center text-white m-0 dms-sans-reg">nuestro equipo multidisciplinario de profesionales de elite</p>
                <p class="uppercase text-center text-white dms-sans-reg">está listo para acompañarte y brindarte un asesoramisento 360°</p>
            </div>
            <div class="row flex justify-center">
                <Link href="/tasar" class="btn btn-danger btn-height-standard uppercase btn-custom dms-sans-reg mx-2">dejanos tu consulta</Link>
                <Link href="/contacto" class="btn btn-light btn-height-standard uppercase btn-custom1 dms-sans-reg mx-2 d-flex justify-content-center align-center">contactanos</Link>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "MiddleBanner"
}
</script>

<style scoped>
.bg-banner-desarrollo
{
    background-image: url("/images/servicios/services-contact-banner.png");
    background-position: center;
    background-size: cover;
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
    .btn-custom
    {
        margin-bottom: 1rem;
    }
}
</style>
