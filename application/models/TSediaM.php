<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TSediaM extends Model
{
    public $jns_trn = array(
        'M01' => 'Saldo Awal',
        'M02' => 'Pembelian',
        'M03' => 'Transfer Masuk',
        'M04' => 'Hibah (Masuk)',
        'M05' => 'Rampasan',
        'M06' => 'Perolehan Lainnya',
        'K01' => 'Habis Pakai',
        'K02' => 'Transfer Keluar',
        'K03' => 'Hibah Keluar',
        'K04' => 'Barang Usang',
        'K05' => 'Barang Rusak',
        'K06' => 'Penghapusan Lainnya',
        'M99' => 'Koreksi Tambah',
        'K99' => 'Koreksi Kurang',
        'P01' => 'Hasil Opname Fisik',
        'H01' => 'Hapus Usang',
        'H02' => 'Hapus Rusak',
        'M09' => 'Koreksi Hasil Migrasi',
    );

    public function checkJnsTrn($jns_trn_key = null)
    {
        foreach ($this->jns_trn as $key => $jns_trn) {
            if ($key == $jns_trn_key) {
                return true;
            }
        }
        return false;
    }

    public function getWhere($params = array())
    {
        foreach ($param as $key => $param) {

        }
    }
}
