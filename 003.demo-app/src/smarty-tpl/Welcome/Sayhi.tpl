<html>
<head>
    <title>Microbe Sayhi</title>
</head>
<body>
    {%if empty($name)%}
    <h1>Hello, Everyone!</h1>
    {%else%}
    <h1>Hello, {%$name%}!</h1>
    {%/if%}
</body>
</html>
