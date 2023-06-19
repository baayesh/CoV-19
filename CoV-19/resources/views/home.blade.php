<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoV-19</title>
</head>
<body>
  <h1>Home.Blade.php</h1>
  <table border="1">
    <tr>
      <th>local_new_cases</th>
      <th>local_total_cases</th>
      <th>number_of_individuals_in_hospitals</th>
      <th>local_deaths</th>
      <th>local_new_deaths</th>
      <th>local_recovered</th>
      <th>local_active_cases</th>
      <th>global_new_cases</th>
      <th>global_total_cases</th>
      <th>global_deaths</th>
      <th>global_new_deaths</th>
      <th>global_recovered</th>
      <th>total_pcr_testing_count</th>
    </tr>
    <tr>
      <td>{{$detail['local_new_cases']}}</td>
      <td>{{$detail['local_total_cases']}}</td>
      <td>{{$detail['number_of_individuals_in_hospitals']}}</td>
      <td>{{$detail['local_new_deaths']}}</td>
      <td>{{$detail['local_total_cases']}}</td>
      <td>{{$detail['local_recovered']}}</td>
      <td>{{$detail['local_active_cases']}}</td>
      <td>{{$detail['global_new_cases']}}</td>
      <td>{{$detail['global_total_cases']}}</td>
      <td>{{$detail['global_deaths']}}</td>
      <td>{{$detail['global_new_deaths']}}</td>
      <td>{{$detail['global_recovered']}}</td>
      <td>{{$detail['total_pcr_testing_count']}}</td>
    </tr>
  </table>

  <form method="POST" action="{{route('UpdateData')}}">
      @csrf
      <button type="Submit">Update Data</button>
  </form>
</body>
</html>

