@extends('layouts.site_app')

@section('content')



<div class="container mb-3">
    <div class="row">
        <div class="col-md-8 mt-2">

            @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
            @endif
            <form method="post" action="{{route('user.adsBook')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="packid" value="{{$ads->id}}" />
                <div class="row">

                    <div class="col-md-4">
                        <select class="form-control yearselect" name="year">
                            <option value="{{Carbon\Carbon::now()->year}}" selected readonly>{{Carbon\Carbon::now()->year}}</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control mnthselect" name="month">
                            <option value="{{Carbon\Carbon::now()->month}}" selected readonly>{{Carbon\Carbon::now()->format('F')}}</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control dayselect" multiple name="days[]"  id="days" required>
                                <option value="">Day</option>
                                <option value="1">1</option>
                                <option value="2"> 2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact-email">Amount</label>
                    <input type="text" class="form-control" id="amt" name="amount" placeholder="0" readonly>
                </div>
                <div class="form-group">
                    <label for="contact-email">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                    <label for="contact-phone">Url</label>
                    <input type="url" class="form-control" name="url">
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Book Ad</button>
                </div>
            </form>

        </div>

        <div class="col-lg-4 border">
            <div class="mb-3">
                <div class="pt-4">
                    <h3 class="text-primary">{{$ads->name}} Package </h3>
                    <h4 class="text-primary">{{$ads->currency}}{{$ads->amount}} </h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                            <strong class="text-primary"> Package Amount </strong>
                            <h4 id="dateamt">{{$ads->amount}}</h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <strong class="text-primary"> Booked Total Dates</strong>
                            <h4 id="totaldates"> 0 </h4>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                                <strong class="text-primary"> Total amount of</strong>
                                <strong>
                                    <p class="mb-0">(Selected Ads)</p>
                                </strong>
                            </div>
                            <h4 id="totalamt"><strong> 0 </strong></h4>
                        </li>
                    </ul>
                    <!-- <button type="button" class="btn btn-primary btn-block">Book ADD</button> -->
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
    $(".mnthselect").change(function(){
        $(".dayselect option:selected").remove("selected");
    });
    });
</script>