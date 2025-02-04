<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Digital Incubator </title>
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body,
html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('https://media.licdn.com/dms/image/D5612AQFgEGgtilRG2A/article-cover_image-shrink_720_1280/0/1704461834854?e=2147483647&v=beta&t=_1eYBUA-a60ZO_20G3TycxBYByHToC9V24b6Fvx26a8');
    background-size: cover;
    background-position: center;
    filter: blur(0px);
    z-index: -1;
}

.login-container {
    z-index: 1;
    background-color: #f0f1f2;
    height: 50vh;
    width: 27.5vw;
    min-width: 620px;
    min-height: 470px;
    border-radius: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-container > h1{
    font-family: 'Karla';
    font-size: 42px;
    color: #1e3932;
    line-height: 50px;
}

.form-login {
    width: 90%;
    display: flex;
    flex-direction: column;
    gap: 25px;
    padding: 20px;
}


label {
    font-family: 'Karla';
    font-size: 12px;
    line-height: 12px;
    letter-spacing: 0.1em;
    color: #767676;
    cursor: text;
    text-transform: uppercase;
}

input {
    background: transparent;
    border: none;
    border-bottom: 1px solid grey;
    width: 100%;
    height: 18px;
}

input:focus {
    outline: none; /* Remove a borda de foco */
  }

.forgot-password{
    align-self: flex-end;
    font-size: 16px;
    border-bottom: 1.5px solid #00754a;
    text-decoration: none;
    color: #00754a;
}

.text--create-account {
    color: #006241;
    font-family: 'Karla';
}

.create-account>a,
button {
    font-size: 16px;
    color: #fff;
    border: 2px solid #006241;
    text-decoration: none;
    padding: 8px 50px;
    margin: 10px 0;
    border-radius: 50px;
    background-color: blue;
}
	</style>
	 <div class="container">
        <div class="login-container">
            <h1>Entrepreneur Registration</h1>
            <form action="registerdb.php" class="form-login" method="post">
                
                <div class="textfield">
                    <label for="email"> <b>Name</b></label>
                    <input type="text" name="name" required="" placeholder="Full Name">
                </div>
                <div class="textfield">
                    <label for="email"> <b>Mobile</b></label>
                    <input type="number" name="number" required="" placeholder="Contact Number">
                </div>
                <div class="textfield">
                    <label for="email"> <b>E-mail</b></label>
                    <input type="email" name="email" required="" placeholder="E-mail">
                </div>
                <div class="textfield">
                    <label for="password"><b> Password </b></label>
                    <input type="password" name="password"  minlength="8" required="" placeholder="Password">
                </div>
                
                <button class="btn-login" type="submit">Register </button>
                
            </form>
<div>

</body>
</html>