var app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    mounted(){
        axios.get('http://localhost/dischi/php-ajax-dischi/second/main.php')
        .then(response =>{
            this.albums = response.data;
        })
    }
});