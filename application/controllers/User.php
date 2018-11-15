<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('account_model');
    $this->load->helper('form');
  }
  
	public function index()
	{
		$data = array();
    $this->load->view('layout/header');
		$this->load->view('User');
    $this->load->view('layout/footer');
	}
  
  public function send() 
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Nome', 'required|min_length[3]|max_length[25]',
                                      array('required' => 'Você deve preencher um %s.'));
    /*$this->form_validation->set_rules('lastname', 'Sobrenome', 'required|min_length[5]|max_length[25]',
                                      array('required' => 'Você deve preencher a %s.'));*/
    //$this->form_validation->set_rules('birthday', 'Aniversario', 'required');
  //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    if ($this->form_validation->run() == FALSE) 
    {
      $erros = validation_errors();
      $this->load->view('layout/header');
      $this->load->view('user', $erros);
      $this->load->view('layout/footer');
    }
    else 
    {
      //$this->index();
      $data = array(
        'name' => 'My title',
        'lastname' => 'My Name',
        'birth_day' => 'My date',
        'sex' => 0,
        'cpf' => 1234667841,
        'email' => 'My date@com.br',
        'phone' => 'My title',
        'adress_zipcode' => 'My Name',
        'adress_number' => 'My date',
        'created' => 123456789
      );
      
      if ($this->account_model->insertPerson($data))
      {
        echo "ok";
      }
      else
      {
        $error = $this->db->error();
        print_r($error);
      }
      
      //echo "Formulário enviado com sucesso.";
      /*$date = new DateTime();
      echo $date->getTimestamp();
      echo $this->input->post('name');
      $data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
      ); */
      
      // $this->db->insert('persons', $data);

      //$this->db->insert('mytable', $data);
      // ENVIAR PRO BANCO DE DADOS AQUI
      // Retorna para pessoas ?
    }
 }
}