<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:DarkOrchid;
}
li {
  float: left;
}
li a {
  display: block;
  color: wheat;
  text-align: center;
  padding-top: 16px;
  padding-left: 95px;
  padding-bottom: 18px;
  padding-right: 100px;
  text-decoration: none;
  font-size: 18px;
  transition: 0.2s;
}

li a:hover:not(.active) {
  background-color: gold;
  color: black;
  transform: scale(1.3);
}
</style>
<ul>
  <li><a href="main.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="add_complaints">Complaints</a></li>
  <li><a href="#logout">Log out</a></li>
  <li><a href="./about">About</a></li>
</ul>
