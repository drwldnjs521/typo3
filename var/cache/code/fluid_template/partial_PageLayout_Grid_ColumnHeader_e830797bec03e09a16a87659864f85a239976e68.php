<?php

class partial_PageLayout_Grid_ColumnHeader_e830797bec03e09a16a87659864f85a239976e68 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="t3-page-column-header">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
            <div class="t3-page-column-header-icons">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
                    <a href="';
$array49 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array49)]);

$output48 .= '" title="';
$array50 = array (
);
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editLinkTitle', $array50)]);

$output48 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['identifier'] = NULL;
$arguments51['size'] = 'small';
$arguments51['overlay'] = NULL;
$arguments51['state'] = 'default';
$arguments51['alternativeMarkupIdentifier'] = NULL;
$arguments51['identifier'] = 'actions-document-open';

$output48 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '</a>
                ';
return $output48;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array45);
$array44['1'] = ' && ';
$array46 = array (
);$array44['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array46);

$expression47 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = $renderChildrenClosure43;

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
            </div>
            ';
$array53 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array53)]);

$output41 .= '
        ';
return $output41;
};
$arguments39 = array();

$output38 .= '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
            ';
$array60 = array (
);
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array60)]);

$output59 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$array63 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array63);
};
$arguments61 = array();
$arguments61['value'] = NULL;

$output59 .= isset($arguments61['value']) ? $arguments61['value'] : $renderChildrenClosure62();

$output59 .= ')
        ';
return $output59;
};
$arguments54 = array();
$arguments54['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array57);

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)
					),
					$renderingContext
				);

$output38 .= '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array72);
};
$arguments70 = array();
$arguments70['value'] = NULL;

$output69 .= isset($arguments70['value']) ? $arguments70['value'] : $renderChildrenClosure71();

$output69 .= '
        ';
return $output69;
};
$arguments64 = array();
$arguments64['if'] = NULL;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = '!';
$array67 = array (
);$array66['1'] = $renderingContext->getVariableProvider()->getByPath('hideRestrictedColumns', $array67);

$expression68 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments64['if'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);

$output38 .= '';

$output38 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array78);
};
$arguments76 = array();
$arguments76['value'] = NULL;

$output75 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output75 .= '
        ';
return $output75;
};
$arguments73 = array();
$arguments73['if'] = NULL;

$output38 .= '';

$output38 .= '
    ';
return $output38;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('column.active', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            <div class="t3-page-column-header-icons">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                    <a href="';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editUrl', $array11)]);

$output10 .= '" title="';
$array12 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.editLinkTitle', $array12)]);

$output10 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['identifier'] = NULL;
$arguments13['size'] = 'small';
$arguments13['overlay'] = NULL;
$arguments13['state'] = 'default';
$arguments13['alternativeMarkupIdentifier'] = NULL;
$arguments13['identifier'] = 'actions-document-open';

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '</a>
                ';
return $output10;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array7);
$array6['1'] = ' && ';
$array8 = array (
);$array6['2'] = $renderingContext->getVariableProvider()->getByPath('column.editUrl', $array8);

$expression9 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = $renderChildrenClosure5;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
            </div>
            ';
$array15 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array15)]);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            ';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.title', $array17)]);

$output16 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleUnassigned', $array20);
};
$arguments18 = array();
$arguments18['value'] = NULL;

$output16 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output16 .= ')
        ';
return $output16;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('column.unassigned', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output24 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output24 .= '
        ';
return $output24;
};
$arguments1['__elseifClosures'][] = function() use ($renderingContext, $self) {
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array28['0'] = '!';
$array29 = array (
);$array28['1'] = $renderingContext->getVariableProvider()->getByPath('hideRestrictedColumns', $array29);

$expression30 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('column.titleInaccessible', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output31 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output31 .= '
        ';
return $output31;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</div>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
    <div class="t3-page-ce t3js-page-ce" data-page="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array87)]);

$output86 .= '" id="';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array88)]);

$output86 .= '">
        <div class="t3js-page-new-ce t3-page-ce-wrapper-new-ce" id="colpos-';
$array89 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.columnNumber', $array89)]);

$output86 .= '-page-';
$array90 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.context.pageId', $array90)]);

$output86 .= '-';
$array91 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.uniqueId', $array91)]);

$output86 .= '">
            <a href="';
$array92 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('column.newContentUrl', $array92)]);

$output86 .= '" title="';
$array93 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array93)]);

$output86 .= '" data-title="';
$array94 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitle', $array94)]);

$output86 .= '"
                class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('column.context.drawingConfiguration.showNewContentWizard', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['then'] = 't3js-toggle-new-content-element-wizard disabled';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output86 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['identifier'] = NULL;
$arguments100['size'] = 'small';
$arguments100['overlay'] = NULL;
$arguments100['state'] = 'default';
$arguments100['alternativeMarkupIdentifier'] = NULL;
$arguments100['identifier'] = 'actions-add';

$output86 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output86 .= '
                ';
$array102 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newContentTitleShort', $array102)]);

$output86 .= '
            </a>
        </div>
        <div class="t3-page-ce-dropzone-available t3js-page-ce-dropzone-available"></div>
    </div>
';
return $output86;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('allowEditContent', $array82);
$array81['1'] = ' && ';
$array83 = array (
);$array81['2'] = $renderingContext->getVariableProvider()->getByPath('column.contentEditable', $array83);
$array81['3'] = ' && ';
$array84 = array (
);$array81['4'] = $renderingContext->getVariableProvider()->getByPath('column.context.allowNewContent', $array84);

$expression85 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]));};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#