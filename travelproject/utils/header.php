<?php if($_SESSION['login'])
{?>
<div class="header-top">
  <div class="header-top__container">
    <ul class="header-top__list">
      <li class="header-top__item"><a href="index.php" class="header-top__link"><img
            src="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
            alt="Logo" class="logo"></a>
      </li>
      <li class="header-top__item"><a href="profile.php" class="header-top__link">My Profile</a></li>
      <li class="header-top__item"><a href="change-password.php" class="header-top__link">Change Password</a></li>
      <li class="header-top__item"><a href="tour-history.php" class="header-top__link">My Tour History</a></li>
      <li class="header-top__item"><a href="issuetickets.php" class="header-top__link">Issue Tickets</a></li>
    </ul>
    <ul class="header-info">
      <li class="header-top__item">XIN CHAO: </li>
      <li class="header-top__item"><?php echo htmlentities($_SESSION['login']);?></li>
      <li class="header-top__item"><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<?php } 
else {?>
<div class="">
  <header class="header">
    <div class="header-container">
      <ul class="header-list">
        <li class="header-item"><a href="index.php" class=""> <img
              src="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
              alt="Logo" class="logo"></a></li>
        <li class="header-item"><a href="admin/index.php" class="header-link">
            <svg width="25" height="25" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.2508 1.56265H4.74906C2.48331 1.56265 1.06281 3.1669 1.06281 5.43715V11.5632C1.06281 13.8334 2.47656 15.4377 4.74906 15.4377H11.2501C13.5233 15.4377 14.9378 13.8334 14.9378 11.5632V5.43715C14.9378 3.1669 13.5233 1.56265 11.2508 1.56265Z"
                stroke="#131313" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.01925 8.50016C7.01925 9.26666 6.3975 9.88916 5.63025 9.88916C4.86375 9.88916 4.242 9.26666 4.242 8.50016C4.242 7.73366 4.86375 7.11116 5.63025 7.11116C6.3975 7.11116 7.01925 7.73366 7.01925 8.50016Z"
                stroke="#131313" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M7.01923 8.50015H11.7577V9.88915" stroke="#131313" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M9.63623 9.88877V8.49977" stroke="#131313" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            Login Admin
          </a></li>
      </ul>
      <ul class="header-list">
        <li class="header-item"><a id="modalBoxSign" class="header-link sign"><svg width="25" height="25"
              viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M11.2508 1.56265H4.74906C2.48331 1.56265 1.06281 3.1669 1.06281 5.43715V11.5632C1.06281 13.8334 2.47656 15.4377 4.74906 15.4377H11.2501C13.5233 15.4377 14.9378 13.8334 14.9378 11.5632V5.43715C14.9378 3.1669 13.5233 1.56265 11.2508 1.56265Z"
                stroke="#131313" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M7.01925 8.50016C7.01925 9.26666 6.3975 9.88916 5.63025 9.88916C4.86375 9.88916 4.242 9.26666 4.242 8.50016C4.242 7.73366 4.86375 7.11116 5.63025 7.11116C6.3975 7.11116 7.01925 7.73366 7.01925 8.50016Z"
                stroke="#131313" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M7.01923 8.50015H11.7577V9.88915" stroke="#131313" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M9.63623 9.88877V8.49977" stroke="#131313" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
            Login</a></li>
        <li class="header-item"><a id="modalBoxUp" class="header-link signup"><i
              class="fa-solid fa-arrow-right-to-bracket"></i>Signup</a></li>
      </ul>
    </div>
  </header>
</div>
<?php }?>
<div class="">
  <div class="navigation">
    <div class="navigation-container">
      <ul class="navigation-list">
        <li class="navigation-item"><a href="index.php" class="navigation-link">Home</a></li>
        <li class="navigation-item"><a href="page.php?type=aboutus" class="navigation-link">About</a></li>
        <li class="navigation-item"><a href="package-list.php" class="navigation-link">Tour Package</a></li>
        <li class="navigation-item"><a href="page.php?type=privacy" class="navigation-link">Privacy Policy</a></li>
        <li class="navigation-item"><a href="page.php?type=terms" class="navigation-link">Term of Use</a></li>
        <?php if($_SESSION['login'])
{?>
        <li class="navigation-item"><a id="modalSupport" class="navigation-link">Support</a></li>
        <?php } else { ?>
        <li class="navigation-item"><a href="enquiry.php" class="navigation-link">Enquiry</a></li>
        <?php } ?>
        <li class="navigation-item"><a href="page.php?type=contact" class="navigation-link">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>