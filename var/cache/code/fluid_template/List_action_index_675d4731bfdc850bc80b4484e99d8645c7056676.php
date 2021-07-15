<?php

class List_action_index_675d4731bfdc850bc80b4484e99d8645c7056676 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'main';
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
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
$arguments3['partial'] = 'List/UploadForm';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    <form class="form-inline">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['name'] = NULL;
$arguments5['value'] = NULL;
$arguments5['property'] = NULL;
$arguments5['autofocus'] = NULL;
$arguments5['disabled'] = NULL;
$arguments5['maxlength'] = NULL;
$arguments5['readonly'] = NULL;
$arguments5['size'] = NULL;
$arguments5['placeholder'] = NULL;
$arguments5['pattern'] = NULL;
$arguments5['errorClass'] = 'f3-form-error';
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['required'] = false;
$arguments5['type'] = 'text';
$arguments5['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['languageKey'] = NULL;
$arguments7['alternativeLanguageKeys'] = NULL;
$arguments7['key'] = 'extensionList.search';
$arguments5['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$arguments5['id'] = 'Tx_Extensionmanager_extensionkey';
$array9 = array (
);$arguments5['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array9);
$arguments5['class'] = 'form-control extension-list-search';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                </div>
            </div>
            <div class="col-sm-6">
                <div class="btn-group pull-right">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['key'] = NULL;
$arguments22['id'] = NULL;
$arguments22['default'] = NULL;
$arguments22['arguments'] = NULL;
$arguments22['extensionName'] = NULL;
$arguments22['languageKey'] = NULL;
$arguments22['alternativeLanguageKeys'] = NULL;
$arguments22['key'] = 'extensionList.filter.showAll';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                    ';
return $output21;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['aria'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$arguments10['action'] = NULL;
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['pageType'] = NULL;
$arguments10['noCache'] = NULL;
$arguments10['noCacheHash'] = NULL;
$arguments10['section'] = NULL;
$arguments10['format'] = NULL;
$arguments10['linkAccessRestrictedPages'] = NULL;
$arguments10['additionalParams'] = NULL;
$arguments10['absolute'] = NULL;
$arguments10['addQueryString'] = NULL;
$arguments10['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments10['addQueryStringMethod'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['action'] = 'index';
$arguments10['controller'] = 'List';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['languageKey'] = NULL;
$arguments12['alternativeLanguageKeys'] = NULL;
$arguments12['key'] = 'extensionList.filter.showAll';
$arguments10['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering Array
$array14 = array();
$array14['filter'] = '';
$arguments10['arguments'] = $array14;
$output15 = '';

$output15 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array19);
$array18['1'] = ' == All';

$expression20 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "All");};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['then'] = 'active';

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);
$arguments10['class'] = $output15;
$arguments10['style'] = 'width: 80px;';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['key'] = NULL;
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$arguments36['languageKey'] = NULL;
$arguments36['alternativeLanguageKeys'] = NULL;
$arguments36['key'] = 'extensionList.filter.showSystemExtensions';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
                    ';
return $output35;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['aria'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['name'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['rev'] = NULL;
$arguments24['target'] = NULL;
$arguments24['action'] = NULL;
$arguments24['controller'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['pluginName'] = NULL;
$arguments24['pageUid'] = NULL;
$arguments24['pageType'] = NULL;
$arguments24['noCache'] = NULL;
$arguments24['noCacheHash'] = NULL;
$arguments24['section'] = NULL;
$arguments24['format'] = NULL;
$arguments24['linkAccessRestrictedPages'] = NULL;
$arguments24['additionalParams'] = NULL;
$arguments24['absolute'] = NULL;
$arguments24['addQueryString'] = NULL;
$arguments24['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments24['addQueryStringMethod'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['action'] = 'index';
$arguments24['controller'] = 'List';
// Rendering Array
$array26 = array();
$array26['filter'] = 'System';
$arguments24['arguments'] = $array26;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'extensionList.filter.showSystemExtensions';
$arguments24['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
$output29 = '';

$output29 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array33);
$array32['1'] = ' == System';

$expression34 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "System");};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression34(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);
$arguments30['then'] = 'active';

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
$arguments24['class'] = $output29;
$arguments24['style'] = 'width: 80px;';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'extensionList.filter.showLocalExtensions';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '
                    ';
return $output49;
};
$arguments38 = array();
$arguments38['additionalAttributes'] = NULL;
$arguments38['data'] = NULL;
$arguments38['aria'] = NULL;
$arguments38['class'] = NULL;
$arguments38['dir'] = NULL;
$arguments38['id'] = NULL;
$arguments38['lang'] = NULL;
$arguments38['style'] = NULL;
$arguments38['title'] = NULL;
$arguments38['accesskey'] = NULL;
$arguments38['tabindex'] = NULL;
$arguments38['onclick'] = NULL;
$arguments38['name'] = NULL;
$arguments38['rel'] = NULL;
$arguments38['rev'] = NULL;
$arguments38['target'] = NULL;
$arguments38['action'] = NULL;
$arguments38['controller'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['pluginName'] = NULL;
$arguments38['pageUid'] = NULL;
$arguments38['pageType'] = NULL;
$arguments38['noCache'] = NULL;
$arguments38['noCacheHash'] = NULL;
$arguments38['section'] = NULL;
$arguments38['format'] = NULL;
$arguments38['linkAccessRestrictedPages'] = NULL;
$arguments38['additionalParams'] = NULL;
$arguments38['absolute'] = NULL;
$arguments38['addQueryString'] = NULL;
$arguments38['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['action'] = 'index';
$arguments38['controller'] = 'List';
// Rendering Array
$array40 = array();
$array40['filter'] = 'Local';
$arguments38['arguments'] = $array40;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['key'] = NULL;
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['languageKey'] = NULL;
$arguments41['alternativeLanguageKeys'] = NULL;
$arguments41['key'] = 'extensionList.filter.showLocalExtensions';
$arguments38['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
$output43 = '';

$output43 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array47);
$array46['1'] = ' == Local';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "Local");};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = 'active';

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
$arguments38['class'] = $output43;
$arguments38['style'] = 'width: 80px;';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="table-fit">
        <table id="typo3-extension-list" class="table table-striped table-hover extension-list">
            <thead>
                <tr>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'extensionList.header.title.update';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'extensionList.header.update';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '</th>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$arguments56['key'] = 'extensionList.header.title.activate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'extensionList.header.activate';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output0 .= '</th>
                    <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'extensionList.header.extensionName';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output0 .= '</th>
                    <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'extensionList.header.extensionKey';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="dotsep">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'extensionList.header.extensionVersion';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'extensionList.header.extensionState';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output0 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$arguments68['key'] = 'extensionList.header.extensionType';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['key'] = NULL;
$arguments70['id'] = NULL;
$arguments70['default'] = NULL;
$arguments70['arguments'] = NULL;
$arguments70['extensionName'] = NULL;
$arguments70['languageKey'] = NULL;
$arguments70['alternativeLanguageKeys'] = NULL;
$arguments70['key'] = 'extensionList.header.extensionActions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output0 .= '</th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['name'] = NULL;
$arguments76['name'] = 'updateIsBlocked';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array81);
$array80['1'] = ' || ';
$array82 = array (
);$array80['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array82);
$array80['3'] = ' || ';
$array83 = array (
);$array80['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array83);
$array80['5'] = ' == \'excludeFromUpdates\'';

$expression84 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['then'] = 1;
$arguments78['else'] = 0;
$arguments76['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['value'] = NULL;
$arguments85['name'] = NULL;
$arguments85['name'] = 'sortUpdate';
$arguments85['value'] = 0;
$renderChildrenClosure86 = ($arguments85['value'] !== null) ? function() use ($arguments85) { return $arguments85['value']; } : $renderChildrenClosure86;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['value'] = NULL;
$arguments87['name'] = NULL;
$arguments87['name'] = 'sortUpdate';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array92);
$array91['1'] = ' && ';
$array93 = array (
);$array91['2'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array93);

$expression94 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['then'] = 1;
$arguments87['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);
$renderChildrenClosure88 = ($arguments87['value'] !== null) ? function() use ($arguments87) { return $arguments87['value']; } : $renderChildrenClosure88;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['value'] = NULL;
$arguments95['name'] = NULL;
$arguments95['name'] = 'sortUpdate';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['then'] = NULL;
$arguments97['else'] = NULL;
$arguments97['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array100);
$array99['1'] = ' && !';
$array101 = array (
);$array99['2'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array101);

$expression102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments97['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['then'] = 2;
$arguments95['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output132 = '';

$output132 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                            <tr role="row" id="';
$array136 = array (
);
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array136)]);

$output135 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array140);
$array139['1'] = ' == -1';

$expression141 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['then'] = 'insecure';

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['then'] = NULL;
$arguments142['else'] = NULL;
$arguments142['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array145);
$array144['1'] = ' == -2';

$expression146 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments142['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$arguments142['then'] = 'outdated';

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output135 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['then'] = '';
$arguments147['else'] = 'inactive';

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output135 .= '">
                        ';
return $output135;
};
$arguments133 = array();

$output132 .= '';

$output132 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                            <tr role="row" id="';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array155)]);

$output154 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = array();
$array159 = array (
);$array158['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array159);

$expression160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments156['then'] = '';
$arguments156['else'] = 'inactive';

$output154 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output154 .= '">
                        ';
return $output154;
};
$arguments152 = array();
$arguments152['if'] = NULL;

$output132 .= '';

$output132 .= '
                    ';
return $output132;
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array130);

$expression131 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                            <tr role="row" id="';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array106)]);

$output105 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array110);
$array109['1'] = ' == -1';

$expression111 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['then'] = 'insecure';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array115);
$array114['1'] = ' == -2';

$expression116 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$arguments112['then'] = 'outdated';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output105 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['then'] = '';
$arguments117['else'] = 'inactive';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output105 .= '">
                        ';
return $output105;
};
$arguments103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                            <tr role="row" id="';
$array123 = array (
);
$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array123)]);

