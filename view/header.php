<?php
    if(isset($_SESSION['user'])&&(count($_SESSION['user'])>0)){
        extract($_SESSION['user']);
        $html_acc='<a href="index.php?page=myaccount">'.$name.'</a>';
    }
    else{
        $html_acc=' <a href="index.php?page=login"><img src="view/img/human.svg" alt="" />'; 
    }
   

    

    
    $html_count_cart=tongSoSanPhamTrongGio();
  
    $menu_ldm=loai_dm();
   
$html_menu='';

    foreach($menu_ldm as $item){
        $menu_danhmuc=menu_dm($item['id']);
        if(count($menu_danhmuc)>0){
            $group='group';
        }else{
            $group='';
        }
        $html_menuDM='';
        foreach($menu_danhmuc as $menuDM){

            $all_sp_iddm=all_sp_dm($menuDM['id']);
            $html_sp_iddm='';
            foreach($all_sp_iddm as $sp){
                $html_sp_iddm.='
                <li><a href="index.php?page=detail_pro&id='.$sp['id'].'" class="mega-sub-item">'.$sp['name'].'</a></li>
                ';
            }
                $html_menuDM.='
                <ul class="p-2">
                        <li><a href="index.php?page=list_product&iddm='.$menuDM['id'].'" class="mega-sub-item-title">'.$menuDM['name'].'</a></li>
                        '.$html_sp_iddm.'
                        
                       </ul>
                ';

              
           
        }
        $html_menu.='

        <div
                        class="'.$group.' flex h-full  justify-center items-center   text-lg font-semibold rounded-lg p-2.5 cursor-pointer ">
                   <a href="index.php?page=list_product&id_LoaiDanhMuc='.$item['id'].' " >'.$item['name_LDM'].'</a>
                   <div class=" flex justify-evenly gap-x-5 w-full py-5  absolute z-50 top-full left-0 bg-white text-black  opacity-0 invisible  group-hover:opacity-100 group-hover:visible group-hover:mt-0  border-t border-gray-500 ">
                    '.$html_menuDM.'
                  </div>
        
                  </div>
        ';
    }
    
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/output.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>

<body>
    
