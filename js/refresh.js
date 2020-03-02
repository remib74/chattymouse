const auto_refresh = setInterval(
  function ()
  {
    $('#mainview').load('index.php #worldUser');
    $('#frmwriteNck').load('index.php #nickname');
  }, 3000 // update the content
  
  );

