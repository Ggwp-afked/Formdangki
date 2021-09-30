function validate() {
var u = document.getElementById("username").value;
var p1 = document.getElementById("password").value;

 
if(u== "") {
alert("Vui lòng nhập tên!");
return false;
}
if(p1 == "") {
alert("Vui lòng nhập mật khẩu!");
return false;
}

 
alert("Xin hãy điền đúng thông tin!")
 
return true;
}