const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            apiUrl: './server.php',
            discList: []
        }
    },
    methods: {
        axiosCallApi (url) {  
            // Optionally the request above could also be done as
            axios.get(url, {
                params: {
                }
            })
            .then((response) => {
              console.log(response.data);
              this.discList = response.data

            })
            .catch(function (error) {
              console.log(error);
            })
        }
    },
    created() {
        this.axiosCallApi(this.apiUrl);
    },
}).mount('#app')