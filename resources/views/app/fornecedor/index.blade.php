<h3>Fornecedor</h3>

@php
    /*
    if(empty($variavel)) {} //Retorna true se a variável estiver vazia
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */ 
@endphp

@isset($Fornecedor)
    @forelse($Fornecedor as $indice => $fornecedor )
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira interação do Loop
        @endif

        @if($loop->last)
            Ultima interação do Loop
            <br>
            Total de Registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!
    @endforelse     
@endisset

@php
/**{{-- declaração de variável, condição, instrução que vai incrementar a variável de controle do laço  --}}

@for ($i = 0; $i < 10 ; $i++) 
    {{$i}} <br>
@endfor**/
@endphp