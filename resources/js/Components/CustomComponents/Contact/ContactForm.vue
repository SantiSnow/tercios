<script setup>

import { reactive} from "vue";
import {router, usePage} from '@inertiajs/vue3';

let props = defineProps({
    title: String
});

let form = reactive({
    name: null,
    phone: null,
    email: null,
    message: null,
    origin: window.location.pathname
});

let submit = () =>{
    router.post('/contact', form);
}

</script>


<template>
    <div class="container my-12">
        <div class="row d-flex justify-center" id="contacto">
            <h2 class="text-center" v-if="!props.title">DEJANOS TU CONSULTA</h2>
            <h2 class="text-center" v-else>{{ props.title }}</h2>
            <br />
            <p class="text-center">Los campos marcados con * son obligatorios</p>
        </div>
    </div>

    <div class="container my-12">
        <div class="row d-flex justify-center">
            <form class="col-sm-12 col-md-9 col-lg-9" @submit.prevent="submit">
                <label for="name">Nombre completo <span class="mark-req">*</span></label>
                <input type="text" name="name" id="name" maxlength="80" class="form-control" v-model="form.name" placeholder="Ingrese su nombre y apellido" />
                <div v-if="$page.props.errors.name" class="text-red-500 text-sm mt-1">Por favor, complete su nombre</div>
                <br />

                <label for="phone">Celular </label>
                <input type="text" name="phone" id="phone" maxlength="80" class="form-control" v-model="form.phone" placeholder="Ingrese un teléfono" />
                <br />

                <label for="email">Correo electrónico <span class="mark-req">*</span></label>
                <input type="email" name="email" id="email" maxlength="80" class="form-control" v-model="form.email" placeholder="Ingrese su correo" />
                <div v-if="$page.props.errors.email" class="text-red-500 text-sm mt-1">Por favor, complete con un correo electrónico</div>
                <br />

                <label for="message">Mensaje <span class="mark-req">*</span></label>
                <textarea name="message" id="message" class="form-control" cols="5" maxlength="1000" v-model="form.message" placeholder="Dejenos su consulta aquí"></textarea>
                <div v-if="$page.props.errors.message" class="text-red-500 text-sm mt-1">Por favor, complete con un mensaje</div>
                <br />

                <button class="btn btn-danger uppercase">Enviar</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "ContactForm",
}
</script>

<style scoped>

label{
    display: block;
    font-size: 18px;
    line-height: 20px;
    font-weight: 700;
    padding: 5px;
}

label>.mark-req
{
    color: #910000;
}

input.form-control,
textarea.form-control
{
    background: #f7f7f7;
    border: 1px solid #c4c4c4;
    border-radius: 0;
    box-shadow: none;
    color: #787878;
    transition: all .5s;
    font-size: 16px;
    margin: 0;
    padding: 12px;
}

button.btn.btn-danger
{
    width: 100px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 2px;
    height: 50px;
    background-color: #DB5447;
}
</style>
