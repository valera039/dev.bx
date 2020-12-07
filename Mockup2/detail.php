<!DOCKTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>homePage</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="space"></div>
        <div class="container-fluid bg-light text-left">
            <div class="row justify-content-center align-items-start">
                <div class="col-sm-4">
                    <h1>Feature that is amazing</h1>
                    <div class="space"></div>
                    <p class="text3">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. </p>
                    <ul>
                        <li class="marg">Benefit of Feature</li>
                        <li class="marg">Benefit of Feature</li>
                        <li class="marg">Benefit of Feature</li>
                    </ul>
                    <div class="space"></div>
                    <button class="btn btn-warning col-6">Buy</button>
                    <div class="space"></div>
                </div>
                <div class="col-sm-4">
                    <img src="img/moto4.png" class="rounded" alt="4">
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="container-fluid text-left">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h1>Value Propositipon</h1>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Value Name</th>
                                <th scope="col">Property</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First value proposition</td>
                                <td>First Property proposition</td>
                            </tr>
                            <tr>
                                <td>Second value proposition</td>
                                <td>Second Property proposition</td>
                            </tr>
                            <tr>
                                <th class="bg-light text-center" colspan="2">Addinational Property</th>
                            </tr>
                            <tr>
                                <td>First value proposition</td>
                                <td>First Property proposition</td>
                            </tr>
                            <tr>
                                <td>Second value proposition</td>
                                <td>Second Property proposition</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="space"></div>
                    <button class="btn btn-lg btn-warning col-3">Buy</button>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <?php include 'sites.php'; ?>
        <?php include 'footer.php'; ?>
    </body>
</html>