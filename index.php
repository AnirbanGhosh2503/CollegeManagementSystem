<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once("header.php");?>
    <?php include_once("sidebar.php");?>
    <div class="content" style="background-color: darkslategrey">
        <!-- <h1>Welcome to the College Management System</h1>
        <p>This is a dummy body content. Replace this with your actual content.</p> -->
        <br><h2>Apply Here</h2><br> 
        <form  align="center"  action="apply_success.php" method="post" >  
            <label for="fname"><b> designation</b></label>  
            <input type="text" id="designation" name="designation" placeholder="Enter designation" required> <br> 
            
            <!-- <label for="cars">Department</label>
   <select name="dept1" id="dept1">         
    <?php 
    $sql= "select * from department";
    $sql_query = mysqli_query($conn,$sql);
    
    //$result = mysqli_fetch_assoc($sql_query );


    $i=1;
    
    while ($result = mysqli_fetch_assoc($sql_query )){
    ?>


        <option value=<?php echo $result['dept_id']; ?>> <?php echo $result['dept_name'];?> </option>
        

        
    <?php
        $i++;
    }
    ?>
    //echo $result['dept_name'];  
    ?>
    </select>

    <br>
    
    -->


                <label for="cars">Leave Types:</label>
    <select name="types_of_leave" id="types_of_leave">
        <option value="CL">CL</option>
        <option value="ML">ML</option>
        <option value="PL">PL</option>
        <option value="ODL">ODL</option>
        <option value="CCL">CCL</option>
    </select><br>

                <label for="email"><b>leave_purpose</b></label>  
                <input type="text" id="leave_purpose" name="leave_purpose" placeholder="Enter leave_purpose" required>  <br>
    
                <label for="psw"><b>From </b></label>  
                <input type="date" id="date" name="date" placeholder="FRom date" required> <br>
                <label for="psw"><b>To</b></label>  
                <input type="date" id="to_date" name="to_date" placeholder="To date" required> <br> 
    
                <label for="psw-repeat"><b> class_adjust</b></label>  
                <input type="radio" id="class_adjust" name="class_adjust" placeholder="days" required> <input type = "textbox"><br>  
                
                
                <label for="psw"><b>contact</b></label>  
                <input type="number" id="contact_no" name="contact_no" placeholder="Enter contact_no" required> <br> 
    
                <button type="submit" value ="submit" name="save">Apply</button>  
            </form>
    </div>
    <?php include_once("footer.php");?>
</body>
</html>