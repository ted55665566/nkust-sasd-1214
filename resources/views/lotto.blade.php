<html>
<head>
<style>
  body {
      font-family:標楷體;
     
  }
 
</style>
</head>
<body>

<h2>以下是我的樂透號碼</h2>
<ul>
@foreach ($numbers as $item)
<li>{{ $item }}</li>
@endforeach
</ul>
<h1>特別號碼是</h1>
<li><h1>{{$lucky_number}}<h1></li>
@include('layouts.footer')
</body>
</html>