{{-- Dashboard Menu Route  --}}

<li class="nav-item">
    <a href="{{ route('dashboard') }}"
        class="{{ request()->routeis('dashboard') ? 'active' : '' }} nav-link btn btn-outline-success text-left">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>


{{-- Menu Route  --}}

<li class="nav-item {{ request()->routeis(['company', 'category']) ? ' menu-is-opening menu-open' : '' }}">
    <a href="#"
        class="{{ request()->routeis(['company', 'category']) ? 'active' : '' }} nav-link btn btn-outline-success text-left">
        <i class="nav-icon fas fa-city"></i>
        <p>
            Company
            <i class="right far fa-hand-point-left"></i>
        </p>
    </a>
    <ul class="bg-secondary nav nav-treeview btn btn-outline-warning text-left">

        <li class="nav-item">
            <a href="{{ route('category') }}" class="{{ request()->routeis('category') ? 'active' : '' }} nav-link">
                <i class="nav-icon fas fa-share fa-flip-vertical"></i>
                <p>Category</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('company') }}" class="{{ request()->routeis('company') ? 'active' : '' }} nav-link">
                <i class="nav-icon fas fa-share fa-flip-vertical"></i>
                <p>Company</p>
            </a>
        </li>

    </ul>
</li>



<li class="nav-item">
    <a href="{{ route('settings') }}"
        class="{{ request()->routeis('settings') ? 'active' : '' }} nav-link btn btn-outline-success text-left">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Settings</p>
    </a>
</li>



<br><br>
