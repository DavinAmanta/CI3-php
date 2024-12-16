<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        
        }
    public function index() {
        $this->load->view('registrasi');
    }
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password')),
            'level'     => 'Kontributor',
        );
        $this->db->insert('user',$data);
        $this->load->view('login');
    }
}
