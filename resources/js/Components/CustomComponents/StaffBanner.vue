<script setup>
import { Link } from "@inertiajs/vue3";

</script>

<template>
    <div class="">
        <div class="jumbotron" id="staff-banner">
            <div class="container d-flex justify-center align-center title-sec-container">
                <h3 class="title-section uppercase text-center">SOMOS REDFOX</h3>
                <p class="uppercase text-center dms-sans-reg">
                    UN EQUIPO MULTIDISCIPLINARIO QUE BRINDA SERVICIOS INMOBILIARIOS
                </p>
                <p class="uppercase text-center dms-sans-reg">
                    ENFOCADOS EN ASESORÍA JURÍDICA, CONTABLE Y DE DESARROLLOS INMOBILIARIOS.
                </p>
                <div class="row contact-us-btns-row">
                    <a href="#form-title-staff-section" class="btn btn-danger btn-height-standard mt-8 dms-sans-reg">
                        Dejanos tu consulta
                    </a>
                    <Link href="/contacto" class="btn btn-light btn-height-standard mt-8 dms-sans-reg uppercase">
                        Contactanos
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "StaffBanner"
}
</script>

<style scoped>
#staff-banner
{
    background-image: url("/images/staff/staff-bg.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.title-section
{
    color: #fff;
    font-size: 2.4rem;
    letter-spacing: 4px;
}
.title-sec-container
{
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.title-sec-container>p
{
    color: #fff;
    margin: 0;
}

.contact-us-btns-row
{
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top: 2rem;
}

.contact-us-btns-row>.btn
{
    max-width: 250px;
    margin-left: 25px;
    border-radius: 2px;
}


</style>
