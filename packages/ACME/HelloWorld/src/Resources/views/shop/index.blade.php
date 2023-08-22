  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Include Tailwind CSS via CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link
          rel="stylesheet"
          href="{{ asset('vendor/webkul/helloworld/assets/css/back_app.css') }}"
      />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Game Shop</title>

  </head>
  <body id="app" data-base-url="{{ asset('') }}">

  <!--head- containing curreny selection-->
  <nav class="navbar navbar-expand-lg navbar-light my_bg_primary">
      <div class="container">

          <div class="navbar-nav me-auto d-none d-lg-flex">
              <span class="nav-item nav-link">Left Aligned Text</span>
          </div>
          <div class="mx-auto text-center d-lg-none">
              <a class="navbar-brand" href="#">Your Logo</a>
          </div>
          <div class="navbar-nav d-none d-lg-flex">
              <div class="dropdown">
                  <label for="currencySelect" class="visually-hidden">Currency</label>
                  <select class="form-select" id="currencySelect">
                      <option selected>Currency</option>
                      <option value="usd">USD</option>
                      <option value="eur">EUR</option>
                      <option value="gbp">GBP</option>
                  </select>
              </div>
          </div>
      </div>
  </nav>

  <!--head- containing search section-->
  <div class="my_mid_bar_bg">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-4">
                  <div class="_1659198207680">
                      <svg class="vector" width="53" height="34" viewBox="0 0 53 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M34.2464 0.728516H36.1518C45.2029 0.728516 52.5396 8.04644 52.5396 17.0733C52.5396 26.0997 45.2029 33.4174 36.1518 33.4174H0.199707L34.2464 0.728516Z" fill="#FEF024" />
                      </svg>
                      <svg class="vector2" width="52" height="38" viewBox="0 0 52 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M41.7891 18.9089C41.7891 9.92023 35.7573 2.37313 27.6803 0.394531H19.4631C9.21103 0.394531 0.899658 8.6836 0.899658 18.9089C0.899658 29.1342 9.21103 37.4233 19.4631 37.4233H51.8019C45.7986 33.5881 41.7891 26.7242 41.7891 18.9089Z" fill="#1BBCBF" />
                      </svg>
                      <svg class="vector3" width="8" height="11" viewBox="0 0 8 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.23876 8.22425L5.27564 9.72952C4.6831 10.1834 3.76022 10.1834 3.16839 9.72952L1.20538 8.22425C0.895709 7.98692 0.719849 7.65562 0.719849 7.30861V2.54383C0.719849 1.85042 1.40886 0.970703 2.2587 0.970703H6.18513C7.03496 0.970703 7.72368 1.85042 7.72368 2.54383V7.30861C7.72368 7.65562 7.54782 7.98692 7.23876 8.22425Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector4" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.20538 2.23255L3.16839 0.727173C3.76022 0.273234 4.6831 0.273234 5.27564 0.727173L7.23876 2.23255C7.54782 2.47039 7.72368 2.80097 7.72368 3.14798V7.91205C7.72368 8.60617 7.03496 9.48538 6.18513 9.48538H2.2587C1.40886 9.48538 0.719849 8.60617 0.719849 7.91205V3.14798C0.719849 2.80097 0.895709 2.47039 1.20538 2.23255Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector5" width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.20766 1.22047L9.71674 3.17846C10.172 3.76881 10.172 4.68915 9.71674 5.2796L8.20766 7.23749C7.96991 7.54634 7.63742 7.72163 7.28999 7.72163H2.5125C1.81724 7.72163 0.935181 7.03415 0.935181 6.18718V2.27089C0.935181 1.42311 1.81724 0.736328 2.5125 0.736328H7.28999C7.63742 0.736328 7.96991 0.911621 8.20766 1.22047Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector6" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.23656 7.23749L0.727167 5.2796C0.271608 4.68915 0.271608 3.76881 0.727167 3.17846L2.23656 1.22047C2.47442 0.911621 2.8065 0.736328 3.15382 0.736328H7.93121C8.62657 0.736328 9.50873 1.42311 9.50873 2.27089V6.18718C9.50873 7.03415 8.62657 7.72163 7.93121 7.72163H3.15382C2.8065 7.72163 2.47442 7.54634 2.23656 7.23749Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector7" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.54461 3.64181C6.54461 5.4039 5.11194 6.83204 3.34525 6.83204C1.57805 6.83204 0.145996 5.4039 0.145996 3.64181C0.145996 1.87931 1.57805 0.451172 3.34525 0.451172C5.11194 0.451172 6.54461 1.87931 6.54461 3.64181Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector8" width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.54461 3.99933C6.54461 5.76193 5.11194 7.19018 3.34525 7.19018C1.57805 7.19018 0.145996 5.76193 0.145996 3.99933C0.145996 2.23744 1.57805 0.808594 3.34525 0.808594C5.11194 0.808594 6.54461 2.23744 6.54461 3.99933Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector9" width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M3.5054 7.01038C1.73892 7.01038 0.306763 5.58153 0.306763 3.81974C0.306763 2.05775 1.73892 0.628906 3.5054 0.628906C5.2728 0.628906 6.70485 2.05775 6.70485 3.81974C6.70485 5.58153 5.2728 7.01038 3.5054 7.01038Z" fill="#FEFEFE" />
                      </svg>
                      <svg class="vector10" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M4.10939 7.01038C2.3427 7.01038 0.910034 5.58153 0.910034 3.81974C0.910034 2.05775 2.3427 0.628906 4.10939 0.628906C5.87659 0.628906 7.30874 2.05775 7.30874 3.81974C7.30874 5.58153 5.87659 7.01038 4.10939 7.01038Z" fill="#FEFEFE" />
                      </svg>
                      <div class="gamers">GAMERS</div>
                      <div class="your-game-store">your game store</div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="input-group">
          <span class="input-group-text btn-outline-secondary">
            <i class="fa fa-search"></i>
          </span>
                      <input type="text" class="form-control" placeholder="Search out product">
                  </div>
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="frame-1000004477">
                      <svg class="link-svg" width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_41_19307)">
                              <path d="M23.0874 1.25C19.7598 1.25 17.0114 4.34082 15.8999 5.79957C14.7884 4.34082 12.04 1.25 8.71238 1.25C4.40457 1.25 0.899902 5.21059 0.899902 10.0781C0.899902 12.7338 1.954 15.2087 3.79906 16.9025C3.8259 16.9489 3.85889 16.9916 3.89732 17.0301L15.4586 28.5675C15.5807 28.689 15.74 28.75 15.8999 28.75C16.0598 28.75 16.2197 28.689 16.3418 28.5669L28.2876 16.6254L28.4109 16.5058C28.5086 16.4136 28.605 16.3202 28.713 16.2006C28.7582 16.1561 28.7954 16.106 28.8241 16.0517C30.1638 14.411 30.8999 12.2949 30.8999 10.0781C30.8999 5.21059 27.3953 1.25 23.0874 1.25ZM27.7841 15.3485C27.767 15.3687 27.7511 15.39 27.7371 15.412C27.6785 15.4791 27.6144 15.5383 27.5509 15.5988L15.8993 27.2418L4.92336 16.2879C4.88797 16.2182 4.83852 16.1548 4.77811 16.1017C3.10754 14.6429 2.14988 12.4475 2.14988 10.0781C2.14988 5.89965 5.09363 2.50004 8.71238 2.50004C12.2903 2.50004 15.3438 7.1668 15.3744 7.21379C15.6051 7.57021 16.1947 7.57021 16.4254 7.21379C16.456 7.1668 19.5095 2.50004 23.0874 2.50004C26.7062 2.50004 29.6499 5.89971 29.6499 10.0781C29.6499 12.0471 28.9871 13.9191 27.7841 15.3485Z" fill="black" />
                          </g>
                          <defs>
                              <clipPath id="clip0_41_19307">
                                  <rect width="30" height="30" fill="white" transform="translate(0.899902)" />
                              </clipPath>
                          </defs>
                      </svg>
                      <div class="list-margin">
                          <div class="list-item">
                              <svg class="link-svg2" width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_41_19311)">
                                      <path d="M20.1782 4.60743C19.8767 2.49419 18.0372 0.900391 15.8997 0.900391C14.525 0.900391 13.2195 1.56374 12.4078 2.67548C12.242 2.90221 12.2916 3.22025 12.5183 3.38605C12.7443 3.55126 13.0631 3.50225 13.2286 3.27522C13.8499 2.42507 14.8483 1.91739 15.8996 1.91739C17.5343 1.91739 18.9407 3.13564 19.1713 4.75089C19.2077 5.00458 19.4253 5.18766 19.6742 5.18766C19.6979 5.18766 19.7223 5.18587 19.7466 5.18259C20.0246 5.14282 20.2178 4.88526 20.1782 4.60743Z" fill="black" />
                                      <path d="M27.5221 10.299L25.9966 7.7566C25.9049 7.60332 25.7394 7.50977 25.5606 7.50977H24.0988C23.8181 7.50977 23.5904 7.73754 23.5904 8.01819C23.5904 8.29884 23.8181 8.52661 24.0988 8.52661H25.2728L26.1881 10.052H5.61111L6.52636 8.52661H7.06488C7.34553 8.52661 7.5733 8.29884 7.5733 8.01819C7.5733 7.73754 7.34553 7.50977 7.06488 7.50977H6.23856C6.0598 7.50977 5.8943 7.60332 5.80253 7.7566L4.27711 10.299C4.18281 10.4563 4.18058 10.6519 4.27071 10.8113C4.36083 10.9707 4.52976 11.0693 4.71314 11.0693H27.086C27.2694 11.0693 27.4382 10.9707 27.5285 10.8113C27.6187 10.6519 27.6164 10.456 27.5221 10.299Z" fill="black" />
                                      <path d="M24.9876 5.61163C24.9164 5.49678 24.8027 5.4153 24.6713 5.38461L17.7397 3.7634C17.6085 3.73257 17.4703 3.75551 17.3556 3.82641C17.2411 3.89762 17.1595 4.01128 17.1288 4.14267L16.6061 6.37717C16.542 6.65053 16.7119 6.92403 16.9854 6.98779C17.2587 7.05185 17.5325 6.88202 17.5963 6.60852L18.0033 4.86933L23.9445 6.25904L23.0109 10.2506C22.9469 10.524 23.1167 10.7975 23.3902 10.8612C23.4294 10.8703 23.4683 10.8746 23.5067 10.8746C23.7376 10.8746 23.9466 10.7164 24.001 10.4821L25.0504 5.99552C25.0814 5.86428 25.0588 5.72604 24.9876 5.61163Z" fill="black" />
                                      <path d="M16.1686 6.81279L15.7053 2.89422C15.6895 2.7603 15.6211 2.638 15.5151 2.55457C15.409 2.47115 15.2751 2.43302 15.1406 2.44881L6.63605 3.45404C6.35733 3.48711 6.15801 3.73976 6.19093 4.01877L6.96333 10.5544C6.99401 10.8132 7.21344 11.0034 7.46773 11.0034C7.48754 11.0034 7.50795 11.002 7.52821 10.9998C7.80678 10.9667 8.0061 10.7141 7.97332 10.4351L7.26052 4.404L14.7552 3.51824L15.1586 6.93182C15.1917 7.21068 15.4431 7.40881 15.7233 7.37723C16.002 7.34446 16.2014 7.09166 16.1686 6.81279Z" fill="black" />
                                      <path d="M20.1899 10.3674L19.1806 6.17043C19.1491 6.03949 19.0667 5.92613 18.9518 5.85567C18.837 5.7858 18.6992 5.7639 18.5674 5.79519L10.3761 7.76513C10.1031 7.83067 9.93502 8.10537 10.0006 8.37842L10.505 10.4762C10.5705 10.7495 10.8452 10.9177 11.1181 10.8517C11.3912 10.7862 11.5592 10.5115 11.4937 10.2384L11.108 8.63494L18.3105 6.90305L19.2009 10.6055C19.2568 10.8386 19.4653 10.995 19.6949 10.995C19.7344 10.995 19.7743 10.9904 19.8144 10.9807C20.0874 10.915 20.2554 10.6405 20.1899 10.3674Z" fill="black" />
                                      <path d="M27.5943 10.5351C27.5803 10.2649 27.3572 10.0527 27.0863 10.0527H4.71345C4.44263 10.0527 4.21948 10.2647 4.20547 10.5351L3.18847 30.3656C3.18132 30.5047 3.23168 30.6409 3.32761 30.7419C3.42369 30.8427 3.55687 30.9001 3.6963 30.9001H28.103C28.2423 30.9001 28.3757 30.8429 28.4722 30.7419C28.568 30.6409 28.6183 30.5048 28.6113 30.3656L27.5943 10.5351ZM4.23139 29.8831L5.19625 11.0696H26.6029L27.5678 29.8831H4.23139Z" fill="black" />
                                      <path d="M19.7132 12.0859C18.872 12.0859 18.1878 12.7701 18.1878 13.6114C18.1878 14.4526 18.872 15.1368 19.7132 15.1368C20.5544 15.1368 21.2386 14.4526 21.2386 13.6114C21.2386 12.7701 20.5544 12.0859 19.7132 12.0859ZM19.7132 14.1199C19.4327 14.1199 19.2048 13.8919 19.2048 13.6115C19.2048 13.3312 19.4329 13.1031 19.7132 13.1031C19.9936 13.1031 20.2217 13.3312 20.2217 13.6115C20.2217 13.8919 19.9936 14.1199 19.7132 14.1199Z" fill="black" />
                                      <path d="M12.0862 12.0859C11.2449 12.0859 10.5607 12.7701 10.5607 13.6114C10.5607 14.4526 11.2449 15.1368 12.0862 15.1368C12.9274 15.1368 13.6116 14.4526 13.6116 13.6114C13.6116 12.7701 12.9274 12.0859 12.0862 12.0859ZM12.0862 14.1199C11.8058 14.1199 11.5777 13.8919 11.5777 13.6115C11.5777 13.3312 11.8058 13.1031 12.0862 13.1031C12.3665 13.1031 12.5946 13.3312 12.5946 13.6115C12.5946 13.8919 12.3665 14.1199 12.0862 14.1199Z" fill="black" />
                                      <path d="M19.7132 13.6113H19.674C19.3934 13.6113 19.1656 13.8391 19.1656 14.1198C19.1656 14.1892 19.1793 14.2555 19.2048 14.3158V16.9163C19.2048 18.7386 17.7221 20.2214 15.8997 20.2214C14.0772 20.2214 12.5945 18.7388 12.5945 16.9163V14.1199C12.5945 13.8392 12.3668 13.6115 12.0861 13.6115C11.8055 13.6115 11.5777 13.8392 11.5777 14.1199V16.9165C11.5777 19.2996 13.5165 21.2384 15.8997 21.2384C18.2828 21.2384 20.2217 19.2996 20.2217 16.9165V14.1199C20.2217 13.8392 19.9939 13.6113 19.7132 13.6113Z" fill="black" />
                                  </g>
                                  <defs>
                                      <clipPath id="clip0_41_19311">
                                          <rect width="30" height="30" fill="white" transform="translate(0.899902 0.900391)" />
                                      </clipPath>
                                  </defs>
                              </svg>
                              <div  class="span-total-pro">
                                  <div class="_3">@verbatim
                                          {{cartSize}}
                                      @endverbatim
                                  </div>
                              </div>
                              <div class="cart-view" id="cartView">
                                  <div class="minimize-button" id="minimizeButton"><li class="fa fa-close"></li></div>
                                  <!-- Your cart view content goes here -->
                                  <h2>Coming soon</h2>

                                  <div class="row">
                                      <div class="col-md-4">
                                          <!-- Left Column (Smaller) -->
                                          <p>Logo</p>
                                      </div>
                                      <div class="col-md-8">
                                          <!-- Right Column (Larger) -->
                                         <p>content</p>
                                      </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="frame-1000004478">
                          <div class="login">Login</div>
                          <div class="frame-3">
                              <div class="get-started">Get Started</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-4" style="text-align: left">
                      <div class="dropdown">
                          <button class="btn dropdown-toggle my_bg_primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <span style="padding: 10px">All Category </span>
                          </button>
                          <ul class="dropdown-menu">
                              <li>
                                  <a class="dropdown-item active" href="#">Action</a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#">Another action</a>
                              </li>
                              <li>
                                  <a class="dropdown-item" href="#">Something else here</a>
                              </li>

                              <li>
                                  <a class="dropdown-item" href="#">Separated link</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                      <div class="d-flex">
                          <div class="p-2 flex-fill">Home</div>
                          <div class="p-2 flex-fill">About us</div>
                          <div class="p-2 flex-fill">Contact us</div>
                          <div class="p-2 flex-fill">Blog</div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                      <div class="d-flex flex-row-reverse">
                          <div class="p-2">Hot line</div>
                          <div class="p-2"> +025452</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="container mt-5">
      <div class="row">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                      <div class="div-single-hero-slider">
                          <div class="div-hero-slider-content-1">
                              <div class="div-slider-product-offer-wrap">
                                  <div class="span-red">
                                      <div class="_28">-28%</div>
                                  </div>
                                  <div class="p-h-2-d-a-9-cbfbce">
                                      <div class="samsung-vr">Samsung VR</div>
                                  </div>
                              </div>
                              <div class="up-to-40-off-premium-samsung-vr">
                                  Up To 40% Off Premium Samsung VR
                              </div>
                              <div
                                  class="we-work-with-global-brand-and-have-create-an-smart-gadget-for-you-to-make-easiest-life"
                              >
                                  <br/>
                                  We work with global brand and have create an smart<br />gadget for you to
                                  make easiest life.
                              </div>
                              <div class="link">
                                  <div class="buy-now">Buy now</div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body bg-secondary">
                      <div class="div-banner-content-1">
                          <div class="modern-c-ontroller">Modern cONTROLLER</div>
                          <div class="heading-2-new-collection">New Collection</div>
                          <div class="heading-3-99-00">$99.00</div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-body bg-primary">
                      <div class="div-banner-content-1">
                          <div class="headset">Headset</div>
                          <div class="heading-2-best-seller-product">Best Seller Product</div>
                          <div class="heading-3-15-00">$15.00</div>
                      </div>

                  </div>
              </div>
          </div>

      </div>
  </div>



  <div class="container">
      <div class="div-product-header">
          <div class="items-on-sale">Items on Sale</div>
          <div class="a-d-flex">
              <div class="frame-1000004440">
                  <div class="view-all">View All</div>
                  <svg class="frame" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.3999 2.70703C17.9199 2.70703 22.3999 7.18703 22.3999 12.707C22.3999 18.227 17.9199 22.707 12.3999 22.707C6.8799 22.707 2.3999 18.227 2.3999 12.707C2.3999 7.18703 6.8799 2.70703 12.3999 2.70703ZM12.3999 11.707H8.3999V13.707H12.3999V16.707L16.3999 12.707L12.3999 8.70703V11.707Z" fill="#4651A0" />
                  </svg>
              </div>
          </div>
      </div>
  </div>

