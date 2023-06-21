<div class="col-md-4 col-sm-4">
    <div class="product-item-wrap product-style_1">
      <div class="product-item-inner">
        <div class="product-thumb">
          <div class="product-flash-wrap"><span class="on-new product-flash">New</span></div>
          <div class="product-thumb-primary"><img src="{{ asset('assets/images/demo/' . $apartment->image_final_view) }}" alt="product1" width="375" height="450" class="attachment-shop_catalog size-shop_catalog wp-post-image"/></div><a href="/apartment/<?=htmlspecialchars($apartment->id)?>" class="product-link">
            <div class="nxt_b"></div>
            <div class="product-hover-sign">
              <hr/>
              <hr/>
            </div></a>
          <div class="product-info">
            <span class="price"><?=htmlspecialchars($apartment->price)?><span class="fa fa-rub"></span></span></span><a href="/apartment/<?=htmlspecialchars($apartment->id)?>">
              <h3><?=htmlspecialchars($apartment->square)?> м²</h3>
              <h3><?=htmlspecialchars($apartment->floor)?> этаж</h3>
            </a>
          </div>
          <div class="product-actions">
            <a href="/apartment/<?=htmlspecialchars($apartment->id)?>" class="product-quick-view"><i class="fa fa-search"></i>Смотреть</a>
          </div>
        </div>
      </div>
    </div>
  </div>