<!-- html code -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/bmi.css">
</head>
<body>
    <div class="container">
        <div class="glassmorphic-box">
            <nav class="navbar navbar-expand-lg bg-body-none">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="../Images/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                    </a>
                    <h2 class="fs-3 mx-3">DOCTOR SATHI</h2>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active fs-3" aria-current="page" href="index.php">Home</a>
                            </li>        
                            <li class="nav-item">
                                <a class="nav-link active fs-3" aria-current="page" href="service.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fs-3" aria-current="page" href="about.php">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <h1>Choose your Gender</h1><br>
            <div class="d-flex image-container">
                <div class="col-3 d-flex" id="female-container">
                    <div class="left-side" id="female-data-fill" style="display: none;">
                        <div class="input-group mb-2">
                            <input type="number" class="form-control" id="female-weight" placeholder="Enter weight in kg">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="female-height" placeholder="Enter height in cm">
                        </div>
                        <button type="button" class="btn btn-dark" id="female-calculate-bmi">Calculate BMI</button>
                    </div>
                    <img src="../Images/female.png" alt="Female" id="female-image">
                    <span class="gender-label" id="female-label">Female</span>
                </div>
                
                <div class="col-5 d-flex" id="male-container">
                    <img src="../Images/male.png" alt="Male" id="male-image">
                    <span class="gender-label" id="male-label">Male</span>
                    <div class="right-side" id="male-data-fill" style="display: none;">
                        <div class="input-group mb-2">
                            <input type="number" class="form-control" id="male-weight" placeholder="Enter weight in kg">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="male-height" placeholder="Enter height in cm">
                        </div>
                        <button type="button" class="btn btn-dark" id="male-calculate-bmi">Calculate BMI</button>
                    </div>
                </div>
            </div><br><br><br>

            <div class="d-flex justify-content-between bottom">         
                <div class="Categories">
                    <ul style="list-style-type: none;">
                        <h2>BMI Categories:</h2>
                        <li>Underweight =  18.5 </li>
                        <li>Normal weight = 18.5 - 24.9 </li>
                        <li>Overweight = 25 - 29.9 </li>
                        <li>Obesity = > 30 </li>
                    </ul>
                </div>
                
                <div class="bmiMeter">
                    <div id="guage">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"  version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 3486.3 3486.3"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <style type="text/css">
                            .fil1 { fill: none; }
                            .fil0 { fill: url(#id0); }
                            </style>
                            <linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="-3.41" y1="1744.6" x2="3550.74" y2="1744.59">
                            <stop offset="0.1" style="stop-opacity:1; stop-color:red"/>
                            <stop offset="0.18" style="stop-opacity:1; stop-color:lime"/>
                            <stop offset="0.4" style="stop-opacity:1; stop-color:#FFE600"/>
                            <stop offset="0.8" style="stop-opacity:1; stop-color:red"/>
                            </linearGradient>
                        </defs>
                        <g id="Layer_x0020_1">
              <metadata id="CorelCorpID_0Corel-Layer"/>
              <path class="fil0" d="M1761.22 0c134.46,1.5 265.26,18.17 390.78,48.44l-64.38 240.28c-104.96,-24.86 -214.18,-38.66 -326.4,-40.11l0 -248.6zm429.14 58.17c129.18,34.3 252.46,83.03 368.03,144.39l-124.4 215.47c-96.9,-50.69 -200.05,-91.06 -307.98,-119.68l64.35 -240.17zm402.78 163.34c116.57,65.32 224.89,143.62 322.97,232.97l-176.02 176.02c-82.65,-74.14 -173.61,-139.18 -271.29,-193.62l124.34 -215.36zm351.94 259.96c97.2,92.64 183.71,196.4 257.52,309.22l-215.76 124.57c-62.73,-94.02 -135.8,-180.55 -217.62,-257.92l175.87 -175.87zm278.84 342.6c71.4,114.75 129.84,238.41 173.3,368.91l-240.79 64.52c-37.61,-109.27 -87.47,-212.84 -148.02,-309.01l215.51 -124.42zm185.36 406.65c39.92,129.74 65.06,265.94 73.6,406.63l-249.2 0c-8.39,-118.4 -30.46,-233.01 -64.81,-342.21l240.41 -64.42zm-1687.63 -982.11c-112.21,1.47 -221.45,15.23 -326.4,40.12l-64.38 -240.28c125.5,-30.3 256.32,-46.94 390.78,-48.44l0 248.6zm-364.79 49.74c-107.93,28.64 -211.08,68.99 -307.98,119.69l-124.4 -215.47c115.56,-61.37 238.86,-110.07 368.03,-144.39l64.35 240.17zm-342.79 138.53c-97.67,54.45 -188.65,119.48 -271.29,193.62l-176.01 -176.01c98.07,-89.36 206.41,-167.63 322.97,-232.97l124.34 215.36zm-300.41 220.47c-81.81,77.38 -154.9,163.9 -217.62,257.92l-215.76 -124.57c73.8,-112.82 160.32,-216.56 257.51,-309.22l175.87 175.87zm-239.19 291.16c-60.54,96.17 -110.42,199.74 -148.02,309.01l-240.79 -64.52c43.45,-130.51 101.9,-254.16 173.3,-368.92l215.51 124.42zm-160.46 346.64c-34.34,109.2 -56.42,223.81 -64.81,342.21l-249.2 0c8.54,-140.69 33.68,-276.89 73.6,-406.63l240.41 64.42z"/>
              <circle class="fil1" cx="1743.15" cy="1743.15" r="1743.15"/>
              <circle class="fil1" cx="1743.15" cy="1743.15" r="1498.86"/>
             </g>-
            </svg>
            <div id="spinner">
              <div id="pointer"></div>
            </div>
            <h2 class="value">BMI</h2>
            <p class="small-text">status</p>
          </div>
</div>

<div id="female-bmi-result" class="bmi-result" style="display: none;">
    <h1 class="value" style="display: none;">BMI</h1>
    <p class="small-text" style="display: none;">status</p>
</div>

<div id="male-bmi-result" class="bmi-result" style="display: none;">
    <h1 class="value" style="display: none;">BMI</h1>
    <p class="small-text" style="display: none;">status</p>
</div>


        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
        <script src="/Js/bmi.js"></script>
    </body>
    </html>



    <!-- js code -->
<script>
    const femaleImage = document.getElementById("female-image");
const maleImage = document.getElementById("male-image");
const femaleColumn = document.getElementById("female-container");
const maleColumn = document.getElementById("male-container");
const femaleLabel = document.getElementById("female-label"); 
const maleLabel = document.getElementById("male-label");


function handleSelection(gender) {
    if (gender === "female") {
       
        femaleImage.style.transform = "scale(1.1)"; 
        femaleImage.style.opacity = "1"; 
        femaleColumn.style.transform = "translateX(0)"; 
     
        maleImage.style.transform = "scale(1)"; 
        maleImage.style.opacity = "0.6"; 
        maleColumn.style.transform = "translateX(250px)";
        femaleLabel.style.display = "none";
        maleLabel.style.display = "none";
    } else if (gender === "male") {
    
        maleImage.style.transform = "scale(1.1)"; 
        maleImage.style.opacity = "1";
        maleColumn.style.transform = "translateX(0)"; n

        // Reset female image style and position
        femaleImage.style.transform = "scale(1)"; // Reset size
        femaleImage.style.opacity = "0.6"; // Decrease opacity
        femaleColumn.style.transform = "translateX(-300px)"; // Move female column to the left
        maleLabel.style.display = "none";
        femaleLabel.style.display = "none"; // Make sure to show female label
    }
}


femaleImage.addEventListener("click", function() {
    handleSelection("female");
    handleGenderSelection("female");
});

maleImage.addEventListener("click", function() {
    handleSelection("male");
    handleGenderSelection("male");
});

function handleGenderSelection(gender) {
    if (gender === "female") {
        document.getElementById("female-data-fill").style.display = "block"; 
        document.getElementById("male-data-fill").style.display = "none"; 
    } else if (gender === "male") {
        document.getElementById("male-data-fill").style.display = "block"; 
        document.getElementById("female-data-fill").style.display = "none"; 
    }
}




window.onload = () => {
    const femaleWeightInput = document.getElementById("female-weight");
    const femaleHeightInput = document.getElementById("female-height");
    const maleWeightInput = document.getElementById("male-weight");
    const maleHeightInput = document.getElementById("male-height");
    const calculateFemaleButton = document.getElementById("female-calculate-bmi");
    const calculateMaleButton = document.getElementById("male-calculate-bmi");
    const femaleResultContainer = document.getElementById("female-bmi-result");
    const maleResultContainer = document.getElementById("male-bmi-result");
    const bmiPointer = document.getElementById("pointer");
    const spinner = document.getElementById("spinner");

    calculateFemaleButton.addEventListener("click", calculateFemaleBMI);
    calculateMaleButton.addEventListener("click", calculateMaleBMI);

    function calculateFemaleBMI() {
        const weight = parseFloat(femaleWeightInput.value);
        const height = parseFloat(femaleHeightInput.value);

        if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
            displayResult(femaleResultContainer, "Invalid input.");
            return null;
        }

        const bmi = weight / ((height / 100) ** 2);
        const status = determineStatus(bmi);
        displayResult(femaleResultContainer, bmi.toFixed(2), status);
        adjustPointer(bmi);
    }

    function calculateMaleBMI() {
        const weight = parseFloat(maleWeightInput.value);
        const height = parseFloat(maleHeightInput.value);

        if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
            displayResult(maleResultContainer, "Invalid input.");
            return null;
        }

        const bmi = weight / ((height / 100) ** 2);
        const status = determineStatus(bmi);
        displayResult(maleResultContainer, bmi.toFixed(2), status);
        adjustPointer(bmi);
    }

    function displayResult(container, bmi, status) {
        const valueElement = container.querySelector(".value");
        const smallTextElement = container.querySelector(".small-text");
        const bmiMeterValue = container.parentElement.querySelector(".value");
        const bmiMeterStatus = container.parentElement.querySelector(".small-text");

        if (valueElement && smallTextElement && bmiMeterValue && bmiMeterStatus) {
            valueElement.textContent = `BMI: ${bmi}`;
            smallTextElement.textContent = `Status: ${status}`;
            bmiMeterValue.textContent = `BMI: ${bmi}`;
            bmiMeterStatus.textContent = `Status: ${status}`;
            container.style.display = "block";
        } else {
            console.error("Elements not found in the container:", container);
        }
    }

    function determineStatus(bmi) {
        if (bmi < 18.5) {
            return "Underweight";
        } else if (bmi < 25) {
            return "Normal weight";
        } else if (bmi < 30) {
            return "Overweight";
        } else {
            return "Obesity";
        }
    }


    function calculateAngle(bmi) {
        return (bmi - 16) * (180 / (60 - 16)); // Mapping BMI range to angle range
    }
    
    function adjustPointer(bmi) {
        const angle = calculateAngle(bmi);
        bmiPointer.style.transform = `rotate(${angle}deg)`;
    }

    function adjustSpinnerRotation(angle) {
        const spinner = document.getElementById("spinner");
        spinner.style.transform = `rotate(${angle}deg)`;
    }
    function adjustPointerAndSpinner(bmi) {
        const angle = calculateAngle(bmi);
        adjustPointer(angle);
        adjustSpinnerRotation(angle);
    }


};

