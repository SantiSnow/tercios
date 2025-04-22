<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import BlogNews from "@/Components/CustomComponents/BlogNews.vue";
import CardsAboutUs from "@/Components/CustomComponents/Nosotros/CardsAboutUs.vue";
import BannerAboutUs from "@/Components/CustomComponents/Nosotros/BannerAboutUs.vue";
</script>

<template>
    <main id="app-main">
        <PageLayout>
            <BannerAboutUs />
            <CardsAboutUs />
            <BlogNews :posts="posts" />
        </PageLayout>
    </main>
</template>

<script>
export default {
    props: {
        posts: Array,
    },
    data()
    {
        return {

        }
    },
    mounted() {
    }
}
</script>

<style>

</style>
