<script setup>
import { Link } from "@inertiajs/vue3";
import StaffBanner from "@/Components/CustomComponents/StaffBanner.vue";
import Values from "@/Components/CustomComponents/Values.vue";
import ContactFormStaff from "@/Components/CustomComponents/Contact/ContactFormStaff.vue";

</script>

<template>
    <PageLayout>
        <StaffBanner />

        <!--div class="container my-20">
            <div class="row">
                <h3 class="text-center mb-16">NUESTRA HISTORIA</h3>
            </div>

            <div class="row">
                <img src="/images/staff/time-line.png" alt="Red Fox Historia" class="timeline-picture" />
            </div>
        </div-->

        <Values />

        <section class="bg-blue-deep">
            <div class="container py-16">
                <div class="row my-8">
                    <h3 class="text-white text-center blue-title-cont">
                        PODÉS SER UNO DE LOS MIEMBROS <br />
                        DE NUESTRA EXTENSA RED DE PROFESIONALES<br />
                        QUE BRINDAN SERVICIOS INMOBILIARIOS,<br />
                        JURÍDICOS Y CONTABLES.
                    </h3>
                </div>
                <div class="row d-flex justify-content-center">
                    <a href="#form-title-staff-section" class="btn btn-danger btn-height-standard mt-8 dms-sans-reg w-250px">
                        SUMATE A NUESTRO EQUIPO
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-16">
                <div class="row py-12">
                    <h4 class="letter-spacing-2 text-center my-2">
                        EQUIPO-REDFOX
                    </h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-10 col-md-3 h-[30rem]" v-for="(member, index) in members">
                        <img :src="'/storage'+member.image" alt="" class="member-img-picture" />
                        <h6 class="text-center staff-name dms-sans-reg">{{member.name}}</h6>
                        <p class="redfox-red text-center letter-spacing-3 m-0">
                            {{ member.position }}
                        </p>
                        <p class="text-center dms-sans-reg my-1">
                            {{ member.email }}
                        </p>
                        <p class="text-center dms-sans-reg">
                            {{ member.phone }}
                        </p>
                        <div class="d-flex justify-content-center">
                            <a target="_blank" :href="member.linkedin_url">
                                <font-awesome-icon icon="fa-brands fa-linkedin" class="icons-staff" />
                            </a>
                            <a target="_blank" :href="member.meta_url">
                                <font-awesome-icon icon="fa-brands fa-facebook" class="icons-staff" />
                            </a>
                            <a target="_blank" :href="member.ig_url">
                                <font-awesome-icon icon="fa-brands fa-instagram" class="icons-staff" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light-form py-20"  id="form-title-staff-section">
            <div class="container d-flex justify-center my-4">
                <div class="row">
                    <h4 class="redfox-red letter-spacing-2 my-2">
                        SUMATE A NUESTRO EQUIPO
                    </h4>
                </div>
            </div>
            <ContactFormStaff />
        </section>

    </PageLayout>
</template>

<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import Banner from "@/Components/CustomComponents/Banner.vue";

export default {
    name: "Staff",
    components: {
        Banner,
        PageLayout,
    },
    props: {
        members: Array,
    },
    methods: {
        getBackgroundImage(image)
        {
            return 'background-image: url("storage/members/'+image+'")';
        }
    },
    mounted() {
        let staffCards = document.getElementsByClassName("custom-card");

        for (let i = 0; i < staffCards.length; i++) {
            staffCards[i].addEventListener('mouseover', () =>{
                console.log("hovered over card n");

                staffCards[i].classList.add('card-hovered');
            });

            staffCards[i].addEventListener('mouseleave', () =>{
                console.log("hovered over card n");

                staffCards[i].classList.remove('card-hovered');
            });
        }
    }
}
</script>

<style scoped>
.btn.btn-dark
{
    padding: 1rem 2rem;
    border-radius: 0;
    font-weight: bold;
    letter-spacing: 1px;
}

.bg-light-form
{
    background-color: #F3F5F5;
}

.bg-blue-deep
{
    background-color: #10262B;
}

.blue-title-cont
{
    letter-spacing: 4px;
    font-size: 1.4rem;
    line-height: 2;
}

.w-250px
{
    width: 250px;
}

.letter-spacing-2
{
    letter-spacing: 2px;
}

.letter-spacing-3
{
    letter-spacing: 3px;
}

.custom-card
{
    padding: 1rem .8rem;
    transition: all ease 1s;
    overflow: hidden;
}

.member-img-picture
{
    width: 75%;
    margin: 1.5rem auto;
}

.staff-name
{
    font-size: 1.6rem;
}

.icons-staff
{
    margin: 0 .2rem;
    font-size: 1.2rem;
    color: #D84E44;
}

@media screen and (max-width: 768px) {
    #sideStaff>img
    {
        max-width: 50%;
        margin: auto;
    }
    #main-content-container
    {
        flex-direction: column-reverse;
    }
}

@media screen and (max-width: 576px) {
    .sm-flex-col-reverse
    {
        display: flex;
        flex-direction: column-reverse;
    }
    #sideStaff>img
    {
        max-width: 75%;
        margin: auto;
    }
}


@media screen and (min-width: 1024px) {
    .col-lg-20-prtg
    {
        width: 18%;
    }
    #sideStaff>img
    {
        max-width: 100%;
        margin: auto;
    }
}
</style>
