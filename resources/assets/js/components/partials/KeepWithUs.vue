<template>
    <div class="background-gold sidebar-right-top">
        <h2>
            Keep Up With
            <span>Pergi Keliling</span>
        </h2>
        <form method="post" @submit.prevent="post">
            <div class="form-group">
                <div class="alert alert-info" v-if="message">Terimakasih</div>
                <input type="text" class="form-control"  v-model="email" required placeholder="By Entering Your E-mail"/>
                <button class="btn form-control" type="submit">I'm Ready</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "KeepWithUs",
        data() {
            return {
                email : '',
                endpoint: 'subscribe',
                message: false
            }
        },
        methods: {
            post() {
                axios.post(this.endpoint,{email:this.email})
                    .then(({data}) => {
                        this.posts = data.data
                        this.message = true
                    })
            }
        }
    }
</script>

<style scoped>

</style>