$output122 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$arguments124['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array126 = array();
$array127 = array (
);$array126['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array127);

$expression128 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments124['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression128(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array126)
					),
					$renderingContext
				);
$arguments124['then'] = '';
$arguments124['else'] = 'inactive';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output122 .= '">
                        ';
return $output122;
};

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output75 .= '
                    <td data-sort="';
$array161 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortUpdate', $array161)]);

$output75 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$arguments197['key'] = 'extensionList.updateDisabled';

$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output196 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['identifier'] = NULL;
$arguments199['size'] = 'small';
$arguments199['overlay'] = NULL;
$arguments199['state'] = 'default';
$arguments199['alternativeMarkupIdentifier'] = NULL;
$arguments199['identifier'] = 'actions-system-extension-update';

$output196 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output196 .= '
                                    </span>
                                ';
return $output196;
};
$arguments194 = array();

$output193 .= '';

$output193 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output203 = '';

$output203 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['identifier'] = NULL;
$arguments216['size'] = 'small';
$arguments216['overlay'] = NULL;
$arguments216['state'] = 'default';
$arguments216['alternativeMarkupIdentifier'] = NULL;
$arguments216['identifier'] = 'actions-system-extension-update';

$output215 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= '
                                    ';
return $output215;
};
$arguments204 = array();
$arguments204['additionalAttributes'] = NULL;
$arguments204['data'] = NULL;
$arguments204['aria'] = NULL;
$arguments204['class'] = NULL;
$arguments204['dir'] = NULL;
$arguments204['id'] = NULL;
$arguments204['lang'] = NULL;
$arguments204['style'] = NULL;
$arguments204['title'] = NULL;
$arguments204['accesskey'] = NULL;
$arguments204['tabindex'] = NULL;
$arguments204['onclick'] = NULL;
$arguments204['name'] = NULL;
$arguments204['rel'] = NULL;
$arguments204['rev'] = NULL;
$arguments204['target'] = NULL;
$arguments204['action'] = NULL;
$arguments204['controller'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['pluginName'] = NULL;
$arguments204['pageUid'] = NULL;
$arguments204['pageType'] = NULL;
$arguments204['noCache'] = NULL;
$arguments204['noCacheHash'] = NULL;
$arguments204['section'] = NULL;
$arguments204['format'] = NULL;
$arguments204['linkAccessRestrictedPages'] = NULL;
$arguments204['additionalParams'] = NULL;
$arguments204['absolute'] = NULL;
$arguments204['addQueryString'] = NULL;
$arguments204['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments204['addQueryStringMethod'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['action'] = 'updateCommentForUpdatableVersions';
$arguments204['class'] = 'btn btn-default';
// Rendering Array
$array206 = array();
$array206['data-action'] = 'update-extension';
$arguments204['additionalAttributes'] = $array206;
$arguments204['format'] = 'json';
$arguments204['controller'] = 'Download';
// Rendering Array
$array207 = array();
$array208 = array (
);$array207['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array208);
$array209 = array (
);$array207['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array209);
$array210 = array (
);$array207['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array210);
$arguments204['arguments'] = $array207;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$arguments211['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array214);
$arguments211['arguments'] = $array213;
$arguments204['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output203 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output203 .= '
                                ';
return $output203;
};
$arguments201 = array();
$arguments201['if'] = NULL;

$output193 .= '';

$output193 .= '
                            ';
return $output193;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array191);

$expression192 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['key'] = NULL;
$arguments171['id'] = NULL;
$arguments171['default'] = NULL;
$arguments171['arguments'] = NULL;
$arguments171['extensionName'] = NULL;
$arguments171['languageKey'] = NULL;
$arguments171['alternativeLanguageKeys'] = NULL;
$arguments171['key'] = 'extensionList.updateDisabled';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['identifier'] = NULL;
$arguments173['size'] = 'small';
$arguments173['overlay'] = NULL;
$arguments173['state'] = 'default';
$arguments173['alternativeMarkupIdentifier'] = NULL;
$arguments173['identifier'] = 'actions-system-extension-update';

$output170 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);

$output170 .= '
                                    </span>
                                ';
return $output170;
};
$arguments168['__elseClosures'][] = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['identifier'] = NULL;
$arguments188['size'] = 'small';
$arguments188['overlay'] = NULL;
$arguments188['state'] = 'default';
$arguments188['alternativeMarkupIdentifier'] = NULL;
$arguments188['identifier'] = 'actions-system-extension-update';

$output187 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                                    ';
return $output187;
};
$arguments176 = array();
$arguments176['additionalAttributes'] = NULL;
$arguments176['data'] = NULL;
$arguments176['aria'] = NULL;
$arguments176['class'] = NULL;
$arguments176['dir'] = NULL;
$arguments176['id'] = NULL;
$arguments176['lang'] = NULL;
$arguments176['style'] = NULL;
$arguments176['title'] = NULL;
$arguments176['accesskey'] = NULL;
$arguments176['tabindex'] = NULL;
$arguments176['onclick'] = NULL;
$arguments176['name'] = NULL;
$arguments176['rel'] = NULL;
$arguments176['rev'] = NULL;
$arguments176['target'] = NULL;
$arguments176['action'] = NULL;
$arguments176['controller'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['pluginName'] = NULL;
$arguments176['pageUid'] = NULL;
$arguments176['pageType'] = NULL;
$arguments176['noCache'] = NULL;
$arguments176['noCacheHash'] = NULL;
$arguments176['section'] = NULL;
$arguments176['format'] = NULL;
$arguments176['linkAccessRestrictedPages'] = NULL;
$arguments176['additionalParams'] = NULL;
$arguments176['absolute'] = NULL;
$arguments176['addQueryString'] = NULL;
$arguments176['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments176['addQueryStringMethod'] = NULL;
$arguments176['arguments'] = NULL;
$arguments176['action'] = 'updateCommentForUpdatableVersions';
$arguments176['class'] = 'btn btn-default';
// Rendering Array
$array178 = array();
$array178['data-action'] = 'update-extension';
$arguments176['additionalAttributes'] = $array178;
$arguments176['format'] = 'json';
$arguments176['controller'] = 'Download';
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array180);
$array181 = array (
);$array179['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array181);
$array182 = array (
);$array179['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array182);
$arguments176['arguments'] = $array179;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['key'] = NULL;
$arguments183['id'] = NULL;
$arguments183['default'] = NULL;
$arguments183['arguments'] = NULL;
$arguments183['extensionName'] = NULL;
$arguments183['languageKey'] = NULL;
$arguments183['alternativeLanguageKeys'] = NULL;
$arguments183['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array186);
$arguments183['arguments'] = $array185;
$arguments176['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                                ';
return $output175;
};

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
                        ';
return $output167;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output75 .= '
                    </td>
                    <td data-sort="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = array();
$array221 = array (
);$array220['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array221);

$expression222 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments218['then'] = 'active';
$arguments218['else'] = 'inactive';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output75 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['additionalAttributes'] = NULL;
$arguments223['data'] = NULL;
$arguments223['aria'] = NULL;
$arguments223['class'] = NULL;
$arguments223['dir'] = NULL;
$arguments223['id'] = NULL;
$arguments223['lang'] = NULL;
$arguments223['style'] = NULL;
$arguments223['title'] = NULL;
$arguments223['accesskey'] = NULL;
$arguments223['tabindex'] = NULL;
$arguments223['onclick'] = NULL;
$arguments223['name'] = NULL;
$arguments223['rel'] = NULL;
$arguments223['rev'] = NULL;
$arguments223['target'] = NULL;
$arguments223['action'] = NULL;
$arguments223['controller'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['pluginName'] = NULL;
$arguments223['pageUid'] = NULL;
$arguments223['pageType'] = NULL;
$arguments223['noCache'] = NULL;
$arguments223['noCacheHash'] = NULL;
$arguments223['section'] = NULL;
$arguments223['format'] = NULL;
$arguments223['linkAccessRestrictedPages'] = NULL;
$arguments223['additionalParams'] = NULL;
$arguments223['absolute'] = NULL;
$arguments223['addQueryString'] = NULL;
$arguments223['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments223['addQueryStringMethod'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extension'] = NULL;
$array225 = array (
);$arguments223['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array225);

$output75 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output75 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                            <img class="extension-icon" src="';
$array232 = array (
);
$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array232)]);

$output231 .= '" alt="" />
                        ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('extension.icon', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output75 .= '
                        <span title="';
$array233 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array233)]);

$output75 .= '">';
$array234 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array234)]);

$output75 .= '</span>
                    </td>
                    <td>';
$array235 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array235)]);

