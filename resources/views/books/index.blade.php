<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Livros</title>
</head>
<body>
    <h1>Listagem de Livros</h1>
    <a href="{{ route("books.create") }}">Adicionar Novo +</a>
    <ul>
        @forelse ($books as $book)
        <li>{{ $book->titulo }} - {{ $book->autor }}</li>
        @empty
            <h2>Ainda não há livros cadastrados</h2>
        @endforelse
    </ul>
    <a href="{{ route("dashboard") }}">Voltar para o Dashboard</a>
</body>
</html>
