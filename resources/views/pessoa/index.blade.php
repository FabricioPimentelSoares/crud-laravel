<h1>Pessoas cadastradas</h1>

<a href="/pessoas/create">Cadastrar Nova</a>

<hr>

@foreach($pessoas as $p)
    <p>Nome: {{ $p->nome}}</p>
    <p>Telefone: {{ $p->telefone}}</p>
    <p>Email: {{ $p->email}}</p>

    <hr>
@endforeach
