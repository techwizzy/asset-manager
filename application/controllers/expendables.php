<?php

class Expendables extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('Expendable_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_expendables()
    { 
        $data['load_expendables']= $this->Expendable_model->display_expendables();
         $data['main_content'] ='expendables/expendables_view';
         $this->load->view('includes/template', $data);  
  }
  function new_expendables()
    { 
        //$data['load_accesory']= $this->Accesory_model->display_accesory();
         $data['main_content'] ='expendables/add_expendables';
         $this->load->view('includes/template', $data);  
  }
 function add_expendables()
     {
       //TODO: parse the info
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Item_name', 'Item name',  'required');
      $this->form_validation->set_rules('Order_no', 'Order no',  'required');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->add_expendables();
    } 
    else
    {
         $Item_name=$this->input->post('Item_name');
         $Order_no=$this->input->post('Order_no');
         $Brand=$this->input->post('Brand');
         $Category=$this->input->post('Category');
         $Supplier=$this->input->post('Supplier');
         $Date=date('Y-m-d',strtotime($this->input->post('date')));
         $Location=$this->input->post('Location');
         $Notes=$this->input->post('Note');
         $Check_out=$this->input->post('User');
 

        $data=array(
        'Item_name'=>$Item_name,
        'Order_no'=>$Order_no,
        'Brand'=>$Brand,
        'Category'=>$Category,
        'Supplier'=>$Supplier,
        'date'=>$Date,
        'Location'=>$Location,
        'description'=>$Notes,
        'Checked_out_to'=>$Check_out,
     
      );
      //TODO: store in db
       $this->Expendable_model->load_expendables($data);
       $this->session->set_flashdata('msg', $this->input->post('Item_name') .'record added successfully');

       //TODO: refresh page
       redirect('expendables/new_expendables','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }

