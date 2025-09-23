<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Student Registration</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            height: auto;
            width: auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
        }

        form {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .name-container {
            display: flex;
            gap: 20px;
        }

        .name-field {
            height: 35px;
            width: 200px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: #f7f7f7;
            padding: 0 10px;
            border: 1px solid #DCDCDC;
        }

        label {
            font-size: 14px;
        }

        .input-field {
            height: 35px;
            border: none;
            outline: none;
            background-color: #f7f7f7;
            padding: 0 10px;
            border: 1px solid #DCDCDC;
            border-radius: 5px;
        }
        #email, #ph-number{
            width: 100%;
        }
        .address-container{
            display: flex;
            gap: 10px;
        }
        #street-number{
            width: 70px;
        }
        .address-container span{
            flex: 1;
        }
        .address-container span input{
            width: 100%;
        }
        .gender-container{
            display: flex;
            gap: 30px;
        }
        .course-container{
            display: flex;
            gap: 20px;
        }
        button{
            width: 100%;
            height: 40px;
            background-color: #6F00FF;
            color: white;
            border: none;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Student Registration</h1>
        <p>PLease fill the form to register the student</p>
        <form action="" method="POST">
            <div class="name-container">
                <span>
                    <label for="first-name">First Name:</label><br>
                    <input type="text" id="first-name" class="name-field" required>
                </span>
                <span>
                    <label for="middle-name">Second Name:</label><br>
                    <input type="text" id="middle-name" class="name-field">
                </span>
                <span>
                    <label for="last-name">Last Name:</label><br>
                    <input type="text" id="last-name" class="name-field" required>
                </span>
            </div>

           <span> <label for="email">Email</label><br>
            <input type="email" id="email" class="input-field" required></span>
            <span>
                <label for="ph-number">Phone Number:</label><br>
            <input type="number" id="ph-number" min="1000000000" max="9999999999" class="input-field" required>
            </span>

            <div class="address-container">
                <span style="max-width: 120px;">
                    <label for="street-number">Street Number:</label><br>
                    <input type="number" id="street-number" class="input-field" required>
                </span>
                <span>
                    <label for="street-name">Street Name:</label><br>
                    <input type="text" id="street-name" class="input-field" required>
                </span>
                <span>
                    <label for="city">City:</label><br>
                    <input type="text" id="city" class="input-field" required>
                </span>
            </div>
            <p>Select Gender: </p>
            <div class="gender-container">
                <span><input type="radio" name="gender" id="male" value="male">Male</span>
                <span><input type="radio" name="gender" id="female" value="female">Female</span>
            </div>
            <div class="course-container">
                <span><input type="radio" name="course" id="bcsit" value="BCSIT">BCSIT</span>
                <span><input type="radio" name="course" id="bscit" value="BSc IT">BSc IT</span>
                <span><input type="radio" name="course" id="bsccs" value="BSs CS">BSc CS</span>
                <span><input type="radio" name="course" id="bba" value="BBA">BBA</span>
                <span><input type="radio" name="course" id="bba-finance" value="BBA-Finance">BBA (Finance)</span>
            </div>
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</body>

</html>