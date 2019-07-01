<!-- Id Field --> <!--
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pedidos->id !!}</p>
</div> -->

<!-- Situacao Field -->
<div class="form-group">
    {!! Form::label('situacao', 'Situação do Pedido:') !!}
    <p>{!! $pedidos->situacao !!}</p>
</div>

<!-- Produto Id Field -->
<div class="form-group">
    {!! Form::label('produto_id', 'Produto:') !!}
    <p>{!! $pedidos->produto->nome !!}</p>
</div>

<!-- Qtd Pedida Field -->
<div class="form-group">
    {!! Form::label('qtd_pedida', 'Quantidade Pedida:') !!}
    <p>{!! $pedidos->qtd_pedida !!}</p>
</div>

<!-- Data Pedido Field -->
<div class="form-group">
    {!! Form::label('data_pedido', 'Data do Pedido:') !!}
    <p>{!! date_format($pedidos->data_pedido,"d/m/Y") !!}</p>
</div>

<!-- Despachante Field -->
<div class="form-group">
    {!! Form::label('despachante', 'Despachante:') !!}
    <p>{!! $pedidos->despachante !!}</p>
</div>

<!-- Solicitante Field -->
<div class="form-group">
    {!! Form::label('solicitante', 'Solicitante:') !!}
    <p>{!! $pedidos->solicitante !!}</p>
</div>

<!-- Solicitante Rua Field -->
<div class="form-group">
    {!! Form::label('solicitante_rua', 'Rua:') !!}
    <p>{!! $pedidos->solicitante_rua !!}</p>
</div>

<!-- Solicitante Numero Field -->
<div class="form-group">
    {!! Form::label('solicitante_numero', 'Número:') !!}
    <p>{!! $pedidos->solicitante_numero !!}</p>
</div>

<!-- Solicitante Complemento Field -->
<div class="form-group">
    {!! Form::label('solicitante_complemento', 'Complemento:') !!}
    <p>{!! $pedidos->solicitante_complemento !!}</p>
</div>

<!-- Solicitante Bairro Field -->
<div class="form-group">
    {!! Form::label('solicitante_bairro', 'Bairro:') !!}
    <p>{!! $pedidos->solicitante_bairro !!}</p>
</div>

<!-- Solicitante Municipio Field -->
<div class="form-group">
    {!! Form::label('solicitante_municipio', 'Municipio:') !!}
    <p>{!! $pedidos->solicitante_municipio !!}</p>
</div>

<!-- Solicitante Uf Field -->
<div class="form-group">
    {!! Form::label('solicitante_uf', 'UF:') !!}
    <p>{!! $pedidos->solicitante_uf !!}</p>
</div>

<!-- Solicitante Cep Field -->
<div class="form-group">
    {!! Form::label('solicitante_cep', 'CEP:') !!}
    <p>{!! $pedidos->solicitante_cep !!}</p>
</div>

<!-- Created At Field --> <!--
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pedidos->created_at !!}</p>
</div> -->

<!-- Updated At Field --> <!--
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pedidos->updated_at !!}</p>
</div> -->
