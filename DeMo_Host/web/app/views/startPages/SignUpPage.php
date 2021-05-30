<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Sign Up</title>
    <meta name="description"
    content = "Logheaza-te" />
    <link rel="stylesheet" href="/public/css/startPages/SignUpPage.css">

</head>
<body>
<header>
    <h1>Sign up</h1>
    <p>It's quick and easy.</p>
</header>



<form>
    <div>
    <input class= "inp" type="text" placeholder="First name" required/>
    <input type="text" class="inp" placeholder="Last name" required/><br/>
    <input type="text" class="inp" placeholder="Mobile number or email" required pattern = "^([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})|(\d{3}\d{3}\d{4})$"/><br/>
    <input type="password" class="inp" placeholder="New password" required/>
    
   
       <p class="inp2">Birthday </p>
        <select class="inp2" id="Month" required>
            <option value=""  >Month</option>
            <option value="1">Jan</option>
            <option value="2">Feb</option>
            <option value="3">Mar</option>
            <option value="4">Apr</option>
            <option value="5">May</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Aug</option>
            <option value="9">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
        </select>
        <select class="inp2" id="Date" required>
            <option value=""  >Date</option>
            <option value="1">1</option> <option value="2">2</option>
            <option value="3">3</option> <option value="4">4</option>
            <option value="5">5</option> <option value="6">6</option>
            <option value="7">7</option> <option value="8">8</option>
            <option value="9">9</option> <option value="10">10</option>
            <option value="11">11</option><option value="12">12</option>
            <option value="13">13</option> <option value="14">14</option>
            <option value="15">15</option> <option value="16">16</option>
            <option value="17">17</option> <option value="18">18</option>
            <option value="19">19</option> <option value="20">20</option>
            <option value="21">21</option> <option value="22">22</option>
            <option value="23">23</option><option value="24">24</option>
            <option value="25">25</option> <option value="26">26</option>
            <option value="27">27</option> <option value="28">28</option>
            <option value="29">29</option> <option value="30">30</option>
            <option value="31">31</option>  
        </select>
        <select class="inp2" id="Year" required>
            <option value=""  >Year</option>
            <option value="1">2021</option> <option value="2">2020</option>
            <option value="3">2019</option> <option value="4">2018</option>
            <option value="5">2017</option> <option value="6">2016</option>
            <option value="7">2015</option> <option value="8">2014</option>
            <option value="9">2013</option> <option value="10">2012</option>
            <option value="11">2011</option><option value="12">2010</option>
            <option value="13">2009</option> <option value="14">2008</option>
            <option value="15">2007</option> <option value="16">2006</option>
            <option value="17">2005</option> <option value="18">2004</option>
            <option value="19">2003</option> <option value="20">2002</option>
            <option value="21">2001</option> <option value="22">2000</option>
            <option value="23">1999</option><option value="24">1998</option>
            <option value="25">1997</option> <option value="26">1996</option>
            <option value="27">1995</option> <option value="28">1994</option>
            <option value="29">1993</option> <option value="30">1992</option>
            <option value="31">1991</option>  
        </select>       
     
            <p class="inp2">Gender  </p>
                
                    <label class="inp2" for="F">Female</label>
                    <input type="radio" id="F"
               name="gender" value="Female" required>
                 
                  <label class="inp2" for="M">Male</label>
                  <input type="radio" id="M"
               name="gender" value="Male">
                             
                  <label class="inp2" for="C">Custom</label>
                  <input type="radio" id="C"
               name="gender" value="Custom">
               </div>
               </form>  
    <footer>
        
        You may receive SMS Notifications from us and can opt out any time.
    </footer>
    <form   action = "/startPages/LoginPage">
    <button  type="submit">
         Register
</button>
</form>
    

    


</body>
</html>