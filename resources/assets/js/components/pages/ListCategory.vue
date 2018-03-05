<template>
    
</template>

<script>
    export default {
        name: "list-category",
        props: ['listData'],
        mounted () {
            // Do something useful with the data in the template
            console.dir(this.listData)
        }
    }
</script>

<style scoped>

</style>