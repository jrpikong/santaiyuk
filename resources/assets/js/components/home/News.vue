<template>
    <div>
        <div v-if="loading" class="col-sm-12 text-center">Loading ... </div>
        <div v-else class="col-sm-12">
            <h2 style="border-bottom: 2px solid #bf9b30;padding-left:15px;padding-right:15px;">NEWS FLASH</h2>
            <div  v-for="post in posts" class="col-sm-6 col-md-4">
                <a :href="post.slug">
                    <div class="thumbnail">
                        <img alt="100%x200"
                             :data-src="urlRoute + post.image"
                             style="height: 200px; width: 100%; display: block;"
                             :src="urlRoute + post.image"
                             data-holder-rendered="true">
                        <div class="caption">
                            <h3>{{post.title}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <div class="col-sm-offset-4">
                <div class="col-sm-6">
                    <a href="/category/sekilas-info" class="btn form-control" style="background: black;color: #fff;">More Article</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12" style="padding-top: 10px;">
            <img :src="'/img/ads/video-cover-bg-1.jpg'" class="img-responsive" style="height: 245px; width: 100%;object-fit: cover;">
        </div>
    </div>
</template>

<script>
    export default {
        name: "post-category",
        data() {
            return {
                loading: true,
                endpoint: 'api/post-category/sekilas-info/6',
                urlRoute: '/storage/',
                posts:[]
            }
        },
        created() {
            this.fetch()
            console.log(this.surveyData)
        },
        mounted () {
          console.log(this.surveyData)
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
        },
        filters: {
          cutString(text, length, suffix) {
               return (text != null)? text.substring(0, length) + suffix: ''
          }
        }
    }
</script>