<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>


		label,
textarea {
    font-size: .8rem;
    letter-spacing: 1px;
}
textarea {
    padding: 50px;
    max-width: 100%;
    line-height: 1.5;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 1px #999;
	display: flex;
    justify-content: center;
}

label {
    display: block;
    margin-bottom: 10px;
}



	</style>
</head>
<body>
	<div>
	<form action="leadDev.php" method ="POST">
	<label for="story">Tapez votre text ici...

</label>

<textarea id="textfromhtml" name="textfromhtml"
          rows="5" cols="33">
</textarea>
<input type="submit" value="Tester">



	</form>
</div>
</body>
</html>