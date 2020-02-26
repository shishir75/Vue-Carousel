<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Carousel Component</div>

                    <div class="card-body">
                        <div data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
                            <slot></slot>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Flickity from 'flickity';
    import 'flickity/dist/flickity.min.css';

    export default {
        mounted() {
            console.log('Component mounted.')
        },

        components: [Flickity]
    }
</script>
