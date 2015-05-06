<?php

class Requestable extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('Asset_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_requestable()
    { 
         $data['load_assets']= $this->Asset_model->display_assets();
         $data['main_content'] ='requestable/view_requestable';
         $this->load->view('includes/template', $data);  
  }
function new_requestable_asset()
  { 
         $data['main_content'] ='requestable/add_requestable';
         $this->load->view('includes/template', $data);  
  }
function add_requestable()
     {
       //TODO: parse the info
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Serial', 'Serial code',  'required');
//$this->form_validation->set_rules('Order_no', 'Order No',  'required|numeric');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->new_archived_asset();
    } 
    else
    {
         $Serial=$this->input->post('Serial');
         $Name=$this->input->post('Asset_name');
         $Brand=$this->input->post('Brand');
         $Category=$this->input->post('Category');
         $Nature=$this->input->post('Nature');
         $Supplier=$this->input->post('Supplier');
         $Order_no=$this->input->post('Order_no');
         $Date=date('Y-m-d',strtotime($this->input->post('Date_purchased')));
         $Purchase_cost=$this->input->post('Purchase_cost');
         $Warranty=$this->input->post('Warranty');
         $Status=$this->input->post('Status');
         $Location=$this->input->post('Location');
         $D_type=$this->input->post('D_type');
         $D_rate=$this->input->post('D_rate');
         $Notes=$this->input->post('Note');
         $User=$this->input->post('User');

 

        $data=array(
          'Serial_code'=>$Serial,
        'Item_name'=>$Name,
        'Brand'=>$Brand,
        'Category'=>$Category,
        'Nature'=>$Nature,
        'Supplier'=>$Supplier,
        'Order_no'=>$Order_no,
        'Date_purchased'=>$Date,
        'Purchase_cost'=>$Purchase_cost,
        'Warranty'=>$Warranty,
        'Status'=>$Status,
        'Location'=>$Location,
        'Depreciation_type'=>$D_type,
        'Depreciation_rate'=>$D_rate,
        'Description'=>$Notes,
        'User'=>$User,
     
      );
      //TODO: store in db an show notification
       $this->Asset_model->load_asset($data);
       $this->session->set_flashdata('msg');

       //TODO: refresh page
       redirect('requestable/new_requestable_asset','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }


