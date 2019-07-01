<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Unitario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_unitario', 'Valor Unitário:') !!}
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
        </div>
        {!! Form::text('valor_unitario', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!-- Qtd Estoque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtd_estoque', 'Quantidade em Estoque:') !!}
    {!! Form::number('qtd_estoque', null, ['class' => 'form-control', 'min' => '0']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('produtos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
