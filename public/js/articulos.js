
var app = new Vue({
    el: '#categorias',
    data: {
        categorias: [],
        articulos: [],
    },
    methods: {
        listarCategorias(){
            axios.get('http://127.0.0.1:8000/categorias').then(response => {
                console.log(response);
                this.categorias = response.data;
            }).catch(error => {
                console.log(error);
            });
        },
        listarArticulos(id){
            axios.get(`http://127.0.0.1:8000/articulos/${id}`).then(response => {
                console.log(response);
                this.articulos = response.data;
            }).catch(error => {
                console.log(error);
            });
        },
        abrirModal(id){
            axios.get(`http://127.0.0.1:8000/abrirModal/${id}`).then(response => {
                console.log(response);
                this.articulos = response.data;
            }).catch(error => {
                console.log(error);
            });
        }
    },
    created() {
        this.listarCategorias();
    },
})