<?php

class FileList_action_index_79c141c1aa64589addf8214a8b3344f794742ee7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <h1>';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array1)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output2 = '';

$output2 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['section'] = NULL;
$arguments3['partial'] = NULL;
$arguments3['delegate'] = NULL;
$arguments3['renderable'] = NULL;
$arguments3['arguments'] = array (
);
$arguments3['optional'] = false;
$arguments3['default'] = NULL;
$arguments3['contentAs'] = NULL;
$arguments3['debug'] = true;
$arguments3['partial'] = 'SearchForm';
// Rendering Array
$array5 = array();
$array5['searchWord'] = '';
$arguments3['arguments'] = $array5;

$output2 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output2 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('listHtml', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '
        <input type="hidden" name="cmd"/>
    ';
return $output8;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['action'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['object'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = NULL;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['addQueryStringMethod'] = 'GET';
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['name'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['target'] = NULL;
$arguments6['novalidate'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['method'] = 'post';
$arguments6['name'] = 'dblistForm';

$output2 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output2 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['partial'] = 'ListOptions';
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['checkboxes'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array21);
$arguments18['arguments'] = $array20;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'ClipBoard';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['showClipBoard'] = $renderingContext->getVariableProvider()->getByPath('showClipBoard', $array25);
$array26 = array (
);$array24['clipBoardHtml'] = $renderingContext->getVariableProvider()->getByPath('clipBoardHtml', $array26);
$arguments22['arguments'] = $array24;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '
    ';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output2 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output2 .= '
';

return $output2;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output27 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'Default';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output27 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
    <h1>';
$array33 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline', $array33)]);

$output32 .= '</h1>
';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'headline';

$output27 .= NULL;

$output27 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['section'] = NULL;
$arguments37['partial'] = NULL;
$arguments37['delegate'] = NULL;
$arguments37['renderable'] = NULL;
$arguments37['arguments'] = array (
);
$arguments37['optional'] = false;
$arguments37['default'] = NULL;
$arguments37['contentAs'] = NULL;
$arguments37['debug'] = true;
$arguments37['partial'] = 'SearchForm';
// Rendering Array
$array39 = array();
$array39['searchWord'] = '';
$arguments37['arguments'] = $array39;

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$array45 = array (
);return $renderingContext->getVariableProvider()->getByPath('listHtml', $array45);
};
$arguments43 = array();
$arguments43['value'] = NULL;

$output42 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output42 .= '
        <input type="hidden" name="cmd"/>
    ';
return $output42;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['aria'] = NULL;
$arguments40['action'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['controller'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['pluginName'] = NULL;
$arguments40['pageUid'] = NULL;
$arguments40['object'] = NULL;
$arguments40['pageType'] = 0;
$arguments40['noCache'] = false;
$arguments40['noCacheHash'] = NULL;
$arguments40['section'] = '';
$arguments40['format'] = '';
$arguments40['additionalParams'] = array (
);
$arguments40['absolute'] = false;
$arguments40['addQueryString'] = false;
$arguments40['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments40['addQueryStringMethod'] = 'GET';
$arguments40['fieldNamePrefix'] = NULL;
$arguments40['actionUri'] = NULL;
$arguments40['objectName'] = NULL;
$arguments40['hiddenFieldClassName'] = NULL;
$arguments40['enctype'] = NULL;
$arguments40['method'] = NULL;
$arguments40['name'] = NULL;
$arguments40['onreset'] = NULL;
$arguments40['onsubmit'] = NULL;
$arguments40['target'] = NULL;
$arguments40['novalidate'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['method'] = 'post';
$arguments40['name'] = 'dblistForm';

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output36 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'ListOptions';
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['checkboxes'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array55);
$arguments52['arguments'] = $array54;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments56['partial'] = 'ClipBoard';
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['showClipBoard'] = $renderingContext->getVariableProvider()->getByPath('showClipBoard', $array59);
$array60 = array (
);$array58['clipBoardHtml'] = $renderingContext->getVariableProvider()->getByPath('clipBoardHtml', $array60);
$arguments56['arguments'] = $array58;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output51 .= '
    ';
return $output51;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['__thenClosure'] = $renderChildrenClosure47;

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output36 .= '
';
return $output36;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'content';

$output27 .= NULL;

$output27 .= '
';

return $output27;
}


}
#