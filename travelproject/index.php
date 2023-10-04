<?php
session_start();
error_reporting(0);
include('utils/config.php');
$key='';
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
  <title>Home</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="./WOW-master/css/libs/animate.css" />
  <script src="./WOW-master/dist/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
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
            src="https://img.freepik.com/premium-vector/happy-new-year-2023-chinese-new-year-year-cat-happy-lunar-new-year-2023-cat-illustration_692630-132.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Phục vụ chuyên nghiệp</p>
        </div>
        <div class="swiper-slide">
          <img src="https://img.freepik.com/premium-vector/travel-asia-road-trip_207954-235.jpg?w=1060" alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Uy tín</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/realistic-travel-agency-template-design_23-2149340532.jpg?w=1060&t=st=1670386546~exp=1670387146~hmac=fcc18f0b0126321a43d821787ccab19afb085c5d23e13614f1ebecfdd1eddc76"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Trải nghiệm tuyệt hảo</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/travel-world-road-trip-tourism-landmarks-globe-concept-website-template-illustration-modern-flat-design_207954-6.jpg?w=996"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảm giác mạnh mẽ</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/thailand-cities-skyline-silhouette-vector-illustration-white-background-business-travel-tourism-concept-with-famous-thailand-landmarks-image-presentation-banner-web-site_596401-497.jpg?w=1380&t=st=1670386570~exp=1670387170~hmac=610566dacbeab46c58e41930ab35d17fd67145cc094b0289912d3bf17704bc43"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Tận hưởng</p>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <main>
      <div class="main-container">
        <section class="partner">
          <div class="partner-container">
            <ul class="partner-list">
              <li class="partner-item wow bounceInLeft">
                <a href="#" class="partner-link"><img src="./images/amadeus.png" alt="" /></a>
              </li>
              <li class="partner-item wow bounceInLeft" data-wow-delay="1.5s">
                <a href="#" class=" partner-link"><img src="./images/booking.png" alt="" /></a>
              </li>
              <li class="partner-item wow bounceInLeft" data-wow-delay="2s">
                <a href="#" class="partner-link"><img src="./images/trivago.png" alt="" /></a>
              </li>
              <li class="partner-item wow bounceInLeft" data-wow-delay="2.5s">
                <a href="#" class="partner-link"><img src="./images/trainline.png" alt="" /></a>
              </li>
              <li class="partner-item wow bounceInLeft" data-wow-delay="3s">
                <a href="#" class="partner-link"><img src="./images/cheapflight.png" alt="" /></a>
              </li>
              <li class="partner-item wow bounceInLeft" data-wow-delay="3.5s">
                <a href="#" class="partner-link"><img src="./images/momondo.png" alt="" /></a>
              </li>
            </ul>
          </div>
        </section>
        <section class="tripplanning">
          <div class="tripplanning-container">
            <h2 class="tripplanning-heading wow fadeInLeft">Innovative Trip Planning</h2>
            <p class="tripplanning-desc wow fadeInLeft">
              Our Vision is to revolutionize the way people travel by introducing intelligent trip
              planning
            </p>
            <div class="tripplanning-list wow fadeInLeft" data-wow-delay="1.5s">
              <div class="tripplanning-item">
                <div class="tripplanning-item__container">
                  <span class="tripplanning-item__icon"><svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" width="48" height="48" rx="24" fill="#58C27D" />
                      <path
                        d="M15.5 23C15.3022 23 15.1089 23.0586 14.9444 23.1685C14.78 23.2784 14.6518 23.4346 14.5761 23.6173C14.5004 23.8 14.4806 24.0011 14.5192 24.1951C14.5578 24.3891 14.653 24.5673 14.7929 24.7071C14.9327 24.847 15.1109 24.9422 15.3049 24.9808C15.4989 25.0194 15.7 24.9996 15.8827 24.9239C16.0654 24.8482 16.2216 24.72 16.3315 24.5556C16.4414 24.3911 16.5 24.1978 16.5 24C16.5 23.7348 16.3946 23.4804 16.2071 23.2929C16.0196 23.1054 15.7652 23 15.5 23ZM17.43 29.66C17.2896 29.7996 17.1937 29.9778 17.1547 30.1719C17.1156 30.3661 17.135 30.5674 17.2106 30.7505C17.2861 30.9336 17.4142 31.0901 17.5788 31.2003C17.7434 31.3104 17.937 31.3692 18.135 31.3692C18.333 31.3692 18.5266 31.3104 18.6912 31.2003C18.8558 31.0901 18.9839 30.9336 19.0594 30.7505C19.135 30.5674 19.1544 30.3661 19.1153 30.1719C19.0763 29.9778 18.9804 29.7996 18.84 29.66C18.6526 29.4737 18.3992 29.3692 18.135 29.3692C17.8708 29.3692 17.6174 29.4737 17.43 29.66ZM18.84 18.34C18.9804 18.2004 19.0763 18.0222 19.1153 17.8281C19.1544 17.6339 19.135 17.4326 19.0594 17.2495C18.9839 17.0664 18.8558 16.9099 18.6912 16.7997C18.5266 16.6896 18.333 16.6308 18.135 16.6308C17.937 16.6308 17.7434 16.6896 17.5788 16.7997C17.4142 16.9099 17.2861 17.0664 17.2106 17.2495C17.135 17.4326 17.1156 17.6339 17.1547 17.8281C17.1937 18.0222 17.2896 18.2004 17.43 18.34C17.6174 18.5263 17.8708 18.6308 18.135 18.6308C18.3992 18.6308 18.6526 18.5263 18.84 18.34ZM24.5 16C24.6978 16 24.8911 15.9414 25.0556 15.8315C25.22 15.7216 25.3482 15.5654 25.4239 15.3827C25.4996 15.2 25.5194 14.9989 25.4808 14.8049C25.4422 14.6109 25.347 14.4327 25.2071 14.2929C25.0673 14.153 24.8891 14.0578 24.6951 14.0192C24.5011 13.9806 24.3 14.0004 24.1173 14.0761C23.9346 14.1518 23.7784 14.28 23.6685 14.4444C23.5587 14.6089 23.5 14.8022 23.5 15C23.5 15.2652 23.6054 15.5196 23.7929 15.7071C23.9804 15.8946 24.2348 16 24.5 16ZM30.16 29.66C30.0196 29.7996 29.9237 29.9778 29.8847 30.1719C29.8456 30.3661 29.865 30.5674 29.9406 30.7505C30.0161 30.9336 30.1442 31.0901 30.3088 31.2003C30.4734 31.3104 30.667 31.3692 30.865 31.3692C31.063 31.3692 31.2566 31.3104 31.4212 31.2003C31.5858 31.0901 31.7139 30.9336 31.7894 30.7505C31.865 30.5674 31.8844 30.3661 31.8453 30.1719C31.8063 29.9778 31.7104 29.7996 31.57 29.66C31.3826 29.4737 31.1292 29.3692 30.865 29.3692C30.6008 29.3692 30.3474 29.4737 30.16 29.66ZM33.5 23C33.3022 23 33.1089 23.0586 32.9444 23.1685C32.78 23.2784 32.6518 23.4346 32.5761 23.6173C32.5004 23.8 32.4806 24.0011 32.5192 24.1951C32.5578 24.3891 32.653 24.5673 32.7929 24.7071C32.9327 24.847 33.1109 24.9422 33.3049 24.9808C33.4989 25.0194 33.7 24.9996 33.8827 24.9239C34.0654 24.8482 34.2216 24.72 34.3315 24.5556C34.4414 24.3911 34.5 24.1978 34.5 24C34.5 23.7348 34.3946 23.4804 34.2071 23.2929C34.0196 23.1054 33.7652 23 33.5 23ZM30.16 16.93C30.0196 17.0696 29.9237 17.2478 29.8847 17.4419C29.8456 17.6361 29.865 17.8374 29.9406 18.0205C30.0161 18.2036 30.1442 18.3601 30.3088 18.4703C30.4734 18.5804 30.667 18.6392 30.865 18.6392C31.063 18.6392 31.2566 18.5804 31.4212 18.4703C31.5858 18.3601 31.7139 18.2036 31.7894 18.0205C31.865 17.8374 31.8844 17.6361 31.8453 17.4419C31.8063 17.2478 31.7104 17.0696 31.57 16.93C31.3826 16.7437 31.1292 16.6392 30.865 16.6392C30.6008 16.6392 30.3474 16.7437 30.16 16.93ZM24.5 32C24.3022 32 24.1089 32.0586 23.9444 32.1685C23.78 32.2784 23.6518 32.4346 23.5761 32.6173C23.5004 32.8 23.4806 33.0011 23.5192 33.1951C23.5578 33.3891 23.653 33.5673 23.7929 33.7071C23.9327 33.847 24.1109 33.9422 24.3049 33.9808C24.4989 34.0194 24.7 33.9996 24.8827 33.9239C25.0654 33.8482 25.2216 33.72 25.3315 33.5556C25.4414 33.3911 25.5 33.1978 25.5 33C25.5 32.7348 25.3946 32.4804 25.2071 32.2929C25.0196 32.1054 24.7652 32 24.5 32ZM24.5 18C23.3133 18 22.1533 18.3519 21.1666 19.0112C20.1799 19.6705 19.4108 20.6075 18.9567 21.7039C18.5026 22.8003 18.3838 24.0067 18.6153 25.1705C18.8468 26.3344 19.4182 27.4035 20.2574 28.2426C21.0965 29.0818 22.1656 29.6532 23.3295 29.8847C24.4933 30.1162 25.6997 29.9974 26.7961 29.5433C27.8925 29.0892 28.8295 28.3201 29.4888 27.3334C30.1481 26.3467 30.5 25.1867 30.5 24C30.5 22.4087 29.8679 20.8826 28.7426 19.7574C27.6174 18.6321 26.0913 18 24.5 18ZM24.5 28C23.7089 28 22.9355 27.7654 22.2777 27.3259C21.6199 26.8864 21.1072 26.2616 20.8045 25.5307C20.5017 24.7998 20.4225 23.9956 20.5769 23.2196C20.7312 22.4437 21.1122 21.731 21.6716 21.1716C22.231 20.6122 22.9437 20.2312 23.7196 20.0769C24.4956 19.9225 25.2998 20.0017 26.0307 20.3045C26.7616 20.6072 27.3864 21.1199 27.8259 21.7777C28.2654 22.4355 28.5 23.2089 28.5 24C28.5 25.0609 28.0786 26.0783 27.3284 26.8284C26.5783 27.5786 25.5609 28 24.5 28Z"
                        fill="white" />
                    </svg>
                  </span>
                  <p class="tripplanning-item__desc">
                    Partner allows you to browse multiple carriers for travel.
                  </p>
                  <a href="#" class="tripplanning-item__link">Learn More<span><svg width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.0909 7.26521C14.4968 6.8906 15.1294 6.9159 15.504 7.32172L18.7348 10.8217C19.0884 11.2047 19.0884 11.7952 18.7348 12.1782L15.504 15.6783C15.1294 16.0841 14.4968 16.1094 14.091 15.7348C13.6851 15.3602 13.6598 14.7276 14.0344 14.3217L15.716 12.5L6 12.5C5.44771 12.5 5 12.0523 5 11.5C5 10.9477 5.44771 10.5 6 10.5L15.716 10.5L14.0344 8.67829C13.6598 8.27247 13.6851 7.63981 14.0909 7.26521Z"
                          fill="#353945" />
                      </svg> </span></a>
                </div>
              </div>
              <div class="tripplanning-item">
                <div class="tripplanning-item__container">
                  <span class="tripplanning-item__icon"><svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect width="48" height="48" rx="24" fill="#FA8F54" />
                      <path
                        d="M14.4004 18.72C14.4004 17.6597 15.26 16.8 16.3204 16.8L31.6804 16.8C32.7408 16.8 33.6004 17.6597 33.6004 18.72V27.36C33.6004 28.4205 32.7408 29.28 31.6804 29.28H16.3204C15.26 29.28 14.4004 28.4205 14.4004 27.36L14.4004 18.72Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <path
                        d="M20.1602 32.16C20.1602 32.16 21.9356 32.16 24.0002 32.16C25.2879 32.16 26.6881 32.16 27.8402 32.16"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                  <p class="tripplanning-item__desc">
                    The website is a way for partners to communicate with their customers.
                  </p>
                  <a href="#" class="tripplanning-item__link">Learn More<span><svg width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.0909 7.26521C14.4968 6.8906 15.1294 6.9159 15.504 7.32172L18.7348 10.8217C19.0884 11.2047 19.0884 11.7952 18.7348 12.1782L15.504 15.6783C15.1294 16.0841 14.4968 16.1094 14.091 15.7348C13.6851 15.3602 13.6598 14.7276 14.0344 14.3217L15.716 12.5L6 12.5C5.44771 12.5 5 12.0523 5 11.5C5 10.9477 5.44771 10.5 6 10.5L15.716 10.5L14.0344 8.67829C13.6598 8.27247 13.6851 7.63981 14.0909 7.26521Z"
                          fill="#353945" />
                      </svg> </span></a>
                </div>
              </div>
              <div class="tripplanning-item">
                <div class="tripplanning-item__container">
                  <span class="tripplanning-item__icon"><svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect width="48" height="48" rx="24" fill="#3B71FE" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M31.2414 18.7547C31.5106 18.8761 31.6977 19.145 31.6977 19.4572V29.345C31.5553 29.3028 31.4035 29.2575 31.2414 29.2088V18.7547ZM29.9939 16.8031C30.0191 16.8011 30.0446 16.8 30.0704 16.8H30.9193C32.4 16.8 33.6004 17.9897 33.6004 19.4572V30.6C33.6004 31.2213 33.0047 31.6728 32.3997 31.51C31.9946 31.4009 31.3895 31.224 30.5527 30.9725L30.4643 30.9459C30.3023 30.8972 29.9606 30.7938 29.6568 30.7018C27.8148 30.7966 26.1879 31.3104 24.76 32.2442C24.4408 32.4529 24.0266 32.4519 23.7084 32.2418C22.1896 31.2386 20.4241 30.7206 18.3914 30.6875C18.0765 30.7828 17.707 30.8946 17.5365 30.9459L17.448 30.9725C16.6113 31.224 16.0062 31.4009 15.6011 31.51C14.9961 31.6728 14.4004 31.2213 14.4004 30.6L14.4004 19.4572C14.4004 17.9897 15.6008 16.8 17.0815 16.8H17.9468C17.9866 16.8 18.0259 16.8025 18.0644 16.8072C18.1029 16.8025 18.1422 16.8001 18.182 16.8001C20.4563 16.8001 22.481 17.3148 24.239 18.3447C25.9362 17.3604 27.8595 16.8464 29.9939 16.8031ZM17.2306 18.6858V29.0669C17.1459 29.0925 17.0728 29.1146 17.0192 29.1307L16.9376 29.1553C16.7072 29.2246 16.4965 29.2876 16.3031 29.345V19.4572C16.3031 19.0311 16.6516 18.6858 17.0815 18.6858H17.2306ZM19.1336 28.4951V18.7217C20.6857 18.8411 22.0661 19.2593 23.285 19.9762V27.9498C21.6541 27.9827 20.4829 28.1371 19.2231 28.4704C19.1989 28.4768 19.1693 28.4849 19.1336 28.4951ZM23.2512 29.8365C23.2625 29.8416 23.2737 29.8468 23.285 29.8519V29.8358C23.2737 29.836 23.2624 29.8363 23.2512 29.8365ZM25.1893 29.8502V29.8564C25.1935 29.8545 25.1976 29.8526 25.2017 29.8507C25.1976 29.8506 25.1935 29.8504 25.1893 29.8502ZM29.3407 28.6347V18.7224C27.803 18.843 26.4226 19.2619 25.1893 19.9797V27.9633C26.5805 28.0152 27.6432 28.1702 28.7777 28.4704C28.8709 28.4951 29.0453 28.5461 29.3407 28.6347ZM32.5643 30.6001C32.5643 30.5437 32.6185 30.5026 32.6735 30.5174C32.6387 30.5081 32.6024 30.4982 32.5643 30.4877V30.6001ZM15.4382 30.6001C15.4382 30.5481 15.3922 30.5091 15.3419 30.5149L15.3333 30.5162L15.4382 30.4877V30.6001Z"
                        fill="white" />
                    </svg>
                  </span>
                  <p class="tripplanning-item__desc">
                    The eBook Reader is a new way to look at e-books.
                  </p>
                  <a href="#" class="tripplanning-item__link">Learn More<span><svg width="24" height="24"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.0909 7.26521C14.4968 6.8906 15.1294 6.9159 15.504 7.32172L18.7348 10.8217C19.0884 11.2047 19.0884 11.7952 18.7348 12.1782L15.504 15.6783C15.1294 16.0841 14.4968 16.1094 14.091 15.7348C13.6851 15.3602 13.6598 14.7276 14.0344 14.3217L15.716 12.5L6 12.5C5.44771 12.5 5 12.0523 5 11.5C5 10.9477 5.44771 10.5 6 10.5L15.716 10.5L14.0344 8.67829C13.6598 8.27247 13.6851 7.63981 14.0909 7.26521Z"
                          fill="#353945" />
                      </svg> </span></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="booksteps">
          <div class="container">
            <div class="booksteps-container">
              <div class="booksteps-create">
                <div class="booksteps-create__container wow fadeInUp">
                  <div class="booksteps-img">
                    <img src="./images/card-book2x.png" alt="" />
                  </div>
                  <div class="booksteps-create__pagination">
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M14.0909 7.26521C14.4968 6.8906 15.1294 6.9159 15.504 7.32172L18.7348 10.8217C19.0884 11.2047 19.0884 11.7952 18.7348 12.1782L15.504 15.6783C15.1294 16.0841 14.4968 16.1094 14.091 15.7348C13.6851 15.3602 13.6598 14.7276 14.0344 14.3217L15.716 12.5L6 12.5C5.44771 12.5 5 12.0523 5 11.5C5 10.9477 5.44771 10.5 6 10.5L15.716 10.5L14.0344 8.67829C13.6598 8.27247 13.6851 7.63981 14.0909 7.26521Z"
                          fill="#353945" />
                      </svg>
                    </span>
                    <div><span>01</span>/03</div>
                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.90906 7.26521C9.50324 6.8906 8.87058 6.9159 8.49597 7.32172L5.2652 10.8217C4.9116 11.2047 4.9116 11.7952 5.26519 12.1782L8.49597 15.6783C8.87057 16.0841 9.50323 16.1094 9.90905 15.7348C10.3149 15.3602 10.3402 14.7276 9.96558 14.3217L8.28397 12.5L18 12.5C18.5523 12.5 19 12.0523 19 11.5C19 10.9477 18.5523 10.5 18 10.5L8.284 10.5L9.96557 8.67829C10.3402 8.27247 10.3149 7.63981 9.90906 7.26521Z"
                          fill="#353945" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
              <div class="booksteps-content wow fadeInUp">
                <div class="booksteps-top">
                  <h2 class="booksteps-heading">Book Easy 3 Steps</h2>
                  <p class="booksteps-top__desc">
                    Planning a trip is sometimes not easy. But Trip Plan will help you to manage
                    time and budget for your journey! There are only 3 steps: Create an account,
                    choose your destination city.
                  </p>
                  <div class="booksteps-list">
                    <div class="booksteps-item">
                      <span><svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <circle cx="10" cy="10.5" r="7.5" stroke="#3B71FE" stroke-width="5" />
                        </svg>
                      </span>
                      <p style="color: #353945;">Set Up your Account</p>
                    </div>
                    <div class="booksteps-item">
                      <span><svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <circle cx="10" cy="10.5" r="7.5" stroke="#3B71FE" stroke-width="5" />
                        </svg>
                      </span>
                      <p style="color: #353945;">Respond to Private requests</p>
                    </div>
                    <div class="booksteps-item">
                      <span><svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <circle cx="10" cy="10.5" r="7.5" stroke="#3B71FE" stroke-width="5" />
                        </svg>
                      </span>
                      <p style="color: #353945;">Book your Trip</p>
                    </div>
                  </div>
                </div>
                <p class="booksteps-desc">
                  “Plan your trip with a 3-step trip plan. Check in out at a glance, select hotel
                  rooms on the go, and create a packing list”
                </p>
                <div class="booksteps-user">
                  <div class="booksteps-user__img"><img src="./images/avator.png" alt="" /></div>
                  <div class="booksteps-user__info">
                    <span class="booksteps-user__name">BUI MINH SON</span>
                    <p class="booksteps-user__desc">Co-Founder and CEO and Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="tour">
          <div class="main-left wow fadeInLeftBig">
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
          <div class="main-right wow fadeInRightBig">
            <div class="card">
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
                        <span>4.8</span>
                        <span>(128 reviews)</span>
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
              <?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
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
                        <span>5.0</span>
                        <span>(298 reviews)</span>
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
              <?php }?>
              <?php if($query->rowCount() > 0) { ?>
              <a href="package-list.php" class="btn btn--big view-more">Explore All</a>
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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
  const toast = {
    success(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#4caf50',
        },
      }).showToast()
    },
    error(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#ef5350',
        },
      }).showToast()
    },
    info(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#03a9f4',
        },
      }).showToast()
    },
  }
  <?php $noti = 'Website còn nhiều sai sót. Mong mọi người phản hồi lại để chúng tôi phát triển hơn'; ?>
  <?php if(isset($_SESSION['msgsssi'])) {?>
  toast.success("<?php echo $_SESSION['msgsssi'];?>");
  <?php  unset($_SESSION['msgsssi']);} else if(isset($_SESSION['msgersi'])) {?>
  toast.error("<?php echo $_SESSION['msgersi'];?> ");
  <?php unset($_SESSION['msgersi']);} else {?>
  toast.info("<?php echo $noti;?> ");
  <?php }?>
  </script>
</body>

</html>