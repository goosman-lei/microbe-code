<html>
<head>
</head>
<body>
    <h1><font color="red">Error occurs in smarty-mobile: {%$msg%}</font></h1>
    {%if $type == 'error'%}
        {%$datas['errfile']%}:{%$datas['errline']%}
    {%elseif $type == 'exception'%}
        {%$datas['file']%}:{%$datas['line']%}
    {%elseif $type == 'failure'%}
        <pre>{%$datas|print_r:true%}</pre>
    {%/if%}
</body>
</html>