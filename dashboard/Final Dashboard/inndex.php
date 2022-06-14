<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprint admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="left_sidebar">
        <div class="lsb_top">
            <a href="#" class="iconBx_m" id="logo">
                <i class="fab fa-accusoft"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-th-large"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-plus"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-chart-line"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-comment-dots"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-users"></i>
            </a>
        </div>
        <div class="lsb_bottom">
            <a href="#" class="iconBx_m">
                <i class="fas fa-bell"></i>
            </a>
            <a href="#" class="iconBx_m">
                <i class="fas fa-cog"></i>
            </a>
        </div>
    </div>
    <div class="main_container">
        <div class="mc_header">
            <div class="nav_arrows">
                <div class="iconBx_m arrow">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="iconBx_m arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="iconBx_m arrow toggle">
                    <i class="fas fa-bars menu"></i>
                    <i class="fas fa-times close"></i>
                </div>
            </div>
            <a href="#" class="btn btn_blue">Orange Digital Center</a>
        </div>
        <div class="sprint_overview">
            <div class="title">
                <h1>ODC overview</h1>
                <a href="#" class="btn"></a>
            </div>
            <div class="sprint_overview_cards">
                <div class="sprint_overview_card">
                    <i class="fas fa-tachometer-alt icon_l"></i>
                    <p>Courses</p>
                    <h5>53</h5>
                </div>
                <div class="sprint_overview_card">
                    <i class="fas fa-user icon_l"></i>
                    <p>ADMINISTRATORS</p>
                    <h5>8</h5>
                </div>
                <div class="sprint_overview_card">
                    <i class="fas fa-suitcase icon_l"></i>
                    <p>STUDENT</p>
                    <h5>1,895</h5>
                </div>
                <div class="sprint_overview_card">
                    <i class="fas fa-search icon_l"></i>
                    <p>Moudle</p>
                    <h5>24</h5>
                </div>
                <div class="sprint_overview_card">
                    <i class="fas fa-globe-americas icon_l"></i>
                    <p>Lecturers</p>
                    <h5>17</h5>
                </div>
            </div>
        </div>
        <div class="charts_stories">
            <div class="burnsown_chart_container">
                <h1>ODC chart</h1>
                <div class="burnsown_chart">
                    <canvas id="myChart" height="100"></canvas>
                </div>
            </div>
            <div class="sprint_stories_container">
                <div class="title">
                    <h1>ODC stories</h1>
                    <a href="#" class="btn">see all</a>
                </div>
                <div class="sprint_stories">
                    <table>
                        <tr>
                            <td>S11</td>
                            <td>Landing page</td>
                            <td>Delivered</td>
                            <td>12</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <td>S32</td>
                            <td>Onboarding</td>
                            <td>Delivered</td>
                            <td>3</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <td>S12</td>
                            <td>User profile</td>
                            <td>Approved</td>
                            <td>9</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                        <tr>
                            <td>S21</td>
                            <td>Settings</td>
                            <td>Approved</td>
                            <td>3</td>
                            <td><i class="fas fa-ellipsis-h"></i></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="team_members_container">
            <div class="title">
                <h1>Team members</h1>
                <a href="#" class="btn">add member</a>
            </div>
            <div class="team_members">
                <div class="team_member">
                    <div class="imgBx">
                        <img src="./Images/AdminProfile.png" alt="">
                    </div>
                    <div class="member_content">
                        <h2>Musa Turay</h2>
                        <p>35 Story points</p>
                    </div>
                </div>
                <div class="team_member">
                    <div class="imgBx">
                        <img src="./Images/Admin.png" alt="">
                    </div>
                    <div class="member_content">
                        <h2>Ramadan Barrie</h2>
                        <p>5 Story points</p>
                    </div>
                </div>
                <div class="team_member">
                    <div class="imgBx">
                        <img src="./Images/figma.png" alt="">
                    </div>
                    <div class="member_content">
                        <h2>Mohamed Kamara</h2>
                        <p>12 Story points</p>
                    </div>
                </div>
                <div class="team_member">
                    <div class="imgBx">
                        <img src="./Images/AdminProfile.png" alt="">
                    </div>
                    <div class="member_content">
                        <h2>TURAYMATHIC</h2>
                        <p>26 Story points</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right_sidebar">
        <div class="epics_container">
            <div class="title">
                <h1>Epics</h1>
                <a href="#" class="btn">see all</a>
            </div>
            <div class="epics">
                <div class="epic">
                    <div class="imgBx_s green">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div class="epic_info">
                        <h2>Admin panel</h2>
                        <p>Design & Development</p>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="epic">
                    <div class="imgBx_s red">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <div class="epic_info">
                        <h2>Adding Item</h2>
                        <p>Development</p>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="epic">
                    <div class="imgBx_s violet">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="epic_info">
                        <h2>Mobile Onboarding</h2>
                        <p>Design</p>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="epic">
                    <div class="imgBx_s blue">
                        <i class="fab fa-phoenix-squadron"></i>
                    </div>
                    <div class="epic_info">
                        <h2>Mobile MVP</h2>
                        <p>Design</p>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="epic">
                    <div class="imgBx_s purple">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <div class="epic_info">
                        <h2>QR Scan</h2>
                        <p>Research</p>
                    </div>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="project_statistic_container">
            <div class="title">
                <h1>Project statistic</h1>
            </div>
            <div class="project_statistics">
                <div class="project_statistic">
                    <h2>Project</h2>
                    <p>progress</p>
                    <div class="progress">
                        <div class="stat_progress_cover">
                            <div id="project"></div>
                        </div>
                        <h2>75%</h2>
                    </div>
                </div>
                <div class="project_statistic">
                    <h2>Business</h2>
                    <p>goals</p>
                    <div class="progress">
                        <div class="stat_progress_cover">
                            <div id="business"></div>
                        </div>
                        <h2>42%</h2>
                    </div>
                </div>
                <div class="project_statistic">
                    <h2>Budget</h2>
                    <p>used</p>
                    <div class="progress">
                        <div class="stat_progress_cover">
                            <div id="budget"></div>
                        </div>
                        <h2>40%</h2>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn project_details">project details</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="chart.js"></script>
    <script>
        const leftSideBar = document.querySelector('.left_sidebar');
        const toggle = document.querySelector('.toggle');
        toggle.onclick = function() {
            leftSideBar.classList.toggle('active');
            toggle.classList.toggle('active');
        }
    </script>
</body>

</html>