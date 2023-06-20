<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/homeStyles.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha256-fx038NkLY4U1TCrBDiu5FWPEa9eiZu01EiLryshJbCo=" crossorigin="anonymous">
  <title>CoV-19</title>
</head>
<body>
        @if (Route::has('login'))
            <div class="d-flex justify-content-end align-items-center lis-bg-light p2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="remove-underline user-hover top-pannel">Help & Guide People</a>
                    @else
                    <a href="{{ route('login') }}" class="remove-underline user-hover top-pannel">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="remove-underline  user-hover register top-pannel">Register</a>
                    @endif
                 @endauth
            </div>
        @endif
        <section class="lis-bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center">
                        <div class="heading pb-4 ">
                            <h2>Update with CoV-19</h2>
                            <h5 class="font-weight-normal lis-light"> Don't Go outside Without Masks </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-md-6 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="covid-table">
                            <div class="covid-header lis-bg-red lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                            <h5 class="text-uppercase lis-latter-spacing-2 text-white">Sri Lanka</h5>
                                <h1 class="display-4 lis-font-weight-500 text-white">{{$detail['local_new_cases']}}</h1>
                                <p class="mb-0 text-white">Reported New Cases</p>
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li>{{$detail['local_active_cases']}} - Active Cases</li>
                                    <li>{{$detail['local_total_cases']}} - All Cases Reported</li>
                                    <li>{{$detail['number_of_individuals_in_hospitals']}} - Total Individuals in Hospitals</li>
                                    <li>{{$detail['local_new_deaths']}} - New Deaths</li>
                                    <li>{{$detail['local_deaths']}} - Total Deaths</li>
                                    <li class="recovered">{{$detail['local_recovered']}} - Recovered</li>
                                </ul>
                                <div class="lis-rounded-circle-50" data-abc="true"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-md-6 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="covid-table">
                            <div class="covid-header lis-bg-red lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                            <h5 class="text-uppercase lis-latter-spacing-2 text-white">Global</h5>
                                <h1 class="display-4 lis-font-weight-500 text-white">{{$detail['global_new_cases']}}</h1>
                                <p class="mb-0 text-white">Reported New Cases</p>
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li>No accurate info about Active Cases</li>
                                    <li>{{$detail['global_total_cases']}} - All Cases Reported</li>
                                    <li>No accurate Info about hospitalized patients</li>
                                    <li>{{$detail['global_new_deaths']}} - New Deaths</li>
                                    <li>{{$detail['global_deaths']}} - Total Deaths</li>
                                    <li class="recovered">{{$detail['global_recovered']}} - Recovered</li>
                                </ul>
                                <div class="lis-rounded-circle-50" data-abc="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <div>
                <h5 class="pcr">
                    PCR TESTING COUNT - {{$detail['total_pcr_testing_count']}} 
                </h5>
            </div>
              <form method="POST" action="{{route('UpdateData')}}">
                @csrf
                <button type="Submit" class="btn-middle btn-hover ">Access to Updated Data</button>
              </form>
              <form method="GET" action="{{route('HelpAndGuide')}}">
                @csrf
                <button type="Submit" class="btn-middle btn-hover">Get Help from Others</button>
              </form>
            </div>
        </section>

 

    </body>
</html>

