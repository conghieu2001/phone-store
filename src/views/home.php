<?php $this->layout('/layout/main', ['title' => 'Trang chu']) ?>
<?php $this->start('body') ?>
  <main>
    <div class="img-banner" id="img-banner"></div>

    <div class="social-icons">
      <ul>
        <li class="pt-2"><a class="icons icon-fb" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></i></a></li>
        <li class=""><a class="icons icon-yt" href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
        <li class=""><a class="icons icon-in" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        <li class=""><a class="icons icon-tt" href="https://www.tiktok.com/" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
      </ul>
    </div>

    <div class="container pt-3">
        <div class="row">
            <div class="col-3">
                <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/08/11/chuyen-trang-samssung-11.png" alt="" class="banner__img">
            </div>
            <div class="col-3">
                <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/11/10/sanphamhot-14.jpg" alt="" class="banner__img">
            </div>
            <div class="col-3">
                <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/11/01/sanphamhot-12-lite-1.jpg" alt="" class="banner__img">
            </div>
            <div class="col-3">
                <img src="https://cdn.hoanghamobile.com/i/home/Uploads/2022/10/04/huawei-d14-banner-nho-01.jpg" alt="" class="banner__img">
            </div>
        </div>

        <div class="list-item mt-5 ">
          <div class="previous-icon">
            <i class="fa-solid fa-caret-left"></i>
          </div>
          <div class="row product__items">
            <?php foreach($products as $data): ?>
                <div class="item col-lg-3">
                  <div class="item-img">
                    <a href=""><img src="<?=$this->e($data['img'])?>" alt="" class="w-75"></a>
                  </div>
                  <div class="info">
                    <a class="title fs-6" href="/product-detail/?id=<?=$this->e($data['id'])?>"><?=$this->e($data['name'])?></a>
                    <span class="price d-block">
                        <strong class="info__price"><?=$this->e($data['price'])?></strong>
                    </span>
                    <span id="id" hidden><?=$this->e($data['id'])?></span>
                    <a class="btn btn-primary add-to-cart">Th??m v??o gi??? h??ng</a>
                  </div>
                </div>
            <?php endforeach ?>   
          </div>

          <div class="next-icon">
            <i class="fa-solid fa-caret-right"></i>
          </div>
        </div>

        <div class="client-fd mt-5 ps-5 pe-5 pb-4">
          <h3 class="pt-3 pb-2 title-user"><u>KH??CH H??NG</u></h3>
          <div class="row">
            <div class="col-6">
              <div class="row">
                  <div class="col-5">
                    <img class="img-user" src="https://cdn.hoanghamobile.com/i/idol/Uploads/2021/12/16/anh-cua-linh.jpg" alt="">
                  </div>
                  <div class="col-7">
                    <h4 class="name-user">V??V Ch??u Tuy???t V??n</h4>
                    <h6 class="job-user">V??V ?????i tuy???n Teakwondo Vi???t Nam</h6>
                    <p>
                      V??n th???y gi?? b??n ??? Ho??ng H?? Mobile t???t h??n c??c b??n kh??c kh?? nhi???u, c??c s???n ph???m c??ng phong ph?? v?? ??a d???ng. V??n th?????ng qua shop ????? mua ?????ng h??? th??ng minh luy???n t???p th??? thao ho???c tablet.
                    </p>
                  </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-5">
                  <img class="img-user" src="https://cdn.hoanghamobile.com/i/idol/Uploads/2022/03/01/liz-kim-cuong.jpg" alt="">
                </div>
                <div class="col-7">
                  <h4 class="name-user">Liz Kim C????ng</h4>
                  <h6 class="job-user">Ca s?? </h6>
                  <p>
                    L?? m???t Samfan Liz kh??ng th??? b??? l??? c?? h???i s??? h???u s???n ph???m S22 Ultra m???i. M??nh tin t?????ng l???a ch???n Ho??ng H?? Mobile m???t trong nh???ng ?????i l?? u??? quy???n ch??nh h??ng c???a Samsung ????? ?????t h??ng v?? nh???n s???n ph???m trong th???i gian s???m nh???t. 
                  </p>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </main>
<?php $this->stop() ?>








