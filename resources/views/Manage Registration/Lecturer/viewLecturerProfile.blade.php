@extends('/Manage Registration/layoutView')  

@section('content')

    <div class="top">
                    Dashboard > Lecturer Profile > <mark class="red"> Profile </mark> 
    </div>
    <div class="center-container">
        <div class="item1">
            <div class="profileleft">

                <!-- details container -->
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
                                            <p>Gender</p>
                                            <input type="text" class="form-control" id="office" placeholder="Gender">
                                        </div>
                                        <div class="form-group">
                                            <p>Office Location</p>
                                            <input type="text" class="form-control" id="office" placeholder="Office Location">
                                        </div>
                                        <div class="form-group">
                                            <p>Expertise</p>
                                            <input type="text" class="form-control" id="expertise" placeholder="Expertise">
                                        </div> 
                <!-- end container -->
            </div>
        </div>
        <div class="item1">
            <div class="profileleft">

                <img class ="candidatefull" src="/images/person.png" alt="candidate 1"/>
            </div>
            <a href="editLecturerProfile">
            <button class="button button1">Edit</button>
            </a>
            <button class="button button1">Delete</button>
        </div>
    </div>

@endsection