<html>
<head>
    <script type="text/javascript">
        function change()
        {
            var input = document.getElementById('input');
            if(input.value == '')
            {
                input.style.borderColor = 'red';
            }
            else
            {
                input.style.borderColor = '';
            }
        }
    </script>
</head>
<body onload="change()">
<input id="input" type="text" onkeyup="change()" />
</body>
</html