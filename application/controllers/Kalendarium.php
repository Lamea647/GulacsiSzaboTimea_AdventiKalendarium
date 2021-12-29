<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendarium extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');        
        $this->load->model('kalendarium_model');      
        $this->load->library('session');
    }

    public function index(){

        $tetelek = $this->kalendarium_model->naptar_feltoltese();
        $data['tetelek'] = $tetelek;

        $this->load->view('fejlec');
        $this->load->view('naptar', $data);
        $this->load->view('lablec');
    }

    public function rogzit()
    {
        $tetelek = $this->kalendarium_model->tetelek_listazasa();
        $data['tetelek'] = $tetelek;

        $this->load->view('fejlec');
        $this->load->view('rogzit');
        $this->load->view('listaz', $data);
        $this->load->view('lablec');
    }

    public function rogzit_get()
    {
        $this->load->view('rogzit');       
    }

    public function rogzit_post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tartalom', 'Tétel', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            $errors = validation_errors();
            $array['errors'] = $errors;
            $array['last_request'] = $this->input->post();
            $this->session->set_flashdata( $array );
            redirect('kalendarium/rogzit');
        }
        else
        {
            $data = [];
            $data['tartalom'] = $this->input->post('tartalom');
            $id = $this->kalendarium_model->tetel_rogzitese($data);
            $success = "<p>Sikeres Rögzítés, a létrehozott tétel azonosítója: $id</p>";
            $array['success'] = $success;
            $this->session->set_flashdata( $array );
            redirect('kalendarium/rogzit');
            
        }
    }


}

/* End of file Kalendarium.php */

?>
