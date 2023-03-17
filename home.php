<?php include_once("ModuleLeaderNavBar.php"); ?>

<div class="content">
  <h1>Stage 1</h1>
  <a href="http://localhost/Hallam%20Student%20Managment%20Sytem%20GitHub/HallamGroup42/viewtutorsandstudenthelpers.php"><button class="tutors-and-student-helpers">Tutors and StudentHelpers</button></a>
  
  <button class="add-milestones">Add Milestones</button>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>ID</th>
        <th>Information</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>sam</td>
        <td>mck</td>
        <td>12345</td>
        <td><button class="info">Info</button></td>
      </tr>
      <tr>
        <td>mas</td>
        <td>kcm</td>
        <td>54321</td>
        <td><button class="info">Info</button></td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
  <div class="scroll-bar">
    <div class="scroll-bar-inner"></div>
  </div>
  <button class="attendance">Attendance</button>
</div>

<style>
  body {
    background-color: #f2f2f2;
  }
  .content {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border-radius: 10px;
  }
  h1 {
    color: white;
    font-weight: bold;
    background-color: #D90B3E;
    padding: 10px;
    border-radius: 5px;
  }
  .tutors-and-student-helpers {
    background-color: #D90B3E;
    color: white;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
  .add-milestones,
  .info,
  .attendance {
    background-color: white;
    color: #D90B3E;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
  }
  table {
    margin-top: 20px;
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: left;
  }
  th {
    background-color: #D90B3E;
    color: white;
  }
  .scroll-bar {
    margin-top: 20px;
    height: 20px;
    background-color: #eee;
    border-radius: 10px;
    overflow: hidden;
  }
  .scroll-bar-inner {
    width: 20%;
    height: 100%;
    background-color: #D90B3E;
    border-radius: 10px;
  }
</style>
