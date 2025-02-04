<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor Registration</title>
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
    height: auto;
    width: 27.5vw;
    min-width: 620px;
    border-radius: 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.login-container > h1{
    font-family: 'Karla';
    font-size: 42px;
    color: #1e3932;
    line-height: 50px;
    margin-bottom: 20px;
}

.form-login {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

label {
    font-family: 'Karla';
    font-size: 18px;
    color: #1e3932;
}

input {
    background: transparent;
    border: none;
    border-bottom: 1px solid #767676;
    width: 100%;
    padding: 8px 0;
    font-size: 16px;
    color: #1e3932;
}

input:focus {
    outline: none; /* Remove a borda de foco */
}

.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-login {
    font-family: 'Karla';
    font-size: 16px;
    color: #fff;
    border: 2px solid #006241;
    text-decoration: none;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 50px;
    background-color: #006241;
    cursor: pointer;
}

.text--create-account {
    color: #006241;
    font-family: 'Karla';
}

.create-account > a,
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
            <h1>Mentor Registration</h1>
            <form action="registerdb.php" class="form-login" method="post">
                <div class="textfield">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="textfield">
                    <label for="password">Password</label>
                    <input type="password" name="password" minlength="8" placeholder="Password" required>
                </div>
                <div class="textfield">
                    <label for="field_of_expertise">Field of Expertise</label>
                    <input type="text" name="field_of_expertise" placeholder="Field of Expertise" required>
                </div>
                <div class="textfield">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="textfield">
                    <label for="google_meet_link">Google Meet Link</label>
                    <input type="url" name="google_meet_link" placeholder="Google Meet Link" required>
                </div>
                <div class="button-container">
                    <button class="btn-login" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