$output75 .= '</td>
                    <td>';
$array236 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array236)]);

$output75 .= '</td>
                    <td><span class="label label-';
$array237 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array237)]);

$output75 .= '">';
$array238 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array238)]);

$output75 .= '</span></td>
                    <td>';
$array239 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array239)]);

$output75 .= '</td>
                    <td>
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['aria'] = NULL;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$arguments244['action'] = NULL;
$arguments244['controller'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['pluginName'] = NULL;
$arguments244['pageUid'] = NULL;
$arguments244['pageType'] = NULL;
$arguments244['noCache'] = NULL;
$arguments244['noCacheHash'] = NULL;
$arguments244['section'] = NULL;
$arguments244['format'] = NULL;
$arguments244['linkAccessRestrictedPages'] = NULL;
$arguments244['additionalParams'] = NULL;
$arguments244['absolute'] = NULL;
$arguments244['addQueryString'] = NULL;
$arguments244['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments244['addQueryStringMethod'] = NULL;
$arguments244['arguments'] = NULL;
$arguments244['extensionKey'] = NULL;
$arguments244['class'] = 'btn btn-default';
$array246 = array (
);$arguments244['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array246);

$output243 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['additionalAttributes'] = NULL;
$arguments253['data'] = NULL;
$arguments253['aria'] = NULL;
$arguments253['class'] = NULL;
$arguments253['dir'] = NULL;
$arguments253['id'] = NULL;
$arguments253['lang'] = NULL;
$arguments253['style'] = NULL;
$arguments253['title'] = NULL;
$arguments253['accesskey'] = NULL;
$arguments253['tabindex'] = NULL;
$arguments253['onclick'] = NULL;
$arguments253['name'] = NULL;
$arguments253['rel'] = NULL;
$arguments253['rev'] = NULL;
$arguments253['target'] = NULL;
$arguments253['action'] = NULL;
$arguments253['controller'] = NULL;
$arguments253['extensionName'] = NULL;
$arguments253['pluginName'] = NULL;
$arguments253['pageUid'] = NULL;
$arguments253['pageType'] = NULL;
$arguments253['noCache'] = NULL;
$arguments253['noCacheHash'] = NULL;
$arguments253['section'] = NULL;
$arguments253['format'] = NULL;
$arguments253['linkAccessRestrictedPages'] = NULL;
$arguments253['additionalParams'] = NULL;
$arguments253['absolute'] = NULL;
$arguments253['addQueryString'] = NULL;
$arguments253['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments253['addQueryStringMethod'] = NULL;
$arguments253['arguments'] = NULL;
$arguments253['extension'] = NULL;
$arguments253['class'] = 'btn btn-default';
$array255 = array (
);$arguments253['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array255);

$output252 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '
                                ';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array249['0'] = '!';
$array250 = array (
);$array249['1'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array250);

$expression251 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['identifier'] = NULL;
$arguments263['size'] = 'small';
$arguments263['overlay'] = NULL;
$arguments263['state'] = 'default';
$arguments263['alternativeMarkupIdentifier'] = NULL;
$arguments263['identifier'] = 'actions-system-extension-download';

$output262 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
                                ';
return $output262;
};
$arguments256 = array();
$arguments256['additionalAttributes'] = NULL;
$arguments256['data'] = NULL;
$arguments256['aria'] = NULL;
$arguments256['class'] = NULL;
$arguments256['dir'] = NULL;
$arguments256['id'] = NULL;
$arguments256['lang'] = NULL;
$arguments256['style'] = NULL;
$arguments256['title'] = NULL;
$arguments256['accesskey'] = NULL;
$arguments256['tabindex'] = NULL;
$arguments256['onclick'] = NULL;
$arguments256['name'] = NULL;
$arguments256['rel'] = NULL;
$arguments256['rev'] = NULL;
$arguments256['target'] = NULL;
$arguments256['action'] = NULL;
$arguments256['controller'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['pluginName'] = NULL;
$arguments256['pageUid'] = NULL;
$arguments256['pageType'] = NULL;
$arguments256['noCache'] = NULL;
$arguments256['noCacheHash'] = NULL;
$arguments256['section'] = NULL;
$arguments256['format'] = NULL;
$arguments256['linkAccessRestrictedPages'] = NULL;
$arguments256['additionalParams'] = NULL;
$arguments256['absolute'] = NULL;
$arguments256['addQueryString'] = NULL;
$arguments256['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments256['addQueryStringMethod'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['action'] = 'downloadExtensionZip';
$arguments256['controller'] = 'Action';
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array259);
$arguments256['arguments'] = $array258;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['key'] = NULL;
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$arguments260['languageKey'] = NULL;
$arguments260['alternativeLanguageKeys'] = NULL;
$arguments260['key'] = 'extensionList.downloadzip';
$arguments256['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);
$arguments256['class'] = 'btn btn-default';

$output243 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['additionalAttributes'] = NULL;
$arguments265['data'] = NULL;
$arguments265['aria'] = NULL;
$arguments265['class'] = NULL;
$arguments265['dir'] = NULL;
$arguments265['id'] = NULL;
$arguments265['lang'] = NULL;
$arguments265['style'] = NULL;
$arguments265['title'] = NULL;
$arguments265['accesskey'] = NULL;
$arguments265['tabindex'] = NULL;
$arguments265['onclick'] = NULL;
$arguments265['name'] = NULL;
$arguments265['rel'] = NULL;
$arguments265['rev'] = NULL;
$arguments265['target'] = NULL;
$arguments265['action'] = NULL;
$arguments265['controller'] = NULL;
$arguments265['extensionName'] = NULL;
$arguments265['pluginName'] = NULL;
$arguments265['pageUid'] = NULL;
$arguments265['pageType'] = NULL;
$arguments265['noCache'] = NULL;
$arguments265['noCacheHash'] = NULL;
$arguments265['section'] = NULL;
$arguments265['format'] = NULL;
$arguments265['linkAccessRestrictedPages'] = NULL;
$arguments265['additionalParams'] = NULL;
$arguments265['absolute'] = NULL;
$arguments265['addQueryString'] = NULL;
$arguments265['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments265['addQueryStringMethod'] = NULL;
$arguments265['arguments'] = NULL;
$arguments265['extension'] = NULL;
$arguments265['class'] = 'btn btn-default';
$array267 = array (
);$arguments265['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array267);

$output243 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output243 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                                        <a href="';
$array284 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array284)]);

$output283 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['identifier'] = NULL;
$arguments285['size'] = 'small';
$arguments285['overlay'] = NULL;
$arguments285['state'] = 'default';
$arguments285['alternativeMarkupIdentifier'] = NULL;
$arguments285['identifier'] = 'actions-system-extension-documentation';
$arguments285['size'] = 'small';

$output283 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output283 .= '
                                        </a>
                                    ';
return $output283;
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['identifier'] = NULL;
$arguments290['size'] = 'small';
$arguments290['overlay'] = NULL;
$arguments290['state'] = 'default';
$arguments290['alternativeMarkupIdentifier'] = NULL;
$arguments290['identifier'] = 'empty-empty';
$arguments290['size'] = 'small';

$output289 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '</span>
                                    ';
return $output289;
};
$arguments287 = array();
$arguments287['if'] = NULL;

$output280 .= '';

$output280 .= '
                                ';
return $output280;
};
$arguments268 = array();
$arguments268['then'] = NULL;
$arguments268['else'] = NULL;
$arguments268['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments268['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments268['__thenClosure'] = function() use ($renderingContext, $self) {
$output270 = '';

$output270 .= '
                                        <a href="';
$array271 = array (
);
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array271)]);

$output270 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['identifier'] = NULL;
$arguments272['size'] = 'small';
$arguments272['overlay'] = NULL;
$arguments272['state'] = 'default';
$arguments272['alternativeMarkupIdentifier'] = NULL;
$arguments272['identifier'] = 'actions-system-extension-documentation';
$arguments272['size'] = 'small';

$output270 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output270 .= '
                                        </a>
                                    ';
return $output270;
};
$arguments268['__elseClosures'][] = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['identifier'] = NULL;
$arguments275['size'] = 'small';
$arguments275['overlay'] = NULL;
$arguments275['state'] = 'default';
$arguments275['alternativeMarkupIdentifier'] = NULL;
$arguments275['identifier'] = 'empty-empty';
$arguments275['size'] = 'small';

$output274 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '</span>
                                    ';
return $output274;
};

