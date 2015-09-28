function cek(){
  var password= document.getElementById('password').value;
  var password1= document.getElementById('password1').value;
  var email = document.getElementById('email');
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if(password.replace(/^\s+|\s+$/g, '')==''){
    alert('Maaf, Password Anda masih kosong  !');
    return false;
  }
  if (password != password1) {
    alert("You have entered a different password!");
    return false;
  }
  if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
  }
  return true;
}
