<?php
session_start();
error_reporting(0);
include('utils/config.php');
$key = '';
if(isset($_POST['submitsearch']))
{
$type = 'search';
$key=$_POST['search'];
$sql ="SELECT * FROM tbltourpackages WHERE PackageName LIKE :keyword OR PackageType LIKE :keyword	OR PackageLocation LIKE :keyword ORDER BY PackageName" ;
$querysearch = $dbh->prepare($sql);
$querysearch->bindValue(':keyword','%'.$key.'%',PDO::PARAM_STR);
$querysearch->execute();
$resultsearch=$querysearch->fetchAll(PDO::FETCH_OBJ);
$rows = $querysearch->rowCount();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Package List</title>
  <link rel="shortcut icon"
    href="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
    type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>" type='text/css'>


</head>

<body>
  <div class="main">
    <div class="main-top">
      <?php include('utils/header.php');?>
    </div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/macau-china-skyline-with-panorama-sky-background-vector-illustration-business-travel-tourism-concept-with-modern-buildings-image-presentation-banner-web-site_596401-36.jpg?w=1380&t=st=1670385855~exp=1670386455~hmac=4d8c69b8d2b9099766b2c6bad55e4703038a18b5103d562204d662bd84215199"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Du lịch toàn cầu</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/beijing-skyline-vector-illustration-flat-style_596401-111.jpg?w=1380&t=st=1670385865~exp=1670386465~hmac=eff5f1618ea65bb45c7cd2d59ac58f26eebe55f727c2c5b8ef1ef16500da19df"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Mọi địa điểm trên thế giới</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/korea-travel-composition-flat_98292-3509.jpg?w=740&t=st=1670385884~exp=1670386484~hmac=254e5826c8cef6ebd9d66397b469b65747532f09615609aee87e5d8c8887219a"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Giá thành rẻ</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/tourists-flight-travel-infographics-with-world-map-landmarks-icons_1284-52994.jpg?w=996&t=st=1670385935~exp=1670386535~hmac=f7c34ae93a1ce565a4a79bf03cec1c7ae60b4bff17c53bf2e8d22b3ee2d625db"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảnh đẹp tuyệt vời</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/earth-globe-airplane_1308-28892.jpg?w=1380&t=st=1670385922~exp=1670386522~hmac=aa55cacfa549b03c75dd8d9faab5ed8773ff0d4d399a3fc33b40ee0e3996c864"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Ninh Bình</p>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <main>
      <div class="main-container">
        <section class="tour">
          <div class="main-left">
            <h4 class="main-text main-text--big">Search location or property</h4>
            <div class="main-top">
              <form class="main-search" method="POST">
                <span class="main-icon"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M1.55285 9.04925C-0.517291 6.97911 -0.517291 3.62275 1.55285 1.55261C3.62299 -0.517535 6.97935 -0.517535 9.04949 1.55261C10.9416 3.44475 11.1043 6.41145 9.53756 8.48838L11.6291 10.58L11.6291 10.58C12.1746 11.1256 11.3562 11.944 10.8106 11.3984L8.74413 9.33188C6.66146 11.1147 3.52405 11.0204 1.55285 9.04925ZM8.23106 2.3713C6.61292 0.753152 3.98939 0.753152 2.37124 2.3713C0.753097 3.98944 0.753097 6.61297 2.37124 8.23112C3.98939 9.84926 6.61292 9.84926 8.23106 8.23112C9.84921 6.61297 9.84921 3.98944 8.23106 2.3713Z"
                      fill="#777E91" />
                  </svg>
                </span>
                <input type="text" id="search-locate" name="search" placeholder="Search location or property"
                  value="<?php echo $key;?>" />
                <button type="submit" name="submitsearch" class="btn" style="margin-top: 20px;">Search</button>
              </form>
              <div class="main-group">
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="sidetrips" class="checkbox__input" />
                  <label for="sidetrips" class="main-text checkbox__label">Show side trips</label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="mytrips" class="checkbox__input" />
                  <label for="mytrips" class="main-text checkbox__label">Show items in my trips</label>
                </div>
              </div>
              <div class="checkbox-category">
                <span class="main-text main-text--big">Activity type</span>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="hiddenGem" class="checkbox__input" />
                  <label for="hiddenGem" class="main-text checkbox__label">Hidden Gems</label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="shopPing" class="checkbox__input" />
                  <label for="shopPing" class="main-text checkbox__label">Shopping </label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="historic" class="checkbox__input" />
                  <label for="historic" class="main-text checkbox__label">Historic Sites </label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="nightlife" class="checkbox__input" />
                  <label for="nightlife" class="main-text checkbox__label">Nightlife</label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="tours" class="checkbox__input" />
                  <label for="tours" class="main-text checkbox__label">Tours</label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="outDoors" class="checkbox__input" />
                  <label for="outDoors" class="main-text checkbox__label">Outdoors</label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="museums" class="checkbox__input" />
                  <label for="museums" class="main-text checkbox__label">U Museums </label>
                </div>
                <div class="main-item checkbox">
                  <input type="checkbox" name="" id="parks" class="checkbox__input" />
                  <label for="parks" class="main-text checkbox__label">Parks</label>
                </div>
              </div>
            </div>
          </div>
          <div class="main-right">

            <?php
              if(isset($type) && strcmp($key,' ') !== 0 ){    
                if($rows > 0)
                {
                  foreach($resultsearch as $result)
                  {	?>
            <div class="card-item">
              <div class="card-media">
                <img src="admin/packageimages/<?php echo htmlentities($result->PackageImage);?>" alt="Image Package"
                  class="card-img" />
              </div>
              <div class="card-content">
                <div class="card-content__top">
                  <h3 class="card-title"><?php echo htmlentities($result->PackageName);?></h3>
                  <div class="card-rating">
                    <span class="card-rating__icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.13326 15.491L7.99996 13.366L11.8667 15.491C12.4232 15.7968 13.0716 15.2989 12.9648 14.6476L12.2275 10.1543L15.3516 6.97107C15.8043 6.50981 15.5561 5.70233 14.9325 5.60761L10.6108 4.95117L8.67898 0.85962C8.40014 0.269043 7.59978 0.269043 7.32094 0.85962L5.38916 4.95117L1.06741 5.60761C0.44384 5.70233 0.195647 6.50981 0.648336 6.97107L3.77242 10.1543L3.03515 14.6476C2.92829 15.2989 3.57668 15.7968 4.13326 15.491Z"
                          fill="#FFC542" />
                      </svg>
                    </span>
                    <p class="card-rating__desc">
                      <span>4.5</span>
                      <span>(200 reviews)</span>
                    </p>
                  </div>
                  <p class="card-type">Package Type: <?php echo htmlentities($result->PackageType);?></p>
                  <p class="card-location">Package Location: <?php echo htmlentities($result->PackageLocation);?></p>
                  <p class="card-desc">Mô Tả: <?php echo htmlentities($result->PackageFetures);?></p>
                </div>
                <div class="card-info">
                  <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"
                    class="btn btn--medium">Detail</a>
                  <span class="card-price">Price $<?php echo htmlentities($result->PackagePrice);?></span>
                </div>
              </div>
            </div>
            <?php }} 
              else{ ?>
            <h3 style="text-align: left;color: #ef5350;"> Không có Package nào thỏa mãn điều kiện tìm kiếm !
            </h3>
            <?php }?>
            <?php } else { ?>
            <?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
            <div class="card-item">
              <div class="card-media">
                <img src="admin/packageimages/<?php echo htmlentities($result->PackageImage);?>" alt="Image Package"
                  class="card-img" />
              </div>
              <div class="card-content">
                <div class="card-content__top">
                  <h3 class="card-title"><?php echo htmlentities($result->PackageName);?></h3>
                  <div class="card-rating">
                    <span class="card-rating__icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.13326 15.491L7.99996 13.366L11.8667 15.491C12.4232 15.7968 13.0716 15.2989 12.9648 14.6476L12.2275 10.1543L15.3516 6.97107C15.8043 6.50981 15.5561 5.70233 14.9325 5.60761L10.6108 4.95117L8.67898 0.85962C8.40014 0.269043 7.59978 0.269043 7.32094 0.85962L5.38916 4.95117L1.06741 5.60761C0.44384 5.70233 0.195647 6.50981 0.648336 6.97107L3.77242 10.1543L3.03515 14.6476C2.92829 15.2989 3.57668 15.7968 4.13326 15.491Z"
                          fill="#FFC542" />
                      </svg>
                    </span>
                    <p class="card-rating__desc">
                      <span>3.8</span>
                      <span>(122 reviews)</span>
                    </p>
                  </div>
                  <p class="card-type">Package Type: <?php echo htmlentities($result->PackageType);?></p>
                  <p class="card-location">Package Location: <?php echo htmlentities($result->PackageLocation);?></p>
                  <p class="card-desc">Mô Tả: <?php echo htmlentities($result->PackageFetures);?></p>
                </div>
                <div class="card-info">
                  <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"
                    class="btn btn--medium">Detail</a>
                  <span class="card-price">Price $<?php echo htmlentities($result->PackagePrice);?></span>
                </div>
              </div>
            </div>
            <?php }} else{ ?>
            <h3 style="text-align: left;color: #ef5350;">Admin đang cập nhật tour, rất mong quý khách thông cảm vì sự
              thiếu xót này !
            </h3>
            <?php }}?>
          </div>
      </div>
      </section>
      <?php include('utils/footer.php');?>
  </div>
  </main>
  </div>
  <script>
  var swiper = new Swiper('.mySwiper', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  </script>
  <?php include('utils/signin.php');?>
  <?php include('utils/signup.php');?>
  <?php include('utils/write-us.php');?>
  <script src="./js/modal.js"></script>
</body>

</html>