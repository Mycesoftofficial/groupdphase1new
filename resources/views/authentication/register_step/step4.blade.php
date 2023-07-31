<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview Information</title>
</head>

<body>
    <h5>Overview Information</h5>
    <section>
        <div class="form-wrap max-width-600 mx-auto">
            <ul class="register-info" id="overview-list">
                <!-- Overview information will be populated here -->
            </ul>
            <div class="custom-control custom-checkbox mt-4">
                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                <label class="custom-control-label" for="customCheck1">
                    I have read and agreed to the terms of services and privacy policy
                </label>
            </div>
        </div>
    </section>

    <script>
        // Get the elements from Step 1
        const churchNameInput = document.querySelector("input[name='CName']");
        const churchCodeInput = document.querySelector("input[name='CCode']");
        const locationInput = document.querySelector("input[name='Location']");
        const gpsAddressInput = document.querySelector("input[name='GPSAddress']");

        // Get the elements from Step 2
        const districtSelect = document.querySelector("select[name='District']");
        const areaSelect = document.querySelector("select[name='Area']");

        // Get the elements from Step 3
        const overviewList = document.getElementById("overview-list");

        // Function to update the overview information
        function updateOverview() {
            overviewList.innerHTML = `
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">Church Name</div>
                        <div class="col-sm-8">${churchNameInput.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">Church Code</div>
                        <div class="col-sm-8">${churchCodeInput.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">Location</div>
                        <div class="col-sm-8">${locationInput.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">GPS Address</div>
                        <div class="col-sm-8">${gpsAddressInput.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">District</div>
                        <div class="col-sm-8">${districtSelect.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">Area</div>
                        <div class="col-sm-8">${areaSelect.value}</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm-4 weight-600">Password</div>
                        <div class="col-sm-8">.....000</div> <!-- Since passwords should not be displayed, replace with dots -->
                    </div>
                </li>
            `;
        }

        // Update the overview information whenever there is a change in any input field
        churchNameInput.addEventListener("input", updateOverview);
        churchCodeInput.addEventListener("input", updateOverview);
        locationInput.addEventListener("input", updateOverview);
        gpsAddressInput.addEventListener("input", updateOverview);
        districtSelect.addEventListener("change", updateOverview);
        areaSelect.addEventListener("change", updateOverview);
    </script>
</body>

</html>
