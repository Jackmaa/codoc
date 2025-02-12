// LIGHT MODE // DARK MODE TOGGLE

document.addEventListener("DOMContentLoaded", () => {
  const modeToggle = document.getElementById("modeToggle");
  const modeIcon = document.getElementById("modeIcon");
  const modeLogo = document.getElementById("logoCodoc");
  const body = document.body;

  // Check for saved user preference, if any, on page load
  const savedMode = localStorage.getItem("mode");
  const systemPrefersDark = window.matchMedia(
    "(prefers-color-scheme: dark)"
  ).matches;

  const applyMode = (mode) => {
    body.classList.remove("light-mode", "dark-mode");
    body.classList.add(mode);
    localStorage.setItem("mode", mode);
    updateButton(mode);
  };

  if (savedMode) {
    applyMode(savedMode);
  } else {
    applyMode(systemPrefersDark ? "dark-mode" : "light-mode");
  }

  // Toggle mode on button click
  modeToggle.addEventListener("click", () => {
    const isDarkMode = body.classList.contains("dark-mode");
    applyMode(isDarkMode ? "light-mode" : "dark-mode");
  });

  // Update button icon and accessibility label
  function updateButton(mode) {
    const isDarkMode = mode === "dark-mode";
    modeIcon.setAttribute(
      "src",
      isDarkMode
        ? "./public/assets/img/lightmode.svg"
        : "./public/assets/img/darkmode.svg"
    );
    modeToggle.setAttribute(
      "aria-label",
      isDarkMode ? "Switch to Light Mode" : "Switch to Dark Mode"
    );
    modeLogo.setAttribute("fill", isDarkMode ? "white" : "black");
  }
});

//LIKE DE POSTS

const likeButton = document.querySelectorAll(".like_button");
console.log(likeButton);
for (const element of likeButton) { 
  element.setAttribute("fill","white");
  element.addEventListener("click", () => {
    if (element.getAttribute("fill") === "red"){
      element.setAttribute("fill","white");
    }else{
      element.setAttribute("fill","red");
    }
    
  });
};