$output243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output243 .= '
                            ';
return $output243;
};
$arguments240 = array();
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['aria'] = NULL;
$arguments240['extension'] = NULL;
$array242 = array (
);$arguments240['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array242);

$output75 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output75 .= '
                        </div>
                    </td>
                    </tr>
                ';
return $output75;
};
$arguments72 = array();
$arguments72['each'] = NULL;
$arguments72['as'] = NULL;
$arguments72['key'] = NULL;
$arguments72['reverse'] = false;
$arguments72['iteration'] = NULL;
$array74 = array (
);$arguments72['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array74);
$arguments72['as'] = 'extension';
$arguments72['key'] = 'extensionKey';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output0 .= '
            </tbody>
        </table>
    </div>

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output292 = '';

$output292 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['name'] = NULL;
$arguments293['name'] = 'main';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output292 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['key'] = NULL;
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['languageKey'] = NULL;
$arguments298['alternativeLanguageKeys'] = NULL;
$arguments298['key'] = 'installedExtensions';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output297 .= '</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['section'] = NULL;
$arguments300['partial'] = NULL;
$arguments300['delegate'] = NULL;
$arguments300['renderable'] = NULL;
$arguments300['arguments'] = array (
);
$arguments300['optional'] = false;
$arguments300['default'] = NULL;
$arguments300['contentAs'] = NULL;
$arguments300['debug'] = true;
$arguments300['partial'] = 'List/UploadForm';

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output297 .= '
    <form class="form-inline">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['additionalAttributes'] = NULL;
$arguments302['data'] = NULL;
$arguments302['aria'] = NULL;
$arguments302['name'] = NULL;
$arguments302['value'] = NULL;
$arguments302['property'] = NULL;
$arguments302['autofocus'] = NULL;
$arguments302['disabled'] = NULL;
$arguments302['maxlength'] = NULL;
$arguments302['readonly'] = NULL;
$arguments302['size'] = NULL;
$arguments302['placeholder'] = NULL;
$arguments302['pattern'] = NULL;
$arguments302['errorClass'] = 'f3-form-error';
$arguments302['class'] = NULL;
$arguments302['dir'] = NULL;
$arguments302['id'] = NULL;
$arguments302['lang'] = NULL;
$arguments302['style'] = NULL;
$arguments302['title'] = NULL;
$arguments302['accesskey'] = NULL;
$arguments302['tabindex'] = NULL;
$arguments302['onclick'] = NULL;
$arguments302['required'] = false;
$arguments302['type'] = 'text';
$arguments302['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'extensionList.search';
$arguments302['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);
$arguments302['id'] = 'Tx_Extensionmanager_extensionkey';
$array306 = array (
);$arguments302['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array306);
$arguments302['class'] = 'form-control extension-list-search';

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output297 .= '
                </div>
            </div>
            <div class="col-sm-6">
                <div class="btn-group pull-right">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments319 = array();
$arguments319['key'] = NULL;
$arguments319['id'] = NULL;
$arguments319['default'] = NULL;
$arguments319['arguments'] = NULL;
$arguments319['extensionName'] = NULL;
$arguments319['languageKey'] = NULL;
$arguments319['alternativeLanguageKeys'] = NULL;
$arguments319['key'] = 'extensionList.filter.showAll';

$output318 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext)]);

$output318 .= '
                    ';
return $output318;
};
$arguments307 = array();
$arguments307['additionalAttributes'] = NULL;
$arguments307['data'] = NULL;
$arguments307['aria'] = NULL;
$arguments307['class'] = NULL;
$arguments307['dir'] = NULL;
$arguments307['id'] = NULL;
$arguments307['lang'] = NULL;
$arguments307['style'] = NULL;
$arguments307['title'] = NULL;
$arguments307['accesskey'] = NULL;
$arguments307['tabindex'] = NULL;
$arguments307['onclick'] = NULL;
$arguments307['name'] = NULL;
$arguments307['rel'] = NULL;
$arguments307['rev'] = NULL;
$arguments307['target'] = NULL;
$arguments307['action'] = NULL;
$arguments307['controller'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['pluginName'] = NULL;
$arguments307['pageUid'] = NULL;
$arguments307['pageType'] = NULL;
$arguments307['noCache'] = NULL;
$arguments307['noCacheHash'] = NULL;
$arguments307['section'] = NULL;
$arguments307['format'] = NULL;
$arguments307['linkAccessRestrictedPages'] = NULL;
$arguments307['additionalParams'] = NULL;
$arguments307['absolute'] = NULL;
$arguments307['addQueryString'] = NULL;
$arguments307['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments307['addQueryStringMethod'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['action'] = 'index';
$arguments307['controller'] = 'List';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['languageKey'] = NULL;
$arguments309['alternativeLanguageKeys'] = NULL;
$arguments309['key'] = 'extensionList.filter.showAll';
$arguments307['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);
// Rendering Array
$array311 = array();
$array311['filter'] = '';
$arguments307['arguments'] = $array311;
$output312 = '';

$output312 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array316 = array (
);$array315['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array316);
$array315['1'] = ' == All';

$expression317 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "All");};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);
$arguments313['then'] = 'active';

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
$arguments307['class'] = $output312;
$arguments307['style'] = 'width: 80px;';

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);

$output297 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['key'] = NULL;
$arguments333['id'] = NULL;
$arguments333['default'] = NULL;
$arguments333['arguments'] = NULL;
$arguments333['extensionName'] = NULL;
$arguments333['languageKey'] = NULL;
$arguments333['alternativeLanguageKeys'] = NULL;
$arguments333['key'] = 'extensionList.filter.showSystemExtensions';

$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output332 .= '
                    ';
