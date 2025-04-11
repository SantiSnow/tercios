<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mx-2 property-card">
        <inertia-link :href="'/propiedad/'+$props.id">
            <div class="prop-img" v-if="$props.image"
                 :style="'background-image: url('+getImageUrl($props.image)+')'">
                <span class="badge-sell uppercase dms-sans-reg">{{ $props.operation }}</span>
            </div>

            <div class="prop-img" v-else
                 :style="'background-image: url(/images/houses/home-no-image.png)'">
                <span class="badge-sell uppercase">{{ $props.operation }}</span>
            </div>
        </inertia-link>
        <div class="card-body">
            <h4 class="color-darkgrey prop-title">
                <Link class="custom-link-title" :href="'/propiedad/' + $props.id">
                    <span class="dms-sans-reg">{{ $props.name }}</span>
                </Link>
            </h4>
            <div class="property-desc-body">
                <p class="color-grey prop-description">
                    <Link class="custom-link dms-sans-reg" :href="'/propiedad/' + $props.id">
                        <span class="uppercase dms-sans-reg">{{ $props.operation }}</span> - {{ $props.address }}
                    </Link>
                </p>
                <p class="color-grey prop-description dms-sans-reg" v-if="$props.preview" v-html="$props.preview.slice(0, 150)+'...'"></p>
                <p class="color-grey prop-description dms-sans-reg" v-else></p>
            </div>
            <h4 class="price-badge dms-sans-bold">
                <Link class="red-link redfox-red" :href="'/propiedad/' + $props.id">
                    {{ $props.currency==='USD' ? "USD " : "$" }}{{ $props.price.toLocaleString() }}
                </Link>
            </h4>
            <span class="brief-descrp light-grey-text dms-sans-reg">
                <span class="mr-2">
                    <img src="/images/icons/house-size.png" class="icon-prop" />
                    <span>{{ $props.square_meters }}
                        <span v-if="$props.mts_hec===2">ha</span>
                        <span v-else>m2</span>
                    </span>
                </span>
                <span class="mr-2" v-if="$props.rooms>0">
                    <img src="/images/icons/bed.png" class="icon-prop" />
                    {{ $props.rooms }}
                </span>
                <span class="mr-2">
                    <img src="/images/icons/bathtub.png" class="icon-prop" />
                    {{ $props.bathrooms }}
                </span>
            </span>
        </div>
    </div>
</template>

<script>
export default {
    name: "PropertyCard",
    props: {
        id: Number,
        title: String,
        preview: String,
        description: String,
        operation: String,
        image: String,
        address: String,
        rooms: Number,
        bathrooms: Number,
        square_meters: Number,
        price: Number,
        mts_hec: Number,
        currency: String,
    },
    methods: {
        getImageUrl(string)
        {
            return "/storage/properties/"+string;
        },
    }
}
</script>

<style scoped>
.property-card
{
    background-color: #f5f5f5;
    padding-right: 0;
    padding-left: 0;
    border-radius: 2px;
}
.card-body{
    padding: 1rem 1.5rem;
}

.max-h-100
{
    height: 100%;
    max-height: 100%;
}
.color-darkgrey
{
    color: #2e2f31;
}
.color-grey
{
    color: #707D80;
}
.prop-title
{
    font-size: 1.3rem;
    display: flex;
    justify-content: space-between;
}
.prop-description
{
    font-size: .9rem;
}
.brief-descrp
{
    font-size: .8rem;
}
.price-badge
{
    display: flex;
    align-items: center;
}
.badge-sell
{
    background-color: #d84e44;
    text-decoration: none;
    margin-right: 10px;
    margin-top: 10px;
    padding: 4px 4px 3px;
    border-radius: 2px;
    color: #fff;
    font-size: .6rem;
    float: right;
}
.custom-link,
.custom-link-title
{
    color: #111;
    text-decoration: none;
}
.red-link,
.red-link:hover
{
    color: #D84E44;
    text-decoration: none;
}
.custom-link-title:hover
{
    color: #3a3a3a;
}
.light-grey-text
{
    color: #707D80;
}
.prop-img
{
    height: 250px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.icon-prop
{
    width: 12px;
    display: inline;
    padding-bottom: 3px;
    margin-right: 4px;
}

.property-desc-body
{
    height: 11rem;
}

@media screen and (max-width: 1400px) {
    .property-desc-body
    {
        height: 13rem;
    }
}
</style>
