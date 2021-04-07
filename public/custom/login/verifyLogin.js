function checkname()
{
 var name=document.getElementById( "UserName" ).value;

 if(name.length >3)
 {
      $.ajax({
          type: 'post',
          url: 'checkdata.php',
          data: {
           user_name:name,
          },
          success: function (response) {
               $( '#name_status' ).html(response);
               if(response=="OK")   
               {
                return true;    
               }
               else
               {
                return false;   
               }
          }
      });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }

}

function checkall()
{
 var namehtml=document.getElementById("name_status").innerText;
 alert(namehtml);

 if(namehtml=="OK")
 {
  return true;
 }
 else
 {
  return false;
 }
}
