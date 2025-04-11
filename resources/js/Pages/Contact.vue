<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import ContactBanner from "@/Components/CustomComponents/Contact/ContactBanner.vue";
import ContactForm from "@/Components/CustomComponents/Contact/ContactForm.vue";
import ContactCarousel from "@/Components/CustomComponents/Contact/ContactCarousel.vue";
import ContactUs from "@/Components/CustomComponents/Contact/ContactUs.vue";

export default {
    name: "Contact",
    components: {ContactUs, ContactCarousel, ContactForm, ContactBanner, PageLayout}
}
</script>


<template>
    <PageLayout>
        <div class="jumbotron contact-banner">
            <div class="container d-flex justify-center align-center">

            </div>
        </div>

        <div class="contact-container">
            <div class="container">
                <div class="row">
                    <h2 class="uppercase text-center my-12 redfox-red">Recibi nuestro asesoramiento.</h2>
                </div>
                <div class="row sm-reverse-rows">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-24 pt-12">
                        <ContactCarousel />
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-24 pt-12">
                        <ContactUs />
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>


<style scoped>
.contact-banner
{
    background-image: url('/images/contacto/portada-contactanos.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 55vh;
    padding: 3rem 0;
}
.contact-container
{
    background-color: #F3F5F5;
}
.my-12
{
    margin-top: 3rem;
    margin-bottom: 3rem;
}

@media screen and (max-width: 576px) {
    .sm-reverse-rows
    {
        flex-direction: column-reverse;
    }
}
</style>
