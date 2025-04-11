<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { QuillEditor } from '@vueup/vue-quill';
import {reactive} from "vue";
import { router } from '@inertiajs/vue3';

let form = {
    title: null,
    image: null,
    preview: null,
    seo_title: null,
    seo_description: null,
    seo_tags: null,
    outstanding: null,
    body: null,

};

let submit = () =>{
    form.body = document.querySelector(".ql-editor").innerHTML;
    router.post('/post_store', form)
}


</script>

<style>

</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Creación de posteo
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form class="col-9" @submit.prevent="submit" enctype="multipart/form-data">
                    <label for="title">Título</label>
                    <input type="text" class="form-control"
                           name="title" id="title" v-model="form.title"
                           placeholder="Título del post" required />
                    <div v-if="$page.props.errors.title" class="text-red-500 text-sm mt-1">
                        Por favor, complete su nombre
                    </div>
                    <br />

                    <label for="image">Imagen</label>
                    <input type="file" class="form-control"
                           required name="image" id="image"
                        @input="form.image = $event.target.files[0]" />
                    <br />

                    <label for="preview">Preview</label>
                    <input type="text" class="form-control"
                           name="preview" id="preview" v-model="form.preview"
                           placeholder="Preview del post" required />
                    <br />

                    <label for="seo_title">Título SEO</label>
                    <input type="text" class="form-control"
                           name="seo_title" id="seo_title" v-model="form.seo_title"
                           placeholder="Título SEO del post" required />
                    <br />

                    <label for="seo_description">Descripción SEO</label>
                    <input type="text" class="form-control"
                           name="seo_description" id="seo_description" v-model="form.seo_description"
                           placeholder="Descripción SEO del post" required />
                    <br />

                    <label for="seo_tags">SEO Tags</label>
                    <input type="text" class="form-control"
                           name="seo_tags" id="seo_tags" v-model="form.seo_tags"
                           placeholder="Tags SEO del post" required />
                    <br />

                    <label for="outstanding">Destacada</label>
                    <select class="form-control" v-model="form.outstanding"
                            id="outstanding" name="outstanding">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <br />

                    <QuillEditor theme="snow" />
                    <br />

                    <button class="btn btn-primary">Crear</button>
                </form>
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
    components: {
        QuillEditor
    }
}
</script>
