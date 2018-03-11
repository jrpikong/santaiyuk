<template>
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
                urlRoute: '/storage/',
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
                },200)
            }
        }
    }
</script>