<template>
    <div class="col-md-3">
        <div class="col-md-12">
            <div class="background-gold sidebar-right-top">
                <h2>
                    Keep Up With
                    <span>Pergi Keliling</span>
                </h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="By Entering Your E-mail"/>
                        <button class="btn form-control" type="submit">I'm Ready</button>
                    </div>
                </form>
            </div>
        </div>
        <!--Siderbar Category-->
        <div class="col-md-12">
            <div class=" sidebar-right">
                <h3 class="sidebar-title">Categories</h3>
                <div class="form-group">
                    <a href="#">
                        <div class=" tags" v-for="tag in tags">{{tag.name}}</div>
                    </a>
                </div>
            </div>
        </div>
        <!--Siderbar Tags-->
        <div class="col-md-12">
            <div class=" sidebar-right">
                <h3 class="sidebar-title">Tags</h3>
                <div class="form-group">
                    <a href="#">
                        <div class=" tags" v-for="tag in tags">{{tag.name}}</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "sidebar",
        data () {
            return {
                endpoint: '/api/get-all-tags',
                tags: []
            }
        },
        created() {
            this.getTags();
        },
        methods: {
            async getTags() {
                setTimeout(() => {
                    axios.get(this.endpoint)
                        .then(({data}) => {
                            this.tags = data.data
                        })
                },200)
            }
        }
    }
</script>

<style scoped>

</style>