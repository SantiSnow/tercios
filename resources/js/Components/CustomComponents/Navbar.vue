<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav :class="'navbar navbar-expand-lg bg-body-tertiary custom-transparent-navbar ' + ((!atTop || route().current('contact')) && 'bg-white-nav ')">
        <div class="container">
            <Link class="navbar-brand" href="/">
                <img src="/images/redfox-logo-header.png" alt="RedFox Logo" class="w-36" />
            </Link>

            <button class="navbar-toggler"
                    type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation"
                    @click="openMobile()">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div :class="(route().current('property.detail.page') || route().current('properties.renting') || route().current('properties.selling')) || route().current('contact') ? 'flex property-inside' : 'flex'" id="navbar-main">
                <ul class="nav" id="ul-main-navbar">
                    <li class="nav-item dropdown"
                        @mouseenter="open('secDrop')"
                        @mouseleave="open('secDrop')"
                    >
                        <a class="nav-link dropdown-toggle"
                           href="#" role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu hidden" id="sec-dropdown">
                            <li><Link href="/juridico" class="dropdown-item">Jurídico</Link></li>
                            <li><Link href="/contable" class="dropdown-item">Contable</Link></li>
                            <li><Link href="/inmobiliario" class="dropdown-item">Inmobiliario</Link></li>
                            <li><Link href="/desarrollos" class="dropdown-item" >Desarrollos</Link></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"
                        @mouseenter="open('firstDrop')"
                        @mouseleave="open('firstDrop')">
                        <a class="nav-link dropdown-toggle"
                           href="#" role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Propiedades
                        </a>
                        <ul class="dropdown-menu hidden" id="first-dropdown">
                            <li><Link href="/alquilar" class="dropdown-item">Alquilar</Link></li>
                            <li><Link href="/comprar" class="dropdown-item">Comprar</Link></li>
                            <li><Link href="/tasar" class="dropdown-item">Tasa tu propiedad</Link></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/staff">Nuestro Equipo</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/tu-red">Tu Red</Link>
                    </li>
                    <li class="nav-item">
                        <Link href="/blog" class="nav-link">Blog</Link>
                    </li>
                    <li :class="route().current('contact') ? 'nav-item nav-outstanding contact-current' : 'nav-item nav-outstanding'">
                        <Link href="/contacto" class="nav-link">Contactanos</Link>
                    </li>
                </ul>
            </div>


        </div>
    </nav>
</template>

<script>
export default {
    data()
    {
        return {
            mobOpen: false,
            atTop: true,
        }
    },
    created () {
        window.addEventListener('scroll', this.handleScroll);
    },
    unmounted () {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll (event) {
            if(window.scrollY==0){
                this.atTop = true;
            }
            else
            {
                this.atTop = false;
            }
        },
        openMobile()
        {
              let mobileNavbar = document.getElementById("navbar-main");
              if (!this.mobOpen)
              {
                  mobileNavbar.style.display = "flex";
                  this.mobOpen = true;
              }
              else
              {
                  mobileNavbar.style.display = "none";
                  this.mobOpen = false;
              }
        },
        open(drop)
        {
            if(drop==="firstDrop")
            {
                let dropDown = document.getElementById("first-dropdown");
                if(dropDown.classList.contains("hidden"))
                {
                    dropDown.classList.remove("hidden");
                    dropDown.style.display = "block";

                    let dropDownSec = document.getElementById("sec-dropdown");
                    dropDownSec.classList.add("hidden");
                    dropDownSec.style.display = "none";
                }
                else
                {
                    dropDown.classList.add("hidden");
                    dropDown.style.display = "none";
                }
            }
            else
            {
                let dropDown = document.getElementById("sec-dropdown");
                if(dropDown.classList.contains("hidden"))
                {
                    dropDown.classList.remove("hidden");
                    dropDown.style.display = "block";

                    let dropDownSec = document.getElementById("first-dropdown");
                    dropDownSec.classList.add("hidden");
                    dropDownSec.style.display = "none";
                }
                else
                {
                    dropDown.classList.add("hidden");
                    dropDown.style.display = "none";
                }
            }
        }
    }
}
</script>

<style scoped>
.custom-transparent-navbar
{
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 21;
    transition: all ease .5s;
}
.bg-white-nav
{
    background: #fff;
}
.bg-white-nav>div>div#navbar-main>ul>li>a.nav-link,
div>div#navbar-main>ul>li>ul>li>a.dropdown-item
{
    color: #8E8E8E;
    text-transform: uppercase;
}
.bg-white-nav>div>div#navbar-main>ul>li.nav-outstanding>a
{
    color: #fff;
}
.flex
{
    display: flex;
}
.nav-item>a.nav-link,
.dropdown-menu>li>a
{
    font-weight: 500;
    font-size: .82rem;
    letter-spacing: .5px;
    color: #fff;
    text-transform: uppercase;
}
.dropdown-menu>li>a:active
{
    background-color: #8E8E8E;
    color: #ffffff;
}
.dropdown-menu
{
    border: none;
    border-radius: 2px;
    padding: 1rem 0;
}
.dropdown-menu>li
{
    padding: .5rem 0;
}
.nav-item.nav-outstanding
{
    background-color: #d84e44;
    border-radius: 2px;
    color: #fff;
    text-transform: uppercase;
}

.nav-item.nav-outstanding.contact-current
{
    background-color: #9FA8AA;
    color: #fff;
}

#navbar-main.property-inside>ul>li>a
{
    color: #8E8E8E;
    text-transform: uppercase;
}

#navbar-main.property-inside>ul>li.nav-outstanding>a
{
    color: #ffffff;
}

@media screen and (min-width: 991px) {
    .nav-item.nav-outstanding
    {
        margin-left: .8rem;
    }
}

@media screen and (max-width: 991px) {
    #navbar-main
    {
        display: none;
    }
    #navbar-main
    {
        flex-direction: row;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    #ul-main-navbar
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .nav-item:not(.nav-outstanding)
    {
        padding-bottom: 2rem;
    }
}
@media screen and (max-width: 576px) {
    .custom-transparent-navbar
    {
        background: #fff;
    }
    .bg-white-nav
    {
        background: #fff;
    }
    .nav-item>a.nav-link,
    .dropdown-menu>li>a
    {
        font-weight: 600;
        font-size: .9rem;
        color: #8E8E8E;
    }
}
</style>
