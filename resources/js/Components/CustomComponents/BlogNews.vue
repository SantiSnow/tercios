<script >
export default {
    name: "BlogNews",
    props: {
        posts: Array,
    }
}
</script>

<template>
    <div class="container my-12 px-4">
        <div class="row gap-8 justify-content-center">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-4 post-card"
                 v-for="(post, index) in posts"
                 :key="index"
            >
                <inertia-link :href="'/post/'+post.id">
                    <img :src="'/storage/posts/'+post.image" alt="Noticia Imagen" class="w-img-100" />
                </inertia-link>
                <div class="card-body px-4">
                    <inertia-link class="post-title" :href="'/post/'+post.id">
                        <h3 class="mt-2 text-xl font-semibold post-title">{{ post.title }}</h3>
                    </inertia-link>
                    <p class="text-sm">
                        {{post.preview.slice(0, 120)+'...'}}
                    </p>
                    <inertia-link :href="'/post/'+post.id" class="btn btn-danger btn-sm d-flex justify-center">Leer más</inertia-link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.post-title
{
    text-decoration: none;
    color: #1a202c;
}
</style>
