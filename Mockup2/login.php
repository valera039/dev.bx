<!DOCKTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>LoginPage</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    <?php include 'header.php'; ?>
        <div class="space"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-4">
                    <h6>Try the product out for free.</h6>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
                        <label for="exampleInputEmail1"></label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                        <label for="exampleInputEmail1"></label>
                        <button type="submit" class="btn btn-dark col-12">Start free trial</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="space"></div>
        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>
