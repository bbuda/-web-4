<?php 
    $name = $_GET['name'];
    $email = $_GET['email'];
    $appeal_type = $_GET['appeal_type'];
    $message = $_GET['message'];
?>
    
    
    <?php include "./header.html";?>
    <section class="support">
    <form action="home.php"  method="post">
          <label class="name" for="support_name">Name</label>
          <input placeholder="Enter your name" id="name" name="name" type="text" value=<?php echo $name ?>>
  
          <label class="email" for="support_email">Email Address</label>
          <input placeholder="Enter your email" id="email" type="text" name="email" value=<?php echo $email ?>>
  
          <label class="how_us">How did you hear about us</label>
          <select name="category">
            <option value="friends">From friends</option>
            <option value="internet">From the Internet</option>
            <option value="employees">From employees</option>
            <option value="advertising">From advertising</option>
          </select>
  
          <label class="appeal-type">Appeal type</label>

          <div class="appeal-wrapper">
            <input id="complaint" type="radio" name="appeal_type" value ="complaint" <?php if ($appeal_type == "complaint") echo 'checked' ?> >
            <label for="complaint" class="complaint">A complaint</label>
        
            <input id="appeal" class="appeal" type="radio" name="appeal_type" class="appeal" value ="appeal" <?php if ($appeal_type == "appeal") echo 'checked' ?>>
            <label for="appeal" class="appeal" >Appeal</label>
          </div>

          <label class = "message"> Message </label>
          <textarea name="message"><?php echo $message ?></textarea>
          
          <label class = "sfile-label" for="file">
            <span>Attach a file if necessary</span>
            <span class="file-img"><img class="input__file-icon" src="add.png" alt="Выбрать файл" width="25"></span>
          </label>
          <input type="file" id="file", class="input-file" name="file">

          <div class="agreement">
            <input type="checkbox" id="policy" name="policy" class="checkbox_policy" checked>
            <label for="policy">
              You agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a>.
            </label>
          </div>
          

          <button >Submit</button>
  
        </form>
    </section>

</body>
</html>