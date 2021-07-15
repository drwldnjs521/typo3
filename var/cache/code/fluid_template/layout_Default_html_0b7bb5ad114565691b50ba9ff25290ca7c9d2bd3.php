<?php

class layout_Default_html_0b7bb5ad114565691b50ba9ff25290ca7c9d2bd3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

<article class="post">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    <header>
      <div class="title">
        <h2>';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array7)]);

$output6 .= '</h2>
      </div>
    </header>
  ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['section'] = NULL;
$arguments8['partial'] = NULL;
$arguments8['delegate'] = NULL;
$arguments8['renderable'] = NULL;
$arguments8['arguments'] = array (
);
$arguments8['optional'] = false;
$arguments8['default'] = NULL;
$arguments8['contentAs'] = NULL;
$arguments8['debug'] = true;
$arguments8['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array10['0'] = 'true';

$expression11 = function($context) {return TRUE;};
$arguments8['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
  <footer>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['section'] = NULL;
$arguments17['partial'] = NULL;
$arguments17['delegate'] = NULL;
$arguments17['renderable'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['optional'] = false;
$arguments17['default'] = NULL;
$arguments17['contentAs'] = NULL;
$arguments17['debug'] = true;
$arguments17['partial'] = 'Footer/All';
$arguments17['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
    ';
return $output16;
};
$arguments12 = array();
$arguments12['section'] = NULL;
$arguments12['partial'] = NULL;
$arguments12['delegate'] = NULL;
$arguments12['renderable'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['optional'] = false;
$arguments12['default'] = NULL;
$arguments12['contentAs'] = NULL;
$arguments12['debug'] = true;
$arguments12['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array14['0'] = 'true';

$expression15 = function($context) {return TRUE;};
$arguments12['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
  </footer>
</article>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
            <div id="c';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array150)]);

$output149 .= '" class="frame frame-';
$array151 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array151)]);

$output149 .= ' frame-type-';
$array152 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array152)]);

$output149 .= ' frame-layout-';
$array153 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array153)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['then'] = NULL;
$arguments154['else'] = NULL;
$arguments154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$output159 = '';

$output159 .= ' frame-space-before-';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array160)]);
$arguments154['then'] = $output159;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array164);

$expression165 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$output166 = '';

$output166 .= ' frame-space-after-';
$array167 = array (
);
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array167)]);
$arguments161['then'] = $output166;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output149 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                    <a id="c';
$array174 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array174)]);

$output173 .= '"></a>
                ';
