<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-6">
                        <h6 class="uppercase dms-sans-reg">sucursal</h6>
                        <h3 class="uppercase redfox-red dms-sans-reg">Redfox Caba</h3>
                        <br />
                        <p class="dms-sans-reg">Ciudad Autónoma de Buenos Aires</p>
                        <p class="dms-sans-reg">Av. Corrientes 1386 11A (CP. 1043)</p>
                        <p class="dms-sans-reg"><span class="text-gray-400">(+54 9) </span> 11 5950 3552</p>
                        <p class="dms-sans-reg">info@red-fox.com.ar</p>
                    </div>
                    <div class="col-6">
                        <h6 class="uppercase dms-sans-reg">sucursal</h6>
                        <h3 class="uppercase dms-sans-reg redfox-red">Redfox norte</h3>
                        <br />
                        <p class="dms-sans-reg">San Isidro, Buenos Aires</p>
                        <p class="dms-sans-reg">Rivadavia 154, oficina 205/6 (CP. 1642)</p>
                        <p class="dms-sans-reg"><span class="text-gray-400">(+54 9) </span> 11 4743.6525</p>
                        <p class="dms-sans-reg">info@red-fox.com.ar</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-6">
                        <h6 class="uppercase dms-sans-reg">sucursal</h6>
                        <h3 class="uppercase dms-sans-reg redfox-red">Redfox Nea</h3>
                        <br />
                        <p class="dms-sans-reg">Aristóbulo del Valle, Misiones</p>
                        <p class="dms-sans-reg">25 de Mayo 1000 (CP. 3364)</p>
                        <p class="dms-sans-reg"><span class="text-gray-400">(+54 9) </span> 03755 470056</p>
                        <p class="dms-sans-reg">info@red-fox.com.ar</p>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
    </div>
</template>

<script>
export default {
    name: "ContactCarousel"
}
</script>

<style scoped>
p
{
    margin: 0;
}
.carousel-indicators
{
    position: static;
    margin: 3rem 0;
    z-index: 2;
    display: flex;
    justify-content: start;
    list-style: none;
}
.carousel-indicators [data-bs-target]{
    width: 10px;
    height: 10px;
    border: 1px solid #DB5447;
    border-radius: 100px;
    margin-right: .5rem;
}
.carousel-indicators [data-bs-target][data-v-fba323c4] {
    background-color: #000;
}
.carousel-indicators [data-bs-target]
{
    background-color: #D84E44;
}
</style>
