<html>
    <head>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                        <a href="/categoria/create" class="btn btn-sm btn-primary">Add</a> 
                        <a href="/categoria/{{$cat->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/categoria/delete/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
         
    </table> 
</body>
</html>
