<li class="nav-item {{ Request::is('produtos*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('produtos.index') !!}"><i class="nav-icon icon-present"></i><span>produtos</span></a>
</li>
<li class="nav-item {{ Request::is('pedidos*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('pedidos.index') !!}"><i class="nav-icon icon-wallet"></i><span>pedidos</span></a>
</li>
