<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import HomeBanner from "@/Components/CustomComponents/HomeBanner.vue";
import OutstandingPropertiesHome from "@/Components/CustomComponents/OutstandingPropertiesHome.vue";
import MapsCarousel from "@/Components/CustomComponents/MapsCarousel.vue";
import {Transition} from "vue";
import CardServices from "@/Components/CustomComponents/CardServices.vue";
import Services from "@/Components/CustomComponents/Services.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";
import ServicesHome from "@/Components/CustomComponents/ServicesHome.vue";
</script>

<template>
    <Transition name="bounce">
        <div id="preloader" v-if="preloader">
            <img src="/images/redfox-logo.png" alt="Isologotipo RedFox">
        </div>
    </Transition>
    <main id="app-main">
        <PageLayout>
            <HomeBanner
                :cities="cities"
            />
            <CardServices />
            <ServicesHome />
            <OutstandingPropertiesHome
                :properties="properties"
                :cities="cities"
            />
            <Services />
            <MiddleBanner />
            <MapsCarousel />
        </PageLayout>
    </main>
</template>

<script>
export default {
    props: {
        properties: Array,
        cities: Array,
    },
    data()
    {
        return {
            preloader: true
        }
    },
    mounted() {
        setTimeout(() =>{
            document.querySelector("#app-main").style.display = "block"
            this.preloader = false;
            document.body.style.overflow = "auto";
        }, 1000)
    }
}
</script>

<style>
    body
    {
        overflow: hidden;
    }
    #app-main
    {
        display: none;
    }
    #preloader
    {
        position: relative;
        background-color: #ffffff;
        color: #ffffff;
        width: 100%;
        height: 100vh;
        z-index: 20;
        display: flex;
    }
    #preloader>img
    {
        width: 350px;
        margin: auto;
    }
    .bounce-enter-active {
        animation: bounce-in 1s;
    }
    .bounce-leave-active {
        animation: bounce-in 1s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.25);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
