<?php 

include "verifyUser.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="studentMainPage.css">
    <link rel="stylesheet" href="profile_button.css">
    <link rel="stylesheet" href="footer.css">
    <script src="studentManagementHome.js"></script>
</head>
<body>
    <header>
        <nav id="mainNav">
            <div id="subSection">
                <img onclick="menuToggler()" id="books" src="menu.png" alt="Image of a menu icon">
                <img id="menuIcon" src="book-stack.png" alt="Image of a book stack">
                <p>Student Management System</p>
            </div>
                <div id="subSection">
                    <p id="teacherName">Student Name</p>
                    <div class="action">
                         <div class="profile" onclick="activateMenu();">
                             <img src="ProfilePictures/profile_default.jpg" alt="Profile Picture">
                         </div>
                         <div class="menu">
                             <h3>Menu</h3>
                             <ul>
                                 <li><img src="ProfilePictures/profile.png" alt=""><a href="studentMainPage.html">Profile</a></li>
                                 <li><img src="ProfilePictures/help.png" alt=""><a href="#">Grades</a></li>
                                 <li><img src="ProfilePictures/help.png" alt=""><a href="studentAssessmentPage.html">Settings</a></li>
                                 <li><img src="ProfilePictures/logout.png" alt=""><a href="studentLogin.html">Logout</a></li>
                             </ul>
                         </div>
                    </div>
                 </div>
        </nav>
    </header>

    <div id="content">
        <!--
        <nav id="sideNav">
            <h3>Navigation</h3>
            <button>Assignment 1</button>
            <button>Assignment 2</button>
            <button>Midterm</button>
            <button>Assignment 3</button>
            <button onclick="changeAssigmentName()">Add assignment</button>
        </nav>
        -->
  
        
        <nav id="sideNav">
            <h3>Navigation</h3>
            <form action="#" onclick="menuToggler()">
                <button>Assignment 1</button>
            </form>
            <form action="#" onclick="menuToggler()">
                <button>Assignment 2</button>
            </form>
            <form action="#" onclick="menuToggler()">
                <button>Assignment 3</button>
            </form>
            <form action="#" onclick="menuToggler()">
                <button>Midterm</button>
            </form>
            <form action="chartPageStudent.html" onclick="menuToggler()">
                <button>Chart for Student</button>
            </form>
            <form action="studentAssessmentPage.html" onclick="menuToggler()">
                <button>Dark Mode</button>
            </form>

        </nav>

        <!---------------------------------------------------------- Default ---------------------------------------------------------->
        <div id="middleSection">
            <h3 id="assignmentName">Selected Assignment</h3>

            <div id="titles">
                <h4>Grade</h4>
                <h4>Statistics</h4>
            </div>

            <div id="tableContainer">
     
                <div id="leftTable">
                    <p>Grade: grade%</p>

                </div>
                <div id="lightTable">
                    <p>Class mean: grade%</p>
                    <p>Class median: grade%</p>
                    <p>Standard deviation: grade%</p>
                </div>

            </div>
            <img src="calendar.png" alt="Calendar picture">
        </div>

        <!---------------------------------------------------------- Add Assignment ---------------------------------------------------------->
        <div id="middleSectionAssignment" style="display:none;">
            <form id="questionsForm">


                
            <h3 id="assignmentName">Assignment builder</h3>

            <div id="titles">
                <h4>Informations</h4>
            </div>

            <div id="tableContainerAssignment">
                
                <div id="leftTable">
                    <br>
                    <span>Assignment Name</span>
                    <br>
                    <br>
                    <span>Weight</span>
                    <br>
                    <br>
                    <span>Number of Questions</span>
                    <br>

                </div>
                <div id="lightTable">
                    
                        <br>
                        <label>
                            <input type="text">
                        </label>
                        <br>
                        <br>
                        <label>
                            <input type="number" maxlength="100">
                        </label>
                        <br>
                        <br>
                        <label>
                            <input type="number" oninput="addQuestion()" id="numberQuestionInput">
                        </label>
                        <br>
                        
                    
                </div>
                

            </div>
            <!---------------------------------------------------------- Second table of Add Assignment ---------------------------------------------------------->
            <h3 id="assignmentName">Questions</h3>

            <div id="titles">
                <h4>Question Number</h4>
                <h4>Weight</h4>
            </div>
                <div id="tableContainer">
                    <br id="spaceHolder">
                    <div id="leftTableAssignment">
                        
                            
                        
                    </div>
                    <div id="lightTableAssignment">
                    
                    </div>

                </div>
                <h4 id="submitButton">
                    <input type="submit" name="submit"  value="Submit">
                </h4>
                
        </form>
        </div>



    </div>

    <footer>
        <div class="contaier">
            <div class="row">
                <div class="footer-col">
                    <h4>School</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FaQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online Shop</h4>
                    <ul>
                        <li><a href="#">Books</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Rules</h4>
                    <ul>
                        <li><a href="#">Academic Integrity</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





</body>
</html>