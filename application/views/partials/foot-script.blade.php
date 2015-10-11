<!-- Bootstrap 3.3.2 -->
<link href="{{ asset('/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- FontAwesome 4.3.0 -->
<link href="{{ asset('/font-awesome-4.3.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="{{ asset('/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link href="{{ asset('/adminlte/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/site.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/adminlte/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

<script src="{{ asset('/js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery-ui.min.js') }}" type="text/javascript"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/dist/js/app.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/select2.min.js') }}" type="text/javascript"></script>
<!-- SIMTA ITS script -->
<script type="text/javascript">
    function showModalDelete(modalName, url, title, body, ids)
    {
        var modal = $('#' + modalName).clone();
        $('#delete_link', modal).attr('href', url);

        if (title) {
            $('.modal-title', modal).text(title);
        }
        if (body) {
            $('.modal-body p', modal).text(body);
        }
        if (ids) {
            $('input[name=ids]', modal).val(JSON.stringify(ids));
        }

        modal.modal();
    }

$(document).ready(function(){
    // Enhanchemet select element;
    $('select.form-control').select2();
    $('select.select2').select2();
    // button destroy handler, showing modal confirmation
    $('button.destroy').click(function(){
        var url = $(this).val();
        showModalDelete('modal-delete', url);
    });
    $('button.destroy-many').click(function(){
        var ids = [];
        $('tr td div.checked input[type=checkbox]').each(function(){
            ids.push(this.value);
        });

        if (ids.length == 0) {
            return;
        }

        var url = $(this).data('url');
        var message = 'Anda yakin ingin menghapus ' + ids.length + ' data tersebut?';
        showModalDelete('modal-delete-many', url, false, message, ids);
    });

});
</script>
