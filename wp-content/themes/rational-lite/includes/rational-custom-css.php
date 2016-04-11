<?php
	$bg_color = esc_attr( get_theme_mod('rational_lite_pri_color', '#394f87') );
?>
<style type="text/css">

	body.custom-background { background-size: <?php echo esc_attr( get_theme_mod('background_size', 'auto') ); ?>; }
	/***************** THEME *****************/
  	 #skenav .sfHover a, a.skt-featured-icons,.service-icon{ background: <?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	 a.skt-featured-icons:after,.service-icon:after {border-top-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>; }
	 a.skt-featured-icons:before,.service-icon:before {border-bottom-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>; }

	
	.sticky-post {color : <?php if(isset($bg_color)){ echo $bg_color; } ?>;border-color:<?php if(isset($bdrrgbcolor)){ echo $bdrrgbcolor; } ?>}
	#footer{ border-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>; }
	.social li a:hover, #footer_top {background: <?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	.social li a:hover:before{color:#fff; }
	a#backtop,#respond input[type="submit"]:hover,.skt-ctabox div.skt-ctabox-button a:hover,.widget_tag_cloud a:hover,.continue a:hover,blockquote,.skt-quote,#rational-paginate .rational-current,#rational-paginate a:hover,.postformat-gallerydirection-nav li a:hover,#wp-calendar,.comments-template .reply a:hover,#content .contact-left form input[type="submit"]:hover,.skt-parallax-button:hover,.sktmenu-toggle  {background-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>; }
	.skt-ctabox div.skt-ctabox-button a,#portfolio-division-box .readmore,.teammember,.comments-template .reply a,#respond input[type="submit"],.slider-link a,.ske_tab_v ul.ske_tabs li.active,.ske_tab_h ul.ske_tabs li.active,#content .contact-left form input[type="submit"],.filter a,.skt-parallax-button,#rational-paginate a:hover,#rational-paginate .rational-current,form input[type="text"]:focus,form input[type="email"]:focus, form input[type="url"]:focus,form input[type="tel"]:focus, form input[type="number"]:focus,form input[type="range"]:focus, form input[type="date"]:focus,form input[type="file"]:focus,form textarea:focus,form input[type="submit"]{border-color:<?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	.clients-items li a:hover{border-bottom-color:<?php if(isset($bg_color)){ echo $bg_color; } ?>;}
	a,.ske-footer-container ul li:hover:before,.ske-footer-container ul li:hover > a,.ske_widget ul ul li:hover:before,.ske_widget ul ul li:hover,.ske_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,.post-tags a:hover,.entry-title a:hover ,.readmore a:hover,#Site-map .sitemap-rows ul li a:hover ,.childpages li a,#Site-map .sitemap-rows .title,.ske_widget a,.ske_widget a:hover,#Site-map .sitemap-rows ul li:hover,#footer .third_wrapper a:hover,.ske-title,#content .contact-left form input[type="submit"],.filter a,span.team_name,#respond input[type="submit"],.reply a, a.comment-edit-link,.skt_price_table .price_in_table .value, .teammember strong .team_name,#content .skt-service-page .one_third:hover .service-box-text h3,.ad-service:hover .service-box-text h3,.mid-box-mid .mid-box:hover .iconbox-content h4,.error-txt,.skt-ctabox .skt-ctabox-content h2,.reply a:hover, a.comment-edit-link:hover {color: <?php if(isset($bg_color)){ echo $bg_color; } ?>;text-decoration: none;}
	.single #content .title,#content .post-heading,.childpages li ,.fullwidth-heading,.comment-meta a:hover,#respond .required, #wp-calendar tbody a, .skt_blog_commt { color: <?php if(isset($bg_color)){ echo $bg_color; } ?>; }
	#skenav ul ul li a:hover{background-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>;color:#fff;}
	*::-moz-selection{background: <?php if(isset($bg_color)){ echo $bg_color; } ?>;color:#fff;}
	::selection {background: <?php if(isset($bg_color)){ echo $bg_color; } ?>;color:#fff;}
	#skenav ul li.current_page_item > a,
	#skenav ul li.current-menu-ancestor > a,
	#skenav ul li.current-menu-item > a,
	#skenav ul li.current-menu-parent > a, .left_icon i { background-color:<?php if(isset($bg_color)){ echo $bg_color; } ?>;color:#fff;}
	.continue a:hover { border-color: <?php if(isset($bg_color)){ echo $bg_color; } ?>;  }
	#searchform input[type="submit"]{ background: none repeat scroll 0 0 <?php if(isset($bg_color)){ echo $bg_color; } ?>;  }

	.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title {color: <?php if(isset($bg_color)){ echo $bg_color; } ?> !important;  }
	.full-bg-breadimage-fixed {}

	
	.landing-section h3,#footer .third_wrapper,.bread-title-holder h1.title,.cont_nav_inner span,.bread-title-holder .cont_nav_inner p,.bread-title-holder .cont_nav_inner a{
		color: <?php if(isset($bg_color)){ echo $bg_color; } ?>;
	}
	
	/***************** PAGINATE *****************/
	#skenav li a:hover,#skenav .sfHover { background-color:#333333;color: #FFFFFF;border-radius: 4px;}
	#skenav .sfHover a { color: #FFFFFF;}
	#skenav ul ul li { color: #FFFFFF; }
	#skenav .ske-menu #menu-secondary-menu li a:hover, #skenav .ske-menu #menu-secondary-menu .current-menu-item a{color: #71C1F2;  }
	.footer-seperator{background-color: rgba(0,0,0,.2);}
	#skenav .ske-menu #menu-secondary-menu li .sub-menu li {	margin: 0;  }


	@media only screen and (max-width : 1025px) {
		#menu-main {
			display:none;
		}

		#header .container {
			width:97%;
		}

		.skehead-headernav .logo {
		    margin-bottom: 3px;
		    margin-top: 12px;
		    position: relative;
		}

		.skehead-headernav.skehead-headernav-shrink .logo {
            margin-top: 1px;
            top: 6px;
		}

	}
</style>