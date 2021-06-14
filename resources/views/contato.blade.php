<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>blade Contato</title>
</head>

<body>

      @if (10 > 70)
        <h1>Acesso Negado</h1>
      @else
        <h1>{{$saudacao}}</h1> <!--aqui chamamos uma variavel, a mesma criamos em rotas | web.php-->
      @endif
      <!-- pode podemos fazer verificação dentro do nosso html usando @ i f -->

      <P> Meu nome é {{$nome}} eu tenho {{$idade}}</P>
      <p>Contato via whats é {{$contato}}. saiba mais em {{$portifolio}}</p> <!--atribuimos a varivel site uma chave de acesso portifolio -->
      <!-- a variavel whats a chave de acesso dela é contato-->
      <!--tal pratica de colocar o nome da chave de acesso diferente da variavel, crio que nao seja boas praticas-->
      <!--fiz apenas pra questão de estudo-->

      @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if ($i == 2)
        <p>0 i é 2</p>
      @endif
    @endfor

  {{--esse comentario nao aparece site--}}

 @foreach ($usuarios as $user)
 <p>{{$user}}</p>
   
 @endforeach

</body>
</html>  