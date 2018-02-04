<template xmlns="">
    <div class="carousel slide" id="carousel-example-captions" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="2" class="active">

            </li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div v-if="loading" class="text-center">
                <p>Loading ....</p>
            </div>
            <div v-else="" class="item" v-for="(slider,index) in sliders">
                <img alt="900x500"
                     class="img-responsive"
                     src="http://jktgo.com/wp-content/uploads/2018/01/anantara-1514864057.jpg"
                     data-holder-rendered="true">
                <div class="carousel-caption">
                    <h3>First slide label</h3>
                    <p class="hidden-xs">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>

        <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</template>

<script>
    /*52.77.210.38*/
    export default {
        data() {
            return {
                loading: true,
                sliders: [],
                endpoint: 'api/sliders'
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
                            this.sliders = data.data
                            this.loading = false
                        })
                    this.$nextTick(() => {
                        $('.carousel').carousel()
                    })
                },200)
            }
        }
    }
</script>