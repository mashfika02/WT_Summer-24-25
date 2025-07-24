<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <center>
    <h1 style="color: blue;">AIUB</h1>
    <h2 style="color: skyblue;">Registration form</h2>
 </center>

 <table>
    <form action="">
      <tr><td><p style="font-size: 20px;"><b><ins>Complete The Registration</ins></b></p></td></tr>
<!--Full name-->
     <tr>
        <td> <label style="font-size:18px;" for="">Full Name :</label>
        </td>
        <td><input type="text" placeholder="Enter the Full Name"></td>
     </tr>
<!--Email-->
    <tr>
        <td> <label style="font-size: 18px;" for="">Email :</label></td>
        <td><input type="email" placeholder="Enter The Email"></td>
    </tr>
<!--Password-->
<tr>
    <td><label style="font-size: 18px;" for="password">Password :</label></td>
    <td><input type="password" placeholder="Enter the Password" name="" id=""></td>
</tr>
<!--Gender-->
    <td><label style="font-size:18px;" for="gender">Gender :</label></td>
    <td>
        <input type="radio" name="gender" id=""> Female
        <input type="radio" name="gender" id=""> Male
    </td>
<!--lang-->
<tr>
      <td><label style="font-size: 18px;" for="language">Language Knowledge</label></td>
      <td>
        <input type="checkbox" name="lang" id=""> English
        <input type="checkbox" name="lang" id=""> Bangla
        <input type="checkbox" name="lang" id=""> hindi
      </td>
</tr>
<!--country-->
<tr>
    <td><label style="font-size: 18px;" for="country">Country :</label></td>
    <td>
        <select name=""id="">
            <option value="">select</option>
            <option value="">Bangladesh</option>
            <option value="">US</option>
        </select>
    </td>
</tr>
<!--DOB-->
<tr>
    <td><label style="font-size: 18px;" for="DOB">Date of Birth :</label></td>
    <td><input type="date" name="" id=""></td>
</tr>
<!--Dupload file-->
<tr>
    <td><label style="font-size: 18px;" for="upload photo">Upload Photo :</label></td>
    <td><input type="file" name="" id=""></td>
</tr>
<!--comments-->
<tr>
    <td><label style="font-size: 18px;" for="comments">Comments :</label></td>
    <td><textarea name="" id="" rows="5"></textarea></td>

</tr>
<!--submit button-->
<tr>
   <td>
     <button  style="background-color: skyblue;"  type="submit">Submit</button>
   </td>
</tr>
    </form>
 </table>
   

</body>
</html>