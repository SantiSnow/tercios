<script>
import PageLayout from "@/Layouts/PageLayout.vue";
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Navigation, Slide } from 'vue3-carousel'

export default {
    name: "Property",
    components: {
        PageLayout,
        Carousel,
        Slide,
        Navigation,
    },
    props: {
        property: Object,
        images: Array,
    },
    methods:
    {
        openImageFull(src)
        {
            this.modalSrc = src;
            this.openModal = true;
            document.documentElement.style.overflow = 'hidden';
        },
        closeModal()
        {
            this.openModal = false;
            document.documentElement.style.overflow = 'auto';
        },
        sendPropComment()
        {
            console.log(JSON.stringify(this.form));
            const options = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(this.form),
            };

            fetch('/api/property-question', options)
                .then((response) => response.json())
                .then(
                    async (result) => {
                        await console.log(result);
                        this.commentSent = true;
                    },
                    (error) => {
                        console.log(error);
                    }
                );
        }
    },
    data()
    {
        return{
            openModal: false,
            modalSrc: "",
            commentSent: false,
            form: {
                name: null,
                email: null,
                phone: null,
                message: null,
                property_id: this.property.id,
            }
        }
    },
}
</script>


<template>
    <PageLayout>
        <div class="container mt-24 mb-4">
            <h3 class="redhat-regular">{{ property.name }}</h3>
            <p>{{ property.address }} {{ (property.city) ? " | " + property.city.name : "" }}</p>
            <h5 class="redhat-regular d-flex align-center">{{ (property.currency=="Peso") ? "$" : "USD " }}{{ property.price.toLocaleString() }}
                <span class="badge-sell uppercase">{{property.operation}}</span>
            </h5>
            <small>{{ property.type.name }}</small>
        </div>

        <div class="container mb-12">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div v-for="(slide, index) in images" :key="index" :class="`carousel-item ${index===0 ? 'active' : ''}`" >
                                <img :src="'/storage/properties/'+slide.file"
                                     class="d-block prop-main-slide cursor-pointer"
                                     @click="openImageFull('/storage/properties/'+slide.file)"
                                     alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!--Carousel>
                        <Slide v-for="slide in images" :key="slide">
                            <div class="carousel__item">
                                <img :src="'/storage/properties/'+slide.file" class="prop-image " />
                            </div>
                        </Slide>

                        <template #addons>
                            <Navigation />
                        </template>
                    </Carousel-->
                </div>
                <!--div class="col-12 col-sm-12 col-md-6 col-lg-6 sm-d-none">
                    <div class="row">
                        <div class="col-6" v-for="(image, index) in images.slice(0, 4)" :key="index">
                            <img :src="'/storage/properties/'+image.file"
                                 class="prop-image prop-image-side "
                                 @click="openImageFull('/storage/properties/'+image.file)" />
                        </div>
                    </div>
                </div-->
            </div>
        </div>

        <div class="modal" tabindex="-1" v-if="openModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn btn-close"
                            data-bs-dismiss="modal" aria-label="Close"
                            v-on:click="closeModal"></button>
                    <img :src="modalSrc" />
                </div>
            </div>
        </div>

        <div class="container my-12">
            <div class="row">
                <div class="col-4 col-md-2 text-center" v-if="property.rooms>0">
                    <font-awesome-icon icon="fa-solid fa-bed" class="fa-solid" />
                    <br />
                    {{ property.rooms }} Dormitorios
                </div>
                <div class="col-4 col-md-2 text-center" v-if="property.bathrooms>0">
                    <font-awesome-icon icon="fa-solid fa-bathtub" class="fa-solid" />
                    <br />
                    {{ property.bathrooms }} Baños
                </div>
                <div class="col-4 col-md-2 text-center">
                    <font-awesome-icon icon="fa-solid fa-ruler" class="fa-solid" />
                    <br />
                    {{ property.square_meters }}
                    <span v-if="property.mts_hec===2">ha</span>
                    <span v-else>m2</span>

                </div>
            </div>
        </div>

        <div class="container my-12">
            <div class="row">
                <h4>Descripción</h4>
                <div class="col-12 col-sm-12 col-lg-8" v-html="property.description">
                </div>
                <div class="col-12 col-sm-12 col-lg-4">
                    <form @submit.prevent="sendPropComment" v-if="!commentSent">
                        <h4 class="text-center">¡Me interesa la propiedad!</h4>
                        <input type="text" v-model="form.name" maxlength="60"
                               class="form-control my-4" placeholder="Tu nombre" />
                        <input type="email" v-model="form.email" maxlength="70"
                               class="form-control my-4" placeholder="Tu correo" />
                        <input type="text" v-model="form.phone" maxlength="14"
                               class="form-control my-4" placeholder="Tu teléfono" />
                        <textarea type="text" v-model="form.message" maxlength="500"
                                  class="form-control my-4" placeholder="Mensaje"></textarea>
                        <button class="btn btn-danger">Consultar</button>
                    </form>
                    <h4 v-else class="text-center">Gracias por su consulta, lo contactaremos a la brevedad</h4>
                </div>
            </div>
        </div>

        <div class="container my-12">
            <div class="row">
                <h5 class="redhat-regular">
                    Amenities
                </h5>
            </div>
            <div class="row">
                <div class="col-4 col-lg-3" v-for="(amenity, index) in property.amenities" key="amenity.id">
                    <font-awesome-icon icon="fa-solid fa-check" class="fa-solid-red" /> {{ amenity.name }}
                </div>
            </div>
        </div>

        <div class="container my-12">
            <div class="row" v-if="property.extra_information">
                {{property.extra_information}}
            </div>
        </div>

    </PageLayout>
</template>


<style scoped>
.redhat-regular
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

.badge-sell
{
    background-color: #eab134;
    margin-left: 10px;
    padding: 4px;
    border-radius: 4px;
    color: #fff;
    font-size: .6rem;
}

.align-center
{
    align-items: center;
}

.fa-solid
{
    color: #838383;
}
.fa-solid-red
{
    color: #a80000;
}

img.prop-image
{
    width: 200px;
    margin: auto;
}

img.prop-image-side:hover
{
    filter: brightness(0.5);
}

.prop-main-slide
{
    max-height: 60vh;
    width: 75%;
    margin: auto;
}

div.modal
{
    display: block;
}

.btn.btn-close
{
    position: absolute;
    margin: .5rem;
    right: 0;
    background-color: #ffffff;
}

.form-control
{
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #888888;
    transition: all ease 1s;
}

.form-control:focus
{
    border-bottom: 1px solid #3f3131;
}

.btn.btn-danger
{
    border-radius: 2px;
    background-color: #DB5447;
    text-transform: uppercase;
}

.carousel-control-next {
    right: 5rem;
}

.carousel-control-prev {
    left: 5rem;
}

@media screen and (max-width: 576px) {
    .sm-d-none
    {
        display: none;
    }
    .carousel-control-next {
        right: .25rem;
    }

    .carousel-control-prev {
        left: .25rem;
    }
    .prop-main-slide
    {
        max-height: 60vh;
        width: 100%;
        margin: auto;
    }
    .modal-dialog {
        top: 25%;
    }
}

@media screen and (min-width: 576px)
{
    .modal-dialog {
        max-width: 75vw;
        margin-right: auto;
        margin-left: auto;
        top: 50%;
        transform: translateY(-50%);
    }
}

</style>
