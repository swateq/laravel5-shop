@extends('admin/includes/menu')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">

<script src="/laravel5-learning/public/js/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            Dashboard
        <small>Panel glowny</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/laravel5-learning/public/admin"><i class="fa fa-dashboard"></i> Admin Panel</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
      <div class="row">
          <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua ">
                <div class="inner">
                  <h3>{{$orders_today}}</h3>

                  <p>Nowych zamówień</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag ion-padding-top" style="padding-top:15px;"></i>
                </div>
                <a href="#" class="small-box-footer">Wiecej informacji <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{$users_today}}</h3>

                  <p>Nowych użytkowników</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add ion-padding-top"></i>
                </div>
                <a href="#" class="small-box-footer">Wiecej informacji <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unikalnych odwiedzin</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph ion-padding-top"></i>
                </div>
                <a href="#" class="small-box-footer">Wiecej informacji<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Najnowsze produkty</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">


                @foreach($ostatnie_produkty as $produkt)

                <li class="item">
                  <div class="products-listing">
                     <div id="demo-test-gallery" class="demo-gallery">
                     <a href="/laravel5-learning/public/images/{{$produkt->thumb}}" data-size="1600x1600" data-med="/laravel5-learning/public/images/{{$produkt->thumb}}" data-med-size="1024x1024" data-author="Folkert Gorter" class="demo-gallery__img--main">
                      <img src="/laravel5-learning/public/images/{{$produkt->thumb}}" alt="" height="50" width="50"/>
                    </a>
                    </div>
                    <div class="product-info">
                      <a href="/laravel5-learning/public/product/{{$produkt->seolink }}" class="product-title">{{$produkt->name}}
                        </a>
                          <span class="product-description">
                            {{$produkt->description}}
                          </span>
                    </div>
                </div>
                <span class="label label-warning pull-right">{{$produkt->priceBrutto}}</span>
                </li>
                @endforeach
             </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Zamówienia</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Numer zamówienia</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Imie i nazwisko</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Magazyn</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cena</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Data</th>
                </tr>
                </thead>
                <tbody>
                
                <tr role="row" class="odd">
                  <td class="sorting_1">1</td>
                  <td>Agnieszka Kołodziejczak</td>
                  <td>PAS</td>
                  <td>342,99 zł</td>
                  <td>2016-12-21<br/>
                        19:15:08</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">2</td>
                  <td>Monika Cyba</td>
                  <td>FEL</td>
                  <td>440,99</td>
                  <td>2016-12-21<br/>
                        19:37:33</td>
                </tr>
                <tr role="row" class="odd">
                  <td class="sorting_1">3</td>
                  <td>Agnieszka Kołodziejczak</td>
                  <td>PAS</td>
                  <td>342,99 zł</td>
                  <td>2016-12-21<br/>
                        19:15:08</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">4</td>
                  <td>Monika Cyba</td>
                  <td>FEL</td>
                  <td>440,99</td>
                  <td>2016-12-21<br/>
                        19:37:33</td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">5</td>
                  <td>Agnieszka Kołodziejczak</td>
                  <td>PAS</td>
                  <td>342,99 zł</td>
                  <td>2016-12-21<br/>
                        19:15:08</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">6</td>
                  <td>Monika Cyba</td>
                  <td>FEL</td>
                  <td>440,99</td>
                  <td>2016-12-21<br/>
                        19:37:33</td>
                </tr>
                </tr></tbody>
                <tfoot>
                <tr></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
    </section>

<div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>

  <div class="pswp__scroll-wrap">

    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>

    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--share" title="Share"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip">
          <!-- <a href="#" class="pswp__share--facebook"></a>
          <a href="#" class="pswp__share--twitter"></a>
          <a href="#" class="pswp__share--pinterest"></a>
          <a href="#" download class="pswp__share--download"></a> -->
        </div>
      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
      <div class="pswp__caption">
        <div class="pswp__caption__center">
        </div>
      </div>
    </div>

  </div>


</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
  try{Typekit.load();}catch(e){} 

