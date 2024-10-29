<!DOCTYPE html>
<html lang="en">
<body>
    
    <form method="post" action="ReceivedFb.php" > 
        <fieldset style = " border: solid 2px gray; float:left;" >
        <legend><h2>Customer Feedback</h2></legend>
    <label style="background-color:gray;" name="personal"><strong>Personal Details</strong></label><br><br>

        <label>Full Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>
        
        <label>Phone number:</label><br>
        <input type="text" name="phone" id="phone" required><br><br>


        <label style="background-color:gray;" name="feedback"><strong>Feedback</strong></label><br><br>

        <label>Product/Service: </label><br>
        <textarea name="PoS"  rows="2" cols="42" required></textarea><br><br>
        
        <label>Would you use our product/service in the future : </label><br>
        <textarea name="future"  rows="2" cols="42" required></textarea><br><br>

        <label>How can we improve our product/service: </label><br>
        <textarea name="improve"  rows="2" cols="42" required></textarea><br><br>

        <div style = "text-align: center;">
        <input type="submit" value="Submit">
</div>
</fieldset>
    </form>

    
</body>
</html>

