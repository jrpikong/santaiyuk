<template>
    <div class="col-md-3">
        <div class="col-md-12">
            <keep-with-us></keep-with-us>
        </div>
        <!--Siderbar Category-->
        <div class="col-md-12">
            <img src="/img/Memento.jpg" class="img-responsive">
        </div>
        <!--&lt;!&ndash;Siderbar Tags&ndash;&gt;-->
        <!--<div class="col-md-12">-->
            <!--<div class=" sidebar-right">-->
                <!--<h3 class="sidebar-title">Tags</h3>-->
                <!--<div class="form-group">-->
                    <!--<a href="#">-->
                        <!--<div class=" tags" v-for="tag in tags">{{tag.name}} ({{tag.count}})</div>-->
                    <!--</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    </div>
</template>

<script>
    import KeepWithUs from '../partials/KeepWithUs'
    export default {
        components: {KeepWithUs},
    }
    // export default {
    //     name: "sidebar",
    //     data () {
    //         return {
    //             endpoint: '/api/get-all-tags',
    //             categories:[],
    //             tags: []
    //         }
    //     },
    //     created() {
    //         this.getCategory()
    //         this.getTags();
    //     },
    //     methods: {
    //         async getTags() {
    //             setTimeout(() => {
    //                 axios.get(this.endpoint)
    //                     .then(({data}) => {
    //                         this.tags = data.data
    //                     })
    //             },200)
    //         },
    //         async getCategory() {
    //             setTimeout(() => {
    //                 axios.get('/api/get-all-categories')
    //                     .then(({data}) => {
    //                         this.categories = data.data
    //                     })
    //             },200)
    //         }
    //     }
    // }
</script>

<style scoped>

</style>