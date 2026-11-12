<div class='mt-5'>
  @if (session()->has('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

  @if (session()->has('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <div class="mb-3">
    <input type="text" wire:model.live='search'
    placeholder="Pesquisar..." class="form-control">
  </div>
  
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categorias as $c)
    <tr>
      <th scope="row">{{ $p->id}}</th>
      <td>{{$c->nome}}</td>
      <td>
        <a href="{{route('categoria.edit', ['id'=> $c->id]) }}"
          class="btn btn-sm btn-info">Editar</a>

      <button wire:click='delete({{ $c->id}})'
        class="btn btn-sm btn-danger">Excluir</button>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>