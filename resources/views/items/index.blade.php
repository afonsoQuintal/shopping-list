<!DOCTYPE html>
<html>
<head>
    <title>Lista de Compras</title>
    <link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Lista de Compras</h1>
    
    <form method="POST" action="{{ route('items.store') }}" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="name" class="form-control" 
placeholder="Digite um item" required>
            <button type="submit" class="btn 
btn-success">Adicionar</button>
        </div>
    </form>

<ul class="list-group mt-3">
    @foreach($items as $item)
        <li class="list-group-item d-flex justify-content-between 
align-items-center">
            {{ $item->name }}
            
            <form method="POST" action="{{ route('items.destroy', 
$item->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Tem certeza que deseja 
remover?')">
                    Remover
                </button>
            </form>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
