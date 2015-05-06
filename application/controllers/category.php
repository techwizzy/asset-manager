<?php

class Category extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('Category_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_category()
    { 
         $data['load_category']= $this->Category_model->display_category();
         $data['main_content'] ='category/view_category';
         $this->load->view('includes/template', $data);  
  }
   function new_category()
    { 
         $data['main_content'] ='category/add_category';
         $this->load->view('includes/template', $data);  
  }
function add_category()
     {
       //TODO: parse the info
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Category', 'Category name',  'required');
//$this->form_validation->set_rules('Order_no', 'Order No',  'required|numeric');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->new_category();
    } 
    else
    {
         $Category=$this->input->post('Category');
         
         $Note=$this->input->post('Note');

        $data=array(
         
        'Category_name'=>$Category,
        'Note'=>$Note,
     
      );
      //TODO: store in db an show notification
       $this->Category_model->load_category($data);
       $this->session->set_flashdata('msg');

       //TODO: refresh page
       redirect('category/new_category','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }

