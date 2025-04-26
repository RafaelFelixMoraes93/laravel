<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laçõs</title>
</head>
<body>
    <h1>Laços de repetição com Blade</h1>

    <h2>FOR</h2>
    <p>Adicionamos @ antes do for e finalizamos com @ endfore não abrimos o blocos de chaves.</p>
    <p>@ for"("$i=1; $i<10; $i++")"</p>
    <p>pConteúdo a ser exibir ou modificado./p</p>
    <p>@ endfor</p>

    <h2>FOREACH</h2>
    <p>Para trabalhar com FOREACH, precisamos trazer informações do controller.</p>
    <p>@ foreach"("$ingredientes as $ing")"</p>
    <p>$ing dentro de chaves duplas</p>
    <p>@ endforeach</p>

    <p><strong>Percorrendo o array</strong></p>

    @foreach ($ingredientes as $ing)
        <p>{{$ing}} <button style="background-color: rgb(192, 28, 28); color: white; border: 0cap; padding: 5px;">Deletar</button></p>
    @endforeach    
    
    
</body>
</html>