<div>
      <div class="navigation" id="aaa-menu">
    <div class="ribbon-container block overflow-x-hidden w-full">
        <div class="common-ribbon ribbon-wrapper">
          <div class="event-ribbon flex center flex-col justify-center">
            New! iPhone 15 Cases: Ultimate Protection. Unlimited Style | SHOP NOW
          </div>
        </div>
    </div>
    <nav  class="flex items-center justify-between relative">
          <a href="#" class="nav-logo-wrapper block">
            <img src="../view/img/logochu.png" alt="" class="nav-logo block">
          </a>
          <div class="flex items-center self-stretch nav-menu-wrapper">
            <div class="nav-wrapper">
              <ul class="self-stretch items-stretch layer-0-wrapper">
                <li class="layer-0 flex flex-row px-2.5">
                  <label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">Devices</a>
                  </label>
                  <div class="layer-1-wrapper">
                    <div class="layer-2-wrapper">
                            <div class="layer-2-nav">
                                    <span class="block layer-2-subtitle">Shop Devices</span>
                                    <ul>
                                      <li>
                                        <label for="#"><span class="flex w-full layer-2-span">
                                              <span class="menu-item-title">iPhone</span>
                                              <i class="fa-solid fa-angle-right" style="color: #8c8c8c;"></i>
                                      </span>
                                    </label>
                                    </li>
                                      <li>
                                        <label for="#"><span class="flex w-full layer-2-span">
                                              <span class="menu-item-title">iPad</span>
                                              <i class="fa-solid fa-angle-right" style="color: #8c8c8c;"></i>
                                      </span>
                                    </label>
                                    </li>
                                      <li>
                                        <label for="#"><span class="flex w-full layer-2-span">
                                              <span class="menu-item-title">Macbook</span>
                                              <i class="fa-solid fa-angle-right" style="color: #8c8c8c;"></i>
                                      </span>
                                    </label>
                                    </li>
                                    </ul>
                            </div>
                            <div class="layer-3-wrapper">
                              <div class="flex flex-col">
                                <div class="layer-4-wrapper flex flex-1">
                                  <div class="layer-5-wrapper justify-between">
                                    <div class="layer-6-wrapper w-full">
                                            <span class="block product-list-category">
                                              <span class="block product-list-title">iPhone 15 Series</span>
                                            </span>
                                            <ul>
                                              <li>
                                                <a href="" id="newcontent">
                                                  15 Pro Max
                                                </a>
                                              </li>
                                              <li>
                                                <a href="" id="newcontent">
                                                  15 Pro 
                                                </a>
                                              </li>
                                              <li>
                                                <a href="" id="newcontent">
                                                  15 Plus
                                                </a>
                                              </li>
                                              <li>
                                                <a href="" id="newcontent">
                                                  15
                                                </a>
                                              </li>
                                            </ul>
                                            <span class="inline-block mt-0 layer-6-supplement-link">
                                              <a href="#" class="font-bold text-lg">All iPhone 15 Series</a>
                                            </span>
                                    </div>
                                  </div>
                                  <div class="layer-5-wrapper justify-between">
                                    <div class="layer-6-wrapper w-full">
                                            <span class="block product-list-category">
                                              <span class="block product-list-title">iPhone 14 Series</span>
                                            </span>
                                            <ul>
                                              <li>15 Pro Max</li>
                                              <li>15 Pro</li>
                                              <li>15 Plus</li>
                                              <li>15 </li>
                                            </ul>
                                    </div>
                                  </div>
                                  <div class="layer-5-wrapper justify-between">
                                    <div class="layer-6-wrapper w-full">
                                            <span class="block product-list-category">
                                              <span class="block product-list-title">iPhone 13 Series </span>
                                            </span>
                                            <ul>
                                              <li>15 Pro Max</li>
                                              <li>15 Pro</li>
                                              <li>15 Plus</li>
                                              <li>15 </li>
                                              <li>15 Pro Max</li>
                                              <li>15 Pro</li>
                                              <li>15 Plus</li>
                                              <li>15 </li>
                                            </ul>
                                    </div>
                                  </div>
                                  <div class="layer-5-wrapper justify-between">iPhone 14 Series</div>
                                  <div class="layer-5-wrapper justify-between">iPhone 13 Series</div>
                                </div>
                              </div>
                            </div>
                    </div>
                  </div>
                </li>
                <li class="layer-0 flex flex-row px-2.5"><label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">Prints</a>
                  </label>
                </li>
                <li class="layer-0 flex flex-row px-2.5"><label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">Co-Lab</a>
                  </label>
                </li>
                <li class="layer-0 flex flex-row px-2.5"><label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">Customization</a>
                  </label>
                </li>
                <li class="layer-0 flex flex-row px-2.5"><label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">Products</a>
                  </label>
                </li>
                <li class="layer-0 flex flex-row px-2.5"><label for="#">
                    <a href="#" class="flex flex-col justify-center h-full layer-0">News & Featured</a>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <div class="access-menu items-stretch flex">
              <div class="relative justify-center items-center flex flex-col">
                  <a href="#" title="User">
                    <img src="../view/img/user.svg" alt="User Icon" class="access-icon block" width="24" height="24">  
                  </a>
              </div>
              <div class="nav-button relative search-nav justify-center items-center" style="margin: 0 12px;line-height: normal;">
                  <a href="#" title="Search">
                      <img src="../view/img/search.svg" alt="" width="24" height="24">
                  </a>
              </div>
              <div class="nav-button relative cart-nav shopping-cart-button inline-block">

                <a href="#" class="cart-icon">
                  <img src="../view/img/cart.svg" alt="" width="24" he ght="24">
                  <div id="cart-count">1</div>
                </a>
                <div class="cart-overlay">
                  <div class="cart-panel">
                    <div class="co-ribbon-wrapper">
                      <div class="common-ribbon ribbon-wrapper nav-2023-ribbon">
                            <div class="event-ribbon flex v-center">
                              <div class="relative text-center pl-[22px]"></div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </nav>
    </div>
  </div>
  