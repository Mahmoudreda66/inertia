<template>
    <Head title="Users"></Head>
    <Layout>
        <div class="container mb-3">
            <Link href="/users/create">
            <button class="btn btn-primary mb-3">Create New User</button>
            </Link>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover text-center mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.created_at }}</td>
                                <td>
                                    <Link>View</Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import Layout from '@/Layouts/Layout.vue';

export default {
    components: {
        Head,
        Link,
        Layout
    },
    props: {
        users: Object
    }
}
</script>