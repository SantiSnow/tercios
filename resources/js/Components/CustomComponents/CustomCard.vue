<script setup>
    import { Link } from "@inertiajs/vue3";
</script>


<template>
    <div :class="'card py-4 px-6 '+bgColor">
        <h2 class="card-title text-white text-center text-4xl uppercase pb-0 mb-0">
            {{ title }}
        </h2>
        <h5 class="text-white text-center uppercase">
            {{ subTitle }}
        </h5>

        <p class="mt-4 px-4 text-center text-white dms-sans-reg" v-html="cardText">

        </p>

        <Link :href="ctaHref" class="btn btn-light uppercase mt-4 btn-height-standard dms-sans-reg">
            {{ ctaText }}
        </Link>
    </div>
</template>

<script>
export default {
    name: "CustomCard",
    props: {
        bgColor: String,
        title: String,
        subTitle: String,
        cardText: String,
        ctaText: String,
        ctaHref: String,
    }
}
</script>

<style scoped>

.bg-deepRed
{
    background-color: #8B251E;
}

.bg-deepBlue
{
    background-color: #10262B;
}

.bg-lightRed
{
    background-color: #D84E44;
}

.card
{
    border-radius: 0;
}

.btn-light
{
    border-radius: 2px;
    display: block;
    border-radius: 2px;
    background: linear-gradient(to right, #D84E44 50%, #ffffff 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
}

.btn-light:hover {
    background-position: left bottom;
    color: #ffffff;
}

.btn-light
{
    padding: .5rem;
}

</style>
