<script>

import Navbar from "@/Components/CustomComponents/Navbar.vue";
import Footer from "@/Components/CustomComponents/Footer.vue";

export default {
    components: {Footer, Navbar},
    methods: {

    }
}

</script>


<template>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google tag (gtag.js) -->
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=454472519963925&ev=PageView&noscript=1"
        /></noscript>
    </head>
    <body>
        <Navbar />

        <slot />

        <Footer />

        <a
            target="_blank" :class="'whatsapp-fixed'"
            href="https://api.whatsapp.com/send/?phone=5491165800216&text=Hola%2C+necesito+asesoramiento.+Mi+nombre+es&type=phone_number&app_absent=0">
            <font-awesome-icon icon="fa-brands fa-whatsapp" />
        </a>
    </body>
</template>


<style>
    @font-face {
        font-family: "DMSansRegular";
        src: url("/fonts/DMSans-Regular.ttf");
    }

    @font-face {
        font-family: "RedHatLight";
        src: url("/fonts/RedHatDisplay-Light.ttf");
    }

    @font-face {
        font-family: "DMSansLight";
        src: url("/fonts/DMSans-Light.ttf");
    }

    @font-face {
        font-family: "DMSansRegular";
        src: url("/fonts/DMSans-Regular.ttf");
    }

    @font-face {
        font-family: "DMSansSemibold";
        src: url("/fonts/DMSans-SemiBold.ttf");
    }

    @font-face {
        font-family: "DMSansBold";
        src: url("/fonts/DMSans-Bold.ttf");
    }

    .redhat-light
    {
        font-family: "RedHatLight";
    }

    .dms-sans-light
    {
        font-family: "DMSansLight";
    }

    .dms-sans-reg
    {
        font-family: "DMSansRegular";
    }

    .dms-sans-smbold
    {
        font-family: "DMSansSemibold";
    }

    .dms-sans-bold
    {
        font-family: "DMSansBold";
    }

    .redfox-red
    {
        color: #D84E44;
    }

    .bg-color-lightblue
    {
        background-color: #F3F5F5;
    }

    .align-center
    {
        align-items: center;
    }

    .text-nine
    {
        font-size: .9rem;
    }

    button.btn.btn-danger,
    a.btn.btn-danger
    {
        border-radius: 0;
        background-color: #D84E44;
        border: none;
        text-transform: uppercase;
        font-family: 'DMSansRegular';
    }
    button.btn.btn-light,
    a.btn.btn-light
    {
        color: #D84E44;
        border-radius: 0;
        background-color: #ffffff;
        border: none;
    }

    .btn-height-standard
    {
        height: 40px;
    }

    .max-w-container
    {
        max-width: 1140px;
    }

    .navbar-toggler
    {
        border: 0;
    }

    a.btn.btn-danger
    {
        padding: 0.5rem;
        border-radius: 2px;
    }

</style>
<style scoped>
    @font-face {
        font-family: "RedHatRegular";
        src: url("/fonts/RedHatDisplay-Regular.ttf");
    }

    @font-face {
        font-family: "RedHatBold";
        src: url("/fonts/RedHatDisplay-Bold.ttf");
    }

    @font-face {
        font-family: "RedHatLight";
        src: url("/fonts/RedHatDisplay-Light.ttf");
    }

    body
    {
        font-family: "RedHatRegular";
    }

    .redhat-light
    {
        font-family: "RedHatLight";
    }

    .redhat-bold
    {
        font-family: "RedHatBold";
    }

    .whatsapp-fixed
    {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        font-size: 30px;
        color: #ffffff;
        padding: 8px 18px;
        background-color: #25d366;
        border-radius: 50%;
    }

    #bottomModalPopup
    {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #DB5447;
        padding: 0;
    }

    .fa-solid-white
    {
        position: absolute;
        top: .5rem;
        right: .5rem;
        color: #ffffff;
        cursor: pointer;
    }

    #bottomModalPopup>form
    {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    #bottomModalPopup>form>input
    {
        width: 200px;
        margin: 1rem;
        color: #ffffff;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid #e8e8e8;
        border-radius: 0;
    }

    #bottomModalPopup>form>input:focus,
    #bottomModalPopup>form>input:active
    {
        outline: none;
    }

    #bottomModalPopup>form>input::placeholder
    {
        color: #fff;
    }

    #bottomModalPopup>form>h5
    {
        font-size: 1rem;
        color: #ffffff;
        text-transform: uppercase;
        margin-bottom: 0;
    }

    @media screen and (max-width: 768px) {

    }

    @media screen and (max-width: 576px) {
        #bottomModalPopup
        {
            padding: 1rem;
        }
        button.btn.btn-danger
        {
            margin-top: .5rem;
        }
        #bottomModalPopup>form
        {
            display: flex;
            flex-direction: column;
        }
        #bottomModalPopup>form>input
        {
            margin: 0;
        }
    }

</style>
