<template>
    <div class="col-md-3 col-sm-6">
        <div class="bg-light p-4">
            <div class="div-product-wrapper">
                <div class="frame-34042">
                    <div class="frame-34041">
                        <div class="frame-34040">
                            <div class="product-name">{{ product.name }}</div>
                            <div class="few-units-left">Few units left</div>
                        </div>
                        <div class="frame-34038">
                            <div class="frame-34037">
                                <div class="n">N</div>
                                <div class="product-price">{{ product.price }}</div>
                            </div>
                            <div class="frame-34039">
                                <div class="n2">N</div>
                                <div class="product-quantity">{{ product.quantity }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-secondary">
                        <div class="add-to-cart" @click="addToCart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</div>
                    </div>
                </div>
                <img class="image-375" :src="product.image" />
                <div class="span-badge">
                    <div class="_23-off">23% Off</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Product",
    props: {
        product: {
            type: Object,
            required: true
        }
    },
    methods: {
        addToCart() {
            this.$emit('addtocart',this.product.type); // Emit the custom event
        }
    }
}
</script>

<style scoped>

</style>
