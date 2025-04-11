<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router, Link } from "@inertiajs/vue3";
import Pagination from "@/Components/CustomComponents/Pagination.vue";

let submitDelete = (id) =>{
    router.delete('/delete-member/'+id);
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
                Miembros del Staff
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                        </div>
                        <div class="col-6">
                            <Link class="btn btn-primary" href="/order-members">
                                Ordenar
                            </Link>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <table class="table-auto">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Título</th>
                                    <th>Editar</th>
                                    <th>Borrar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(member, index) in members.data">
                                    <td style="width: 25px">{{ member.id }}</td>
                                    <td style="max-width: 100px">
                                        <div class="member-img" :style="'background-image: url(/storage'+member.image+')'"></div>
                                    </td>
                                    <td>{{ member.name }}</td>
                                    <td>
                                        <Link :href="'/edit-member/'+member.id" class="btn btn-warning">
                                            <font-awesome-icon icon="fa-solid fa-pencil" class="fa-solid" />
                                            Editar
                                        </Link>
                                    </td>
                                    <td>
                                        <form @submit.prevent="submitDelete(member.id)" class="form-delete">
                                            <button class="btn btn-danger">
                                                <font-awesome-icon icon="fa-solid fa-trash" class="fa-solid" />
                                                Borrar
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <h4>Crear nuevo</h4>

                            <form @submit.prevent="submit" enctype="multipart/form-data">
                                <label>Nombre del miembro del staff:</label>
                                <input placeholder="Nombre..." v-model="form.name"
                                       class="form-control" id="name"
                                       name="name" required />
                                <div  class="errors" v-if="$page.props.errors.name">{{ $page.props.errors.name }}</div>
                                <br />

                                <input placeholder="Posición / cargo..." v-model="form.position"
                                       class="form-control" id="position"
                                       name="position" />
                                <br />

                                <input placeholder="Email..." v-model="form.email"
                                       class="form-control" id="email"
                                       name="email" />
                                <div class="errors" v-if="$page.props.errors.email">{{ $page.props.errors.email }}</div>
                                <br />

                                <input placeholder="Linkedin URL..." v-model="form.linkedin_url"
                                       class="form-control" id="linkedin_url"
                                       name="linkedin_url" />
                                <br />

                                <input placeholder="Instagram URL..." v-model="form.ig_url"
                                       class="form-control" id="ig_url"
                                       name="ig_url" />
                                <br />

                                <input placeholder="Meta URL..." v-model="form.meta_url"
                                       class="form-control" id="meta_url"
                                       name="meta_url" />
                                <br />

                                <input placeholder="Teléfono" v-model="form.phone"
                                       class="form-control" id="phone"
                                       name="phone" />
                                <br />

                                <label>Imagen:</label>
                                <input type="file" class="form-control"
                                       @input="form.image = $event.target.files[0]"
                                       name="image" id="image" required />
                                <br />

                                <button class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <Pagination :links="members.links" />
        </div>
    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "MembersContacts",
    props: {
        members: Object,
    },
    data(){
        return {
            form: {
                name: null,
                image: null,
                position: null,
                email: null,
                linkedin_url: null,
                ig_url: null,
                meta_url: null,
                phone: null,
            }
        };
    },
    methods: {
        submit() {
            router.post('/create-member', this.form);
        }
    }
}
</script>

<style scoped>
.member-img
{
    width: 50px;
    height: 50px;
    background-size: cover;
    background-position: top;
    transition: all ease 1s;
}
.member-img:hover
{
    width: 150px;
    height: 150px;
}
.errors
{
    font-weight: 600;
    color: #8B251E;
}
</style>
