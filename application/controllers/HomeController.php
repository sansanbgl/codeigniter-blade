<?php
/**
 * Home Controller (Dashboard)
 */
class HomeController extends Controller
{
    public function index()
    {
    	$data['a'] = 'aku';
        echo $this->blade->view()->make('hello', $data)->render();
    }
}
