<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {router} from "@inertiajs/vue3";
import moment from "moment";


let submitDelete = (id) =>{
    router.delete('/tasation_delete/'+id);
}

</script>

<style>
    td
    {
        border-top: 1px solid #bfbfbf;
        padding: 1rem;
    }
</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Peticiones de tasación
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Ciudad/Localidad</th>
                            <th>Provincia</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-content-row" v-for="(tasation, index) in tasations.data">
                            <td>{{ tasation.id }}</td>
                            <td>{{ tasation.name }}</td>
                            <td>{{ tasation.email }}</td>
                            <td>{{ tasation.phone }}</td>
                            <td>{{ tasation.address }}</td>
                            <td>{{ tasation.city }}</td>
                            <td>{{ tasation.estate.name }}</td>
                            <td>{{ tasation.message }}</td>
                            <td>{{ moment(tasation.created_at).format("Y/M/D") }}</td>
                            <td>
                                <form @submit.prevent="submitDelete(tasation.id)" class="form-delete">
                                    <button class="btn btn-danger">
                                        <font-awesome-icon icon="fa-solid fa-trash" class="fa-solid" />
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    name: "AdminContacts",
    props: {
        tasations: Object,
    }
}
</script>
