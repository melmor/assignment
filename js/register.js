
function loadXMLDoc()
{


  var fname=document.signup.firstname.value;
  var passwd=document.signup.passwd.value;
  var email=document.signup.email.value;
  var usname=document.signup.usname.value;
  var tou=document.signup.tou.value;
  var regno=document.signup.reg.value;
  var content="";
  var flag=0;
  var mail= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var name=/^[A-Za-z]$/;
  var r=/^\d{10}$/;
  if(usname=='' )
  {
     content+="enter the username";
     flag=1;

  }
  else if(regno==''|| r.test(regno)==false)
  {
   content+="enter the 10 digit reg no";
   flag=1;
  }
  else if(email==''||mail.test(email)==false)
  {
    content+="enter the email";
    flag=1;
  }

  else if(fname=='')
  {
    content+="enter the first name";
    flag=1;
  }

  else if(passwd=='')
  {
    content+="enter the password";
    flag=1;

  }

  else
  {

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  //alert('here');
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }


//alert(fname+passwd+email+usname);
var d="register/register.php?usname="+usname+"&fname="+fname+"&email="+email+"&passwd="+passwd+"&tou="+tou+"&reg="+regno;
//xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.open("GET",d,true);
xmlhttp.send();

  }

  if(flag==1)
  {
    $('#box').show(function(){
      document.getElementById('err').innerHTML=content;

    });
    //alert('hi');

  }

}

$(function(){
   $("#box").bind('closed.bs.alert', function () {
      $('#box').hide();
   });
});
