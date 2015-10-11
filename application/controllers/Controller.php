<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Philo\Blade\Blade;

class Controller extends CI_Controller
{
    protected $views; 
    protected $cache;

    public function __construct()
    {
    	$this->views = 'application\views';
    	$this->cache = 'application\cache';
        $this->blade = new Blade($this->views, $this->cache);
    }
}
