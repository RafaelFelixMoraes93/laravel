<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Component com Include</h1>
    <h2>Sem parâmetros</h2>
    <p>Utilil para coisas estáticas, como top bar ou footer por exemplo.</p>
    <p>Sintax: @ include"("componentAqui")"</p>

    <h2>Com parâmetros</h2>
    <p>Aqui já fica versátil, pode ser utilizado em todo o sistema.</p>
    <p>Sintax: @ include "("componenteAqui", 'variavel' => 'valorDaVariavel')"</p>
    @include('components.componente', ['nome' => 'Componente1'])
</body>
</html>