return $output332;
};
$arguments321 = array();
$arguments321['additionalAttributes'] = NULL;
$arguments321['data'] = NULL;
$arguments321['aria'] = NULL;
$arguments321['class'] = NULL;
$arguments321['dir'] = NULL;
$arguments321['id'] = NULL;
$arguments321['lang'] = NULL;
$arguments321['style'] = NULL;
$arguments321['title'] = NULL;
$arguments321['accesskey'] = NULL;
$arguments321['tabindex'] = NULL;
$arguments321['onclick'] = NULL;
$arguments321['name'] = NULL;
$arguments321['rel'] = NULL;
$arguments321['rev'] = NULL;
$arguments321['target'] = NULL;
$arguments321['action'] = NULL;
$arguments321['controller'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['pluginName'] = NULL;
$arguments321['pageUid'] = NULL;
$arguments321['pageType'] = NULL;
$arguments321['noCache'] = NULL;
$arguments321['noCacheHash'] = NULL;
$arguments321['section'] = NULL;
$arguments321['format'] = NULL;
$arguments321['linkAccessRestrictedPages'] = NULL;
$arguments321['additionalParams'] = NULL;
$arguments321['absolute'] = NULL;
$arguments321['addQueryString'] = NULL;
$arguments321['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments321['addQueryStringMethod'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['action'] = 'index';
$arguments321['controller'] = 'List';
// Rendering Array
$array323 = array();
$array323['filter'] = 'System';
$arguments321['arguments'] = $array323;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['languageKey'] = NULL;
$arguments324['alternativeLanguageKeys'] = NULL;
$arguments324['key'] = 'extensionList.filter.showSystemExtensions';
$arguments321['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);
$output326 = '';

$output326 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array329 = array();
$array330 = array (
);$array329['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array330);
$array329['1'] = ' == System';

$expression331 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "System");};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array329)
					),
					$renderingContext
				);
$arguments327['then'] = 'active';

$output326 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);
$arguments321['class'] = $output326;
$arguments321['style'] = 'width: 80px;';

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output297 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['languageKey'] = NULL;
$arguments347['alternativeLanguageKeys'] = NULL;
$arguments347['key'] = 'extensionList.filter.showLocalExtensions';

$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext)]);

$output346 .= '
                    ';
return $output346;
};
$arguments335 = array();
$arguments335['additionalAttributes'] = NULL;
$arguments335['data'] = NULL;
$arguments335['aria'] = NULL;
$arguments335['class'] = NULL;
$arguments335['dir'] = NULL;
$arguments335['id'] = NULL;
$arguments335['lang'] = NULL;
$arguments335['style'] = NULL;
$arguments335['title'] = NULL;
$arguments335['accesskey'] = NULL;
$arguments335['tabindex'] = NULL;
$arguments335['onclick'] = NULL;
$arguments335['name'] = NULL;
$arguments335['rel'] = NULL;
$arguments335['rev'] = NULL;
$arguments335['target'] = NULL;
$arguments335['action'] = NULL;
$arguments335['controller'] = NULL;
$arguments335['extensionName'] = NULL;
$arguments335['pluginName'] = NULL;
$arguments335['pageUid'] = NULL;
$arguments335['pageType'] = NULL;
$arguments335['noCache'] = NULL;
$arguments335['noCacheHash'] = NULL;
$arguments335['section'] = NULL;
$arguments335['format'] = NULL;
$arguments335['linkAccessRestrictedPages'] = NULL;
$arguments335['additionalParams'] = NULL;
$arguments335['absolute'] = NULL;
$arguments335['addQueryString'] = NULL;
$arguments335['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments335['addQueryStringMethod'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['action'] = 'index';
$arguments335['controller'] = 'List';
// Rendering Array
$array337 = array();
$array337['filter'] = 'Local';
$arguments335['arguments'] = $array337;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['key'] = NULL;
$arguments338['id'] = NULL;
$arguments338['default'] = NULL;
$arguments338['arguments'] = NULL;
$arguments338['extensionName'] = NULL;
$arguments338['languageKey'] = NULL;
$arguments338['alternativeLanguageKeys'] = NULL;
$arguments338['key'] = 'extensionList.filter.showLocalExtensions';
$arguments335['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);
$output340 = '';

$output340 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('backendUserFilter', $array344);
$array343['1'] = ' == Local';

$expression345 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "Local");};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['then'] = 'active';

$output340 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);
$arguments335['class'] = $output340;
$arguments335['style'] = 'width: 80px;';

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output297 .= '
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="table-fit">
        <table id="typo3-extension-list" class="table table-striped table-hover extension-list">
            <thead>
                <tr>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['key'] = NULL;
$arguments349['id'] = NULL;
$arguments349['default'] = NULL;
$arguments349['arguments'] = NULL;
$arguments349['extensionName'] = NULL;
$arguments349['languageKey'] = NULL;
$arguments349['alternativeLanguageKeys'] = NULL;
$arguments349['key'] = 'extensionList.header.title.update';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output297 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['key'] = NULL;
$arguments351['id'] = NULL;
$arguments351['default'] = NULL;
$arguments351['arguments'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['languageKey'] = NULL;
$arguments351['alternativeLanguageKeys'] = NULL;
$arguments351['key'] = 'extensionList.header.update';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output297 .= '</th>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['key'] = NULL;
$arguments353['id'] = NULL;
$arguments353['default'] = NULL;
$arguments353['arguments'] = NULL;
$arguments353['extensionName'] = NULL;
$arguments353['languageKey'] = NULL;
$arguments353['alternativeLanguageKeys'] = NULL;
$arguments353['key'] = 'extensionList.header.title.activate';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output297 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['key'] = NULL;
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$arguments355['languageKey'] = NULL;
$arguments355['alternativeLanguageKeys'] = NULL;
$arguments355['key'] = 'extensionList.header.activate';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output297 .= '</th>
                    <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$arguments357['languageKey'] = NULL;
$arguments357['alternativeLanguageKeys'] = NULL;
$arguments357['key'] = 'extensionList.header.extensionName';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext)]);

$output297 .= '</th>
                    <th data-filterable data-sort-default>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['key'] = NULL;
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['languageKey'] = NULL;
$arguments359['alternativeLanguageKeys'] = NULL;
$arguments359['key'] = 'extensionList.header.extensionKey';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output297 .= '</th>
                    <th data-sort-method="dotsep">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['key'] = NULL;
$arguments361['id'] = NULL;
$arguments361['default'] = NULL;
$arguments361['arguments'] = NULL;
$arguments361['extensionName'] = NULL;
$arguments361['languageKey'] = NULL;
$arguments361['alternativeLanguageKeys'] = NULL;
$arguments361['key'] = 'extensionList.header.extensionVersion';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output297 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments363 = array();
$arguments363['key'] = NULL;
$arguments363['id'] = NULL;
$arguments363['default'] = NULL;
$arguments363['arguments'] = NULL;
$arguments363['extensionName'] = NULL;
$arguments363['languageKey'] = NULL;
$arguments363['alternativeLanguageKeys'] = NULL;
$arguments363['key'] = 'extensionList.header.extensionState';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output297 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['key'] = NULL;
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['languageKey'] = NULL;
$arguments365['alternativeLanguageKeys'] = NULL;
$arguments365['key'] = 'extensionList.header.extensionType';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output297 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['key'] = NULL;
$arguments367['id'] = NULL;
$arguments367['default'] = NULL;
$arguments367['arguments'] = NULL;
$arguments367['extensionName'] = NULL;
$arguments367['languageKey'] = NULL;
$arguments367['alternativeLanguageKeys'] = NULL;
$arguments367['key'] = 'extensionList.header.extensionActions';

$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext)]);

$output297 .= '</th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['value'] = NULL;
$arguments373['name'] = NULL;
$arguments373['name'] = 'updateIsBlocked';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['then'] = NULL;
$arguments375['else'] = NULL;
$arguments375['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array377 = array();
$array378 = array (
);$array377['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array378);
$array377['1'] = ' || ';
$array379 = array (
);$array377['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array379);
$array377['3'] = ' || ';
$array380 = array (
);$array377['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array380);
$array377['5'] = ' == \'excludeFromUpdates\'';

$expression381 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments375['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array377)
					),
					$renderingContext
				);
$arguments375['then'] = 1;
$arguments375['else'] = 0;
$arguments373['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);
$renderChildrenClosure374 = ($arguments373['value'] !== null) ? function() use ($arguments373) { return $arguments373['value']; } : $renderChildrenClosure374;
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['value'] = NULL;
$arguments382['name'] = NULL;
$arguments382['name'] = 'sortUpdate';
$arguments382['value'] = 0;
$renderChildrenClosure383 = ($arguments382['value'] !== null) ? function() use ($arguments382) { return $arguments382['value']; } : $renderChildrenClosure383;
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext)]);

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure385 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments384 = array();
$arguments384['value'] = NULL;
$arguments384['name'] = NULL;
$arguments384['name'] = 'sortUpdate';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['then'] = NULL;
$arguments386['else'] = NULL;
$arguments386['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array388 = array();
$array389 = array (
);$array388['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array389);
$array388['1'] = ' && ';
$array390 = array (
);$array388['2'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array390);

$expression391 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments386['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array388)
					),
					$renderingContext
				);
$arguments386['then'] = 1;
$arguments384['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);
$renderChildrenClosure385 = ($arguments384['value'] !== null) ? function() use ($arguments384) { return $arguments384['value']; } : $renderChildrenClosure385;
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext)]);

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure393 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments392 = array();
$arguments392['value'] = NULL;
$arguments392['name'] = NULL;
$arguments392['name'] = 'sortUpdate';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['then'] = NULL;
$arguments394['else'] = NULL;
$arguments394['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array397);
$array396['1'] = ' && !';
$array398 = array (
);$array396['2'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array398);

$expression399 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};
$arguments394['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array396)
					),
					$renderingContext
				);
