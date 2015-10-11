<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> {{ env('APP_VERSION') }}
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="{{ env('DEVELOPER_URL') }}">{{ env('DEVELOPER_NAME') }}</a>.</strong> All rights reserved.
</footer>