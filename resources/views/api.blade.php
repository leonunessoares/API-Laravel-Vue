<head>
    <link rel="stylesheet" href="{{ asset ('css/estilo.css')}}">
<head>
<h1>Informe um cep para chamar a API</h1>
<br>

<form action="{{ route('api.correios.post')}}" method="POST">
    <input type="text" id="cep" name="cep"/>
    <input type="submit" type="button" value="Enviar"/>
</form>