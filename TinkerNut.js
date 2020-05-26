function clicked(){
var x;
x=document.getElementById('nameCheck').value;
if (x!=""){
return true;
}
else{
document.getElementById('errorMsg').innerHTML='<font color="red">(required)&nbsp;Name:</font>';
return false;
}
}