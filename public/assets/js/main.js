// LIGHT MODE // DARK MODE TOGGLE

document.addEventListener("DOMContentLoaded", () => {
  const modeToggle = document.getElementById("modeToggle");
  const body = document.body;

  // Check for saved user preference, if any, on page load
  const savedMode = localStorage.getItem("mode");
  if (savedMode) {
    body.classList.add(savedMode);
    updateButtonText(savedMode);
  } else {
    // Default to system preference if no saved preference exists
    const systemPrefersDark = window.matchMedia(
      "(prefers-color-scheme: dark)"
    ).matches;
    if (systemPrefersDark) {
      body.classList.add("dark-mode");
      updateButtonText("dark-mode");
    } else {
      body.classList.add("light-mode");
      updateButtonText("light-mode");
    }
  }

  // Toggle mode on button click
  modeToggle.addEventListener("click", () => {
    if (body.classList.contains("dark-mode")) {
      body.classList.remove("dark-mode");
      body.classList.add("light-mode");
      localStorage.setItem("mode", "light-mode");
      updateButtonText("light-mode");
    } else {
      body.classList.remove("light-mode");
      body.classList.add("dark-mode");
      localStorage.setItem("mode", "dark-mode");
      updateButtonText("dark-mode");
    }
  });

  // Update button text based on current mode
  function updateButtonText(mode) {
    modeToggle.textContent =
      mode === "dark-mode" ? "Switch to Light Mode" : "Switch to Dark Mode";
  }
});
