<template>
    <div class="">
        <div class="jumbotron" id="staff-banner">
            <div class="container d-flex justify-center align-center title-sec-container">
                <h3 class="title-section uppercase text-center">ADHERÍ TU OFICINA A REDFOX</h3>
                <p class="uppercase text-center dms-sans-reg">
                    PODES SER PARTE DE LA RED GLOBAL MÁS GRANDE DE PROFESIONALES
                </p>
                <p class="uppercase text-center dms-sans-reg">
                    QUE BRINDAN SERVICIOS INMOBILIARIOS, JURÍDICOS Y CONTABLES.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RedBanner"
}
</script>

<style scoped>
#staff-banner
{
    background-image: url("/images/red/real-estate-side.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.title-section
{
    color: #fff;
    font-size: 2.4rem;
    letter-spacing: 4px;
}
.title-sec-container
{
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.title-sec-container>p
{
    color: #fff;
    margin: 0;
}

</style>
