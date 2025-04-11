<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import {router, usePage} from "@inertiajs/vue3";
import {reactive} from "vue";

let form = reactive({
    id: usePage().props.post.id,
    title: usePage().props.post.title,
    image: null,
    preview: usePage().props.post.preview,
    seo_title: usePage().props.post.seo_title,
    seo_description: usePage().props.post.seo_meta_description,
    seo_tags: usePage().props.post.seo_meta_tags,
    outstanding: usePage().props.post.outstanding,
    body: null,
});

let submit = () =>{
    form.body = document.querySelector(".ql-editor").innerHTML;
    router.post('/posts_save', form)
}


</script>

<style>

</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edición de posteo
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form enctype="multipart/form-data" @submit.prevent="submit">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" v-model="form.title"
                           name="title" id="title"
                           placeholder="Título del post" required />
                    <br />

                    <label for="image">Imagen (Si no sube una, se mantendrá la actual)</label>
                    <input type="file" class="form-control"
                           name="image" id="image"
                           @input="form.image = $event.target.files[0]"/>
                    <br />

                    <label for="preview">Preview</label>
                    <input type="text" class="form-control" v-model="form.preview"
                           name="preview" id="preview"
                           placeholder="Preview del post" required />
                    <br />

                    <label for="seo_title">Título SEO</label>
                    <input type="text" class="form-control" v-model="form.seo_title"
                           name="seo_title" id="seo_title"
                           placeholder="Título SEO del post" required />
                    <br />

                    <label for="seo_meta_description">Descripción SEO</label>
                    <input type="text" class="form-control" v-model="form.seo_description"
                           name="seo_meta_description" id="seo_meta_description"
                           placeholder="Descripción SEO del post" required />
                    <br />

                    <label for="seo_meta_tags">SEO Tags</label>
                    <input type="text" class="form-control"  v-model="form.seo_tags"
                           name="seo_meta_tags" id="seo_meta_tags"
                           placeholder="Tags SEO del post" required />
                    <br />

                    <label for="outstanding">Destacada</label>
                    <select class="form-control"  v-model="form.outstanding"
                            id="outstanding" name="outstanding" required>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    <br />

                    <QuillEditor
                        theme="snow"
                        @ready="onEditorReady($event)" />
                    <br />

                    <button class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
    name: "AdminContacts",
    props: {
        post: Object,
    },
    components: {
        QuillEditor
    },
    methods: {
        onEditorReady (e) {
            e.container.querySelector('.ql-blank').innerHTML = this.post.content
        },
    }
}
</script>
