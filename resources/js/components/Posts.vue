<template>
    <div>
        <h2>Lista di post</h2>
        <div class="row row-cols-3">

            <!-- Single post -->
            <div v-for="post in posts" :key="post.id" class="col">
                <PostCard :post="post"/>
            </div>
            <!-- /Single post -->
        </div>
    </div>
</template>

<script>
import Axios from 'axios';
import PostCard from "../components/PostCard.vue"

export default {
    name: "Posts",
    components: {
        PostCard,
    },
    data() {
        return {
            posts: []
        };
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            Axios.get("/api/posts")
                .then(resp => {
                this.posts = resp.data.results;
            });
        },
    },
    components: { PostCard }
}
</script>

<style>
</style>