<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import { Link } from "@inertiajs/vue3";
import Pagination from "@/Components/CustomComponents/Pagination.vue";
import PropertyCard from "@/Components/CustomComponents/PropertyCard.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";
import MapsCarousel from "@/Components/CustomComponents/MapsCarousel.vue";
import SearchBarInternal from "@/Components/CustomComponents/SearchBarInternal.vue";
</script>

<template>
    <PageLayout>

        <div class="jumbotron grey-jumbotron">
            <div class="container d-flex justify-center align-center">
                <div class="row pt-20 pb-12">
                    <h3 class="uppercase letter-spacing-2 text-center redfox-red text-4xl redhat-regular">Propiedades a la venta</h3>
                </div>
            </div>
            <div class="row">
                <SearchBarInternal
                    :cities="cities"
                />
            </div>
        </div>

        <div class="container mt-24 mb-20">
            <div class="row mt-4" v-if="!properties.data.length">
                <h5 class="uppercase letter-spacing-2">No tenemos propiedades a la venta publicadas.</h5>
                <Link href="/" class="btn btn-danger btn-flex">VOLVER A LA HOMEPAGE</Link>
            </div>
            <div class="row justify-center mt-4" v-else>
                <PropertyCard
                    v-for="prop in properties.data" :key="prop.id"
                    :id="prop.id"
                    :title="prop.name"
                    :preview="prop.preview"
                    :description="prop.description"
                    :operation="prop.operation"
                    :image="prop.images[0]?.file"
                    :address="prop.address"
                    :rooms="prop.rooms"
                    :bathrooms="prop.bathrooms"
                    :square_meters="prop.square_meters"
                    :price="prop.price"
                    :mts_hec="prop.mts_hec"
                    :currency="prop.currency"
                    class="mb-8"
                />
            </div>
            <div class="row justify-center">
                <Pagination :links="properties.links" />
            </div>
        </div>

        <MiddleBanner />
        <MapsCarousel />
    </PageLayout>
</template>

<script>
    export default {
        name: "Selling",

        props: {
            properties: Object,
            cities: Array,
        }
    }
</script>


<style scoped>
.grey-jumbotron
{
    background-color: #F3F5F5;
}
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
    background-color: #DB5447;
    text-transform: uppercase;
}
.btn-danger.btn-flex
{
    width: 150px;
    margin: 2rem;
    background-color: #DB5447;
    text-transform: uppercase;
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

img.placeholder,
img.card-img-top
{
    width: 100%;
    height: 210px;
    cursor: pointer;
}
</style>
