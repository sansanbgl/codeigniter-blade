<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ base_url('assets/adminlte/dist/img/avatar04.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Ahsan Pratama</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Petugas Kalibrasi</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="treeview">
                <a href="{{base_url('')}}">
                <i class="fa fa-home"></i>
                <span>Beranda</span></a>

                <a href="#">
                    <i class="fa fa-folder"></i> <span>Kalibrasi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                      <a href="{{ base_url('calibration/task') }}"><i class="fa fa-circle-o"></i> Penugasan Kalibrasi</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/process') }}"><i class="fa fa-circle-o"></i> Proses Kalibrasi</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/type') }}"><i class="fa fa-circle-o"></i> Jenis Kalibrasi</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Alat Datang</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                      <a href="{{ base_url('transaction/demand') }}"><i class="fa fa-circle-o"></i> Permintaan &amp; Kaji Ulang</a>
                    </li>
                    <li>

                      <a href="{{ base_url('transaction/receivement') }}"><i class="fa fa-circle-o"></i> Penerimaan Alat Datang</a>
                    </li>
                    <li>
                      <a href="{{ base_url('transaction/order-status') }}"><i class="fa fa-circle-o"></i> Status Order</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

@section('custom-foot')
    @parent
    <script>
        $(document).ready(function(){
            $('ul.sidebar-menu a[href="' + window.location.href + '"]')
            .each(function(){
                $(this).parents('ul.sidebar-menu li').addClass('active');
                $(this).parents('ul.sidebar-menu ul.treeview-menu').addClass('open');
            })
        });
    </script>
@append
