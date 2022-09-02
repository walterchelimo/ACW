<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
<style>

</style>

<body class="bg-light">

    <div class="container-fluid col-lg-8 col-sm-12" style="font-size:22px;">
        <div class="row p-2" style="background-color:orange;font-weight:bolder">
            <div class="col">
                <span>KazerBet</span>
            </div>
            <div class="col" style="color:black;">
                <span style="float:right">Balance: 21 ksh</span>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="text-align:center">
                        <i class="bi bi-chart"></i><span style="color:gray;font-size:30px;">Results Outcome</span>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <i class="bi bi-chart"></i><span style="color:gray;font-size:30px;">Your Bet History</span>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-3 mx-1">
            <table class="table table-bordered mb-0">
                <tr>
                    <td class="col-lg-3" style="text-align:center; color:red;">2076: </td>
                    <td class="col-lg-3" style="text-align:center;">5: </td>
                    <td class="col-lg-3" style="text-align:center;">big </td>
                    <td class="col-lg-3" style="text-align:center;">..</td>
                </tr>
            </table>
            <table class="table table-bordered mt-0">
                <tr>
                    <td class="col-lg-3" style="text-align:center; color:red;">2077: </td>
                    <td class="col-lg-9" style="text-align:center; color:red;">Game betting time: 3 seconds </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <div class="col">
                <div class="card" style="background-color:red;color:white;border-radius:6px;">
                    <div class="card-body" style="text-align:center">
                        <div class="row">
                            <span>odd</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>1,3,7,9</span>
                            </div>
                            <div class="col">
                                <span>x1.9</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>5</span>
                            </div>
                            <div class="col">
                                <span>x1.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-success" style="color:white;border-radius:6px;">
                    <div class="card-body" style="text-align:center">
                        <div class="row">
                            <span>Even</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>4,3,6,8</span>
                            </div>
                            <div class="col">
                                <span>x1.9</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>0</span>
                            </div>
                            <div class="col">
                                <span>x1.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-info" style="color:white;border-radius:6px;">
                    <div class="card-body" style="text-align:center">
                        <div class="row">
                            <span>05</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>05</span>
                            </div>
                            <div class="col">
                                <span>x3.5</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>5</span>
                            </div>
                            <div class="col">
                                <span>x1.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <div class="card bg-transparent text-warning border-warning" style="color:white;border-radius:6px;">
                    <div class="card-body" style="text-align:center">
                        <div class="row">
                            <span>Big</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>6,7,8,9</span>
                            </div>
                            <div class="col">
                                <span>x1.9</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>5</span>
                            </div>
                            <div class="col">
                                <span>x1.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-transparent border-primary text-primary" style="color:white;border-radius:6px;">
                    <div class="card-body" style="text-align:center">
                        <div class="row">
                            <span>small</span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>1,2,3,4</span>
                            </div>
                            <div class="col">
                                <span>x1.9</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span>0</span>
                            </div>
                            <div class="col">
                                <span>x1.5</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-3" style="text-align:center;">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">0</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">1</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">2</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">3</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">4</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-3 mb-3" style="text-align:center;">
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">5</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">6</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">7</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">8</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-primary">
                    <div class="card-body">
                        <span class="text-light">9</span><br>
                        <span class="text-light">x7</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>