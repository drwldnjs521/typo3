<?php

class layout_Default_html_9aa985924b87660f3a3b6db5b8e09c39582996cc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '

        <article class="post">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
   <header>
   <div class="title">
       <h2>';
$array156 = array (
);
$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array156)]);

$output155 .= '</h2>
   </div>
   </header>
';
return $output155;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array152 = array();
$array153 = array (
);$array152['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array153);

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array152)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = $renderChildrenClosure151;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['section'] = NULL;
$arguments157['partial'] = NULL;
$arguments157['delegate'] = NULL;
$arguments157['renderable'] = NULL;
$arguments157['arguments'] = array (
);
$arguments157['optional'] = false;
$arguments157['default'] = NULL;
$arguments157['contentAs'] = NULL;
$arguments157['debug'] = true;
$arguments157['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array159['0'] = 'true';

$expression160 = function($context) {return TRUE;};
$arguments157['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output149 .= '
<footer>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
       ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['section'] = NULL;
$arguments166['partial'] = NULL;
$arguments166['delegate'] = NULL;
$arguments166['renderable'] = NULL;
$arguments166['arguments'] = array (
);
$arguments166['optional'] = false;
$arguments166['default'] = NULL;
$arguments166['contentAs'] = NULL;
$arguments166['debug'] = true;
$arguments166['partial'] = 'Footer/All';
$arguments166['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
   ';
return $output165;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['renderable'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['debug'] = true;
$arguments161['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array163['0'] = 'true';

$expression164 = function($context) {return TRUE;};
$arguments161['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output149 .= '
</footer>
</article>

            <div id="c';
$array169 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array169)]);

$output149 .= '" class="frame frame-';
$array170 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array170)]);

$output149 .= ' frame-type-';
$array171 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array171)]);

$output149 .= ' frame-layout-';
$array172 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array172)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$arguments173['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments173['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$output178 = '';

$output178 .= ' frame-space-before-';
$array179 = array (
);
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array179)]);
$arguments173['then'] = $output178;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['then'] = NULL;
$arguments180['else'] = NULL;
$arguments180['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array182 = array();
$array183 = array (
);$array182['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array183);

$expression184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments180['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array182)
					),
					$renderingContext
				);
$output185 = '';

$output185 .= ' frame-space-after-';
$array186 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array186)]);
$arguments180['then'] = $output185;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output149 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
                    <a id="c';
$array193 = array (
);
$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array193)]);

$output192 .= '"></a>
                ';
