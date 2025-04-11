<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";
import SellForm from "@/Components/CustomComponents/Sell/SellForm.vue";

export default {
    name: "Contact",
    components: {SellForm, Banner, PageLayout},
    props: {
        estates: Array
    }
}
</script>


<template>
    <PageLayout>
        <Banner title="Conocé el valor de tu propiedad" background="sell-banner" />
        <SellForm :estates="estates" />
    </PageLayout>
</template>


<style scoped>

</style>
