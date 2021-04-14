<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Contact us 
        </title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            ContacUs {
                margin-left: 70px;
                font-weight: bold ;
                float: left;
                clear: left;
                width: 100px;
                text-align: left;
                margin-right: 10px;
                font-family:sans-serif,bold, Arial, Helvetica;
                font-size:14px;
            }
            h2{
                font-family:"Times New Roman";
                background-color:rgba(250,128,114,0.3);
                font-size: 30px;
            }
            form {
                margin: 0 auto;
                width: 600px;
            }
            h1 {
                text-align: left;
                background-color: #ffe6e6;
                font-family:"Courier New";
                font-size: 50px;
                color:black;
            }
            body {
                background: url(logo.jpg);
                background-repeat: no-repeat;
                background-size: 30%;
                background-position: center top;
            }
            a{
                text-decoration : none;
            }
            .fa {
                padding: 20px;
                font-size: 30px;
                width: 30px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }
            .fa:hover {
                opacity: 0.7;
            }
          .fa-twitter {
  
  color: lightblue;
  font-size:40px;
}


.fa-instagram {
  color: black;
  font-size:40px;
}
.fa-whatsapp {
  
  color: #26b403;
  font-size:40px;
}
        </style>
        <body>
            <header>
                <nav style=" margin:250px 0px 150px 360px;  height: 30px ; width:100%">
                    <a  href="index.html" > <img style="height:120px ; width:120px;" src="home.jpg" class="imgClass" > </a>
                    <a  href="Pastry.html" > <img style="height:120px ; width:120px;" src="pastry.jpg" class="imgClass" > </a>
                    <a  href="cake.html" >  <img style="height:120px ; width:120px;" src="cake.jpg" class="imgClass" > </a>
                    <a  href="CakeDiteals.html" > <img style="height:120px ; width:120px;" src="cakedetails.jpg" class="imgClass" > </a>
                    <a  href="ContactUs.html" > <img style="height:120px ; width:120px;" src="contact.jpg" class="imgClass" > </a>
                </nav>
                <h1 style="text-align: center">
                    Contact Us 
                </h1>
            </header>
            <form name="ContsUs"  onsubmit="return ContacUs() " action="<?php echo $_SERVER["PHP_SELF"] ?>"  method="post">
                <p>
                    Name: 
                    <input type="Name" size=65 name="Name">
                </p>
                <br>
                <p>
                    E-mail Address: 
                    <input type="Email" size=65 name="Email">
                </p>
                <br>
                <p>
                    Date: 
                    <input type="Date" size=65 name="Date">
                </p>
                <br>
                <p>
                    Telephone: 
                    <input type="Telephone" size=65 name="Telephone">
                </p>
                <br>
                <p>
                    Reservation Details :
                </br> ** Note : You should pick up your order at the shop ,We dont have delivery service :) 
            <textarea cols="70" name="ReservationDetails" placeholder="For example:  1 Cake 6 Roumd vanilla flavor"></textarea>
        </p> 
        <input type="submit"  value="send" name="send">
        <input type="reset" value="Reset" name="Reset">
    </p>          
</form>
<footer class="social-footer">
    <div class="social-footer-icons">
    </br>
</br>
<h2>
    Social Media
</h2>
<a href="https://twitter.com/" class="fa fa-twitter"></a>
<a href="https://instagram.com/" class="fa fa-instagram"></a>
<a href="#" class="fa fa-whatsapp"></a>
</div>
</footer>
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cake_and_pastery";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Date=$_POST['Date'];
    $Telephone =$_POST['Telephone'];
    $ReservationDetails = $_POST['ReservationDetails'];
	
    $sql = "INSERT INTO reservation( Name, Email ,Date , Telephone , ReservationDetails )
VALUES ('$Name','$Email','$Date','$Telephone' , '$ReservationDetails')";
    if ($conn->query($sql) === TRUE) {
        echo '<script> ';
		echo 'if (confirm("Are you sure you want to Confirm the Reservation?")) {';
         echo ' alert("Your reservation will be confirmed by Calling you by your Phone number .. Thank You !");';
		echo '} else {';
          echo ' alert("You decided to not confirm the reservation!"); ';
       echo ' } </script> ';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close(); }
?>
</body>
<script>
    function ContacUs(form)                                    
    {
        var name = document.forms["ContsUs"]["Name"];
        var email = document.forms["ContsUs"]["Email"];
        var Date = document.forms["ContsUs"]["Date"];
        var phone = document.forms["ContsUs"]["Telephone"];
        if (name.value == "")                                  
        {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
        else if (email.value == "")                                  
        {
            window.alert("Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
        else if (Date.value == "")                              
        {
            window.alert("Please enter your Date.");
            Date.focus();
            return false;
        }
        else if (phone.value == "")                          
        {
            window.alert("Please enter your telephone number.");
            phone.focus();
            return false;
        }
        
    }
</script> 
			

</html>