<!---
*Index file
-->
<!--language and page tags-->
<%@ Page Language="C#" %>

<%@ Import Namespace="System.Data.SqlClient" %>
<!DOCTYPE html>
<script runat="server">
    //click button function
    protected void submitButton_Click(object sender, EventArgs e)
    {
        if (Page.IsValid)
        {
            // Code that uses the data entered by the user
            // Define data objects
            SqlConnection conn;
            SqlCommand comm;
            // Read the connection string from Web.config
            string connectionString =
                ConfigurationManager.ConnectionStrings[
                "pthport"].ConnectionString;
            // Initialize connection
            conn = new SqlConnection(connectionString);
            // Create command 
            comm = new SqlCommand("EXEC InsertVisitor @fnameTextBox,@lnameTextBox,@emailTextBox, @msgTextBox", conn);
            comm.Parameters.Add("@fnameTextBox", System.Data.SqlDbType.NChar, 50);
            comm.Parameters["@fnameTextBox"].Value = fname.Text;
            comm.Parameters.Add("@lnameTextBox", System.Data.SqlDbType.NChar, 50);
            comm.Parameters["@lnameTextBox"].Value = lname.Text;
            comm.Parameters.Add("@emailTextBox", System.Data.SqlDbType.NChar, 50);
            comm.Parameters["@emailTextBox"].Value = email.Text;
            comm.Parameters.Add("@msgTextBox", System.Data.SqlDbType.NChar, 200);
            comm.Parameters["@msgTextBox"].Value = message.Text;

            // Enclose database code in Try-Catch-Finally
            try
            {
                // Open the connection
                conn.Open();
                // Execute the command
                comm.ExecuteNonQuery();
                // Reload page if the query executed successfully
                Response.Redirect("thankyou.html");
            }
            catch (SqlException ex)
            {
                // Display error message
                dbErrorMessage.Text =
                   "Error submitting the data!" + ex.Message.ToString();

            }
            finally
            {
                // Close the connection
                conn.Close();
            }
        }
    }

</script>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Potters Tea House</title>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
</head>

