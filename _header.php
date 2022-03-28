<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Blog</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
      <div class="logo">
        <h1>Blog</h1>
      </div>
      <div class="pc-menu">
        <nav>
          <ul>
            <li><a href="index.php">Top</a></li>
            <li><a href="diary.php">Diary</a></li>
            <li><a href="profile.php">Profile</a></li>
          </ul>
        </nav>
      </div>
      <div id="app" v-cloak>
        <div class="sp-menu" @click="showMenu">
          <span class="material-icons" id="menu-btn" v-show="!activeBtn">menu</span>
          <span class="material-icons" id="close" v-show="activeBtn">close</span>
        </div>
    
      <transition name="menu">
        <div class="menu" v-show="activeBtn">
            <ul>
              <li><a href="index.php">Top</a></li>
              <li><a href="diary.php">Diary</a></li>
              <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
      </transition>
    </div>
  </header>