<script>
import { Head } from '@inertiajs/vue3'
import PageLayout from "@/Layouts/PageLayout.vue";
import moment from "moment";
import PostBanner from "@/Components/CustomComponents/PostBanner.vue";

export default {
    name: "Post",
    computed: {
        moment() {
            return moment
        }
    },
    components: {PostBanner, PageLayout},
    props: {
        post: Object,
        social_title: String,
        social_preview: String
    }
}
</script>


<template>
    <Head>
        <title>{{ post.seo_title }}</title>
        <meta head-key="description" name="description" :content="post.seo_description" />
        <meta head-key="tags" name="tags" :content="post.seo_tags" />

        <meta property='og:title' :content="post.title" />
        <meta property='og:image' :content="'/storage/posts/'+post.image" />
        <meta property='og:description' :content="post.preview" />
        <meta property='og:url' :content="'https://www.redfoxargentina.com.ar/post/'+post.id" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="RedFoxArgentina" />
        <meta property="og:url" content="https://www.redfoxargentina.com.ar/" />
        <meta property="og:title" :content="post.title" />
        <meta property="og:image" :content="'/storage/posts/'+post.image" />
    </Head>
    <PageLayout>
        <PostBanner
            :title="post.title"
            :date="moment(post.created_at).format('D/M/Y')"
            background="blog-banner"
        />

        <div class="container my-2 px-6">
            <h5 class="text-white">{{ moment(post.created_at).format('D/M/Y') }}</h5>
        </div>

        <div class="container my-12 px-6">
            <div class="row post-image-row">
                <img :src="'/storage/posts/'+post.image" alt="Noticia Imagen" id="image-post-main" class="w-img-50" />
            </div>
        </div>

        <div class="container my-2 px-6">
            <h2 class="text-4xl"><em>{{ post.title }}</em></h2>
        </div>

        <div class="container mt-4 px-6">
            <a :href="'https://twitter.com/intent/tweet?text='+social_title+'&url=https://www.redfoxargentina.com.ar/post/'+post.id" target="_blank">
                <font-awesome-icon icon="fa-brands fa-twitter" class="share-post-icon" />
            </a>
            <a :href="'http://www.linkedin.com/shareArticle?mini=true&url=https://www.redfoxargentina.com.ar/post/'+post.id+'&title='+social_title+'&summary='+social_preview+'&source=redfoxargentina.com'" target="_blank">
                <font-awesome-icon icon="fa-brands fa-linkedin" class="share-post-icon" />
            </a>
            <a :href="'https://www.facebook.com/sharer/sharer.php?u=https://www.redfoxargentina.com.ar/post/'+post.id" target="_blank">
                <font-awesome-icon icon="fa-brands fa-facebook" class="share-post-icon" />
            </a>
        </div>

        <div class="container mb-12 px-6">
            <div class="row py-6" v-html="post.content">
            </div>
        </div>

        <div class="container my-12">
            <div class="row p-6">
                <inertia-link href="/blog" class="btn btn-danger btn-sm">Volver</inertia-link>
            </div>
        </div>

    </PageLayout>
</template>


<style scoped>
.w-img-50
{
    width: 25rem;
}
.btn-danger
{
    width: 150px;
}
.link-standar
{
    text-decoration: none;
    color: #1a202c;
}
.link-standar
{
    text-decoration: none;
    color: #646569;
}

#image-post-main
{
    margin-top: -200px;
}

.share-post-icon
{
    color: #D84E44;
    font-size: 1.25rem;
    margin-right: .75rem;
}
</style>
