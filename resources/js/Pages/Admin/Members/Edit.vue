<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router, Link } from "@inertiajs/vue3";
import Pagination from "@/Components/CustomComponents/Pagination.vue";


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
                Editar miembro del staff
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="row">
                        <div class="col-9">

                            <form @submit.prevent="submit" enctype="multipart/form-data">
                                <label>Nombre del miembro del staff:</label>
                                <input placeholder="Nombre..." v-model="form.name"
                                       class="form-control" id="name"
                                       name="name" required />
                                <br />

                                <input placeholder="Posición / cargo..." v-model="form.position"
                                       class="form-control" id="position"
                                       name="position" />
                                <br />

                                <input placeholder="Email..." v-model="form.email"
                                       class="form-control" id="email"
                                       name="email" />
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

                                <label>Imagen: (Si se deja en blanco no se actualizará)</label>
                                <input type="file" class="form-control"
                                       @input="form.image = $event.target.files[0]"
                                       name="image" id="image" />
                                <br />

                                <button class="btn btn-success">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "MembersContacts",
    props: {
        member: Object,
    },
    data(){
        return {
            form: {
                id: this.$props.member.id,
                name: this.$props.member.name,
                image: null,
                position: this.$props.member.position,
                email: this.$props.member.email,
                linkedin_url: this.$props.member.linkedin_url,
                ig_url: this.$props.member.ig_url,
                meta_url: this.$props.member.meta_url,
                phone: this.$props.member.phone,
            }
        };
    },
    methods: {
        submit() {
            router.post('/save-member', this.form);
        }
    }
}
</script>

<style>
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
</style>
