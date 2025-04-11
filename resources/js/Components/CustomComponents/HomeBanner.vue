<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { Link } from "@inertiajs/vue3";

</script>

<template>
    <div id="carouselExampleSlidesOnly" class="home-banner">
        <div class="d-flex justify-center align-center flex-col" id="main-home-title">
            <h3 class="display-4">INTERVENIMOS EN MOMENTOS CLAVES</h3>

            <p class="text-white text-center dms-sans-reg">Brindamos asesoramiento multidisciplinario:<br />
                jurídico, inmobiliario, contable y de desarrollos inmobiliarios.</p>

            <Link class="btn btn-danger mt-4 contact-us btn-height-standard" href="/contacto">CONTACTANOS</Link>
        </div>
    </div>
    <!--div-- id="search-bar" class="relative">
        <form class="d-flex justify-center" id="propSearch" @submit.prevent="submit">
            <input placeholder="Zona"
                   type="text" name="city" v-model="form.city"
                   id="city" class="form-custom"
                   @keyup="openDropMenu" autocomplete="off" />

            <div :class="(!dropDownMenu) ? 'absolute hidden' : 'absolute'" id="city-list">
                <ul>
                    <li v-for="(city, index) in sugestions" :key="index" @click="selectCity(city)">{{city}}</li>
                </ul>
            </div>

            <select class="form-custom" id="prop-type" v-model="form.type">
                <option value="0" disabled>Tipo de inmueble</option>
                <option value="1">Casa</option>
                <option value="2">Clínica</option>
                <option value="3">Departamento</option>
                <option value="4">Local</option>
                <option value="5">Lote</option>
                <option value="6">Oficina</option>
                <option value="7">PH</option>
            </select>

            <select class="form-custom" id="prop-operation" v-model="form.operation">
                <option value="" disabled>Transacción</option>
                <option value="En Venta">Venta</option>
                <option value="En Alquiler">Alquiler</option>
            </select>

            <input placeholder="Precio mínimo" v-model="form.min"
                   type="number" name="minimum" id="minimum"
                   class="form-custom resp-d-none" />

            <input placeholder="Precio máximo"
                   type="number" name="maximum" v-model="form.max"
                   id="maximum" class="form-custom resp-d-none" />

            <button class="btn btn-danger">Buscar <font-awesome-icon icon="fa-solid fa-arrow-right" class="icons-footer" /></button>
        </form>
    </div-->
</template>

<script>
import {reactive} from "vue";
import {router} from "@inertiajs/vue3";

export default {
    name: "HomeBanner",
    props: {
        cities: Array,
    },
    data()
    {
        return {
            dropDownMenu: false,
            sugestions: [],
            form: reactive({
                city: null,
                type: 0,
                operation: "",
                min: null,
                max: null,
            })
        }
    },
    methods:
    {
        submit() {
            document.getElementById("prop-type").style.borderColor = "transparent";
            document.getElementById("prop-operation").style.borderColor = "transparent";

            if (form.type===0)
            {
                document.getElementById("prop-type").style.borderColor = "#dc3545";
                return;
            }
            if (form.operation==="")
            {
                document.getElementById("prop-operation").style.borderColor = "#dc3545";
                return;
            }
            router.post('/busqueda', form);
        },
        openDropMenu (event) {
            const searched = event.target.value;

            this.sugestions = [];

            if (searched.length !== 0)
            {
                for (let i=0; i<this.cities.length; i++)
                {
                    if (this.cities[i].toLowerCase().includes(searched))
                    {
                        this.sugestions.push(this.cities[i]);
                    }
                }

                if (this.sugestions!==0)
                {
                    this.dropDownMenu = true;
                }
            }
            else
            {
                this.dropDownMenu = false;
            }

        },
        selectCity(city) {
            this.form.city = city;
            this.dropDownMenu = false;
        }
    }
}
</script>


<style scoped>
#main-banner>div>h3
{
    font-size: 2.4rem;
}

.home-banner
{
    position: relative;
    min-height: 75vh;
    background-image: url("/images/home/home-page1.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

#search-bar
{
    width: 100%;
    padding: 1rem;
    background-color: #f3f5f5;
}
.btn-danger
{
    border-radius: 2px;
    background-color: #DB5447;
    text-transform: uppercase;
}
.btn-danger.contact-us
{
    width: 160px;
    margin: auto;
    background-color: #DB5447;
}
.form-custom
{
    margin: 0 .5rem;
    color: #707070;
    max-width: 180px;
    border-color: transparent;
}
.form-custom:focus
{
    outline: none;
}

.prop-type
{
    transition: all ease 1s;
}

#city-list
{
    left: 1rem;
    top: 60px;
    background-color: #f3f5f5;
}

#city-list>ul>li
{
    padding-top: .4rem;
    padding-right: 1rem;
    cursor: pointer;
}

#city-list>ul>li:hover
{
    background-color: #d3d7d7;
}

#carouselExampleSlidesOnly>div>.btn.btn-danger
{
    background-color: #DB5447;
    border: none;
    border-radius: 2px;
}

@media screen and (max-width: 991px) {
    .home-banner
    {
        position: relative;
        min-height: 85vh;
    }
    button.btn.btn-danger
    {
        display: block;
        width: 50%;
        max-width: 150px;
    }
    .resp-d-none
    {
        display: none;
    }
}

@media screen and (max-width: 576px) {
    #propSearch
    {
        flex-direction: column;
        align-items: center;
    }
    .form-custom
    {
        margin: 5px 0;
        width: 100%;
        max-width: 100%;
    }
    button.btn.btn-danger
    {
        width: 100%;
        max-width: 100%;
    }
    .carousel-inner
    {
        min-height: 75vh;
    }
}

#carouselExampleSlidesOnly>div#main-home-title
{
    position: absolute;
    right: 0;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    margin: auto;
}

#carouselExampleSlidesOnly>div>h3
{
    font-size: 2.4rem;
    text-align: center;
    color: #ffffff;
}
#carouselExampleSlidesOnly>div>p
{
    font-size: 1.1rem;
    text-transform: uppercase;
}
</style>