$arguments394['then'] = 2;
$arguments392['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);
$renderChildrenClosure393 = ($arguments392['value'] !== null) ? function() use ($arguments392) { return $arguments392['value']; } : $renderChildrenClosure393;
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments392, $renderChildrenClosure393, $renderingContext)]);

$output372 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                            <tr role="row" id="';
$array433 = array (
);
$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array433)]);

$output432 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments434 = array();
$arguments434['then'] = NULL;
$arguments434['else'] = NULL;
$arguments434['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array436 = array();
$array437 = array (
);$array436['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array437);
$array436['1'] = ' == -1';

$expression438 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments434['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression438(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array436)
					),
					$renderingContext
				);
$arguments434['then'] = 'insecure';

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array442);
$array441['1'] = ' == -2';

$expression443 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments439['then'] = 'outdated';

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output432 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['then'] = NULL;
$arguments444['else'] = NULL;
$arguments444['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array446 = array();
$array447 = array (
);$array446['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array447);

$expression448 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments444['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression448(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array446)
					),
					$renderingContext
				);
$arguments444['then'] = '';
$arguments444['else'] = 'inactive';

$output432 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);

$output432 .= '">
                        ';
return $output432;
};
$arguments430 = array();

$output429 .= '';

$output429 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
                            <tr role="row" id="';
$array452 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array452)]);

$output451 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array455 = array();
$array456 = array (
);$array455['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array456);

$expression457 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression457(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array455)
					),
					$renderingContext
				);
$arguments453['then'] = '';
$arguments453['else'] = 'inactive';

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output451 .= '">
                        ';
return $output451;
};
$arguments449 = array();
$arguments449['if'] = NULL;

$output429 .= '';

$output429 .= '
                    ';
return $output429;
};
$arguments400 = array();
$arguments400['then'] = NULL;
$arguments400['else'] = NULL;
$arguments400['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array426 = array();
$array427 = array (
);$array426['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array427);

$expression428 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments400['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array426)
					),
					$renderingContext
				);
$arguments400['__thenClosure'] = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
                            <tr role="row" id="';
$array403 = array (
);
$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array403)]);

$output402 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array406 = array();
$array407 = array (
);$array406['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array407);
$array406['1'] = ' == -1';

$expression408 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);
$arguments404['then'] = 'insecure';

$output402 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['then'] = NULL;
$arguments409['else'] = NULL;
$arguments409['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array411 = array();
$array412 = array (
);$array411['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array412);
$array411['1'] = ' == -2';

$expression413 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments409['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array411)
					),
					$renderingContext
				);
$arguments409['then'] = 'outdated';

$output402 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output402 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['then'] = NULL;
$arguments414['else'] = NULL;
$arguments414['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array417);

$expression418 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments414['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression418(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array416)
					),
					$renderingContext
				);
$arguments414['then'] = '';
$arguments414['else'] = 'inactive';

$output402 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output402 .= '">
                        ';
return $output402;
};
$arguments400['__elseClosures'][] = function() use ($renderingContext, $self) {
$output419 = '';

$output419 .= '
                            <tr role="row" id="';
$array420 = array (
);
$output419 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array420)]);

$output419 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['then'] = NULL;
$arguments421['else'] = NULL;
$arguments421['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array423 = array();
$array424 = array (
);$array423['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array424);

$expression425 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments421['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression425(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array423)
					),
					$renderingContext
				);
$arguments421['then'] = '';
$arguments421['else'] = 'inactive';

$output419 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output419 .= '">
                        ';
return $output419;
};

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output372 .= '
                    <td data-sort="';
$array458 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortUpdate', $array458)]);

$output372 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments494 = array();
$arguments494['key'] = NULL;
$arguments494['id'] = NULL;
$arguments494['default'] = NULL;
$arguments494['arguments'] = NULL;
$arguments494['extensionName'] = NULL;
$arguments494['languageKey'] = NULL;
$arguments494['alternativeLanguageKeys'] = NULL;
$arguments494['key'] = 'extensionList.updateDisabled';

$output493 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext)]);

$output493 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments496 = array();
$arguments496['identifier'] = NULL;
$arguments496['size'] = 'small';
$arguments496['overlay'] = NULL;
$arguments496['state'] = 'default';
$arguments496['alternativeMarkupIdentifier'] = NULL;
$arguments496['identifier'] = 'actions-system-extension-update';

$output493 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output493 .= '
                                    </span>
                                ';
return $output493;
};
$arguments491 = array();

$output490 .= '';

$output490 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments513 = array();
$arguments513['identifier'] = NULL;
$arguments513['size'] = 'small';
$arguments513['overlay'] = NULL;
$arguments513['state'] = 'default';
$arguments513['alternativeMarkupIdentifier'] = NULL;
$arguments513['identifier'] = 'actions-system-extension-update';

$output512 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
                                    ';