return $output192;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array190);

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['__thenClosure'] = $renderChildrenClosure188;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['section'] = NULL;
$arguments199['partial'] = NULL;
$arguments199['delegate'] = NULL;
$arguments199['renderable'] = NULL;
$arguments199['arguments'] = array (
);
$arguments199['optional'] = false;
$arguments199['default'] = NULL;
$arguments199['contentAs'] = NULL;
$arguments199['debug'] = true;
$arguments199['partial'] = 'DropIn/Before/All';
$arguments199['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
                ';
return $output198;
};
$arguments194 = array();
$arguments194['section'] = NULL;
$arguments194['partial'] = NULL;
$arguments194['delegate'] = NULL;
$arguments194['renderable'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['optional'] = false;
$arguments194['default'] = NULL;
$arguments194['contentAs'] = NULL;
$arguments194['debug'] = true;
$arguments194['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array196['0'] = 'true';

$expression197 = function($context) {return TRUE;};
$arguments194['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['section'] = NULL;
$arguments207['partial'] = NULL;
$arguments207['delegate'] = NULL;
$arguments207['renderable'] = NULL;
$arguments207['arguments'] = array (
);
$arguments207['optional'] = false;
$arguments207['default'] = NULL;
$arguments207['contentAs'] = NULL;
$arguments207['debug'] = true;
$arguments207['partial'] = 'Header/All';
$arguments207['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output206 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
                ';
return $output206;
};
$arguments202 = array();
$arguments202['section'] = NULL;
$arguments202['partial'] = NULL;
$arguments202['delegate'] = NULL;
$arguments202['renderable'] = NULL;
$arguments202['arguments'] = array (
);
$arguments202['optional'] = false;
$arguments202['default'] = NULL;
$arguments202['contentAs'] = NULL;
$arguments202['debug'] = true;
$arguments202['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array204['0'] = 'true';

$expression205 = function($context) {return TRUE;};
$arguments202['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['section'] = NULL;
$arguments210['partial'] = NULL;
$arguments210['delegate'] = NULL;
$arguments210['renderable'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['optional'] = false;
$arguments210['default'] = NULL;
$arguments210['contentAs'] = NULL;
$arguments210['debug'] = true;
$arguments210['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array212 = array();
$array212['0'] = 'true';

$expression213 = function($context) {return TRUE;};
$arguments210['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['section'] = NULL;
$arguments219['partial'] = NULL;
$arguments219['delegate'] = NULL;
$arguments219['renderable'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['optional'] = false;
$arguments219['default'] = NULL;
$arguments219['contentAs'] = NULL;
$arguments219['debug'] = true;
$arguments219['partial'] = 'Footer/All';
$arguments219['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output218 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output218 .= '
                ';
return $output218;
};
$arguments214 = array();
$arguments214['section'] = NULL;
$arguments214['partial'] = NULL;
$arguments214['delegate'] = NULL;
$arguments214['renderable'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['optional'] = false;
$arguments214['default'] = NULL;
$arguments214['contentAs'] = NULL;
$arguments214['debug'] = true;
$arguments214['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array216 = array();
$array216['0'] = 'true';

$expression217 = function($context) {return TRUE;};
$arguments214['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array216)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['section'] = NULL;
$arguments227['partial'] = NULL;
$arguments227['delegate'] = NULL;
$arguments227['renderable'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['optional'] = false;
$arguments227['default'] = NULL;
$arguments227['contentAs'] = NULL;
$arguments227['debug'] = true;
$arguments227['partial'] = 'DropIn/After/All';
$arguments227['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                ';
return $output226;
};
$arguments222 = array();
$arguments222['section'] = NULL;
$arguments222['partial'] = NULL;
$arguments222['delegate'] = NULL;
$arguments222['renderable'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['optional'] = false;
$arguments222['default'] = NULL;
$arguments222['contentAs'] = NULL;
$arguments222['debug'] = true;
$arguments222['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array224['0'] = 'true';

$expression225 = function($context) {return TRUE;};
$arguments222['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

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
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '

            <a id="c';
$array233 = array (
);
$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array233)]);

$output232 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                <a id="c';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array240)]);

$output239 .= '"></a>
            ';
return $output239;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array237);

$expression238 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
                <div class="frame-space-before-';
$array247 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array247)]);

$output246 .= '"></div>
            ';
return $output246;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array244);

$expression245 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['__thenClosure'] = $renderChildrenClosure242;

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['section'] = NULL;
$arguments253['partial'] = NULL;
$arguments253['delegate'] = NULL;
$arguments253['renderable'] = NULL;
$arguments253['arguments'] = array (
);
$arguments253['optional'] = false;
$arguments253['default'] = NULL;
$arguments253['contentAs'] = NULL;
$arguments253['debug'] = true;
$arguments253['partial'] = 'DropIn/Before/All';
$arguments253['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output252 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
            ';
return $output252;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['renderable'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$arguments248['debug'] = true;
$arguments248['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array250 = array();
$array250['0'] = 'true';

$expression251 = function($context) {return TRUE;};
$arguments248['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array250)
					),
					$renderingContext
				);

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['section'] = NULL;
$arguments261['partial'] = NULL;
$arguments261['delegate'] = NULL;
$arguments261['renderable'] = NULL;
$arguments261['arguments'] = array (
);
$arguments261['optional'] = false;
$arguments261['default'] = NULL;
$arguments261['contentAs'] = NULL;
$arguments261['debug'] = true;
$arguments261['partial'] = 'Header/All';
$arguments261['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output260 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output260 .= '
            ';
return $output260;
};
$arguments256 = array();
$arguments256['section'] = NULL;
$arguments256['partial'] = NULL;
$arguments256['delegate'] = NULL;
$arguments256['renderable'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['optional'] = false;
$arguments256['default'] = NULL;
$arguments256['contentAs'] = NULL;
$arguments256['debug'] = true;
$arguments256['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array258['0'] = 'true';

$expression259 = function($context) {return TRUE;};
$arguments256['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression259(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['section'] = NULL;
$arguments264['partial'] = NULL;
$arguments264['delegate'] = NULL;
$arguments264['renderable'] = NULL;
$arguments264['arguments'] = array (
);
$arguments264['optional'] = false;
$arguments264['default'] = NULL;
$arguments264['contentAs'] = NULL;
$arguments264['debug'] = true;
$arguments264['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array266['0'] = 'true';

$expression267 = function($context) {return TRUE;};
$arguments264['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['section'] = NULL;
$arguments273['partial'] = NULL;
$arguments273['delegate'] = NULL;
$arguments273['renderable'] = NULL;
$arguments273['arguments'] = array (
);
$arguments273['optional'] = false;
$arguments273['default'] = NULL;
$arguments273['contentAs'] = NULL;
$arguments273['debug'] = true;
$arguments273['partial'] = 'Footer/All';
$arguments273['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output272 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
            ';
return $output272;
};
$arguments268 = array();
$arguments268['section'] = NULL;
$arguments268['partial'] = NULL;
$arguments268['delegate'] = NULL;
$arguments268['renderable'] = NULL;
$arguments268['arguments'] = array (
);
$arguments268['optional'] = false;
$arguments268['default'] = NULL;
$arguments268['contentAs'] = NULL;
$arguments268['debug'] = true;
$arguments268['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array270 = array();
$array270['0'] = 'true';

$expression271 = function($context) {return TRUE;};
$arguments268['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array270)
					),
					$renderingContext
				);

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['section'] = NULL;
$arguments281['partial'] = NULL;
$arguments281['delegate'] = NULL;
$arguments281['renderable'] = NULL;
$arguments281['arguments'] = array (
);
$arguments281['optional'] = false;
$arguments281['default'] = NULL;
$arguments281['contentAs'] = NULL;
$arguments281['debug'] = true;
$arguments281['partial'] = 'DropIn/After/All';
$arguments281['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
            ';
return $output280;
};
$arguments276 = array();
$arguments276['section'] = NULL;
$arguments276['partial'] = NULL;
$arguments276['delegate'] = NULL;
$arguments276['renderable'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['optional'] = false;
$arguments276['default'] = NULL;
$arguments276['contentAs'] = NULL;
$arguments276['debug'] = true;
$arguments276['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array278 = array();
$array278['0'] = 'true';

$expression279 = function($context) {return TRUE;};
$arguments276['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array278)
					),
					$renderingContext
				);

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output232 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                <div class="frame-space-after-';
$array290 = array (
);
$output289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array290)]);

$output289 .= '"></div>
            ';
return $output289;
};
$arguments284 = array();
$arguments284['then'] = NULL;
$arguments284['else'] = NULL;
$arguments284['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments284['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments284['__thenClosure'] = $renderChildrenClosure285;

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output232 .= '

        ';
return $output232;
};
$arguments230 = array();
$arguments230['if'] = NULL;

$output146 .= '';

$output146 .= '
    ';
return $output146;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array144);
$array143['1'] = ' != none';

$expression145 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '

        <article class="post">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
   <header>
   <div class="title">
       <h2>';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array10)]);

$output9 .= '</h2>
   </div>
   </header>
';
return $output9;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array7);

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression8(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['section'] = NULL;
$arguments11['partial'] = NULL;
$arguments11['delegate'] = NULL;
$arguments11['renderable'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['optional'] = false;
$arguments11['default'] = NULL;
$arguments11['contentAs'] = NULL;
$arguments11['debug'] = true;
$arguments11['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'true';

$expression14 = function($context) {return TRUE;};
$arguments11['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output3 .= '
<footer>
   ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
       ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Footer/All';
$arguments20['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
   ';
return $output19;
};
$arguments15 = array();
$arguments15['section'] = NULL;
$arguments15['partial'] = NULL;
$arguments15['delegate'] = NULL;
$arguments15['renderable'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['optional'] = false;
$arguments15['default'] = NULL;
$arguments15['contentAs'] = NULL;
$arguments15['debug'] = true;
$arguments15['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = 'true';

$expression18 = function($context) {return TRUE;};
$arguments15['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output3 .= '
</footer>
</article>

            <div id="c';
$array23 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array23)]);

$output3 .= '" class="frame frame-';
$array24 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.frame_class', $array24)]);

$output3 .= ' frame-type-';
$array25 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.CType', $array25)]);

$output3 .= ' frame-layout-';
$array26 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.layout', $array26)]);
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

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
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

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output3 .= '">
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

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output3 .= '
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output3 .= '
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output3 .= '
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output3 .= '
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output3 .= '
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output3 .= '
            </div>

        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
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

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#