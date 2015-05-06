<?php

class Users extends CI_Controller 
{


	  public function __construct()
    {

       parent::__construct();
      $this->load->model('User_model');
      $this->gallery_path = realpath(APPPATH . '../images');
      $this->gallery_path_url = base_url().'images/';
      $data['site_name'] = $this->config->item( 'site_name' ); 
      $this->load->vars( $data );
      } 
   function index()
    { 
    
              $this->load->view('index');  
  }
   function view_all_users()
    { 
         $data['load_employees']= $this->User_model->get_all_employees();
         $data['main_content'] ='users/view_all_users';
         $this->load->view('includes/template', $data);  
  }
   function view_system_users()
    {    
         $data['load_system_users']= $this->User_model->display_system_users();
         $data['main_content'] ='users/view_system_users';
         $this->load->view('includes/template', $data);  
  }
   function create_new_user()
    { 
         $data['main_content'] ='users/add_user';
         $this->load->view('includes/form_template', $data);  
    }
  function add_user()
  {
     //validate the new user data<span class="label label-important">Important</span>
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<span class="label label-important">', '</span>');
      $this->form_validation->set_rules('Firstname', 'Firstname', 'trim|required');
      $this->form_validation->set_rules('Lastname', 'Lastname', 'trim|required');
      $this->form_validation->set_rules('employeeNo', 'Employee No', 'trim|required');
      $this->form_validation->set_rules('email', 'Email','trim|valid_email');
      $this->form_validation->set_rules('Office_no', 'Office_no', 'trim');
      $this->form_validation->set_rules('Department', 'Department', 'trim'); 
      $this->form_validation->set_rules('Username', 'Username', 'trim');
      $this->form_validation->set_rules('Location', 'Location', 'trim');
    if ($this->form_validation->run() == FALSE)
    {
      $this->Create_new_user();
    } 
    else
    {
         $Firstname=$this->input->post('Firstname');
         $Lastname=$this->input->post('Lastname');
         $email=$this->input->post('email');
         $Employee_no=$this->input->post('employeeNo');
         $Job_title=$this->input->post('Job_title');
         $Department=$this->input->post('Department');
         $Office_no=$this->input->post('Office_no');
         $Isallowed=$this->input->post('allow');
         $Username=$this->input->post('Username');
         $Passphrase=md5($this->input->post('passphrase'));        
         $Date=date('Y-m-d',strtotime($this->input->post('date')));
         $Location=$this->input->post('Location');
         $Picture_name=$_FILES["Picture_name"]["name"];
         $Notes=$this->input->post('Note');
       
 

        $data=array(
          
        'Firstname'=>$Firstname,
        'Lastname'=>$Lastname,
        'Email'=>$email,
        'Employee_no'=>$Employee_no,
        'Job_title'=>$Job_title,
        'Department'=>$Department,
        'Office_no'=>$Office_no,
        'Isallowed'=>$Isallowed,
        'Username'=>$Username,
        'Password'=>$Passphrase,
        'Registered_date'=>$Date,
        'Location'=>$Location,
        'Image'=>$Picture_name,
        'Notes'=>$Notes,
        
     
      );
      //TODO: store in db an show notification
       $this->User_model->insert_employee_data($data);

          if($Isallowed=$this->input->post('allow') =='Yes'){
            $user_data=array(
             'Job_title'=>$Job_title,
             'Username'=>$Username,
             'Password'=>$Passphrase,
             'Firstname'=>$Firstname,
             'Lastname'=>$Lastname,
             'Isallowed'=>$Isallowed,        
          ); 
      //save user data in the database
          $this->User_model->insert_users($user_data);
        }

       $msg="Success! user added";
       $this->session->set_flashdata('msg', $msg);
       mkdir("uploads/".$Employee_no."/");
       $target_dir = "uploads/".$Employee_no."/";
       $target_file = $target_dir . basename($_FILES["Picture_name"]["name"]);
       move_uploaded_file($_FILES["Picture_name"]["tmp_name"], $target_file);
       //TODO: refresh page
       redirect('users/create_new_user','refresh');

        }

      //TODO: return an appropriate message
       
      }
  public function save_edited_user_data(){
  //validate the new user data<span class="label label-important">Important</span>
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<span class="label label-important">', '</span>');
      $this->form_validation->set_rules('Firstname', 'Firstname', 'trim|required');
      $this->form_validation->set_rules('Lastname', 'Lastname', 'trim|required');
      //$this->form_validation->set_rules('employeeNo', 'Employee No', 'trim|required');
      $this->form_validation->set_rules('email', 'Email','trim|valid_email');
      $this->form_validation->set_rules('Office_no', 'Office_no', 'trim');
      $this->form_validation->set_rules('Department', 'Department', 'trim'); 
      $this->form_validation->set_rules('Username', 'Username', 'trim');
      $this->form_validation->set_rules('Location', 'Location', 'trim');
    if ($this->form_validation->run() == FALSE)
    {
      $this->Create_new_user();
    } 
    else
    {
         $Firstname=$this->input->post('Firstname');
         $Lastname=$this->input->post('Lastname');
         $email=$this->input->post('email');
         $Employee_no=$this->input->post('employeeNo');
         $Job_title=$this->input->post('Job_title');
         $Department=$this->input->post('Department');
         $Office_no=$this->input->post('Office_no');
         $Isallowed=$this->input->post('allow');
         $Username=$this->input->post('Username');
         $Passphrase=md5($this->input->post('passphrase'));        
         $Date=date('Y-m-d',strtotime($this->input->post('date')));
         $Location=$this->input->post('Location');
         
         $Notes=$this->input->post('Note');
         if($_FILES["Picture_name"]["name"]!=''){
         $Picture_name=$_FILES["Picture_name"]["name"];
         }else{
         $Picture_name=$this->input->post('Image');
         }
 

        $data=array(
          
        'Firstname'=>$Firstname,
        'Lastname'=>$Lastname,
        'Email'=>$email,
        'Job_title'=>$Job_title,
        'Department'=>$Department,
        'Office_no'=>$Office_no,
        'Isallowed'=>$Isallowed,
        'Username'=>$Username,
        'Password'=>$Passphrase,
        'Registered_date'=>$Date,
        'Location'=>$Location,
        'Image'=>$Picture_name,
        'Notes'=>$Notes,
        
     
      );
      //TODO: store in db an show notification
       $this->User_model->update_employee_data($data,$Employee_no);
       $result=$this->User_model->check_user_exist($Username);
       if(!$result){
          if($Isallowed=$this->input->post('allow') =='Yes'){
            $user_data=array(
             'Job_title'=>$Job_title,
             'Username'=>$Username,
             'Password'=>$Passphrase,
             'Firstname'=>$Firstname,
             'Lastname'=>$Lastname,
             'Isallowed'=>$Isallowed,        
          ); 
      //save user data in the database
          $this->User_model->insert_users($user_data);
        }
       }
       $msg="Success! user edited";
       $this->session->set_flashdata('msg', $msg);
       
       $target_dir = "uploads/".$Employee_no."/";
       if(!is_dir($target_dir)) {
        mkdir("uploads/".$Employee_no."/");
        } 
       $target_file = $target_dir . basename($_FILES["Picture_name"]["name"]);
       move_uploaded_file($_FILES["Picture_name"]["tmp_name"], $target_file);
       //TODO: refresh page
       redirect('users/edit_this_user/'.$Employee_no,'refresh');

        }
  }

   function edit_this_user($id)
    { 
         $data['page_title'] = 'Edit User'; 
         $data['user_data']=$this->User_model->get_this_user($id);
         $data['main_content'] ='users/edit_user';
         $this->load->view('includes/form_template', $data);  
    }





  function do_upload()
  {
    $config['upload_path'] = realpath(APPPATH .'../uploads/');
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '100';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
         $data['error'] = array('error' => $this->upload->display_errors());
         $data['main_content'] ='users/add_user';
         $this->load->view('includes/form_template', $data); 
    
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

     
    }
  }
     }

