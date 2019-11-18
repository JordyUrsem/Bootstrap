
function validate(){
var name = document.getElementById('name').value;
var phone = document.getElementById('phone').value;

var nameRGEX = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/g;
var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;

var nameResult = nameRGEX.test(name);
var phoneResult = phoneRGEX.test(phone);

if(nameResult == false)
{
alert('Please enter your name');
return false;
}

if(phoneResult == false)
{
alert('Please enter a valid phone ');
return false;
}

return true;
}
