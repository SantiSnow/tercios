<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <img src="/images/redfox-logo.png" alt="RedFox Logo" class="w-48" />
            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Bienvenido al panel de administración de RedFox Argentina
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                Desde aquí podrá confirgurar y administrar el sitio web de RedFox Argentina.
                Para comenzar, puede utilizar la navegación en la parte superior del sitio.
                También puede acceder rapidamente mediante las notificaciones en la parte
                inferior.
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/tasations" class="text-gray-500 link-dashboard">Tasaciones</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Visite las últimas solicitudes de tasación recibidas por los usuarios en el sitio web.
                </p>

                <p class="mt-4 text-sm">
                    <Link href="/tasations" class="btn btn-dark link-dashboard">
                        Explora las solicitudes
                    </Link>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-user" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/contacts" class="text-gray-500 link-dashboard">Contactos</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Administra, contacte y visualice los contactos obtenidos por medio de los formularios del sitio web.
                </p>

                <p class="mt-4 text-sm">
                    <Link href="/contacts" class="btn btn-dark link-dashboard">Contactos</Link>
                </p>
            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-house" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/properties" class="text-gray-500 link-dashboard">Propiedades</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Administrar las propiedades en el sistema, crear nuevos anuncios de propiedades, elimina o edita las propiedades actuales
                </p>

                <Link href="/properties" class="btn btn-dark link-dashboard">Propiedades</Link>
            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-blog" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/posts" class="text-gray-500 link-dashboard">Blog</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Crear y administrar entradas en el blog, cree nuevos posteos, editar o eliminar los actuales posts dentro del blog.
                </p>

                <Link href="/posts" class="btn btn-dark link-dashboard">Blog y entradas</Link>

            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-user" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/newsletter" class="text-gray-500 link-dashboard">Suscriptores al newsletter</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Visualizar los contactos y suscriptores al newsletter
                </p>

                <Link href="/newsletter" class="btn btn-dark link-dashboard">Newsletter</Link>

            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-house" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/property-question" class="text-gray-500 link-dashboard">Consultas sobre propiedades</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Visualizar los contactos y consultas sobre las propiedades
                </p>

                <Link href="/property-question" class="btn btn-dark link-dashboard">Consultas</Link>

            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-user" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/property-question" class="text-gray-500 link-dashboard">Miembros del staff</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Desde esta sección podrá editar y administrar a los miembros del staff visibles desde el sitio web.
                </p>

                <Link href="/members" class="btn btn-dark link-dashboard">Administrar</Link>

            </div>

            <div>
                <div class="flex items-center">
                    <font-awesome-icon icon="fa-solid fa-house" class="text-gray-500" />
                    <h2 class="ml-3 mb-0 text-xl font-semibold text-gray-900">
                        <Link href="/property-question" class="text-gray-500 link-dashboard">Propiedades destacadas</Link>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Administrar las propiedades destacadas en el sistema.
                </p>

                <Link href="/properties-outstanding" class="btn btn-dark link-dashboard">Administrar</Link>

            </div>
        </div>
    </div>
</template>

<style>
.link-dashboard
{
    text-decoration: none;
}
.link-dashboard:hover
{
    color: #1a202c;
}
</style>
