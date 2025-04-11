<template>
    <div class="container values-one">
        <h3 class="text-center redhat-light values">
            BRINDAMOS ASESORAMIENTO JURÍDICO, CONTABLE Y GERENCIAMIENTO EN NEGOCIOS DE BIENES RAÍCES
        </h3>

        <div class="bg-gray-50">
            <h3 class="text-center redhat-light mt-16 pt-12">
                NUESTROS VALORES
            </h3>
            <p class="text-center lg:px-40 pb-12">
                Creemos en fidelizar al cliente mediante un
                acompañamiento seguro y estratégico, lo logramos
                gracias a nuestro sistema de avanzada, multidisciplinario
                y de excelencia profesional.
            </p>
        </div>
    </div>
</template>

<script>
export default {
    name: "RealEstateValues"
}
</script>

<style scoped>
    .values
    {
        font-size: 1.5rem;
    }
    .values-one
    {
        color: rgba(0, 0, 0, 0.7);
        margin: 3rem auto;
    }
    h3.values
    {
        padding: 1rem 12rem;
    }
    .redhat-light
    {
        font-family: "RedHatLight";
    }
    @media screen and (max-width: 768px) {
        h3.values
        {
            padding: 1rem 1rem;
        }
    }
</style>
