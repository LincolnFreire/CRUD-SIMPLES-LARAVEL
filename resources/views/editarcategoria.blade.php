<form action="/categoria/{{$cat->id}}" method="POST">
    @csrf
    <label> Nome da categoria</label>
    <input type="text" class="form-control" name="nomeCat" value="{{$cat->nome}}"/>

    <button type="submit">Salvar</button>
    <button type="cancel">Cancelar</button>
</form>