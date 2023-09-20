const slider1 = document.getElementById("slider1");
const slider2 = document.getElementById("slider2");

slider1.addEventListener("input", handleSliderChange);
slider2.addEventListener("input", handleSliderChange);

function handleSliderChange () {
    const value1 = slider1.value;
    const value2 = slider2.value;

    console.log("Slider 1 value:", value1);
    console.log("Slider 2 value:", value2);
}