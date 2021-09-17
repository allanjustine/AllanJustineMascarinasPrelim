<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Students</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('hotels.index') }}"
       class="nav-link {{ Request::is('hotels*') ? 'active' : '' }}">
        <p>Hotels</p>
    </a>
</li>


