// LIGHT MODE // DARK MODE TOGGLE

document.addEventListener("DOMContentLoaded", () => {
  const modeToggle = document.getElementById("modeToggle");
  const modeIcon = document.getElementById("modeIcon");
  const modeLogo = document.getElementById("logoCodoc");
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


