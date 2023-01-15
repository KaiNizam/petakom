@extends('/Manage Committee Election/layout')  

@section('content')

<div class="top">
        Dashboard > Committee Election > <mark class="red"> Add </mark> 
</div>
    <div class="center">
        <div class="item1">
        Add  Candidate Profile
            <div class="profileleft">
                Name
                <div class="input">
                    <input type="text" placeholder="Enter Name" id="name">
                </div>
                Program
                <div class="input">
                    <input type="text" placeholder="Enter Program" id="program">
                </div>
                Year
                <div class="input">
                    <input type="text" placeholder="Enter Year" id="year">
                </div>
                Manifesto
                <textarea id="story" placeholder="Enter Manifesto" rows="5" cols="33"></textarea>
            </div>
        </div>
        <div class="item1">
            <div class="profileleft">
                Image
                <div>
                <img class ="pic" src="/images/person.png"/>
                </div>
                <br><br><br><br><br><br><button type="submit" class="submit">Submit</button>
            </div>
        </div>
</div>
@endsection