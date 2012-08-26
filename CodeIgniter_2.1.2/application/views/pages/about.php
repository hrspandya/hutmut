<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title><?= $title; ?></title>
  </head>
  <body>
    <div class="container" style="width: 600px;height: 100%;margin: 0 auto;">
        <div class="header" style="width: 100%">
            <h1 style="text-align: center;color: #00afd8"><?php echo "title:" . $title; ?></h1>
            </div>
                <div class="content">
                    <h2 style="font-size: 15px">Hello <?php echo $title; ?></h2>
                <p style="margin-left: 15px">Thank you for signing up to Farm Ads.</p>

                <div class="from">
                    <p class="bold" style="margin-left: 15px;font-weight: bold;font-size: 12px">Regards, <?= $title; ?></p>
                    </div>
             </div> 
        </div>

</body>
</html>