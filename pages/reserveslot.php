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

    <div class="container mt-4">

        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top" src="../src/parking.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Commercial Center Parking</h5>
                        <h6 class="card-subtitle text-muted">Colombo</h6>
                        <div class="card-foot">
                            <span class="card-text">Rs:250/h</span>
                            <span class="card-text">10 slots</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="parking w-100 mt-4">
                    <div class="container d-flex flex-column w-100">
                        <h5 class="fw-bold">Vehicle type</h5>
                        <div class="container">

                            <div class="btn btn-primary rounded-pill vehi-button mb-2" id="car" onclick="setActiveVehicle('car')">Car</div>
                            <div class="btn btn-primary rounded-pill vehi-button mb-2" id="bike" onclick="setActiveVehicle('bike')">Bike</div>
                            <div class="btn btn-primary rounded-pill vehi-button mb-2" id="van" onclick="setActiveVehicle('van')">Van</div>
                            <div class="btn btn-primary rounded-pill vehi-button mb-2" id="lorry" onclick="setActiveVehicle('lorry')">Lorry</div>
                            <div class="btn btn-primary rounded-pill vehi-button mb-2" id="other" onclick="setActiveVehicle('other')">Other</div>
                            <input type="text" disabled placeholder="Vehicle type" class="visually-hidden" />
                        </div>
                    </div>

                    <div class="container d-flex flex-column w-100 mt-3 mb-3">
                        <h5 class="fw-bold">Vehicle Details</h5>

                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control mb-3" id="vehicle_number" placeholder="Vehicle Number" />
                            </div>
                            <h5 class="fw-bold">Reserve Date</h5>
                            <div class="row mt-3 mb-3">
                                <div class="form-group">
                                    <label for="inputEmail4" class="text-secondary">Today</label>
                                    <input type="checkbox" class="form-check-input me-1" id="today-from" onclick="setDateDisable()">
                                </div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="form-group">
                                    <label for="inputEmail4" class="text-secondary">Date</label>
                                    <input type="date" class="form-control" id="date-from" placeholder="From">
                                </div>
                            </div>

                            <h5 class="fw-bold">Reserve Time</h5>
                            <div class="row mt-3 mb-3">
                                <div class="form-group">
                                    <label for="inputEmail4" class="text-secondary">Arrive Time</label>
                                    <input type="time" class="form-control" id="time-from" placeholder="From">
                                </div>

                            </div>

                            <a type="submit" class="btn btn-primary w-100 mt-3" href="../pages/pay.php">Reserve Now</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php
    require_once('../includes/footer.php');
    ?>

    <script>
        function setActiveVehicle(vid) {
            const actCard = document.getElementsByClassName("Active_btn");
            if (actCard[0] !== undefined) {
                console.log(actCard[0].id);
                document.getElementById(actCard[0].id).classList.remove("Active_btn");
            }
            document.getElementById(vid).classList.toggle("Active_btn");
        }

        function setDateDisable() {

            if (document.getElementById("today-from").checked) {
                document.getElementById("date-from").disabled = true;
            } else {
                document.getElementById("date-from").disabled = false;
            }

        }
    </script>
</body>

</html>