<template>
    <div>
        <div v-if="loading" class="col-sm-12 text-center">Loading ... </div>
        <div v-else class="col-sm-12">
            <div  v-for="post in posts" class="col-sm-6 col-md-4">
                <a :href="post.slug">
                    <div class="thumbnail">
                        <img alt="100%x200"
                             :data-src="urlRoute + post.image"
                             style="height: 200px; width: 100%; display: block;"
                             :src="urlRoute + post.image"
                             data-holder-rendered="true">
                        <div class="caption">
                            <h4>{{post.title}}</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RecentPost",
        data() {
            return {
                loading: true,
                endpoint: 'api/post-recent/15',
                urlRoute: '/storage/',
                posts:[]
            }
        },
        created() {
            this.fetch()
        },
        props: ['surveyData'],
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
        }
    }
</script>