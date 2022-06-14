<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="das2.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bankdashboard.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img style="width: 40px;" src="./logo.png" alt="">
                <span class="logoname">TURAYMATHIC</span>
            </div>

            <div class="searchbox">
                <form action="">
                    <input type="text" placeholder="Search">
                    <i class="fa fa-search"></i>
                </form>
            </div>

            <div class="navitem">
                <div class="lang">
                    <select name="language" id="">
                        <option value="">English</option>
                        <option value="">French</option>
                        <option value="">Madingo</option>
                        <option value="">Kiro</option>
                    </select>
                </div>

                <div class="icons">
                    <ul>
                        <li><i class="fa fa-envelope"></i></li>
                        <li><i class="fa fa-bell"></i></li>
                    </ul>
                </div>

                <div class="account">
                    <img width="25px" height="25px" src="./Images/AdminProfile.png" alt="">
                    <span class="name">MUSA TURAY</span>
                    <span class="username">@turaymusaa</span>
                </div>
            </div>
        </div>

        <div class="container-body">
            <div class="sidebar">
                <ul>
                    <li class="dashboard">
                        <i class="fa fa-dashcube"></i>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-money"></i>
                        <a href="#">balance</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="#">invoice</a>
                    </li>
                    <li>
                        <i class="fa fa-credit-card-alt"></i>
                        <a href="#">card</a>
                    </li>
                    <li>
                        <i class="fa fa-history"></i>
                        <a href="#">history</a>
                    </li>
                    <li>
                        <i class="fa fa-info-circle"></i>
                        <a href="#">details</a>
                    </li>
                </ul>
            </div>

            <div class="main-body">
                <div class="headtittle">
                    <span class="greeeting">Hii TURAY,</span>
                    <h2>Overview</h2>
                </div>

                <div class="cards">
                    <div class="row row-1">
                        <div class="col">
                            <div class="balance-card">
                                <h3 class="cardtittle">Balance</h3>
                                <h2 class="balance">$ 54321.65</h2>
                                <span class="balancestatus">+15%</span>
                                <img width="60px" height="60px" src="./Images/Student.svg" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="latest-activity">
                                <h3 class="cardtittle">Latest activity</h3>
                                <img width="100%" height="100px" src="./logo.png" alt="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="debit-card">
                                <h3 class="cardtittle">My card</h3>
                                <h3 class="cardnumber">1234 5678 9101 1123</h3>
                                <h3 class="cardholder">Robert Downey</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row row-2">
                        <div class="col">
                            <div class="total-invoice">
                                <h3 class="cardtittle">Total invoice</h3>
                                <span class="t-i">520</span>
                                <span class="status">+12%</san>
                            </div>
                        </div>
                        <div class="col">
                            <div class="paid-invoice">
                                <h3 class="cardtittle">Paid invoice</h3>
                                <span class="p-i">210</span>
                                <span class="status">
                                    85%
                                    <i class="fa fa-line-chart"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="unpaid-invoice">
                                <h3 class="cardtittle">Unpaid invoice</h3>
                                <span class="u-i">65</span>
                                <span class="status">
                                    15%
                                    <i class="fa fa-line-chart"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="invoice-sent">
                                <h3 class="cardtittle">Invoice sent</h3>
                                <span class="i-s">120</span>
                                <span class="status">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
