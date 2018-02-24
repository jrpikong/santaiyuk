<template>
    <div>
        <div v-if="loading" class="col-sm-12 text-center">Loading ... </div>
        <div v-else v-for="post in posts" class="col-sm-6 col-md-4">
            <a :href="post.slug">
                <div class="thumbnail">
                    <img alt="100%x200"
                         :data-src="urlRoute + post.image"
                         style="height: 200px; width: 100%; display: block;"
                         :src="urlRoute + post.image"
                         data-holder-rendered="true">
                    <div class="caption">
                        <h3>{{post.title}}</h3>
                        <p>{{post.created_at}}</p>
                        <p>
                            {{post.excerpt | cutString(150, '...')}}
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "post-category",
        data() {
            return {
                loading: true,
                endpoint: 'api/post-category/category-1/6',
                urlRoute: '/storage/',
                posts:[]
            }
        },
        created() {
            this.fetch()
        },
        methods: {
            async fetch() {
                setTimeout(() => {
                    axios.get(this.endpoint)
                        .then(({data}) => {
                            this.posts = data.data
                            this.loading = false
                        })
                },200)
            }
        },
        filters: {
          cutString(text, length, suffix) {
               return (text != null)? text.substring(0, length) + suffix: ''
          }
        }
    }
</script>

<style scoped>

</style>