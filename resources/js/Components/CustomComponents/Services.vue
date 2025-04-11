<template>
    <section class="bg-color-lightblue pt-24 pb-12">
        <div class="container pb-12">
            <div class="row d-flex justify-center">
                <div class="col-12 col-sm-12 col-md-3">
                    <CustomCard
                        title="alquilá"
                        subTitle="tu propiedad"
                        cardText="Te presentamos todas las <br />oportunidades del mercado con un asesoramiento integral. "
                        bgColor="bg-deepRed"
                        ctaText="Contactanos"
                        ctaHref="/contacto"
                        class="mb-4 card-component transition-5s non-visible"
                        id="first-card"
                    />
                </div>

                <div class="col-12 col-sm-12 col-md-3">
                    <CustomCard
                        title="vendé"
                        subTitle="tu propiedad"
                        cardText="En la red tenemos profesionales especializados para acompañarte en esta aventura."
                        bgColor="bg-deepBlue"
                        ctaText="Contactanos"
                        ctaHref="/contacto"
                        class="mb-4 card-component transition-10s non-visible"
                        id="second-card"
                    />
                </div>

                <div class="col-12 col-sm-12 col-md-3">
                    <CustomCard
                        title="tasá"
                        subTitle="tu propiedad"
                        cardText="Conocé el valor real de tu propiedad. Te brindamos asesoramiento multidisciplinario."
                        bgColor="bg-lightRed"
                        ctaText="Contactanos"
                        ctaHref="/contacto"
                        class="mb-4 card-component transition-15s non-visible"
                        id="third-card"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import CustomCard from "@/Components/CustomComponents/CustomCard.vue";

export default {
    name: "Services",
    components: {CustomCard},
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
        cardEffects()
        {

            const firstCard = document.getElementById("first-card");
            const secondCard = document.getElementById("second-card");
            const thirdCard = document.getElementById("third-card");

            if(this.elementInViewport(firstCard))
            {
                firstCard.classList.remove('non-visible');
                secondCard.classList.remove('non-visible');
                thirdCard.classList.remove('non-visible');
            }
        }
    },
    created: function() {
        window.addEventListener('scroll', this.cardEffects);
    },
    destroyed: function() {
        window.removeEventListener('scroll', this.cardEffects);
    }
}
</script>

<style scoped>

.transition-5s
{
    transition: all ease-in .5s;
}

.transition-10s
{
    transition: all ease-in 1s;
}

.transition-15s
{
    transition: all ease-in 1.5s;
}

.card-component
{
    border-radius: 2px;
    opacity: 1;
    transform: translateX(0);
}

.card-component.non-visible
{
    opacity: 0;
    transform: translateX(-10rem);
}

#first-card,#second-card,#third-card
{
    padding: 1rem;
}
</style>
