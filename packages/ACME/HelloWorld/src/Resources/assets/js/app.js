/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//import './bootstrap.js';
import { createApp } from 'vue';
import product  from "./component/Product.vue";
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
    data() {
     return{
         baseUrl: null,
         sampleProducts:[],
         cartSize:0,
         mycart:[]
     }
    },
    created() {
        // Read the data-base-url attribute value
        this.baseUrl = document.getElementById('app').getAttribute('data-base-url');

    },
    mounted() {
        const storedId = this.retrieveRandomId();
        if (storedId) {
            this.storedId = storedId;
        }else this.generateRandomId1()

        this.fetchDataFromBackend();
    //alert('hi');

    },
    methods:{
        increaseCartSize(product) {
            this.cartSize++;
            this.mycart.push(product);
            console.log('Added to cart:', product);
        },
        async addToCart(product) {
            // Increment cart size locally
            this.cartSize++;

            try {
                // Send the product data to the backend using the Fetch API
                const response = await fetch(this.baseUrl+ '/addcart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(product)
                });
                const responseData = await response.json();
                console.log('Product added to cart:', responseData);
            } catch (error) {
                console.error('Error adding product to cart:', error);
            }
        },
        generateRandomId1() {
            const randomId = Math.random().toString(36).substr(2, 10); // Generate a random alphanumeric ID
            localStorage.setItem('randomId', randomId); // Store the ID in localStorage
            this.storedId = randomId; // Update the storedId in the Vue data
        },
        retrieveRandomId() {
            return localStorage.getItem('randomId'); // Retrieve the ID from localStorage
        },
        async  fetchDataFromBackend() {
            try {
                const response = await fetch(this.baseUrl+'myproducts');

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                // Process the fetched data
                this.sampleProducts=data;
                console.log(JSON.stringify( data));
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
            }
        }

    },
    computed: {
        chunkedProducts() {
            // Chunk the sampleProducts array into groups of 4
            const chunkSize = 4;
            const result = [];
            for (let i = 0; i < this.sampleProducts.length; i += chunkSize) {
                result.push(this.sampleProducts.slice(i, i + chunkSize));
            }
            return result;
        }
    }
});
app.component('product',product);
// import settings from './components/settings.vue';
//app.component('settings', settings);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
