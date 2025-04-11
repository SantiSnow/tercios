<template>
    <div class="">
        <div class="jumbotron" :id="'bg-'+background">
            <div class="container d-flex justify-center align-center title-sec-container">
                <h3 class="title-section uppercase text-center">{{ title }}</h3>
                <p class="uppercase text-center dms-sans-reg">{{subtitle}}</p>
                <p class="uppercase text-center dms-sans-reg">{{ subtitle_second }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ServiceBanner",
    props: {
        title: String,
        subtitle: String,
        subtitle_second: String,
        background: String
    }
}
</script>

<style scoped>
#bg-inmobiliario
{
    background-image: url("/images/servicios/bg-service-inmo.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
#bg-desarrollo
{
    background-image: url("/images/servicios/bg-service-desarrollos.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
#bg-contable
{
    background-image: url("/images/servicios/bg-service-contable.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
}#bg-juridico
 {
     background-image: url("/images/servicios/bg-service-juridico.png");
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
