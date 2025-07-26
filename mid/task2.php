<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
    <style>
    body{
       background-color: #4E837F;
        }
    table{
        background-color:#D2E5E5 ;
        margin-left: auto;
        margin-right: auto;
        padding: 5px;
        border: 2px solid #4D8484;
        border-radius: 15px;
       
    }
   .title{
      color:#D2E5E5;
   }
   #title2{
    color:#D2E5E5;
    font-family: Arial, Helvetica, sans-serif;
   }
  
  .regprara{
    color: #4E837F;
  }
  .btn{
    text-align: center;
  }
  button{
    background-color: #5D9C98;
    border-radius: 5px;
    padding: 10px;
    width: 250px;
  }
   label,p{
    font-size: 16px;
    font-family: Arial, Helvetica, sans-serif;
    color:#4E837F;

   }
   input,select,textarea{
    background-color: #B5D4D4;
    border-radius: 5px;
    padding: 3px;
    
   }
   input[type="file"]::file-selector-button{
    background-color:#98C3C3;
   }
   span{
    color: #5D9C98;
    font-size: 16px;
    font-family: Arial, Helvetica, sans-serif;
    
   }
   div{
    width: 250px;
    height: 100px;
    border: 2px solid #4D8484;
    border-radius: 5px;
    overflow: scroll;
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
         <tr ><td class="regprara"><p>Customer Registration From</p></td></tr>
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
      <!--occupation -->
      <tr>
        <td><label for="occupation">Occupation :</label></td>
        <td><input type="text" placeholder="Enter occupation "></td>
      </tr>
       <!--nid -->
      <tr>
        <td><label for="nid">National ID (NID) :</label></td>
        <td><input type="text" placeholder="Enter NID "></td>
      </tr>
      <!--password -->
      <tr>
      <td><label for="password">Set Password :</label></td>
      <td><input type="password" name="" id="" placeholder="Set Password"></td>
      </tr>
       <!--upload id -->
       <tr>
        <td><label for="upload">Upload ID Proof :</label></td>
        <td><input type="file" name="" id="file"></td>
       </tr>
       <tr>
        <td><input type="checkbox" name="" id="">
        <span>I agree to the terms and condition.</span>
       </td> 
       </tr>
       <tr>
           <td class="btn"><button type="button">Register</button></td>
           <td class="btn"><button type="button">Clear</button></td>
           </tr>
           <tr>
            <td >
                <div>
                    There are several types of bank accounts, each designed for different financial needs. The most common types include savings accounts, checking accounts, fixed deposit accounts, and recurring deposit accounts. These accounts offer varying levels of interest, transaction flexibility, and investment option
                </div>
            </td>
           </tr>
        </form>
    </table>
</body>
</html>