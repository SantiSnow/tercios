
<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <PageLayout>
        <ContactBanner />
        <div class="container my-20">
            <div class="row d-flex justify-center">
                <h2 class="text-center">GRACIAS POR TU CONTACTO</h2>
            </div>
            <br />
            <div class="row d-flex justify-center">
                <p class="text-center mt-12">Te responderemos lo antes posible.</p>
                <br />
                <p class="text-center mt-4">
                    Podés realizar otra consulta si lo deseas o contactarnos por whatsapp desde el botón inferior
                </p>
                <Link href="/contacto" class="btn btn-danger btn-sm">Volver</Link>
            </div>
        </div>

    </PageLayout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import ContactBanner from "@/Components/CustomComponents/Contact/ContactBanner.vue";
import ContactForm from "@/Components/CustomComponents/Contact/ContactForm.vue";

export default {
    name: "ContactThanks",
    components: {ContactForm, ContactBanner, PageLayout}
}
</script>

<style scoped>
.btn-danger.btn-sm
{
    width: 150px;
    border-radius: 2px;
    background-color: #DB5447;
    text-transform: uppercase;
}
</style>
