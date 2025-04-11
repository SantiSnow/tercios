<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, router} from "@inertiajs/vue3";


let submitDelete = (id) =>{
    router.delete('/posts_delete/'+id);
}

</script>

<style>
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
                Blog Posts
            </h2>
            <Link class="btn btn-success" href="/posts_create">Crear post</Link>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Destacado</th>
                            <th>Preview</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(post, index) in posts.data">
                            <td style="width: 25px">{{ post.id }}</td>
                            <td style="max-width: 100px">
                                <img :src="'/storage/posts/'+post.image" alt="" class="">
                            </td>
                            <td>{{ post.title }}</td>
                            <td>{{ (post.outstanding) ? "Si" : "No" }}</td>
                            <td>
                                {{post.preview.slice(0, 50)+'...'}}
                            </td>
                            <td>
                                <Link class="btn btn-success mr-1" :href="'/posts_edit/'+post.id">
                                    <font-awesome-icon icon="fa-solid fa-pencil" class="fa-solid" />
                                    Editar
                                </Link>
                                <form @submit.prevent="submitDelete(post.id)" class="form-delete">
                                    <button class="btn btn-danger">
                                        <font-awesome-icon icon="fa-solid fa-trash" class="fa-solid" />
                                        Borrar
                                    </button>
                                </form>
                                <Link class="btn btn-warning mx-auto white" target="_blank" :href="'/post/'+post.id">
                                    <font-awesome-icon icon="fa-solid fa-eye" class="fa-solid" />
                                    Ver
                                </Link>
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
        posts: Object,
    },

}
</script>
