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
        <input type="text" id="name" placeholder="Enter First Name">

        <label for="Last name">Last Name :</label>
        <input type="text" id="name" placeholder="Enter Last Name">

        <label for="address">Address :</label>
        <input type="text" id="address" placeholder="Enter Address">

        <label for="city">City :</label>
        <input type="text" id="city" placeholder="Enter City">

        <label for="state">State :</label>
        <select name="state" id="select">
            <option value="">Select</option>
            <option value="">California</option>
            <option value=""> Florida</option>
            <option value="">New York</option>
        </select>
        
        <label for="phone">Phone :</label>
        <input type="text" id="phone" placeholder="Enter Phone Number">

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="Enter Email">

        <!-- password -->
         <label for="password">Create Password (min 8 character):</label>
         <input type="password" name="password" id="password" placeholder="Create password">

          <label for="confirm password">Confirm Password :</label>
          <input type="password" name="password" id="cp" placeholder="Enter Confirm Password ">

       <!-- radio for amount  -->
        <label for="amount">Donation Amount :</label>
        <div class="radio">
            <span>None</span><input type="radio" name="" id="amount">
            <span>500 BDT</span><input type="radio" name="" id="amount">
            <span>1000 BDT</span><input type="radio" name="" id="amount"> <br>
            <span>2000 BDT</span><input type="radio" name="" id="amount">
            <span>3000 BDT</span><input type="radio" name="" id="amount">
            <span>Other</span><input type="radio" name="" id="amount">
        </div>
        <label for="amount">Other Amount :</label>
        <input type="number" name="amount" id="amount" placeholder="Enter Amount">
        <div class="checkbox">
            <input type="checkbox" name="" id="checkbox"> <span>I am interested in giving on a regular basis.</span>
            <h2>Additional Information</h2>
            <input type="checkbox" name="" id="checkbox"> <span>I would like my gift to remain anonymous</span><br>
            <input type="checkbox" name="" id="checkbox"> <span>My employer offers a matching gift program</span><br>
            <input type="checkbox" name="" id="checkbox"> <span>Please don't send a Than you letter.</span>
        </div>
        <!-- comments -->
         <label for="comments">Comments :</label>
         <textarea style="height: 100px;" name="" id="textArea"></textarea>
        <!-- Button -->
       <div class="button">
         <button onclick="HandleSubmit()" type="submit">Submit</button>
         <button type="reset">Reset</button>
       </div>
    </form>
   </div>
</body>
</html>