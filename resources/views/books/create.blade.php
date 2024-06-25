<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Livro</title>
</head>
<body class="painel">
    <h1>Cadastro de Livro</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br><br>
        
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required><br><br>
        
        <label for="edicao">Edição:</label>
        <input type="text" name="edicao" id="edicao" required><br><br>
        
        <label for="editora">Editora:</label>
        <input type="text" name="editora" id="editora" required><br><br>
        
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" required><br><br>
        
        <button type="submit" class=btn-custom>Cadastrar</button>
    </form>
    <a href="{{ route("books.index") }}">Voltar para lista de livros</a>

</body>
</html>
