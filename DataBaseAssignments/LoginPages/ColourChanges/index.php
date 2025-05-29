<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>text rotator vanilla javascript</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2 id="text">be
    <span style="display: initial;">Bold</span>
    <span>creative</span>
    <span>Amazing</span>
    <span>unique</span>
    <span>cool</span>
    <sapn>Awesome</span>
    </h2>
    <script type="text/javascript">
    var text = document.getElementById('text');
    var word = text.getElementsByTagName('span');

    var i=0;
    function rotator(){
      word[i].style.display = 'none';
      i = (i + 1) % word.length;
      word[i].style.display = 'initial';
    }
    setInterval(rotator, 800);
    </script>
  </body>
  </html>
