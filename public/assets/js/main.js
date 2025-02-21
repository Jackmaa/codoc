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

    modeIcon.setAttribute(
      "alt",
      isDarkMode ? "Light mode icon" : "Dark mode icon"
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
const sidebar = document.getElementById("sidebar");
const closeSidebarBtn = document.getElementById("closeSidebar");
const openSidebarBtn = document.getElementById("openSidebar");

let scrollTimeout;
let isSidebarForcedClosed =
  localStorage.getItem("isSidebarForcedClosed") === "true"; // Load saved state

// Function to show the sidebar
const showSidebar = () => {
  if (!isSidebarForcedClosed) {
    sidebar.classList.add("show");
    sidebar.classList.remove("hidden");
  }
};

// Function to hide the sidebar
const hideSidebar = () => {
  sidebar.classList.add("hidden");
  sidebar.classList.remove("show");
};

// Initialize sidebar state on page load
if (isSidebarForcedClosed) {
  hideSidebar();
  openSidebarBtn.classList.remove("hidden"); // Show "Open Sidebar" button
  closeSidebarBtn.classList.add("hidden"); // Hide "Close Sidebar" button
} else {
  showSidebar();
}

// Detect scrolling
window.addEventListener("scroll", () => {
  if (!isSidebarForcedClosed) {
    hideSidebar(); // Hide while scrolling
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(showSidebar, 500); // Show after 500ms of no scrolling
  }
});

// Force close the sidebar
closeSidebarBtn.addEventListener("click", () => {
  isSidebarForcedClosed = true;
  localStorage.setItem("isSidebarForcedClosed", "true"); // Save state
  hideSidebar();
  openSidebarBtn.classList.remove("hidden");
  closeSidebarBtn.classList.add("hidden");
});

// Reopen the sidebar and resume auto behavior
openSidebarBtn.addEventListener("click", () => {
  isSidebarForcedClosed = false;
  localStorage.setItem("isSidebarForcedClosed", "false"); // Save state
  showSidebar();
  closeSidebarBtn.classList.remove("hidden");
  openSidebarBtn.classList.add("hidden");
});

//LIKE DE POSTS

//We still to update the DataBase side when we like or dislike the post
// ==>> TO DO URGENT <<==

const divLikes = document.querySelectorAll(".likes");

for (const element of divLikes) {
  const dataId_post = element.getAttribute("data-id_post");
  const dataId_user = element.getAttribute("data-id_user");
  const likeGlow = element.firstElementChild;
  const likeButton = likeGlow.nextElementSibling;

  //Fetching the number of likes for a given Post ID
  fetch(`/codoc/displayLike/${dataId_post}`)
    .then((response) => response.json())
    .then((data) => display(data)) //Call the function to display the number we get
    .catch((error) => console.error("Error fetching data:", error));

  //function called in the fetch
  function display(likeCount) {
    let likeCounters = document.createElement("span");
    likeCounters.innerHTML = likeCount[0].like;
    element.appendChild(likeCounters);
  }

  //After display the total likes from a post we check if the connected user has liked
  // the post we are looping on
  if (dataId_user) {
    fetch(`/codoc/likePost/${dataId_post}/${dataId_user}`)
      .then((response) => {
        if (!response.ok) {
          return;
        } else {
          return response.json();
        }
      })
      .then((data) => {
        if (data) {
          //data is type of Boolean (true if liked)
          //so we apply the classes / fill needed
          likeGlow.classList.remove("glow-unlike");
          likeGlow.classList.add("glow-like");
          likeButton.setAttribute("fill", "#f809b0");
        } else {
          likeButton.setAttribute("fill", "#14f6eb");
        }
      });
  }

  //Here we handle the click on the button
  //and change the count of likes in accordance
  likeButton.addEventListener("click", () => {
    if (!dataId_user) {
      window.location.href = "/codoc/login";
    }
    const spanCounter = likeButton.nextElementSibling;
    let likeCounters = parseInt(spanCounter.innerHTML);

    if (likeButton.getAttribute("fill") === "#f809b0") {
      likeButton.setAttribute("fill", "#14f6eb");
      updateGlowEffect();
      likeCounters--;
      spanCounter.innerHTML = likeCounters;
      console.log(likeCounters);
    } else {
      likeButton.setAttribute("fill", "#f809b0");
      updateGlowEffect();
      likeCounters++;
      spanCounter.innerHTML = likeCounters;
      console.log(likeCounters);
    }
  });

  function updateGlowEffect() {
    if (likeGlow.classList.contains("glow-unlike")) {
      likeGlow.classList.toggle("glow-unlike");
      likeGlow.classList.toggle("glow-like");
    } else {
      likeGlow.classList.toggle("glow-like");
      likeGlow.classList.toggle("glow-unlike");
    }
  }

  //since our svg have a empty fill, we need to fill them
  // in the case no user is logged in
  likeButton.setAttribute("fill", "#14f6eb");
}

//DashBoard scroll

let carousel = document.querySelector("#dashboard-posts"),
  track = carousel.querySelector("#track"),
  row = track.querySelector("#row");

// Duplicate row for seamless looping
let clonedRow = row.cloneNode(true);
track.appendChild(clonedRow);

// Optional: Clone again if needed
let anotherClone = row.cloneNode(true);
track.appendChild(anotherClone);
