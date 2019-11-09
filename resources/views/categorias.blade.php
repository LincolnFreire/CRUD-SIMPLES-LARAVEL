<html>
    <head>
        @extends('layout.app')
    </head>

<body>
    <h4>Pagina de categoria</h4>
    <table class="table" table:hover>
        <thead>
            <th>Código</th>
            <th>Nome da categoria</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($categorias as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td> 
                        <a href="/categoria/{{$cat->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/categoria/delete/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
        <a href="/" class="btn btn-sm btn-primary">home</a>
        <a href="/categoria/create" class="btn btn-sm btn-primary">Add</a>
    </table> 
</body>
</html>
