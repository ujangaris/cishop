<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    protected $table = '';


    public function __construct()
    {
        parent::__construct();

        if (!$this->table) {
            $this->table = strtolower(
                str_replace('_model', '', get_class($this))
            );
        }
    }


    /** 
     * load view with default layout
     * Rules: Dideklarasikan dalam masing-masing model
     * */
    public function validate()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters(
            '<small class="form-text text-danger">',
            '</small>'
        );
        $validationRules = $this->getValidationRules();

        $this->form_validation->set_rules($validationRules);

        return $this->form_validation->run();
    }
}

/* End of file MY_Model.php */
