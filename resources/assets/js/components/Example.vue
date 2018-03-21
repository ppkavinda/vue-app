<template>
    <div>
        <Message>{{message}}</Message>
    </div>
</template>

<script>
    import Message from './Message.vue';

    export default {
        components: {Message},

        data () {
            return {
                message: 'Hello There...',
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
