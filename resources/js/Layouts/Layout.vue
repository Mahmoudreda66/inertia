<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <Link class="nav-link" :class="{ 'text-primary': $page.url == '/' }" aria-current="page" href="/">
                        Home</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :class="{ 'text-primary': $page.url == '/users' }" href="/users">Users</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <slot></slot>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link
    }
}
</script>