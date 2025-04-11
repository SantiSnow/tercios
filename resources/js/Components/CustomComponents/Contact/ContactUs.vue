<template>

    <div v-if="!formSent">
        <form @submit.prevent="sendContactForm">
            <div class="row md:mb-6">
                <label for="first_name" class="hidden">Nombre</label>
                <input type="text" name="first_name" id="first_name" class="form-control shadow-none input-side dms-sans-reg" placeholder="Nombre *" v-model="form.first_name" />

                <label for="last_name" class="hidden">Apellido</label>
                <input type="text" name="last_name" id="last_name" class="form-control shadow-none input-side dms-sans-reg" placeholder="Apellido *" v-model="form.last_name" />
            </div>

            <div class="row md:mb-6">
                <label for="email" class="hidden">Email</label>
                <input type="text" name="email" id="email" class="form-control shadow-none  input-side dms-sans-reg" placeholder="Email *" v-model="form.email" />

                <label for="phone" class="hidden">Teléfono</label>
                <input type="text" name="phone" id="phone" class="form-control shadow-none input-side dms-sans-reg" placeholder="Teléfono *" v-model="form.phone" />
            </div>

            <div class="row mb-6">
                <label for="reason" class="hidden">Motivo de tu consulta</label>
                <input type="text" name="reason" id="reason" class="form-control shadow-none input-full dms-sans-reg" placeholder="Motivo de tu consulta *" v-model="form.reason" />
            </div>

            <div class="row mb-6">
                <label for="message" class="hidden">Dejanos de tu consulta</label>
                <textarea type="text" name="message" id="message" class="form-control shadow-none input-full dms-sans-reg" placeholder="Dejanos tu consulta *" v-model="form.message"></textarea>
            </div>

            <div class="mb-6 tyc-check d-flex">
                <input type="checkbox" name="accepts_ads" id="accepts_ads" v-model="form.accepts_ads" />
                <label for="accepts_ads" class="dms-sans-reg">Autorizo a que RedFox Argentina me contacte vía mail con novedades</label>
            </div>

            <div class="row mb-6 btn-row">
                <button class="btn btn-danger uppercase dms-sans-reg" id="contact-section-btn">enviar consulta</button>
                <div><small class="dms-sans-reg"><span class="redfox-red">* </span>Campos obligatorios</small></div>
            </div>
        </form>
    </div>
    <div v-else>
        <div>
            <div class="row d-flex justify-center">
                <h4 class="text-center redfox-red">GRACIAS POR TU CONTACTO</h4>

                <p class="text-center mt-12">Te responderemos lo antes posible.</p>
            </div>
        </div>
    </div>

</template>

<script>
import {router} from "@inertiajs/vue3";
import axios from "axios";

export default {
    name: "ContactUs",
    data()
    {
        return {
            form: {
                first_name: null,
                last_name: null,
                email: null,
                phone: null,
                reason: null,
                message: null,
                accepts_ads: null,
                origin: "Contacto"
            },
            formSent: false,
        }
    },
    methods: {
        sendContactForm() {
            axios.post('/api/contact',
                this.form,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then((response) => {
                    console.log(response);
                    this.formSent = true;
                });
        }
    }
}
</script>

<style scoped>
.form-control.input-side
{
    width: 45%;
    margin-right: 2%;
    border-radius: 0;
}
.form-control.input-full
{
    width: 92%;
    border-radius: 0;
}
#accepts_ads
{
    border: 1px solid rgb(206, 212, 218);
    margin-top: 4px;
    margin-right: 5px;
}

.btn-danger
{
    border-radius: 2px;
    width: 275px;
}

#contact-section-btn
{
    width: 225px;
}

.form-control:active,
.form-control:focus
{
    outline: none;
    border-color: #ced4da;
}

.btn-row
{
    display: flex;
    flex-direction: row;
    align-items: center;
}

.btn-row>div
{
    width: auto;
}

@media screen and (max-width: 576px) {
    .form-control.input-side,
    .form-control.input-full
    {
        width: 90%;
        margin: auto;
    }
    .form-control.input-side
    {
        margin-bottom: 1rem;
    }
    .btn-row
    {
        display: flex;
        justify-content: center;
        text-align: center;

    }
    .tyc-check
    {
        display: flex;
        margin: 1rem;
    }

}
</style>
