<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { QuillEditor } from '@vueup/vue-quill';
import {reactive} from "vue";
import { router } from '@inertiajs/vue3';

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
                for (let x in result)
                {
                    const option = document.createElement("option");
                    const text = document.createTextNode(result[x].name);
                    option.appendChild(text);
                    option.value= result[x].id;
                    select_cities.appendChild(option);
                }
            },
            async (error) => {
                console.log(error);
            }
        );
}


</script>

<style>
button.btn-primary,
button.btn-warning
{
    width: 200px;
    margin: auto;
}

</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Creación de nueva propiedad
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submit" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Título / Nombre:</label>
                            <input type="text" class="form-control"
                                   name="title" id="title" v-model="form.name"
                                   placeholder="Nombre descriptivo de la propiedad" required />
                            <div v-if="$page.props.errors.name" class="text-red-500 text-sm mt-1">
                                Por favor, complete un título o nombre para la propiedad
                            </div>
                            <br />

                            <label for="preview">Preview:</label>
                            <input type="text" class="form-control"
                                   name="preview" id="preview" v-model="form.preview" max="2000"
                                   placeholder="Preview descriptivo de la propiedad (2000 max)" required />
                            <div v-if="$page.props.errors.preview" class="text-red-500 text-sm mt-1">
                                Por favor, complete una descripción
                            </div>
                            <br />

                            <label for="price">Valor:</label>
                            <input type="number" class="form-control"
                                   name="price" id="price" v-model="form.price"
                                   placeholder="Valor" required />
                            <div v-if="$page.props.errors.price" class="text-red-500 text-sm mt-1">
                                Por favor, complete con un valor
                            </div>
                            <br />

                            <label for="price">Moneda:</label>
                            <select class="form-control" id="currency" name="currency" v-model="form.currency" required>
                                <option value="USD">Dolar</option>
                                <option value="Peso">Peso</option>
                            </select>
                            <div v-if="$page.props.errors.currency" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una opción
                            </div>
                            <br />

                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control"
                                   name="address" id="address" v-model="form.address"
                                   placeholder="Dirección" required />
                            <div v-if="$page.props.errors.address" class="text-red-500 text-sm mt-1">
                                Por favor, complete con una dirección
                            </div>
                            <br />

                            <label for="zip_code">CP:</label>
                            <input type="text" class="form-control"
                                   name="zip_code" id="zip_code" v-model="form.zip_code"
                                   placeholder="Código postal" />
                            <div v-if="$page.props.errors.zip_code" class="text-red-500 text-sm mt-1">
                                Por favor, complete con Código Postal
                            </div>
                            <br />

                            <label for="operation">Operación:</label>
                            <select class="form-control" id="operation" name="operation" v-model="form.operation" required>
                                <option value="En Venta">Venta</option>
                                <option value="En Alquiler">Alquiler</option>
                            </select>
                            <div v-if="$page.props.errors.operation" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una opción
                            </div>
                            <br />

                            <label for="rooms">Cantidad de Habitaciones (si aplica):</label>
                            <input type="number" class="form-control"
                                   name="rooms" id="rooms" v-model="form.rooms"
                                   placeholder="Habitaciones" />
                            <br />


                            <label for="bathrooms">Cantidad de baños (si aplica):</label>
                            <input type="number" class="form-control"
                                   name="bathrooms" id="bathrooms" v-model="form.bathrooms"
                                   placeholder="Cantidad de baños" />
                            <br />

                            <label for="square_meters">Metros cuadrados:</label>
                            <input type="number" class="form-control" step="0.01"
                                   name="square_meters" id="square_meters" v-model="form.square_meters"
                                   placeholder="Metros cuadrados" required />
                            <div v-if="$page.props.errors.square_meters" class="text-red-500 text-sm mt-1">
                                Por favor, complete con los metros cuadrados
                            </div>
                            <br />

                            <label for="mts_hec">Unidad de medida a mostrar (Metros/Hectareas):</label>
                            <select class="form-control"
                                    id="mts_hec" name="mts_hec" v-model="form.mts_hec"
                            >
                                <option value="1">Metros</option>
                                <option value="2">Hectáreas</option>
                            </select>
                            <br />

                        </div>

                        <div class="col-md-6">
                            <label for="outstanding">Destacada:</label>
                            <select class="form-control"
                                    id="outstanding" name="outstanding" v-model="form.outstanding">
                                <option value="1">Destacada</option>
                                <option value="0">No Destacada</option>
                            </select>
                            <div v-if="$page.props.errors.outstanding" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una opción
                            </div>
                            <br />

                            <label for="extra_information">Información Extra:</label>
                            <textarea id="extra_information" name="extra_information"
                                      class="form-control" v-model="form.extra_information"></textarea>
                            <br />


                            <label for="latitude">Latitud y Longitud (Si desea que aparezca en el mapa):</label>
                            <input type="text" class="form-control"
                                   name="latitude" id="latitude" v-model="form.latitude"
                                   placeholder="Latitud"  />
                            <br />
                            <input type="text" class="form-control"
                                   name="longitude" id="longitude" v-model="form.longitude"
                                   placeholder="Longitud"  />
                            <br />


                            <label for="estate">Provincia:</label>
                            <select class="form-control"
                                    id="estate" name="estate" v-model="form.estate_id"
                                    v-on:change="getCities($event.target.value)">
                                <option :value="estate.id" v-for="(estate) in estates">{{estate.name}}</option>
                            </select>
                            <div v-if="$page.props.errors.estate_id" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una provincia
                            </div>
                            <br />

                            <label for="city">Ciudad:</label>
                            <select class="form-control"
                                    id="city" name="city" v-model="form.city_id">
                            </select>
                            <div v-if="$page.props.errors.city_id" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una ciudad
                            </div>
                            <br />


                            <label for="type">Tipo de propiedad:</label>
                            <select class="form-control"
                                    id="type" name="type" v-model="form.type_id">
                                <option :value="type.id" v-for="(type) in types">{{type.name}}</option>
                            </select>
                            <div v-if="$page.props.errors.type_id" class="text-red-500 text-sm mt-1">
                                Por favor, seleccione una opción
                            </div>
                            <br />

                        </div>
                    </div>
                    <div class="row">
                        <input type="file" ref="file" multiple="multiple" class="form-control mb-8"
                               @input="form.images = $event.target.files" />

                        <label class="mt-8">Amenities:</label>
                        <div class="row" v-for="(amenity, index) in amenities" :key="index">
                            <input class="form-control my-8" placeholder="Amenity" v-model="amenity.name" />
                        </div>
                        <button
                            type="button"
                            class="btn btn-warning"
                            @click="addMore()"
                        >
                            Agregar más
                        </button>
                    </div>
                    <br /><br />
                    <div class="row">
                        <label class="mt-8">Descripción de la propiedad: </label>
                        <QuillEditor theme="snow" />
                        <br /><br />
                        <br /><br />

                        <br /><br />

                        <button class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "AdminContacts",
    props: {
        posts: Object,
        estates: Array,
        types: Array,
    },
    components: {
        QuillEditor
    },
    data() {
        return {
            form: {
                name: null,
                preview: null,
                price: null,
                currency: null,
                address: null,
                zip_code: null,
                operation: null,
                bathrooms: null,
                rooms: null,
                square_meters: null,
                outstanding: null,
                extra_information: null,
                longitude: null,
                latitude: null,
                type_id: null,
                city_id: null,
                estate_id: null,
                description: null,
                images: null,
                mts_hec: 1,
                amenities: [],
            },
            amenities: [
                { name: "" },
            ],
        };
    },
    methods: {
        addMore() {
            this.amenities.push({
                name: "",
            });
        },
        submit() {
            this.form.description = document.querySelector(".ql-editor").innerHTML;
            this.form.amenities = this.amenities;

            console.log(this.form)

            router.post('/property_store', this.form);
        }
    },
}
</script>
