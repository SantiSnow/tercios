<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Pagination from "@/Components/CustomComponents/Pagination.vue";
</script>

<style>
    table.table-fixed
    {
        width: 100%;
    }
    td
    {
        border-top: 1px solid #bfbfbf;
        padding: 1rem 1rem 1rem 0;
    }
    .form-delete
    {
        display: inline;
    }
    .white
    {
        color: #ffffff;
    }
</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight d-inline mr-6">
                Propiedades en el sistema
            </h2>
            <Link class="btn btn-success" href="/property_create">Crear propiedad</Link>

        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row mx-auto sm:px-6 lg:px-8">
                    <p>Las propiedades destacadas se ven con fondo azul claro.</p>
                </div>
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Dirección</th>
                            <th>Localidad</th>
                            <th>Operación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(property, index) in properties.data" :style="(property.outstanding) ? 'background-color: rgb(224 231 255);' : ''">
                            <td style="width: 25px">{{ property.id }}</td>
                            <td style="max-width: 250px">
                                <img :src="'/storage/properties/'+property.images[0].file" alt="" class="" v-if="property.images[0]">
                                <img :src="'/storage/properties/no-image.png'" alt="" class="" v-else>
                            </td>
                            <td>{{ property.name }}</td>
                            <td>{{ property.address }}</td>
                            <td>{{ (property.city) ? property.city.name : "-" }}</td>
                            <td>{{ property.operation }}</td>

                            <td>
                                <Link class="btn btn-success mr-1" :href="'/property_edit/'+property.id">
                                    <font-awesome-icon icon="fa-solid fa-pencil" class="fa-solid" />
                                    Editar
                                </Link>
                                <form @submit.prevent="toggleModal(property.id)" class="form-delete">
                                    <button class="btn btn-danger">
                                        <font-awesome-icon icon="fa-solid fa-trash" class="fa-solid" />
                                        Borrar
                                    </button>
                                </form>
                                <Link class="btn btn-warning mx-auto white" target="_blank" :href="'/propiedad/'+property.id">
                                    <font-awesome-icon icon="fa-solid fa-eye" class="fa-solid" />
                                    Ver
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination :links="properties.links" />
            </div>

            <div :class="`modal fade ${modalOpen && 'show'}`" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar la propiedad:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p> ¿Está seguro que desea borrar esta propiedad? </p>
                            <p> Esta acción no puede deshacerse. </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="toggleModal(0)">Cancelar</button>
                            <button type="button" class="btn btn-danger" @click="submitDelete()">Borrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import {Link, router} from "@inertiajs/vue3";

export default {
    name: "Properties",
    props: {
        properties: Object,
    },
    data()
    {
        return {
            modalOpen: false,
            property_id: 0,
        }
    },
    methods: {
        submitDelete (){
            router.delete('/property_delete/'+this.property_id);
            this.modalOpen = !this.modalOpen;
        },
        toggleModal (id){
            this.property_id = id;
            this.modalOpen = !this.modalOpen;
        },
    }
}
</script>


<style scoped>

.modal.show{
    display: flex;
}

</style>
