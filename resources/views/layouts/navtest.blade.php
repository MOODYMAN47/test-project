<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Basic styling for the navigation bar */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the background color of the active item */
        li a.active {
            background-color: #4CAF50;
        }

        /* Change color of links on hover */
        li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>


<ul>
  <li><a class="active" href="/">Home</a></li>
  <li><a href="about">About</a></li>
  <li><a href="posts">Posts</a></li>
  <li><a href="#contact">Contact</a></li>
</ul>
@yield('cont')

</body>
</html>
