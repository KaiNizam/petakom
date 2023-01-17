@extends('/Manage Committee Election/layout')  

@section('content')

<div class="top">
        Dashboard > Committee Election > <mark class="red"> Add </mark> 
</div>
    <div class="center">
        <div class="item1">
        Add  Candidate Profile
        <form method="post" action="{{ route('test.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="profileleft">
                Name
                <div class="input">
                    <input type="text" placeholder="Enter Name" name="candidate_name">
                </div>
                Matrix Number
                <div class="input">
                    <input type="text" placeholder="Enter Matrix Number" name="CandidateID">
                </div>
                Program
                <div class="input">
                    <input type="text" placeholder="Enter Program" name="candidate_program">
                </div>
                Year
                <div class="input">
                    <input type="text" placeholder="Enter Year" name="candidate_year">
                </div>
                Manifesto
                <textarea name="manifesto" placeholder="Enter Manifesto" rows="5" cols="33"></textarea>
            </div>
        </div>
        <div class="item1">
            <div class="profileleft">
                Image
                <div>
                <img class ="pic" src="/images/person.png"/>
                <input type="file" name="image" />
                </div>
                <br><br><br><br><br><br><button type="submit" class="submit">Submit</button>
            </div>
        </div>
        </form>
</div>
@endsection