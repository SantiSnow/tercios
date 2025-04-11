<template>
    <div class="container">
        <div class="d-flex flex-col relative">
            <form class="row max-w-container mx-auto" id="form-searchbar-container" @submit.prevent="postSearch">
                <label for="zona" class="d-none">Zona</label>
                <input type="text" maxlength="100"
                       @focus="openSuggestions"
                       class="form-control form-searchbar wider-input shadow-none dms-sans-reg"
                       id="zona" name="zona"
                       placeholder="Zona"
                       v-model="form.city"
                       autocomplete="off"
                       required
                />

                <label for="type" class="d-none">Tipo de inmueble</label>
                <select class="form-control form-searchbar shadow-none dms-sans-reg" id="type" name="type" v-model="form.type">
                    <option value="0" disabled>Tipo de inmueble</option>
                    <option value="1">Casa</option>
                    <option value="2">Clínica</option>
                    <option value="3">Departamento</option>
                    <option value="4">Local</option>
                    <option value="5">Lote</option>
                    <option value="6">Oficina</option>
                    <option value="7">PH</option>
                    <option value="8">Depósito</option>
                    <option value="9">Galpón</option>
                    <option value="10">Terreno</option>
                </select>

                <label for="operation" class="d-none">Transacción</label>
                <select class="form-control form-searchbar shadow-none dms-sans-reg" id="operation" name="operation" v-model="form.operation">
                    <option value="0" disabled>Transacción</option>
                    <option value="En Venta">En Venta</option>
                    <option value="En Alquiler">En Alquiler</option>
                </select>

                <label for="min" class="d-none">Precio mínimo</label>
                <input type="number" v-model="form.min" maxlength="100"
                       class="form-control form-searchbar smaller-input shadow-none dms-sans-reg"
                       id="min" name="min" placeholder="Precio mínimo"
                />

                <label for="max" class="d-none">Precio máximo</label>
                <input type="number" v-model="form.max" maxlength="100"
                       class="form-control form-searchbar smaller-input shadow-none dms-sans-reg"
                       id="max" name="max" placeholder="Precio máximo"
                />

                <button class="btn btn-danger w-150px dms-sans-reg">
                    buscar
                </button>
            </form>
            <div class="row" id="list-container">
                <span v-for="(city, i) in cities" :key="i.toString()" class="list-item-sug">
                    {{ city }}
                </span>
            </div>
        </div>
    </div>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "SearchBarInternal",
    props: {
        cities: Array,
    },
    data()
    {
        return {
            form: {
                city: null,
                type: 0,
                operation: 0,
                min: null,
                max: null,
            }
        }
    },
    methods: {
        postSearch() {
            document.getElementById("operation").style.borderBottom = "none";
            document.getElementById("type").style.borderBottom = "none";

            if (this.form.type === 0)
            {
                document.getElementById("type").style.borderBottom = "1px solid #D84E44";
                return;
            }

            if (this.form.operation === 0)
            {
                document.getElementById("operation").style.borderBottom = "1px solid #D84E44";
                return;
            }

            router.post('/busqueda', this.form);
        },
        openSuggestions() {
            document.getElementById("list-container").style.display = "flex";
        },
    },
    mounted() {
        let listSuggestions = document.getElementsByClassName("list-item-sug")

        for(let i = 0; i<listSuggestions.length; i++)
        {
            listSuggestions[i].addEventListener('click', (e) => {
                document.getElementById("list-container").style.display = "none";
                document.getElementById("zona").value = e.target.innerText;
                this.form.city = e.target.innerText;
            })
        }

        document.addEventListener("mouseup", function(event) {
            var obj = document.getElementById("list-container");
            var obj2 = document.getElementById("zona");
            if (!obj.contains(event.target) && !obj2.contains(event.target)) {
                document.getElementById("list-container").style.display = "none";
            }
        });
    },
}
</script>

<style scoped>
#form-searchbar-container
{
    background-color: #E2E5E6;
    padding: 1rem;
    margin-bottom: -2rem;
}
.form-searchbar
{
    margin: 0 .2rem;
    border: none;
    transition: all ease-in .5s;
    border-radius: 2px;
}
.form-searchbar::placeholder
{
    font-size: 14px;
    font-family: "DMSansRegular";
}
select.form-searchbar
{
    width: 9rem;
    font-size: 14px;
    border-radius: 2px;
}
.btn-danger.w-150px
{
    font-size: 14px;
    border-radius: 2px;
}
.form-searchbar:active,
.form-searchbar:focus
{
    border-bottom: 1px solid #ddd;
    outline: 0;
}
.w-150px
{
    width: 150px;
}
.wider-input
{
    width: 11rem;
}
.smaller-input
{
    width: 8rem;
}
#list-container
{
    margin: auto;
    width: 300px;
    display: none;
    position: absolute;
    top: 3rem;
    left: 3rem;
    background-color: #fff;
}
#list-container>span
{
    padding: .5rem;
    cursor: pointer;
}
.margin-x-24
{
    margin-right: 3rem;
    margin-left: 3rem;
}
@media screen and (min-width: 1200px) {
    #list-container{
        left: 12rem;
    }
}

@media screen and (max-width: 768px) {
    #form-searchbar-container
    {
        display: flex;
        flex-direction: column;
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
    select.form-searchbar
    {
        width: 20rem;
        margin: 1rem 0;
    }
    .w-150px
    {
        width: 20rem;
        margin: 1rem 0;
    }
    .wider-input
    {
        width: 20rem;
        margin: 1rem 0;
    }
    .smaller-input
    {
        width: 20rem;
        margin: 1rem 0;
    }
}
</style>
