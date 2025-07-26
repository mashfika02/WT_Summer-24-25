<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
    <style>
        body{
            background-color: #D2E5E5;
        }
    table{
        background-color: #D2E5E5;
        margin-left: auto;
        margin-right: auto;
    }
   .title{
      color:#5D9C98;
   }
   #title2{
    color: #5D9C98;
    font-family: Arial, Helvetica, sans-serif;
   }
  
   label,p{
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
   }
   input,select,textarea{
    background-color: #B5D4D4;
    border-radius: 5px;
    padding: 5px;
   }
   span{
    color: #5D9C98;
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
   }
    </style>
</head>
<body>
    <center>
        <h1 class="title">Bank Management System</h1>
        <h3 id="title2"><ins>Your Trusted Financial Partner</ins></h3>
    </center>

    <table>
        <form action="">
         <tr><td><p>Customer Registration From</p></td></tr>
<!--Full name-->
         <tr>
            <td><label for="name">Full Name :</label></td>
            <td><input type="name" placeholder="Enter your Full Name"></td>
         </tr>
         <!--date of birth-->
         <tr>
            <td><label for="DOB">Date Of Birth :</label></td>
            <td><input type="date" name="" id=""></td>
         </tr>
         <!--Gender-->
         <tr>
            <td><label for="gender">Gender :</label></td>
            <td>
                <input type="radio" name="gender" id="gender"> <span>male</span>
                <input type="radio" name="gender" id="gender"> <span>Female</span>
               <input type="radio" name="gender" id="gender"> <span>Others</span>
            </td>
         </tr>
         <!--m status-->
         <td><label for="MS">Marital Status :</label></td>
         <td>
            <select name="" id="">
                <option value="">Single</option>
                <option value="">Married</option>
            </select>
         </td>
        <!--account type-->
        <tr>
           <td><label for="Account type">Account Type :</label></td>
           <td>
            <select name="" id="">
                <option value="">Savings</option>
                <option value="">Deposit</option>
                <option value="">Checking</option>
            </select>
           </td>
        </tr>
          <!--initial deposit amount-->
          <tr>
            <td><label for="IDA">Initial Deposit Amount :</label></td>
            <td><input type="text" placeholder="Enter initial Deposit Amount  "></td>
          </tr>
          <!--mobile number-->
          <tr>
            <td><label for="mobile num">Mobile Number : :</label></td>
            <td><input type="text" placeholder="Enter mobile number"></td>
          </tr>
    <!--email-->
    <tr>
        <td><label for="email">Email Address :</label></td>
        <td><input type="email" name="" id="" placeholder="Enter email "></td>
    </tr>
     <!--Address -->
     <tr>
        <td><label for="address">Address :</label></td>
        <td><textarea name="" id="" rows="5"></textarea></td>
     </tr>

        </form>
    </table>
</body>
</html>