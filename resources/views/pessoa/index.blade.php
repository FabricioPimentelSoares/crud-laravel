<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<h1>Pessoas cadastradas</h1>

<a class="btn btn-success" href="/pessoas/create">Novo Cadastro</a>

<hr>

<table class="table table-bordered table-danger">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach($pessoas as $p)
    <tr>
        <td>{{ $p->nome}}</td>
        <td>{{ $p->telefone}}</td>
        <td>{{ $p->email}}</td>
        <td>
            <a class="btn btn-primary" href="/pessoas/{{ $p->id }}/edit">Editar</a>
            <form action="pessoas/ {{ $p->id }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Excluir">
            </form>

        </td>
    </tr>
    @endforeach

</table>