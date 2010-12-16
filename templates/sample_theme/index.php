<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?=import_js('js/lib.js');?>
<?=import_js('js/s3Slider.js');?>


<? //import_js('js/global.js');?>
<script>
	$(function(){
        $('#slider').s3Slider({
            timeOut: 3000
        });
	});
</script>

<title>index.png</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">td img {display: block;}</style>
<!--Fireworks CS3 Dreamweaver CS3 target.  Created Tue Dec 14 21:35:44 GMT+0800 (CST) 2010-->


<style type="text/css" media="screen">
#slider {
    width: 410px; /* important to be same as image width */
    height: 300px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}
#sliderContent {
    width: 410px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
}
.sliderImage {
    float: left;
    position: relative;
	display: none;
}
.sliderImage span {
    position: absolute;
	font: 10px/15px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 384px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.clear {
	clear: both;
}
.sliderImage span strong {
    font-size: 14px;
}
.top {
	top: 0;
	left: 0;
}
.bottom {
	bottom: 0;
    left: 0;
}
ul { list-style-type: none;}
</style>




</head>
<body bgcolor="#ffffff">


	<?=kk_photos_slider();?>

</body>
</html>
