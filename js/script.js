const { createApp } = Vue;

createApp({
    data() {
        return {
            albumArray:[],
        };
    },
    methods: {
       getAlbums(){
        axios.get('server.php')
        .then((response)=> {
            this.albumArray = response.data
        
        })
       }
    },
    mounted() {
        this.getAlbums()
    }
}).mount('#app');