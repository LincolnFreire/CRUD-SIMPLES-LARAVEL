<html>
    <head>
        @extends('layout.app')
    </head>

<body>
    <h4>Pagina de prdutos</h4>
    <table class="table" table:hover>
        <thead>
            <th>Nome</th>
            <th>Qtd</th>
            <th>Preco</th>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($produtos as $prod)
                <tr>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->estoque}}</td>
                    <td>{{$prod->preco}}</td>
                    <td>{{$prod->categoria_id}}</td>
                    <td> 
                        <a href="/produto/{{$prod->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/produto/delete/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <a href="/" class="btn btn-sm btn-primary">home</a>
        <a href="/produto/create" class="btn btn-sm btn-primary">Add</a>
    </table> 
</body>
</html>
