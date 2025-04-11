<template>
    <div class="jumbotron" :id="background">
        <div class="container d-flex justify-center align-center">
            <h3 class="display-4">{{ title }}</h3>
        </div>
    </div>
</template>

<script>
export default {
    name: "Banner",

    props: {
        title: String,
        background: String,
    },

    computed: {
        cssProps()
        {
            return {
                '--bg-image': this.background
            }
        }
    }
}
</script>

<style scoped>
#contact-banner
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/contacto_bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 3rem 0;
}

#contable-banner
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/banner-contable-bg.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 2rem 0;
}

#search-bg
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/search-bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 3rem 0;
}

#blog-banner
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/blog-bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 7.5rem 0;
    height: 40vh;
}

#sell-banner
{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/sell/sell-bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 3rem 0;
}

#tu_red
{
    /*background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/tu_red.jpg');*/
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/bg-tu-red.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 4rem 0;
}

h3
{
    color: #fff;
}
</style>
