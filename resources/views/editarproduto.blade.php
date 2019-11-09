<form action="/produto/{{$prod->id}}" method="POST">
    @csrf
    <label>Nome do produto</label>
    <input type="text" class="form-control" name="nome" value="{{$prod->nome}}"/> 
    
    <label>Quantidade</label>
    <input type="number" class="form-control" name="qtd" value="{{$prod->estoque}}"/>
    <br/>
    <label>Preço</label>
    <input type="number" class="form-control" name="preco" value="{{$prod->preco}}"/>
    
    <label>Categoria</label>
    <select name="categoria" >
        @foreach ($categorias as $cat)
            <option value="{{$cat->id}}">{{$cat->nome}}</option>
        @endforeach
    </select>
    <br/>
    <button type="submit">Salvar</button>
    <button type="submit">Cancelar</button>
</form>