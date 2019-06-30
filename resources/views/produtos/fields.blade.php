<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', 'Valor Unitário:') !!}
    {!! Form::text('valor_unitario', null, ['class' => 'form-control']) !!}
</div>

<!-- Qtd Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_estoque', 'Quantidade em Estoque:') !!}
    {!! Form::text('qtd_estoque', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('produtos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
