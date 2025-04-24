<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { Link } from "@inertiajs/vue3";

</script>

<template>
    <div id="carouselExampleSlidesOnly" class="home-banner">
        <div class="d-flex justify-center align-center flex-col" id="main-home-title">
            <h3 class="text-md">Somos una <strong>red de profesionales especializados</strong></h3>
<!--            <Link class="btn btn-danger mt-4 contact-us btn-height-standard" href="/contacto">CONTACTANOS</Link>-->
        </div>
    </div>
</template>

<script>
import {reactive} from "vue";
import {router} from "@inertiajs/vue3";

export default {
    name: "BannerAboutUs",
    props: {

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
    background-image: url("/images/servicios/bg-service-inmo.png");
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
