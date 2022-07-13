<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'home'}">Home<span class="sr-only">(current)</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'about'}">About<span class="sr-only">(current)</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{name: 'blog'}">Blog<span class="sr-only">(current)</span></router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style>
</style>