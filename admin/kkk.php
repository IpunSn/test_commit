<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../view/css/output.css"/>

    <title>Home</title>
  </head>
  <body>
    <div class="w-[1480px] px-5 my-0 mx-auto font-roboto">
      <header class="w-full">
        <nav class="w-full h-20 grid grid-cols-[15%_70%_auto]">
          <div class="w-full">
            <div class="w-full h-full relative">
              <img
                class="w-full h-full px-5 absolute top-0 left-0"
                src="../view/img/logo.png"
                alt=""
              />
            </div>
          </div>
          <div class="w-full flex px-4 justify-center gap-x-10 items-center">
            <div class="text-lg font-semibold">Iphone</div>
            <div class="text-lg font-semibold">Mac</div>
            <div class="text-lg font-semibold">Ipad</div>
            <div class="text-lg font-semibold">Watch</div>
            <div class="text-lg font-semibold">Accessories</div>
            <div class="text-lg font-semibold">All Product</div>
          </div>
          <div class="w-full flex justify-end items-center gap-x-5">
            <div>
              <a href=""><img src="../view/img/human.svg" alt="" /></a>
            </div>
            <div><a href=""></a><img src="../view/img/search.svg" alt="" /></div>
            <div><a href=""></a><img src="../view/img/cart.svg" alt="" /></div>
          </div>
        </nav>
      </header>

      <main class="w-full h-auto py-10">
        <section class="w-full h-auto py-10">
          <div class="w-full h-auto ">
            <button class=""><img src="../view/img/btn-slide-left.svg" alt=""></button>
            <button class="" ><img src="../view/img/btn-slide-left.svg" alt=""></button>
            <div class="w-full h-auto">
              <div class="w-full">
                <img class="w-full" src="../view/img/img1.png" alt="">
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="w-full py-5 px-5 bg-[#333333] text-[#FFFFFF]">
        <!-- Thằng cha footer -->
        <div class="w-full h-auto grid grid-cols-[25%_15%_15%_auto] gap-x-5">
          <!-- Thằng cha footer -->

          <!-- Thằng logo -->
          <div class="w-full flex flex-col gap-y-[25px]">
            <img class="w-[135px]" src="../view/img/logo.png" alt="" />
            <p class="text-xl">
              Chung tôi là của hàng chung cung cấp các sản phẩm của apple. Từ
              điện thoại Ipad, macbook, watch
            </p>
            <div class="w-full h-auto flex gap-x-5">
              <div
                class="w-[35px] h-[35px] flex items-center justify-center rounded-full bg-orange-300"
              >
                <img class="" src="../view/img/icon-fb.svg" alt="" />
              </div>
              <div
                class="w-[35px] h-[35px] flex items-center justify-center rounded-full bg-orange-300"
              >
                <img class="" src="../view/img/icon-tw.svg" alt="" />
              </div>
              <div
                class="w-[35px] h-[35px] flex items-center justify-center rounded-full bg-orange-300"
              >
                <img class="" src="../view/img/icon-ig.svg" alt="" />
              </div>
              <div
                class="w-[35px] h-[35px] flex items-center justify-center rounded-full bg-orange-300"
              >
                <img class="" src="../view/img/icon-yt.svg" alt="" />
              </div>
            </div>
          </div>
          <!-- Thằng logo -->

          <!-- Thằng menu footer -->
          <div class="w-full px-5 flex flex-col gap-y-5">
            <h2 class="text-lg">Menu</h2>
            <div class="flex flex-col gap-y-5">
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <h4>Home</h4></a
              >
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <h4>Iphone</h4></a
              >
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <h4>Mac</h4></a
              >
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <h4>Watch</h4></a
              >
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <h4>Ipad</h4></a
              >
            </div>
          </div>
          <!-- Thằng menu footer -->

          <!-- Thằng blog footer -->
          <div class="w-full px-5 flex flex-col gap-y-5">
            <h2 class="text-lg">Blog</h2>
            <div class="flex flex-col gap-y-5">
              <a class="flex text-xl" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <div>
                  <h4>People saying about footer.</h4>
                  <p class="text-sm">8 Nov, 2021</p>
                </div></a
              >
              <a class="flex text-xl gap-x-1.5" href=""
                ><img src="view//img/arow-right-cam.svg" alt="" />
                <div>
                  <h4>People saying about footer.</h4>
                  <p class="text-sm">8 Nov, 2021</p>
                </div></a
              >
            </div>
          </div>
          <!-- Thằng blog footer -->

          <!-- Thằng nhận tin footer -->
          <div class="w-full flex flex-col gap-y-6">
            <h1 class="text-xl">Đăng kí nhận tin của chúng tôi</h1>
            <form class="w-full gap-x-5 relative" action="" method="">
              <input
                class="bg-input-footer w-full h-12 rounded-[4px] px-4"
                placeholder="Gõ vô đây"
                type="text"
              />
              <button
                type="submit"
                class="w-auto absolute mr-5 top-1/2 right-0 translate-y-[-50%]"
              >
                <img class="w-full" src="../view/img/mail-footer.svg" alt="" />
              </button>
            </form>
          </div>
          <!-- Thằng nhận tin footer -->

          <!-- Thằng cha footer -->
        </div>
        <!-- Thằng cha footer -->
      </footer>

      <!-- thằng cha -->
    </div>
    <!-- thằng cha -->

<script src="view/js/index.js"></script>
  </body>
</html>
