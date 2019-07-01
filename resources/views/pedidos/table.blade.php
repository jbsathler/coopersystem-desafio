<div class="table-responsive-sm">
    <table class="table table-striped" id="pedidos-table">
        <thead>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Solicitante</th>
            <th>Despachante</th>
            <th>Situação</th>
            <th colspan="3">Ações</th>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{!! $pedido->produto->nome !!}</td>
                <td>{!! $pedido->qtd_pedida  !!}</td>
                <td>{!! date_format($pedido->data_pedido,"d/m/Y") !!}</td>
                <td>{!! $pedido->solicitante !!}</td>
                <td>{!! $pedido->despachante !!}</td>
                <td>{!! $pedido->situacao    !!}</td>
                <td>
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pedidos.show', [$pedido->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('pedidos.edit', [$pedido->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
