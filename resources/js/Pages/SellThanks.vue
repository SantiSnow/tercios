
<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <PageLayout>
        <ContactBanner />
        <div class="container my-20">
            <div class="row d-flex justify-center">
                <h2 class="text-center">GRACIAS POR ENVIARNOS TUS DATOS</h2>
            </div>
            <br />
            <div class="row d-flex justify-center">
                <p class="text-center mt-12">Pronto un asesor de ventas se pondrá en contacto para coordinar una visita.</p>
                <br />
                <Link href="/" class="btn btn-danger btn-sm">Volver</Link>
            </div>
        </div>

    </PageLayout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import ContactBanner from "@/Components/CustomComponents/Contact/ContactBanner.vue";
import ContactForm from "@/Components/CustomComponents/Contact/ContactForm.vue";

export default {
    name: "SellThanks",
    components: {ContactBanner, PageLayout}
}
</script>

<style scoped>
.btn-danger.btn-sm
{
    width: 150px;
    border: none;
    padding: .5rem 0;
    border-radius: 2px;
    background-color: #DB5447;
    text-transform: uppercase;
}
</style>
