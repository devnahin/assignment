document.getElementById("calculateBtn").addEventListener("click", function(event) {
  event.preventDefault();
  
  var weight = parseFloat(document.getElementById("weightInput").value);
  var height = parseFloat(document.getElementById("heightInput").value);
  
  if (isNaN(weight) || isNaN(height)) {
    document.getElementById("result").innerHTML = "Please enter valid weight and height.";
    return;
  }
  
  var bmi = weight / ((height / 100) * (height / 100));
  document.getElementById("result").innerHTML = "Your BMI is: " + bmi.toFixed(2);
});
