

<?php if(isset($eror)) : ?>
<div
    class="fixed right-12 mt-5  px-3 py-3 rounded-lg text-black text-lg bg-red-300 font-bold flex items-center gap-x-2 shadow-md shadow-gray-300">
    <i class='text-white bx bx-md bx-error-circle rounded-full bg-red-500'></i>
    <span><?=$eror?></span>
</div>
<?php endif; unset($eror);?>
<main class="w-full h-auto py-10">
    <div class="w-[400px]  mx-auto h-auto flex flex-col justify-center items-center gap-y-5">
        <form action="index.php?page=login" method="post"  class="w-full p-5 flex flex-col gap-y-5 shadow-xl shadow-gray-300 rounded-lg">
            <h1 class="text-center"><b class="text-2xl">ĐĂNG NHẬP TÀI KHOẢN </b> </h1>

            <input
                class="border border-gray-300 px-4 py-2 rounded-md transition duration-300 hover:border-blue-500 focus:outline-none focus:ring focus:border-blue-500 "
                type="text" id="name" name="email" placeholder="Email">

            <input
                class="border border-gray-300 px-4 py-2 rounded-md transition duration-300 hover:border-blue-500 focus:outline-none focus:ring focus:border-blue-500"
                type="password" id="password" name="password" placeholder="Mật Khẩu">



            <button type="submit" name="btn-login"
                class="w-fit mx-auto mt-6 text-xl font-bold text-white bg-black rounded-md py-3 px-6 hover:shadow-mysd duration-300 hover:shadow-gray-500 hover:-translate-y-1 hover:-translate-x-1 active:shadow-none active:translate-y-0 active:translate-x-0">
                ĐĂNG NHẬP
            </button>
            <div class="text-right"> <a href="index.php?page=fogotPass"> Quên mật khẩu </a></div>


        </form>

        <div class="flex flex-col mt-5">
          <h1>Chưa có tài khoản?</h1>
          <a class="w-fit  mt-2 text-xl font-bold border border-black text-black bg-white rounded-md py-3 px-6 hover:shadow-mysd duration-300 hover:shadow-gray-500 hover:-translate-y-1 hover:-translate-x-1 active:shadow-none active:translate-y-0 active:translate-x-0" href="index.php?page=dang-ky">Đăng ký</a>
        </div>

    </div>

</main>