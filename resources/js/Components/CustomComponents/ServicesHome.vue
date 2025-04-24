<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-color-lightblue">
        <div class="container py-12 mx-8">
            <div class="row flex sm-row-reverse justify-center align-center pb-12">
                <div class="col-12 col-sm-12 col-md-7 bg-side-picture-left">
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="card-custom overlap-card-right fadeInRight cardSider transition-10s" id="firstSlideSide">
                        <h4 class="redfox-red">DESARROLLOS INMOBILIARIOS</h4>
                        <p class="text-nine dms-sans-reg">
                            En <span class="redfox-red">Tercios</span> administramos y asesoramos a
                            inversores en desarrollos inmobiliarios para permitirles detectar
                            oportunidades de negocios en las diferentes situaciones macroeconómicas
                        </p>
                        <Link href="/desarrollos" class="btn btn-danger btn-height-standard danger-transition dms-sans-reg">Contactanos</Link>
                    </div>
                </div>
            </div>

            <div class="row sm-row-reverse justify-center align-center pb-12">
                <div class="col-12 col-sm-12 col-md-4 z-index-20">
                    <div class="card-custom fadeInLeft cardSider transition-10s" id="secondSlideSide">
                        <h4 class="redfox-red">ADHERÍ TU OFICINA A TERCIOS</h4>
                        <p class="text-nine dms-sans-reg">
                            Podés ser parte de <span class="redfox-red">Tercios</span>,
                            la red de profesionales que brinda servicios jurídicos y
                            contables. Podrás posicionarte en el mercado brindando un
                            asesoramiento integral.
                        </p>
                        <Link href="/tu-red" class="btn btn-danger btn-height-standard danger-transition dms-sans-reg">Contactanos</Link>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 bg-side-picture-right">
                </div>
            </div>

        </div>
    </section>
</template>

<script>
export default {
    name: "ServicesHome",
    methods: {
        elementInViewport(el) {
            var top = el.offsetTop;
            var left = el.offsetLeft;
            var width = el.offsetWidth;
            var height = el.offsetHeight;

            while(el.offsetParent) {
                el = el.offsetParent;
                top += el.offsetTop;
                left += el.offsetLeft;
            }

            return (
                top >= window.pageYOffset &&
                left >= window.pageXOffset &&
                (top + height) <= (window.pageYOffset + window.innerHeight) &&
                (left + width) <= (window.pageXOffset + window.innerWidth)
            );
        },
        textEffects()
        {
            const firstCard = document.getElementById("firstSlideSide");
            const secondCard = document.getElementById("secondSlideSide");

            if(this.elementInViewport(firstCard))
            {
                firstCard.classList.remove('fadeInRight');
            }
            if(this.elementInViewport(secondCard))
            {
                secondCard.classList.remove('fadeInLeft');
            }
        },
    },
    created: function() {
        window.addEventListener('scroll', this.textEffects);
    },
    destroyed: function() {
        window.removeEventListener('scroll', this.textEffects);
    }
}
</script>

<style scoped>
.align-center
{
    align-items: center;
}

.bg-side-picture-left
{
    background-image: url("/images/home/avenida-bs-as-side-picture.png");
    background-position: right;
    background-size: cover;
    background-repeat: no-repeat;
    height: 400px;
    margin-left: 20px;
}

.bg-side-picture-right
{
    background-image: url("/images/home/building-by-the-river.png");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 400px;
    margin-left: -100px;
    z-index: 1;
}

.card-custom
{
    background-color: #ffffff;
    padding: 2.5rem 1.5rem;
}

.overlap-card-right
{
    margin-left: -75px;
    z-index: 2;
}

.z-index-20
{
    z-index: 20;
}

.danger-transition
{
    border-radius: 2px;
    display: block;
    transition: all .5s ease-out;
}

@media screen and (max-width: 768px) {
    .sm-row-reverse
    {
        flex-direction: row-reverse;
    }
    .overlap-card-right
    {
        margin-left: 0;
    }
    .bg-side-picture-right
    {
        background-position: left;
        margin-left: 0;
    }
}

/* Effects */
.transition-10s
{
    transition: all ease-in 1s;
}

.cardSider
{
    opacity: 1;
    transform: translateX(0);
}

.fadeInRight{
    opacity: 0;
    transform: translateX(10rem);
}

.fadeInLeft
{
    opacity: 0;
    transform: translateX(-10rem);
}

</style>
