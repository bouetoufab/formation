<template>

</template>

<script setup>
    import {useForm} from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
    import FrontLayout from '../../layouts/frontLayout.vue';
    defineOptions({
        layout: FrontLayout
    });

    const avatar = useForm({
        avatar: null,
    });
    const handleFileChange = (event) => {
        avatar.avatar = event.target.files[0];
    };
</script>