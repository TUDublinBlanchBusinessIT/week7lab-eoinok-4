<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <p>Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courts.index') }}"
       class="nav-link {{ Request::is('courts*') ? 'active' : '' }}">
        <p>Courts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('bookings.index') }}"
       class="nav-link {{ Request::is('bookings*') ? 'active' : '' }}">
        <p>Bookings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('scorders.index') }}"
       class="nav-link {{ Request::is('scorders*') ? 'active' : '' }}">
        <p>Scorders</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('orderdetails.index') }}"
       class="nav-link {{ Request::is('orderdetails*') ? 'active' : '' }}">
        <p>Orderdetails</p>
    </a>
</li>


