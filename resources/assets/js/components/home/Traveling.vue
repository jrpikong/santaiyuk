<template>
    <div>
        <div v-if="loading" class="col-sm-12 text-center">Loading ... </div>
        <div v-else class="col-sm-12">
            <h2 style="border-bottom: 2px solid #bf9b30;padding-left:15px;padding-right:15px;">Wisata</h2>
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
            <div class="col-sm-6 col-md-4">
                <img :src="'/img/ads/room-1.jpg'" class="img-responsive" style="height: 345px; width: 100%;object-fit: cover;">
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <div class="col-sm-offset-4">
                <div class="col-sm-6">
                    <a href="/category/direktori-wisata" class="btn form-control" style="background: black;color: #fff;">Artikel Selanjutnya</a>
                </div>
            </div>
        </div>
            <!--<div class="col-sm-offset-4"></div>-->
    </div>
</template>

<script>
    import KeepWithUs from '../partials/KeepWithUs'
    export default {
        name: "post-category",
        components: {KeepWithUs},
        component() {
            KeepWithUs: KeepWithUs
        },
        data() {
            return {
                loading: true,
                endpoint: 'api/post-category/direktori-wisata/5',
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