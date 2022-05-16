<!DOCTYPE html>
<html lang="en">
<head>
   

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
       
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  
        <link rel="stylesheet" href="{{ asset('css/e-registration.css') }}">
     
</head>
<body>
    <form action="index.html" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
        
        </fieldset>
        
        <fieldset>
        <label for="job">Citizenship:</label>
        <select id="job" name="user_job">
          
            <option value="">Kenyan resident</option>
            <option value="">Non-kenyan resident</option>
          
        </select>
        
          <label>Application Type</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Individual</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Non-Individual</label><br>

        </fieldset>
        <fieldset>
        <legend><span class="number">2</span>Your Documents</legend>
        <label for="myfile">Attach identification:ID or &nbsp;&nbsp;Passport</label>
        <input type="file" id="myfile" name="myfile">
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span>Your Parents profile</legend>
            <label for="myfile">Attach Mother identification:ID or &nbsp;&nbsp;Passport</label>
            <input type="file" id="myfile" name="myfile">
            <br>
            <label for="myfile">Attach Father identification:ID or &nbsp;&nbsp;Passport</label>
            <input type="file" id="myfile" name="myfile">
          </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
</body>
</html>