return $output512;
};
$arguments501 = array();
$arguments501['additionalAttributes'] = NULL;
$arguments501['data'] = NULL;
$arguments501['aria'] = NULL;
$arguments501['class'] = NULL;
$arguments501['dir'] = NULL;
$arguments501['id'] = NULL;
$arguments501['lang'] = NULL;
$arguments501['style'] = NULL;
$arguments501['title'] = NULL;
$arguments501['accesskey'] = NULL;
$arguments501['tabindex'] = NULL;
$arguments501['onclick'] = NULL;
$arguments501['name'] = NULL;
$arguments501['rel'] = NULL;
$arguments501['rev'] = NULL;
$arguments501['target'] = NULL;
$arguments501['action'] = NULL;
$arguments501['controller'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['pluginName'] = NULL;
$arguments501['pageUid'] = NULL;
$arguments501['pageType'] = NULL;
$arguments501['noCache'] = NULL;
$arguments501['noCacheHash'] = NULL;
$arguments501['section'] = NULL;
$arguments501['format'] = NULL;
$arguments501['linkAccessRestrictedPages'] = NULL;
$arguments501['additionalParams'] = NULL;
$arguments501['absolute'] = NULL;
$arguments501['addQueryString'] = NULL;
$arguments501['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments501['addQueryStringMethod'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['action'] = 'updateCommentForUpdatableVersions';
$arguments501['class'] = 'btn btn-default';
// Rendering Array
$array503 = array();
$array503['data-action'] = 'update-extension';
$arguments501['additionalAttributes'] = $array503;
$arguments501['format'] = 'json';
$arguments501['controller'] = 'Download';
// Rendering Array
$array504 = array();
$array505 = array (
);$array504['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array505);
$array506 = array (
);$array504['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array506);
$array507 = array (
);$array504['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array507);
$arguments501['arguments'] = $array504;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array510 = array();
$array511 = array (
);$array510['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array511);
$arguments508['arguments'] = $array510;
$arguments501['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output500 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
                                ';
return $output500;
};
$arguments498 = array();
$arguments498['if'] = NULL;

$output490 .= '';

$output490 .= '
                            ';
return $output490;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('updateIsBlocked', $array488);

$expression489 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments465['__thenClosure'] = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['key'] = NULL;
$arguments468['id'] = NULL;
$arguments468['default'] = NULL;
$arguments468['arguments'] = NULL;
$arguments468['extensionName'] = NULL;
$arguments468['languageKey'] = NULL;
$arguments468['alternativeLanguageKeys'] = NULL;
$arguments468['key'] = 'extensionList.updateDisabled';

$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output467 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments470 = array();
$arguments470['identifier'] = NULL;
$arguments470['size'] = 'small';
$arguments470['overlay'] = NULL;
$arguments470['state'] = 'default';
$arguments470['alternativeMarkupIdentifier'] = NULL;
$arguments470['identifier'] = 'actions-system-extension-update';

$output467 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output467 .= '
                                    </span>
                                ';
return $output467;
};
$arguments465['__elseClosures'][] = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['identifier'] = NULL;
$arguments485['size'] = 'small';
$arguments485['overlay'] = NULL;
$arguments485['state'] = 'default';
$arguments485['alternativeMarkupIdentifier'] = NULL;
$arguments485['identifier'] = 'actions-system-extension-update';

$output484 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
                                    ';
return $output484;
};
$arguments473 = array();
$arguments473['additionalAttributes'] = NULL;
$arguments473['data'] = NULL;
$arguments473['aria'] = NULL;
$arguments473['class'] = NULL;
$arguments473['dir'] = NULL;
$arguments473['id'] = NULL;
$arguments473['lang'] = NULL;
$arguments473['style'] = NULL;
$arguments473['title'] = NULL;
$arguments473['accesskey'] = NULL;
$arguments473['tabindex'] = NULL;
$arguments473['onclick'] = NULL;
$arguments473['name'] = NULL;
$arguments473['rel'] = NULL;
$arguments473['rev'] = NULL;
$arguments473['target'] = NULL;
$arguments473['action'] = NULL;
$arguments473['controller'] = NULL;
$arguments473['extensionName'] = NULL;
$arguments473['pluginName'] = NULL;
$arguments473['pageUid'] = NULL;
$arguments473['pageType'] = NULL;
$arguments473['noCache'] = NULL;
$arguments473['noCacheHash'] = NULL;
$arguments473['section'] = NULL;
$arguments473['format'] = NULL;
$arguments473['linkAccessRestrictedPages'] = NULL;
$arguments473['additionalParams'] = NULL;
$arguments473['absolute'] = NULL;
$arguments473['addQueryString'] = NULL;
$arguments473['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments473['addQueryStringMethod'] = NULL;
$arguments473['arguments'] = NULL;
$arguments473['action'] = 'updateCommentForUpdatableVersions';
$arguments473['class'] = 'btn btn-default';
// Rendering Array
$array475 = array();
$array475['data-action'] = 'update-extension';
$arguments473['additionalAttributes'] = $array475;
$arguments473['format'] = 'json';
$arguments473['controller'] = 'Download';
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array477);
$array478 = array (
);$array476['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array478);
$array479 = array (
);$array476['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array479);
$arguments473['arguments'] = $array476;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['languageKey'] = NULL;
$arguments480['alternativeLanguageKeys'] = NULL;
$arguments480['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array482 = array();
$array483 = array (
);$array482['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array483);
$arguments480['arguments'] = $array482;
$arguments473['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output472 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '
                                ';
return $output472;
};

$output464 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output464 .= '
                        ';
return $output464;
};
$arguments459 = array();
$arguments459['then'] = NULL;
$arguments459['else'] = NULL;
$arguments459['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array461 = array();
$array462 = array (
);$array461['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array462);

$expression463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments459['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array461)
					),
					$renderingContext
				);
$arguments459['__thenClosure'] = $renderChildrenClosure460;

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);

$output372 .= '
                    </td>
                    <td data-sort="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['then'] = NULL;
$arguments515['else'] = NULL;
$arguments515['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array517 = array();
$array518 = array (
);$array517['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array518);

$expression519 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments515['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression519(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array517)
					),
					$renderingContext
				);
$arguments515['then'] = 'active';
$arguments515['else'] = 'inactive';

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$output372 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['aria'] = NULL;
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['title'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$arguments520['name'] = NULL;
$arguments520['rel'] = NULL;
$arguments520['rev'] = NULL;
$arguments520['target'] = NULL;
$arguments520['action'] = NULL;
$arguments520['controller'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['pluginName'] = NULL;
$arguments520['pageUid'] = NULL;
$arguments520['pageType'] = NULL;
$arguments520['noCache'] = NULL;
$arguments520['noCacheHash'] = NULL;
$arguments520['section'] = NULL;
$arguments520['format'] = NULL;
$arguments520['linkAccessRestrictedPages'] = NULL;
$arguments520['additionalParams'] = NULL;
$arguments520['absolute'] = NULL;
$arguments520['addQueryString'] = NULL;
$arguments520['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments520['addQueryStringMethod'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extension'] = NULL;
$array522 = array (
);$arguments520['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array522);

$output372 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output372 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
                            <img class="extension-icon" src="';
$array529 = array (
);
$output528 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon', $array529)]);

$output528 .= '" alt="" />
                        ';
return $output528;
};
$arguments523 = array();
$arguments523['then'] = NULL;
$arguments523['else'] = NULL;
$arguments523['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array525 = array();
$array526 = array (
);$array525['0'] = $renderingContext->getVariableProvider()->getByPath('extension.icon', $array526);

$expression527 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments523['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression527(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array525)
					),
					$renderingContext
				);
$arguments523['__thenClosure'] = $renderChildrenClosure524;

$output372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output372 .= '
                        <span title="';
$array530 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array530)]);

$output372 .= '">';
$array531 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array531)]);

$output372 .= '</span>
                    </td>
                    <td>';
$array532 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array532)]);

$output372 .= '</td>
                    <td>';
$array533 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array533)]);

$output372 .= '</td>
                    <td><span class="label label-';
$array534 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array534)]);

$output372 .= '">';
$array535 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array535)]);

$output372 .= '</span></td>
                    <td>';
$array536 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array536)]);

$output372 .= '</td>
                    <td>
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$output540 = '';

