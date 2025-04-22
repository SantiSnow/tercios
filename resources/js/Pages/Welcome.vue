<script setup>
import PageLayout from "@/Layouts/PageLayout.vue";
import HomeBanner from "@/Components/CustomComponents/HomeBanner.vue";
import CardServices from "@/Components/CustomComponents/CardServices.vue";
import MiddleBanner from "@/Components/CustomComponents/MiddleBanner.vue";
import ServicesHome from "@/Components/CustomComponents/ServicesHome.vue";
import BlogNews from "@/Components/CustomComponents/BlogNews.vue";
</script>

<template>
    <main id="app-main">
        <PageLayout>
            <HomeBanner />
            <CardServices />
            <ServicesHome />
            <MiddleBanner />
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
