<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <div id="toggle-container">
            <button id="modeToggle"><img src="./public/assets/img/lightmode.svg" alt="" id="modeIcon"></button>
        </div>
    </nav>
    <header>
        <svg width="79" height="74" viewBox="0 0 79 74" fill="none" xmlns="http://www.w3.org/2000/svg" class="header-logo">
            <path id="logoCodoc" d="M0.266666 73.1461V0.612759H19.7653V8.46343H12.3413V65.2954H19.7653V73.1461H0.266666ZM54.622 57.5301L54.238 57.9994C53.982 58.2839 53.5269 58.6536 52.8727 59.1088C52.2469 59.5354 51.4789 59.9763 50.5687 60.4314C49.6869 60.8581 48.4922 61.2136 46.9847 61.4981C45.5056 61.811 43.9127 61.9674 42.206 61.9674C36.4318 61.9674 32.0087 60.275 28.9367 56.8901C25.8931 53.5052 24.3713 49.0252 24.3713 43.4501C24.3713 40.435 24.8407 37.6901 25.7793 35.2154C26.718 32.7408 27.998 30.6928 29.6193 29.0714C31.2691 27.4216 33.1891 26.1559 35.3793 25.2741C37.598 24.3639 39.9873 23.9088 42.5473 23.9088C47.4967 23.9088 51.3367 25.0892 54.0673 27.4501C54.6647 28.0474 54.9633 28.3461 54.9633 28.3461L54.3233 38.3728L48.2647 38.4154L45.8327 31.8874C45.6051 31.8305 45.2922 31.8021 44.894 31.8021C42.3056 31.8021 40.5136 32.6981 39.518 34.4901C38.5509 36.2536 38.0673 39.3256 38.0673 43.7061C38.0673 45.6119 38.2238 47.2474 38.5367 48.6128C38.8496 49.9496 39.2051 50.9594 39.6033 51.6421C40.0016 52.2963 40.5278 52.8083 41.182 53.1781C41.8647 53.5479 42.4193 53.7612 42.846 53.8181C43.2727 53.875 43.7989 53.9034 44.4247 53.9034C45.8469 53.9034 47.2976 53.7328 48.7767 53.3914C50.2842 53.0501 51.5216 52.4954 52.4887 51.7274L54.622 57.5301ZM58.8617 73.1461V65.2954H66.2857V8.46343H58.8617V0.612759H78.3603V73.1461H58.8617Z"/>
        </svg>
        <div class="user-card">
            <img src="./public/assets/img/default.png" alt="profile picture">
            <h1 class="greetings">Welcome Author</h1>
        </div>
    </header>
    <main>
        <section id="tasks">
            <a href="" class="btn btn-codoc">Create Codoc
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11L11 1M11 1H1M11 1V11" stroke="#101828" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </section>
    </main>

    <script src="./public/assets/js/main.js"></script>
</body>
</html>