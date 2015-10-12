<?php
/**
 * Home Controller (Dashboard)
 */
class HomeController extends Controller
{
    public function index()
    {
        $data['a'] = 'aku';
        return $this->blade->view()->make('pages/welcome', $data)->render();
    }
}
