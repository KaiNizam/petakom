<!DOCTYPE html>
<html>
    <head>
    <link href="/css/addLecturer.css" rel="stylesheet">
    <link href="/css/nav.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
        <title>Registration</title>
    </head>
    <body>

        <header class="title">
             <img src="/images/petakom-logo.png" alt="Logo"/>            
             REGISTRATION
        </header>

        <!-- navigation bar -->
        <div class="wrapper">
            <div class="sidebar">
                <ul>
                    <li><a href="/homepage">Dashboard</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Proposal</a></li>
                    <li><a href="#">Activity</a></li>
                    <li><a href="#">Committee Election</a></li>
                    <li><a href="#">Bulletin</a></li>
                </ul> 
            </div>
            <!-- div to add content modules -->            
            <div class="main_content_module">
            <div class="top-reg">
                    Dashboard > Registration > <mark class="reg"> Lecturer </mark> 
            </div> 
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="card">
                                <h2 class="card-title text-center">Add Lecturer's Detail</h2>
                                <div class="card-body py-md-4">
                                    <form _lpchecked="1">
                                        <div class="form-group">
                                            <p>Name</p>
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <p>Email Address</p>
                                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <p>Phone number</p>
                                            <input type="int" class="form-control" id="number" placeholder="Phone number">
                                        </div>
                                        <div class="form-group">
                                            <p>Office Location</p>
                                            <input type="text" class="form-control" id="office" placeholder="Office Location">
                                        </div>
                                        <div class="form-group">
                                            <p>Expertise</p>
                                            <input type="text" class="form-control" id="expertise" placeholder="Expertise">
                                        </div>  
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <a class="btn btn-cancel" href="#">Cancel</a>
                                            <a class="btn btn-primary">Add</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="insert-img">
                    <div class="text-img">
                        <p>Image</p>
                    </div>
                    <img src="/images/person.png" alt="person">
                    <!-- <div class="d-flex flex-row align-items-center justify-content-between">
                        <a class="btn btn-cancel" href="#">Cancel</a>
                        <a class="btn btn-primary">Add</a>
                    </div> -->
                </div>
            </div>
        </div>
        <footer class="footer">
            © 2022 Petakom Management System, Malaysia
        </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\petakom\resources\views/Manage Registration/Lecturer/addLecturerProfile.blade.php ENDPATH**/ ?>