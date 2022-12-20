<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>검색어 결과</h1>
<h3>리스트</h3>
@foreach ($search as $item)
        검색어: {{$item -> search}}<br>
@endforeach
<br>
<a href="/form">검색입력으로</a>
</body>
</html>
