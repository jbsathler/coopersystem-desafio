<div class="row">
    <!-- Situacao Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('situacao', 'Situação do Pedido:') !!}
        {!! Form::select('situacao', ['Pendente de envio' => 'Pendente de envio', 'Enviado' => 'Enviado', 'Entregue' => 'Entregue'], null, ['class' => 'form-control']) !!}
    </div>

    <!-- Produto Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('produto_id', 'Produto Id:') !!}
        {!! Form::select('produto_id', $produtos, null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <!-- Qtd Pedida Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('qtd_pedida', 'Qtd Pedida:') !!}
        {!! Form::number('qtd_pedida', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Data Pedido Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('data_pedido', 'Data Pedido:') !!}
        {!! Form::text('data_pedido', null, ['class' => 'form-control','id'=>'data_pedido']) !!}
    </div>

    @section('scripts')
    <script type="text/javascript">
    $('#data_pedido').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })
    </script>
    @endsection
</div>

<div class="row">
    <!-- Despachante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('despachante', 'Despachante:') !!}
        {!! Form::text('despachante', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Solicitante Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('solicitante', 'Solicitante:') !!}
        {!! Form::text('solicitante', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div>
    <h6>Endereço do Solicitante</h6>

    <div class="row">
        <!-- Solicitante Rua Field -->
        <div class="form-group col-sm-5">
            {!! Form::label('solicitante_rua', 'Rua:') !!}
            {!! Form::text('solicitante_rua', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Solicitante Numero Field -->
        <div class="form-group col-sm-1">
            {!! Form::label('solicitante_numero', 'Número:') !!}
            {!! Form::text('solicitante_numero', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Solicitante Complemento Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('solicitante_complemento', 'Complemento:') !!}
            {!! Form::text('solicitante_complemento', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="row">
        <!-- Solicitante Bairro Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('solicitante_bairro', 'Bairro:') !!}
            {!! Form::text('solicitante_bairro', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Solicitante Municipio Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('solicitante_municipio', 'Município:') !!}
            {!! Form::text('solicitante_municipio', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Solicitante Uf Field -->
        <div class="form-group col-sm-1">
            {!! Form::label('solicitante_uf', 'UF:') !!}
            {!! Form::select('solicitante_uf', ['AC' => 'AC', 'AL' => 'AL', 'AM' => 'AM', 'AP' => 'AP', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MG' => 'MG', 'MS' => 'MS', 'MT' => 'MT', 'PA' => 'PA', 'PB' => 'PB', 'PE' => 'PE', 'PI' => 'PI', 'PR' => 'PR', 'RJ' => 'RJ', 'RN' => 'RN', 'RO' => 'RO', 'RR' => 'RR', 'RS' => 'RS', 'SC' => 'SC', 'SE' => 'SE', 'SP' => 'SP', 'TO' => 'TO'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Solicitante Cep Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('solicitante_cep', 'CEP:') !!}
            {!! Form::text('solicitante_cep', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
