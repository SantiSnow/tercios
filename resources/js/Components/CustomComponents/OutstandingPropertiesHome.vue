<script setup>
import { Link } from "@inertiajs/vue3";
import PropertyCard from "@/Components/CustomComponents/PropertyCard.vue";
</script>

<template>
    <div class="container my-16 d-flex justify-content-center">
        <div class="d-flex flex-col relative">
            <form class="row max-w-container mx-auto form-bg-grey" id="form-searchbar-container" @submit.prevent="postSearch">
                <label for="zona" class="d-none">Zona</label>
                <input type="text" maxlength="100"
                       @focus="openSuggestions"
                       class="form-control form-searchbar wider-input dms-sans-reg shadow-none"
                       id="zona" name="zona"
                       placeholder="Zona"
                       v-model="form.city"
                       autocomplete="off"
                       required
                />

                <label for="type" class="d-none">Tipo de inmueble</label>
                <select class="form-control form-searchbar dms-sans-reg shadow-none" id="type" name="type" v-model="form.type">
                    <option value="0" disabled>Tipo de inmueble</option>
                    <option value="1">Casa</option>
                    <option value="2">Clínica</option>
                    <option value="3">Departamento</option>
                    <option value="4">Local</option>
                    <option value="5">Lote</option>
                    <option value="6">Oficina</option>
                    <option value="7">PH</option>
                </select>

                <label for="operation" class="d-none">Transacción</label>
                <select class="form-control form-searchbar dms-sans-reg shadow-none" id="operation" name="operation" v-model="form.operation">
                    <option value="0" disabled>Transacción</option>
                    <option value="En Venta">En Venta</option>
                    <option value="En Alquiler">En Alquiler</option>
                </select>

                <label for="min" class="d-none">Precio mínimo</label>
                <input type="number" v-model="form.min" maxlength="100"
                       class="form-control form-searchbar dms-sans-reg smaller-input shadow-none"
                       id="min" name="min" placeholder="Precio mínimo"
                />

                <label for="max" class="d-none">Precio máximo</label>
                <input type="number" v-model="form.max" maxlength="100"
                       class="form-control form-searchbar dms-sans-reg smaller-input shadow-none"
                       id="max" name="max" placeholder="Precio máximo"
                />

                <button class="btn btn-danger btn-height-standard w-150px">
                    buscar
                </button>
            </form>
            <div class="row" id="list-container">
                <span v-for="(city, i) in cities" :key="i.toString()" class="list-item-sug">
                    {{ city }}
                </span>
            </div>
        </div>
    </div>
    <div class="container my-12">
        <div class="row flex justify-center">
            <PropertyCard
                v-for="(prop, index) in properties" :key="prop.id"
                :id="prop.id"
                :title="prop.name"
                :preview="prop.preview"
                :description="prop.description"
                :operation="prop.operation"
                :image="(prop.images[0]) ? prop.images[0].file : 'home-no-image.png'"
                :address="prop.address"
                :rooms="prop.rooms"
                :bathrooms="prop.bathrooms"
                :square_meters="prop.square_meters"
                :price="prop.price"
                :mts_hec="prop.mts_hec"
                :currency="prop.currency"
            />
        </div>
    </div>

    <div class="container my-16">
        <div class="row">
            <Link href="/comprar" class="btn btn-outline-danger btn-height-standard mx-auto max-w-340 dms-sans-reg d-flex justify-center align-center">Ver más propiedades a la venta</Link>
        </div>
    </div>
</template>

<script>

import {router} from "@inertiajs/vue3";

export default {
    name: "OutstandingPropertiesHome",
    data()
    {
        return {
            positionSliderOne: 0,
            positionSliderTwo: 0,
            form: {
                city: null,
                type: 0,
                operation: 0,
                min: null,
                max: null,
            }
        }
    },
    methods: {
        navigateToUrl(url)
        {
            router.push(url);
        },
        getImageUrl(string)
        {
            return "/storage/properties/"+string;
        },
        getImageClassSlider(string)
        {
            return "max-h-100 slider-img-"+string;
        },
        postSearch() {
            document.getElementById("operation").style.borderBottom = "none";
            document.getElementById("type").style.borderBottom = "none";

            if (this.form.type === 0)
            {
                document.getElementById("type").style.borderBottom = "1px solid #D84E44";
                return;
            }

            if (this.form.operation === 0)
            {
                document.getElementById("operation").style.borderBottom = "1px solid #D84E44";
                return;
            }

            router.post('/busqueda', this.form);
        },
        openSuggestions() {
            document.getElementById("list-container").style.display = "flex";
        },
    },
    mounted() {
        let listSuggestions = document.getElementsByClassName("list-item-sug")

        for(let i = 0; i<listSuggestions.length; i++)
        {
            listSuggestions[i].addEventListener('click', (e) => {
                document.getElementById("list-container").style.display = "none";
                document.getElementById("zona").value = e.target.innerText;
                this.form.city = e.target.innerText;
            })
        }

        document.addEventListener("mouseup", function(event) {
            var obj = document.getElementById("list-container");
            var obj2 = document.getElementById("zona");
            if (!obj.contains(event.target) && !obj2.contains(event.target)) {
                document.getElementById("list-container").style.display = "none";
            }
        });
    },
    props: {
        properties: Array,
        cities: Array,
    },
}
</script>

<style scoped>
    .form-bg-grey
    {
        background-color: #E2E5E6;
        padding: 1rem;
    }
    .form-searchbar
    {
        margin: 0 .2rem;
        border-radius: 0;
        border: none;
        transition: all ease-in .5s;
    }
    .form-searchbar::placeholder
    {
        font-size: 14px;
        font-family: 'DMSansRegular';
    }
    select.form-searchbar
    {
        width: 9.8rem;
        font-size: 14px;
        color: #787878;
    }
    select.form-searchbar>option
    {

    }
    .btn-danger.w-150px
    {
        font-size: 14px;
    }
    .form-searchbar:active,
    .form-searchbar:focus
    {
        border-bottom: 1px solid #ddd;
        outline: 0;
    }
    .w-150px
    {
        width: 150px;
    }
    .wider-input
    {
        width: 8.2rem;
    }
    .smaller-input
    {
        width: 8.5rem;
    }
    .max-w-340
    {
        max-width: 340px;
    }
    #list-container
    {
        margin: auto;
        width: 300px;
        display: none;
        position: absolute;
        top: 3rem;
        background-color: #fff;
    }
    #list-container>span
    {
        padding: .5rem;
        cursor: pointer;
    }
    .margin-x-24
    {
        margin-right: 3rem;
        margin-left: 3rem;
    }
    .btn-outline-danger
    {
        border-color: #DB5447;
        border-radius: 2px;
        color: #DB5447;
        text-transform: uppercase;
    }
    .btn-outline-danger:hover
    {
        background-color: #DB5447;
        color: #fff;
    }

    #form-searchbar-container>button
    {
        margin-left: 3.2px;
    }

    @media screen and (max-width: 768px) {
        #form-searchbar-container
        {
            display: flex;
            flex-direction: column;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }
        select.form-searchbar
        {
            width: 20rem;
            margin: 1rem 0;
        }
        .w-150px
        {
            width: 20rem;
            margin: 1rem 0;
        }
        .wider-input
        {
            width: 20rem;
            margin: 1rem 0;
        }
        .smaller-input
        {
            width: 20rem;
            margin: 1rem 0;
        }
    }
</style>
