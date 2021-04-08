<?php
include './includes/shared/header.php';
?>

<?php include './includes/shared/sidebar.php';?>

<?php include './includes/shared/topbar.php';?>

<style>
.card1,
.card2,
.card3,
.card4,
.card5,
.card6 {
    transition: all 0.3s ease-out;
    overflow: hidden;
}

.card1:hover,
.card2:hover,
.card3:hover,
.card4:hover,
.card5:hover,
.card6:hover {
    transform: translateY(-5px) scale(1.005) translateZ(0);
}

.card1:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(255, 215, 97, 0.48) !important;
}

.card2:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(184, 249, 211, 0.48) !important;
}

.card3:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(206, 178, 252, 0.48) !important;
}

.card4:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(252, 178, 178, 0.48) !important;
}

.card5:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(178, 189, 252, 0.48) !important;
}

.card6:hover {
    box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
        0 24px 46px rgba(178, 249, 252, 0.48) !important;
}

.card1:hover .overlay,
.card2:hover .overlay,
.card3:hover .overlay,
.card4:hover .overlay,
.card5:hover .overlay,
.card6:hover .overlay {
    transform: scale(7) translateZ(0);
}

.card1:hover .circle {
    border-color: #ffeeba;
    background: #ffd861;
}

.card2:hover .circle {
    border-color: #e2fced;
    background: #b8f9d3;
}

.card3:hover .circle {
    border-color: #f0e7ff;
    background: #ceb2fc;
}

.card4:hover .circle {
    border-color: #ffe7e7;
    background: #fcb2b2;
}

.card5:hover .circle {
    border-color: #e7ebff;
    background: #b2bffc;
}

.card6:hover .circle {
    border-color: #e7fdff;
    background: #b2f6fc;
}

.card1:hover .circle:after {
    background: #ffeeba;
}

.card2:hover .circle:after {
    background: #e2fced;
}

.card3:hover .circle:after {
    background: #f0e7ff;
}

.card4:hover .circle:after {
    background: #ffe7e7;
}

.card5:hover .circle:after {
    background: #e7edff;
}

.card6:hover .circle:after {
    background: #e7fcff;
}

.card1:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(255, 215, 97, 0.48);
}

.card2:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(184, 249, 211, 0.48);
}

.card3:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(206, 178, 252, 0.48);
}

.card4:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(252, 178, 178, 0.48);
}

.card5:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(178, 185, 252, 0.48);
}

.card6:active {
    transform: scale(1) translateZ(0);
    box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
        0 15px 24px rgba(178, 252, 248, 0.48);
}

.circle {
    width: 115px;
    height: 115px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease-out;
    margin: auto;
}

.card1 {
    border: 0.5px solid #ffd861;
}

.card1 .circle {
    border: 2px solid #ffd861;
}

.card2 {
    border: 0.5px solid #b8f9d3;
}

.card2 .circle {
    border: 2px solid #b8f9d3;
}

.card3 {
    border: 0.5px solid #ceb2fc;
}

.card3 .circle {
    border: 2px solid #ceb2fc;
}

.card4 {
    border: 0.5px solid #fcb2b2;
}

.card4 .circle {
    border: 2px solid #fcb2b2;
}

.card5 {
    border: 0.5px solid #b2b9fc;
}

.card5 .circle {
    border: 2px solid #b2b9fc;
}

.card6 {
    border: 0.5px solid #b2f9fc;
}

.card6 .circle {
    border: 2px solid #b2f9fc;
}

.circle:after {
    content: "";
    width: 98px;
    height: 98px;
    display: block;
    position: absolute;
    border-radius: 50%;
    top: 7px;
    left: 7px;
    transition: opacity 0.3s ease-out;
}

.card1 .circle:after {
    background: #ffd861;
}

.card2 .circle:after {
    background: #b8f9d3;
}

.card3 .circle:after {
    background: #ceb2fc;
}

.card4 .circle:after {
    background: #fcb2b2;
}

.card5 .circle:after {
    background: #b2bffc;
}

.card6 .circle:after {
    background: #b2fcfc;
}

.circle i {
    z-index: 10000;
    font-size: 40px;
    transform: translateZ(0);
}

.overlay {
    width: 98px;
    position: absolute;
    height: 118px;
    border-radius: 50%;
    top: 25px;
    left: 110px;
    z-index: -1;
    transition: transform 0.3s ease-out;
}

.card1 .overlay {
    background: #ffd861;
}

.card2 .overlay {
    background: #b8f9d3;
}

.card3 .overlay {
    background: #ceb2fc;
}

.card4 .overlay {
    background: #fcb2b2;
}

.card5 .overlay {
    background: #b2bdfc;
}

.card6 .overlay {
    background: #b2fcf8;
}

.card p {
    z-index: 1000;
    transition: color 0.3s ease-out;
}

.card1 i {
    color: #d98a19;
}

.card2 i {
    color: #5bd6a2;
}

.card3 i {
    color: #8b6fc0;
}

.card4 i {
    color: #c06f6f;
}

.card5 i {
    color: #6f7bc0;
}

.card6 i {
    color: #6fc0c0;
}
</style>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-info">Dashboard</h4>
                    <div class="mt-5">
                        <div class="card-deck mx-2">

                            <div class="card card1 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            23 <br> Allotments
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card2 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-file-text"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            10 <br> Complaints
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card3 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            <span class="text-wrap">12500</span> <br> Visitors
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container my-5">
                            <canvas id="myChart" width="200px" height="100px"></canvas>
                        </div>
                        <div class="card-deck mx-2">
                            <div class="card card4 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-money-bill"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            23 <br> Bills</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card5 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            10 <br> Security</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card6 shadow justify-content-center">
                                <div class="card-body row justify-content-center align-items-center text-center">
                                    <div class="col-lg-6">
                                        <div class="overlay"></div>
                                        <div class="circle">
                                            <i class="fas fa-microphone"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card-heading align-self-center font-weight-bold"
                                            style="font-size:1.5rem;color: #4C5656;">
                                            <span class="text-wrap">12</span> <br> Annoucements
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <?php

include './includes/shared/footer.php';
include './includes/shared/scripts.php';

?>