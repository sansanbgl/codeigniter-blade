<?php
/**
 * Home Controller (Dashboard)
 */
class TransaksiMasukController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TSediaM', 'tsediam');
    }
    public function index()
    {
        $data['a'] = 'aku';
        return $this->blade->view()->make('pages/welcome', $data)->render();
    }

    public function transaction()
    {

        $jns_trn = $this->input->get('jns_trn');
        if ($jns_trn != null) {
            if ($this->tsediam->checkJnsTrn($jns_trn)) {
                $data['jns_trn'] = $jns_trn;
                $data['tsediam'] = $this->tsediam->getWhere($data);
            } else {

            }
            return $this->blade->view()->make('pages/transaction/in', $data)->render();
        } else {

        }
    }
}
