<?php

class Supplier extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('supplier_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_supplier()
    { 
         $data['load_suppliers']= $this->supplier_model->display_supplier();
         $data['main_content'] ='supllier/supplier_view';
         $this->load->view('includes/template', $data);  
  }
   function add_supplier()
    { 
       
          $data['main_content'] ='supllier/add_supplier';
          $this->load->view('includes/template', $data);  
  }
   function new_supplier()
     {
       //TODO: parse the info
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Supplier_no', 'Supplier no',  'required|alphanumeric');
      $this->form_validation->set_rules('Supplier_name', 'Supplier name',  'required|alpha');
      $this->form_validation->set_rules('KRA_PIN', 'KRA PIN', 'required|min_length[7]|max_length[8]');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->add_supplier();
    } 
    else
    {
         $Supplier_no=$this->input->post('Supplier_no');
         $Supplier_name=$this->input->post('Supplier_name');
         $id=$this->input->post('KRA_PIN');
         $Phone_no=$this->input->post('Phone_no');
         $Status=$this->input->post('Status');
         $Address=$this->input->post('Address');
         $supplier_since=date('Y-m-d',strtotime($this->input->post('date')));
         $Notes=$this->input->post('Note');
 

        $data=array(
        'Supplier_no'=>$Supplier_no,
        'Supplier_name'=>$Supplier_name,
        'KRA_PIN'=>$id,
        'Phone_no'=>$Phone_no,
        'Active'=>$Status,
        'Address'=>$Address,
        'supplier_since'=>$supplier_since,
        'Notes'=>$Notes,
     
      );
      //TODO: store in db
       $this->supplier_model->load_supplier($data);
       $this->session->set_flashdata('msg', $this->input->post('supplier_name').' record successfully saved');

       //TODO: refresh page
       redirect('supplier/add_supplier','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }

