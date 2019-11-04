<?php
include('include/var.php');

$title='Professional Web Design Company | WolinWeb';
$meta='Need a Professional Website Design? Get started today and we will help you grow your business. We help professionals to get a quality business website design. Call Us Now (213)-293-9327!';
$keywords='professional website design, los angeles professional website design, website design and marketing, la website design, los angeles online marketing, los angeles branding.';


include('include/head.php');
echo
'<body class="stretched no-transition"><!-- Body -->
<div id="wrapper" class="clearfix"><!-- wrapper -->';

include ('include/header.php');
include ('include/slider.php');
include ('include/modal-signup.php');
include ('include/home.php');
include ('include/service.php');
include ('include/website-design.php');
include ('include/blog.php');
include ('include/mobile-ready.php');
include ('include/get-started.php');
include ('include/contactform.php');
include ('include/footer.php');
echo '</div><!-- #wrapper end -->';
include ('include/top_button.php');
include ('include/scripts.php');
echo '
</body>
</html>';
?>
