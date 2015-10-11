<?php
namespace template;

/**
 *
 */
class Template
{

    public $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function load($pages, $data = array())
    {
    	$this->ci->load->view('', $data);
    	$this->ci->load->view('', $data);
    	$this->ci->load->view('', $data);
    }
}
