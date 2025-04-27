<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Components</title>
</head>
<body>
    <h1>Components</h1>
    <p>Components são blocos de código reutilizaveis, podemos cria-los uma vez e coloca-los em diversas partes do código.</p>
    <p>Vamos chamar o component botão Deletar:</p>
    <p>@ component"("nome_da_pasta.nome_do_component")"</p>
    <p>@ endcomponent</p>

    @foreach ($ingredientes as $ing)
        <p>{{$ing}} <button style="background-color: rgb(192, 28, 28); color: white; border: 0cap; padding: 5px;">Deletar</button></p>
    @endforeach

    <h2>Transformando o component em reutilizavel e flexivél</h2>
    <p>Dentro de uma component usamos $slot dentro de chaves duplas.</p>
    <p>Quando formos modificar colocamos direto no html.</p>
    <p>@ component"("nome_da_pasta.nome_do_component")"</p>
    Editar
    <p>@ endcomponent</p>
    <p>@ component"("nome_da_pasta.nome_do_component")"</p>
    Deletar
    <p>@ endcomponent</p>    

    <h2>Deixando as cores com variáveis</h2>
    <p>Para passar a cor, utiliza-se @ slot e fecha-se com @ endslot</p>
    @foreach ($ingredientes as $ing)
        <p>{{ $ing }} -
            @component('components.botao')
                @slot('cor')
                    blue
                @endslot
                Editar
            @endcomponent

            @component('components.botao')
                @slot('cor')
                    red
                @endslot
                Deletar
            @endcomponent
        </p>
    @endforeach
</body>
</html>