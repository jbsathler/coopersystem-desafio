<div class="table-responsive-sm">
    <table class="table table-striped" id="produtos-table">
        <thead>
            <th>Nome</th>
            <th>Valor Unitário</th>
            <th>Quantidade em Estoque</th>
            <th>Situação do Produto</th>
            <th colspan="3">Ações</th>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{!! $produto->nome !!}</td>
                <td>R$ {!! money_format('%.2n', $produto->valor_unitario) !!}</td>
                <td>{!! $produto->qtd_estoque !!}</td>
                <td>
                    <span class="badge badge-{!! ($produto->qtd_estoque > 0 ? 'success': 'danger') !!}">
                        {!! ($produto->qtd_estoque > 0 ? 'Disponível': 'Indisponível') !!}
                    </span>
                </td>
                <td>
                    {!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('produtos.show', [$produto->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('produtos.edit', [$produto->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Tem certeza?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