<!--product container-->
  <div class="container mt-5">
      <!-- Bootstrap Row -->
      <div class="row">
          <!-- Column 1 -->
<!--          <div class="col-md-3 col-sm-6">
              <div class="bg-light p-4">
                  <div class="div-product-wrapper">
                      <div class="frame-34042">
                          <div class="frame-34041">
                              <div class="frame-34040">
                                  <div class="fifa-2022">Fifa 2022</div>
                                  <div class="few-units-left">Few units left</div>
                              </div>
                              <div class="frame-34038">
                                  <div class="frame-34037">
                                      <div class="n">N</div>
                                      <div class="_20-00-35">20,00.35</div>
                                  </div>
                                  <div class="frame-34039">
                                      <div class="n2">N</div>
                                      <div class="_25-000-14">25,000.14</div>
                                  </div>
                              </div>
                          </div>
                          <div class="btn btn-secondary">
                              <div class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add To Cart</div>
                          </div>
                      </div>
                      <img class="image-375" src="image-375.png" />
                      <div class="span-badge">
                          <div class="_23-off">23% Off</div>
                      </div>
                  </div>
              </div>
          </div>-->
          <div v-for="(productsRow, rowIndex) in chunkedProducts" :key="rowIndex" class="row p-3">
              <product v-for="(product, index) in productsRow" :key="index" :product="product"  @addtocart="increaseCartSize"/>

          </div>

      </div>
  </div>

  <section class="banner-section">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="banner-content">
                      <h2 class="banner-title">Summer Sale</h2>
                      <p class="banner-text">Up to 50% off on selected items</p>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                  </div>
              </div>
              <div class="col-md-6">
                  <img src="banner-image.jpg" alt="Banner Image" class="img-fluid">
              </div>
          </div>
      </div>
  </section>

  <footer class="bg-dark text-white py-4">
      <div class="container">
          <div class="row">
              <!-- Column 1 -->
              <div class="col-md-3 col-sm-6">
                  <div class="frame-1000004436">
                      <div class="heading-3-contact-us">Contact us</div>
                      <div class="item">
                          <div class="gamers-store-no-1259-freedom-lagos-nigeria">
                              Gamers Store<br />No. 1259 Freedom, Lagos,<br />Nigeria.
                          </div>
                      </div>
                      <div class="item-91-987654321">+91-987654321</div>
                      <div class="item-demo-exampledemo-com">demo@gamers.com</div>
                  </div>
              </div>
              <!-- Column 2 -->
              <div class="col-md-3 col-sm-6">
                  <div class="frame-1000004435">
                      <div class="heading-3-information">Information</div>
                      <div class="item-link-product-support">Product Support</div>
                      <div class="item-link-checkout">Checkout</div>
                      <div class="item-link-license-policy">License Policy</div>
                      <div class="item-link-affiliate">Affiliate</div>
                  </div>
              </div>
              <!-- Column 3 -->
              <div class="col-md-3 col-sm-6">
                  <div class="frame-1000004434">
                      <div class="heading-3-customer-service">Customer Service</div>
                      <div class="item-link-help-center">Help Center</div>
                      <div class="item-link-redeem-voucher">Redeem Voucher</div>
                      <div class="item-link-contact-us">Contact Us</div>
                      <div class="item-link-policies-rules">Policies &amp; Rules</div>
                  </div>

              </div>
              <!-- Column 4 -->
              <div class="col-md-3 col-sm-6">
                  <div class="div-footer-widget">
                      <div class="heading-3-download-our-app">Download Our App</div>
                      <div class="div-app-visa-wrap">
                          <div class="p-h-2-d-95-a-2-a-0-a-2">
                              <div
                                  class="download-our-app-and-get-extra-15-discount-on-your-first-order"
                              >
                                  Download our App and get extra 15% Discount on your<br />first Order..!
                              </div>
                          </div>
                          <div class="div-app-google-img">
                              <img class="link-app-store-jpg" src="link-app-store-jpg.png" /><img
                                  class="link-google-play-jpg"
                                  src="link-google-play-jpg.png"
                              />
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <footer>
      <div class="row">
          <div class="col-lg-8 col-md-12 p-3">

              <div class="copyright-gamers-built-by-smooth-capital">
                  Copyright © Gamers | Built by Smooth Capital.
              </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="bg-secondary p-4">
                  <img class="link-payment-method-png" src="link-payment-method-png.png" />
              </div>
          </div>
      </div>
  </footer>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <script src="{{ asset('vendor/webkul/helloworld/assets/js/app.js') }}"></script>
  <script>
      const cartSizeElement = document.querySelector('.span-total-pro');
      const cartViewElement = document.getElementById('cartView');
      const minimizeButton = document.getElementById('minimizeButton');
      let isCartViewVisible = false;

      function toggleCartView() {
          isCartViewVisible = !isCartViewVisible;
          cartViewElement.style.display = isCartViewVisible ? 'block' : 'none';
      }

      function toggleMinimize() {
          if (isCartViewVisible) {
              toggleCartView();
          }
      }

      cartSizeElement.addEventListener('click', toggleCartView);
      minimizeButton.addEventListener('click', toggleMinimize);
  </script>
  </html>

