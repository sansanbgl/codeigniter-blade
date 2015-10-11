<!DOCTYPE html>
<html>
<head>
 {{--    @include('partials.head') --}}
    @yield('custom-head')
</head>
<body class="skin-blue">
    <div class="wrapper">     
        {{-- @include('partials.header') --}}
        
        {{-- @include('partials.sidebar') --}}

        <div class="content-wrapper">
            <section class="content-header">
                {{-- @yield('content-header') --}}
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>

        {{-- @include('partials.footer') --}}

    </div>
   {{--  @include('partials.foot-script')
    @yield('custom-foot')
    @include('partials.modal-delete') --}}
</body>
</html>