@extends('/Manage Committee Election/layout')  

@section('content')
<head>
<title>Committe</title>
</head>
                <div class="top">
                    Dashboard > <mark class="red"> Committee Election </mark> 
                </div>
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button class="button button1">Search</button>
                    <a href="/Manage Committee Election/ElectionResultPage">
                        <button class="button button2">Result</button>
                    </a>>
                    <a href="VotingPage">
                        <button class="button button2">Vote</button>
                    </a>
                </div>
                <div class="center">
                    <div >
                        Calon Majlis Tertinggi
                    </div>
                    <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 1.png" alt="candidate 1"/>
                        <a href="StudCandidateProfilePage">
                            <span class="caption">{{}}</span>
                        </a>
                    </div>
                    <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 2.png" alt="candidate 2">
                        <span class="caption">Ik Shim A/P<br>Eh Fhot</span>
                    </div>
                    <div class="item">
                        <img class ="candidate" src="/images/candidate/candidate 3.png" alt="candidate 2">
                        <span class="caption">Muhammad Nurhidayat<br>Bin Mohd Taufik</span>
                    </div>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>

@endsection