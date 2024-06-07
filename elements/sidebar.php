<style>
.sidebar {
align-content: center;
  background-color: antiquewhite;
  width: 200px;
  padding-top: 20px;
  margin-top: -100px;
  height: 100vh;
  position: fixed;
}

.sidebar a {
  display: block;
  color: black;
  padding: 10px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>

<header>
    <div class="sidebar">
        <a href="index.php">Item List</a>
        <a href="#contact">Employee List</a>
        <a href="#about">Customer List</a>
    </div>
</header>