<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='style.php'/>
    <title>Gaming App</title>
  </head>
  
  <body>
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'home')" id="defaultOpen">Home</button>
      <button class="tablinks" onclick="openCity(event, 'rockPaperScissorLizardSpock')">Rock Paper Scissor Lizard Spock</button>
      <button class="tablinks" onclick="openCity(event, 'ticTacToe')">Tic Tac Toe</button>
      <button class="tablinks" onclick="openCity(event, 'connect4')">Connect 4</button>
      <button class="tablinks" onclick="openCity(event, 'madLibs')">Mad Libs</button>
      <label id="statesUserName"> Hello, <?php echo $user_data['user_name']; ?></label>
      <button id="logout"><a href="logout.php" id="logoutLink"> Logout </a></button>
    </div>

    <!-- Tab content -->
    <div id="home" class="tabcontent">
      <h2 id="homeTitle">An App about Gaming</h2>
    </div>

    <div id="rockPaperScissorLizardSpock" class="tabcontent">
      <div id="rockPaperScissorLizardSpockContainer">
        <h2>Rock Paper Scissor Lizard Spock</h2><br>
          <label for="choice">Pick your choice:</label>
          <input list="choices" name="choice" id="choice"><br><br>
            <datalist id="choices">
              <option value="Rock">
              <option value="Paper">
              <option value="Scissor">
              <option value="Lizard">
              <option value="Spock">
            </datalist>
        <input type="submit" id="submitBtnforRockPaperScissors">
        <input type="reset" id="resetBtnforRockPaperScissors">
        <p id="computerChoice"></p>
        <p id="resultforRockPaperScissors"></p>
      </div>
    </div>

    <div id="ticTacToe" class="tabcontent">
        <div id="ticTacToeContainer">
            <h1>Tic Tac Toe</h1><br>
            <div id="cellContainer">
                <div cellIndex="0" class="cellForTic"></div>
                <div cellIndex="1" class="cellForTic"></div>
                <div cellIndex="2" class="cellForTic"></div>
                <div cellIndex="3" class="cellForTic"></div>
                <div cellIndex="4" class="cellForTic"></div>
                <div cellIndex="5" class="cellForTic"></div>
                <div cellIndex="6" class="cellForTic"></div>
                <div cellIndex="7" class="cellForTic"></div>
                <div cellIndex="8" class="cellForTic"></div>
            </div><br>
            <h2 id="resultforTicTacToe"></h2><br>
            <button id="restartBtnforTicTacToe">Restart</button>
        </div>
    </div>

    <div id="connect4" class="tabcontent">
        <h1>Connect Four</h1>
        <div class="game-board">
        <div class="cell row-top col-0"></div>
        <div class="cell row-top col-1"></div>
        <div class="cell row-top col-2"></div>
        <div class="cell row-top col-3"></div>
        <div class="cell row-top col-4"></div>
        <div class="cell row-top col-5"></div>
        <div class="cell row-top col-6"></div>
        <div class="cell row-0 col-0 left-border top-border"></div>
        <div class="cell row-0 col-1 top-border"></div>
        <div class="cell row-0 col-2 top-border"></div>
        <div class="cell row-0 col-3 top-border"></div>
        <div class="cell row-0 col-4 top-border"></div>
        <div class="cell row-0 col-5 top-border"></div>
        <div class="cell row-0 col-6 top-border right-border"></div>
        <div class="cell row-1 col-0 left-border"></div>
        <div class="cell row-1 col-1"></div>
        <div class="cell row-1 col-2"></div>
        <div class="cell row-1 col-3"></div>
        <div class="cell row-1 col-4"></div>
        <div class="cell row-1 col-5"></div>
        <div class="cell row-1 col-6 right-border"></div>
        <div class="cell row-2 col-0 left-border"></div>
        <div class="cell row-2 col-1"></div>
        <div class="cell row-2 col-2"></div>
        <div class="cell row-2 col-3"></div>
        <div class="cell row-2 col-4"></div>
        <div class="cell row-2 col-5"></div>
        <div class="cell row-2 col-6 right-border"></div>
        <div class="cell row-3 col-0 left-border"></div>
        <div class="cell row-3 col-1"></div>
        <div class="cell row-3 col-2"></div>
        <div class="cell row-3 col-3"></div>
        <div class="cell row-3 col-4"></div>
        <div class="cell row-3 col-5"></div>
        <div class="cell row-3 col-6 right-border"></div>
        <div class="cell row-4 col-0 left-border"></div>
        <div class="cell row-4 col-1"></div>
        <div class="cell row-4 col-2"></div>
        <div class="cell row-4 col-3"></div>
        <div class="cell row-4 col-4"></div>
        <div class="cell row-4 col-5"></div>
        <div class="cell row-4 col-6 right-border"></div>
        <div class="cell row-5 col-0 bottom-border left-border"></div>
        <div class="cell row-5 col-1 bottom-border"></div>
        <div class="cell row-5 col-2 bottom-border"></div>
        <div class="cell row-5 col-3 bottom-border"></div>
        <div class="cell row-5 col-4 bottom-border"></div>
        <div class="cell row-5 col-5 bottom-border"></div>
        <div class="cell row-5 col-6 bottom-border right-border"></div>
        </div>
        <div class="footer">
        <button class="reset">Reset</button>
        <span class="status"></span>
        </div>
    </div>

    <div id="madLibs" class="tabcontent">
        <div id="madLibsContainer">
            <h1>Mad Libs</h1>
            <label>noun:</label><br>
            <input type="text" id="noun1"><br>
            <label>noun(plural):</label><br>
            <input type="text" id="nounPlural"><br>
            <label>noun:</label><br>
            <input type="text" id="noun2"><br>
            <label>place:</label><br>
            <input type="text" id="place"><br>
            <label>adjective:</label><br>
            <input type="text" id="adjective"><br>
            <label>noun:</label><br>
            <input type="text" id="noun3"><br><br>
            <input type="submit" id="submitBtn">
            <label id="story"></label>
        </div>
    </div>
    <script type="text/javascript" src="script.php"></script>
  </body>
</html>