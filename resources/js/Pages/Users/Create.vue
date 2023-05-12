<template>
    <Layout>
        <div class="container">
            <div class="bg-light p-3 rounded border">
                <div v-if="$page.props.flash.success" class="alert alert-success">
                    {{ $page.props.flash.success }}
                </div>
                <div v-if="$page.props.flash.error" class="alert alert-danger">
                    {{ $page.props.flash.error }}
                </div>
                <form @submit.prevent="form.post('/users/create')">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" v-model="form.name" id="name" class="form-control">
                        <small v-if="errors.name" class="form-text text-danger">{{ errors.name }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" v-model="form.email" id="email" class="form-control">
                        <small v-if="errors.email" class="form-text text-danger">{{ errors.email }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" v-model="form.password" id="password" class="form-control">
                        <small v-if="errors.password" class="form-text text-danger">{{ errors.password }}</small>
                    </div>
                    <button class="btn btn-primary" :disabled="form.processing">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </Layout>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';
import { useForm } from '@inertiajs/vue3'

export default {
    components: {
        Head,
        Layout
    },
    props: {
        errors: Object
    },
    setup() {
        let form = useForm({
            name: "",
            email: "",
            password: ""
        });

        return { form };
    }
}
</script>