<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="#social">&#127968;Home</a>
		<a href="#hours"><i style="font-size:30px" class="fa">&#xf27e;</i>About</a>
		<a href="#contact">&#9742;Contact</a>
		<a href="http://www.pottersteahouse.co/MainMenu.html">&#127838;Menu</a>
		<a href="http://www.pottersteahouse.co/">&#9749;Teas</a>
		<a href="http://pottersteahouse.com/potters-tea-house-clone/">&#128247;Photos</a>
		<a href="emp_validate.php">&#9967;Employee</a>
		<a href="../../index.html">Return to Portfolio</a>
	</div>

	<div id="top1" class="sticky" style="clear: both">
		<br/>
		<h1 style="float: left;font-weight:bold;"><span onclick="openNav()">&nbsp;&#9776;</span>&emsp; Potter's Tea
			House &emsp; &emsp;</h1>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="social">
		<br/>
		<br/>
		&emsp;&emsp;&emsp;<a id="instagram" target="_blank" title="follow me on instagram"
			href="https://www.instagram.com/pottersteahouse/"><img alt="follow me on instagram"
				src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0> Instagram</a>&emsp;<a
			href="https://www.facebook.com/PottersTeaHouse"><i style="font-size:34px" class="fa">&#xf082;</i>acebook</a>
		<br/>
		<br/>
	</div>
	<div id="logo">
		<center><img src="images/potterLogo.png" alt="Uh oh"></center>
	</div>

	<div id="hi">
		<br/>
		<br/>
		<h1 style="font-weight:bold;">&emsp;&emsp;&emsp;&emsp;Oh. Hi there.</h1>
		<br/>
		<h6>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to Potter's Tea House. Come in. Have a
			seat. Relax. Can we get you anything?</h6>
		<br/>
		<div class="row">
			<div class="column" style="background-color:transparent;">
				<h2 class="mph">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tea?</h2>
				<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;We have a huge selection of teas.<br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;From black teas to white teas and <br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ones that technically aren't teas.
					I know. <br/> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;It can be kind of daunting but just ask and <br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;we'll be happy to help you find something <br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;with which you'll be most pleased. </p>
			</div>
			<div class="column" style="background-color:transparent;">
				<h2 class="mph">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Coffee</h2>
				<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Although we specialize in tea, <br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;we understand there are those that still prefer the java.<br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;so we've also got some of that too.<br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;We'll be happy to grab you an espresso.</p>
			</div>
			<div class="column" style="background-color:transparent;">
				<h2 class="mph">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Food?</h2>
				<p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;We've even got some munchies to fill your belly, <br/>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;if you're so inclined.
					Choose from delicious pastries <br/> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;from Zeppoles bakery.</p>
			</div>
		</div>
	</div>
	<div id="tea">

		<h1>Teas</h1>
		<ul>
			<li>Black teas - orthodox & flavored</li>
			<li>Green teas - orthodox & flavored</li>
			<li>Rooibos - regular and flavored</li>
			<li>Fruit teas</li>
			<li>Herbal teas</li>
		</ul>
		<p>We can make it up any way you want it:<br/> hot, iced, as a latte, and blended up <br/> like a frappuccino.
		</p>
		<figure>
			<div>
				<span class="flip">How Many?</span>
				<span class="flip">About 100!</span>
			</div>
		</figure>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="coffee">
		<h1>Coffee</h1>
		<p>We can do your coffee as some kind of espresso.<br/> We get our beans from Coffee Studio, so you know it's
			going to be good.</p>
		<br/>
		<p>The same applies here: iced, hot, latte,<br/> blended but also add a flavored syrup for extra deliciousness.
		</p>
		<figure>
			<div>
				<span class="flip">Visit them at:</span>
				<span class="flip">mycoffeestu..</span>
			</div>
		</figure>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="food">
		<h1>Food</h1>
		<p>A delicious selection of pastries from Zeppoles <br/> that will go br/illiantly with your beverage of choice.
		</p>
		<br/>
		<p>And now we're offering sandwiches and salads. All made in-house. <br/> Check out our menu using the links at
			the top of the page.</p>

		<figure>
			<div>
				<span class="flip">Visit them at:</span>
				<span class="flip">zeppolebake..</span>
			</div>
		</figure>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="teaparty">
		<h1>Tea Parties</h1>
		<p>Contact us to schedule a tea party for 6-12 people. </p>
		<figure>
			<div>
				<span class="flip">Learn More</span>
				<span class="flip">Click Here!</span>
			</div>
		</figure>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>
	<div id="contact">
		<center>
			<h1>Contact Us</h1>
		</center>
		<center>
            <!--all tags were changed to asp-->
			<form runat="server">
				First Name <br/>
				<asp:TextBox ID="fname" runat="server" />
                <br />
                <span class="textfieldRequiredMsg">A value is required.</span>
				<br/>
				Last Name <br/>
				<asp:TextBox ID="lname" runat="server" />
                <br />
                <span class="textfieldRequiredMsg">A value is required.</span>
				<br/>
				Email <br/>
				<asp:TextBox ID="email" runat="server" />
                <br />
                   <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span>
				<br/>
				Questions/Comments <br/>
				<asp:TextBox ID="message" runat="server" Height="100px" Width="200px" />
				<br/>
				<asp:Button ID="submitButton" runat="server"
                    Text="Submit" OnClick="submitButton_Click" />
                <br />
                <asp:Label ID="dbErrorMessage" runat="server"></asp:Label>
			</form>
		</center>
	</div>
	<div id="hours">
		<center>
			<h1>Hours</h1>
			<ul>
				<li>M-F</li>
				<li>7:00AM-8:00PM</li>
				<li>Sat</li>
				<li>9:00AM-8:00PM</li>
				<li>Sun</li>
				<li>10:00AM-5:00PM</li>
			</ul>
		</center>

	</div>
	<div id="map"/>
		<div class="chord--map__wrapper row"/>
			<div class="chord--map__content large-12 columns">
				<div class=chord--map__map></div><iframe width=900% height=400 frameborder=0 style=border:0
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC95r60uYUnB7WMJJu308Sz9PM1vo2NR1k&q=917 N Main St Meridian,ID 83642"
					allowfullscreen></iframe>
			</div>
</body>
</html>