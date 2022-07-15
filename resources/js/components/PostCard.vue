<template>
    <div class="card mb-3">
        <div class="card-body">
            <img v-if="post.cover" class="card-img-top" :src="post.cover" alt="Card image cap" />
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ troncateText(50) }}</p>
            <p>Category: {{ categoryName }}</p>
        </div>
        <div class="card-body">
            <router-link :to="{ name: 'single-post', params: { slug: post.slug } }" class="card-link">Leggi post</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: {
        post: Object,
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : "nessuna";
        }
    },
    methods: {
        troncateText(maxCharNumber) {
        
            if (this.post.content.length > maxCharNumber) {
                return this.post.content.substr(0, maxCharNumber) + "...";
            }

            return this.post.content;

        },
    }
}
</script>

<style>
</style>