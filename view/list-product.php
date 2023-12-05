<?php
    $html_all_pro='';
    foreach($get_all_pro as $item){
        extract($item);
        $html_all_pro.='
        
        <div
                class="relative group mt-8 w-[270px] text-center gap-y-3 rounded-[20px] py-2.5 px-2.5 flex flex-col shadow-item transition duration-700 hover:scale-[1.02] hover:shadow-itemHover">
                <div class="flex justify-center">
                    <img class="w-[222px]" src="view/img/'.$img.'" alt="" />
                </div>
                <div class="text-base font-semibold">'.$name.'</div>
                <div class="text-base font-semibold">'.number_format($price, 0, ",", ".").' đ</div>
                <div class="flex justify-evenly">
                    <img src="view/img/natural.png" alt="" />
                    <img src="view/img/black.png" alt="" />
                    <img src="view/img/white.png" alt="" />
                    <img src="view/img/black.png  " alt="" />
                </div>
                <a href="index.php?page=detail_pro&id='.$id.'"
                    class="absolute bottom-0 left-1/2 -translate-x-1/2 opacity-0 group-hover:absolute group-hover:bottom-1/2 group-hover:left-1/2 group-hover:-translate-x-1/2 duration-700 group-hover:opacity-100 hover:bg-black hover:text-white font-extrabold border-2 text-lg border-black text-black bg-white py-2.5 px-5 rounded-full">
                    Xem ngay
                </a>
            </div> 
        
        ';
    }

?>
<main class="w-full h-auto py-10 px-5">
    <div class="w-fit font-bold text-2xl"><?=$tittle?></div>
    <div class="w-full mt-12 p-5 bg-white rounded-[20px] shadow-sm shadow-black flex justify-between">
        <select class="w-fit p-2.5 border border-black rounded-md font-bold" name="" id="">
            <option class="w-full h-12 p-2.5" value="">Iphone</option>
            <option class="w-full h-12 p-2.5" value="">Danh mục</option>
        </select>
        <select class="w-fit p-2.5 border border-black rounded-md font-bold" name="" id="">
            <option class="w-full h-12 p-2.5" value="">Sắp xếp theo</option>
            <option value=""><a href="index.php?page=price=1">Giá thấp nhất</a></option>
        </select>
    </div>

    <section class="w-full h-auto py-10">


        <div class="w-[1240px] mx-auto grid grid-cols-4 ">
            <!--list  -->
            
            <?=$html_all_pro?>

            

            
            


        </div>
        <!--list  -->





    </section>
</main>