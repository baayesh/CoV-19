<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/helpAndGuideStyles.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha256-fx038NkLY4U1TCrBDiu5FWPEa9eiZu01EiLryshJbCo=" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

    @foreach($HelpAndGuide as $hag)
    <a href="{{$hag['link']}}" class="undeline-remove">
      <div class="container mt-5 ">
          <div class="row justify-content-center">
              <div class="col-lg-4">
                  <div class="card card-margin">
                      <div class="card-body pt-0 mt-3">
                          <div class="widget-49">
                              <div class="widget-49-title-wrapper">
                                  <div class="widget-49-date-primary">
                                      <?php 
                                        $createdat = \Carbon\Carbon::parse($hag['created_at']);
                                        $date = $createdat->format('d');
                                        $month = $createdat -> format('M');
                                        $time = $createdat->format('H : i')

                                      ?>
                                      <span class="widget-49-date-day">{{$date}}</span>
                                      <span class="widget-49-date-month">{{$month}}</span>
                                  </div>
                                  <div class="widget-49-help-info">
                                      <span class="widget-49-pro-title">{{$hag['user']}} </span>
                                      <span class="widget-49-help-time">{{$time}}</span>
                                  </div>
                              </div>
                              <p class="widget-49-mar">{{$hag['description']}}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </a>
    @endforeach
</body>
</html>