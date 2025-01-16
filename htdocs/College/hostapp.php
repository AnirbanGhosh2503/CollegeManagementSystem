<?php include_once("header.php");?>
<?php include_once("sidebar.php");?>
<div class="content" style="background-color: darkslategrey">
    <br><h2>Apply Here</h2><br> 
            <form align="center" action="apply_success.php" method="POST">  
                <label for="DEPT"><b>DEPT</b></label>  
                <input type="text" id="dept" name="dept" placeholder="Enter your DEPT" required> <br> 
    
                <!-- Uncomment and fix the department dropdown if needed
                <label for="dept1">Department</label>
                <select name="dept1" id="dept1">         
                    <?php 
                    /*
                    $sql= "select * from department";
                    $sql_query = mysqli_query($conn,$sql);
                    while ($result = mysqli_fetch_assoc($sql_query)){
                    ?>
                        <option value=<?php echo $result['dept_id']; ?>> <?php echo $result['dept_name'];?> </option>
                    <?php
                    }
                    */
                    ?>
                </select>
                <br>
                -->
                
                <label for="YEAR"><b>YEAR</b></label>  
                <input type="number" id="year" name="year" placeholder="Enter your YEAR" required> <br> 
                
                <!-- <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="#">Choose your gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select><br>
                
                <label for="mob"><b>Mobile</b></label>  
                <input type="mob" id="mob" name="mob" placeholder="Enter your mobile number" required> <br> 

                <label for="dept">Dept</label>
                <select name="dept" id="dept">
                    <option value="#">Choose your dept</option>
                    <option value="CSE">CSE</option>
                    <option value="EE">EE</option>
                    <option value="ECE">ECE</option>
                    <option value="CE">CE</option>
                </select><br>
                
                <label for="year"><b>Year</b></label>  
                <input type="year" id="year" name="year" placeholder="Enter year" required> <br> 
                
                
                <label for="address"><b>Address</b></label>  
                <input type="address" id="address" name="address" placeholder="Enter your Address" required> <br>

                 <label for="date"><b>DOB</b></label>  
                <input type="date" id="date" name="date" placeholder="DOB" required> <br>


                <label for="designation"><b>Email</b></label>  
                <input type="email" id="designation" name="designation" placeholder="Enter your email" required> <br>  -->
                <button type="submit" value="submit" name="save">Apply</button>  
            </form>
</div>
<?php include_once("footer.php");?>