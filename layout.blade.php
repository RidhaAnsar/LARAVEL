<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    overflow: hidden;
    background-color: #333; /* Background color of the navbar */
}

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd; /* Background color on hover */
    color: black;
}
footer {
    background-color: #333; /* Background color of the footer */
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </div>
    <!--end of header-->
     {{$slot}}
    <!--footer-->
    <footer>
        <p> All rights reserved.</p>
    </footer>
</body>
</html>