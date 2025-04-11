<template>

    <div class="jumbotron" :id="background">
        <div class="container d-flex justify-center align-center">
            <h3 class="display-4">{{ title }}</h3>
        </div>
    </div>

</template>

<script>
import Banner from "@/Components/CustomComponents/Banner.vue";

export default {
    name: "ContactBanner",
    components: {Banner}
}
</script>

<style scoped>

</style>
