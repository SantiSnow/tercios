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
div.img-cont-editor
{
    position: relative;
}

.custom-amenity-input
{
    display: flex;
    flex-direction: row;
}
.custom-amenity-input>input.form-control
{
    width: 95%;
}
.custom-amenity-input>.btn-danger
{
    width: 5%;
}
</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edición de la propiedad
            </h2>
            <a :href="'/propiedad/'+$page.props.property.id" class="btn btn-success" target="_blank">Previsualizar</a>
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
                            <select class="form-control" id="currency" name="currency" v-model="form.currency">
                                <option value="USD">Dolar</option>
                                <option value="Peso">Peso</option>
                            </select>
                            <div v-if="$page.props.errors.address" class="text-red-500 text-sm mt-1">
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
                                   placeholder="Dirección" required />
                            <div v-if="$page.props.errors.zip_code" class="text-red-500 text-sm mt-1">
                                Por favor, complete con Código Postal
                            </div>
                            <br />

                            <label for="operation">Operación:</label>
                            <select class="form-control" id="operation" name="operation" v-model="form.operation">
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

                            <label for="square_meters">Metros/Hectareas:</label>
                            <input type="number" class="form-control"
                                   name="square_meters" id="square_meters" v-model="form.square_meters"
                                   placeholder="Metros cuadrados o hectareas" required />
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
                                <option :value="city.id" v-for="(city) in cities">{{city.name}}</option>
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
                        <h4>Amenities:</h4>
                        <div class="row my-8 custom-amenity-input" v-for="(amenity, index) in amenities" :key="index" :id="'prop-amenity-i-'+amenity.id">
                            <input class="form-control" placeholder="Amenity" v-model="amenity.name" />
                            <span class="btn btn-danger" @click="deleteAmenity(amenity.id)">X</span>
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
                        <h4>Imagenes de la propiedad:</h4>
                    </div>
                    <div class="row">
                        <ul class="sortable-list" id="sortable-list">
                            <li class="item"
                                draggable="true"
                                :id="`prop-picture-i-${image.id}`"
                                :data-image-list-index="`${image.id}`"
                                v-for="(image, index) in images"
                                :key="index"
                            >
                                <div class="details">
                                    <font-awesome-icon icon="fa-solid fa-grip-vertical" class="fa-solid" />
                                    <img :src="'/storage/properties/'+image.file" alt="Property Image" />
                                    <span>File: {{ image.file }}</span>
                                </div>
                                <span class="btn btn-danger btn-delete-img" @click="toggleModal(image.id)">Delete</span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">
                        <h4>Agregar más:</h4>
                        <label class="mt-8">Imagenes:</label>
                        <input type="file" ref="file" multiple="multiple" class="form-control mb-8"
                               @input="form.images = $event.target.files" />
                    </div>

                    <br /><br /><br /><br />
                    <div class="row">
                        <label class="mt-8">Descripción de la propiedad: </label>
                        <QuillEditor theme="snow" />
                        <br /><br />
                        <br /><br />

                        <br /><br />

                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div :class="`modal ${modalOpen ? 'show' : ''}`" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Esta seguro:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="toggleModal"></button>
                    </div>
                    <div class="modal-body">
                        <p>¿Desea borrar esta imagen?</p>
                    </div>
                    <div class="modal-footer flex justify-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="toggleModal">Cerrar</button>
                        <button type="button" class="btn btn-danger" @click="deleteImage()">Borrar</button>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "AdminContacts",
    props: {
        property: Object,
        estates: Array,
        cities: Array,
        types: Array,
        amenities: Array,
        images: Array,
    },
    components: {
        QuillEditor
    },
    data() {
        return {
            form: {
                id: this.property.id,
                name: this.property.name,
                preview: this.property.preview,
                price: this.property.price,
                currency: this.property.currency,
                address: this.property.address,
                zip_code: this.property.zip_code,
                operation: this.property.operation,
                bathrooms: this.property.bathrooms,
                rooms: this.property.rooms,
                square_meters: this.property.square_meters,
                outstanding: this.property.outstanding,
                extra_information: this.property.extra_information,
                longitude: this.property.longitude,
                latitude: this.property.latitude,
                mts_hec: this.property.mts_hec ?? 1,
                type_id: this.property.type_id,
                city_id: this.property.city_id,
                estate_id: this.property.estate_id,
                description: this.property.description,
                images: [],
                amenities: [],
                images_order: [],
            },
            amenities: this.amenities,
            images: this.images,
            delete_id: null,
            modalOpen: false,
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

            const sortList = document.getElementById("sortable-list");
            let order = [];

            for (let i = 0; sortList.childNodes.length > i; i++)
            {
                if(sortList.childNodes[i].id)
                {
                    //console.log(sortList.childNodes[i].getAttribute('data-image-list-index'));
                    order.push(sortList.childNodes[i].getAttribute('data-image-list-index'));
                    //order.push(sortList.childNodes[i].id);
                }
            }

            console.log("final: ", order);
            this.form.images_order = order;

            router.post('/property_save', this.form);
        },
        toggleModal(id)
        {
            this.modalOpen = !this.modalOpen;
            this.delete_id = id;
        },
        deleteImage() {
            const options = {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    image_id: this.delete_id,
                    token: "n1cfd03d1fdmc31das",
                })
            };

            fetch(`/api/picture`, options)
                .then((response) => response.json())
                .then(
                    async (result) => {
                        console.log(result);
                        if (result.message === "image deleted")
                        {
                            document.getElementById("prop-picture-i-"+this.delete_id).remove();
                        }
                    },
                    async (error) => {
                        console.log(error);
                    }
                );

            this.modalOpen = !this.modalOpen;
        },
        deleteAmenity(id) {

            for (let i = 0; i<this.amenities.length; i++)
            {
                if (this.amenities[i].id === id)
                {
                    this.amenities.splice(i, 1);
                }
            }

            const options = {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    amenity_id: id,
                    token: "n1cfd03d1fdmc31das",
                })
            };

            fetch(`/api/amenity`, options)
                .then((response) => response.json())
                .then(
                    async (result) => {
                        console.log(result);
                    },
                    async (error) => {
                        console.log(error);
                    }
                );
        }
    },
    mounted() {
        document.querySelector(".ql-editor").innerHTML = this.property.description;

        const sortList = document.getElementById("sortable-list");
        const items = document.querySelectorAll(".item");

        items.forEach(item => {

            //add clase
            item.addEventListener("dragstart", () => {
                item.classList.add("dragging");
            });

            //remove class
            item.addEventListener("dragend", () => {
                item.classList.remove("dragging");
            });



        });

        const initSortableList = (e) => {
            const dragginItem = sortList.querySelector(".dragging");
            const siblings = [...sortList.querySelectorAll(".item:not(.dragging)")];
            let nextSibling = document.elementFromPoint(e.clientX, e.clientY)
            sortList.insertBefore(dragginItem, nextSibling);
        }

        sortList.addEventListener("dragover", initSortableList);
    }
}
</script>

<style scoped>
.modal.show
{
    display: block;
}

.modal-footer
{
    justify-content: space-between;
}

.item
{
    margin: 1rem;
    border: 1px solid #a8a8a8;
    border-radius: 5px;
    padding: 1rem;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.fa-grip-vertical
{
    color: #a8a8a8;
    margin-right: .5rem;
}

.details
{
    display: flex;
    align-items: center;
}

.details>img
{
    width: 125px;
    margin: 0 .5rem;
}

.btn-delete-img
{
    height: 40px;
}

.item.dragging
{
    opacity: .1;
}
</style>
