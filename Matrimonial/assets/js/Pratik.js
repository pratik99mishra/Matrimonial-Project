$(function()
{

//------------------------------------------Registration-Page-1--------------------------------//
//-------------------------------------------------------------------------------------------//
    $('#page1').submit(function()
    {
		if($.trim($('#txtName').val()) == '')
		{
			alert('Please Enter Username');
		} 
		else if($.trim($('#txtEmail').val()) == '')
		{
			alert('Please Enter valid email');
		}
		else if($.trim($('#txtPwd').val()) == '')
		{
			alert('Please Enter strong password');
		}
		else 
		{
			$('#page1').submit();
		}
		return false;
	});

//----------------------------------------------Registration-page-2--------------------------------//
//-------------------------------------------------------------------------------------------------//
	$('#page2').submit(function()
    {
		if($.trim($('#first_name').val()) == '')
		{
			alert('Please Enter First Name');
		} 
		else if($.trim($('#last_name').val()) == '')
		{
			alert('Please Enter Last Name');
		}
		else if($.trim($('#birthday').val()) == '')
		{
			alert('Please Enter Date-of-birth');
		}
		else if($.trim($('#gender').val()) == '')
		{
			alert('Please Enter Gender');
		} 
		else if($.trim($('#Mother_tongue').val()) == '')
		{
			alert('Please Enter Mother Tongue');
		}
		else if($.trim($('#looking_for').val()) == '')
		{
			alert('Please Enter Looking For');
		} 
		else 
		{
			$('#page2').submit();
		}
		return false;
	});

//--------------------------------------------------Registration-page-3---------------------------//
//------------------------------------------------------------------------------------------------//
    $('#page3').submit(function()
    {
		if($.trim($('#name').val()) == '')
		{
			alert("Please Enter Father's Name");
		} 
		else if($.trim($('#Religion').val()) == '')
		{
			alert('Please Enter Religion');
		}
		else if($.trim($('#Country').val()) == '')
		{
			alert('Please Enter Country');
		}
		else if($.trim($('#txtState').val()) == '')
		{
			alert('Please Enter State');
		} 
		else if($.trim($('#Martial_Status').val()) == '')
		{
			alert('Please Enter Martial Status');
		}
		else if($.trim($('#Gothram').val()) == '')
		{
			alert('Please Enter Gothram/Gothra');
		}
		else if($.trim($('#nakshtra').val()) == '')
		{
			alert('Please Enter Nakshtra');
		}  
		else 
		{
			$('#page3').submit();
		}
		return false;
	});	

//------------------------------------------Registration-page-4-------------------------------------------//
//--------------------------------------------------------------------------------------------------------//
    $('#page4').submit(function()
    {
		if($.trim($('#Education_Field').val()) == '')
		{
			alert("Please Enter Education Field");
		} 
		else if($.trim($('#education_level').val()) == '')
		{
			alert('Please Enter Education Level');
		}
		else if($.trim($('#Graduation_College_Name').val()) == '')
		{
			alert('Please Enter Graduation College Name');
		}
		else if($.trim($('#Post_Graduation_College_Name').val()) == '')
		{
			alert('Please Enter Post Graduation College Name');
		}
		else if($.trim($('#Currently_Working_With').val()) == '')
		{
			alert('Please Enter Currently Working With');
		}
		else if($.trim($('#designation').val()) == '')
		{
			alert('Please Enter Designation');
		}
		else if($.trim($('#Annual_Income').val()) == '')
		{
			alert('Please Enter Annual Income');
		}  
		else 
		{
			$('#page4').submit();
		}
		return false;
	});	

//------------------------------------------Registration-page-5-------------------------------------------//
//--------------------------------------------------------------------------------------------------------//
    $('#page5').submit(function()
    {
    	if($.trim($('#age_from').val()) == '')
		{
			alert("Please Enter Age From");
		} 
		else if($.trim($('#age_to').val()) == '')
		{
			alert('Please Enter Age To');
		}
		else if($.trim($('#Height_From').val()) == '')
		{
			alert("Please Enter Height From");
		} 
		else if($.trim($('#Height_To').val()) == '')
		{
			alert('Please Enter Height To');
		}
		else if($.trim($('#Body_Type').val()) == '')
		{
			alert('Please Enter Body Type');
		}
		else if($.trim($('#skin_zone').val()) == '')
		{
			alert('Please Enter Skin Zone');
		} 
		else if($.trim($('#smoke').val()) == '')
		{
			alert('Please Enter Smoke');
		}
		else if($.trim($('#Drink').val()) == '')
		{
			alert('Please Enter Drink');
		}
		else if($.trim($('#Diet').val()) == '')
		{
			alert('Please Enter Diet');
		}  
		else 
		{
			$('#page5').submit();
		}
		return false;
	});

//-------------------------------------------Registration-page-6---------------------------------------//
//-----------------------------------------------------------------------------------------------------//
    $('#page6').submit(function()
    {
		if($.trim($('#physical_disability').val()) == '')
		{
			alert("Please Enter Physical Disability");
		} 
		else if($.trim($('#about').val()) == '')
		{
			alert('Please Enter Something about Yourself');
		}
		else if($.trim($('#mobile_no').val()) == '')
		{
			alert('Please Enter Mobile Number');
		} 
		else 
		{
			$('#page6').submit();
		}
		return false;
	});	

//-------------------------------------------Login-page----------------------------------------------//
//---------------------------------------------------------------------------------------------------//
	$('#login').submit(function()
    {
		if($.trim($('#email').val()) == '')
		{
			alert("Please Enter Email Address");
		} 
		else if($.trim($('#password').val()) == '')
		{
			alert('Please Enter Password');
		}
		else 
		{
			$('#login').submit();
		}
		return false;
	});
});