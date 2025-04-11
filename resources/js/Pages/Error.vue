<script>
import PageLayout from "@/Layouts/PageLayout.vue";

export default {
    name: "Contact",
    components: {PageLayout}
}
</script>

<script setup>
import { computed } from 'vue';
import { Link } from "@inertiajs/vue3";

const props = defineProps({ status: Number })

const title = computed(() => {
    return {
        503: '503: Service Unavailable',
        500: '500: Server Error',
        404: '404: Page Not Found',
        403: '403: Forbidden',
    }[props.status]
})

const description = computed(() => {
    return {
        503: 'Sorry, we are doing some maintenance. Please check back soon.',
        500: 'Whoops, something went wrong on our servers.',
        404: 'Sorry, the page you are looking for could not be found.',
        403: 'Sorry, you are forbidden from accessing this page.',
    }[props.status]
})
</script>


<template>
    <PageLayout>

            <div class="container"  v-if="title === '404: Page Not Found'">
                <div class="row py-12">
                    <div class="col-12">
                        <h2 class="redhat-bold text-center mt-24">
                            404 | La página buscada no existe
                        </h2>
                    </div>
                </div>

                <div class="row py-12">
                    <div class="col-12 text-center">
                        <p>Ups, parece que la página no existe o hay un error en la URL.</p>
                    </div>
                </div>

                <div class="row py-12">
                    <div class="col-12 text-center">
                        <Link class="btn btn-danger" href="/">
                            Volver atras
                        </Link>
                    </div>
                </div>
            </div>

            <div class="container"  v-if="title === '500: Server Error'">
                <div class="row py-12">
                    <div class="col-12">
                        <h2 class="redhat-bold text-center mt-24">
                            500 | Parece que hay un error en el servidor
                        </h2>
                    </div>
                </div>

                <div class="row py-12">
                    <div class="col-12 text-center">
                        <p>Nos disculpamos, vuelva a intentarlo más tarde o contacte a soporte.</p>
                    </div>
                </div>

                <div class="row py-12">
                    <div class="col-12 text-center">
                        <Link class="btn btn-danger" href="/">
                            Volver atras
                        </Link>
                    </div>
                </div>
            </div>

            <div class="container"  v-if="title === '403: Forbidden'">
                <div class="row py-12">
                    <div class="col-12">
                        <h2 class="redhat-bold text-center mt-24">
                            403 | El recurso no esta disponible
                        </h2>
                    </div>
                </div>

                <div class="row py-12">
                    <div class="col-12 text-center">
                        <Link class="btn btn-danger" href="/">
                            Volver atras
                        </Link>
                    </div>
                </div>
            </div>
    </PageLayout>
</template>


<style scoped>
    .redhat-light
    {
        font-family: "RedHatLight";
    }
    .btn.btn-danger
    {
        background-color: #DB5447;
        border-radius: 0;
        padding: 1rem 2rem;
    }
</style>
