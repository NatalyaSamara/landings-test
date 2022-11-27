<!DOCTYPE html>
<html lang="en" data-offcanvas-container="" class="" data-offcanvas-hidden="true" style="--vh:8.24px;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible"><!-- Meta tags-->
    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="keywords">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="robots" content="noodp, noydir">
    <title>{{ $meta['title'] }}</title>
    <link href="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/stylesheets/form-main-page-critical.css" rel="stylesheet"><!-- Styles-->
    <link href="https://cdn.uslegal.com" rel="preconnect">
    <link href="https://cdn.uslegal.com" rel="dns-prefetch">
    <link href="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/stylesheets/fonts.css" rel="stylesheet">
    <link href="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/favicons/favicon.ico" rel="shortcut icon"><script>;(function(d,e,c,r){e=d.documentElement;c="className";r="replace";e[c]=e[c][r]("i-ua_js_no","i-ua_js_yes");if(d.compatMode!="CSS1Compat")e[c]=e[c][r]("i-ua_css_standart","i-ua_css_quirks")})(document);</script>
    <style type="text/css">.js-show-more-text[data-readmore] {
            transition: height 75ms;
            overflow: hidden;
        }</style></head>
<body data-offcanvas-inited="true" data-mobile-menu-inited="true" style="height: 1329px;">
<div class="layout-responsive" role="main">

    <div class="layout-responsive__body">
        <div class="page-960 form-main-page">
            <div class="form-card space-x3--vt-form-page">
                <div class="form-card__inner">
                    <div class="form-card__content">
                        <div class="form-card__title page-title">{{ $data['title'] }}</div>
                        <div class="form-card__info">

                            <div class="form-card__row">
                                <div class="form-card__label">Form ID:</div>
                                <div class="form-card__value">{{ $data['form_uid'] }}</div>
                            </div>
                        </div>
                        <div class="form-card__actions js-development-not-login">
                            <div class="form-card__actions-text">Instant download</div>
                            <div class="form-card__counter counter"><span class="counter-icon"><svg width="24" height="26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 17V8.995M15.001 14.001 12 17.002l-3.001-3.001" stroke="#959595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.928 3.994c4.973 0 9.004 4.032 9.004 9.006s-4.031 9.006-9.004 9.006M8.852 21.455a9.004 9.004 0 0 1-2.71-1.558M6.143 6.103a8.963 8.963 0 0 1 2.709-1.558M3.068 11.435a8.96 8.96 0 0 1 1.068-2.94M3.068 14.563a8.96 8.96 0 0 0 1.068 2.94" stroke="#959595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg></span><span class="counter-info">1,358 downloads</span></div>
                            @auth <!-- IS LOGIN IN-->
                                <a class="ui-button ui-button--primary form-banner__button" href="{{ route('download', ['id' => $data['landing_id']]) }}"><span class="ui-button__body">Download</span></a>
                            @else<!-- NOT LOGIN IN-->
                                <a class="ui-button ui-button--primary form-banner__button" href="{{ route('login') }}"><span class="ui-button__body">Login & Download</span></a>
                            @endauth
                        </div>
                    </div><!-- IS PREVIEW-->
                    <div class="form-card__preview js-development-is-preview js-development-not-only-cover"><button class="form-card__preview-img-container js-form-card-preview-action" data-toggle="modal" data-target-modal="formPreviewModal">
                            <div class="form-card__preview-img">
                                <picture class="responsive-picture">
                                    <source type="image/webp" srcset="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2.webp 1x, https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2@2x.webp 2x">
                                    <source type="image/png" srcset="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2.png 1x, https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2@2x.png 2x"><img class="samples-list__image" src="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2.png" alt="Form preview" role="presentation" srcset="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2.png 1x, https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/images/form/form-redesign/form-preview2@2x.png 2x" width="" height="">
                                </picture>
                            </div>
                        </button><button class="form-card__action-preview js-action-preview"><span class="form-card__action-icon"><svg class="ui-icon ui-icon--size-16 ui-icon--search">
                      <use xlink:href="#search"></use>
                    </svg></span><span class="form-card__action-text">Free preview</span></button></div><!-- IS PREVIEW		-->
                    <!-- NO PREVIEW-->
                    <!-- NO PREVIEW-->
                    <!-- ONLY COVER-->
                    <!-- ONLY COVER	-->
                </div>
                <div class="upgrade-cta"></div>
            </div>
            <div class="form-description space-x3--vt-form-page">
                <div class="form-description__header">
                    <div class="form-description__title">Description</div>
                </div>
                <div class="form-description__body">
                    <div class="form-description__text-content">
                        {{ $data['description'] }}
                    </div>
                </div>
            </div>
            @isset($data['guide'])
            <div class="show-more show-more--form">
                <div class="show-more__wrapper space-x3--vt-form-page">
                    <div class="show-more__title form-title form-title--with-space-x1">How To Fill Out The Form?</div>
                    <div class="show-more--text js-show-more-text" style="height: 264px; max-height: none;" data-readmore="" aria-expanded="true" id="rmjs-1">
                        {{ $data['guide'] }}
                </div>
            </div>
            @endisset
        </div>
    </div>
</div>

<link href="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/stylesheets/style.css" rel="stylesheet">
<link href="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/stylesheets/form-main-page-2.css" rel="stylesheet"><script src="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/javascripts/vendor.bundle.js"></script><script src="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/javascripts/main.js"></script><script src="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/javascripts/formMain.js"></script>

<script src="https://cdn.uslegal.com/uslegalforms-frontend-labs/1820/javascripts/core/libraries/lazysizes.min.js" async=""></script>
</body>
</html>
