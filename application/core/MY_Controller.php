<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $website;
    protected $data = array();
    protected $langs = array();
    protected $default_lang;
    protected $current_lang;

    function __construct() {
      parent::__construct();

  }
}