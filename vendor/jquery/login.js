
$(document).ready(function() {

$("#adminsubmit").click(function() {

var username = $("#username").val();
var password = $("#password").val();

if (username == '' || password == '' ) {
alert(" Username and Password must not be blank :) ");
} else {


$.post("includes/handlers/login.php", {

username:username,
password:password

}, function(data) {

alert(data);
$('#adminForm')[0].reset(); // To reset form fields

});
}
});
});