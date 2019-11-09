<form action="/categoria" method="POST">
    @csrf
    <label> Nome da categoria</label>
    <input type="text" class="form-control" name="nomeCat"/>

    <button type="submit">Salvar</button>
    <button type="submit">Cancelar</button>
</form>