<?php
/**
 * Home Controller (Dashboard)
 */
class TransaksiKeluarController extends Controller
{
    public function index()
    {
        $data['a'] = 'aku';
        return $this->blade->view()->make('pages/welcome', $data)->render();
    }
}
