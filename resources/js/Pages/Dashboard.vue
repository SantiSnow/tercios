<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import DashboardHome from "@/Components/DashboardHome.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Administración
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <DashboardHome />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
