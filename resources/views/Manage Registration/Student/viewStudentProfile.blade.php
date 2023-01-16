@extends('/Manage Registration/layoutView')  

@section('content')

    <div class="top">
                    Dashboard > Student Profile > <mark class="red"> Profile </mark> 
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
                    <p>Home Address</p>
                    <input type="text" class="form-control" id="office" placeholder="Home Address">
                </div>
                <div class="form-group">
                    <p>Program</p>
                    <input type="text" class="form-control" id="expertise" placeholder="Program">
                </div>  
                <!-- end container -->
            </div>
        </div>
        <div class="item1">
            <div class="profileleft">

                <img class ="candidatefull" src="/images/candidate/full 1.png" alt="candidate 1"/>
            </div>
            <a href="editStudentProfile">
            <button class="button button1">Edit</button>
            </a>
            <button class="button button1">Delete</button>
        </div>
    </div>

@endsection