(function() {

   var initPhotoSwipeFromDOM = function(gallerySelector) {

     var parseThumbnailElements = function(el) {
       var thumbElements = el.childNodes,
         numNodes = thumbElements.length,
         items = [],
         el,
         childElements,
         thumbnailEl,
         size,
         item;

       for (var i = 0; i < numNodes; i++) {
         el = thumbElements[i];

         // include only element nodes 
         if (el.nodeType !== 1) {
           continue;
         }

         childElements = el.children;

         size = el.getAttribute('data-size').split('x');

         // create slide object
         item = {
           src: el.getAttribute('href'),
           w: parseInt(size[0], 10),
           h: parseInt(size[1], 10),
           author: el.getAttribute('data-author')
         };

         item.el = el; // save link to element for getThumbBoundsFn

         if (childElements.length > 0) {
           item.msrc = childElements[0].getAttribute('src'); // thumbnail url
           if (childElements.length > 1) {
             item.title = childElements[1].innerHTML; // caption (contents of figure)
           }
         }

         var mediumSrc = el.getAttribute('data-med');
         if (mediumSrc) {
           size = el.getAttribute('data-med-size').split('x');
           // "medium-sized" image
           item.m = {
             src: mediumSrc,
             w: parseInt(size[0], 10),
             h: parseInt(size[1], 10)
           };
         }
         // original image
         item.o = {
           src: item.src,
           w: item.w,
           h: item.h
         };

         items.push(item);
       }

       return items;
     };

     // find nearest parent element
     var closest = function closest(el, fn) {
       return el && (fn(el) ? el : closest(el.parentNode, fn));
     };

     var onThumbnailsClick = function(e) {
       e = e || window.event;
       e.preventDefault ? e.preventDefault() : e.returnValue = false;

       var eTarget = e.target || e.srcElement;

       var clickedListItem = closest(eTarget, function(el) {
         return el.tagName === 'A';
       });

       if (!clickedListItem) {
         return;
       }

       var clickedGallery = clickedListItem.parentNode;

       var childNodes = clickedListItem.parentNode.childNodes,
         numChildNodes = childNodes.length,
         nodeIndex = 0,
         index;

       for (var i = 0; i < numChildNodes; i++) {
         if (childNodes[i].nodeType !== 1) {
           continue;
         }

         if (childNodes[i] === clickedListItem) {
           index = nodeIndex;
           break;
         }
         nodeIndex++;
       }

       if (index >= 0) {
         openPhotoSwipe(index, clickedGallery);
       }
       return false;
     };

     var photoswipeParseHash = function() {
       var hash = window.location.hash.substring(1),
         params = {};

       if (hash.length < 5) { // pid=1
         return params;
       }

       var vars = hash.split('&');
       for (var i = 0; i < vars.length; i++) {
         if (!vars[i]) {
           continue;
         }
         var pair = vars[i].split('=');
         if (pair.length < 2) {
           continue;
         }
         params[pair[0]] = pair[1];
       }

       if (params.gid) {
         params.gid = parseInt(params.gid, 10);
       }

       return params;
     };

     var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
       var pswpElement = document.querySelectorAll('.pswp')[0],
         gallery,
         options,
         items;

       items = parseThumbnailElements(galleryElement);

       // define options (if needed)
       options = {

         galleryUID: galleryElement.getAttribute('data-pswp-uid'),

         getThumbBoundsFn: function(index) {
           // See Options->getThumbBoundsFn section of docs for more info
           var thumbnail = items[index].el.children[0],
             pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
             rect = thumbnail.getBoundingClientRect();

           return {
             x: rect.left,
             y: rect.top + pageYScroll,
             w: rect.width
           };
         },

         addCaptionHTMLFn: function(item, captionEl, isFake) {
           if (!item.title) {
             captionEl.children[0].innerText = '';
             return false;
           }
           captionEl.children[0].innerHTML = item.title + '<br/><small>Photo: ' + item.author + '</small>';
           return true;
         },

       };

       if (fromURL) {
         if (options.galleryPIDs) {
           // parse real index when custom PIDs are used 
           // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
           for (var j = 0; j < items.length; j++) {
             if (items[j].pid == index) {
               options.index = j;
               break;
             }
           }
         } else {
           options.index = parseInt(index, 10) - 1;
         }
       } else {
         options.index = parseInt(index, 10);
       }

       // exit if index not found
       if (isNaN(options.index)) {
         return;
       }

       var radios = document.getElementsByName('gallery-style');
       for (var i = 0, length = radios.length; i < length; i++) {
         if (radios[i].checked) {
           if (radios[i].id == 'radio-all-controls') {

           } else if (radios[i].id == 'radio-minimal-black') {
             options.mainClass = 'pswp--minimal--dark';
             options.barsSize = {
               top: 0,
               bottom: 0
             };
             options.captionEl = false;
             options.fullscreenEl = false;
             options.shareEl = false;
             options.bgOpacity = 0.85;
             options.tapToClose = true;
             options.tapToToggleControls = false;
           }
           break;
         }
       }

       if (disableAnimation) {
         options.showAnimationDuration = 0;
       }

       // Pass data to PhotoSwipe and initialize it
       gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);

       // see: http://photoswipe.com/documentation/responsive-images.html
       var realViewportWidth,
         useLargeImages = false,
         firstResize = true,
         imageSrcWillChange;

       gallery.listen('beforeResize', function() {

         var dpiRatio = window.devicePixelRatio ? window.devicePixelRatio : 1;
         dpiRatio = Math.min(dpiRatio, 2.5);
         realViewportWidth = gallery.viewportSize.x * dpiRatio;

         if (realViewportWidth >= 1200 || (!gallery.likelyTouchDevice && realViewportWidth > 800) || screen.width > 1200) {
           if (!useLargeImages) {
             useLargeImages = true;
             imageSrcWillChange = true;
           }

         } else {
           if (useLargeImages) {
             useLargeImages = false;
             imageSrcWillChange = true;
           }
         }

         if (imageSrcWillChange && !firstResize) {
           gallery.invalidateCurrItems();
         }

         if (firstResize) {
           firstResize = false;
         }

         imageSrcWillChange = false;

       });

       gallery.listen('gettingData', function(index, item) {
         if (useLargeImages) {
           item.src = item.o.src;
           item.w = item.o.w;
           item.h = item.o.h;
         } else {
           item.src = item.m.src;
           item.w = item.m.w;
           item.h = item.m.h;
         }
       });

       gallery.init();
     };

     // select all gallery elements
     var galleryElements = document.querySelectorAll(gallerySelector);
     for (var i = 0, l = galleryElements.length; i < l; i++) {
       galleryElements[i].setAttribute('data-pswp-uid', i + 1);
       galleryElements[i].onclick = onThumbnailsClick;
     }

     // Parse URL and open gallery if it contains #&pid=3&gid=1
     var hashData = photoswipeParseHash();
     if (hashData.pid && hashData.gid) {
       openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
     }
   };

   initPhotoSwipeFromDOM('.demo-gallery');

 })();
</script>
  @endsection