$output540 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['additionalAttributes'] = NULL;
$arguments541['data'] = NULL;
$arguments541['aria'] = NULL;
$arguments541['class'] = NULL;
$arguments541['dir'] = NULL;
$arguments541['id'] = NULL;
$arguments541['lang'] = NULL;
$arguments541['style'] = NULL;
$arguments541['title'] = NULL;
$arguments541['accesskey'] = NULL;
$arguments541['tabindex'] = NULL;
$arguments541['onclick'] = NULL;
$arguments541['name'] = NULL;
$arguments541['rel'] = NULL;
$arguments541['rev'] = NULL;
$arguments541['target'] = NULL;
$arguments541['action'] = NULL;
$arguments541['controller'] = NULL;
$arguments541['extensionName'] = NULL;
$arguments541['pluginName'] = NULL;
$arguments541['pageUid'] = NULL;
$arguments541['pageType'] = NULL;
$arguments541['noCache'] = NULL;
$arguments541['noCacheHash'] = NULL;
$arguments541['section'] = NULL;
$arguments541['format'] = NULL;
$arguments541['linkAccessRestrictedPages'] = NULL;
$arguments541['additionalParams'] = NULL;
$arguments541['absolute'] = NULL;
$arguments541['addQueryString'] = NULL;
$arguments541['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments541['addQueryStringMethod'] = NULL;
$arguments541['arguments'] = NULL;
$arguments541['extensionKey'] = NULL;
$arguments541['class'] = 'btn btn-default';
$array543 = array (
);$arguments541['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array543);

$output540 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output540 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$output549 = '';

$output549 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['additionalAttributes'] = NULL;
$arguments550['data'] = NULL;
$arguments550['aria'] = NULL;
$arguments550['class'] = NULL;
$arguments550['dir'] = NULL;
$arguments550['id'] = NULL;
$arguments550['lang'] = NULL;
$arguments550['style'] = NULL;
$arguments550['title'] = NULL;
$arguments550['accesskey'] = NULL;
$arguments550['tabindex'] = NULL;
$arguments550['onclick'] = NULL;
$arguments550['name'] = NULL;
$arguments550['rel'] = NULL;
$arguments550['rev'] = NULL;
$arguments550['target'] = NULL;
$arguments550['action'] = NULL;
$arguments550['controller'] = NULL;
$arguments550['extensionName'] = NULL;
$arguments550['pluginName'] = NULL;
$arguments550['pageUid'] = NULL;
$arguments550['pageType'] = NULL;
$arguments550['noCache'] = NULL;
$arguments550['noCacheHash'] = NULL;
$arguments550['section'] = NULL;
$arguments550['format'] = NULL;
$arguments550['linkAccessRestrictedPages'] = NULL;
$arguments550['additionalParams'] = NULL;
$arguments550['absolute'] = NULL;
$arguments550['addQueryString'] = NULL;
$arguments550['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments550['addQueryStringMethod'] = NULL;
$arguments550['arguments'] = NULL;
$arguments550['extension'] = NULL;
$arguments550['class'] = 'btn btn-default';
$array552 = array (
);$arguments550['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array552);

$output549 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);

$output549 .= '
                                ';
return $output549;
};
$arguments544 = array();
$arguments544['then'] = NULL;
$arguments544['else'] = NULL;
$arguments544['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array546 = array();
$array546['0'] = '!';
$array547 = array (
);$array546['1'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array547);

$expression548 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments544['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression548(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array546)
					),
					$renderingContext
				);
$arguments544['__thenClosure'] = $renderChildrenClosure545;

$output540 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output540 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$output559 = '';

$output559 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments560 = array();
$arguments560['identifier'] = NULL;
$arguments560['size'] = 'small';
$arguments560['overlay'] = NULL;
$arguments560['state'] = 'default';
$arguments560['alternativeMarkupIdentifier'] = NULL;
$arguments560['identifier'] = 'actions-system-extension-download';

$output559 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments560, $renderChildrenClosure561, $renderingContext);

$output559 .= '
                                ';
return $output559;
};
$arguments553 = array();
$arguments553['additionalAttributes'] = NULL;
$arguments553['data'] = NULL;
$arguments553['aria'] = NULL;
$arguments553['class'] = NULL;
$arguments553['dir'] = NULL;
$arguments553['id'] = NULL;
$arguments553['lang'] = NULL;
$arguments553['style'] = NULL;
$arguments553['title'] = NULL;
$arguments553['accesskey'] = NULL;
$arguments553['tabindex'] = NULL;
$arguments553['onclick'] = NULL;
$arguments553['name'] = NULL;
$arguments553['rel'] = NULL;
$arguments553['rev'] = NULL;
$arguments553['target'] = NULL;
$arguments553['action'] = NULL;
$arguments553['controller'] = NULL;
$arguments553['extensionName'] = NULL;
$arguments553['pluginName'] = NULL;
$arguments553['pageUid'] = NULL;
$arguments553['pageType'] = NULL;
$arguments553['noCache'] = NULL;
$arguments553['noCacheHash'] = NULL;
$arguments553['section'] = NULL;
$arguments553['format'] = NULL;
$arguments553['linkAccessRestrictedPages'] = NULL;
$arguments553['additionalParams'] = NULL;
$arguments553['absolute'] = NULL;
$arguments553['addQueryString'] = NULL;
$arguments553['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments553['addQueryStringMethod'] = NULL;
$arguments553['arguments'] = NULL;
$arguments553['action'] = 'downloadExtensionZip';
$arguments553['controller'] = 'Action';
// Rendering Array
$array555 = array();
$array556 = array (
);$array555['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array556);
$arguments553['arguments'] = $array555;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments557 = array();
$arguments557['key'] = NULL;
$arguments557['id'] = NULL;
$arguments557['default'] = NULL;
$arguments557['arguments'] = NULL;
$arguments557['extensionName'] = NULL;
$arguments557['languageKey'] = NULL;
$arguments557['alternativeLanguageKeys'] = NULL;
$arguments557['key'] = 'extensionList.downloadzip';
$arguments553['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments557, $renderChildrenClosure558, $renderingContext);
$arguments553['class'] = 'btn btn-default';

$output540 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output540 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['additionalAttributes'] = NULL;
$arguments562['data'] = NULL;
$arguments562['aria'] = NULL;
$arguments562['class'] = NULL;
$arguments562['dir'] = NULL;
$arguments562['id'] = NULL;
$arguments562['lang'] = NULL;
$arguments562['style'] = NULL;
$arguments562['title'] = NULL;
$arguments562['accesskey'] = NULL;
$arguments562['tabindex'] = NULL;
$arguments562['onclick'] = NULL;
$arguments562['name'] = NULL;
$arguments562['rel'] = NULL;
$arguments562['rev'] = NULL;
$arguments562['target'] = NULL;
$arguments562['action'] = NULL;
$arguments562['controller'] = NULL;
$arguments562['extensionName'] = NULL;
$arguments562['pluginName'] = NULL;
$arguments562['pageUid'] = NULL;
$arguments562['pageType'] = NULL;
$arguments562['noCache'] = NULL;
$arguments562['noCacheHash'] = NULL;
$arguments562['section'] = NULL;
$arguments562['format'] = NULL;
$arguments562['linkAccessRestrictedPages'] = NULL;
$arguments562['additionalParams'] = NULL;
$arguments562['absolute'] = NULL;
$arguments562['addQueryString'] = NULL;
$arguments562['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments562['addQueryStringMethod'] = NULL;
$arguments562['arguments'] = NULL;
$arguments562['extension'] = NULL;
$arguments562['class'] = 'btn btn-default';
$array564 = array (
);$arguments562['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array564);

$output540 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);

$output540 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
                                        <a href="';
$array581 = array (
);
$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array581)]);

$output580 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['identifier'] = NULL;
$arguments582['size'] = 'small';
$arguments582['overlay'] = NULL;
$arguments582['state'] = 'default';
$arguments582['alternativeMarkupIdentifier'] = NULL;
$arguments582['identifier'] = 'actions-system-extension-documentation';
$arguments582['size'] = 'small';

$output580 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output580 .= '
                                        </a>
                                    ';
return $output580;
};
$arguments578 = array();

$output577 .= '';

$output577 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['identifier'] = NULL;
$arguments587['size'] = 'small';
$arguments587['overlay'] = NULL;
$arguments587['state'] = 'default';
$arguments587['alternativeMarkupIdentifier'] = NULL;
$arguments587['identifier'] = 'empty-empty';
$arguments587['size'] = 'small';

$output586 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '</span>
                                    ';
return $output586;
};
$arguments584 = array();
$arguments584['if'] = NULL;

$output577 .= '';

$output577 .= '
                                ';
return $output577;
};
$arguments565 = array();
$arguments565['then'] = NULL;
$arguments565['else'] = NULL;
$arguments565['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array575);

$expression576 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments565['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments565['__thenClosure'] = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
                                        <a href="';
$array568 = array (
);
$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink', $array568)]);

$output567 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['identifier'] = NULL;
$arguments569['size'] = 'small';
$arguments569['overlay'] = NULL;
$arguments569['state'] = 'default';
$arguments569['alternativeMarkupIdentifier'] = NULL;
$arguments569['identifier'] = 'actions-system-extension-documentation';
$arguments569['size'] = 'small';

$output567 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$output567 .= '
                                        </a>
                                    ';
return $output567;
};
$arguments565['__elseClosures'][] = function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments572 = array();
$arguments572['identifier'] = NULL;
$arguments572['size'] = 'small';
$arguments572['overlay'] = NULL;
$arguments572['state'] = 'default';
$arguments572['alternativeMarkupIdentifier'] = NULL;
$arguments572['identifier'] = 'empty-empty';
$arguments572['size'] = 'small';

$output571 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments572, $renderChildrenClosure573, $renderingContext);

$output571 .= '</span>
                                    ';
return $output571;
};

$output540 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output540 .= '
                            ';
return $output540;
};
$arguments537 = array();
$arguments537['additionalAttributes'] = NULL;
$arguments537['data'] = NULL;
$arguments537['aria'] = NULL;
$arguments537['extension'] = NULL;
$array539 = array (
);$arguments537['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array539);

$output372 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);

$output372 .= '
                        </div>
                    </td>
                    </tr>
                ';
return $output372;
};
$arguments369 = array();
$arguments369['each'] = NULL;
$arguments369['as'] = NULL;
$arguments369['key'] = NULL;
$arguments369['reverse'] = false;
$arguments369['iteration'] = NULL;
$array371 = array (
);$arguments369['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array371);
$arguments369['as'] = 'extension';
$arguments369['key'] = 'extensionKey';

$output297 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output297 .= '
            </tbody>
        </table>
    </div>

';
return $output297;
};
$arguments295 = array();
$arguments295['name'] = NULL;
$arguments295['name'] = 'content';

$output292 .= NULL;

$output292 .= '
';

return $output292;
}


}
#