function displayResult(container, bmi, status) {
    const valueElement = container.querySelector(".value");
    const smallTextElement = container.querySelector(".small-text");

    if (valueElement && smallTextElement) {
        // Update the BMI and status text inside the BMI meter
        valueElement.textContent = `BMI: ${bmi.toFixed(2)}`;
        smallTextElement.textContent = `Status: ${status}`;

        // Ensure default BMI and status text are visible
        valueElement.style.display = "block";
        smallTextElement.style.display = "block";

        // Update the pointer position
        adjustPointer(bmi);
    } else {
        console.error("Elements not found in the container:", container);
    }
}







// Add event listener to the document body to detect clicks outside of FAQ questions
document.body.addEventListener('click', function(event) {
    const isClickInsideFAQ = event.target.closest('.FAQ');
    if (!isClickInsideFAQ) {
        hideAllAnswers(); // Hide all answers if the click is outside the FAQ
    }
});

// Function to hide all answers
function hideAllAnswers() {
    let answers = document.querySelectorAll('.faq-answer');
    answers.forEach(answer => {
        answer.style.display = 'none';
    });
}

// Function to toggle answer visibility
function toggleAnswer(answerNumber) {
    hideAllAnswers(); // Hide all answers before showing the selected one

    let answer = document.getElementById('answer' + answerNumber);
    answer.style.display = answer.style.display === 'block' ? 'none' : 'block'; // Toggle display
}

function expandQuestion(question) {
    question.style.fontSize = '16px'; // Increase font size on hover
}

function shrinkQuestion(question) {
    question.style.fontSize = '15px'; // Restore font size on mouseout
}


</script>    