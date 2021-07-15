<?php

class Standard_action_default_2e19e31f05125b5e005b9d9831c0ce412f2b7448 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<body class="is-preload">

	<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header">
			<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.configuration.websiteTitle', $array3)]);
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = NULL;
$arguments1['noCache'] = NULL;
$arguments1['language'] = NULL;
$arguments1['noCacheHash'] = NULL;
$arguments1['section'] = NULL;
$arguments1['linkAccessRestrictedPages'] = NULL;
$arguments1['additionalParams'] = NULL;
$arguments1['absolute'] = NULL;
$arguments1['addQueryString'] = NULL;
$arguments1['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['pageUid'] = 1;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '</h1>
			<nav class="links">
					<ul>
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
									<li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('menuItem.active', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['then'] = 'active';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '">
											<a href="';
$array13 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.link', $array13)]);

$output7 .= '" target="';
$array14 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.target', $array14)]);

$output7 .= '" title="';
$array15 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.title', $array15)]);

$output7 .= '">';
$array16 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.title', $array16)]);

$output7 .= '</a>
									</li>
							';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('headerMenu', $array6);
$arguments4['as'] = 'menuItem';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
					</ul>
			</nav>
			<nav class="main">
					<ul>
							<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
							</li>
					</ul>
			</nav>
	</header>
			<!-- Menu -->
				<section id="menu">

					<!-- Search -->
						<section>
							<form class="search" method="get" action="#">
								<input type="text" name="query" placeholder="Search" />
							</form>
						</section>

					<!-- Links -->
			<section>
					<ul class="links">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
									<li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('menuItem.active', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['then'] = 'active';

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '">
											<a href="';
$array26 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.link', $array26)]);

$output20 .= '" target="';
$array27 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.target', $array27)]);

$output20 .= '" title="';
$array28 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.title', $array28)]);

$output20 .= '">
													<h3>';
$array29 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.title', $array29)]);

$output20 .= '</h3>
													<p>';
$array30 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuItem.subtitle', $array30)]);

$output20 .= '</p>
											</a>
									</li>
							';
return $output20;
};
$arguments17 = array();
$arguments17['each'] = NULL;
$arguments17['as'] = NULL;
$arguments17['key'] = NULL;
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$array19 = array (
);$arguments17['each'] = $renderingContext->getVariableProvider()->getByPath('popoverMenu', $array19);
$arguments17['as'] = 'menuItem';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
					</ul>
			</section>
					<!-- Actions -->
						<section>
							<ul class="actions stacked">
								<li><a href="#" class="button large fit">Log In</a></li>
							</ul>
						</section>

				</section>

				<!-- Main -->
	    <div id="main">
	        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['data'] = NULL;
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'styles.content.get';
$renderChildrenClosure32 = ($arguments31['data'] !== null) ? function() use ($arguments31) { return $arguments31['data']; } : $renderChildrenClosure32;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '

					<!-- Post -->
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="single.html">Magna sed adipiscing</a></h2>
									<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-11-01">November 1, 2015</time>
									<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
								</div>
							</header>
							<a href="single.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
							<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
							<footer>
								<ul class="actions">
									<li><a href="single.html" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="#">General</a></li>
									<li><a href="#" class="icon solid fa-heart">28</a></li>
									<li><a href="#" class="icon solid fa-comment">128</a></li>
								</ul>
							</footer>
						</article>

					<!-- Post -->
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="single.html">Ultricies sed magna euismod enim vitae gravida</a></h2>
									<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-25">October 25, 2015</time>
									<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
								</div>
							</header>
							<a href="single.html" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
							<footer>
								<ul class="actions">
									<li><a href="single.html" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="#">General</a></li>
									<li><a href="#" class="icon solid fa-heart">28</a></li>
									<li><a href="#" class="icon solid fa-comment">128</a></li>
								</ul>
							</footer>
						</article>

					<!-- Post -->
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="single.html">Euismod et accumsan</a></h2>
									<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-22">October 22, 2015</time>
									<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
								</div>
							</header>
							<a href="single.html" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
							<footer>
								<ul class="actions">
									<li><a href="single.html" class="button large">Continue Reading</a></li>
								</ul>
								<ul class="stats">
									<li><a href="#">General</a></li>
									<li><a href="#" class="icon solid fa-heart">28</a></li>
									<li><a href="#" class="icon solid fa-comment">128</a></li>
								</ul>
							</footer>
						</article>

					<!-- Post -->
					<!--
						<article class="post">
							<header>
								<div class="title">
									<h2><a href="#">Elements</a></h2>
									<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
								</div>
								<div class="meta">
									<time class="published" datetime="2015-10-18">October 18, 2015</time>
									<a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
								</div>
							</header>

							<section>
								<h3>Text</h3>
								<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
								This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
								This is <u>underlined</u> and this is code: <code>for (;;) ';

$output0 .= '{ ... }';

$output0 .= '</code>. Finally, <a href="#">this is a link</a>.</p>
								<hr />
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
								<hr />
								<h2>Heading Level 2</h2>
								<h3>Heading Level 3</h3>
								<h4>Heading Level 4</h4>
								<hr />
								<h4>Blockquote</h4>
								<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
								<h4>Preformatted</h4>
								<pre><code>i = 0;

while (!deck.isInOrder()) {
print \'Iteration \' + i;
deck.shuffle();
i++;
}

print \'It took \' + i + \' iterations to sort the deck.\';</code></pre>
							</section>

							<section>
								<h3>Lists</h3>
								<div class="row">
									<div class="col-6 col-12-medium">
										<h4>Unordered</h4>
										<ul>
											<li>Dolor pulvinar etiam.</li>
											<li>Sagittis adipiscing.</li>
											<li>Felis enim feugiat.</li>
										</ul>
										<h4>Alternate</h4>
										<ul class="alt">
											<li>Dolor pulvinar etiam.</li>
											<li>Sagittis adipiscing.</li>
											<li>Felis enim feugiat.</li>
										</ul>
									</div>
									<div class="col-6 col-12-medium">
										<h4>Ordered</h4>
										<ol>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis lorem.</li>
											<li>Felis enim et feugiat.</li>
										</ol>
										<h4>Icons</h4>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
										</ul>
									</div>
								</div>
								<h3>Actions</h3>
								<div class="row">
									<div class="col-6 col-12-medium">
										<ul class="actions">
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions small">
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
										<ul class="actions stacked">
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions stacked">
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
									</div>
									<div class="col-6 col-12-medium">
										<ul class="actions stacked">
											<li><a href="#" class="button fit">Default</a></li>
											<li><a href="#" class="button fit">Default</a></li>
										</ul>
										<ul class="actions stacked">
											<li><a href="#" class="button small fit">Small</a></li>
											<li><a href="#" class="button small fit">Small</a></li>
										</ul>
									</div>
								</div>
							</section>

							<section>
								<h3>Table</h3>
								<h4>Default</h4>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Item One</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item Two</td>
												<td>Vis ac commodo adipiscing arcu aliquet.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item Three</td>
												<td> Morbi faucibus arcu accumsan lorem.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item Four</td>
												<td>Vitae integer tempus condimentum.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item Five</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												<td>100.00</td>
											</tr>
										</tfoot>
									</table>
								</div>

								<h4>Alternate</h4>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Description</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Item One</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item Two</td>
												<td>Vis ac commodo adipiscing arcu aliquet.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item Three</td>
												<td> Morbi faucibus arcu accumsan lorem.</td>
												<td>29.99</td>
											</tr>
											<tr>
												<td>Item Four</td>
												<td>Vitae integer tempus condimentum.</td>
												<td>19.99</td>
											</tr>
											<tr>
												<td>Item Five</td>
												<td>Ante turpis integer aliquet porttitor.</td>
												<td>29.99</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td colspan="2"></td>
												<td>100.00</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</section>

							<section>
								<h3>Buttons</h3>
								<ul class="actions">
									<li><a href="#" class="button large">Large</a></li>
									<li><a href="#" class="button">Default</a></li>
									<li><a href="#" class="button small">Small</a></li>
								</ul>
								<ul class="actions fit">
									<li><a href="#" class="button fit">Fit</a></li>
									<li><a href="#" class="button fit">Fit</a></li>
									<li><a href="#" class="button fit">Fit</a></li>
								</ul>
								<ul class="actions fit small">
									<li><a href="#" class="button fit small">Fit + Small</a></li>
									<li><a href="#" class="button fit small">Fit + Small</a></li>
									<li><a href="#" class="button fit small">Fit + Small</a></li>
								</ul>
								<ul class="actions">
									<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									<li><a href="#" class="button icon solid fa-upload">Icon</a></li>
									<li><a href="#" class="button icon solid fa-save">Icon</a></li>
								</ul>
								<ul class="actions">
									<li><span class="button disabled">Disabled</span></li>
									<li><span class="button disabled icon solid fa-download">Disabled</span></li>
								</ul>
							</section>

							<section>
								<h3>Form</h3>
								<form method="post" action="#">
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
										</div>
										<div class="col-6 col-12-xsmall">
											<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
										</div>
										<div class="col-12">
											<select name="demo-category" id="demo-category">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="demo-priority-low" name="demo-priority" checked>
											<label for="demo-priority-low">Low</label>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="demo-priority-normal" name="demo-priority">
											<label for="demo-priority-normal">Normal</label>
										</div>
										<div class="col-4 col-12-small">
											<input type="radio" id="demo-priority-high" name="demo-priority">
											<label for="demo-priority-high">High</label>
										</div>
										<div class="col-6 col-12-small">
											<input type="checkbox" id="demo-copy" name="demo-copy">
											<label for="demo-copy">Email me a copy</label>
										</div>
										<div class="col-6 col-12-small">
											<input type="checkbox" id="demo-human" name="demo-human" checked>
											<label for="demo-human">Not a robot</label>
										</div>
										<div class="col-12">
											<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Send Message" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

							<section>
								<h3>Image</h3>
								<h4>Fit</h4>
								<div class="box alt">
									<div class="row gtr-uniform">
										<div class="col-12"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
										<div class="col-4"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
									</div>
								</div>
								<h4>Left &amp; Right</h4>
								<p><span class="image left"><img src="images/pic07.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
								<p><span class="image right"><img src="images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							</section>

						</article>
					-->

					<!-- Pagination -->
						<ul class="actions pagination">
							<li><a href="" class="disabled button large previous">Previous Page</a></li>
							<li><a href="#" class="button large next">Next Page</a></li>
						</ul>

				</div>

			<!-- Sidebar -->
				<section id="sidebar">

					<!-- Intro -->
						<section id="intro">
							<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
							<header>
								<h2>Future Imperfect</h2>
								<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
							</header>
						</section>

					<!-- Mini Posts -->
						<section>
							<div class="mini-posts">

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<h3><a href="single.html">Vitae sed condimentum</a></h3>
											<time class="published" datetime="2015-10-20">October 20, 2015</time>
											<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
										</header>
										<a href="single.html" class="image"><img src="images/pic04.jpg" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<h3><a href="single.html">Rutrum neque accumsan</a></h3>
											<time class="published" datetime="2015-10-19">October 19, 2015</time>
											<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
										</header>
										<a href="single.html" class="image"><img src="images/pic05.jpg" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<h3><a href="single.html">Odio congue mattis</a></h3>
											<time class="published" datetime="2015-10-18">October 18, 2015</time>
											<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
										</header>
										<a href="single.html" class="image"><img src="images/pic06.jpg" alt="" /></a>
									</article>

								<!-- Mini Post -->
									<article class="mini-post">
										<header>
											<h3><a href="single.html">Enim nisl veroeros</a></h3>
											<time class="published" datetime="2015-10-17">October 17, 2015</time>
											<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
										</header>
										<a href="single.html" class="image"><img src="images/pic07.jpg" alt="" /></a>
									</article>

							</div>
						</section>

					<!-- Posts List -->
						<section>
							<ul class="posts">
								<li>
									<article>
										<header>
											<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
											<time class="published" datetime="2015-10-20">October 20, 2015</time>
										</header>
										<a href="single.html" class="image"><img src="images/pic08.jpg" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
											<time class="published" datetime="2015-10-15">October 15, 2015</time>
										</header>
										<a href="single.html" class="image"><img src="images/pic09.jpg" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
											<time class="published" datetime="2015-10-10">October 10, 2015</time>
										</header>
										<a href="single.html" class="image"><img src="images/pic10.jpg" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
											<time class="published" datetime="2015-10-08">October 8, 2015</time>
										</header>
										<a href="single.html" class="image"><img src="images/pic11.jpg" alt="" /></a>
									</article>
								</li>
								<li>
									<article>
										<header>
											<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
											<time class="published" datetime="2015-10-06">October 7, 2015</time>
										</header>
										<a href="single.html" class="image"><img src="images/pic12.jpg" alt="" /></a>
									</article>
								</li>
							</ul>
						</section>

					<!-- About -->
						<section class="blurb">
							<h2>About</h2>
							<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
							<ul class="actions">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</section>

					<!-- Footer -->
						<section id="footer">
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
								<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
						</section>

				</section>

		</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>
';

return $output0;
}


}
#