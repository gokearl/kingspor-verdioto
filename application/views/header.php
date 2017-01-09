<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset='utf-8'>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<title>Verdi Oto Yakalamalı Araç Listesi</title>
	<style media="screen">
		input[type=text], input[type=password] {
			width: 250px;
			border: 2px solid #2196F3!important;
			border-radius: 4px;
			/*float: right;*/
		}
		input[type=button], input[type=submit], input[type=reset] {
			background-color: #2196F3!important;
			border: none;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
		}
		html {
			background-color: #151E29;
		}

		form {
		    width: 80%;
		    margin: 0 auto;
		}

		label, input {
		    /* in order to define widths */
		    display: inline-block;
		}

		label {
		    width: 30%;
		    /* positions the label text beside the input */
		    text-align: right;
			color: white;
		}

		label + input {
		    width: 30%;
		    /* large margin-right to force the next element to the new-line
		       and margin-left to create a gutter between the label and input */
		    margin: 0 30% 0 4%;
		}
		h2, p, input[type=file] {
			color: white;
		}
		#message
        {
            color: red;
        }
	</style>
	<?php if ($this->agent->is_mobile()): ?>
		<style media="screen">
			label, input {
				display: inline;
			}
		</style>
	<?php endif; ?>
</head>
<body>
	<center>
		<div class="w3-container w3-blue">
		<h2><font ><a href="<?php echo base_url(); ?>index.php/welcome/home">Verdi</a></font> Yakalamalı Araç Listesi</h2>
		</div>
	</center>
	<br/>
</body>
</html>
