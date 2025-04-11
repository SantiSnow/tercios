<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-color-lightblue">
        <div class="container py-12">
            <div class="row d-flex justify-center">
                <div class="col-12 col-sm-12 col-md-3 card" id="services-one">
                    <img src="/images/home/icons/juridicos-icon.png" class="service-icons" alt="" />
                    <h4 class="card-title">SERVICIOS <br />JURÍDICOS</h4>

                    <p class="mt-4 dms-sans-reg">
                        Nuestra red de profesionales brinda a
                        clientes un estratégico asesoramiento en
                        todas las áreas del derecho, siempre con
                        una mirada multidisciplinaria.
                    </p>

                    <Link href="/juridico" class="btn btn-danger mt-8 btn-height-standard dms-sans-reg">
                        RECIBÍ ASESORAMIENTO
                    </Link>
                </div>

                <div class="col-12 col-sm-12 col-md-3 card" id="services-two">
                    <img src="/images/home/icons/inmobiliarios-icon.png" class="service-icons" alt="" />
                    <h4 class="card-title">SERVICIOS <br />INMOBILIARIOS</h4>

                    <p class="mt-4 dms-sans-reg">
                        Desde RedFox trabajamos en equipo para
                        poder llevarte una solución a medida. Te
                        acompañamos desde la excelencia,
                        eficacia, seguridad y profesionalismo.
                    </p>

                    <Link href="/inmobiliario" class="btn btn-danger btn-height-standard mt-8 dms-sans-reg">
                        RECIBÍ ASESORAMIENTO
                    </Link>
                </div>

                <div class="col-12 col-sm-12 col-md-3 card" id="services-three">
                    <img src="/images/home/icons/contables-icon.png" class="service-icons" alt="" />
                    <h4 class="card-title">SERVICIOS <br />CONTABLES</h4>

                    <p class="mt-4 dms-sans-reg">
                        Nuestro equipo de expertos ayudan
                        a las empresas a alcanzar sus metas
                        financieras y a mantener la conformidad
                        con las normas y regulaciones.
                    </p>

                    <Link href="/contable" class="btn btn-danger btn-height-standard mt-8 dms-sans-reg">
                        RECIBÍ ASESORAMIENTO
                    </Link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "CardServices",
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
    min-height: 490px;
    max-width: 300px;
    max-height: 500px;
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
