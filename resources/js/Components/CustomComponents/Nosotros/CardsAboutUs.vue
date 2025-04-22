<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-color-lightblue">
        <div class="container py-12">
            <div class="row d-flex justify-center">
                <div class="col-12 col-sm-12 col-md-3 card" id="services-one">
                    <h4 class="card-title">Misión</h4>
                    <p class="mt-4 dms-sans-reg">
                        Acompañar a nuestros clientes en sus decisiones personales y de
                        inversión en bienes raíces y proteger sus derechos para alcanzar
                        sus objetivos de forma segura y eficiente.
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-3 card" id="services-two">
                    <h4 class="card-title">Visión</h4>

                    <p class="mt-4 dms-sans-reg">
                        Queremos ser referentes en el mercado nacional e
                        internacional, destacando por nuestra <strong>excelencia
                        profesional, innovación y compromiso</strong>.
                    </p>
                </div>

                <div class="col-12 col-sm-12 col-md-3 card" id="services-three">
                    <h4 class="card-title">Nuestros Valores</h4>

                    <p class="mt-4 dms-sans-reg">
                        - Construimos y cuidamos las relaciones humanas. <br />
                        - Nos capacitamos para ofrecer soluciones de calidad. <br />
                        - Actuamos con ética, responsabilidad y transparencia. <br />
                        - Cuidamos el desarrollo familiar, personal y profesional. <br />
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "CardsAboutUs",
    methods: {
    },
}
</script>

<style scoped>
.card
{
    background-color: #fff;
    border: none;
    border-radius: 0;
    margin: 1rem;
    padding: 3rem 1rem;
    min-width: 270px;
    min-height: 290px;
}
.service-icons
{
    width: 54px;
    margin: 1rem auto 2rem;
}
.card-title
{
    color: #D84E44;
    text-align: center;
}
.card>p
{
    font-size: .9rem;
    text-align: center;
    height: 8rem;
}

a.btn.btn-danger
{
    font-size: .9rem;
    padding: 0.6rem;
    border-radius: 2px;
    margin: 2rem 0.75rem 0;
}

.btn-danger
{
    display: block;
    border-radius: 2px;
    background: linear-gradient(to right, #ffffff 50%, #D84E44 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
}

.btn-danger:hover {
    background-position: left bottom;
    border: 1px solid;
    color: #D84E44;
}

</style>
