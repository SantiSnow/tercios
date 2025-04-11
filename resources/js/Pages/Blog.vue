<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";

export default {
    name: "Blog",
    components: {Banner, PageLayout},
    props: {
        posts: Array,
        post: Object,
    }
}
</script>


<template>
    <PageLayout>
        <div class="">
            <div class="jumbotron blog-jumbotron">
                <div class="container justify-center align-center title-sec-container">
                    <h3 class="title-section uppercase text-center text-white">Mantenete al tanto </h3>
                    <p class="uppercase text-center dms-sans-reg text-white">con las últimas novedades de RedFox</p>
                </div>
            </div>
        </div>

        <div class="container my-12">
            <div class="row row-destacada">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 pr-0 mx-0">
                    <div class="d-flex flex-col pt-8 px-8">
                        <h6>Destacado</h6>
                        <inertia-link class="post-title" :href="'/post/'+post.id">
                            <h3>{{ post.title }}</h3>
                        </inertia-link>
                        <p>
                            {{post.preview.slice(0, 120)+'...'}}
                        </p>
                        <inertia-link :href="'/post/'+post.id" class="btn btn-danger d-flex justify-center outstanding-readmore">Leer más</inertia-link>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0 mx-0">
                    <inertia-link :href="'/post/'+post.id">
                        <img :src="'/storage/posts/'+post.image" alt="Noticia Imagen" class="w-img-100" />
                    </inertia-link>
                </div>
            </div>
        </div>

        <div class="container my-12 px-4">
            <div class="row gap-8">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-4 post-card" v-for="(post, index) in posts">
                    <inertia-link :href="'/post/'+post.id">
                        <img :src="'/storage/posts/'+post.image" alt="Noticia Imagen" class="w-img-100" />
                    </inertia-link>
                    <div class="card-body px-4">
                        <inertia-link class="post-title" :href="'/post/'+post.id">
                            <h3 class="mt-2 text-xl font-semibold">{{ post.title }}</h3>
                        </inertia-link>
                        <p class="text-sm">
                            {{post.preview.slice(0, 120)+'...'}}
                        </p>
                        <inertia-link :href="'/post/'+post.id" class="btn btn-danger btn-sm d-flex justify-center">Leer más</inertia-link>
                    </div>
                </div>
            </div>
        </div>

    </PageLayout>
</template>


<style scoped>

.blog-jumbotron
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/blog-bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pr-0
{
    padding-right: 0;
}

.post-card
{
    border-radius: 15px;
    overflow: hidden;
    padding-left: 0;
    padding-right: 0;
    box-shadow: 2px 2px 10px rgba(0,0,0,.1);
    transition: transform .8s;
}

@media screen and (min-width: 768px) {
    .post-card
    {
        max-width: 30%;
    }
}

.post-card:hover
{
    transform: scale(1.05);
}

.row-destacada
{
    box-shadow: 2px 2px 10px rgba(0,0,0,.1);
    border-radius: 15px;
    overflow: hidden;
}

a.post-title
{
    text-decoration: none;
    color: #1a202c;
}

.btn-danger
{
    width: 25%;
    background-color: #DB5447;
    text-transform: uppercase;
    margin-bottom: 25px;
}

.btn-danger.btn-sm
{
    width: 50%;
    background-color: #DB5447;
    text-transform: uppercase;
    margin-bottom: 25px;
}

@media screen and (max-width: 576px) {
    .row-destacada
    {
        margin: 0 0.5rem;
    }
    .outstanding-readmore
    {
        width: 50%;
    }
}
</style>
