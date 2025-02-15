document.addEventListener("DOMContentLoaded", () => {
  const modeToggle = document.getElementById("modeToggle");
  const modeIcon = document.getElementById("modeIcon");
  const modeLogo = document.querySelectorAll(".logoCodoc");
  // const modeMatrix = document.getElementById("matrixMode");
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

  // If there's a saved prefered mode then we apply it
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

  // matrixMode.addEventListener("click", () => {
  //   const canvas = document.createElement("canvas");
  //   canvas.setAttribute("id", "matrixCanvas");
  //   const ctx = canvas.getContext("2d");
  //   canvas.width = window.innerWidth;
  //   canvas.height = window.innerHeight;

  //   const letters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZあいうえおカキクケコ";
  //   const fontSize = 16;
  //   const columns = canvas.width / fontSize;
  //   const drops = Array(Math.floor(columns)).fill(1);
  //   body.prepend(canvas);

  //   function drawMatrixEffect() {
  //     ctx.fillStyle = "rgba(0, 0, 0, 0.1)";
  //     ctx.fillRect(0, 0, canvas.width, canvas.height);

  //     ctx.fillStyle = "#00FF00";
  //     ctx.font = `${fontSize}px monospace`;

  //     for (let i = 0; i < drops.length; i++) {
  //       const text = letters[Math.floor(Math.random() * letters.length)];
  //       ctx.fillText(text, i * fontSize, drops[i] * fontSize);

  //       if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
  //         drops[i] = 0;
  //       }
  //       drops[i]++;
  //     }
  //   }

  //   setInterval(drawMatrixEffect, 50);

  //   window.addEventListener("resize", () => {
  //     canvas.width = window.innerWidth;
  //     canvas.height = window.innerHeight;
  //   });
  // });

  // Update button icon and accessibility label
  function updateButton(mode) {
    const isDarkMode = mode === "dark-mode";
    modeIcon.setAttribute(
      "src",
      isDarkMode
        ? "http://localhost/codoc/public/assets/img/lightmode.svg"
        : "http://localhost/codoc/public/assets/img/darkmode.svg"
    );
    modeToggle.setAttribute(
      "aria-label",
      isDarkMode ? "Switch to Light Mode" : "Switch to Dark Mode"
    );
    //Update the filling color of the SVG Logo (both)
    modeLogo.forEach((logo) => {
      logo.setAttribute("fill", isDarkMode ? "white" : "black");
    });
  }
});

//LIKE DE POSTS

const divLikes = document.querySelectorAll(".likes");
const likeButton = document.querySelectorAll(".like_button");

function updateGlowEffect(element) {
  let glowEffect = element.previousElementSibling;
  if (glowEffect.classList.contains("glow-unlike")) {
    glowEffect.classList.toggle("glow-unlike");
    glowEffect.classList.toggle("glow-like");
  } else {
    glowEffect.classList.toggle("glow-like");
    glowEffect.classList.toggle("glow-unlike");
  }
}

for (const element of divLikes) {
  let likeCount = 0;
  let likeCounters = document.createElement("span");
  likeCounters.innerHTML = likeCount;
  element.appendChild(likeCounters);
}

for (const element of likeButton) {
  //element = like_button
  element.setAttribute("fill", "#14f6eb");
  element.addEventListener("click", () => {
    let likeCount = parseInt(element.nextElementSibling.innerHTML);
    if (element.getAttribute("fill") === "#f809b0") {
      updateGlowEffect(element);
      element.setAttribute("fill", "#14f6eb");
      likeCount--;
      //element next sibling = like counter
      element.nextElementSibling.innerHTML = likeCount;
    } else {
      updateGlowEffect(element);
      element.setAttribute("fill", "#f809b0");
      likeCount++;
      element.nextElementSibling.innerHTML = likeCount;
    }
  });
}
