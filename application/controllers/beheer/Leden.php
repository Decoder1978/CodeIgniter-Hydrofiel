<?php
/**
 * Class Leden
 * Handles all beheer functionality related to Leden
 */
class Leden extends _BeheerController {
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Load Leden overzichts page
     */
    public function index(){
        $data['success'] = $this->session->flashdata('success');
        $data['fail'] = $this->session->flashdata('fail');
        $data['leden'] = $this->profile_model->get_profile();
        $this->loadView('beheer/leden/leden', $data);
    }

    /**
     * Load a form where a leden.csv file can be uploaded
     */
    public function importeren(){
        $this->load->helper('form');
        $this->loadView('beheer/leden/importeren');
    }


}