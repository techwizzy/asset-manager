<?php

class Licenses extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('License_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_license()
    { 
         $data['load_license']= $this->License_model->display_licenses();
         $data['main_content'] ='licenses/view_licenses';
         $this->load->view('includes/template', $data);  
  }
   function new_license()
    { 
         $data['main_content'] ='licenses/add_licenses';
         $this->load->view('includes/template', $data);  
  }
function add_license()
     {
       //TODO: parse the info
      $this->load->library('javascript');
      //$this->load->library('jQuery');
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Serial', 'Serial',  'required');
      $this->form_validation->set_rules('Email', 'Licensed to Email',  'required');

     

    if ($this->form_validation->run() == FALSE)
    {
      $this->add_license();
    } 
    else
    {
         $Software=$this->input->post('Software_name');
         $Serial=$this->input->post('Serial');
         $Name=$this->input->post('Name');
         $Email=$this->input->post('Email');
         $Users=$this->input->post('Users');
         $Supplier=$this->input->post('Supplier');
         $Order_no=$this->input->post('Order_no');
         $Date=date('Y-m-d',strtotime($this->input->post('Date_purchased')));
         $Cost=$this->input->post('Purchase_cost');
         $Date_exp=date('Y-m-d',strtotime($this->input->post('Date_expired')));
         $D_type=$this->input->post('D_type');
         $D_rate=$this->input->post('D_rate');
         $Status=$this->input->post('Maintained');
         $Notes=$this->input->post('Note');
 

        $data=array(
        'Software_name'=>$Software,
        'Serial'=>$Serial,
        'Licensed_to'=>$Name,
        'Email'=>$Email,
        'Users'=>$Users,
        'Supplier'=>$Supplier,
        'Order_no'=>$Order_no,
        'Date_purchased'=>$Date,
        'Cost'=>$Cost,
        'Expiration_date'=>$Date_exp,
        'Depreciation_type'=>$D_type,
        'Depreciation_rate'=>$D_rate,
        'Maintained'=>$Status,
        'Notes'=>$Notes,
     
      );
      //TODO: store in db
       $this->License_model->load_licenses($data);
       $this->session->set_flashdata('msg');


       //TODO: refresh page
       redirect('licenses/new_license','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }
     ?>

