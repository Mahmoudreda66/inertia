<template>
    <Head title="Home Page"></Head>
    <Layout>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Home Page
                    </div>
                    <div class="alert bg-light mb-0">
                        Index Page, Go To Users From Above Link
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '../Layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';

export default {
    components: {
        Layout,
        Head
    }
}
</script>