<?php
    $html_cart='';
    $i=0;
    foreach($_SESSION['cart'] as $item){
        extract($item);
        $tien_1sp=(INT)$price*(INT)$soluong;
        $html_cart.='
        <tr class="text-gray-700 ">
                                <td class="px-4 py-3  font-semibold border"><img class="w-20 mx-auto"
                                        src="view/img/'.$img.'" alt=""></td>
                                <td class="w-[300px] px-4 py-3 font-semibold text-base border ">
                                    <div class="text-xl"><a href="index.php?page=detail_pro&id='.$idpro.'"> '.$name.'</a></div>
                                    <div class="text-sm">'.$color.'</div>
                                    <div class="text-sm">'.$dungluong.'</div>
                                </td>
                                <td class="px-4 py-3 text-lg border font-bold">'.number_format($price, 0, ",", ".").' đ</td>
                                <td class="px-4 py-3 text-lg border text-center">'.$soluong.'</td>
                                <td class="px-4 py-3 text-lg border text-center font-bold">'.number_format($tien_1sp, 0, ",", ".").' đ</td>
                                <td class="px-4 py-3 text-center text-sm border"><a href="index.php?page=del&idsp='.$i.'">
                                        <i class="bx bx-md dailymotion bx-trash-alt"></i>
                                    </a></td>

                            </tr>
        ';
        $i++;
    }
    $html_tongTien=getTongDonHang();
?>

<main class="w-full h-auto py-10 px-5">
    <h1 class="w-full flex justify-center items-center text-5xl font-bold">Giỏ hàng</h1>


    <div class="flex gap-x-10  mt-12">
        <!-- table -->
        <!-- component -->
        <section class=" font-roboto w-[70%]">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">Ảnh</th>
                                <th class="px-4 py-3">Tên</th>
                                <th class="px-4 py-3">Giá</th>
                                <th class="px-4 py-3">Số lượng</th>
                                <th class="px-4 py-3">Tổng</th>
                                <th class="px-4 py-3">Xóa</th>




                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <!-- <tr class="text-gray-700">
                                <td class="px-4 py-3 text-md font-semibold border"><img class="w-20"
                                        src="view/img/iphone15.png" alt=""></td>
                                <td class="px-4 py-3 font-semibold text-base border ">
                                    <div class="text-2xl">Iphone 15</div>
                                    <div class="text-sm">Titan tự nhiên</div>
                                    <div class="text-sm">256GB</div>
                                </td>
                                <td class="px-4 py-3 text-sm border">35.490.000 đ</td>
                                <td class="px-4 py-3 text-lg border text-center">1</td>



                                <td class="px-4 py-3 text-center text-sm border"><a href="">
                                        <i class='bx bx-md dailymotion bx-trash-alt'></i>
                                    </a></td>

                            </tr> -->

                            <?=$html_cart?>

                            





                        </tbody>

                       
                    </table>
                   
                </div>
                
            </div>
            <a href="index.php?page=cart&del=1">Xóa tất cả</a>
        </section>
        <!-- table -->

        <section class="w-[calc(30%-40px)]">
            <div class="w-full h-fit rounded-lg shadow-[-5px_5px_15px_2px_rgba(0,0,0,0.3)]">


                <div class="p-5" >
                   
                    <div
                        class="w-full py-5  flex flex-col gap-y-5   border-b border-black border-dashed font-semibold text-gray-500">
                        <div class="w-full flex justify-between"><span>Đơn hàng</span> <span>10.000.000đ</span></div>
                        

                    </div>

                    <div class="py-5 w-full flex justify-between"><span class="uppercase font-bold text-xl">Tạm
                            tính</span> <span class=" font-bold text-xl"><?=number_format($html_tongTien, 0, ",", ".")?> đ</span> </div>

                    <button class=" w-full mt-5   font-bold text-2xl  uppercase text-white bg-gray-600  py-3 px-6 rounded-xl shadow-[0_10px_black] duration-300 -translate-y-[10px] active:translate-y-0 active:shadow-[0_0_white]"
                        ><?=$btn_check_cart?> </button>
                </div>

            </div>
        </section>

    </div>

</main>