<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <PageLayout>
        <Banner title="Resultados de la búsqueda" background="search-bg" />
        <div class="container mt-12 mb-20">
            <div class="row">
                <h3 class="uppercase letter-spacing-2">Resultados</h3>
            </div>
            <div class="row mt-4" v-if="!properties.length">
                <h5 class="uppercase letter-spacing-2">Su búsqueda no arrojó resultados</h5>
                <Link href="/" class="btn btn-danger btn-flex">Volver a la home</Link>
            </div>
            <div class="row mt-4" v-else>
                <div class="col-sm-12 col-md-6 col-lg-4" v-for="prop in properties" :key="prop.id">
                    <div class="card">
                        <inertia-link :href="'/propiedad/'+prop.id">
                            <img :src="'/storage/properties/'+prop.images[0].file" class="card-img-top" alt="..." v-if="prop.images[0]" />
                            <img :src="'/storage/properties/no-image.png'" class="card-img-top placeholder" alt="..." v-else />
                        </inertia-link>
                        <div class="card-body">
                            <p class="d-flex types-prop">
                                <span class="badge">{{ prop.operation }}</span>
                                {{ prop.type.name }}
                            </p>
                            <inertia-link :href="'/propiedad/'+prop.id" class="link-standar">
                                <h5 class="card-title font-semibold">{{ prop.name }}</h5>
                            </inertia-link>
                            <inertia-link :href="'/propiedad/'+prop.id" class="link-standar">
                                <p class="card-text">{{ prop.address }}</p>
                            </inertia-link>
                            <Link :href="'/propiedad/'+prop.id" class="btn btn-danger mt-4">Ver más</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>

<script>
    export default {
        name: "Búsqueda",

        props: {
            properties: Array,
        }
    }
</script>


<style>
.card
{
    border: none;
    font-family: "RedHatLight";
    letter-spacing: 1px;
}
.letter-spacing-2
{
    letter-spacing: 2px;
}
.card-title
{
    font-family: "RedHatBold";
}
p.types-prop
{
    display: flex;
    justify-content: space-between;
    font-size: .7rem;
}
.badge
{
    align-items: center;
    display: flex;
    background-color: #eab134;
    margin-right: 10px;
    padding: 4px;
    border-radius: 4px;
    color: #fff;
    font-size: .6rem;
}
a.btn.btn-danger
{
    border-radius: 2px;
}
.btn-danger.btn-flex
{
    width: 150px;
    margin: 2rem;
}
.link-standar
{
    color: #1a202c;
    text-decoration: none;
}
.link-standar:hover
{
    color: #323b4d;
}
img.card-img-top
{
    height: 200px;
}
img.placeholder
{
    width: 100%;
    height: 180px;
    cursor: pointer;
}
</style>
