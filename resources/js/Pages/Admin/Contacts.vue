<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import moment from "moment";
</script>

<style>
    td
    {
        border-top: 1px solid #bfbfbf;
        padding: 1rem 2rem;
    }
</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contactos
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
                            <th>Mensaje</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(contact, index) in contacts.data">
                            <td>{{ contact.id }}</td>
                            <td>{{ contact.name }}</td>
                            <td>{{ contact.email }}</td>
                            <td>{{ contact.phone }}</td>
                            <td>{{ contact.message }}</td>
                            <td>{{ moment(contact.created_at).format("Y/M/D") }}</td>
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
        contacts: Object,
    }
}
</script>
