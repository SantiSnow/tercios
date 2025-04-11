<script setup>

let getCities = (value) => {
    let select_cities = document.getElementById("city");
    select_cities.innerHTML = "";

    const options = {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    };

    fetch(`/api/cities/${value}`, options)
        .then((response) => response.json())
        .then(
            async (result) => {
                let optionPlaceholder = document.createElement("option");
                let textPlaceholder = document.createTextNode("Partido de la propiedad");
                optionPlaceholder.appendChild(textPlaceholder);
                optionPlaceholder.value= "Partido de la propiedad";
                optionPlaceholder.disabled = true;
                select_cities.appendChild(optionPlaceholder);

                for (let x in result)
                {
                    const option = document.createElement("option");
                    const text = document.createTextNode(result[x].name);
                    option.appendChild(text);
                    option.value= result[x].name;
                    select_cities.appendChild(option);
                }
            },
            async (error) => {
                console.log(error);
            }
        );
}

</script>


<template>
    <div class="row d-flex justify-center" id="page-container">

        <form class="col-sm-12 col-md-6 col-lg-6 px-12 pb-6" @submit.prevent="submit">
            <div id="step-one">
                <div class="row d-flex justify-center">
                    <h2 class="text-center uppercase" id="form-title">Tasamos tu propiedad</h2>
                    <br />
                    <p class="text-center dms-sans-reg" id="step-one-desc">Ingresá los datos para conocer el valor de la propiedad.</p>
                    <p class="text-center d-none" id="step-two-desc">Todavía no hicimos una evaluación sobre esa propiedad ingresá tus datos y nos comunicamos con vos.</p>
                </div>

                <label for="name" class="d-none">Provincia</label>
                <select name="estate" id="estate"
                        class="form-control dms-sans-reg mb-4" v-model="form.estate"
                        v-on:change="getCities($event.target.value)">
                    <option value="Provincia de la propiedad" disabled>Ingresar provincia</option>
                    <option :value="estate.id" v-for="estate in estates">{{estate.name}}</option>
                </select>
                <div class="text-red-500 text-sm mt-1" id="estate-error">
                    Seleccione una provincia
                </div>
                <br />

                <label for="address" class="d-none">Dirección</label>
                <input type="text" name="address" id="address"
                       maxlength="100" class="form-control dms-sans-reg mb-4" v-model="form.address"
                       placeholder="Dirección de la propiedad" />
                <div id="address-error" class="text-red-500 text-sm mt-1">
                    Por favor, complete con su dirección</div>
                <br />

                <label for="city" class="d-none">Partido</label>
                <select name="city" id="city" class="form-control dms-sans-reg mb-4" v-model="form.city">
                    <option value="Partido de la propiedad" disabled>Partido de la propiedad</option>
                </select>
                <div  id="city-error" class="text-red-500 text-sm mt-1">
                    Por favor, complete con su localidad</div>
                <br />

                <span class="btn btn-danger" @click="stepTwo">Continuar</span>
            </div>


            <div id="step-two">
                <div>
                    <div class="row d-flex justify-center">
                        <h2 class="text-center uppercase" id="form-title">Tasamos tu propiedad</h2>
                        <br />
                        <p class="text-center dms-sans-reg">
                            Todavía no tenemos información de tu propiedad por favor
                            ingresá tus datos así un asesor puede ponerse en contacto con vos.
                        </p>
                    </div>
                    <label for="name" class="d-none">Nombre completo <span class="mark-req">*</span></label>
                    <input
                        type="text" name="name" id="name"
                        maxlength="80" class="form-control dms-sans-reg"
                        v-model="form.name" placeholder="Nombre y apellido" />
                    <div v-if="$page.props.errors.name" class="text-red-500 text-sm mt-1">Por favor, complete su nombre</div>
                    <br />

                    <label for="phone" class="d-none">Celular</label>
                    <input type="text" name="phone" id="phone" maxlength="80" class="form-control" v-model="form.phone" placeholder="Teléfono" />
                    <br />

                    <label for="email" class="d-none">Correo electrónico <span class="mark-req">*</span></label>
                    <input
                        type="email" name="email" id="email"
                        maxlength="80" class="form-control dms-sans-reg"
                        v-model="form.email" placeholder="Correo electrónico" />
                    <div v-if="$page.props.errors.email" class="text-red-500 text-sm mt-1">Por favor, complete con un correo electrónico</div>
                    <br />

                    <label for="message" class="d-none">Mensaje <span class="mark-req">*</span></label>
                    <textarea name="message" id="message" class="form-control dms-sans-reg" cols="5" maxlength="1000" v-model="form.message" placeholder="Dejanos tu consulta"></textarea>
                    <div v-if="$page.props.errors.message" class="text-red-500 text-sm mt-1">Por favor, complete con un mensaje</div>
                    <br />

                    <button class="btn btn-danger" v-if="!formSent">
                        Enviar
                    </button>
                    <div v-if="formSent" class="text-center">
                        <p>Gracias por enviarnos tus datos.</p>
                        <p>Pronto un asesor de ventas se pondrá en contacto para coordinar una visita.</p>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-sm-12 col-md-6 col-lg-6" id="form-aside">
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "SellForm",
    props: {
        estates: Array
    },
    data()
    {
        return {
            formSent: false,
            form: {
                estate: "Provincia de la propiedad",
                city: "Partido de la propiedad",
                address: null,
                name: null,
                phone: null,
                email: null,
                message: null,
            }
        }
    },
    methods: {
        submit() {
            axios.post('/api/tasar',
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
        },
        stepTwo() {
            document.querySelector("#estate-error").style.display = "none";
            document.querySelector("#city-error").style.display = "none";
            document.querySelector("#address-error").style.display = "none";

            if (!this.form.estate || this.form.estate==="Provincia de la propiedad")
            {
                document.querySelector("#estate-error").style.display = "block";
                return;
            }

            if (!this.form.city || this.form.city==="Partido de la propiedad")
            {
                document.querySelector("#city-error").style.display = "block";
                return;
            }

            if (!this.form.address)
            {
                document.querySelector("#address-error").style.display = "block";
                return;
            }

            let pageContainer = document.querySelector("#page-container");
            let stepOne = document.querySelector("#step-one");
            let stepTwo = document.querySelector("#step-two");
            let stepOneDesc = document.querySelector("#step-one-desc");
            let stepTwoDesc = document.querySelector("#step-two-desc");
            pageContainer.style.flexDirection = "row-reverse";
            stepOne.style.display = "none";
            stepTwo.style.display = "block";
            stepOneDesc.style.display = "none";
            stepTwoDesc.style.display = "block";
        }
    }
}
</script>

