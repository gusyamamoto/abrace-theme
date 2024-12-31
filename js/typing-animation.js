const textElement = document.getElementById("typing-text");
const textArray = [
  "Qualidade é um diferencial.",
  "Qualidade é uma necessidade."
];
let arrayIndex = 0;
let charIndex = 0;
let isDeleting = false;
let reachedQualidade = false;

function typeText() {
  const currentText = textArray[arrayIndex];
  const displayedText = currentText.substring(0, charIndex);
  textElement.innerHTML = displayedText;

  if (!isDeleting && charIndex < currentText.length) {
    charIndex++;
    setTimeout(typeText, 100); // Typing speed
  } else if (isDeleting && charIndex > 9) { // Stop deleting after "Qualidade" (9 characters)
    charIndex--;
    setTimeout(typeText, 50); // Deleting speed
  } else {
    if (isDeleting && charIndex === 9) { // When deletion stops at "Qualidade"
      reachedQualidade = true;
      isDeleting = false;
      arrayIndex = (arrayIndex + 1) % textArray.length; // Move to next sentence
    } else if (!isDeleting && charIndex === currentText.length) {
      if (reachedQualidade) {
        // End the animation and leave "Qualidade" typed
        textElement.innerHTML = textArray[textArray.length - 1];
        return;
      }
      // Start deleting when fully typed
      isDeleting = true;
    }

    setTimeout(typeText, 1000); // Pause before switching
  }
}

typeText();
