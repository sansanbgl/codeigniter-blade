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
                <p>Unit</p>
                <a href="#"><i class="fa fa-circle text-success"></i></a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="treeview">
                <a href="{{base_url('')}}">
                <i class="fa fa-home"></i>
                <span>Beranda</span></a>

                <a href="#">
                    <i class="fa fa-folder"></i> <span>Referensi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                      <a href="{{ base_url('calibration/task') }}"><i class="fa fa-circle-o"></i>UAPB</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/process') }}"><i class="fa fa-circle-o"></i>Wilayah</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/type') }}"><i class="fa fa-circle-o"></i>Kanwil</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/type') }}"><i class="fa fa-circle-o"></i>Sub-sub kelompok barang</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/type') }}"><i class="fa fa-circle-o"></i>Tabel barang</a>
                    </li>
                    <li>
                      <a href="{{ base_url('calibration/type') }}"><i class="fa fa-circle-o"></i>Penanda Tangan</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Transaksi</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i><span>Masuk</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Saldo Awal</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Pembelian</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Transfer Masuk</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Hibah Masuk</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Rampasan</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Perolehan Lainnya</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i><span>Keluar</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Habis Pakai</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Transfer Keluar</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Hibah Keluar</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Usang</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Rusak</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-circle-o"></i>Penghapusan Lainnya</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                      <a href="{{ base_url('transaction/demand') }}"><i class="fa fa-circle-o"></i>Koreksi</a>
                    </li>
                    <li>
                      <a href="{{ base_url('transaction/receivement') }}"><i class="fa fa-circle-o"></i>Opname Fisik</a>
                    </li>
                    <li>
                      <a href="{{ base_url('transaction/order-status') }}"><i class="fa fa-circle-o"></i>Penghapusan Usang Rusak</a>
                    </li>
                    <li>
                      <a href="{{ base_url('transaction/order-status') }}"><i class="fa fa-circle-o"></i>Konversi Hasil Migrasi</a>
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
