<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/reserve.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>ParkingScout</title>
</head>

<body>
    <?php
    require_once('../includes/navbar.php');
    ?>
    <div class="container">
        <div class="container mt-4">
            <form>
                <div class="row justify-around align-center">
                    <div class="col-sm d-flex justify-center align-center mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="../src/search.png" style="width:100%;height:24px"></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search town">
                        </div>
                    </div>
                    <div class="col-sm d-flex justify-content-end">
                        <select class="custom-select w-25" id="inlineFormCustomSelect">
                            <option selected>Car</option>
                            <option value="1">Van</option>
                            <option value="2">Bike</option>
                            <option value="3">Lorry</option>
                            <option value="4">Other</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="container mt-4">
            <div class="row gx-2 gy-2">
                <div class="col">
                    <a href="../pages/reserveslot.php" style="text-decoration:none;color:black" class="all">
                        <div class="card">
                            <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Center Parking</h5>
                                <h6 class="card-subtitle text-muted">Colombo</h6>
                                <div class="card-foot">
                                    <span class="card-text">Rs:250/h</span>
                                    <span class="card-text">10 slots</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100">View</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="../pages/reserveslot.php" style="text-decoration:none;color:black" class="all">
                        <div class="card">
                            <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Center Parking</h5>
                                <h6 class="card-subtitle text-muted">Colombo</h6>
                                <div class="card-foot">
                                    <span class="card-text">Rs:250/h</span>
                                    <span class="card-text">10 slots</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100">View</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="../pages/reserveslot.php" style="text-decoration:none;color:black" class="all">
                        <div class="card">
                            <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Center Parking</h5>
                                <h6 class="card-subtitle text-muted">Colombo</h6>
                                <div class="card-foot">
                                    <span class="card-text">Rs:250/h</span>
                                    <span class="card-text">10 slots</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100">View</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="../pages/reserveslot.php" style="text-decoration:none;color:black" class="all">
                        <div class="card">
                            <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Center Parking</h5>
                                <h6 class="card-subtitle text-muted">Colombo</h6>
                                <div class="card-foot">
                                    <span class="card-text">Rs:250/h</span>
                                    <span class="card-text">10 slots</span>
                                </div>
                                <a href="#" class="btn btn-primary w-100">View</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="../pages/reserveslot.php" style="text-decoration:none;color:black" class="all">
                        <div class="card">
                            <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Commercial Center Parking</h5>
                                <h6 class="card-subtitle text-muted">Colombo</h6>
                                <div class="card-foot">
                                    <span class="card-text">Rs:250/h</span>
                                    <span class="card-text">10 slots</span>
                                </div>

                                <a href="#" class="btn btn-primary w-100">View</a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    <?php
    require_once('../includes/footer.php');
    ?>

</body>

</html>