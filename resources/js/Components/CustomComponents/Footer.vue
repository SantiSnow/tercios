<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <footer class="footer pt-16">
        <div class="container">
            <div class="row pb-16 footer-row-sm-center">
                <div class="col-12 col-sm-12 col-md-2">
                </div>

                <div class="col-12 col-sm-12 col-md-3 justify-content-center">
                    <h3 class="dms-sans-reg footer-title">REDFOX</h3>
                    <ul class="dms-sans-reg">
                        <li class="list-footer mt-2">
                            <Link href="/blog">Blog y novedades</Link>
                        </li>
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/staff">Nuestro equipo</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/staff#contacto">Sumate a nuestro Staff</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/tu-red">Adherite a RedFox</Link>-->
<!--                        </li>-->
                        <li class="list-footer mt-2">
                            <Link href="/contacto">Contactanos</Link>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-3">
                    <h3 class="dms-sans-reg footer-title">SERVICIOS INMOBILIARIOS</h3>
                    <ul class="dms-sans-reg">
                        <li class="list-footer mt-2">
                            <Link href="/desarrollos">Desarrollos inmobiliarios</Link>
                        </li>
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/vender">Vendé tu propiedad</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/tasar">Tasá tu propiedad</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/desarrollos">Desarrollos inmobiliarios</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/contacto">Recibí asesoramiento</Link>-->
<!--                        </li>-->
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-3">
                    <h3 class="dms-sans-reg footer-title">NOSOTROS</h3>
                    <ul class="dms-sans-reg">
                        <li class="list-footer mt-2">
                            <Link href="/staff">Sobre Nosotros</Link>
                        </li>
                        <li class="list-footer mt-2">
                            <Link href="/desarrollos">Contactanos</Link>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-2">
                </div>

<!--                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--                    <h3 class="dms-sans-reg footer-title">REDFOX</h3>-->
<!--                    <ul class="dms-sans-reg">-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/staff">Nuestro equipo</Link>-->
<!--                        </li>-->
<!--                        <li class="list-footer mt-2">-->
<!--                            <Link href="/contacto">Contactanos</Link>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <div class="row b-top-redfox" id="social-container">
                <span class="flex justify-center" id="social-footer">
                    <a href="https://www.instagram.com/redfoxargentina/?hl=es" class="rrss-link" target='_blank'>
                        <font-awesome-icon icon="fa-brands fa-instagram" class="icons-footer" />
                    </a>
<!--                    <a href="https://www.facebook.com/redfoxargentina" class="rrss-link" target='_blank'>-->
<!--                        <font-awesome-icon icon="fa-brands fa-facebook" class="icons-footer" />-->
<!--                    </a>-->
<!--                    <a href="/" class="rrss-link">-->
<!--                        <font-awesome-icon icon="fa-brands fa-youtube" class="icons-footer"/>-->
<!--                    </a>-->
                    <a href="https://www.linkedin.com/company/red-fox-argentina/?viewAsMember=true" class="rrss-link" target='_blank'>
                        <font-awesome-icon icon="fa-brands fa-linkedin" class="icons-footer" />
                    </a>
                </span>
            </div>
            <div class="row pt-12">
                <img src="/images/tercios-logo.png" alt="RedFox Logo" class="footer-logo mb-2" />
                <p class="dms-sans-reg text-center text-sm">
                    Copyright &copy; {{ new Date().getFullYear() }} Tercios
                </p>
                <p class="text-center text-xs dms-sans-reg">
                    Corredor inmobiliario responsable: Dr. Augusto José Müller <span class="redfox-red">-</span> Matrículas: CUCICBA 7910
                    <span class="redfox-red">/</span> CMCPSI 6735 <span class="redfox-red">/</span>
                    CCPIM 171 <span class="redfox-red">/</span> COCIR 2297 <span class="redfox-red">/</span>
                    T° 100 F° 574 CPACF
                </p>
<!--                <p class="text-center text-xs dms-sans-reg">-->
<!--                    Abogado responsable: Dr. Pablo José Stachon <span class="redfox-red">-</span> Matrículas: T° 102 F° 63 CPACF-->
<!--                    <span class="redfox-red">/</span> T° XLII F° 306 CASI <span class="redfox-red">/</span>-->
<!--                    T° X F° 246 – Acta 3146 CAM-->
<!--                </p>-->
                <!--p class="text-center text-xs dms-sans-reg">
                    <strong>RedFox</strong> Argentina es una empresa que brinda asesoramiento y acompañamiento multidisciplinario,
                    jurídico, inmobiliario, contable y de desarrollos inmobiliarios.
                </p-->
                <!--p class="text-center text-sm">
                    Abogado responsable: Dr. Pablo José Stachon <span class="redfox-red">-</span> Matrículas: T° 102 F° 63 CPACF
                    <span class="redfox-red">/</span> T° XLII F° 306 CASI <span class="redfox-red">/</span>
                    T° X F° 246 – Acta 3146 CAM
                </p-->
                <!--p class="text-center text-xs">
                    RedFox Argentina es una empresa  que ofrece
                    igualdad de oportunidades y se rige por los manuales de ética
                    de los colegios de abogados, de corredores inmobiliarios y de
                    ciencias económicas.
                </p-->
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
    .footer
    {
        background-color: #10262b;
        color: #ffffff;
    }
    .footer-title
    {
        color: #DB5447;
        font-size: .9rem;
    }
    ul
    {
        padding-left: 0;
    }
    li.list-footer
    {
        font-size: .85rem;
    }
    li.list-footer>a,
    li.list-footer>a:hover
    {
        font-size: .85rem;
        color: #ffffff;
        text-decoration: none;
    }

    .footer-logo
    {
        width: 150px;
        margin: auto;
    }
    .redfox-red
    {
        color: #DB5447;
    }

    #social-container{
        box-sizing: border-box;
        overflow: hidden;
    }

    .icons-footer{
        font-size: 1.6rem;
        margin-right: .75rem;
        margin-left: .75rem;
    }

    #social-footer
    {
        display: inline-block;
        position: relative;
        text-align: center;
    }

    .rrss-link{
        text-decoration: none;
        color: #fff;
    }

    #social-footer::before
    {
        content: "";
        position: absolute;
        top: 50%;
        left: -1em;
        display: block;
        width: 100%;
        height: 2px;
        background-color: #DB5447;
        transform: translate(-60%, 0);
    }

    #social-footer::after
    {
        content: "";
        position: absolute;
        top: 50%;
        left: -1em;
        display: block;
        width: 100%;
        height: 2px;
        background-color: #DB5447;
        transform: translate(65%, 0);
    }

    @media screen and (max-width: 576px) {
        #social-footer::before,
        #social-footer::after
        {
            display: none;
        }

        .footer-row-sm-center>div>h3,
        .footer-row-sm-center>div>ul
        {
            text-align: center;
        }
    }
</style>
