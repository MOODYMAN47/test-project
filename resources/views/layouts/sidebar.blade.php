<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navigation Bar & Sidebar</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.sidebar {
  height: 100%;
  width: 200px;
  position: fixed;
  top: 0;
  left: -200px;
  background-color: #111;
  padding-top: 20px;
  transition: all 0.3s ease;
}

.sidebar a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar
