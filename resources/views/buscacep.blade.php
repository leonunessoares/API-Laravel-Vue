<head>
    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    
<head>
<h1>Retorno da API em formato JSON com exemplo simples de VUE</h1>

<h2>Cep Informado: {{ $apiarray ['cep']}}</h2>
<br>

<div id="app">

    <span v-html="endereco"> {{ $apiarray ['logradouro']}} </span>
    <button v-on:click="newlogradouro">
    Exemplo VUE (muda cor)
    </button>
    <br> 
    <span v-html="bairro"> {{ $apiarray ['bairro']}} </span>
    <button v-on:click="newbairro">
    Exemplo VUE (muda cor)
    </button>
    <br>
    <span v-html="cidade"> {{ $apiarray ['localidade']}} </span>
    <button v-on:click="newcidade">
    Exemplo VUE (muda cor)
    </button>
    <br>
    <span v-html="estado"> {{ $apiarray ['uf']}} </span>
    <button v-on:click="newestado">
    Exemplo VUE (muda cor)
    </button>

</div>
<script>
        new Vue({
            el: "#app",
            methods: {
                newlogradouro() {
                this.endereco = '<p style="color:red;">Endereço: {{ $apiarray ['logradouro']}}</p>';
                },
                newbairro() {
                this.bairro = '<p style="color:red;">Bairro: {{ $apiarray ['bairro']}}</p>';
                },
                newcidade() {
                this.cidade = '<p style="color:red;">Cidade: {{ $apiarray ['localidade']}}</p>';
                },
                newestado() {
                this.estado = '<p style="color:red;">Estado: {{ $apiarray ['uf']}}</p>';
                }
            },
            data: {
                endereco: "<p>Endereço: {{ $apiarray ['logradouro']}}</p>",
                bairro: "<p>Bairro: {{ $apiarray ['bairro']}}</p>" ,
                cidade: "<p>Cidade: {{ $apiarray ['localidade']}}</p>",
                estado: "<p>Estado: {{ $apiarray ['uf']}}</p>"              
            }
        });
</script>