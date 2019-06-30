<div class="table-responsive-sm">
    <table class="table table-striped" id="pedidos-table">
        <thead>
            <th>Produto Id</th>
        <th>Qtd Pedida</th>
        <th>Data Pedido</th>
        <th>Solicitante</th>
        <th>Solicitante Cep</th>
        <th>Solicitante Uf</th>
        <th>Solicitante Municipio</th>
        <th>Solicitante Bairro</th>
        <th>Solicitante Rua</th>
        <th>Solicitante Numero</th>
        <th>Solicitante Complemento</th>
        <th>Despachante</th>
        <th>Situacao</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($pedidos as $pedidos)
            <tr>
                <td>{!! $pedidos->produto_id !!}</td>
            <td>{!! $pedidos->qtd_pedida !!}</td>
            <td>{!! $pedidos->data_pedido !!}</td>
            <td>{!! $pedidos->solicitante !!}</td>
            <td>{!! $pedidos->solicitante_cep !!}</td>
            <td>{!! $pedidos->solicitante_uf !!}</td>
            <td>{!! $pedidos->solicitante_municipio !!}</td>
            <td>{!! $pedidos->solicitante_bairro !!}</td>
            <td>{!! $pedidos->solicitante_rua !!}</td>
            <td>{!! $pedidos->solicitante_numero !!}</td>
            <td>{!! $pedidos->solicitante_complemento !!}</td>
            <td>{!! $pedidos->despachante !!}</td>
            <td>{!! $pedidos->situacao !!}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedidos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pedidos.show', [$pedidos->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('pedidos.edit', [$pedidos->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>