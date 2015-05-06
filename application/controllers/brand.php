<?php

class Brand extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('Brand_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_brand()
    { 
         $data['load_brand']= $this->Brand_model->display_brand();
         $data['main_content'] ='brand/view_brand';
         $this->load->view('includes/template', $data);  
  }
  function new_brand()
    { 
         $data['main_content'] ='brand/new_brand';
         $this->load->view('includes/template', $data);  
  }
  function add_brand(){

$this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Model', 'Model',  'required');
//$this->form_validation->set_rules('Order_no', 'Order No',  'required|numeric');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->new_asset();
    } 
    else
    {
         $Model=$this->input->post('Model');
         $Category=$this->input->post('Category');
         $Manufacturer=$this->input->post('Manufacturer');
         $Note=$this->input->post('Note');
        

        $data=array(
        'Brand'=>$Model,
        'Category'=>$Category,
        'Manufacturer'=>$Manufacturer,
        'Note'=>$Note,
       
     
      );
      //TODO: store in db an show notification
       $this->Brand_model->load_brand($data);
       $this->session->set_flashdata('msg');

       //TODO: refresh page
       redirect('brand/new_brand','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }

