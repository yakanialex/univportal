
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<link rel="stylesheet" href="css/style.css">
    <title>Home - Registration</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        nav { background:#333; padding:10px; }
        nav a { color:rgb(32, 133, 99); margin:10px; text-decoration:none; }
        .container { width:90%; margin:auto; background:rgba(175, 209, 176, 0.904); padding:20px; }
        input, select { width:100%; padding:8px; margin:5px 0; }
        button { padding:10px; background:green; color:white; border:none; }
        header {
           background: #2c3e50;
           padding: 15px;
           color: white;
           text-align: center;
        }

    </style>
</head>
<body align="centre">
<div class="container">
<nav>
</nav> 
</div>
<div class="container">
<h2>Student Registration Form</h2>
<form action="process.php" method="POST">

<h3>Personal Info</h3>
<input type="text" name="fullname" placeholder="Full Name" required>
<p>gender</p>
<select name="gender">
<option>Male</option>
<option>Female</option>
<option value="">others</option>
</select>
<p>district</p>
<input type="text" name="district" placeholder="District" required>
</select>
<p>nationality</p>

<select name="nationality">
<option>Ugandan</option>
<option>Tanzanian</option>
<option>Kenyan</option>
<option>Rwandan</option>
<option>Burundian</option>
<option>S.Sudan</option>

<option>Other</option>
</select>

<h3>highest Education Level</h3>
<select name="education_level">
<option>O Level</option>
<option>A Level</option>
<option>Diploma</option>
<option>Barcelor Degree</option>
</select>

<input type="text" name="olevel" placeholder="O Level Subjects & Grades eg.MTC-A or MTC-D1 ">
<input type="text" name="alevel" placeholder="A Level subjects & Performance eg. BIO-A, CHE-B, MTC-A, Sub_ict-c3, GP-D1 ">
<p>
    Field
</p>
<select name="field">
<option>Arts</option>
<option>Science</option>
</select>
<p>cource</p>
<select name="course">
<option>Nursing dip/cert</option>
<option>sciece in agric with education</option>
<option>science with education</option>
<option>Environmental scie & tech</option>
<option>sciece in oil & gas mgt</option>
<option>computer sci and inf tech</option>
<option>Business Adiministration</option>
<option>leisure, tourisim and Hotel mgt</option>
<option>Human Resource mgt</option>
<option>Industrial Art and Design</option>
<option>Fashion design</option>
<option>Interior Design</option>
<option>Journalism and mass com</option>
<option>soial work & social Admin</option>
<option>Public Adiministration</option>
<option>political sciece</option>
<option>Internation Relation</option>
<option>Development Studies</option>
<option>Guidiance & counciling</option>
<option>Art with Education</option>
<option>Interior & Landscap Design</option>
<option>islamic Banking</option>
<option>Film Making</option>
<option>English Course</option>
<option>Adiministrative & sec studies</option>
<option>Procument & supply chn Mgt</option>
<option>Pre-university bridge cources</option>
<option>High Educ Sert</option>
<option>Library, Achieves & record mgt</option>
<option>Primary Education</option>
<option>Ealy Childhood Dev't</option>
<option>Ealy Childhood Education</option>
<option>BA in History</option>
<option>Industrial Art with Education</option>
<option>Education with Geography</option>
<option>Art with Education in Religious Education</option>
<option>Art and Social Scie</option>
<option>Primary Education in Religious Education</option>
<option>Dip in primary SST</option>
<option>Bachelor of Literature</option>
<option>Public Health & Admin</option>
</select>
<h3>Select program choice</h3>
<select name="program">
<option>Full Time</option>
<option>Weekend</option>
<option>In-Service</option>
</select>

<h3>National ID Number</h3>
<input type="text" name="nin"
       placeholder="NIN"
       oninput="this.value = this.value.toUpperCase()">
<h3>contact</h3>
   <input type="tel" name="contact"
    placeholder="Phone (e.g. 0771234567)"
    pattern="^0[0-9]{9}$"
    title="Enter a valid Ugandan number (e.g. 0771234567)"
    required>
   <h3>email</h3>
    <input type="email" name="email"
    placeholder="Email address"
    required>
<h3>Parent/Guardian</h3>
<input type="text" name="parent_name" placeholder="Parent/Guardian Name">
<p>contact</p>
<input type="tel" name="parent_contact"
       placeholder="Parent Contact"
       pattern="^(?:\+256|0)[0-9]{9}$"
       required>
<p>NIN</p>
<input type="text" name="parent_nin"
       placeholder="Parent NIN"
       oninput="this.value = this.value.toUpperCase()">
<button type="submit">Submit</button>
</form>
<form action="/upload-endpoint" method="POST" enctype="multipart/form-data">
  <label for="myFile">Select a file:</label>
  <input type="file" id="myFile" name="myFile">
  <input type="submit" value="Upload">
</form>
</div>
<h4><b><u>Note:</u></b></h4>
<div class="container">
<p>
    Submit the copy of your provisional results and your National ID or parents/guardians national ID
    through the folowing Watsapp Number: 0765885689
</p>
<p>
     <div class="social">
        <a href="#">watsap</a>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
    </div>
</p>
</div>
<nav>
<footer>
<div class="container">
    <p>
        &copy; 2026 OUR STUDENT REGISTRATION SYSTEM
    </p>
</nav>
   
</div>
</footer>
</body>
</html>
