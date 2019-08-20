<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class My_register_model extends CI_Model
{
 //----------------------------------Registration-page-1--------------------------------------------//
 //-------------------------------------------------------------------------------------------------//
	function register()
	{
		$name_ = $this->input->post('txtName');
		$email_ = $this->input->post('txtEmail');
		$pwd = $this->input->post('txtPwd');
   
		$this->db->where('Username', $name_);
		$this->db->or_where('Email', $email_);

		$query = $this->db->get('register_yourself');
		
		if($query->num_rows()!=0)
		{
			$bool = false;
		} 
		else 
		{
			$data = array
			(
				'Username'=>$name_,
				'Email'=>$email_,
				'Password'=>$pwd
			);
			$this->db->insert('register_yourself', $data);
			$bool = true;

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('some_basic_details', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('personal_information', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('education_&_career_details', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('lifestyle_information', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('describe_yourself', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('partner_prefrences', $data);

			$data = array(
				'Username' => $name_
			);
			$this->db->insert('feedback', $data);


			$this->session->set_userdata('user_',  $name_);

		}

		return $bool;
	}

 //----------------------------------Registration-page-2--------------------------------------------//
 //-------------------------------------------------------------------------------------------------//
	function getMothertongue()
	{
		$query = $this->db->get('mother_tongue');
		return $query->result();
	}
	function getgender()
	{
		$query = $this->db->get('gender');
		return $query->result();
	}
	function getlookingfor()
	{
		$query = $this->db->get('looking_for');
		return $query->result();
	}

	function basic_details()
	{
		$f_name_ = $this->input->post('first_name');
		$l_name_ = $this->input->post('last_name');
		$birthdate_ = $this->input->post('birthday');
		$gender_ = $this->input->post('gender');
		$tongue_ = $this->input->post('Mother_tongue');
		$searching_ = $this->input->post('looking_for');
		
			$data = array
			(
				'First_Name'=>$f_name_,
				'Last_Name'=>$l_name_,
				'Birthdate'=>$birthdate_,
				'Gender'=>$gender_,
				'Mother_Tongue'=>$tongue_,
				'Looking_For'=>$searching_,
			);
			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('some_basic_details', $data);

			$bool = true;

		return $bool;
	}

 //----------------------------------Registration-page-3--------------------------------------------//
 //-------------------------------------------------------------------------------------------------//
	function getCountry(){
		$query = $this->db->get('country');
		return $query->result();
	}
	function getReligion(){
		$query = $this->db->get('religion');
		return $query->result();
	}
	function getMartialstatus(){
		$query = $this->db->get('martial_status');
		return $query->result();
	}

	function personal_info()
	{
		$fathers_name_ = $this->input->post('name');
		$Religion_ = $this->input->post('Religion');
		$country_ = $this->input->post('Country');
		$state_ = $this->input->post('txtState');
		$marriage_ = $this->input->post('Martial_Status');
		$gothra_ = $this->input->post('Gothram');
		$nakshtra_ = $this->input->post('nakshtra');
		$data = array
			(
				'Father_Name'=>$fathers_name_,
				'Religion'=>$Religion_,
				'Country'=>$country_,
				'State'=>$state_,
				'Martial_Status'=>$marriage_,
				'Gothram/Gothra'=>$gothra_,
				'Nakshtra'=>$nakshtra_,

			);

			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('personal_information', $data);
			$bool = true;

		return $bool;
	}

  //----------------------------------Registration-page-4--------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
	function getEducationlevel()
	{
		$query = $this->db->get('education_level');
		return $query->result();
	}
	function education_career_details()
	{
		$educatin_field = $this->input->post('Education_Field');
		$education_level_ = $this->input->post('education_level');
		$gcl_ = $this->input->post('Graduation_College_Name');
		$pgcl_ = $this->input->post('Post_Graduation_College_Name');
		$working_ = $this->input->post('Currently_Working_With');
		$designation_ = $this->input->post('designation');
		$income_ = $this->input->post('Annual_Income');
		
		$data = array
			(
				'Education_field'=>$educatin_field,
				'Education_level'=>$education_level_,
				'Graduation_clg_name'=>$gcl_,
				'pg_clg_name'=>$pgcl_,
				'currently_working_with'=>$working_,
				'desigination'=>$designation_,
				'Annual_income'=>$income_,

			);
			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('education_&_career_details', $data);
			$bool = true;
		

		return $bool;
	}

   //----------------------------------Registration-page-5--------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
	function getAgefrom()
	{
		$query = $this->db->get('age_from');
		return $query->result();
	}
	function getAgeto()
	{
		$query = $this->db->get('age_to');
		return $query->result();
	}
	function getHeightfrom()
	{
		$query = $this->db->get('height_from');
		return $query->result();
	}
	function getHeightto()
	{
		$query = $this->db->get('height_to');
		return $query->result();
	}
	function lifestyle_info()
	{
		$Age_from_ = $this->input->post('age_from');
		$Age_to_ = $this->input->post('age_to');
		$height_from_ = $this->input->post('Height_From');
		$height_to_ = $this->input->post('Height_To');
		$body_type_ = $this->input->post('Body_Type');
		$skin_jone_ = $this->input->post('skin_zone');
		$smoke_ = $this->input->post('smoke');
		$drink_ = $this->input->post('Drink');
		$diet_ = $this->input->post('Diet');
		
			$data = array
			(
				'Age_from'=>$Age_from_,
				'Age_to'=>$Age_to_,
				'Height_from'=>$height_from_,
				'Height_To'=>$height_to_,
				'Body_type'=>$body_type_,
				'Skin_jone'=>$skin_jone_,
				'Smoke'=>$smoke_,
				'Drink'=>$drink_,
				'Diet'=>$diet_,

			);
			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('lifestyle_information', $data);
			$bool = true;

		return $bool;
	}

   //----------------------------------Registration-page-6--------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
	function describe_yourself()
	{
		$disability_ = $this->input->post('physical_disability');
		$about_ = $this->input->post('about');
		$address_ = $this->input->post('address');
		$mobile_ = $this->input->post('mobile_no');
		

			$data = array
			(
				'Physical_disability'=>$disability_,
				'About_yourself'=> $about_,
				'Address'=> $address_,
				'Mobile_number'=>$mobile_,
				);
			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('describe_yourself', $data);
			$bool = true;
			
			$path_id = $this->upload_tt1($this->session->userdata('user_'));
            $this->db->where('Username', $this->session->userdata('user_'));
            $data =  array(
                 'Upload_pic' => $path_id,
             );
            $this->db->update('describe_yourself', $data);
	}
    
    function upload_tt1($id)
    {
        clearstatcache();
        $config=array(
            'upload_path'=>'./Matrimonial/assets/ttdocs/',
            'allowed_types'=>'gif|jpg|png',
            'file_name'=>$id,
            'overwrite'=>TRUE,
        );

        $file_element_name='imageURL';
        $this->load->library('upload',$config);

        if($this->upload->do_upload($file_element_name))
        {
            $path_ji=$this->upload->data();
            $path_=$path_ji['file_name'];
        }
        else
        {
            $path_='x';
        }

        return $path_;
    }

    public function fetchphoto()
    {
        //$this->db->distinct('a.Username');
        $this->db->select('a.*');
        $this->db->where('a.Username',$this->session->userdata('user_'));
        $this->db->from('describe_yourself a');
        $query = $this->db->get();
        return $query->result();
    }

    public function delclass($no_)
    {
        $this->db->where('Username', $no_);
        $query = $this->db->delete("describe_yourself");
        return $query;
    }

//----------------------------------Feedback--------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
    function Feedback()
	{
		$feedback = $this->input->post('feed');
			$data = array
			(
				'Comment'=>$feedback,
			);
			$this->db->where('Username',$this->session->userdata('user_'));
         	$this->db->update('feedback', $data);
	}
	 function Feedback_print()

	{		$this->db->select('a.*');
			$this->db->where('a.Username',$this->session->userdata('user_'));
    	 	 $this->db->from('feedback a');
       
    	 	$q=$this->db->get();
         	//$this->db->last_query();die();
         	return $q;
	}
			
	//----------------------------------Partner-prefrences--------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
	function partner_prefrences()
	{
		$age_from_ = $this->input->post('agefrom');
		$age_to_ = $this->input->post('ageto');
		$height_from_ = $this->input->post('heightfrom');
		$height_to_ = $this->input->post('heightto');
		$gender_ = $this->input->post('gender');
		$looking_for_ = $this->input->post('lookingfor');
		$martial_status_ = $this->input->post('martialstatus');
		$religion_ = $this->input->post('religion');
		$mother_tongue_ = $this->input->post('mothertongue');
		$community_ = $this->input->post('community');
		

			$data = array
			(
				'Age_from'=>$age_from_,
				'Age_to'=> $age_to_,
				'Height_from'=> $height_from_,
				'Height_to'=>$height_to_,
				'Gender'=>$gender_,
				'Looking_for'=>$looking_for_,
				'Martial_status'=>$martial_status_,
				'Religion'=>$religion_,
				'Mother_tongue'=>$mother_tongue_,
				'Community'=>$community_,
			);
			$this->db->where('Username', $this->session->userdata('user_'));
			$this->db->update('partner_prefrences', $data);
			$bool = true;

		return $bool;
	}

	function getPrefrencesData($user_)
    {
    	$this->db->where('a.email', $user_);
    	$this->db->from('register_yourself a');
    	$this->db->join('some_basic_details b', 'a.Username=b.Username');
    	$this->db->join('personal_information c', 'a.Username=c.Username');
    	$this->db->join('lifestyle_information d', 'a.Username=d.Username');
    	$this->db->join('education_&_career_details e', 'a.Username=e.username');
    	$this->db->join('describe_yourself f', 'a.Username=f.Username');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->row();
    }

   //----------------------------------Login Page-----------------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
	public function log_in_correctly() 
	{  
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');

        $this->db->where('a.Email', $email);  
        $this->db->where('a.Password',  $pwd);  
		$this->db->from('register_yourself a');  
		$this->db->join('some_basic_details b', 'a.Username=b.Username');
		$query = $this->db->get();
  		//echo $this->db->last_query(); die();22
        if ($query->num_rows() != 0)  
        {  
            $row = $query->row();
            $this->session->set_userdata('user',  $email);
            $this->session->set_userdata('users',$row->Username);
          
            $this->session->set_userdata('user_status', $row->category);
            $this->session->set_userdata('gender', $row->Gender);
            $this->session->set_userdata('lookingfor', $row->Looking_For);
            return true;  
        } 
        else 
        {  
            return false;  
        }  
    }

    //----------------------------------My Profile-----------------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
    function getProfileData($user_)
    {
    	$this->db->where('a.email', $user_);
    	$this->db->from('register_yourself a');
    	$this->db->join('some_basic_details b', 'a.Username=b.Username');
    	$this->db->join('personal_information c', 'a.Username=c.Username');
    	$this->db->join('lifestyle_information d', 'a.Username=d.Username');
    	$this->db->join('education_&_career_details e', 'a.Username=e.username');
    	$this->db->join('describe_yourself f', 'a.Username=f.Username');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->row();
    }

    public function upclass()
    {
        $this->db->where('Username', $this->session->userdata('user_'));

        $data=array
        (
            'Email' =>$this->input->post('txtemail')
        );

	    $query = $this->db->update('register_yourself', $data);
	    //echo $this->db->last_query(); die();
    }

	function getProfileDatalol($user_)
    {
    	$this->db->select('a.*');
    	$this->db->where('a.Username', $user_);
    	$this->db->from('describe_yourself a');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->result();
    }

    //----------------------------------Matches-----------------------------------------------------//
  //-------------------------------------------------------------------------------------------------//
    function getmatchData()
    {
    	$this->db->distinct('a.Username');
    	$this->db->select('a.Email,b.First_Name,b.Last_Name,b.Birthdate,c.Currently_Working_With,d.Upload_pic,b.Username');
    	$this->db->where('b.Gender',$this->session->userdata('lookingfor'));
    	$this->db->from('register_yourself a');
    	$this->db->join('some_basic_details b', 'a.Username=b.Username');
    	$this->db->join('education_&_career_details c', 'a.Username=c.Username');
    	$this->db->join('describe_yourself d', 'a.Username=d.Username');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->result();
    }
    function view_match_by_person($Email)
    {
    	$this->db->distinct('a.Username');
    	$this->db->select('a.Email,b.First_Name,b.Last_Name,b.Birthdate,b.Mother_Tongue,c.Currently_Working_With,d.Upload_pic,d.Physical_disability,d.About_yourself,e.Religion,e.Country,e.State,e.Martial_Status,e.Gothram/Gothra,e.Nakshtra,f.Height_from,f.Height_To,f.Body_type,f.Skin_jone,f.Smoke,f.Drink,f.Diet,c.Education_field,c.Education_level,c.Graduation_clg_name,c.pg_clg_name,c.desigination,c.Annual_income,d.Physical_disability,d.About_yourself');
    	$this->db->where('b.Username',$Email);
    	$this->db->from('register_yourself a');
    	$this->db->join('some_basic_details b', 'a.Username=b.Username');
    	$this->db->join('education_&_career_details c', 'a.Username=c.Username');
    	$this->db->join('describe_yourself d', 'a.Username=d.Username');
    	$this->db->join('personal_information e', 'a.Username=e.Username');
    	$this->db->join('lifestyle_information f', 'a.Username=f.Username');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->result();
    }
  
    function getsomeData()
    {		
 	    $this->db->distinct('a.Username');
        $query = $this->db->get('some_basic_details a');
    	return $query->result();
    }

    function getSettingsData($user_)
    {
    	$this->db->where('a.email', $user_);
    	$this->db->from('register_yourself a');
    	$query = $this->db->get();
    	//echo $this->db->last_query(); die();
    	return $query->row();
    }
}

?>