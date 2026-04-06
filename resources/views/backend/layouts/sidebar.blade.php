<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link text-center">
        @include('backend.layouts.logo')
        <br>
        <span class="brand-text font-weight-light softappbd">
            <small>
                𝓐𝓭𝓶𝓲𝓷 𝓒𝓸𝓷𝓽𝓻𝓸𝓵 𝓟𝓪𝓷𝓮𝓵
            </small>
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('backend.layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
