@extends('/Manage Committee Election/layout')  

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="top">
                    Dashboard > <mark class="red"> Committee Election </mark> 
                </div>
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button class="button button1">Search</button>
                    <a href="/ElectionResultPage">
                        <button class="button button2">Result</button>
                    </a>>
                    <a href="AddCandidatePage">
                        <button class="button button2">Add +</button>
                    </a>
                </div>
                <div class="center">
                    <div >
                        Calon Majlis Tertinggi
                    </div>

                    <div class="item">
                    @foreach ($users as $VotingRecord)
                    <!-- <img src="{{ asset('images/candidate/') }}"/> -->
                        <a href="CandidateProfilePage">
                        {{$users->candidate_name}}
                        <a href="EditCandidatePage">
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                        </a>
                    </div>
                    @endforeach
                    <!-- <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 2.png" alt="candidate 2">
                        <span class="caption">Ik Shim A/P<br>Eh Fhot</span>
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                    </div>
                    <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 3.png" alt="candidate 2">
                        <span class="caption">Muhammad Nurhidayat<br>Bin Mohd Taufik</span>
                        <mark class="edit">Edit</mark>   <mark class="delete">Delete</mark>
                    </div> -->
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

@endsection