<script setup>


</script>

<template>
    <div class="container my-12 d-flex justify-content-center form-center">
        <div class="row d-flex justify-center form-center">
            <form class="col-sm-12 col-md-9 col-lg-9" @submit.prevent="submit">
                <div class="form-row">
                    <label for="name" class="d-none">Nombre <span class="mark-req">*</span></label>
                    <input type="text" name="name" id="name" maxlength="80" class="form-control" v-model="form.first_name" placeholder="Ingrese su nombre*" />
                    <div v-if="$page.props.errors.first_name" class="text-red-500 text-sm mt-1">Por favor, complete su nombre</div>
                    <br />

                    <label for="last_name" class="d-none">Apellido <span class="mark-req">*</span></label>
                    <input type="text" name="last_name" id="last_name" maxlength="80" class="form-control" v-model="form.last_name" placeholder="Ingrese su apellido*" />
                    <div v-if="$page.props.errors.last_name" class="text-red-500 text-sm mt-1">Por favor, complete su apellido</div>
                    <br />
                </div>

                <div class="form-row">
                    <label for="phone" class="d-none">Celular </label>
                    <input type="text" name="phone" id="phone" maxlength="80" class="form-control" v-model="form.phone" placeholder="Ingrese un teléfono*" />
                    <br />

                    <label for="email" class="d-none">Correo electrónico <span class="mark-req">*</span></label>
                    <input type="email" name="email"
                           id="email" maxlength="80" class="form-control"
                           v-model="form.email" placeholder="Ingrese su correo*" />
                    <div v-if="$page.props.errors.email"
                         class="text-red-500 text-sm mt-1">Por favor, complete con un correo electrónico</div>
                    <br />
                </div>

                <div class="form-row">
                    <label for="message" class="d-none">Mensaje <span class="mark-req">*</span></label>
                    <textarea name="message" id="message"
                              class="form-control" cols="5"
                              maxlength="1000" v-model="form.message"
                              placeholder="Dejenos su consulta aquí"></textarea>
                    <div v-if="$page.props.errors.message"
                         class="text-red-500 text-sm mt-1">Por favor, complete con un mensaje</div>
                    <br />
                </div>

                <div class="form-row">
                    <input type="checkbox" name="ads" id="ads" v-model="form.ads" />
                    <label for="ads">Autorizo a que RedFox Argentina me contacte vía mail con novedades </label>
                </div>

                <div class="form-row d-flex justify-content-center align-items-center my-4" v-if="errors">
                    Por favor, complete todos los campos.
                </div>

                <div class="form-row d-flex justify-content-center align-items-center my-4" v-if="!formSent">
                    <button class="btn btn-danger uppercase" id="send-button">Enviar Consulta</button>
                    <small><span class="redfox-red">*</span>Campos obligatorios</small>
                </div>

                <div class="form-row d-flex justify-content-center align-items-center" v-else>
                    ¡Gracias! Nos contactaremos con usted a la brevedad.
                </div>


            </form>
        </div>
    </div>
</template>

<script>
import {reactive} from "vue";
import axios from "axios";

export default {
    name: "ContactFormStaff",

    data(){
        return {
            formSent: false,
            form: {
                first_name: null,
                last_name: null,
                phone: null,
                email: null,
                message: null,
                origin: window.location.pathname,
                ads: false,
            },
            errors: false,
        }
    },
    methods: {
        submit() {
            this.errors = false;
            axios.post('/api/staff',
                this.form,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then((response) => {
                    console.log(response);
                    if(response.data.errors)
                    {
                        this.errors = true;
                        return;
                    }
                    this.formSent = true;
                });
        }
    }
}
</script>

<style scoped>

.form-center
{
    width: 80%;
}

#ads
{
    border: 1px solid rgb(206, 212, 218);
    margin-top: 4px;
    margin-right: 5px;
}

.form-row
{
    display: flex;
    margin: 1rem 0;
}

.form-row>input,
.form-row>textarea
{
    margin-right: 10px;
}

.form-control
{
    border-radius: 0px;
    border: none;
    padding: 1rem;
}

#send-button
{
    width: 250px;
    padding: .8rem;
    border-radius: 2px;
    background-color: #D84E44;
    margin-right: .5rem;
}

@media screen and (max-width: 576px) {
    .form-center
    {
        width: 100%;
    }
    .form-row
    {
        flex-direction: column;
    }
}
</style>
