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
  transition: 500ms;
}

.sidebar a:hover {
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

</style>

<header>
    <div class="sidebar">
        <a href="index.php">Item List</a>
        <a href="#contact">Employee List</a>
        <a href="#about">Customer List</a>
        <a href="../logout.php">Logout</a>
    </div>
</header>