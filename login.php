<html>

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>

    
		table {
			margin: 0 auto;
			font-size: large;
			background-color:#474747;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #514644;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #ffffff;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
					}

		td {
			font-weight: lighter;
		}
		th{
			color:white;
		}
	</style>
</head>
<body>
    <form method="POST" action="loginrev.php">
		<h1>Login</h1>
        <table border="1">
            <tr>
                <td>
                Username:
                </td>
                <td>
                    <input name="username" type="text" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input name="password" type="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                                  
    <input type="submit" value="Login"> 
                </td>
            </tr>
        </table>
    </form>
</body>

</html>