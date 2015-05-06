<?php

class Accesory extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('Accesory_model');
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_accesory()
    { 
         $data['load_accesory']= $this->Accesory_model->display_accesory();
         $data['main_content'] ='accesories/accesories_view';
         $this->load->view('includes/template', $data);  
  }
  function new_accesory(){
    $data['main_content']='accesories/add_accesories';
    $this->load->view('includes/template',$data);
  }
 function add_accesory()
     {
       //TODO: parse the info
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('Accesory_name', 'Accesory name',  'required|alpha');
      $this->form_validation->set_rules('Order_no', 'Order No',  'required|numeric');
     

    if ($this->form_validation->run() == FALSE)
    {
      $this->add_accesory();
    } 
    else
    {
         $Accesory_name=$this->input->post('Accesory_name');
         $Brand=$this->input->post('Brand');
         $Category=$this->input->post('Category');
         $Supplier=$this->input->post('Supplier');
         $Order_no=$this->input->post('Order_no');
         $Date=date('Y-m-d',strtotime($this->input->post('date')));
         $Purchase_cost=$this->input->post('Purchase_cost');
         $Warranty=$this->input->post('Warranty');
         $Status=$this->input->post('Status');
         $Location=$this->input->post('Location');
         //$Image_file=$this->input->post('Image_file');
         $Notes=$this->input->post('Note');
 

        $data=array(
        'Accesory_name'=>$Accesory_name,
        'Brand'=>$Brand,
        'Category'=>$Category,
        'Supplier'=>$Supplier,
        'Order_no'=>$Order_no,
        'Purchase_date'=>$Date,
        'Cost'=>$Purchase_cost,
        'Warranty'=>$Warranty,
        'Status'=>$Status,
        'Location'=>$Location,
        //'Image_file'=>$Image,
        'Notes'=>$Notes,
     
      );
      //TODO: store in db
       $this->Accesory_model->load_accesory($data);
       $this->session->set_flashdata('msg', $this->input->post('accesory_name').'record added successfully');

       //TODO: refresh page
       redirect('accesory/new_accesory','refresh');

        }

      //TODO: return an appropriate message
       
      }
     }