<style scoped>

label{
    display: block;
    font-size: 18px;
    line-height: 20px;
    font-weight: 500;
    padding: 5px;
}

label>.mark-req
{
    color: #910000;
}

select.form-control
{
    background: #f7f7f7;
    border: none;
    border-radius: 0;
    box-shadow: none;
    color: #787878;
    transition: all .5s;
    font-size: 16px;
    margin: 0;
    padding: 12px;
}

input.form-control,
textarea.form-control
{
    background: #f7f7f7;
    border: none;
    border-radius: 0;
    box-shadow: none;
    color: #787878;
    transition: all .5s;
    font-size: 16px;
    margin: 0;
    padding: 12px;
}

span.btn.btn-danger,
button.btn.btn-danger
{
    width: 150px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 45px;
    border: none;
    border-radius: 2px;
    background-color: #DB5447;
    text-transform: uppercase;
}

.d-none
{
    display: none;
}

#step-two
{
    display: none;
}

.px-12
{
    padding-right: 3rem;
    padding-left: 3rem;
}

#address-error,
#city-error,
#estate-error
{
    display: none;
}

#form-title
{
    color: #5E5E5E;
    font-size: 30px;
    font-weight: 600;
    padding-top: 4rem;
}

#form-aside
{
    min-height: 50vh;
    background-image: url("/images/sell/real-estate-side.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
</style>
