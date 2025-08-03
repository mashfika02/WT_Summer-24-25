<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid lab Task 3</title>
    <link rel="stylesheet" href="task_3_style.css">
    <script src="task_3_valid.js"></script>
</head>
<body>
   <div>
    <form action="">
        <h2>Donor Information</h2>
        <label for="First name">First Name :</label>
        <input type="text" placeholder="Enter First Name">

        <label for="Last name">Last Name :</label>
        <input type="text" placeholder="Enter Last Name">

        <label for="address">Address :</label>
        <input type="text" placeholder="Enter Address">

        <label for="city">City :</label>
        <input type="text" placeholder="Enter City">

        <label for="state">State :</label>
        <select name="state" id="select">
            <option value="">Select</option>
            <option value="">California</option>
            <option value=""> Florida</option>
            <option value="">New York</option>
        </select>
        
        <label for="phone">Phone :</label>
        <input type="text" placeholder="Enter Phone Number">

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="Enter Email">

        <!-- Button -->

       <div class="button">
         <button onclick="HandleSubmit()" type="submit">Submit</button>
         <button type="reset">Reset</button>
       </div>
    </form>
   </div>
</body>
</html>