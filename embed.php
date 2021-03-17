<?php 
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url); 
parse_str($url_components['query'], $params); 
echo $params['header']; 
echo $params['title']; 
echo $params['desc']; 
echo $params['imgurl']; 
echo $params['color']; 
echo $params['redirurl']; 
?> 

<html prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <meta name="theme-color" content="#<?php echo $params['color']; ?>" />
    <meta property="og:title" content="<?php echo str_replace('+', ' ', $params['title']); ?>" />
    <meta property="og:description" content="<?php echo str_replace('+', ' ', $params['desc']); ?>" />
    <meta property="twitter:image" content="<?php echo $params['imgurl']; ?>" />
	<meta name="twitter:card" content="summary_large_image">
    <meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?php echo str_replace('+', ' ', $params['header']); ?>">
  </head>

  <body>
	  <p> hiiii </p>
	  <script>
		  window.location.href = "<?php echo $params['redirurl'];  ?>";
	  </script>
  </body>
</html>
