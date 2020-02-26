<template>
    <div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
        <slot></slot>
    </div>



</template>

<script>

    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';

    export default {

        props: {
            wraparound: {
                default: true
            },
            autoplay: {
                default: true
            }
        },

        components: {
            Flickity
        },



        mounted() {
            new Flickity(this.$el, {

                wrapAround: this.wraparound,
                autoPlay: this.autoplay,

            });
        },



    }
</script>
