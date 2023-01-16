@extends('/Manage Registration/layoutView')  

@section('content')

    <div class="top">
                    Dashboard > Student Profile > Profile > <mark class="red"> Edit </mark> 
    </div>
    <div class="center-container">
        <div class="item1">
            <div class="profileleft">

                <!-- view container -->
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
            <a href="viewStudentProfile">
            <button class="button button1">Cancel</button>
            </a>
            <button class="button button1">Save</button>
        </div>
    </div>

@endsection