<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.app_head')

<body>
    <div id="app">
        @include('layouts.partials.app_sidebar')

        <div id="main" class="layout-navbar navbar-fixed">
            @include('layouts.partials.app_navbar')

            <div id="main-content">
                <!-- Page header -->
                @if (isset($header))
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>{{ $header }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <section class="section">
                    {{ $slot }}
                </section>
            </div>
            
            <form method="POST" id="logout_form" action="{{ route('logout') }}">
                @csrf
            </form>

            @include('layouts.partials.app_footer')
        </div>

    </div>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/@fortawesome/fontawesome-free/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>