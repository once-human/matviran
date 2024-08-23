<!DOCTYPE html>
<html data-wf-domain="www.matviran.com" data-wf-page="your-page-id" data-wf-site="your-site-id">

<head>
  <meta charset="utf-8" />
  <title>Matviran - We Build, You Grow</title>
  <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." name="description" />
  <meta content="Matviran - We Build, You Grow" property="og:title" />
  <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." property="og:description" />
  <meta content="https://yourdomain.com/path-to-your-og-image.png" property="og:image" />
  <meta content="Matviran - We Build, You Grow" property="twitter:title" />
  <meta content="Matviran provides stunning websites for small businesses, handling everything from design and development to hosting and indexing." property="twitter:description" />
  <meta content="https://yourdomain.com/path-to-your-og-image.png" property="twitter:image" />
  <meta property="og:type" content="website" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="https://yourdomain.com/path-to-your-css-file.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    !function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="https://yourdomain.com/path-to-your-favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="https://yourdomain.com/path-to-your-apple-touch-icon.png" rel="apple-touch-icon" />
  <!-- Keep this css code to improve the font quality -->
  <style>
    * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      -o-font-smoothing: antialiased;
    }
  </style>


  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PK3SLVWW');
  </script>
  <!-- End Google Tag Manager -->
  <style>
    .swiper-slide {
      height: auto !important;
    }

    .swiper {
      overflow: visible !important;
    }

    .ai_swiper-pagination .swiper-pagination-bullet {
      background-color: #1E143C;
      width: 12px;
      height: 12px;
      border-radius: 50%;
    }

    .ai-swiper-pagination-bullet-text {
      color: #f5f5f5;
    }

    .ai_swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
      width: auto;
      height: auto;
      padding: 9px 12px;
      border-radius: 30px;
    }

    .ai_swiper-pagination .swiper-pagination-bullet .ai-swiper-pagination-bullet-text {
      display: none;
    }

    .ai_swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active .ai-swiper-pagination-bullet-text {
      display: block;
    }


    .rel_swiper-pagination .swiper-pagination-bullet {
      background-color: #7F749C;
      width: 12px;
      height: 12px;
      border-radius: 50%;
    }

    .rel_swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #1E143C;
    }
  </style>
</head>

<body>
  <div class="page-wrapper overflow-on">
    <div class="global-styles w-embed">
      <style>
        /* Set color style to inherit */
        .inherit-color * {
          color: inherit;
        }

        /* Focus state style for keyboard navigation for the focusable elements */
        *[tabindex]:focus-visible,
        input[type="file"]:focus-visible {
          outline: 0.125rem solid #4d65ff;
          outline-offset: 0.125rem;
        }

        /* Get rid of top margin on first element in any rich text element */
        .w-richtext> :not(div):first-child,
        .w-richtext>div:first-child> :first-child {
          margin-top: 0 !important;
        }

        /* Get rid of bottom margin on last element in any rich text element */
        .w-richtext>:last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
          margin-bottom: 0 !important;
        }

        /* Prevent all click and hover interaction with an element */
        .pointer-events-off {
          pointer-events: none;
        }

        /* Enables all click and hover interaction with an element */
        .pointer-events-on {
          pointer-events: auto;
        }

        /* Create a class of .div-square which maintains a 1:1 dimension of a div */
        .div-square::after {
          content: "";
          display: block;
          padding-bottom: 100%;
        }

        /* Make sure containers never lose their center alignment */
        .container-medium,
        .container-small,
        .container-large {
          margin-right: auto !important;
          margin-left: auto !important;
        }

        /* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
        /*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/

        /* Apply "..." after 3 lines of text */
        .text-style-3lines {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
        }

        /* Apply "..." after 2 lines of text */
        .text-style-2lines {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
        }

        .text-style-1lines {
          display: -webkit-box;
          overflow: hidden;
          -webkit-line-clamp: 1;
          -webkit-box-orient: vertical;
        }

        /* Adds inline flex display */
        .display-inlineflex {
          display: inline-flex;
        }

        /* These classes are never overwritten */
        .hide {
          display: none !important;
        }

        @media screen and (max-width: 991px) {

          .hide,
          .hide-tablet {
            display: none !important;
          }
        }

        @media screen and (max-width: 767px) {
          .hide-mobile-landscape {
            display: none !important;
          }
        }

        @media screen and (max-width: 479px) {
          .hide-mobile {
            display: none !important;
          }
        }

        .margin-0 {
          margin: 0rem !important;
        }

        .padding-0 {
          padding: 0rem !important;
        }

        .spacing-clean {
          padding: 0rem !important;
          margin: 0rem !important;
        }

        .margin-top {
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-top {
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-right {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-right {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-bottom {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-bottom {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }

        .margin-left {
          margin-top: 0rem !important;
          margin-right: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-left {
          padding-top: 0rem !important;
          padding-right: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-horizontal {
          margin-top: 0rem !important;
          margin-bottom: 0rem !important;
        }

        .padding-horizontal {
          padding-top: 0rem !important;
          padding-bottom: 0rem !important;
        }

        .margin-vertical {
          margin-right: 0rem !important;
          margin-left: 0rem !important;
        }

        .padding-vertical {
          padding-right: 0rem !important;
          padding-left: 0rem !important;
        }

        /* Apply "..." at 100% width */
        .truncate-width {
          width: 100%;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
        }

        /* Removes native scrollbar */
        .no-scrollbar {
          -ms-overflow-style: none;
          overflow: -moz-scrollbars-none;
        }

        .no-scrollbar::-webkit-scrollbar {
          display: none;
        }
      </style>
    </div>
    <div data-w-id="43f8bbff-adb0-7827-fc58-5cc814b4029e" style="display:flex" class="pageload">
      <div class="pageload-content-wrapper">
        <div data-w-id="865b3237-623e-9111-52c2-a0180cc5189c" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6a70c7ce60cabc6e1bdac_no%20katana%20loading.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="4" data-duration="0"></div>
      </div>
    </div>
    <div id="phone-modal" class="modal-wrapper">
      <div class="modal-card-wrapper"><button data-w-id="edc6de8b-67c2-8140-8a7c-38f5552155cf" class="modal-card-close-button"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a56ca645ee80c81602642f_x-close.svg" loading="lazy" width="20" height="20" alt="" /></button>
        <div class="modal-card-image-wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5f3980650a2602e771191_modal-illustration.png" loading="lazy" sizes="100vw" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5f3980650a2602e771191_modal-illustration-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5f3980650a2602e771191_modal-illustration-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5f3980650a2602e771191_modal-illustration-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5f3980650a2602e771191_modal-illustration.png 1280w" alt="" /></div>
        <div class="modal-content-wrapper">
          <div class="features_card-header _1">
            <div class="modal_card-text-container">
              <h3 class="heading-style-h4-5 text-color-white margin-bottom margin-small">Thank you for joining the waitlist</h3>
              <div class="modal-paragraph-wrapper">
                <div class="text-size-medium hero-heading_paragraph">Enter your phone number to be prioritized in our beta phase! (promised no spam)<br /></div>
              </div>
            </div>
          </div>
          <div class="waitlist-phone_block w-form">
            <form id="wf-form-Phone-Form" name="wf-form-Phone-Form" data-name="Phone Form" method="get" class="waitlist-form-phone" data-wf-page-id="666d9a8012932ba246bcf004" data-wf-element-id="24666cb0-1086-e541-7170-76148e17ac88">
              <div class="w-embed">
                <style>
                  .waitlist-form_conic-gradient-layer {
                    background: conic-gradient(from 0deg at 50% 49%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0.9), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
                  }
                </style>
              </div>
              <div data-w-id="24666cb0-1086-e541-7170-76148e17ac89" style="-webkit-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="waitlist-form_conic-gradient-layer"></div>
              <div class="waitlist-form_outer-container">
                <div class="waitlist-form_content-layer"><input class="form-hidden w-input" maxlength="256" name="email" data-name="email" placeholder="Example Text" type="email" id="hiddenEmail" required="" />
                  <div class="waitlist-phone_wrapper"><input class="waitlist-phone-country_input w-input" maxlength="256" name="Country-Code" data-name="Country Code" placeholder="+1" type="text" id="Country-Code" required="" /><input class="waitlist-phone_input w-input" maxlength="256" name="Phone-number-2" data-name="Phone Number 2" placeholder="123456789" type="tel" id="Phone-number-2" required="" /></div><input type="submit" data-wait="Please wait..." data-identifier="confetti-button" class="waitlist-phone_button w-button" value="Get Present" />
                </div>
                <div class="waitilist-form_dark-layer"></div>
              </div>
            </form>
            <div class="form_success-message w-form-done">
              <div class="form_state-outer-wrap">
                <div class="form-state_wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669724279ac354fe13e9956b_%F0%9F%A5%B3.webp" loading="lazy" alt="" class="form-state-icon_image" />
                  <div class="text-size-small form-state-text">You will receive a message from us shortly!</div>
                </div>
                <div class="waitilist-form_dark-layer"></div>
              </div>
            </div>
            <div class="form-error_wrapper w-form-fail">
              <div class="form-state_wrapper error-state"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666db69b47fae1760ab27db3_Frame%203732.webp" loading="lazy" alt="" class="form-state-icon_image" />
                <div class="text-size-tiny">We need a valid phone number</div>
              </div>
            </div>
          </div>
          <div class="modal-card-hint-wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a5665fdc788b509a3508b5_WhatsApp.svg" loading="lazy" width="20" alt="" class="margin-right margin-tiny" />
            <div class="text-size-tiny text-color-whitesmoke">WhatsApp or</div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a56655578b9dc444d35f37_iMessage.svg" loading="lazy" width="20" alt="" class="margin-horizontal margin-tiny" />
            <div class="text-size-tiny text-color-whitesmoke">iMessage are required</div>
          </div>
        </div>
      </div>
      <div data-w-id="4fd21079-3927-4a7a-d0d5-773a16b8542d" class="modal-background"></div>
    </div>
    <main class="main-wrapper">
      <div data-animation="default" data-collapse="none" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar_component w-nav">
        <div class="navbar_container"><a href="/" aria-current="page" class="brand-logo_link w-nav-brand w--current"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668d1c7e3a839e6152e7132e_Group%203796.svg" loading="lazy" alt="" class="brand-logo_image" /></a>
          <nav role="navigation" class="navigation_menu w-nav-menu"><a href="#table-ai" class="text-size-small navbar-menu_link w-nav-link">table AI</a><a href="#features" class="text-size-small navbar-menu_link w-nav-link">Features</a><a href="#" data-w-id="198b4951-f25c-73cd-e75f-149b497e6927" class="navigation_video-button w-inline-block w-lightbox">
              <div class="navigation_video-btn-stroke-gradient"></div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a77c4988144804f76ab049_video-button-table.png" loading="lazy" alt="" class="navigation_video-btn-graphic outer" />
              <div style="-webkit-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-50%, -50%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="waitlist-form_conic-gradient-layer navigation_video-btn"></div>
              <div class="navigation_video-btn-content-contain">
                <div class="text-size-tiny navigation_video-btn-text">Watch film</div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a77039678e934d6d06691d_play-button.svg" loading="lazy" alt="" class="navigation_video-btn-icon" /><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a77c4988144804f76ab049_video-button-table.png" loading="lazy" data-w-id="094aa161-09cf-25f7-f908-4523e6dc5a84" id="video-button-gif" alt="" class="navigation_video-btn-graphic inner" />
              </div>
              <script type="application/json" class="w-json">
                {
                  "items": [{
                    "url": "https://www.youtube.com/embed/hsi44PVvPIs?modestbranding=1&rel=0&autoplay=1&controls=0",
                    "originalUrl": "https://www.youtube.com/embed/hsi44PVvPIs?modestbranding=1&rel=0&autoplay=1&controls=0",
                    "width": 940,
                    "height": 528,
                    "thumbnailUrl": "https://i.ytimg.com/vi/hsi44PVvPIs/hqdefault.jpg",
                    "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2Fhsi44PVvPIs%3Fautoplay%3D1%26feature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dhsi44PVvPIs&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2Fhsi44PVvPIs%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&autoplay=1&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\"></iframe>",
                    "type": "video"
                  }],
                  "group": ""
                }
              </script>
            </a><a data-w-id="f22664b9-fe5f-69de-47ff-e394f2a4a621" href="#" class="navigation_video-button w-inline-block"></a></nav>
        </div>
      </div>
      <section class="home-hero_section">
        <div class="container-xxlarge home-hero_outer-container">
          <div class="padding-global home-hero_padding-global">
            <div class="padding-section-xlarge home_hero-padding">
              <div class="container-medium home-hero_inner-container">
                <div class="hero-header_container">
                  <h1 class="heading-style-h2 home-hero_heading">Think <span class="text-gradient-span">personal CRM</span> but AI first</h1>
                  <p class="text-size-medium hero-heading_paragraph">Never forget who you&#x27;ve met. Grow and maintain your network effortlessly with AI. Because your network is your net worth.</p>
                  <div class="waitlist-form_block w-form">
                    <form id="wf-form-Waitlist-Form" name="wf-form-Waitlist-Form" data-name="Waitlist Form" method="get" class="waitlist-form" data-wf-page-id="666d9a8012932ba246bcf004" data-wf-element-id="a42f6842-a33f-3235-3f00-6dde96427963">
                      <div class="w-embed">
                        <style>
                          .waitlist-form_conic-gradient-layer {
                            background: conic-gradient(from 0deg at 50% 49%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0.9), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
                          }
                        </style>
                      </div>
                      <div class="waitlist-form_conic-gradient-layer"></div>
                      <div class="waitlist-form_outer-container">
                        <div class="waitlist-form_content-layer"><input class="waitlist-form_input w-input" maxlength="256" name="Email-Address-2" data-name="Email Address 2" placeholder="Email Address" type="email" id="Email-Address-2" required="" /><input type="submit" data-wait="Please wait..." data-identifier="confetti-button" class="waitlist-form_button w-button" value="Join Waitlist" /></div>
                        <div class="waitilist-form_dark-layer"></div>
                      </div>
                    </form>
                    <div class="form_success-message w-form-done">
                      <div class="form_state-outer-wrap">
                        <div class="form-state_wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669724279ac354fe13e9956b_%F0%9F%A5%B3.webp" loading="lazy" alt="" class="form-state-icon_image" />
                          <div class="text-size-small form-state-text">You are all set!</div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697243c892b2be30310280e_%F0%9F%91%80.webp" loading="lazy" alt="" class="form-state-icon_image" />
                          <div class="text-size-small form-state-text">Look out for your emails.</div>
                        </div>
                        <div class="waitilist-form_dark-layer"></div>
                      </div>
                    </div>
                    <div class="form-error_wrapper w-form-fail">
                      <div class="form-state_wrapper error-state"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666db69b47fae1760ab27db3_Frame%203732.webp" loading="lazy" alt="" class="form-state-icon_image" />
                        <div class="text-size-tiny">We need a valid email address</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="waitlist-logos-contain">
                  <div class="text-size-tiny waitlist-logos-text">People from<br />already joined</div>
                  <div class="w-layout-grid waitlist-logos_grid">
                    <div id="w-node-_1483950c-48a1-438e-8ed2-0ad5db95a5cf-46bcf004" class="waitlist-logo_image_container"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666daedf2dd00cac57bc7fc9_Frame%203456.svg" loading="lazy" id="w-node-bca96737-14fa-4d22-d5a4-d1698bbd6098-46bcf004" alt="" class="waitlist-logo_image" /></div>
                    <div id="w-node-_8211a067-5116-edb1-b355-e1f7589d7025-46bcf004" class="waitlist-logo_image_container"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666daedf47fae1760aadb9a3_Frame%203455.svg" loading="lazy" id="w-node-e9033a34-3716-3608-c8f9-a05d9e21e346-46bcf004" alt="" class="waitlist-logo_image" /></div>
                    <div id="w-node-_9daa6726-386e-7956-a426-29f770606d75-46bcf004" class="waitlist-logo_image_container"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666daedf174b035140d2d0f9_Frame%203454.svg" loading="lazy" id="w-node-_755d2c50-ef77-95d3-77dd-a65df1cfe79c-46bcf004" alt="" class="waitlist-logo_image" /></div>
                    <div id="w-node-_35e4a201-5626-3373-2269-bc2fbc8ba335-46bcf004" class="waitlist-logo_image_container"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666daee0fd72bb51368a2a96_Frame%203457.svg" loading="lazy" id="w-node-_18b17f79-1ff4-31a7-bd61-7371eb7516f1-46bcf004" alt="" class="waitlist-logo_image" /></div>
                  </div>
                </div>
              </div>
              <div class="video_mobile-container-medium">
                <div class="home-hero_video_mobile-wrapper">
                  <div class="home-hero_video_mobile-embed w-embed">
                    <div style="width: 110%; height: 110%; object-fit:cover" class="w-background-video w-background-video-atom">
                      <video class="work-template-video" style="overflow: none" autoplay muted playsinline loop data-wf-ignore="true" data-object-fit="cover">
                        <source src="https://table.nyc3.cdn.digitaloceanspaces.com/table-rotate.mp4" data-wf-ignore="true" />
                        <source src="https://table.nyc3.cdn.digitaloceanspaces.com/table-rotate.webm" type="video/webm">
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="home-hero_video-wrapper">
            <div class="home-hero_video-embed w-embed">
              <div style="width: 100%; height: 100%; object-fit:cover" class="w-background-video w-background-video-atom">
                <video class="work-template-video" style="overflow: none" autoplay muted playsinline loop data-wf-ignore="true" data-object-fit="cover">
                  <source src="https://table.nyc3.cdn.digitaloceanspaces.com/table-header-hd.mp4" data-wf-ignore="true" />
                  <source src="https://table.nyc3.cdn.digitaloceanspaces.com/table_header.webm" type="video/webm">
                </video>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="rel_section">
        <div class="container-xxlarge">
          <div class="padding-global">
            <div class="padding-section-large rel_container">
              <div data-w-id="6d68aa8f-d181-56cf-61c0-b755e96107cb" class="container-large rel_container">
                <div class="rel_header">
                  <div class="section-tag_wrapper">
                    <div class="text-size-tiny section-tag_text text-color-whitesmoke">Seamless Interface</div>
                    <div class="section-tag_icon-contain"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668de0730eaac6a14e117b6e_layout-alt-01.svg" loading="lazy" alt="" class="section-tag_icon" /></div>
                  </div>
                  <h2 class="heading-style-h3 rel_heading">All your relationships in one place</h2>
                  <p class="text-size-large rel_paragraph">Your entire network automatically imported into your personal CRM. All contacts enriched with professional and personal information.</p>
                </div>
                <div class="rel_content-contain">
                  <div class="rel_content-outer-wrapper">
                    <div class="rel_content-wrapper">
                      <div class="rel_navigation-container">
                        <div class="rel_navigation-header-container">
                          <h2 class="heading-style-h5 rel_content-heading">Personal and professional</h2>
                          <p class="text-size-regular rel_content-paragraph">A CRM created to be your own. Manage your connections and prevent silos.</p>
                        </div>
                        <div id="relSwiper" class="swiper rel_swiper">
                          <div class="swiper-wrapper rel_links-container">
                            <div class="swiper-slide rel_link-wrapper _1">
                              <div class="rel_link-shadow-wrapper"></div>
                              <div class="rel_link-inner-wrapper _1">
                                <div class="rel_link-text_container">
                                  <div class="rel_link-icon-container">
                                    <div class="rel_link-icon-embed _1 w-embed"><svg width="100%" height="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 22.5C6.477 22.5 2 18.023 2 12.5C2 6.977 6.477 2.5 12 2.5C17.523 2.5 22 6.977 22 12.5C22 18.023 17.523 22.5 12 22.5ZM12 20.5V4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5Z" fill="currentColor" />
                                      </svg></div>
                                  </div>
                                  <div class="text-size-regular rel-link_text">All connection at a glance</div>
                                </div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, (max-width: 991px) 596px, 100vw" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd210c408056f8548743_1-mobile.png 1664w" alt="" class="rel_image show-on-mobile" />
                              </div>
                              <div class="rel_link-neon-bar _1"></div><a href="#feature-1" class="rel_link-absolute-link w-inline-block"></a>
                            </div>
                            <div class="swiper-slide rel_link-wrapper _2">
                              <div class="rel_link-shadow-wrapper"></div>
                              <div class="rel_link-inner-wrapper _2">
                                <div class="rel_link-text_container">
                                  <div class="rel_link-icon-container">
                                    <div class="rel_link-icon-embed _2 w-embed"><svg width="100%" height="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 21.4849C7.54404 21.3987 6.13477 20.9392 4.90773 20.1508C3.68069 19.3624 2.67717 18.2715 1.99368 16.9831C1.31019 15.6946 0.969735 14.252 1.00506 12.7939C1.04038 11.3358 1.45029 9.91137 2.19537 8.65754C2.94044 7.40371 3.99561 6.36268 5.25939 5.6346C6.52317 4.90652 7.95303 4.51588 9.41145 4.50024C10.8699 4.48461 12.3078 4.84451 13.5869 5.54533C14.866 6.24615 15.9432 7.26431 16.715 8.50189C18.3774 8.55499 19.9563 9.24338 21.1265 10.4254C22.2968 11.6073 22.9694 13.193 23.0059 14.8559C23.0424 16.5188 22.4401 18.1324 21.3228 19.3646C20.2056 20.5968 18.6585 21.3539 17 21.4799V21.4999H9V21.4849Z" fill="currentColor" />
                                      </svg></div>
                                  </div>
                                  <div class="text-size-regular rel-link_text">News - On top of your network</div>
                                </div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, (max-width: 991px) 596px, 100vw" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd21f09016af904b3919_2-mobile.png 1664w" alt="" class="rel_image show-on-mobile" />
                              </div>
                              <div class="rel_link-neon-bar _2"></div><a href="#feature-2" class="rel_link-absolute-link w-inline-block"></a>
                            </div>
                            <div class="swiper-slide rel_link-wrapper _3">
                              <div class="rel_link-shadow-wrapper"></div>
                              <div class="rel_link-inner-wrapper _3">
                                <div class="rel_link-text_container">
                                  <div class="rel_link-icon-container">
                                    <div class="rel_link-icon-embed _3 w-embed"><svg width="100%" height="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 10.5H20L11 23.5V14.5H4L13 1.5V10.5Z" fill="currentColor" />
                                      </svg></div>
                                  </div>
                                  <div class="text-size-regular rel-link_text">AI first interactions</div>
                                </div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, (max-width: 991px) 596px, 100vw" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd2039508f363006bada_3-mobile.png 1664w" alt="" class="rel_image show-on-mobile" />
                              </div>
                              <div class="rel_link-neon-bar _3"></div><a href="#feature-3" class="rel_link-absolute-link w-inline-block"></a>
                            </div>
                            <div class="swiper-slide rel_link-wrapper _4">
                              <div class="rel_link-shadow-wrapper"></div>
                              <div class="rel_link-inner-wrapper _4">
                                <div class="rel_link-text_container">
                                  <div class="rel_link-icon-container">
                                    <div class="rel_link-icon-embed _4 w-embed"><svg width="100%" height="100%" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.243 18.502H3V14.259L14.435 2.82404C14.6225 2.63657 14.8768 2.53125 15.142 2.53125C15.4072 2.53125 15.6615 2.63657 15.849 2.82404L18.678 5.65304C18.8655 5.84056 18.9708 6.09487 18.9708 6.36004C18.9708 6.6252 18.8655 6.87951 18.678 7.06704L7.243 18.502ZM3 20.502H21V22.502H3V20.502Z" fill="currentColor" />
                                      </svg></div>
                                  </div>
                                  <div class="text-size-regular rel-link_text">Profiles with tasks &amp; notes</div>
                                </div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 83vw, (max-width: 991px) 596px, 100vw" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7fd20b9d5186892d68fd0_4-mobile.png 1664w" alt="" class="rel_image show-on-mobile" />
                              </div>
                              <div class="rel_link-neon-bar _4"></div><a href="#feature-4" class="rel_link-absolute-link w-inline-block"></a>
                            </div>
                          </div>
                        </div>
                        <div class="rel_swiper-pagination-wrapper">
                          <div class="rel_swiper-pagination"></div>
                        </div>
                      </div>
                      <div class="rel_image-container"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1.png" loading="lazy" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 57vw, 814.3125px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1-p-2000.png 2000w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef7ec7fd36f17b7af7a1_1.png 2496w" alt="tool interface - contacts overview" class="rel_image _1" /><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2.png" loading="lazy" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 57vw, 814.3125px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2-p-2000.png 2000w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ef8a9d03b60b8077981a_2.png 2496w" alt="tool interface - news updates" class="rel_image _2" /><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3.png" loading="lazy" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 57vw, 814.3125px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3-p-2000.png 2000w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af6955251576c2d7db21_3.png 2496w" alt="tool interface - AI interactions" class="rel_image _3" /><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4.png" loading="lazy" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 57vw, 814.3125px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4-p-2000.png 2000w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a6af690761259ff27f2546_4.png 2496w" alt="tool interface - profile tasks and notes" class="rel_image _4" /></div>
                    </div>
                  </div>
                  <div class="rel_icon-graphic-wrap">
                    <div class="rel-graphic-text-wrapper">
                      <h3 class="heading-style-h4 rel_graphic-icon-heading">🔌</h3>
                      <h3 class="heading-style-h4 rel_graphic-heading"> Connect all of your </h3>
                      <h3 class="heading-style-h4 rel_graphic-icon-heading">⚒️</h3>
                      <h3 class="heading-style-h4 rel_graphic-heading"> tools with one click</h3>
                    </div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect.png" loading="lazy" sizes="(max-width: 1439px) 90vw, 1280px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect-p-500.png 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect-p-800.png 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect-p-1080.png 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect-p-1600.png 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66974f4c2ae35900cc85ba32_connect.png 2544w" alt="illustration connected data sauces" class="image-100" />
                  </div>
                </div>
                <div id="feature-1" class="rel_links-anchor _1"></div>
                <div id="feature-2" class="rel_links-anchor _2"></div>
                <div id="feature-3" class="rel_links-anchor _3"></div>
                <div id="feature-4" class="rel_links-anchor _4"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="network_section">
        <div class="container-xxlarge network_section-container">
          <div class="padding-global">
            <div class="padding-section-large network_container">
              <div class="container-medium network_container">
                <div class="network_header">
                  <div class="section-tag_wrapper white">
                    <div class="text-size-tiny section-tag_text text-color-whitesmoke">All Connections</div>
                    <div class="section-tag_icon-contain white"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668dea0ea93162aa136e042b_users-01.svg" loading="lazy" alt="" class="section-tag_icon small" /></div>
                  </div>
                  <h3 class="heading-style-h2 network_heading">Your <span class="netwrok_heading-span">network</span> is your net worth</h3>
                  <p class="text-size-large network_paragraph">With table allows you to automatically manage your network with a world class feature set.</p>
                </div>
                <div data-w-id="808de9ce-eadb-04d1-a053-5404983f0932" class="network_image-wrap"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6696f40d7975dd44c2990ccc_world%201.svg" loading="eager" alt="" class="image-100" />
                  <div style="opacity:0" class="network_absolute-image-wrap _1"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6696ee7f6dc69d249bf0b0b8_Frame%2067684.webp" loading="lazy" alt="" class="network_absolute-image-text" />
                    <div class="network_absolute-person-image-wrap _1"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697104c172384b7049ad213_Rectangle%204640.webp" loading="lazy" alt="" class="network_absolute-person-image" /></div>
                  </div>
                  <div style="opacity:0" class="network_absolute-image-wrap _1-copy"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669716c6a8f47844cc03b661_Frame%2067704.webp" loading="lazy" alt="" class="network_absolute-image-text" />
                    <div class="network_absolute-person-image-wrap _1"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66971619604e40d6321ef388_Rectangle.webp" loading="lazy" alt="" class="network_absolute-person-image" /></div>
                  </div>
                  <div style="opacity:0" class="network_absolute-image-wrap _2"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6698c3637b69cc3f5232fb35_Frame%2067707.svg" loading="lazy" alt="" class="network_absolute-image-text" />
                    <div class="network_absolute-person-image-wrap _2"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669713cff0833cb1d4d709d9_fa3df21e576434e675e8236c5903f98e-sticker%201.webp" loading="lazy" alt="" class="network_absolute-person-image" /></div>
                  </div>
                  <div style="opacity:0" class="network_absolute-image-wrap _3"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697158881ef68458052fb78_Frame%2067706.webp" loading="lazy" alt="" class="network_absolute-image-text" />
                    <div class="network_absolute-person-image-wrap _3"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669714fe8409fb3d1c8d36a2_be794f8aa591a149945d09f83f0739b0-sticker%204.webp" loading="lazy" alt="" class="network_absolute-person-image" /></div>
                  </div>
                  <div style="opacity:0" class="network_absolute-image-wrap _4"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6696f62992df39627a76d2a9_Frame%2067705.webp" loading="lazy" alt="" class="network_absolute-image-text" />
                    <div class="network_absolute-person-image-wrap _4"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66971487e94ab14a2d654455_Rectangle%204662.webp" loading="lazy" alt="" class="network_absolute-person-image" /></div>
                  </div>
                </div>
                <div class="network_points-contain">
                  <div id="w-node-_6dee3fb8-89e4-a812-9b71-c505a138e2b1-46bcf004" class="network_point-wrapper">
                    <div class="network_point-heading-contain">
                      <div class="network_point-icon-contain"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668dee875549a41cb90520a1_lightning-01.svg" loading="lazy" alt="" class="network_point-icon" /></div>
                      <div class="text-size-regular network_point-subheading">Follow Ups</div>
                    </div>
                    <div class="text-size-small network_point-paragraph">Never forget to keep in touch with your friends and connections.</div>
                  </div>
                  <div id="w-node-_2b0c6219-bb83-243d-b6b0-9f2e0a502d8e-46bcf004" class="network_point-wrapper">
                    <div class="network_point-heading-contain">
                      <div class="network_point-icon-contain"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668deec40bd9e07612f40775_clock-rewind.svg" loading="lazy" alt="" class="network_point-icon" /></div>
                      <div class="text-size-regular network_point-subheading">Contact History</div>
                    </div>
                    <div class="text-size-small network_point-paragraph">Never forget where and when you meet new people. Your source of truth.</div>
                  </div>
                  <div id="w-node-_74ff328f-fc1f-a044-5a4c-3cf4d100b747-46bcf004" class="network_point-wrapper">
                    <div class="network_point-heading-contain">
                      <div class="network_point-icon-contain"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/668deef3f25ab5675d8a6a41_layers-three-01.svg" loading="lazy" alt="" class="network_point-icon" /></div>
                      <div class="text-size-regular network_point-subheading">Information Hub</div>
                    </div>
                    <div class="text-size-small network_point-paragraph">Never forget any information about anyone in your network.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="network_section-radial-gradient"></div>
        <div class="custom-gradient-styles w-embed">
          <style>
            .feature_card-background-layer-conic {
              background: conic-gradient(from 135deg at 50% 50%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 1), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
            }

            .feature_card-background-layer-conic._4 {
              background: conic-gradient(from 240deg at 50% 50%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 1), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
            }

            .feature_card-background-layer-conic._3 {
              background: conic-gradient(from 60deg at 50% 50%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 1), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
            }

            .network_section-radial-gradient {
              background: radial-gradient(circle at 50% 0%, rgba(146, 119, 253, 1), rgba(146, 119, 253, 0.36), rgba(146, 119, 253, 0))
            }

            /* Gradients generated using https://www.magicpattern.design/tools/gradient-generator - From a friendly webflow dev */
          </style>
        </div>
      </section>
      <section id="table-ai" data-w-id="55fa8880-4b97-0fd7-b3c8-f180dbeced25" class="crm-slider_section grey-grain-image_container">
        <div id="crm-slider_section-container" class="container-xxlarge">
          <div class="padding-global">
            <div class="padding-top padding-section-xxlarge crm-slider_padding-top">
              <div class="container-xlarge crm-slider_container">
                <div class="crm-slider_main-component">
                  <div class="crm-slider_text-contain">
                    <div class="margin-bottom margin-1rem">
                      <h2 class="heading-style-h3">AI meets CRM</h2>
                    </div>
                    <div class="text-size-large crm-slider_description">Access your entire CRM through table&#x27;s AI chat assistant. A game changer in productivity.</div>
                  </div>
                  <div class="crm-slider_slider-contain">
                    <div id="aiSwiper" class="swiper crm-slider_swiper">
                      <div class="swiper-wrapper crm-slider_swiper-wrapper">
                        <div class="swiper-slide crm-slider_swiper-slide">
                          <div class="crm-slider_slide">
                            <div class="crm-slider_slide-content">
                              <div class="crm-slider_slide-header"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6676c861e1b128322e62b2e0_Frame%2048.svg" loading="lazy" alt="" class="crm-slider_slide-icon" />
                                <h3 class="heading-style-2rem text-weight-semibold">Chat assistant</h3>
                              </div>
                              <div class="text-size-regular crm-slider_slide-description">The most natural and easiest way to interact with your CRM through text.</div>
                              <div class="crm-slider_slide-image-contain"><lottie-player mode="normal" src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7cd1b41d34daced30f9b4_66994c6627ac7d7565ddb168_chat%20assistant_resized%20(1).json" id="ai-lottie-1" class="custom-lottie-player"></lottie-player></div>
                            </div>
                            <div class="crm-slider_slide-background"></div>
                          </div>
                        </div>
                        <div class="swiper-slide crm-slider_swiper-slide">
                          <div class="crm-slider_slide">
                            <div class="crm-slider_slide-content">
                              <div class="crm-slider_slide-header"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6683000f04a91b4a2b59eea0_Frame%203611.svg" loading="lazy" alt="" class="crm-slider_slide-icon" />
                                <h3 class="heading-style-2rem text-weight-semibold">Do search</h3>
                              </div>
                              <div class="text-size-regular crm-slider_slide-description">Never forget who you met along your journey. Search through your CRM.</div>
                              <div class="crm-slider_slide-image-contain">
                                <div class="crm-slider_slide-lottie" data-w-id="29fd4689-3475-c71a-0ca3-1e3c00d50ef1" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66994c78c75ccdf88bf701c6_do%20search_resized.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="10" data-duration="0"></div><lottie-player mode="normal" src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ce2cf2956eead23eec79_66994c78c75ccdf88bf701c6_do%20search_resized.json" id="ai-lottie-2" class="custom-lottie-player"></lottie-player>
                              </div>
                            </div>
                            <div class="crm-slider_slide-background"></div>
                          </div>
                        </div>
                        <div class="swiper-slide crm-slider_swiper-slide">
                          <div class="crm-slider_slide">
                            <div class="crm-slider_slide-content">
                              <div class="crm-slider_slide-header"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a622f3bb21735987f38895_set-reminders.svg" loading="lazy" alt="" class="crm-slider_slide-icon box-shadow-none" />
                                <h3 class="heading-style-2rem text-weight-semibold text-color-white">Set Reminders</h3>
                              </div>
                              <div class="text-size-regular crm-slider_slide-description text-color-white">Clear your headspace and let Table remind you when it’s about time.</div>
                              <div class="crm-slider_slide-image-contain">
                                <div class="crm-slider_slide-lottie" data-w-id="474ea536-cfda-e82b-c412-915a5ab98e99" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66994c929bcc6d74e1626386_set%20date_resized.lottie" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="10" data-duration="0"></div><lottie-player mode="normal" src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66a7ce8e9df1661d0e27289d_66994c929bcc6d74e1626386_set%20date_resized.json" id="ai-lottie-3" class="custom-lottie-player"></lottie-player>
                              </div>
                            </div>
                            <div class="crm-slider_slide-background _1e143c"></div>
                          </div>
                        </div>
                        <div class="swiper-slide crm-slider_swiper-slide">
                          <div class="crm-slider_slide">
                            <div class="crm-slider_slide-content">
                              <div class="crm-slider_slide-header"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66770cc942abb252125fac77_Frame%2048.svg" loading="lazy" alt="" class="crm-slider_slide-icon" />
                                <h3 class="heading-style-2rem text-weight-semibold">Add people</h3>
                              </div>
                              <div class="text-size-regular crm-slider_slide-description">Meet people on the go? Table AI will help you add anyone to your CRM with ease.</div>
                              <div class="crm-slider_slide-image-contain">
                                <div class="crm-slider_slide-lottie" data-w-id="375d220b-2fe1-246a-8069-af3c6e165f1c" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66aa2e6f303ba140e7664293_add%20new_resized_Paula.lottie" data-loop="0" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="10" data-duration="0"></div><lottie-player mode="normal" src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66aa2e6f1a97d4da69a69db8_add%20new_resized_Paula.json" id="ai-lottie-4" class="custom-lottie-player"></lottie-player>
                              </div>
                            </div>
                            <div class="crm-slider_slide-background"></div>
                          </div>
                        </div>
                        <div class="swiper-slide_blank swiper-blank-slide"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination-wrapper">
                  <div class="ai_swiper-pagination">
                    <div class="crm-slider_pagination-dot active">
                      <div class="crm-slider_pagination-dot-text">Chat Bot</div>
                    </div>
                    <div class="crm-slider_pagination-dot">
                      <div class="crm-slider_pagination-dot-text hide">Search CRM</div>
                    </div>
                    <div class="crm-slider_pagination-dot">
                      <div class="crm-slider_pagination-dot-text hide">Reminders</div>
                    </div>
                    <div class="crm-slider_pagination-dot">
                      <div class="crm-slider_pagination-dot-text hide">Add People</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="solution_section grey-grain-image_container">
        <div class="container-xxlarge solution_outer-container">
          <div class="padding-global">
            <div class="padding-section-xxlarge solution_container">
              <div class="solution_text-contain">
                <div class="solution_text-contain-top-row">
                  <h2 class="heading-style-h1 solution-heading">Add new</h2><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66727927cf30b1c922945b09_Frame%203670.webp" loading="lazy" alt="" class="solution_text-contain-image" />
                  <h2 class="heading-style-h1 solution-heading">connections with</h2>
                </div>
                <div class="solution_text-contain-middle-row">
                  <h2 class="heading-style-h1 solution-heading">Ease. Never forget 🧠 important</h2>
                </div>
                <div class="solution_text-contain-last-row">
                  <h2 class="heading-style-h1 solution-heading">info. Your 💙 all in one 👋 stop</h2>
                </div>
                <h2 class="heading-style-h1 solution-heading">solution CRM.</h2>
              </div>
              <h2 class="heading-style-h1 solution-heading-mobile">Add new<span class="solution-text-emoji-text"> </span>connections with ease. Never forget 🧠 important infos. Your 💙 all in one 👋 stop solution CRM.</h2>
            </div>
          </div>
          <div class="solution_gradient-image-wrap"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66727c9f247370356b0e5ae0_image%20562.webp" loading="lazy" alt="" class="image-100" /></div>
          <div class="solution_gradient-image-wrap _2"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66727c9f247370356b0e5ae0_image%20562.webp" loading="lazy" alt="" class="image-100" /></div>
        </div>
      </section>
      <section id="features" class="features_section">
        <div class="padding-global features_section-padding-global">
          <div class="padding-section-large features_card-section">
            <div class="container-large featuers_container">
              <div class="features_flex-header">
                <div class="section-tag_wrapper white">
                  <div class="text-size-tiny section-tag_text text-color-whitesmoke">World Class Usability</div>
                  <div class="section-tag_icon-contain white"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697522515eb5b06785b3a30_lightning-01.svg" loading="lazy" alt="" class="section-tag_icon small" /></div>
                </div>
                <h3 class="heading-style-h3 feature_flex-heading">Features you will love</h3>
                <p class="text-size-large features_flex-paragraph">table allows you to automatically manage your network with a world class feature set.</p>
              </div>
              <div class="features_flex-contain">
                <div data-w-id="5b4e54b7-77ec-3543-6301-6a3ba44483e4" class="features_card _1">
                  <div class="feature_card-content-wrap">
                    <div class="features_card-header _1">
                      <div class="features_card-text-contain">
                        <h3 class="heading-style-h5 features_card-heading">Data automation in all directions</h3>
                        <div class="text-size-regular features_card-desc">No hassle to get information in and out of your CRM.</div>
                      </div>
                    </div>
                    <div class="features_card-image-wrap _1">
                      <div data-is-ix2-target="1" class="features_card-lottie _1" data-w-id="9a7ccae5-1b5f-43b8-4ffb-ce392b319912" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66994a212b77abbb4118b6c5_data%20automation_resized.lottie" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="4.866666666666666" data-duration="4.866666666666666"></div>
                    </div>
                  </div>
                  <div class="feature_card-background-layer"></div>
                  <div class="feature_card-background-layer gradient"></div>
                  <div class="feature_card-background-layer-conic"></div>
                </div>
                <div data-w-id="5cdb1f0e-eb83-4280-a3fe-cf81501648f9" class="features_card _2">
                  <div class="feature_card-content-wrap _2">
                    <div class="features_card-header _2">
                      <div class="features_card-text-contain">
                        <h3 class="heading-style-h5 features_card-heading">Stay on top of your Network</h3>
                        <div class="text-size-regular features_card-desc">Notification about relevant updates customized for you.</div>
                      </div>
                    </div>
                    <div class="features_card-image-wrap _1">
                      <div data-is-ix2-target="1" class="features_card-lottie _2" data-w-id="e4c757a3-17d2-3d38-d3c4-f13c0d5eb285" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66acaea4f452d87cbffccee8_table_notificationobg_resized2.lottie" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="4" data-duration="0"></div>
                    </div>
                  </div>
                  <div class="feature_card-background-layer"></div>
                </div>
              </div>
              <div id="matter-js-trigger" class="features_flex-contain">
                <div data-w-id="7da36598-0f16-19df-c5c5-b119456ff46e" class="features_card _3">
                  <div class="feature_card-content-wrap _3">
                    <div class="features_card-header _3">
                      <div class="features_card-text-contain">
                        <h3 class="heading-style-h5 features_card-heading">History of Touch Points</h3>
                        <div class="text-size-regular features_card-desc">Like a change log for all interaction with your friends.</div>
                      </div>
                    </div>
                    <div class="features_card-image-wrap _3">
                      <div data-is-ix2-target="1" class="features_card-lottie _3" data-w-id="2d63c5f3-7757-158f-7f3e-a282dd2675bc" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66994a8f5fe3346f1240fa03_History_resized.lottie" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="9.966666666666667" data-duration="9.966666666666667"></div>
                    </div>
                  </div>
                  <div class="feature_card-background-layer"></div>
                  <div class="feature_card-background-layer gradient bottom-left"></div>
                  <div class="feature_card-background-layer-conic _3"></div>
                </div>
                <div class="features_card-wrap">
                  <div class="features_card _4">
                    <div class="feature_card-content-wrap _4">
                      <div class="features_card-header margin-bottom-0">
                        <div class="features_card-text-contain">
                          <h3 class="heading-style-h5 features_card-heading">Custom Tags</h3>
                          <div class="text-size-regular features_card-desc">Keep track of everyone&#x27;s unique skills.</div>
                        </div>
                        <div class="features_card-add-button"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/66780434a70e8634bbc36804_Frame%203666.svg" loading="lazy" alt="" class="image-100" /></div>
                      </div>
                      <div class="features_card-canvas"></div>
                    </div>
                    <div class="feature_card-background-layer"></div>
                    <div class="feature_card-background-layer gradient top-right"></div>
                    <div class="feature_card-background-layer-conic _4"></div>
                  </div>
                  <div data-w-id="d4f25a0f-1f9a-2fe3-b611-77233a796fbf" class="features_card _5">
                    <div class="feature_card-logos-contain">
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _1 w-embed"><svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2222 200H177.778C190.051 200 200 190.051 200 177.778V22.2222C200 9.94923 190.051 0 177.778 0H22.2222C9.94923 0 0 9.94923 0 22.2222V177.778C0 190.051 9.94923 200 22.2222 200Z" fill="#007EBB" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M172.223 172.222H142.544V121.672C142.544 107.813 137.278 100.068 126.309 100.068C114.375 100.068 108.14 108.128 108.14 121.672V172.222H79.5381V75.9259H108.14V88.897C108.14 88.897 116.74 72.9839 137.175 72.9839C157.6 72.9839 172.223 85.4568 172.223 111.253V172.222ZM45.4159 63.3166C35.6734 63.3166 27.7788 55.3601 27.7788 45.5472C27.7788 35.7343 35.6734 27.7777 45.4159 27.7777C55.1584 27.7777 63.0483 35.7343 63.0483 45.5472C63.0483 55.3601 55.1584 63.3166 45.4159 63.3166ZM30.647 172.222H60.4716V75.9259H30.647V172.222Z" fill="white" />
                          </svg></div>
                      </div>
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _2 w-embed"><svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_6846)">
                              <path d="M152.632 47.368L105.264 42.105L47.369 47.368L42.105 100L47.368 152.632L100 159.211L152.632 152.632L157.895 98.685L152.632 47.368Z" fill="white" />
                              <path d="M68.961 129.026C65.027 126.368 62.303 122.487 60.816 117.355L69.948 113.592C70.777 116.75 72.224 119.197 74.29 120.934C76.343 122.671 78.843 123.526 81.764 123.526C84.751 123.526 87.317 122.618 89.461 120.802C91.605 118.986 92.685 116.67 92.685 113.868C92.685 111 91.553 108.657 89.29 106.842C87.027 105.027 84.185 104.118 80.79 104.118H75.514V95.079H80.25C83.171 95.079 85.632 94.29 87.632 92.711C89.632 91.132 90.632 88.974 90.632 86.224C90.632 83.777 89.737 81.829 87.948 80.369C86.159 78.909 83.895 78.172 81.145 78.172C78.461 78.172 76.329 78.883 74.75 80.317C73.171 81.751 72.026 83.514 71.303 85.593L62.264 81.83C63.461 78.435 65.659 75.435 68.882 72.843C72.106 70.251 76.224 68.948 81.224 68.948C84.921 68.948 88.25 69.659 91.198 71.093C94.145 72.527 96.461 74.514 98.132 77.04C99.803 79.579 100.632 82.422 100.632 85.579C100.632 88.803 99.856 91.526 98.303 93.763C96.75 96 94.842 97.71 92.579 98.908V99.447C95.566 100.697 98 102.605 99.921 105.171C101.829 107.737 102.789 110.803 102.789 114.382C102.789 117.961 101.881 121.158 100.065 123.961C98.249 126.764 95.736 128.974 92.552 130.579C89.355 132.184 85.763 133 81.776 133C77.158 133.013 72.895 131.684 68.961 129.026Z" fill="#1A73E8" />
                              <path d="M125 83.711L115.026 90.961L110.013 83.356L128 70.382H134.895V131.579H125V83.711Z" fill="#1A73E8" />
                              <path d="M152.632 200L200 152.632L176.316 142.106L152.632 152.632L142.106 176.316L152.632 200Z" fill="#EA4335" />
                              <path d="M36.842 176.316L47.368 200H152.631V152.632H47.368L36.842 176.316Z" fill="#34A853" />
                              <path d="M15.789 0C7.066 0 0 7.066 0 15.789V152.631L23.684 163.157L47.368 152.631V47.368H152.631L163.157 23.684L152.632 0H15.789Z" fill="#4285F4" />
                              <path d="M0 152.632V184.211C0 192.935 7.066 200 15.789 200H47.368V152.632H0Z" fill="#188038" />
                              <path d="M152.632 47.368V152.631H200V47.368L176.316 36.842L152.632 47.368Z" fill="#FBBC04" />
                              <path d="M200 47.368V15.789C200 7.065 192.934 0 184.211 0H152.632V47.368H200Z" fill="#1967D2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_6846">
                                <rect width="200" height="200" fill="white" />
                              </clipPath>
                            </defs>
                          </svg></div>
                      </div>
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _3 w-embed"><svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_6861)">
                              <path d="M155.952 0H44.0476C19.7208 0 0 19.7208 0 44.0476V155.952C0 180.279 19.7208 200 44.0476 200H155.952C180.279 200 200 180.279 200 155.952V44.0476C200 19.7208 180.279 0 155.952 0Z" fill="url(#paint0_linear_1_6861)" />
                              <path d="M100 34.6218C80.531 34.622 61.8596 41.0639 48.093 52.5305C34.3263 63.9972 26.5923 79.5493 26.5922 95.7656C26.6099 106.313 29.9033 116.678 36.1523 125.852C42.4013 135.026 51.3934 142.698 62.2547 148.122C59.3619 154.598 55.0234 160.671 49.4187 166.089C60.2875 164.181 70.4902 160.173 79.2328 154.377C85.9738 156.045 92.9677 156.898 100 156.909C119.469 156.909 138.14 150.467 151.907 139.001C165.674 127.534 173.408 111.982 173.408 95.7656C173.408 79.5493 165.674 63.9972 151.907 52.5305C138.14 41.0639 119.469 34.622 100 34.6218Z" fill="white" />
                            </g>
                            <defs>
                              <linearGradient id="paint0_linear_1_6861" x1="101.587" y1="186.724" x2="101.587" y2="24.8209" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0CBD2A" />
                                <stop offset="1" stop-color="#5BF675" />
                              </linearGradient>
                              <clipPath id="clip0_1_6861">
                                <rect width="200" height="200" fill="white" />
                              </clipPath>
                            </defs>
                          </svg></div>
                      </div>
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _4 w-embed"><svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46.0743 0.332275H153.925C179.267 0.332275 199.668 20.7332 199.668 46.0744V153.926C199.668 179.267 179.267 199.668 153.925 199.668H46.0743C20.7331 199.668 0.332031 179.267 0.332031 153.926V46.0744C0.332031 20.7332 20.7331 0.332275 46.0743 0.332275Z" fill="url(#paint0_linear_1_6873)" />
                            <path d="M44.0058 57.0178C42.9556 57.0178 41.9661 57.199 41.0297 57.5715L59.7866 76.8822L78.7511 96.5389L79.0972 96.9541L79.6509 97.5079L80.2046 98.0616L81.312 99.2382L97.5773 115.919C97.8481 116.087 98.6329 116.814 99.246 117.12C100.036 117.515 100.892 117.879 101.774 117.911C102.726 117.945 103.7 117.672 104.556 117.255C105.198 116.943 105.484 116.496 106.229 115.919L125.055 96.4697L144.089 76.8822L162.431 57.9868C161.253 57.3488 159.949 57.0178 158.555 57.0178H44.0058ZM38.2611 59.3711C36.2608 61.2664 35.0081 64.1157 35.0081 67.3307V130.73C35.0081 133.334 35.8442 135.698 37.2229 137.513L39.853 135.022L59.4405 115.988L76.8132 99.169L76.4671 98.7537L57.4333 79.1662L38.3995 59.5095L38.2611 59.3711ZM164.922 59.994L146.373 79.1662L127.408 98.7537L127.062 99.0998L145.127 116.611L164.715 135.645L165.891 136.752C166.946 135.06 167.552 132.975 167.552 130.73V67.3307C167.552 64.464 166.559 61.8646 164.922 59.994ZM79.028 101.453L61.7246 118.272L42.0679 137.306L39.5762 139.728C40.8898 140.574 42.3847 141.113 44.0058 141.113H158.555C160.504 141.113 162.271 140.363 163.746 139.175L162.5 137.929L142.843 118.895L124.778 101.453L108.513 118.203C107.633 118.786 107.044 119.434 106.185 119.831C104.801 120.471 103.285 121.012 101.761 120.989C100.233 120.965 98.7349 120.367 97.3635 119.693C96.6752 119.354 96.3083 119.018 95.5009 118.341L79.028 101.453Z" fill="white" />
                            <defs>
                              <linearGradient id="paint0_linear_1_6873" x1="101.395" y1="198.868" x2="101.589" y2="2.73872" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#70EFFF" />
                                <stop offset="1" stop-color="#5770FF" />
                              </linearGradient>
                            </defs>
                          </svg></div>
                      </div>
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _5 w-embed"><svg width="100%" height="100%" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_6834)">
                              <path d="M200 62.5648C200 60.1759 200 57.787 199.991 55.3981C199.981 53.3889 199.954 51.3704 199.898 49.3611C199.778 44.9815 199.519 40.5556 198.741 36.2222C197.954 31.8241 196.657 27.7315 194.62 23.7315C192.62 19.8056 190.009 16.213 186.898 13.0926C183.778 9.98148 180.194 7.37037 176.259 5.37037C172.269 3.33333 168.176 2.0463 163.778 1.25926C159.444 0.481482 155.019 0.222222 150.639 0.101852C148.63 0.0462963 146.611 0.0277778 144.602 0.00925926C142.213 0 139.824 0 137.435 0H62.5648C60.1759 0 57.787 0 55.3981 0.00925926C53.3889 0.0185185 51.3704 0.0462963 49.3611 0.101852C44.9815 0.222222 40.5556 0.481482 36.2222 1.25926C31.8241 2.0463 27.7315 3.34259 23.7407 5.37037C19.8148 7.37037 16.213 9.98148 13.1019 13.0926C9.98148 16.213 7.37963 19.7963 5.37963 23.7315C3.34259 27.7315 2.05556 31.8241 1.25926 36.2222C0.481482 40.5556 0.222222 44.9815 0.111111 49.3611C0.0555556 51.3704 0.0277778 53.3889 0.0185185 55.3981C0 57.787 0 60.1759 0 62.5648V137.435C0 139.824 0 142.213 0.0185185 144.602C0.0277778 146.611 0.0555556 148.63 0.111111 150.639C0.231481 155.019 0.490741 159.444 1.26852 163.778C2.05556 168.176 3.35185 172.278 5.38889 176.269C7.38889 180.194 10 183.787 13.1111 186.898C16.2222 190.019 19.8148 192.63 23.75 194.63C27.7407 196.667 31.8333 197.954 36.2315 198.741C40.5648 199.519 44.9907 199.778 49.3704 199.898C51.3796 199.954 53.3981 199.972 55.4074 199.991C57.7963 200 60.1852 200 62.5741 200H137.444C139.833 200 142.222 200 144.611 199.991C146.62 199.981 148.639 199.954 150.648 199.898C155.028 199.778 159.454 199.519 163.787 198.741C168.185 197.954 172.278 196.657 176.269 194.63C180.194 192.63 183.787 190.019 186.907 186.898C190.028 183.787 192.63 180.194 194.63 176.269C196.667 172.269 197.954 168.176 198.75 163.778C199.528 159.444 199.787 155.028 199.907 150.639C199.963 148.63 199.981 146.611 200 144.602C200.009 142.213 200.009 139.824 200.009 137.435V62.5648H200Z" fill="white" />
                              <path d="M74.6481 163.62V70.574H70.7407L47.037 86.2684V90.2406L70.4722 74.898H70.7499V163.63H74.6481V163.62Z" fill="black" />
                              <path d="M97.8052 70.5742V74.139H148.916V74.4168L107.87 163.63H112.259L152.963 74.3427V70.5742H97.8052Z" fill="black" />
                              <path d="M36.3425 52.3242V32.2038H36.4166L44.3703 50.2686H47.0092L54.9351 32.2038H55.0277V52.3242H57.6666V25.676H54.8703L45.7407 47.0279H45.6666L36.5092 25.6853H33.7129V52.3242H36.3425Z" fill="#FF0000" />
                              <path d="M72.0092 31.537C66.4444 31.537 63.3518 35.5833 63.3518 41.0648V43.074C63.3518 48.5833 66.4166 52.6481 72.0092 52.6481C77.5925 52.6481 80.6388 48.5833 80.6388 43.074V41.0648C80.6481 35.5833 77.5555 31.537 72.0092 31.537ZM72.0092 34.0555C75.6388 34.0555 77.7685 36.7685 77.7685 41.2037V42.9259C77.7685 47.3796 75.6388 50.0925 72.0092 50.0925C68.3518 50.0925 66.2314 47.3611 66.2314 42.9259V41.2037C66.2314 36.7777 68.3611 34.0555 72.0092 34.0555Z" fill="#FF0000" />
                              <path d="M86.0184 52.3245H88.8888V39.7967C88.8888 36.8708 90.4907 34.1671 94.2407 34.1671C97.4444 34.1671 99.4999 36.1023 99.4999 39.593V52.306H102.37V39.1578C102.37 34.1948 99.2221 31.5189 95.0092 31.5189C91.6481 31.5189 89.7314 33.2782 88.9721 34.6486H88.8888V31.8523H86.0184V52.3245Z" fill="#FF0000" />
                              <path d="M115.583 31.5188C110.5 31.5188 107.398 35.4817 107.398 41.028V43.1206C107.398 48.7688 110.268 52.6299 115.583 52.6299C118.518 52.6299 120.62 51.1484 121.713 49.1299H121.787V52.3151H124.5V24.2502H121.63V34.7965H121.555C120.565 33.028 118.454 31.5188 115.583 31.5188ZM115.843 34.0836C119.472 34.0836 121.704 36.9354 121.704 41.1577V43.0558C121.704 47.4539 119.537 50.0836 115.88 50.0836C112.639 50.0836 110.278 47.7225 110.278 43.0373V41.1854C110.268 36.4077 112.676 34.0836 115.843 34.0836Z" fill="#FF0000" />
                              <path d="M142.268 49.6666H142.342V52.324H145.139V38.1018C145.139 33.8981 142.055 31.537 137.796 31.537C133.055 31.537 130.611 34.0185 130.37 37.574H133.083C133.315 35.4074 134.861 34.0185 137.676 34.0185C140.583 34.0185 142.268 35.5648 142.268 38.4351V40.6388H136.703C132.037 40.6574 129.574 42.9259 129.574 46.4629C129.574 50.2129 132.287 52.6574 136.259 52.6574C139.379 52.6481 141.287 51.3055 142.268 49.6666ZM136.935 50.1759C134.629 50.1759 132.537 48.9444 132.537 46.4074C132.537 44.4166 133.805 42.9907 136.796 42.9907H142.268V45.5092C142.268 48.2592 139.981 50.1759 136.935 50.1759Z" fill="#FF0000" />
                              <path d="M166.287 31.8705H163.222L157.38 48.9816H157.278L151.435 31.8705H148.241L155.88 52.6483L155.491 53.8983C154.889 56.0094 153.852 57.2409 151.445 57.2409C151 57.2409 150.269 57.1853 149.945 57.1205V59.5649C150.454 59.639 151.213 59.7223 151.898 59.7223C155.88 59.7223 157.25 56.9909 158.324 54.0371L158.908 52.5094L166.287 31.8705Z" fill="#FF0000" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_6834">
                                <rect width="200" height="200" fill="white" />
                              </clipPath>
                            </defs>
                          </svg></div>
                      </div>
                      <div class="feature_card-logo-wrap">
                        <div class="feature_card-logo _6 w-embed"><svg width="100%" height="100%" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_217_338)">
                              <path d="M68 0H12C5.37258 0 0 5.37258 0 12V68C0 74.6274 5.37258 80 12 80H68C74.6274 80 80 74.6274 80 68V12C80 5.37258 74.6274 0 68 0Z" fill="#25D366" />
                              <path d="M19.2186 61.4062L21.4061 51.2499C18.5946 46.8153 17.4977 41.5071 18.3215 36.3214C19.1452 31.1356 21.8329 26.4286 25.8803 23.0835C29.9277 19.7384 35.0566 17.9851 40.3047 18.1526C45.5528 18.32 50.5595 20.3968 54.3854 23.9931C58.2112 27.5894 60.5934 32.4582 61.0848 37.6859C61.5763 42.9137 60.1433 48.1411 57.0547 52.3874C53.9661 56.6338 49.4342 59.6072 44.3093 60.7499C39.1843 61.8925 33.8185 61.1258 29.2186 58.5937L19.2186 61.4062Z" fill="#25D366" stroke="white" stroke-width="4.0625" />
                              <path d="M48.1251 42.6564C47.6563 42.3439 47.1876 42.1876 46.7188 42.8126L44.8438 45.3126C44.3751 45.6251 44.0626 45.7814 43.4376 45.4689C41.0938 44.2189 37.8126 42.8126 35.0001 38.1251C34.8438 37.5001 35.1563 37.1876 35.4688 36.8751L36.8751 34.6876C37.1876 34.3751 37.0313 34.0626 36.8751 33.7501L35.0001 29.2189C34.5313 27.9689 34.0626 28.1251 33.5938 28.1251H32.3438C32.0313 28.1251 31.4063 28.2814 30.7813 28.9064C27.3438 32.3439 28.7501 37.1876 31.2501 40.3126C31.7188 40.9376 34.8438 46.5626 41.5626 49.5314C46.5626 51.7189 47.6563 51.4064 49.0626 51.0939C50.7813 50.9376 52.5001 49.5314 53.2813 48.1251C53.4376 47.6564 54.2188 45.6251 53.5938 45.3126" fill="white" />
                            </g>
                            <defs>
                              <clipPath id="clip0_217_338">
                                <rect width="80" height="80" fill="white" />
                              </clipPath>
                            </defs>
                          </svg></div>
                      </div>
                    </div>
                    <div class="feature_card-background-layer"></div>
                    <div class="feature_card-background-layer"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="network_section-radial-gradient"></div><canvas class="confetti-canvas"></canvas>
      </section>
      <section class="footer_section">
        <div class="padding-global">
          <div class="container-large footer_container-large">
            <div class="padding-section-large footer_container">
              <div class="cta_text-container">
                <h2 class="heading-style-h2 cta_heading">Be the first to get access</h2>
                <p class="text-size-large cta_paragraph">You can&#x27;t wait any longer, just like us? Then sign up to our waitlist to be one of the first beta users.</p>
                <div class="waitlist-form_block_2 w-form">
                  <form id="wf-form-Waitlist-Form-2" name="wf-form-Waitlist-Form-2-2" data-name="Waitlist Form 2" method="get" class="waitlist-form-2" data-wf-page-id="666d9a8012932ba246bcf004" data-wf-element-id="f9303186-7df0-964e-ae74-89e1a774492a">
                    <div class="w-embed">
                      <style>
                        .waitlist-form_conic-gradient-layer {
                          background: conic-gradient(from 0deg at 50% 49%, rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0.9), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0), rgba(146, 119, 253, 0));
                        }
                      </style>
                    </div>
                    <div class="waitlist-form_conic-gradient-layer"></div>
                    <div class="waitlist-form_outer-container">
                      <div class="waitlist-form_content-layer"><input class="waitlist-form_input w-input" maxlength="256" name="Email-Address-2" data-name="Email Address 2" placeholder="Email Address" type="email" id="Email-Address" required="" /><input type="submit" data-wait="Please wait..." data-identifier="confetti-button" class="waitlist-form_button w-button" value="Join Waitlist" /></div>
                      <div class="waitilist-form_dark-layer"></div>
                    </div>
                  </form>
                  <div class="form_success-message w-form-done">
                    <div class="form_state-outer-wrap">
                      <div class="form-state_wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/669724279ac354fe13e9956b_%F0%9F%A5%B3.webp" loading="lazy" alt="" class="form-state-icon_image" />
                        <div class="text-size-small form-state-text">You are all set!</div><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697243c892b2be30310280e_%F0%9F%91%80.webp" loading="lazy" alt="" class="form-state-icon_image" />
                        <div class="text-size-small form-state-text">Look out for your emails.</div>
                      </div>
                      <div class="waitilist-form_dark-layer"></div>
                    </div>
                  </div>
                  <div class="form-error_wrapper w-form-fail">
                    <div class="form-state_wrapper error-state"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666db69b47fae1760ab27db3_Frame%203732.webp" loading="lazy" alt="" class="form-state-icon_image" />
                      <div class="text-size-tiny">We need a valid email address</div>
                    </div>
                  </div>
                </div>
              </div>
              <div data-w-id="3aced8c4-eebc-ecaf-bada-502439e3a03a" class="cta-bg_elements-wrapper"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image.png" loading="lazy" sizes="(max-width: 1279px) 100vw, 1360px" srcset="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image-p-500.webp 500w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image-p-800.webp 800w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image-p-1080.webp 1080w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image-p-1600.webp 1600w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image-p-2000.webp 2000w, https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/6697551dfdf512f999f5edbd_bg%20image.png 2720w" alt="" class="cta-bg_image" /></div>
              <div class="footer-bottom_container">
                <div class="footer-bottom-left_container">
                  <div class="footer-bottom-top-left_container"><a href="/" aria-current="page" class="brand-logo_link w-nav-brand w--current"><img src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/666da543a64fa48924cb26de_Group%203796.svg" loading="lazy" alt="" class="brand-logo_image" /></a></div>
                  <div class="text-size-small footer_copywrite-text">© 2024 table</div>
                </div>
                <div class="footer-bottom-right_container">
                  <div class="social-links_container"><a href="https://www.linkedin.com/company/usetable/" target="_blank" class="social-link_wrapper w-inline-block">
                      <div class="social-icon_embed w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_269_4111)">
                            <path d="M22.2234 0H1.77187C0.792187 0 0 0.773438 0 1.72969V22.2656C0 23.2219 0.792187 24 1.77187 24H22.2234C23.2031 24 24 23.2219 24 22.2703V1.72969C24 0.773438 23.2031 0 22.2234 0ZM7.12031 20.4516H3.55781V8.99531H7.12031V20.4516ZM5.33906 7.43438C4.19531 7.43438 3.27188 6.51094 3.27188 5.37187C3.27188 4.23281 4.19531 3.30937 5.33906 3.30937C6.47813 3.30937 7.40156 4.23281 7.40156 5.37187C7.40156 6.50625 6.47813 7.43438 5.33906 7.43438ZM20.4516 20.4516H16.8937V14.8828C16.8937 13.5563 16.8703 11.8453 15.0422 11.8453C13.1906 11.8453 12.9094 13.2938 12.9094 14.7891V20.4516H9.35625V8.99531H12.7687V10.5609H12.8156C13.2891 9.66094 14.4516 8.70938 16.1813 8.70938C19.7859 8.70938 20.4516 11.0813 20.4516 14.1656V20.4516V20.4516Z" fill="currentColor" />
                          </g>
                          <defs>
                            <clipPath id="clip0_269_4111">
                              <rect width="24" height="24" fill="white" />
                            </clipPath>
                          </defs>
                        </svg></div>
                    </a><a href="https://x.com/usetable" target="_blank" class="social-link_wrapper w-inline-block">
                      <div class="social-icon_embed w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_269_4112)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0H0V24H24V0ZM4 5H9.11097L12.7551 9.8135L16.7424 5.09347H19.3631L13.9939 11.4494L13.9829 11.4352L20.2188 19.672H15.1078L11.2984 14.6403L7.00834 19.7188H4.38766L10.0598 13.0042L4 5ZM8.4123 6.4018H6.82117L15.8065 18.2702H17.3976L8.4123 6.4018Z" fill="currentColor" />
                          </g>
                          <defs>
                            <clipPath id="clip0_269_4112">
                              <rect width="24" height="24" rx="3" fill="white" />
                            </clipPath>
                          </defs>
                        </svg></div>
                    </a><a href="https://www.youtube.com/channel/UCQZuZPqLP3WFklHWc0_wVvw" target="_blank" class="social-link_wrapper w-inline-block">
                      <div class="social-icon_embed w-embed"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M23.7609 7.1998C23.7609 7.1998 23.5266 5.54512 22.8047 4.81855C21.8906 3.8623 20.8688 3.85762 20.4 3.80137C17.0438 3.55762 12.0047 3.55762 12.0047 3.55762H11.9953C11.9953 3.55762 6.95625 3.55762 3.6 3.80137C3.13125 3.85762 2.10938 3.8623 1.19531 4.81855C0.473438 5.54512 0.24375 7.1998 0.24375 7.1998C0.24375 7.1998 0 9.14512 0 11.0857V12.9045C0 14.8451 0.239062 16.7904 0.239062 16.7904C0.239062 16.7904 0.473437 18.4451 1.19062 19.1717C2.10469 20.1279 3.30469 20.0951 3.83906 20.1982C5.76094 20.3811 12 20.4373 12 20.4373C12 20.4373 17.0438 20.4279 20.4 20.1889C20.8688 20.1326 21.8906 20.1279 22.8047 19.1717C23.5266 18.4451 23.7609 16.7904 23.7609 16.7904C23.7609 16.7904 24 14.8498 24 12.9045V11.0857C24 9.14512 23.7609 7.1998 23.7609 7.1998ZM9.52031 15.1123V8.36699L16.0031 11.7514L9.52031 15.1123Z" fill="currentColor" />
                        </svg></div>
                    </a></div>
                  <div class="footer-bottom_right-links-contain"><a href="/terms-of-service" class="text-size-small is-link">Terms</a><a href="/privacy-policy" class="text-size-small is-link">Privacy</a><a href="/imprint" class="text-size-small is-link">Imprint</a></div>
                </div>
              </div>
              <div class="footer-spotlight"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="w-embed w-script">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/matter-js/0.19.0/matter.min.js" integrity="sha512-0z8URjGET6GWnS1xcgiLBZBzoaS8BNlKayfZyQNKz4IRp+s7CKXx0yz7Eco2+TcwoeMBa5KMwmTX7Kus7Fa5Uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

      <script src="https://table.nyc3.cdn.digitaloceanspaces.com/js/gravity-new-9.js"> </script>

      <script>
        //src="https://glglwv.csb.app/table/tableScrollSlide.js"
        document.addEventListener("DOMContentLoaded", () => {
          const initializeHorizontalScroll = () => {
            const updateSliderPagination = (animationProgress) => {
              let allPaginationDots = document.querySelectorAll(
                ".crm-slider_pagination-dot"
              );
              if (animationProgress < 0.14) {
                allPaginationDots.forEach((paginationDot) => {
                  paginationDot.classList.remove("active");
                  paginationDot
                    .querySelector(".crm-slider_pagination-dot-text")
                    .classList.add("hide");
                });
                allPaginationDots[0].classList.add("active");
                allPaginationDots[0]
                  .querySelector(".crm-slider_pagination-dot-text")
                  .classList.remove("hide");
              }
              if (animationProgress > 0.14 && animationProgress < 0.32) {
                allPaginationDots.forEach((paginationDot) => {
                  paginationDot.classList.remove("active");
                  paginationDot
                    .querySelector(".crm-slider_pagination-dot-text")
                    .classList.add("hide");
                });
                allPaginationDots[1].classList.add("active");
                allPaginationDots[1]
                  .querySelector(".crm-slider_pagination-dot-text")
                  .classList.remove("hide");
              }
              if (animationProgress > 0.32 && animationProgress < 0.57) {
                allPaginationDots.forEach((paginationDot) => {
                  paginationDot.classList.remove("active");
                  paginationDot
                    .querySelector(".crm-slider_pagination-dot-text")
                    .classList.add("hide");
                });
                allPaginationDots[2].classList.add("active");
                allPaginationDots[2]
                  .querySelector(".crm-slider_pagination-dot-text")
                  .classList.remove("hide");
              }
              if (animationProgress > 0.57) {
                allPaginationDots.forEach((paginationDot) => {
                  paginationDot.classList.remove("active");
                  paginationDot
                    .querySelector(".crm-slider_pagination-dot-text")
                    .classList.add("hide");
                });
                allPaginationDots[3].classList.add("active");
                allPaginationDots[3]
                  .querySelector(".crm-slider_pagination-dot-text")
                  .classList.remove("hide");
              }
            };

            const crmSliderSwiper = document.querySelector(".crm-slider_swiper");
            const crmSliderSwiperWrapper = document.querySelector(
              ".crm-slider_swiper-wrapper"
            );
            let crmSlideReference = document.querySelector(".swiper-slide");
            let crmSlideBlank = document.querySelector(".swiper-blank-slide");

            let blankSlideWidth =
              crmSliderSwiper.offsetWidth - crmSlideReference.offsetWidth - 80;
            //   console.log("blank width: ", blankSlideWidth);
            crmSlideBlank.style.width = `${blankSlideWidth}px`;
            console.log(
              crmSliderSwiper.offsetWidth,
              crmSliderSwiperWrapper.offsetWidth
            );
            let distanceToMove =
              crmSliderSwiper.offsetWidth - crmSliderSwiperWrapper.offsetWidth;
            console.log(distanceToMove);
            const crmSliderTl = gsap.timeline({
              scrollTrigger: {
                trigger: "#crm-slider_section-container", // Trigger the animation when the section comes into view
                start: "top top-=30%", // Start the animation when the top of the section hits 80% of the viewport
                end: "bottom bottom", // End the animation when the top of the section hits 20% of the viewport
                scrub: true, // Smooth scrubbing, takes 1 second to "catch up" to the scrollbar
                // markers: true, // Enable markers for debugging
              },
            });

            crmSliderTl.to(crmSliderSwiperWrapper, {
              duration: 3,
              // opacity: 1, // Fade in the section
              x: distanceToMove, // Move the section up by 50px
              // ease: "expo.out", // Use easing for a smooth animation,
              onUpdate: () => {
                const progress = crmSliderTl.progress();
                // console.log(progress);
                updateSliderPagination(progress);
              },
            });
          };

          let screenWidth = window.screen.width;
          if (screenWidth > 990) {
            initializeHorizontalScroll();
          }
        });
      </script>

      <script>
        //src="https://glglwv.csb.app/table/tableFooter2.js"
        document.addEventListener("DOMContentLoaded", () => {
          let screenWidth = window.screen.width;
          if (screenWidth > 991) {
            const footerSection = document.querySelector(".footer_section");

            const footerSpotlight = document.querySelector(".footer-spotlight");

            const rect = footerSection.getBoundingClientRect();
            const x = footerSection.clientX - rect.left;
            const y = footerSection.clientY - rect.top;
            footerSpotlight.style.background = `radial-gradient(circle at 50% 50%,
    transparent 0px,
    #A88BF6 0px)`;

            footerSection.addEventListener("mousemove", (e) => {
              setTimeout(() => {
                const rect = footerSection.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                if (y < 0) {
                  footerSpotlight.style.background = `radial-gradient(circle at 50% 50%,
                  transparent 0px,
                  #A88BF6 0px)`;
                } else {
                  footerSpotlight.style.background = `radial-gradient(circle at ${x}px ${y}px, 
                                    transparent 130px, 
                                    rgba(168, 139, 246, 0.2) 140px,
                                    rgba(168, 139, 246, 0.5) 150px, 
                                    rgba(168, 139, 246, 0.7) 160px, 
                                    #A88BF6 170px)`;
                }
              }, 90);
            });
          }
        });
      </script>





      <script>
        //src="https://glglwv.csb.app/table/tableDynamicSticky.js"
        document.addEventListener("DOMContentLoaded", () => {
          const initalizeDynamicSticky = () => {
            let scrollStickySectionContainer = document.querySelector(
              ".rel_content-contain"
            );
            let scrollStickySectionWrapper = document.querySelector(
              ".rel_content-outer-wrapper"
            );
            let scrollStickySectionWrapperHeight =
              scrollStickySectionWrapper.offsetHeight;

            let scrollStickySectionHeader = document.querySelector(".rel_header");
            let scrollStickySectionHeaderHeight =
              scrollStickySectionHeader.offsetHeight + 80;

            let screenHeight = window.innerHeight;

            let difference = screenHeight - scrollStickySectionWrapperHeight;
            console.log(
              "screenheight: ",
              screenHeight,
              "scrollsectionheight: ",
              scrollStickySectionWrapperHeight,
              "scrollStickySectionWrapperHeight",
              scrollStickySectionHeaderHeight,
              "difference",
              difference
            );
            if (difference > 0) {
              let stickyValue = "0px";
              stickyValue = difference / 2 + "px";
              scrollStickySectionContainer.style.top = stickyValue;
              if (scrollStickySectionHeaderHeight <= difference / 2) {
                scrollStickySectionHeader.style.position = "sticky";
                scrollStickySectionHeader.style.top =
                  difference / 2 - scrollStickySectionHeaderHeight + "px";
              }
            }

            let crmSliderContainer = document.querySelector(".crm-slider_container");
            let crmSliderContainerHeight = crmSliderContainer.offsetHeight;

            let crmSliderContainerDifference = screenHeight - crmSliderContainerHeight;

            if (crmSliderContainerDifference > 0) {
              let stickyValue = "0px";
              stickyValue = crmSliderContainerDifference / 2 + "px";
              crmSliderContainer.style.top = stickyValue;
            }
          };
          let screenWidth = window.innerWidth;
          if (screenWidth > 990) {
            initalizeDynamicSticky();
          }
          window.addEventListener("resize", () => {
            let screenWidth = window.innerWidth;
            if (screenWidth > 990) {
              initalizeDynamicSticky();
            }
          });
        });
      </script>







      <script>
        //src="https://glglwv.csb.app/table/aiSwiper.js"
        const initAiSwiper = () => {
          var menu = ["Chat Bot", "Search CRM", "Reminders", "Add People"];
          const aiSwiper = new Swiper("#aiSwiper", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            slidesPerView: 1,
            // centeredSlides: true,
            spaceBetween: 20,

            // autoplay: {
            //   delay: 2000,
            // },

            pagination: {
              el: ".ai_swiper-pagination",
              clickable: true,
              renderBullet: function(index, className) {
                return `<div class="${className}">
        <div class="ai-swiper-pagination-bullet-text">${menu[index]}</div>
      </div>`;
              },
            },
            breakpoints: {
              // when window width is >= 320px
              480: {
                slidesPerView: 1.2,
                spaceBetween: 40,
              },
              620: {
                slidesPerView: 1.5,
                spaceBetween: 40,
              },
              780: {
                slidesPerView: 2,
                spaceBetween: 40,
                // centeredSlides: true,
              },
            },
          });
        };

        let screenWidth = window.innerWidth;
        if (screenWidth < 991) {
          initAiSwiper();
        }

        // window.addEventListener("resize", () => {
        //   let screenWidth = window.innerWidth;
        //   if (screenWidth < 991) {
        //     initAiSwiper();
        //   }
        // });
      </script>





      <script>
        //src="https://glglwv.csb.app/table/relSwiper.js"
        const initRelSwiper = () => {
          // var menu = ["Chat Bot", "Search CRM", "Reminders", "Add People"];
          const relSwiper = new Swiper("#relSwiper", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            slidesPerView: 1,
            // centeredSlides: true,
            spaceBetween: 20,

            autoplay: {
              delay: 2000,
            },

            pagination: {
              el: ".rel_swiper-pagination",
              clickable: true,
              renderBullet: function(index, className) {
                return `<div class="${className}">
        </div>`;
              },
            },
            breakpoints: {
              // when window width is >= 320px
              480: {
                slidesPerView: 1.2,
                spaceBetween: 32,
              },
              620: {
                slidesPerView: 1.5,
                spaceBetween: 32,
              },
              780: {
                slidesPerView: 2,
                spaceBetween: 32,
                // centeredSlides: true,
              },
            },
          });
        };

        // let screenWidth = window.innerWidth;
        if (screenWidth < 991) {
          initRelSwiper();
        }

        // window.addEventListener("resize", () => {
        //   let screenWidth = window.innerWidth;
        //   if (screenWidth < 991) {
        //     initRelSwiper();
        //   }
        // });
      </script>




      <script>
        //src="https://glglwv.csb.app/table/customLottie.js"
        let aiSwiperContainer = document.querySelector(".ai-swiper-active-window");
        let aiSwiperSlides = document.querySelectorAll(".crm-slider_swiper-slide");

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.intersectionRatio >= 0.5) {
                entry.target.querySelector(".custom-lottie-player").play();
              }
            });
          }, {
            threshold: [1],
          }
        );

        // Observe each target element
        aiSwiperSlides.forEach((aiSwiperSlide) => {
          observer.observe(aiSwiperSlide);
        });
      </script>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=666d9a8012932ba246bcefba" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.prod.website-files.com/666d9a8012932ba246bcefba/js/webflow.796f547e1.js" type="text/javascript"></script>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK3SLVWW"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
  <script>
    function myConfetti() {
      var end = Date.now() + (5 * 1000);
      var colors = ['#8f00ff', '#fbf9fc'];
      var canvas = document.querySelector('.confetti-canvas');

      // Set canvas display to flex
      canvas.style.display = 'flex';

      var myConfetti = confetti.create(canvas, {
        resize: true,
        useWorker: true
      });

      (function frame() {
        myConfetti({
          particleCount: 2,
          angle: 60,
          spread: 40,
          origin: {
            x: 0
          },
          colors: colors
        });
        myConfetti({
          particleCount: 2,
          angle: 120,
          spread: 40,
          origin: {
            x: 1
          },
          colors: colors
        });

        if (Date.now() < end) {
          requestAnimationFrame(frame);
        }
      }());
    }

    let allWaitListForms = document.querySelectorAll('.waitlist-form, .waitlist-form-2');

    allWaitListForms.forEach(waitListForm => {
      waitListForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent default form submission

        // Assuming form submission is successful
        myConfetti();
      });
    });
  </script>

  <!-- Add email as hidden input to phone form -->

  <script>
    // JavaScript to handle form submission and popup
    document.getElementById('wf-form-Waitlist-Form').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting the default way

      // Get the email value from the form
      var email = document.getElementById('Email-Address-2').value;

      // Set the email value in the hidden field of the popup form
      document.getElementById('hiddenEmail').value = email;

      // Show the popup
      document.getElementById('phone-modal').style.display = 'flex';
    });
  </script>

  <!-- Add email as hidden input to phone form -->

  <script>
    // JavaScript to handle form submission and popup
    document.getElementById('wf-form-Waitlist-Form-2').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting the default way

      // Get the email value from the form
      var email = document.getElementById('Email-Address').value;

      // Set the email value in the hidden field of the popup form
      document.getElementById('hiddenEmail').value = email;

      // Show the popup
      document.getElementById('phone-modal').style.display = 'flex';
    });
  </script>

</body>

</html>