return $output173;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array171);

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = $renderChildrenClosure169;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['debug'] = true;
$arguments180['partial'] = 'DropIn/Before/All';
$arguments180['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
                ';
return $output179;
};
$arguments175 = array();
$arguments175['section'] = NULL;
$arguments175['partial'] = NULL;
$arguments175['delegate'] = NULL;
$arguments175['renderable'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['optional'] = false;
$arguments175['default'] = NULL;
$arguments175['contentAs'] = NULL;
$arguments175['debug'] = true;
$arguments175['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array177['0'] = 'true';

$expression178 = function($context) {return TRUE;};
$arguments175['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'Header/All';
$arguments188['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                ';
return $output187;
};
$arguments183 = array();
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['renderable'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['debug'] = true;
$arguments183['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array185['0'] = 'true';

$expression186 = function($context) {return TRUE;};
$arguments183['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['section'] = NULL;
$arguments191['partial'] = NULL;
$arguments191['delegate'] = NULL;
$arguments191['renderable'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['optional'] = false;
$arguments191['default'] = NULL;
$arguments191['contentAs'] = NULL;
$arguments191['debug'] = true;
$arguments191['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array193['0'] = 'true';

$expression194 = function($context) {return TRUE;};
$arguments191['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['section'] = NULL;
$arguments200['partial'] = NULL;
$arguments200['delegate'] = NULL;
$arguments200['renderable'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['optional'] = false;
$arguments200['default'] = NULL;
$arguments200['contentAs'] = NULL;
$arguments200['debug'] = true;
$arguments200['partial'] = 'Footer/All';
$arguments200['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                ';
return $output199;
};
$arguments195 = array();
$arguments195['section'] = NULL;
$arguments195['partial'] = NULL;
$arguments195['delegate'] = NULL;
$arguments195['renderable'] = NULL;
$arguments195['arguments'] = array (
);
$arguments195['optional'] = false;
$arguments195['default'] = NULL;
$arguments195['contentAs'] = NULL;
$arguments195['debug'] = true;
$arguments195['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array197['0'] = 'true';

$expression198 = function($context) {return TRUE;};
$arguments195['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['section'] = NULL;
$arguments208['partial'] = NULL;
$arguments208['delegate'] = NULL;
$arguments208['renderable'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['optional'] = false;
$arguments208['default'] = NULL;
$arguments208['contentAs'] = NULL;
$arguments208['debug'] = true;
$arguments208['partial'] = 'DropIn/After/All';
$arguments208['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
                ';
return $output207;
};
$arguments203 = array();
$arguments203['section'] = NULL;
$arguments203['partial'] = NULL;
$arguments203['delegate'] = NULL;
$arguments203['renderable'] = NULL;
$arguments203['arguments'] = array (
);
$arguments203['optional'] = false;
$arguments203['default'] = NULL;
$arguments203['contentAs'] = NULL;
$arguments203['debug'] = true;
$arguments203['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array205['0'] = 'true';

$expression206 = function($context) {return TRUE;};
$arguments203['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output149 .= '
            </div>

        ';
return $output149;
};
$arguments147 = array();

$output146 .= '';

$output146 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '

            <a id="c';
$array214 = array (
);
$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array214)]);

$output213 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
                <a id="c';
$array221 = array (
);
$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array221)]);

$output220 .= '"></a>
            ';
return $output220;
};
$arguments215 = array();
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$arguments215['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array218);

$expression219 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments215['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments215['__thenClosure'] = $renderChildrenClosure216;

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                <div class="frame-space-before-';
$array228 = array (
);
$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array228)]);

$output227 .= '"></div>
            ';
return $output227;
};
$arguments222 = array();
$arguments222['then'] = NULL;
$arguments222['else'] = NULL;
$arguments222['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array225);

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments222['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments222['__thenClosure'] = $renderChildrenClosure223;

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['section'] = NULL;
$arguments234['partial'] = NULL;
$arguments234['delegate'] = NULL;
$arguments234['renderable'] = NULL;
$arguments234['arguments'] = array (
);
$arguments234['optional'] = false;
$arguments234['default'] = NULL;
$arguments234['contentAs'] = NULL;
$arguments234['debug'] = true;
$arguments234['partial'] = 'DropIn/Before/All';
$arguments234['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output233 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
            ';
return $output233;
};
$arguments229 = array();
$arguments229['section'] = NULL;
$arguments229['partial'] = NULL;
$arguments229['delegate'] = NULL;
$arguments229['renderable'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['optional'] = false;
$arguments229['default'] = NULL;
$arguments229['contentAs'] = NULL;
$arguments229['debug'] = true;
$arguments229['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array231 = array();
$array231['0'] = 'true';

$expression232 = function($context) {return TRUE;};
$arguments229['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array231)
					),
					$renderingContext
				);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['partial'] = 'Header/All';
$arguments242['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
            ';
return $output241;
};
$arguments237 = array();
$arguments237['section'] = NULL;
$arguments237['partial'] = NULL;
$arguments237['delegate'] = NULL;
$arguments237['renderable'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['optional'] = false;
$arguments237['default'] = NULL;
$arguments237['contentAs'] = NULL;
$arguments237['debug'] = true;
$arguments237['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array239['0'] = 'true';

$expression240 = function($context) {return TRUE;};
$arguments237['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['section'] = NULL;
$arguments245['partial'] = NULL;
$arguments245['delegate'] = NULL;
$arguments245['renderable'] = NULL;
$arguments245['arguments'] = array (
);
$arguments245['optional'] = false;
$arguments245['default'] = NULL;
$arguments245['contentAs'] = NULL;
$arguments245['debug'] = true;
$arguments245['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array247 = array();
$array247['0'] = 'true';

$expression248 = function($context) {return TRUE;};
$arguments245['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array247)
					),
					$renderingContext
				);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['section'] = NULL;
$arguments254['partial'] = NULL;
$arguments254['delegate'] = NULL;
$arguments254['renderable'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['optional'] = false;
$arguments254['default'] = NULL;
$arguments254['contentAs'] = NULL;
$arguments254['debug'] = true;
$arguments254['partial'] = 'Footer/All';
$arguments254['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
            ';
return $output253;
};
$arguments249 = array();
$arguments249['section'] = NULL;
$arguments249['partial'] = NULL;
$arguments249['delegate'] = NULL;
$arguments249['renderable'] = NULL;
$arguments249['arguments'] = array (
);
$arguments249['optional'] = false;
$arguments249['default'] = NULL;
$arguments249['contentAs'] = NULL;
$arguments249['debug'] = true;
$arguments249['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array251['0'] = 'true';

$expression252 = function($context) {return TRUE;};
$arguments249['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['section'] = NULL;
$arguments262['partial'] = NULL;
$arguments262['delegate'] = NULL;
$arguments262['renderable'] = NULL;
$arguments262['arguments'] = array (
);
$arguments262['optional'] = false;
$arguments262['default'] = NULL;
$arguments262['contentAs'] = NULL;
$arguments262['debug'] = true;
$arguments262['partial'] = 'DropIn/After/All';
$arguments262['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
            ';
return $output261;
};
$arguments257 = array();
$arguments257['section'] = NULL;
$arguments257['partial'] = NULL;
$arguments257['delegate'] = NULL;
$arguments257['renderable'] = NULL;
$arguments257['arguments'] = array (
);
$arguments257['optional'] = false;
$arguments257['default'] = NULL;
$arguments257['contentAs'] = NULL;
$arguments257['debug'] = true;
$arguments257['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array259['0'] = 'true';

$expression260 = function($context) {return TRUE;};
$arguments257['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output213 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
                <div class="frame-space-after-';
$array271 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array271)]);

$output270 .= '"></div>
            ';
return $output270;
};
$arguments265 = array();
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array267 = array();
$array268 = array (
);$array267['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array268);

$expression269 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression269(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array267)
					),
					$renderingContext
				);
$arguments265['__thenClosure'] = $renderChildrenClosure266;

$output213 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output213 .= '

        ';
return $output213;
};
$arguments211 = array();
$arguments211['if'] = NULL;

$output146 .= '';

$output146 .= '
    ';
return $output146;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array144);
$array143['1'] = ' != none';

$expression145 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
            <div id="c';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array23)]);

$output22 .= '" class="frame frame-';
$array24 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array24)]);

$output22 .= ' frame-type-';
$array25 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array25)]);

$output22 .= ' frame-layout-';
$array26 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array26)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array30);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$output32 = '';

$output32 .= ' frame-space-before-';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array33)]);
$arguments27['then'] = $output32;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array37);

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression38(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$output39 = '';

$output39 .= ' frame-space-after-';
$array40 = array (
);
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array40)]);
$arguments34['then'] = $output39;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output22 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                    <a id="c';
$array47 = array (
);
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array47)]);

$output46 .= '"></a>
                ';
return $output46;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['__thenClosure'] = $renderChildrenClosure42;

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['renderable'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['debug'] = true;
$arguments53['partial'] = 'DropIn/Before/All';
$arguments53['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                ';
return $output52;
};
$arguments48 = array();
$arguments48['section'] = NULL;
$arguments48['partial'] = NULL;
$arguments48['delegate'] = NULL;
$arguments48['renderable'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['optional'] = false;
$arguments48['default'] = NULL;
$arguments48['contentAs'] = NULL;
$arguments48['debug'] = true;
$arguments48['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array50['0'] = 'true';

$expression51 = function($context) {return TRUE;};
$arguments48['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['section'] = NULL;
$arguments61['partial'] = NULL;
$arguments61['delegate'] = NULL;
$arguments61['renderable'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['optional'] = false;
$arguments61['default'] = NULL;
$arguments61['contentAs'] = NULL;
$arguments61['debug'] = true;
$arguments61['partial'] = 'Header/All';
$arguments61['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output60 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                ';
return $output60;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['debug'] = true;
$arguments56['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array58['0'] = 'true';

$expression59 = function($context) {return TRUE;};
$arguments56['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['renderable'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['debug'] = true;
$arguments64['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = 'true';

$expression67 = function($context) {return TRUE;};
$arguments64['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['section'] = NULL;
$arguments73['partial'] = NULL;
$arguments73['delegate'] = NULL;
$arguments73['renderable'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['optional'] = false;
$arguments73['default'] = NULL;
$arguments73['contentAs'] = NULL;
$arguments73['debug'] = true;
$arguments73['partial'] = 'Footer/All';
$arguments73['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                ';
return $output72;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array70['0'] = 'true';

$expression71 = function($context) {return TRUE;};
$arguments68['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output22 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['section'] = NULL;
$arguments81['partial'] = NULL;
$arguments81['delegate'] = NULL;
$arguments81['renderable'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['optional'] = false;
$arguments81['default'] = NULL;
$arguments81['contentAs'] = NULL;
$arguments81['debug'] = true;
$arguments81['partial'] = 'DropIn/After/All';
$arguments81['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
                ';
return $output80;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['debug'] = true;
$arguments76['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array78['0'] = 'true';

$expression79 = function($context) {return TRUE;};
$arguments76['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output22 .= '
            </div>

        ';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '

            <a id="c';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array85)]);

$output84 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                <a id="c';
$array92 = array (
);
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array92)]);

$output91 .= '"></a>
            ';
return $output91;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array89);

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['__thenClosure'] = $renderChildrenClosure87;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
                <div class="frame-space-before-';
$array99 = array (
);
$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array99)]);

$output98 .= '"></div>
            ';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['section'] = NULL;
$arguments105['partial'] = NULL;
$arguments105['delegate'] = NULL;
$arguments105['renderable'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['optional'] = false;
$arguments105['default'] = NULL;
$arguments105['contentAs'] = NULL;
$arguments105['debug'] = true;
$arguments105['partial'] = 'DropIn/Before/All';
$arguments105['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
            ';
return $output104;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array102['0'] = 'true';

$expression103 = function($context) {return TRUE;};
$arguments100['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['debug'] = true;
$arguments113['partial'] = 'Header/All';
$arguments113['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
            ';
return $output112;
};
$arguments108 = array();
$arguments108['section'] = NULL;
$arguments108['partial'] = NULL;
$arguments108['delegate'] = NULL;
$arguments108['renderable'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['optional'] = false;
$arguments108['default'] = NULL;
$arguments108['contentAs'] = NULL;
$arguments108['debug'] = true;
$arguments108['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array110['0'] = 'true';

$expression111 = function($context) {return TRUE;};
$arguments108['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['renderable'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$arguments116['debug'] = true;
$arguments116['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array118['0'] = 'true';

$expression119 = function($context) {return TRUE;};
$arguments116['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['section'] = NULL;
$arguments125['partial'] = NULL;
$arguments125['delegate'] = NULL;
$arguments125['renderable'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['optional'] = false;
$arguments125['default'] = NULL;
$arguments125['contentAs'] = NULL;
$arguments125['debug'] = true;
$arguments125['partial'] = 'Footer/All';
$arguments125['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
            ';
return $output124;
};
$arguments120 = array();
$arguments120['section'] = NULL;
$arguments120['partial'] = NULL;
$arguments120['delegate'] = NULL;
$arguments120['renderable'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['optional'] = false;
$arguments120['default'] = NULL;
$arguments120['contentAs'] = NULL;
$arguments120['debug'] = true;
$arguments120['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array122['0'] = 'true';

$expression123 = function($context) {return TRUE;};
$arguments120['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression123(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['section'] = NULL;
$arguments133['partial'] = NULL;
$arguments133['delegate'] = NULL;
$arguments133['renderable'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['optional'] = false;
$arguments133['default'] = NULL;
$arguments133['contentAs'] = NULL;
$arguments133['debug'] = true;
$arguments133['partial'] = 'DropIn/After/All';
$arguments133['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output132 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
            ';
return $output132;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['renderable'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['debug'] = true;
$arguments128['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array130['0'] = 'true';

$expression131 = function($context) {return TRUE;};
$arguments128['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output84 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                <div class="frame-space-after-';
$array142 = array (
);
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array142)]);

$output141 .= '"></div>
            ';
return $output141;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output84 .= '

        ';
return $output84;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '


';

return $output0;
}


}
#