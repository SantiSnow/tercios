<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';import { router } from '@inertiajs/vue3';

</script>

<style>
button.btn-primary,
button.btn-warning
{
    width: 200px;
    margin: auto;
}
.img-sm
{
    max-width: 250px;
}

</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Propiedades destacadas
            </h2>
        </template>

        <div class="py-12">
            <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" @submit.prevent="submit()">
                <div class="row mb-6">

                    <div class="col-5">
                        <p>Propiedad destacada 1:</p>
                        <div class="mb-4">
                            <h5 id="prop_out_1">{{ first_property[0].name }}</h5>
                            <img :src="'/storage/properties/'+first_property[0].images[0].file"
                                 id="prop_img_out_1"
                                 alt="" class="img-sm"
                                 v-if="first_property[0].images[0]">
                        </div>
                    </div>

                    <div class="col-5">
                        <label>Cambiar propiedad destacada: </label>
                        <select class="form-control" name="new_prop_1" id="new_prop_1" v-model="form.property_id_one">
                            <option :value="property.id" v-for="(property) in properties">{{property.name}}</option>
                        </select>
                    </div>
                </div>
                <hr />
                <div class="row">

                    <div class="col-5">
                        <p>Propiedad destacada 2:</p>
                        <div class="mb-4">
                            <h5 id="prop_out_2">{{ second_property[0].name }}</h5>
                            <img :src="'/storage/properties/'+second_property[0].images[0].file"
                                 alt="" class="img-sm"
                                 id="prop_img_out_2"
                                 v-if="second_property[0].images[0]">
                        </div>
                    </div>

                    <div class="col-5">
                        <label>Cambiar propiedad destacada: </label>
                        <select class="form-control" name="new_prop_2" id="new_prop_2" v-model="form.property_id_two">
                            <option :value="property.id" v-for="(property) in properties">{{property.name}}</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "OutstandingProperties",
    props: {
        first_property: Array,
        second_property: Array,
        properties: Array
    },
    components: {

    },
    data() {
        return {
            form: {
                property_id_one: this.first_property[0].id,
                property_id_two: this.second_property[0].id,
            },
        };
    },
    methods: {
        submit() {
            router.post('/properties-outstanding-change', this.form);
        }
    },
    mounted()
    {

    },
}
</script>
