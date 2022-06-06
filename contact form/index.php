<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="this is a contact form"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>contact form</title>
</head>
<body>
<div class="container">
    <form onsubmit="sendEmail(); reset(); return false;">
        <h3>Get in touch with us</h3>
        <input type="text" id="name" placeholder="your name" required>
        <input type="email" id="email" placeholder=" your email" required>
        <input type="text" id="phone " placeholder=" your phone number" required>
        <textarea id="message" rows="4" placeholder="type your message here"></textarea>
        <button id="submit">SEND</button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src=" https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail(){
        Email.send({
            SecureToken : "9bd52f94-c6f0-40d3-a505-c49263c1121e",
            To : 'kipyegonke@ueab.ac.ke',
            From : document.getElementById("email").value,
            Subject : "inquiry form",
            Body : "Name: "+ document.getElementById("name").value
                 + "<br> email: " + document.getElementById("email").value
                 + "<br> phone: " + document.getElementById("phone").value
                 + "<br> message: " + document.getElementById("message").value
          /* Attachments : [
	{
		name : "smtpjs.png",
		path : "https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
	}]*/
}).then(
  message => alert("message sent successfully")
);
    }
</script>
</body>
</html>