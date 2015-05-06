<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{


   public function __construct()
    {

       parent::__construct();
        $data['site_name'] = $this->config->item( 'site_name' ); 
        //$this->load->model('purchase_model');
        $this->load->vars( $data ); 
    }
   

   function index()
    { 
          $data['page_title'] = 'Asset'; 
          $data['chartaccounts']=$this->asset_model->get_chartaccount();
          $data['main_content'] = 'asset_view/asset_home';
          $this->load->view('includes/template', $data);

    }
  //display register user form
    function load_user_registration_form(){
       //$data['page_title'] = 'Create new User'; //display page title
       $data['main_content'] = 'personnel/add_user';
       $this->load->view('includes/template', $data);

    }
   function add_employee()
     {

      //TODO: parse the info
      $this->form_validation->set_error_delimiters('<div style="color:red" class="alert alert-danger">', '</div>');

      $this->form_validation->set_rules('firstname', 'First name',  'required|alpha');
      $this->form_validation->set_rules('lastname', 'Last name',  'required|alpha');
      $this->form_validation->set_rules('pin', 'Employee Number', 'required|min_length[7]|max_length[8]');
      //$this->form_validation->set_rules('phone', 'Phone Number', 'min_length[10]|max_length[12]');
      //$this->form_validation->set_rules('taxno', 'Tax Number', 'xss_clean|alpha_numeric');

    if ($this->form_validation->run() == FALSE)
    {
      $this->index();
    }else{
       // $salt=uniqid(mt_rand(), true);//generate a salt
        $pass=md5($this->input->post('password'));
        $regDate=date('Y-m-d',strtotime($this->input->post('regdate')));
        $id=$this->input->post('pin');

      $data=array(
      'Employee_no'=>$this->input->post('id_number'),
      'Firstname'=>$this->input->post('firstname'),
      'Lastname'=>$this->input->post('lastname'),
      'Username'=>$this->input->post('username'),
      'Salutation'=>$this->input->post('title'),
      'Password'=>$pass,
      'Isallowed'=>$this->input->post('allow'),
      'Phone_no'=>$this->input->post('phone'),
      'Address'=>$this->input->post('address'),
      //'Town'=>$this->input->post('town'),
      'Photo_tag'=>$this->input->post('picture_name'),
      'Notes'=>$this->input->post('description')

      );
      //TODO: store in db
       $this->employee_model->save_new_record($data);
       //mkdir for the user
      
          $path = "images/$id/";

         if(!is_dir($path)) //create the folder if it's not already exists
          {
           mkdir($path,0755,TRUE);
             //upload image
   
           $this->do_upload($id);
          } 
     
       
       //TODO: if the yes checkbox is selected, save the user details in the user table
       if($this->input->post('allow') =='Yes'){
            $user_data=array(
             'Title'=>$this->input->post('role'),
             'Username'=>$this->input->post('username'),
             'Password'=>$passphrase,
             //'Salt'=>$salt,
             'Firstname'=>$this->input->post('firstname'),
             'Lastname'=>$this->input->post('lastname'),
             'Status'=>'active'        
          ); 
      //save user data in the database
          $this->employee_model->save_new_user_record($user_data);
        }

      //TODO: return an appropriate message
       $this->session->set_flashdata('msg', $this->input->post('firstname'). ' '.$this->input->post('lastname'). ' record successfully saved');

       //TODO: refresh page
       redirect('employee/index','refresh');
      }
     }
}