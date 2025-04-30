<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio com componente e include</h1>
    <div style="display: flex; flex-direction: row;">
    @foreach ($pessoas as $pessoa)
    @include('components.componenteinclude', $pessoa)
    @endforeach
    </div>
</body>
</html>