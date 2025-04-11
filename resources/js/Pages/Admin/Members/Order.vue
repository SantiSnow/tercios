<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { router, Link } from "@inertiajs/vue3";
import Pagination from "@/Components/CustomComponents/Pagination.vue";

let submitDelete = (id) =>{
    router.delete('/delete-member/'+id);
}

</script>

<style>
    td
    {
        border-top: 1px solid #bfbfbf;
        padding: 1rem 1rem 1rem 0;
    }
    .form-delete
    {
        display: inline;
    }
    .white
    {
        color: #ffffff;
    }
</style>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight d-inline mr-6">
                Miembros del Staff
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="flex flex-row justify-end">
                        <button class="btn btn-success" @click="save">Guardar</button>
                    </div>
                    <div class="row">
                        <ul class="sortable-list" id="sortable-list">
                            <li class="item" draggable="true" v-for="(member, index) in members" :key="index" :id="`prop-member-${member.id}`">
                                <div class="details">
                                    <font-awesome-icon icon="fa-solid fa-grip-vertical" class="fa-solid" />

                                    <span style="max-width: 100px">
                                        <div class="member-img" :style="'background-image: url(/storage'+member.image+')'"></div>
                                    </span>

                                    <span>Posición: {{ member.place }}</span>
                                    <br />
                                    <span>{{ member.name }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import {router} from "@inertiajs/vue3";

export default {
    name: "MembersContacts",
    props: {
        members: Object,
    },
    data(){
        return {
            form: {
                members_order: [],
            }
        };
    },
    methods: {
        save()
        {
            const sortList = document.getElementById("sortable-list");
            let order = [];

            for (let i = 0; sortList.childNodes.length > i; i++)
            {
                if(sortList.childNodes[i].id)
                {
                    order.push(sortList.childNodes[i].id);
                }
            }

            console.log("final: ", order);
            this.form.members_order = order;
            router.post('/order-members-save', this.form);
        }
    },
    mounted() {
        const sortList = document.getElementById("sortable-list");
        const items = document.querySelectorAll(".item");

        items.forEach(item => {

            //add clase
            item.addEventListener("dragstart", () => {
                item.classList.add("dragging");
            });

            //remove class
            item.addEventListener("dragend", () => {
                item.classList.remove("dragging");
            });

        });

        const initSortableList = (e) => {
            const dragginItem = sortList.querySelector(".dragging");
            const siblings = [...sortList.querySelectorAll(".item:not(.dragging)")];
            let nextSibling = document.elementFromPoint(e.clientX, e.clientY)
            sortList.insertBefore(dragginItem, nextSibling);
        }

        sortList.addEventListener("dragover", initSortableList);
    }
}
</script>

<style>
.member-img
{
    width: 50px;
    height: 50px;
    background-size: cover;
    background-position: top;
    transition: all ease 1s;
}

.item
{
    margin: 1rem;
    border: 1px solid #a8a8a8;
    border-radius: 5px;
    padding: 1rem;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.fa-grip-vertical
{
    color: #a8a8a8;
    margin-right: .5rem;
}

</style>
