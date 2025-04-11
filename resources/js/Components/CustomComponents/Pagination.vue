<template>
    <div v-if="links.length > 3">
        <div class="flex flex-wrap mt-8 justify-center" id="custom-pagination">
            <template v-for="(link, key) in links" :key="key">
                    <div
                        v-if="link.url === null"
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 inactive-pagination"
                        v-html="link.label"
                    />

                    <Link
                        v-else
                        :class="(link.active) ? 'bg-custom-btn text-white mr-1 mb-1 px-4 py-3 text-sm leading-4 custom-anchor-pagination rounded-full' : 'mr-1 mb-1 px-4 py-3 text-sm leading-4 custom-anchor-pagination rounded-full'"
                        :href="link.url"
                        v-html="link.label"
                    />
            </template>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    props: {
        links: Array,
    },
    components : {
        Link
    }
}
</script>

<style scoped>
#custom-pagination>:last-child,
#custom-pagination>:first-child
{
    display: none;
}
.bg-custom-btn
{
    background-color: #d84e44;
    text-decoration: none;
}
.custom-anchor-pagination
{
    color: #d84e44;
    text-decoration: none;
}
</style>
