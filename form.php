<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Registration Form</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="styles/form.css">
        <link rel="shortcut icon" type="image/png" href="images/contact-form.png">
    </head>

    <body>
        <form method="POST" action="resume.php" enctype="multipart/form-data">
            <div class="title">
                <h1>Registration Form</h1>
            </div>
                <table class="profileInfo">
                    <h2>Profile</h2>
                    <hr>

                        <tr>
                            <td>Profile Picture</td>
                            <td><input type="file" name="img"></td>
                        </tr>
                    
                        <tr>
                            <td>Full Name</td>
                            <td><input type="text" required name="fullname" placeholder="Enter Full Name"></td>
                        </tr>

                        <tr>
                            <td>Title/Course</td>
                            <td>
                                <input type="text" required name="title1" placeholder="Enter Title/Course">
                                <br>
                                <input type="radio" required name="title" id="student" value="student">
                                <label for="student">Student</label>
                                <input type="radio" required name="title" id="working" value="working">
                                <label for="working">Working</label>
                            </td>
                        </tr>

                        <tr>
                            <td>Objective</td>
                            <td><textarea required name="obj" placeholder="Enter Objective" style="height: 100px; ; width: 75vh; overflow: auto;"></textarea></td>
                        </tr>
                </table>

                <table class="contactInfo">
                    <h2>Contact Information</h2> 
                    <hr>

                        <tr>
                            <td>Contact Number</td>
                            <td><input type="tel" pattern="[0-9]{11}" required name="contactnumber" placeholder="Enter Contact Number"></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type="email" required name="email" placeholder="Enter Valid Email"></td>
                        </tr>

                        <tr>
                            <td>Facebook Link</td>
                            <td><input type="text" required name="facebook" placeholder="Enter Facebook Link"></td>
                        </tr>

                        <tr>
                            <td>Github Link</td>
                            <td><input type="text" required name="github" placeholder="Enter Github Link"></td>
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td><input type="text" required name="address" placeholder="Enter Address"></td>
                        </tr>
                    </div>
                </table>

                <table class="education">
                    <h2>Educational Background</h2>
                    <hr>

                    <tr>
                        <td>
                        <h3>Elementary</h3>
                        </td>
                    </tr>
                        <tr>
                            <td>Year Graduated</td>
                            <td><input type="text" required name="year1" placeholder="Enter Year Graduated"></td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td><input type="text" required name="school1" placeholder="Enter School"></td>
                        </tr>

                    <tr>
                        <td>
                        <h3>High School</h3>
                        </td>
                    </tr>
                        <tr>
                            <td>Year Graduated</td>
                            <td><input type="text" required name="year2" placeholder="Enter Year Graduated"></td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td><input type="text" required name="school2" placeholder="Enter School"></td>
                        </tr>

                    <tr>
                        <td>
                        <h3>Senior High School</h3>
                        </td>
                    </tr>
                        <tr>
                            <td>Year Graduated</td>
                            <td><input type="text" required name="year3" placeholder="Enter Year Graduated"></td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td><input type="text" required name="school3" placeholder="Enter School"></td>
                        </tr>

                    <tr>
                        <td>
                        <h3>College</h3>
                        </td>
                    </tr>
                        <tr>
                            <td>Year Graduated</td>
                            <td><input type="text" required name="year4" placeholder="Enter Year Graduated"></td>
                        </tr>

                        <tr>
                            <td>School</td>
                            <td><input type="text" required name="school4" placeholder="Enter School"></td>
                        </tr>
                </table>

                <table class="experienceForm">
                    <h2>Experience / Organization</h2>
                    <hr>
                    <tbody id="experienceTableBody">
                        <tr>
                            <td>Company/Organization</td>
                            <td><input type="text" required name="com1" placeholder="Enter Company/Organization"></td>
                        </tr>

                        <tr>
                            <td>Year</td>
                            <td><input type="text" required name="comyear1" placeholder="Enter Year"></td>
                        </tr>

                        <tr>
                            <td>Position</td>
                            <td><input type="text" required name="compos1" placeholder="Enter Position"></td>
                        </tr>

                        <tr>
                            <td>Description</td>
                            <td><textarea required name="comdes1" placeholder="Enter Description" style="height: 100px; width: 75vh; overflow: auto;"></textarea></td>
                        </tr>
                    </tbody>
                </table>

                <button onclick="addExperience()">Add Company/Organization</button>

                <script>
                    let experienceCount = 1;

                    function addExperience() {
                        experienceCount++;

                        const tableBody = document.getElementById('experienceTableBody');

                        const newRow = document.createElement('tr');

                        newRow.innerHTML = `
                            <td>Company/Organization</td>
                            <td><input type="text" required name="com${experienceCount}" placeholder="Enter Company/Organization"></td>
                        `;

                        tableBody.appendChild(newRow.cloneNode(true));

                        newRow.innerHTML = `
                            <td>Year</td>
                            <td><input type="text" required name="comyear${experienceCount}" placeholder="Enter Year"></td>
                        `;

                        tableBody.appendChild(newRow.cloneNode(true));

                        newRow.innerHTML = `
                            <td>Position</td>
                            <td><input type="text" required name="compos${experienceCount}" placeholder="Enter Position"></td>
                        `;

                        tableBody.appendChild(newRow.cloneNode(true));

                        newRow.innerHTML = `
                            <td>Description</td>
                            <td><textarea required name="comdes${experienceCount}" placeholder="Enter Description" style="height: 100px; width: 75vh; overflow: auto;"></textarea></td>
                        `;

                        tableBody.appendChild(newRow);
                    }
                </script>
                
                <table class="skillsForm">
                    <h2>Professional Skills</h2>
                    <hr>

                    <table id="skillTable">
                        <tr>
                            <td>Skills</td>
                            <td><input type="text" required name="skill1" placeholder="Enter Skill"></td>
                        </tr>

                        <tr>
                            <td>Skills</td>
                            <td><input type="text" required name="skill2" placeholder="Enter Skill"></td>
                        </tr>

                        <tr>
                            <td>Skills</td>
                            <td><input type="text" required name="skill3" placeholder="Enter Skill"></td>
                        </tr>

                        <tr>
                            <td>Skills</td>
                            <td><input type="text" required name="skill4" placeholder="Enter Skill"></td>
                        </tr>
                    </table>
                </table>

                <button onclick="addSkillField()">Add Skill</button>

                <script>
                    var skillCounter = 4;

                    function addSkillField() {
                        skillCounter++;
                        var table = document.getElementById("skillTable");
                        var newRow = table.insertRow(table.rows.length);
                        var cell1 = newRow.insertCell(0);
                        var cell2 = newRow.insertCell(1);

                        cell1.innerHTML = "Skills";
                        cell2.innerHTML = '<input type="text" required name="skill' + skillCounter + '" placeholder="Enter Skill">';
                    }
                </script>

                <table class="interestForm">
                    <h2>Interests</h2>
                    <hr>

                    <table id="interestTable">
                        <tr>
                            <td>Interests</td>
                            <td><input type="text" required name="inter1" placeholder="Enter Interest"></td>
                        </tr>

                        <tr>
                            <td>Interests</td>
                            <td><input type="text" required name="inter2" placeholder="Enter Interest"></td>
                        </tr>
                        
                        <tr>
                            <td>Interests</td>
                            <td><input type="text" required name="inter3" placeholder="Enter Interest"></td>
                        </tr>
                        
                        <tr>
                            <td>Interests</td>
                            <td><input type="text" required name="inter4" placeholder="Enter Interest"></td>
                        </tr>
                    </table>
                </table>

                <button onclick="addInterestField()">Add Interest</button>

                <script>
                    var interestCounter = 4;

                    function addInterestField() {
                        interestCounter++;
                        var table = document.getElementById("interestTable");
                        var newRow = table.insertRow(table.rows.length);
                        var cell1 = newRow.insertCell(0);
                        var cell2 = newRow.insertCell(1);

                        cell1.innerHTML = "Interests";
                        cell2.innerHTML = '<input type="text" required name="inter' + interestCounter + '" placeholder="Enter Interest">';
                    }
                </script>

                
                <table class="languageForm">
                    <h2>Languages</h2>
                    <hr>
                    
                    <table id="languageTable">
                        <tr>
                            <td>Primary Language</td>
                            <td><input type="text" required name="lang1" placeholder="Enter Language"></td>
                        </tr>
                    </table>
                </table>

                <button onclick="addLanguageField()">Add Language</button>

                <script>
                    var languageCounter = 1;

                    function addLanguageField() {
                        languageCounter++;
                        var table = document.getElementById("languageTable");
                        var newRow = table.insertRow(table.rows.length);
                        var cell1 = newRow.insertCell(0);
                        var cell2 = newRow.insertCell(1);

                        cell1.innerHTML = "Foreign Language";
                        cell2.innerHTML = '<input type="text" required name="lang' + languageCounter + '" placeholder="Enter Language">';
                    }
                </script>

                <table>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            
        </form>
    </body>
</html>