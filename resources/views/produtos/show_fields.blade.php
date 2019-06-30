<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $produtos->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $produtos->nome !!}</p>
</div>

<!-- Valor Unitario Field -->
<div class="form-group">
    {!! Form::label('valor_unitario', 'Valor Unitario:') !!}
    <p>{!! $produtos->valor_unitario !!}</p>
</div>

<!-- Qtd Estoque Field -->
<div class="form-group">
    {!! Form::label('qtd_estoque', 'Qtd Estoque:') !!}
    <p>{!! $produtos->qtd_estoque !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $produtos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $produtos->updated_at !!}</p>
</div>

