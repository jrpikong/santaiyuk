<template>
    <!--<div class="carousel slide" id="carousel-example-captions" data-ride="carousel">-->
    <!--<ol class="carousel-indicators">-->
    <!--<li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>-->
    <!--<li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>-->
    <!--<li data-target="#carousel-example-captions" data-slide-to="2" class="active">-->

    <!--</li>-->
    <!--</ol>-->
    <!--<div class="carousel-inner" role="listbox">-->
    <!--<div v-if="loading" class="text-center">-->
    <!--<p>Loading ....</p>-->
    <!--</div>-->
    <!--<div v-else="" class="item" v-for="(slider,index) in sliders">-->
    <!--<img alt="900x500"-->
    <!--class="img-responsive"-->
    <!--src="http://jktgo.com/wp-content/uploads/2018/01/anantara-1514864057.jpg"-->
    <!--data-holder-rendered="true">-->
    <!--<div class="carousel-caption">-->
    <!--<h3>First slide label</h3>-->
    <!--<p class="hidden-xs">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev">-->
    <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
    <!--<span class="sr-only">Previous</span>-->
    <!--</a>-->
    <!--<a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">-->
    <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
    <!--<span class="sr-only">Next</span>-->
    <!--</a>-->
    <!--</div>-->

    <agile v-if="loading" :options="options" placeholder="loading">
        <div :class="'slide slide--'+index" v-for="(slider,index) in sliders" :style="{'background-image': 'url('+ urlRoute + slider.image +')'}">
            <div class="carousel-caption">
                <h3>{{slider.title}}</h3>
                <p class="hidden-xs">{{slider.captions}}</p>
            </div>
        </div>
    </agile>
</template>

<style lang="scss" scoped>
    .agile {
        &__dots {
            bottom: 0;
            left: 50%;
            position: absolute;
            transform: translateX(-50%);
        }

        &__dot {
            button {
                background-color: transparent;
                border: 1px solid #fff;

                &:hover {
                    background-color: #fff;
                }
            }

            &--current {
                button {
                    background-color: #fff;
                }
            }
        }

        margin-bottom: 25px;
    }

    .slide {
        background: {
            position: center;
            size: cover;
        }

        height: 500px;

        &:before {
            background-color: rgba(#000, .2);
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        object-fit: cover;
        height: 500px;
        width: 100%;
    }
</style>

<script>
    /*52.77.210.38*/
    export default {
        data() {
            return {
                loading: false,
                sliders: [],
                endpoint: 'api/sliders',
                urlRoute: 'http://localhost:8000/storage/',
                options: {
                    arrows: false,
                    dots: true,
                    speed: 90,
                    timing: "linear",
                    fade: true,
                    autoplay: true,
                    pauseOnHover: true,
                    responsive: [
                        {
                            breakpoint: 320,
                            height: 100,
                        }
                    ]
                }
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
                            this.loading = true
                            console.log(this.sliders)
                        })
                    this.$nextTick(() => {
                        $('.carousel').carousel()
                    })
                },200)
            }
        }
    }
</script>