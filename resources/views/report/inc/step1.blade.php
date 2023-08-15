<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h4 class="text-black h4"><u>THE CHURCH OF PENTICOST</u> </h4>
            <p><u>LOCAL STATISTICAL REPORT FORM</u></p>
        </div>
        
    </div>

    <div class="pd-20 card-box">
        <ul class="list-inline">
            <li class="list-inline-item"> <b>|Asembly : Mount Zion
                Assembly|</b></li>
            <li class="list-inline-item"><b>|District  : Downtown
                Ofaakor Area|</b> </li>
            <li class="list-inline-item"><b>|Period (MM/YYYY) : {{ $selectedDate }}</b> </li>
        </ul>
    </div>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h4 class="text-black h4"><u>PART ONE A: Demography/Discipleship</u> </h4>
            <h5 class="text-black h4"><u>DESCRIPTION: Dedicated Children Membership (below 13years)</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $singleReport)
            <tr>
                <th scope="row">1</th>
                <td>Males...</td>
                  <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Females...</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Total(A)...</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                    <td>{{ $singleReport->RecMonth }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>DESCRIPTION: Teenagers ( 13 - 19 years)</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Males...</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Females...</td>
                <td>34</td>
                <td>30</td>
                <td>4</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Total(B)...</td>
                <td>65</td>
                <td>59</td>
                <td>6</td>
                
            </tr>
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>DESCRIPTION: Young Adults (20 - 35years)</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Males...</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Females...</td>
                <td>34</td>
                <td>30</td>
                <td>4</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Total(C)...</td>
                <td>65</td>
                <td>59</td>
                <td>6</td>
                
            </tr>
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>Youth Membership ( 13 - 35 years)</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Males...</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Females...</td>
                <td>34</td>
                <td>30</td>
                <td>4</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Total(D =B+C)...</td>
                <td>65</td>
                <td>59</td>
                <td>6</td>
                
            </tr>
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>Other Adults (Above 35years)</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Males...</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Females...</td>
                <td>34</td>
                <td>30</td>
                <td>4</td>
                
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Total(B)...</td>
                <td>65</td>
                <td>59</td>
                <td>6</td>
                
            </tr>
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>DESCRIPTION : Total Adult Membership (13years & Above) (D + E) = (F)...................</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>........</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            
        </tbody>
    </table>

    <div class="clearfix mb-20 text-center">
        <div class="pull-">
            <h5 class="text-black h4"><u>DESCRIPTION : Overall Membership (Children, Youth, & Other Adults) ( A + F )........</u> </h5>
        </div>
        
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">GENDER/TITLE</th>
                <th scope="col">CURRENT (X)</th>
                <th scope="col"> PREVIOUS
                    (Y)</th>
                    <th scope="col"> DIFF (X - Y)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>........</td>
                <td>31</td>
                <td>29</td>
                <td>2</td>
                
            </tr>
            
        </tbody>
    </table>