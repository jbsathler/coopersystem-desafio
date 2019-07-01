<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $produtos->id !!}</p>
</div> -->

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $produtos->nome !!}</p>
</div>

<!-- Valor Unitario Field -->
<div class="form-group">
    {!! Form::label('valor_unitario', 'Valor Unitário:') !!}
    <p>R$ {!! money_format('%.2n', $produtos->valor_unitario) !!}</p>
</div>

<!-- Qtd Estoque Field -->
<div class="form-group">
    {!! Form::label('qtd_estoque', 'Quantidade em Estoque:') !!}
    <p>{!! $produtos->qtd_estoque !!}</p>
</div>

<!-- Qtd Estoque Field -->
<div class="form-group">
    {!! Form::label('qtd_estoque', 'Situação do Produto:') !!}
    <p>
        <span class="badge badge-{!! ($produtos->qtd_estoque > 0 ? 'success': 'danger') !!}">
            {!! ($produtos->qtd_estoque > 0 ? 'Disponível': 'Indisponível') !!}
        </span>
    </p>
</div>

<!-- Created At Field -->
<!-- <div class="form-group">
    {!! Form::label('created_at', 'Criado em:') !!}
    <p>{!! $produtos->created_at !!}</p>
</div> -->

<!-- Updated At Field -->
<!-- <div class="form-group">
    {!! Form::label('updated_at', 'Atualizado em:') !!}
    <p>{!! $produtos->updated_at !!}</p>
</div> -->
