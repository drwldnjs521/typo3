<?php

class FileList_action_search_9960e2eb95a981606b511877182a51e37ad02cc4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'fl' => 
  array (
    0 => 'TYPO3\\CMS\\Filelist\\ViewHelpers',
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return 'Search';
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['id'] = 'search';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ': "';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord', $array3)]);

$output0 .= '"</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output4 = '';

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['section'] = NULL;
$arguments5['partial'] = NULL;
$arguments5['delegate'] = NULL;
$arguments5['renderable'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['optional'] = false;
$arguments5['default'] = NULL;
$arguments5['contentAs'] = NULL;
$arguments5['debug'] = true;
$arguments5['partial'] = 'SearchForm';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['searchWord'] = $renderingContext->getVariableProvider()->getByPath('searchWord', $array8);
$arguments5['arguments'] = $array7;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover" id="typo3-filelist">
                <thead>
                <tr data-uid="0" data-l10nparent="0">
                    <th class="col-icon nowrap"></th>
                    <th class="col-path nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_filepath';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '</th>
                    <th class="col-title nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_file';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output16 .= '</th>
                    <th class="col-control"></th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_fileext';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output16 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_tstamp';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output16 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_size';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output16 .= '</th>
                    <th class="nowrap">';
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
$arguments27['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_rw';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output16 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels._REF_';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output16 .= '</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                    <tr data-uid="0" data-l10nparent="0">
                        <td class="col-icon nowrap">
                            <a class="t3js-contextmenutrigger" data-uid="';
$array35 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array35)]);

$output34 .= '" data-table="sys_file" href="#">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['resource'] = NULL;
$arguments36['size'] = 'small';
$arguments36['overlay'] = NULL;
$arguments36['options'] = array (
);
$arguments36['alternativeMarkupIdentifier'] = NULL;
$array38 = array (
);$arguments36['resource'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array38);

$output34 .= TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output34 .= '
                            </a>
                        </td>
                        <td class="col-path nowrap">
                            ';
$array39 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.path', $array39)]);

$output34 .= '
                        </td>
                        <td class="col-title col-responsive nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['uid'] = NULL;
$arguments66['table'] = NULL;
$arguments66['fields'] = NULL;
$arguments66['returnUrl'] = '';
$array68 = array (
);$arguments66['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array68);
$arguments66['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['action'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['controller'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['pluginName'] = NULL;
$arguments71['pageUid'] = NULL;
$arguments71['pageType'] = 0;
$arguments71['noCache'] = NULL;
$arguments71['noCacheHash'] = NULL;
$arguments71['section'] = '';
$arguments71['format'] = '';
$arguments71['linkAccessRestrictedPages'] = false;
$arguments71['additionalParams'] = array (
);
$arguments71['absolute'] = false;
$arguments71['addQueryString'] = false;
$arguments71['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments71['addQueryStringMethod'] = NULL;
$arguments71['action'] = 'search';
// Rendering Array
$array73 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;$array73['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);
$arguments71['arguments'] = $array73;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
};
$arguments69 = array();
$arguments69['value'] = NULL;
$arguments66['returnUrl'] = isset($arguments69['value']) ? $arguments69['value'] : $renderChildrenClosure70();

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '"
                                        class="filelist-file-title"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['key'] = NULL;
$arguments77['id'] = NULL;
$arguments77['default'] = NULL;
$arguments77['arguments'] = NULL;
$arguments77['extensionName'] = NULL;
$arguments77['languageKey'] = NULL;
$arguments77['alternativeLanguageKeys'] = NULL;
$arguments77['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output65 .= '"
                                    >
                                        ';
$array79 = array (
);
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array79)]);

$output65 .= '
                                    </a>
                                ';
return $output65;
};
$arguments63 = array();

$output62 .= '';

$output62 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
                                    ';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array83)]);

$output82 .= '
                                ';
return $output82;
};
$arguments80 = array();
$arguments80['if'] = NULL;

$output62 .= '';

$output62 .= '
                            ';
return $output62;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('file.isMetadataEditable', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['uid'] = NULL;
$arguments43['table'] = NULL;
$arguments43['fields'] = NULL;
$arguments43['returnUrl'] = '';
$array45 = array (
);$arguments43['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array45);
$arguments43['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['action'] = NULL;
$arguments48['arguments'] = array (
);
$arguments48['controller'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = NULL;
$arguments48['noCacheHash'] = NULL;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['action'] = 'search';
// Rendering Array
$array50 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$array53 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array53);
};
$arguments51 = array();
$arguments51['value'] = NULL;
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = ($arguments51['value'] !== null) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52;$array50['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
$arguments48['arguments'] = $array50;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
};
$arguments46 = array();
$arguments46['value'] = NULL;
$arguments43['returnUrl'] = isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '"
                                        class="filelist-file-title"
                                        title="';
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
$arguments54['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output42 .= '"
                                    >
                                        ';
$array56 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array56)]);

$output42 .= '
                                    </a>
                                ';
return $output42;
};
$arguments40['__elseClosures'][] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                                    ';
$array58 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array58)]);

$output57 .= '
                                ';
return $output57;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
                                <br>
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['aria'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['alt'] = NULL;
$arguments90['ismap'] = NULL;
$arguments90['longdesc'] = NULL;
$arguments90['usemap'] = NULL;
$arguments90['loading'] = NULL;
$arguments90['src'] = '';
$arguments90['treatIdAsReference'] = false;
$arguments90['image'] = NULL;
$arguments90['crop'] = NULL;
$arguments90['cropVariant'] = 'default';
$arguments90['fileExtension'] = NULL;
$arguments90['width'] = NULL;
$arguments90['height'] = NULL;
$arguments90['minWidth'] = NULL;
$arguments90['minHeight'] = NULL;
$arguments90['maxWidth'] = NULL;
$arguments90['maxHeight'] = NULL;
$arguments90['absolute'] = false;
$arguments90['context'] = 'Image.Preview';
$array92 = array (
);$arguments90['image'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array92);
$array93 = array (
);$arguments90['width'] = $renderingContext->getVariableProvider()->getByPath('thumbnail.width', $array93);
$array94 = array (
);$arguments90['height'] = $renderingContext->getVariableProvider()->getByPath('thumbnail.height', $array94);

$output89 .= TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
                            ';
return $output89;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('file.isImage', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = $renderChildrenClosure85;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output34 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['file'] = NULL;
$arguments123['returnUrl'] = '';
$array125 = array (
);$arguments123['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array125);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['action'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['controller'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['pluginName'] = NULL;
$arguments128['pageUid'] = NULL;
$arguments128['pageType'] = 0;
$arguments128['noCache'] = NULL;
$arguments128['noCacheHash'] = NULL;
$arguments128['section'] = '';
$arguments128['format'] = '';
$arguments128['linkAccessRestrictedPages'] = false;
$arguments128['additionalParams'] = array (
);
$arguments128['absolute'] = false;
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['addQueryStringMethod'] = NULL;
$arguments128['action'] = 'search';
// Rendering Array
$array130 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$array133 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array133);
};
$arguments131 = array();
$arguments131['value'] = NULL;
$arguments131['keepQuotes'] = false;
$arguments131['encoding'] = NULL;
$arguments131['doubleEncode'] = true;
$renderChildrenClosure132 = ($arguments131['value'] !== null) ? function() use ($arguments131) { return $arguments131['value']; } : $renderChildrenClosure132;$array130['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);
$arguments128['arguments'] = $array130;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
};
$arguments126 = array();
$arguments126['value'] = NULL;
$arguments123['returnUrl'] = isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editcontent';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output122 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['identifier'] = NULL;
$arguments136['size'] = 'small';
$arguments136['overlay'] = NULL;
$arguments136['state'] = 'default';
$arguments136['alternativeMarkupIdentifier'] = NULL;
$arguments136['identifier'] = 'actions-page-open';

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output122 .= '
                                        </a>
                                    ';
return $output122;
};
$arguments120 = array();

$output119 .= '';

$output119 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['identifier'] = NULL;
$arguments141['size'] = 'small';
$arguments141['overlay'] = NULL;
$arguments141['state'] = 'default';
$arguments141['alternativeMarkupIdentifier'] = NULL;
$arguments141['identifier'] = 'empty-empty';

$output140 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '</span>
                                    ';
return $output140;
};
$arguments138 = array();
$arguments138['if'] = NULL;

$output119 .= '';

$output119 .= '
                                ';
return $output119;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('file.isEditable', $array117);

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array116)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['file'] = NULL;
$arguments98['returnUrl'] = '';
$array100 = array (
);$arguments98['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array100);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['action'] = NULL;
$arguments103['arguments'] = array (
);
$arguments103['controller'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['pluginName'] = NULL;
$arguments103['pageUid'] = NULL;
$arguments103['pageType'] = 0;
$arguments103['noCache'] = NULL;
$arguments103['noCacheHash'] = NULL;
$arguments103['section'] = '';
$arguments103['format'] = '';
$arguments103['linkAccessRestrictedPages'] = false;
$arguments103['additionalParams'] = array (
);
$arguments103['absolute'] = false;
$arguments103['addQueryString'] = false;
$arguments103['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments103['addQueryStringMethod'] = NULL;
$arguments103['action'] = 'search';
// Rendering Array
$array105 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$array108 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array108);
};
$arguments106 = array();
$arguments106['value'] = NULL;
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = ($arguments106['value'] !== null) ? function() use ($arguments106) { return $arguments106['value']; } : $renderChildrenClosure107;$array105['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
$arguments103['arguments'] = $array105;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);
};
$arguments101 = array();
$arguments101['value'] = NULL;
$arguments98['returnUrl'] = isset($arguments101['value']) ? $arguments101['value'] : $renderChildrenClosure102();

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output97 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['key'] = NULL;
$arguments109['id'] = NULL;
$arguments109['default'] = NULL;
$arguments109['arguments'] = NULL;
$arguments109['extensionName'] = NULL;
$arguments109['languageKey'] = NULL;
$arguments109['alternativeLanguageKeys'] = NULL;
$arguments109['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editcontent';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output97 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['identifier'] = NULL;
$arguments111['size'] = 'small';
$arguments111['overlay'] = NULL;
$arguments111['state'] = 'default';
$arguments111['alternativeMarkupIdentifier'] = NULL;
$arguments111['identifier'] = 'actions-page-open';

$output97 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output97 .= '
                                        </a>
                                    ';
return $output97;
};
$arguments95['__elseClosures'][] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['identifier'] = NULL;
$arguments114['size'] = 'small';
$arguments114['overlay'] = NULL;
$arguments114['state'] = 'default';
$arguments114['alternativeMarkupIdentifier'] = NULL;
$arguments114['identifier'] = 'empty-empty';

$output113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '</span>
                                    ';
return $output113;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['uid'] = NULL;
$arguments171['table'] = NULL;
$arguments171['fields'] = NULL;
$arguments171['returnUrl'] = '';
$array173 = array (
);$arguments171['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array173);
$arguments171['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['action'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['controller'] = NULL;
$arguments176['extensionName'] = NULL;
$arguments176['pluginName'] = NULL;
$arguments176['pageUid'] = NULL;
$arguments176['pageType'] = 0;
$arguments176['noCache'] = NULL;
$arguments176['noCacheHash'] = NULL;
$arguments176['section'] = '';
$arguments176['format'] = '';
$arguments176['linkAccessRestrictedPages'] = false;
$arguments176['additionalParams'] = array (
);
$arguments176['absolute'] = false;
$arguments176['addQueryString'] = false;
$arguments176['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments176['addQueryStringMethod'] = NULL;
$arguments176['action'] = 'search';
// Rendering Array
$array178 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array181 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array181);
};
$arguments179 = array();
$arguments179['value'] = NULL;
$arguments179['keepQuotes'] = false;
$arguments179['encoding'] = NULL;
$arguments179['doubleEncode'] = true;
$renderChildrenClosure180 = ($arguments179['value'] !== null) ? function() use ($arguments179) { return $arguments179['value']; } : $renderChildrenClosure180;$array178['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);
$arguments176['arguments'] = $array178;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
};
$arguments174 = array();
$arguments174['value'] = NULL;
$arguments171['returnUrl'] = isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext)]);

$output170 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output170 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['identifier'] = NULL;
$arguments184['size'] = 'small';
$arguments184['overlay'] = NULL;
$arguments184['state'] = 'default';
$arguments184['alternativeMarkupIdentifier'] = NULL;
$arguments184['identifier'] = 'actions-open';

$output170 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output170 .= '
                                        </a>
                                    ';
return $output170;
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['identifier'] = NULL;
$arguments189['size'] = 'small';
$arguments189['overlay'] = NULL;
$arguments189['state'] = 'default';
$arguments189['alternativeMarkupIdentifier'] = NULL;
$arguments189['identifier'] = 'empty-empty';

$output188 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '</span>
                                    ';
return $output188;
};
$arguments186 = array();
$arguments186['if'] = NULL;

$output167 .= '';

$output167 .= '
                                ';
return $output167;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('file.IsMetadataEditable', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['uid'] = NULL;
$arguments146['table'] = NULL;
$arguments146['fields'] = NULL;
$arguments146['returnUrl'] = '';
$array148 = array (
);$arguments146['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array148);
$arguments146['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['action'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['controller'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['pluginName'] = NULL;
$arguments151['pageUid'] = NULL;
$arguments151['pageType'] = 0;
$arguments151['noCache'] = NULL;
$arguments151['noCacheHash'] = NULL;
$arguments151['section'] = '';
$arguments151['format'] = '';
$arguments151['linkAccessRestrictedPages'] = false;
$arguments151['additionalParams'] = array (
);
$arguments151['absolute'] = false;
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['addQueryStringMethod'] = NULL;
$arguments151['action'] = 'search';
// Rendering Array
$array153 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$array156 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array156);
};
$arguments154 = array();
$arguments154['value'] = NULL;
$arguments154['keepQuotes'] = false;
$arguments154['encoding'] = NULL;
$arguments154['doubleEncode'] = true;
$renderChildrenClosure155 = ($arguments154['value'] !== null) ? function() use ($arguments154) { return $arguments154['value']; } : $renderChildrenClosure155;$array153['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
$arguments151['arguments'] = $array153;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);
};
$arguments149 = array();
$arguments149['value'] = NULL;
$arguments146['returnUrl'] = isset($arguments149['value']) ? $arguments149['value'] : $renderChildrenClosure150();

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output145 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['identifier'] = NULL;
$arguments159['size'] = 'small';
$arguments159['overlay'] = NULL;
$arguments159['state'] = 'default';
$arguments159['alternativeMarkupIdentifier'] = NULL;
$arguments159['identifier'] = 'actions-open';

$output145 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output145 .= '
                                        </a>
                                    ';
return $output145;
};
$arguments143['__elseClosures'][] = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['identifier'] = NULL;
$arguments162['size'] = 'small';
$arguments162['overlay'] = NULL;
$arguments162['state'] = 'default';
$arguments162['alternativeMarkupIdentifier'] = NULL;
$arguments162['identifier'] = 'empty-empty';

$output161 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '</span>
                                    ';
return $output161;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
                                        <a href="';
$array209 = array (
);
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array209)]);

$output208 .= '" target="_blank" class="btn btn-default filelist-file-view"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['key'] = NULL;
$arguments210['id'] = NULL;
$arguments210['default'] = NULL;
$arguments210['arguments'] = NULL;
$arguments210['extensionName'] = NULL;
$arguments210['languageKey'] = NULL;
$arguments210['alternativeLanguageKeys'] = NULL;
$arguments210['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.view';

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext)]);

$output208 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['identifier'] = NULL;
$arguments212['size'] = 'small';
$arguments212['overlay'] = NULL;
$arguments212['state'] = 'default';
$arguments212['alternativeMarkupIdentifier'] = NULL;
$arguments212['identifier'] = 'actions-document-view';

$output208 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output208 .= '
                                        </a>
                                    ';
return $output208;
};
$arguments206 = array();

$output205 .= '';

$output205 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['identifier'] = NULL;
$arguments217['size'] = 'small';
$arguments217['overlay'] = NULL;
$arguments217['state'] = 'default';
$arguments217['alternativeMarkupIdentifier'] = NULL;
$arguments217['identifier'] = 'empty-empty';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '</span>
                                    ';
return $output216;
};
$arguments214 = array();
$arguments214['if'] = NULL;

$output205 .= '';

$output205 .= '
                                ';
return $output205;
};
$arguments191 = array();
$arguments191['then'] = NULL;
$arguments191['else'] = NULL;
$arguments191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments191['__thenClosure'] = function() use ($renderingContext, $self) {
$output193 = '';

$output193 .= '
                                        <a href="';
$array194 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array194)]);

$output193 .= '" target="_blank" class="btn btn-default filelist-file-view"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.view';

$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output193 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-document-view';

$output193 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output193 .= '
                                        </a>
                                    ';
return $output193;
};
$arguments191['__elseClosures'][] = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['identifier'] = NULL;
$arguments200['size'] = 'small';
$arguments200['overlay'] = NULL;
$arguments200['state'] = 'default';
$arguments200['alternativeMarkupIdentifier'] = NULL;
$arguments200['identifier'] = 'empty-empty';

$output199 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '</span>
                                    ';
return $output199;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['file'] = NULL;
$arguments247['returnUrl'] = '';
$array249 = array (
);$arguments247['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array249);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['action'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['controller'] = NULL;
$arguments252['extensionName'] = NULL;
$arguments252['pluginName'] = NULL;
$arguments252['pageUid'] = NULL;
$arguments252['pageType'] = 0;
$arguments252['noCache'] = NULL;
$arguments252['noCacheHash'] = NULL;
$arguments252['section'] = '';
$arguments252['format'] = '';
$arguments252['linkAccessRestrictedPages'] = false;
$arguments252['additionalParams'] = array (
);
$arguments252['absolute'] = false;
$arguments252['addQueryString'] = false;
$arguments252['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments252['addQueryStringMethod'] = NULL;
$arguments252['action'] = 'search';
// Rendering Array
$array254 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$array257 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array257);
};
$arguments255 = array();
$arguments255['value'] = NULL;
$arguments255['keepQuotes'] = false;
$arguments255['encoding'] = NULL;
$arguments255['doubleEncode'] = true;
$renderChildrenClosure256 = ($arguments255['value'] !== null) ? function() use ($arguments255) { return $arguments255['value']; } : $renderChildrenClosure256;$array254['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);
$arguments252['arguments'] = $array254;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);
};
$arguments250 = array();
$arguments250['value'] = NULL;
$arguments247['returnUrl'] = isset($arguments250['value']) ? $arguments250['value'] : $renderChildrenClosure251();

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '"
                                            class="btn btn-default filelist-file-replace"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.replace';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output246 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['identifier'] = NULL;
$arguments260['size'] = 'small';
$arguments260['overlay'] = NULL;
$arguments260['state'] = 'default';
$arguments260['alternativeMarkupIdentifier'] = NULL;
$arguments260['identifier'] = 'actions-edit-replace';

$output246 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output246 .= '
                                        </a>
                                    ';
return $output246;
};
$arguments244 = array();

$output243 .= '';

$output243 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output264 = '';

$output264 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure266 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments265 = array();
$arguments265['identifier'] = NULL;
$arguments265['size'] = 'small';
$arguments265['overlay'] = NULL;
$arguments265['state'] = 'default';
$arguments265['alternativeMarkupIdentifier'] = NULL;
$arguments265['identifier'] = 'empty-empty';

$output264 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '</span>
                                    ';
return $output264;
};
$arguments262 = array();
$arguments262['if'] = NULL;

$output243 .= '';

$output243 .= '
                                ';
return $output243;
};
$arguments219 = array();
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array240 = array();
$array241 = array (
);$array240['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReplaceable', $array241);

$expression242 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array240)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['file'] = NULL;
$arguments222['returnUrl'] = '';
$array224 = array (
);$arguments222['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array224);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['action'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['controller'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['pluginName'] = NULL;
$arguments227['pageUid'] = NULL;
$arguments227['pageType'] = 0;
$arguments227['noCache'] = NULL;
$arguments227['noCacheHash'] = NULL;
$arguments227['section'] = '';
$arguments227['format'] = '';
$arguments227['linkAccessRestrictedPages'] = false;
$arguments227['additionalParams'] = array (
);
$arguments227['absolute'] = false;
$arguments227['addQueryString'] = false;
$arguments227['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments227['addQueryStringMethod'] = NULL;
$arguments227['action'] = 'search';
// Rendering Array
$array229 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$array232 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array232);
};
$arguments230 = array();
$arguments230['value'] = NULL;
$arguments230['keepQuotes'] = false;
$arguments230['encoding'] = NULL;
$arguments230['doubleEncode'] = true;
$renderChildrenClosure231 = ($arguments230['value'] !== null) ? function() use ($arguments230) { return $arguments230['value']; } : $renderChildrenClosure231;$array229['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);
$arguments227['arguments'] = $array229;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
};
$arguments225 = array();
$arguments225['value'] = NULL;
$arguments222['returnUrl'] = isset($arguments225['value']) ? $arguments225['value'] : $renderChildrenClosure226();

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext)]);

$output221 .= '"
                                            class="btn btn-default filelist-file-replace"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.replace';

$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output221 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['identifier'] = NULL;
$arguments235['size'] = 'small';
$arguments235['overlay'] = NULL;
$arguments235['state'] = 'default';
$arguments235['alternativeMarkupIdentifier'] = NULL;
$arguments235['identifier'] = 'actions-edit-replace';

$output221 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output221 .= '
                                        </a>
                                    ';
return $output221;
};
$arguments219['__elseClosures'][] = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['identifier'] = NULL;
$arguments238['size'] = 'small';
$arguments238['overlay'] = NULL;
$arguments238['state'] = 'default';
$arguments238['alternativeMarkupIdentifier'] = NULL;
$arguments238['identifier'] = 'empty-empty';

$output237 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '</span>
                                    ';
return $output237;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['file'] = NULL;
$arguments295['returnUrl'] = '';
$array297 = array (
);$arguments295['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array297);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['action'] = NULL;
$arguments300['arguments'] = array (
);
$arguments300['controller'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['pluginName'] = NULL;
$arguments300['pageUid'] = NULL;
$arguments300['pageType'] = 0;
$arguments300['noCache'] = NULL;
$arguments300['noCacheHash'] = NULL;
$arguments300['section'] = '';
$arguments300['format'] = '';
$arguments300['linkAccessRestrictedPages'] = false;
$arguments300['additionalParams'] = array (
);
$arguments300['absolute'] = false;
$arguments300['addQueryString'] = false;
$arguments300['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments300['addQueryStringMethod'] = NULL;
$arguments300['action'] = 'search';
// Rendering Array
$array302 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$array305 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array305);
};
$arguments303 = array();
$arguments303['value'] = NULL;
$arguments303['keepQuotes'] = false;
$arguments303['encoding'] = NULL;
$arguments303['doubleEncode'] = true;
$renderChildrenClosure304 = ($arguments303['value'] !== null) ? function() use ($arguments303) { return $arguments303['value']; } : $renderChildrenClosure304;$array302['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);
$arguments300['arguments'] = $array302;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);
};
$arguments298 = array();
$arguments298['value'] = NULL;
$arguments295['returnUrl'] = isset($arguments298['value']) ? $arguments298['value'] : $renderChildrenClosure299();

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output294 .= '"
                                            class="btn btn-default filelist-file-rename"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['languageKey'] = NULL;
$arguments306['alternativeLanguageKeys'] = NULL;
$arguments306['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.rename';

$output294 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output294 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['identifier'] = NULL;
$arguments308['size'] = 'small';
$arguments308['overlay'] = NULL;
$arguments308['state'] = 'default';
$arguments308['alternativeMarkupIdentifier'] = NULL;
$arguments308['identifier'] = 'actions-edit-rename';

$output294 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output294 .= '
                                        </a>
                                    ';
return $output294;
};
$arguments292 = array();

$output291 .= '';

$output291 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['identifier'] = NULL;
$arguments313['size'] = 'small';
$arguments313['overlay'] = NULL;
$arguments313['state'] = 'default';
$arguments313['alternativeMarkupIdentifier'] = NULL;
$arguments313['identifier'] = 'empty-empty';

$output312 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '</span>
                                    ';
return $output312;
};
$arguments310 = array();
$arguments310['if'] = NULL;

$output291 .= '';

$output291 .= '
                                ';
return $output291;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('file.isRenamable', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments267['__thenClosure'] = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['file'] = NULL;
$arguments270['returnUrl'] = '';
$array272 = array (
);$arguments270['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array272);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments275 = array();
$arguments275['action'] = NULL;
$arguments275['arguments'] = array (
);
$arguments275['controller'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['pluginName'] = NULL;
$arguments275['pageUid'] = NULL;
$arguments275['pageType'] = 0;
$arguments275['noCache'] = NULL;
$arguments275['noCacheHash'] = NULL;
$arguments275['section'] = '';
$arguments275['format'] = '';
$arguments275['linkAccessRestrictedPages'] = false;
$arguments275['additionalParams'] = array (
);
$arguments275['absolute'] = false;
$arguments275['addQueryString'] = false;
$arguments275['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments275['addQueryStringMethod'] = NULL;
$arguments275['action'] = 'search';
// Rendering Array
$array277 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$array280 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array280);
};
$arguments278 = array();
$arguments278['value'] = NULL;
$arguments278['keepQuotes'] = false;
$arguments278['encoding'] = NULL;
$arguments278['doubleEncode'] = true;
$renderChildrenClosure279 = ($arguments278['value'] !== null) ? function() use ($arguments278) { return $arguments278['value']; } : $renderChildrenClosure279;$array277['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);
$arguments275['arguments'] = $array277;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);
};
$arguments273 = array();
$arguments273['value'] = NULL;
$arguments270['returnUrl'] = isset($arguments273['value']) ? $arguments273['value'] : $renderChildrenClosure274();

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output269 .= '"
                                            class="btn btn-default filelist-file-rename"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.rename';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output269 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['identifier'] = NULL;
$arguments283['size'] = 'small';
$arguments283['overlay'] = NULL;
$arguments283['state'] = 'default';
$arguments283['alternativeMarkupIdentifier'] = NULL;
$arguments283['identifier'] = 'actions-edit-rename';

$output269 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output269 .= '
                                        </a>
                                    ';
return $output269;
};
$arguments267['__elseClosures'][] = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['identifier'] = NULL;
$arguments286['size'] = 'small';
$arguments286['overlay'] = NULL;
$arguments286['state'] = 'default';
$arguments286['alternativeMarkupIdentifier'] = NULL;
$arguments286['identifier'] = 'empty-empty';

$output285 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '</span>
                                    ';
return $output285;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
                                        <a href="#" class="btn btn-default filelist-file-info"
                                            title="';
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
$arguments333['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.info';

$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext)]);

$output332 .= '"
                                            data-identifier="';
$array335 = array (
);
$output332 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array335)]);

$output332 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['identifier'] = NULL;
$arguments336['size'] = 'small';
$arguments336['overlay'] = NULL;
$arguments336['state'] = 'default';
$arguments336['alternativeMarkupIdentifier'] = NULL;
$arguments336['identifier'] = 'actions-document-info';

$output332 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output332 .= '
                                        </a>
                                    ';
return $output332;
};
$arguments330 = array();

$output329 .= '';

$output329 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['identifier'] = NULL;
$arguments341['size'] = 'small';
$arguments341['overlay'] = NULL;
$arguments341['state'] = 'default';
$arguments341['alternativeMarkupIdentifier'] = NULL;
$arguments341['identifier'] = 'empty-empty';

$output340 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '</span>
                                    ';
return $output340;
};
$arguments338 = array();
$arguments338['if'] = NULL;

$output329 .= '';

$output329 .= '
                                ';
return $output329;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReadable', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                                        <a href="#" class="btn btn-default filelist-file-info"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.info';

$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext)]);

$output317 .= '"
                                            data-identifier="';
$array320 = array (
);
$output317 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array320)]);

$output317 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['identifier'] = NULL;
$arguments321['size'] = 'small';
$arguments321['overlay'] = NULL;
$arguments321['state'] = 'default';
$arguments321['alternativeMarkupIdentifier'] = NULL;
$arguments321['identifier'] = 'actions-document-info';

$output317 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output317 .= '
                                        </a>
                                    ';
return $output317;
};
$arguments315['__elseClosures'][] = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['identifier'] = NULL;
$arguments324['size'] = 'small';
$arguments324['overlay'] = NULL;
$arguments324['state'] = 'default';
$arguments324['alternativeMarkupIdentifier'] = NULL;
$arguments324['identifier'] = 'empty-empty';

$output323 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '</span>
                                    ';
return $output323;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output34 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['file'] = NULL;
$arguments385['copyOrCut'] = 'copy';
$array387 = array (
);$arguments385['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array387);
$arguments385['copyOrCut'] = 'copy';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output384 .= '"
                                            class="btn btn-default filelist-file-copy"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments388 = array();
$arguments388['key'] = NULL;
$arguments388['id'] = NULL;
$arguments388['default'] = NULL;
$arguments388['arguments'] = NULL;
$arguments388['extensionName'] = NULL;
$arguments388['languageKey'] = NULL;
$arguments388['alternativeLanguageKeys'] = NULL;
$arguments388['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.copy';

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext)]);

$output384 .= '"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['action'] = NULL;
$arguments390['arguments'] = array (
);
$arguments390['controller'] = NULL;
$arguments390['extensionName'] = NULL;
$arguments390['pluginName'] = NULL;
$arguments390['pageUid'] = NULL;
$arguments390['pageType'] = 0;
$arguments390['noCache'] = NULL;
$arguments390['noCacheHash'] = NULL;
$arguments390['section'] = '';
$arguments390['format'] = '';
$arguments390['linkAccessRestrictedPages'] = false;
$arguments390['additionalParams'] = array (
);
$arguments390['absolute'] = false;
$arguments390['addQueryString'] = false;
$arguments390['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments390['addQueryStringMethod'] = NULL;
$arguments390['action'] = 'search';
// Rendering Array
$array392 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$array395 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array395);
};
$arguments393 = array();
$arguments393['value'] = NULL;
$arguments393['keepQuotes'] = false;
$arguments393['encoding'] = NULL;
$arguments393['doubleEncode'] = true;
$renderChildrenClosure394 = ($arguments393['value'] !== null) ? function() use ($arguments393) { return $arguments393['value']; } : $renderChildrenClosure394;$array392['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
$arguments390['arguments'] = $array392;

$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext)]);

$output384 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['identifier'] = NULL;
$arguments408['size'] = 'small';
$arguments408['overlay'] = NULL;
$arguments408['state'] = 'default';
$arguments408['alternativeMarkupIdentifier'] = NULL;
$arguments408['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);
};
$arguments406 = array();

$output405 .= '';

$output405 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['identifier'] = NULL;
$arguments412['size'] = 'small';
$arguments412['overlay'] = NULL;
$arguments412['state'] = 'default';
$arguments412['alternativeMarkupIdentifier'] = NULL;
$arguments412['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);
};
$arguments410 = array();
$arguments410['if'] = NULL;

$output405 .= '';

$output405 .= '
                                            ';
return $output405;
};
$arguments396 = array();
$arguments396['then'] = NULL;
$arguments396['else'] = NULL;
$arguments396['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array402 = array();
$array403 = array (
);$array402['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array403);
$array402['1'] = ' == \'copy\'';

$expression404 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'copy');};
$arguments396['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array402)
					),
					$renderingContext
				);
$arguments396['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['identifier'] = NULL;
$arguments398['size'] = 'small';
$arguments398['overlay'] = NULL;
$arguments398['state'] = 'default';
$arguments398['alternativeMarkupIdentifier'] = NULL;
$arguments398['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);
};
$arguments396['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['identifier'] = NULL;
$arguments400['size'] = 'small';
$arguments400['overlay'] = NULL;
$arguments400['state'] = 'default';
$arguments400['alternativeMarkupIdentifier'] = NULL;
$arguments400['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);
};

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output384 .= '
                                        </a>
                                    ';
return $output384;
};
$arguments382 = array();

$output381 .= '';

$output381 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['identifier'] = NULL;
$arguments417['size'] = 'small';
$arguments417['overlay'] = NULL;
$arguments417['state'] = 'default';
$arguments417['alternativeMarkupIdentifier'] = NULL;
$arguments417['identifier'] = 'empty-empty';

$output416 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output416 .= '</span>
                                    ';
return $output416;
};
$arguments414 = array();
$arguments414['if'] = NULL;

$output381 .= '';

$output381 .= '
                                ';
return $output381;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('file.copyable', $array379);

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['file'] = NULL;
$arguments346['copyOrCut'] = 'copy';
$array348 = array (
);$arguments346['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array348);
$arguments346['copyOrCut'] = 'copy';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output345 .= '"
                                            class="btn btn-default filelist-file-copy"
                                            title="';
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
$arguments349['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.copy';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext)]);

$output345 .= '"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['action'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['controller'] = NULL;
$arguments351['extensionName'] = NULL;
$arguments351['pluginName'] = NULL;
$arguments351['pageUid'] = NULL;
$arguments351['pageType'] = 0;
$arguments351['noCache'] = NULL;
$arguments351['noCacheHash'] = NULL;
$arguments351['section'] = '';
$arguments351['format'] = '';
$arguments351['linkAccessRestrictedPages'] = false;
$arguments351['additionalParams'] = array (
);
$arguments351['absolute'] = false;
$arguments351['addQueryString'] = false;
$arguments351['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments351['addQueryStringMethod'] = NULL;
$arguments351['action'] = 'search';
// Rendering Array
$array353 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$array356 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array356);
};
$arguments354 = array();
$arguments354['value'] = NULL;
$arguments354['keepQuotes'] = false;
$arguments354['encoding'] = NULL;
$arguments354['doubleEncode'] = true;
$renderChildrenClosure355 = ($arguments354['value'] !== null) ? function() use ($arguments354) { return $arguments354['value']; } : $renderChildrenClosure355;$array353['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);
$arguments351['arguments'] = $array353;

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output345 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output366 = '';

$output366 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['identifier'] = NULL;
$arguments369['size'] = 'small';
$arguments369['overlay'] = NULL;
$arguments369['state'] = 'default';
$arguments369['alternativeMarkupIdentifier'] = NULL;
$arguments369['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);
};
$arguments367 = array();

$output366 .= '';

$output366 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['identifier'] = NULL;
$arguments373['size'] = 'small';
$arguments373['overlay'] = NULL;
$arguments373['state'] = 'default';
$arguments373['alternativeMarkupIdentifier'] = NULL;
$arguments373['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);
};
$arguments371 = array();
$arguments371['if'] = NULL;

$output366 .= '';

$output366 .= '
                                            ';
return $output366;
};
$arguments357 = array();
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$arguments357['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array364);
$array363['1'] = ' == \'copy\'';

$expression365 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'copy');};
$arguments357['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments357['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments359 = array();
$arguments359['identifier'] = NULL;
$arguments359['size'] = 'small';
$arguments359['overlay'] = NULL;
$arguments359['state'] = 'default';
$arguments359['alternativeMarkupIdentifier'] = NULL;
$arguments359['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);
};
$arguments357['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['identifier'] = NULL;
$arguments361['size'] = 'small';
$arguments361['overlay'] = NULL;
$arguments361['state'] = 'default';
$arguments361['alternativeMarkupIdentifier'] = NULL;
$arguments361['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);
};

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output345 .= '
                                        </a>
                                    ';
return $output345;
};
$arguments343['__elseClosures'][] = function() use ($renderingContext, $self) {
$output375 = '';

$output375 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['identifier'] = NULL;
$arguments376['size'] = 'small';
$arguments376['overlay'] = NULL;
$arguments376['state'] = 'default';
$arguments376['alternativeMarkupIdentifier'] = NULL;
$arguments376['identifier'] = 'empty-empty';

$output375 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output375 .= '</span>
                                    ';
return $output375;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output34 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['file'] = NULL;
$arguments455['copyOrCut'] = 'copy';
$array457 = array (
);$arguments455['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array457);
$arguments455['copyOrCut'] = 'cut';

$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext)]);

$output454 .= '"
                                            class="btn btn-default filelist-file-cut"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['key'] = NULL;
$arguments458['id'] = NULL;
$arguments458['default'] = NULL;
$arguments458['arguments'] = NULL;
$arguments458['extensionName'] = NULL;
$arguments458['languageKey'] = NULL;
$arguments458['alternativeLanguageKeys'] = NULL;
$arguments458['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.cut';

$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext)]);

$output454 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$output469 = '';

$output469 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments472 = array();
$arguments472['identifier'] = NULL;
$arguments472['size'] = 'small';
$arguments472['overlay'] = NULL;
$arguments472['state'] = 'default';
$arguments472['alternativeMarkupIdentifier'] = NULL;
$arguments472['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);
};
$arguments470 = array();

$output469 .= '';

$output469 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure475 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments476 = array();
$arguments476['identifier'] = NULL;
$arguments476['size'] = 'small';
$arguments476['overlay'] = NULL;
$arguments476['state'] = 'default';
$arguments476['alternativeMarkupIdentifier'] = NULL;
$arguments476['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);
};
$arguments474 = array();
$arguments474['if'] = NULL;

$output469 .= '';

$output469 .= '
                                            ';
return $output469;
};
$arguments460 = array();
$arguments460['then'] = NULL;
$arguments460['else'] = NULL;
$arguments460['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array466 = array();
$array467 = array (
);$array466['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array467);
$array466['1'] = ' == \'cut\'';

$expression468 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'cut');};
$arguments460['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array466)
					),
					$renderingContext
				);
$arguments460['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['identifier'] = NULL;
$arguments462['size'] = 'small';
$arguments462['overlay'] = NULL;
$arguments462['state'] = 'default';
$arguments462['alternativeMarkupIdentifier'] = NULL;
$arguments462['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);
};
$arguments460['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['identifier'] = NULL;
$arguments464['size'] = 'small';
$arguments464['overlay'] = NULL;
$arguments464['state'] = 'default';
$arguments464['alternativeMarkupIdentifier'] = NULL;
$arguments464['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);
};

$output454 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output454 .= '
                                        </a>
                                    ';
return $output454;
};
$arguments452 = array();

$output451 .= '';

$output451 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$output480 = '';

$output480 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['identifier'] = NULL;
$arguments481['size'] = 'small';
$arguments481['overlay'] = NULL;
$arguments481['state'] = 'default';
$arguments481['alternativeMarkupIdentifier'] = NULL;
$arguments481['identifier'] = 'empty-empty';

$output480 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output480 .= '</span>
                                    ';
return $output480;
};
$arguments478 = array();
$arguments478['if'] = NULL;

$output451 .= '';

$output451 .= '
                                ';
return $output451;
};
$arguments419 = array();
$arguments419['then'] = NULL;
$arguments419['else'] = NULL;
$arguments419['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array448 = array();
$array449 = array (
);$array448['0'] = $renderingContext->getVariableProvider()->getByPath('file.cuttable', $array449);

$expression450 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments419['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array448)
					),
					$renderingContext
				);
$arguments419['__thenClosure'] = function() use ($renderingContext, $self) {
$output421 = '';

$output421 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['file'] = NULL;
$arguments422['copyOrCut'] = 'copy';
$array424 = array (
);$arguments422['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array424);
$arguments422['copyOrCut'] = 'cut';

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output421 .= '"
                                            class="btn btn-default filelist-file-cut"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.cut';

$output421 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output421 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output436 = '';

$output436 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['identifier'] = NULL;
$arguments439['size'] = 'small';
$arguments439['overlay'] = NULL;
$arguments439['state'] = 'default';
$arguments439['alternativeMarkupIdentifier'] = NULL;
$arguments439['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);
};
$arguments437 = array();

$output436 .= '';

$output436 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['identifier'] = NULL;
$arguments443['size'] = 'small';
$arguments443['overlay'] = NULL;
$arguments443['state'] = 'default';
$arguments443['alternativeMarkupIdentifier'] = NULL;
$arguments443['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);
};
$arguments441 = array();
$arguments441['if'] = NULL;

$output436 .= '';

$output436 .= '
                                            ';
return $output436;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array433 = array();
$array434 = array (
);$array433['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array434);
$array433['1'] = ' == \'cut\'';

$expression435 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'cut');};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression435(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array433)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['identifier'] = NULL;
$arguments429['size'] = 'small';
$arguments429['overlay'] = NULL;
$arguments429['state'] = 'default';
$arguments429['alternativeMarkupIdentifier'] = NULL;
$arguments429['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);
};
$arguments427['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['identifier'] = NULL;
$arguments431['size'] = 'small';
$arguments431['overlay'] = NULL;
$arguments431['state'] = 'default';
$arguments431['alternativeMarkupIdentifier'] = NULL;
$arguments431['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);
};

$output421 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output421 .= '
                                        </a>
                                    ';
return $output421;
};
$arguments419['__elseClosures'][] = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['identifier'] = NULL;
$arguments446['size'] = 'small';
$arguments446['overlay'] = NULL;
$arguments446['state'] = 'default';
$arguments446['alternativeMarkupIdentifier'] = NULL;
$arguments446['identifier'] = 'empty-empty';

$output445 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output445 .= '</span>
                                    ';
return $output445;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output34 .= '


                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
$output515 = '';

$output515 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$output518 = '';

$output518 .= '
                                        <a href="#" class="btn btn-default t3js-filelist-delete"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments519 = array();
$arguments519['key'] = NULL;
$arguments519['id'] = NULL;
$arguments519['default'] = NULL;
$arguments519['arguments'] = NULL;
$arguments519['extensionName'] = NULL;
$arguments519['languageKey'] = NULL;
$arguments519['alternativeLanguageKeys'] = NULL;
$arguments519['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext)]);

$output518 .= '"
                                            data-identifier="';
$array521 = array (
);
$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array521)]);

$output518 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['key'] = NULL;
$arguments522['id'] = NULL;
$arguments522['default'] = NULL;
$arguments522['arguments'] = NULL;
$arguments522['extensionName'] = NULL;
$arguments522['languageKey'] = NULL;
$arguments522['alternativeLanguageKeys'] = NULL;
$arguments522['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext)]);

$output518 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['key'] = NULL;
$arguments524['id'] = NULL;
$arguments524['default'] = NULL;
$arguments524['arguments'] = NULL;
$arguments524['extensionName'] = NULL;
$arguments524['languageKey'] = NULL;
$arguments524['alternativeLanguageKeys'] = NULL;
$arguments524['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:mess.delete';
// Rendering Array
$array526 = array();
$array527 = array (
);$array526['0'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array527);
$arguments524['arguments'] = $array526;

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext)]);

$output518 .= '"
                                            data-check="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['then'] = NULL;
$arguments528['else'] = NULL;
$arguments528['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array530 = array();
$array531 = array (
);$array530['0'] = $renderingContext->getVariableProvider()->getByPath('settings.jsConfirmationDelete', $array531);

$expression532 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments528['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression532(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array530)
					),
					$renderingContext
				);
$arguments528['then'] = 1;
$arguments528['else'] = 0;

$output518 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);

$output518 .= '"
                                            data-delete-url="';
$array533 = array (
);
$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteUrl', $array533)]);

$output518 .= '"
                                            data-delete-type="delete_file"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['action'] = NULL;
$arguments534['arguments'] = array (
);
$arguments534['controller'] = NULL;
$arguments534['extensionName'] = NULL;
$arguments534['pluginName'] = NULL;
$arguments534['pageUid'] = NULL;
$arguments534['pageType'] = 0;
$arguments534['noCache'] = NULL;
$arguments534['noCacheHash'] = NULL;
$arguments534['section'] = '';
$arguments534['format'] = '';
$arguments534['linkAccessRestrictedPages'] = false;
$arguments534['additionalParams'] = array (
);
$arguments534['absolute'] = false;
$arguments534['addQueryString'] = false;
$arguments534['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments534['addQueryStringMethod'] = NULL;
$arguments534['action'] = 'search';
// Rendering Array
$array536 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
$array539 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array539);
};
$arguments537 = array();
$arguments537['value'] = NULL;
$arguments537['keepQuotes'] = false;
$arguments537['encoding'] = NULL;
$arguments537['doubleEncode'] = true;
$renderChildrenClosure538 = ($arguments537['value'] !== null) ? function() use ($arguments537) { return $arguments537['value']; } : $renderChildrenClosure538;$array536['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext);
$arguments534['arguments'] = $array536;

$output518 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext)]);

$output518 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['identifier'] = NULL;
$arguments540['size'] = 'small';
$arguments540['overlay'] = NULL;
$arguments540['state'] = 'default';
$arguments540['alternativeMarkupIdentifier'] = NULL;
$arguments540['identifier'] = 'actions-edit-delete';

$output518 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output518 .= '
                                        </a>
                                    ';
return $output518;
};
$arguments516 = array();

$output515 .= '';

$output515 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments545 = array();
$arguments545['identifier'] = NULL;
$arguments545['size'] = 'small';
$arguments545['overlay'] = NULL;
$arguments545['state'] = 'default';
$arguments545['alternativeMarkupIdentifier'] = NULL;
$arguments545['identifier'] = 'empty-empty';

$output544 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments545, $renderChildrenClosure546, $renderingContext);

$output544 .= '</span>
                                    ';
return $output544;
};
$arguments542 = array();
$arguments542['if'] = NULL;

$output515 .= '';

$output515 .= '
                                ';
return $output515;
};
$arguments483 = array();
$arguments483['then'] = NULL;
$arguments483['else'] = NULL;
$arguments483['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array512 = array();
$array513 = array (
);$array512['0'] = $renderingContext->getVariableProvider()->getByPath('file.isDeletable', $array513);

$expression514 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments483['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression514(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array512)
					),
					$renderingContext
				);
$arguments483['__thenClosure'] = function() use ($renderingContext, $self) {
$output485 = '';

$output485 .= '
                                        <a href="#" class="btn btn-default t3js-filelist-delete"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['key'] = NULL;
$arguments486['id'] = NULL;
$arguments486['default'] = NULL;
$arguments486['arguments'] = NULL;
$arguments486['extensionName'] = NULL;
$arguments486['languageKey'] = NULL;
$arguments486['alternativeLanguageKeys'] = NULL;
$arguments486['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext)]);

$output485 .= '"
                                            data-identifier="';
$array488 = array (
);
$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array488)]);

$output485 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure490 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments489 = array();
$arguments489['key'] = NULL;
$arguments489['id'] = NULL;
$arguments489['default'] = NULL;
$arguments489['arguments'] = NULL;
$arguments489['extensionName'] = NULL;
$arguments489['languageKey'] = NULL;
$arguments489['alternativeLanguageKeys'] = NULL;
$arguments489['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments489, $renderChildrenClosure490, $renderingContext)]);

$output485 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['key'] = NULL;
$arguments491['id'] = NULL;
$arguments491['default'] = NULL;
$arguments491['arguments'] = NULL;
$arguments491['extensionName'] = NULL;
$arguments491['languageKey'] = NULL;
$arguments491['alternativeLanguageKeys'] = NULL;
$arguments491['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:mess.delete';
// Rendering Array
$array493 = array();
$array494 = array (
);$array493['0'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array494);
$arguments491['arguments'] = $array493;

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output485 .= '"
                                            data-check="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['then'] = NULL;
$arguments495['else'] = NULL;
$arguments495['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = array();
$array498 = array (
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('settings.jsConfirmationDelete', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments495['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$arguments495['then'] = 1;
$arguments495['else'] = 0;

$output485 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output485 .= '"
                                            data-delete-url="';
$array500 = array (
);
$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteUrl', $array500)]);

$output485 .= '"
                                            data-delete-type="delete_file"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['action'] = NULL;
$arguments501['arguments'] = array (
);
$arguments501['controller'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['pluginName'] = NULL;
$arguments501['pageUid'] = NULL;
$arguments501['pageType'] = 0;
$arguments501['noCache'] = NULL;
$arguments501['noCacheHash'] = NULL;
$arguments501['section'] = '';
$arguments501['format'] = '';
$arguments501['linkAccessRestrictedPages'] = false;
$arguments501['additionalParams'] = array (
);
$arguments501['absolute'] = false;
$arguments501['addQueryString'] = false;
$arguments501['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments501['addQueryStringMethod'] = NULL;
$arguments501['action'] = 'search';
// Rendering Array
$array503 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$array506 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array506);
};
$arguments504 = array();
$arguments504['value'] = NULL;
$arguments504['keepQuotes'] = false;
$arguments504['encoding'] = NULL;
$arguments504['doubleEncode'] = true;
$renderChildrenClosure505 = ($arguments504['value'] !== null) ? function() use ($arguments504) { return $arguments504['value']; } : $renderChildrenClosure505;$array503['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);
$arguments501['arguments'] = $array503;

$output485 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext)]);

$output485 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments507 = array();
$arguments507['identifier'] = NULL;
$arguments507['size'] = 'small';
$arguments507['overlay'] = NULL;
$arguments507['state'] = 'default';
$arguments507['alternativeMarkupIdentifier'] = NULL;
$arguments507['identifier'] = 'actions-edit-delete';

$output485 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output485 .= '
                                        </a>
                                    ';
return $output485;
};
$arguments483['__elseClosures'][] = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['identifier'] = NULL;
$arguments510['size'] = 'small';
$arguments510['overlay'] = NULL;
$arguments510['state'] = 'default';
$arguments510['alternativeMarkupIdentifier'] = NULL;
$arguments510['identifier'] = 'empty-empty';

$output509 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output509 .= '</span>
                                    ';
return $output509;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output34 .= '
                            </div>
                        </td>
                        <td class="nowrap">';
$array547 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array547)]);

$output34 .= '</td>
                        <td class="nowrap">';
$array548 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.lastModified', $array548)]);

$output34 .= '</td>
                        <td class="nowrap">';
$array549 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.size', $array549)]);

$output34 .= '</td>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$output555 = '';

$output555 .= '<strong class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['key'] = NULL;
$arguments556['id'] = NULL;
$arguments556['default'] = NULL;
$arguments556['arguments'] = NULL;
$arguments556['extensionName'] = NULL;
$arguments556['languageKey'] = NULL;
$arguments556['alternativeLanguageKeys'] = NULL;
$arguments556['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:read';

$output555 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext)]);

$output555 .= '</strong>';
return $output555;
};
$arguments550 = array();
$arguments550['then'] = NULL;
$arguments550['else'] = NULL;
$arguments550['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array552 = array();
$array553 = array (
);$array552['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReadable', $array553);

$expression554 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments550['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression554(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array552)
					),
					$renderingContext
				);
$arguments550['__thenClosure'] = $renderChildrenClosure551;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$output563 = '';

$output563 .= '<strong class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments564 = array();
$arguments564['key'] = NULL;
$arguments564['id'] = NULL;
$arguments564['default'] = NULL;
$arguments564['arguments'] = NULL;
$arguments564['extensionName'] = NULL;
$arguments564['languageKey'] = NULL;
$arguments564['alternativeLanguageKeys'] = NULL;
$arguments564['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:write';

$output563 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext)]);

$output563 .= '</strong>';
return $output563;
};
$arguments558 = array();
$arguments558['then'] = NULL;
$arguments558['else'] = NULL;
$arguments558['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array560 = array();
$array561 = array (
);$array560['0'] = $renderingContext->getVariableProvider()->getByPath('file.isWritable', $array561);

$expression562 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments558['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression562(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array560)
					),
					$renderingContext
				);
$arguments558['__thenClosure'] = $renderChildrenClosure559;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output34 .= '
                        </td>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
                                    <a href="#" class="filelist-file-references" data-identifier="';
$array581 = array (
);
$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array581)]);

$output580 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['key'] = NULL;
$arguments582['id'] = NULL;
$arguments582['default'] = NULL;
$arguments582['arguments'] = NULL;
$arguments582['extensionName'] = NULL;
$arguments582['languageKey'] = NULL;
$arguments582['alternativeLanguageKeys'] = NULL;
$arguments582['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:show_references';

$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext)]);

$output580 .= ' (';
$array584 = array (
);
$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array584)]);

$output580 .= ')">';
$array585 = array (
);
$output580 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array585)]);

$output580 .= '</a>
                                ';
return $output580;
};
$arguments578 = array();

$output577 .= '';

$output577 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};
$arguments586 = array();
$arguments586['if'] = NULL;

$output577 .= '';

$output577 .= '
                            ';
return $output577;
};
$arguments566 = array();
$arguments566['then'] = NULL;
$arguments566['else'] = NULL;
$arguments566['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array574 = array();
$array575 = array (
);$array574['0'] = $renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array575);
$array574['1'] = ' > 0';

$expression576 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments566['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array574)
					),
					$renderingContext
				);
$arguments566['__thenClosure'] = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
                                    <a href="#" class="filelist-file-references" data-identifier="';
$array569 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array569)]);

$output568 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments570 = array();
$arguments570['key'] = NULL;
$arguments570['id'] = NULL;
$arguments570['default'] = NULL;
$arguments570['arguments'] = NULL;
$arguments570['extensionName'] = NULL;
$arguments570['languageKey'] = NULL;
$arguments570['alternativeLanguageKeys'] = NULL;
$arguments570['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:show_references';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext)]);

$output568 .= ' (';
$array572 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array572)]);

$output568 .= ')">';
$array573 = array (
);
$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array573)]);

$output568 .= '</a>
                                ';
return $output568;
};
$arguments566['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output34 .= '
                        </td>
                    </tr>
                ';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array33);
$arguments31['as'] = 'file';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output16 .= '
                </tbody>
            </table>
        </div>
    ';
return $output16;
};
$arguments9 = array();
$arguments9['then'] = NULL;
$arguments9['else'] = NULL;
$arguments9['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('files', $array14);
};
$arguments12 = array();
$arguments12['subject'] = NULL;
$renderChildrenClosure13 = ($arguments12['subject'] !== null) ? function() use ($arguments12) { return $arguments12['subject']; } : $renderChildrenClosure13;$array11['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
$array11['1'] = ' > 0';

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments9['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)
					),
					$renderingContext
				);
$arguments9['__thenClosure'] = $renderChildrenClosure10;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure589 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments588 = array();
$arguments588['section'] = NULL;
$arguments588['partial'] = NULL;
$arguments588['delegate'] = NULL;
$arguments588['renderable'] = NULL;
$arguments588['arguments'] = array (
);
$arguments588['optional'] = false;
$arguments588['default'] = NULL;
$arguments588['contentAs'] = NULL;
$arguments588['debug'] = true;
$arguments588['partial'] = 'ListOptions';
// Rendering Array
$array590 = array();
$array591 = array (
);$array590['checkboxes'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array591);
$arguments588['arguments'] = $array590;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments588, $renderChildrenClosure589, $renderingContext);

$output4 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['section'] = NULL;
$arguments592['partial'] = NULL;
$arguments592['delegate'] = NULL;
$arguments592['renderable'] = NULL;
$arguments592['arguments'] = array (
);
$arguments592['optional'] = false;
$arguments592['default'] = NULL;
$arguments592['contentAs'] = NULL;
$arguments592['debug'] = true;
$arguments592['partial'] = 'ClipBoard';
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['showClipBoard'] = $renderingContext->getVariableProvider()->getByPath('showClipBoard', $array595);
$array596 = array (
);$array594['clipBoardHtml'] = $renderingContext->getVariableProvider()->getByPath('clipBoardHtml', $array596);
$arguments592['arguments'] = $array594;

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output4 .= '
';

return $output4;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output597 = '';

$output597 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
    xmlns:be="http://typo3.org/ns/TYPO3/CMS/Backend/ViewHelpers"
    xmlns:fl="http://typo3.org/ns/TYPO3/CMS/Filelist/ViewHelpers">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['name'] = NULL;
$arguments598['name'] = 'Default';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output597 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
$output602 = '';

$output602 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return 'Search';
};
$arguments603 = array();
$arguments603['key'] = NULL;
$arguments603['id'] = NULL;
$arguments603['default'] = NULL;
$arguments603['arguments'] = NULL;
$arguments603['extensionName'] = NULL;
$arguments603['languageKey'] = NULL;
$arguments603['alternativeLanguageKeys'] = NULL;
$arguments603['id'] = 'search';

$output602 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext)]);

$output602 .= ': "';
$array605 = array (
);
$output602 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchWord', $array605)]);

$output602 .= '"</h1>
';
return $output602;
};
$arguments600 = array();
$arguments600['name'] = NULL;
$arguments600['name'] = 'headline';

$output597 .= NULL;

$output597 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments609 = array();
$arguments609['section'] = NULL;
$arguments609['partial'] = NULL;
$arguments609['delegate'] = NULL;
$arguments609['renderable'] = NULL;
$arguments609['arguments'] = array (
);
$arguments609['optional'] = false;
$arguments609['default'] = NULL;
$arguments609['contentAs'] = NULL;
$arguments609['debug'] = true;
$arguments609['partial'] = 'SearchForm';
// Rendering Array
$array611 = array();
$array612 = array (
);$array611['searchWord'] = $renderingContext->getVariableProvider()->getByPath('searchWord', $array612);
$arguments609['arguments'] = $array611;

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments609, $renderChildrenClosure610, $renderingContext);

$output608 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
        <div class="table-fit">
            <table class="table table-striped table-hover" id="typo3-filelist">
                <thead>
                <tr data-uid="0" data-l10nparent="0">
                    <th class="col-icon nowrap"></th>
                    <th class="col-path nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments621 = array();
$arguments621['key'] = NULL;
$arguments621['id'] = NULL;
$arguments621['default'] = NULL;
$arguments621['arguments'] = NULL;
$arguments621['extensionName'] = NULL;
$arguments621['languageKey'] = NULL;
$arguments621['alternativeLanguageKeys'] = NULL;
$arguments621['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_filepath';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext)]);

$output620 .= '</th>
                    <th class="col-title nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments623 = array();
$arguments623['key'] = NULL;
$arguments623['id'] = NULL;
$arguments623['default'] = NULL;
$arguments623['arguments'] = NULL;
$arguments623['extensionName'] = NULL;
$arguments623['languageKey'] = NULL;
$arguments623['alternativeLanguageKeys'] = NULL;
$arguments623['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_file';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext)]);

$output620 .= '</th>
                    <th class="col-control"></th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments625 = array();
$arguments625['key'] = NULL;
$arguments625['id'] = NULL;
$arguments625['default'] = NULL;
$arguments625['arguments'] = NULL;
$arguments625['extensionName'] = NULL;
$arguments625['languageKey'] = NULL;
$arguments625['alternativeLanguageKeys'] = NULL;
$arguments625['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_fileext';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext)]);

$output620 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments627 = array();
$arguments627['key'] = NULL;
$arguments627['id'] = NULL;
$arguments627['default'] = NULL;
$arguments627['arguments'] = NULL;
$arguments627['extensionName'] = NULL;
$arguments627['languageKey'] = NULL;
$arguments627['alternativeLanguageKeys'] = NULL;
$arguments627['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_tstamp';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext)]);

$output620 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure630 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments629 = array();
$arguments629['key'] = NULL;
$arguments629['id'] = NULL;
$arguments629['default'] = NULL;
$arguments629['arguments'] = NULL;
$arguments629['extensionName'] = NULL;
$arguments629['languageKey'] = NULL;
$arguments629['alternativeLanguageKeys'] = NULL;
$arguments629['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_size';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments629, $renderChildrenClosure630, $renderingContext)]);

$output620 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['key'] = NULL;
$arguments631['id'] = NULL;
$arguments631['default'] = NULL;
$arguments631['arguments'] = NULL;
$arguments631['extensionName'] = NULL;
$arguments631['languageKey'] = NULL;
$arguments631['alternativeLanguageKeys'] = NULL;
$arguments631['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:c_rw';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext)]);

$output620 .= '</th>
                    <th class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure634 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments633 = array();
$arguments633['key'] = NULL;
$arguments633['id'] = NULL;
$arguments633['default'] = NULL;
$arguments633['arguments'] = NULL;
$arguments633['extensionName'] = NULL;
$arguments633['languageKey'] = NULL;
$arguments633['alternativeLanguageKeys'] = NULL;
$arguments633['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels._REF_';

$output620 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments633, $renderChildrenClosure634, $renderingContext)]);

$output620 .= '</th>
                </tr>
                </thead>
                <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output638 = '';

$output638 .= '
                    <tr data-uid="0" data-l10nparent="0">
                        <td class="col-icon nowrap">
                            <a class="t3js-contextmenutrigger" data-uid="';
$array639 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array639)]);

$output638 .= '" data-table="sys_file" href="#">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments640 = array();
$arguments640['resource'] = NULL;
$arguments640['size'] = 'small';
$arguments640['overlay'] = NULL;
$arguments640['options'] = array (
);
$arguments640['alternativeMarkupIdentifier'] = NULL;
$array642 = array (
);$arguments640['resource'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array642);

$output638 .= TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output638 .= '
                            </a>
                        </td>
                        <td class="col-path nowrap">
                            ';
$array643 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.path', $array643)]);

$output638 .= '
                        </td>
                        <td class="col-title col-responsive nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure645 = function() use ($renderingContext, $self) {
$output666 = '';

$output666 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure668 = function() use ($renderingContext, $self) {
$output669 = '';

$output669 .= '
                                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['uid'] = NULL;
$arguments670['table'] = NULL;
$arguments670['fields'] = NULL;
$arguments670['returnUrl'] = '';
$array672 = array (
);$arguments670['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array672);
$arguments670['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments675 = array();
$arguments675['action'] = NULL;
$arguments675['arguments'] = array (
);
$arguments675['controller'] = NULL;
$arguments675['extensionName'] = NULL;
$arguments675['pluginName'] = NULL;
$arguments675['pageUid'] = NULL;
$arguments675['pageType'] = 0;
$arguments675['noCache'] = NULL;
$arguments675['noCacheHash'] = NULL;
$arguments675['section'] = '';
$arguments675['format'] = '';
$arguments675['linkAccessRestrictedPages'] = false;
$arguments675['additionalParams'] = array (
);
$arguments675['absolute'] = false;
$arguments675['addQueryString'] = false;
$arguments675['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments675['addQueryStringMethod'] = NULL;
$arguments675['action'] = 'search';
// Rendering Array
$array677 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$array680 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array680);
};
$arguments678 = array();
$arguments678['value'] = NULL;
$arguments678['keepQuotes'] = false;
$arguments678['encoding'] = NULL;
$arguments678['doubleEncode'] = true;
$renderChildrenClosure679 = ($arguments678['value'] !== null) ? function() use ($arguments678) { return $arguments678['value']; } : $renderChildrenClosure679;$array677['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);
$arguments675['arguments'] = $array677;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);
};
$arguments673 = array();
$arguments673['value'] = NULL;
$arguments670['returnUrl'] = isset($arguments673['value']) ? $arguments673['value'] : $renderChildrenClosure674();

$output669 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext)]);

$output669 .= '"
                                        class="filelist-file-title"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['key'] = NULL;
$arguments681['id'] = NULL;
$arguments681['default'] = NULL;
$arguments681['arguments'] = NULL;
$arguments681['extensionName'] = NULL;
$arguments681['languageKey'] = NULL;
$arguments681['alternativeLanguageKeys'] = NULL;
$arguments681['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output669 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext)]);

$output669 .= '"
                                    >
                                        ';
$array683 = array (
);
$output669 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array683)]);

$output669 .= '
                                    </a>
                                ';
return $output669;
};
$arguments667 = array();

$output666 .= '';

$output666 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure685 = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
                                    ';
$array687 = array (
);
$output686 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array687)]);

$output686 .= '
                                ';
return $output686;
};
$arguments684 = array();
$arguments684['if'] = NULL;

$output666 .= '';

$output666 .= '
                            ';
return $output666;
};
$arguments644 = array();
$arguments644['then'] = NULL;
$arguments644['else'] = NULL;
$arguments644['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array663 = array();
$array664 = array (
);$array663['0'] = $renderingContext->getVariableProvider()->getByPath('file.isMetadataEditable', $array664);

$expression665 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments644['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression665(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array663)
					),
					$renderingContext
				);
$arguments644['__thenClosure'] = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
                                    <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments647 = array();
$arguments647['uid'] = NULL;
$arguments647['table'] = NULL;
$arguments647['fields'] = NULL;
$arguments647['returnUrl'] = '';
$array649 = array (
);$arguments647['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array649);
$arguments647['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments652 = array();
$arguments652['action'] = NULL;
$arguments652['arguments'] = array (
);
$arguments652['controller'] = NULL;
$arguments652['extensionName'] = NULL;
$arguments652['pluginName'] = NULL;
$arguments652['pageUid'] = NULL;
$arguments652['pageType'] = 0;
$arguments652['noCache'] = NULL;
$arguments652['noCacheHash'] = NULL;
$arguments652['section'] = '';
$arguments652['format'] = '';
$arguments652['linkAccessRestrictedPages'] = false;
$arguments652['additionalParams'] = array (
);
$arguments652['absolute'] = false;
$arguments652['addQueryString'] = false;
$arguments652['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments652['addQueryStringMethod'] = NULL;
$arguments652['action'] = 'search';
// Rendering Array
$array654 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
$array657 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array657);
};
$arguments655 = array();
$arguments655['value'] = NULL;
$arguments655['keepQuotes'] = false;
$arguments655['encoding'] = NULL;
$arguments655['doubleEncode'] = true;
$renderChildrenClosure656 = ($arguments655['value'] !== null) ? function() use ($arguments655) { return $arguments655['value']; } : $renderChildrenClosure656;$array654['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);
$arguments652['arguments'] = $array654;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments652, $renderChildrenClosure653, $renderingContext);
};
$arguments650 = array();
$arguments650['value'] = NULL;
$arguments647['returnUrl'] = isset($arguments650['value']) ? $arguments650['value'] : $renderChildrenClosure651();

$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext)]);

$output646 .= '"
                                        class="filelist-file-title"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['key'] = NULL;
$arguments658['id'] = NULL;
$arguments658['default'] = NULL;
$arguments658['arguments'] = NULL;
$arguments658['extensionName'] = NULL;
$arguments658['languageKey'] = NULL;
$arguments658['alternativeLanguageKeys'] = NULL;
$arguments658['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext)]);

$output646 .= '"
                                    >
                                        ';
$array660 = array (
);
$output646 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array660)]);

$output646 .= '
                                    </a>
                                ';
return $output646;
};
$arguments644['__elseClosures'][] = function() use ($renderingContext, $self) {
$output661 = '';

$output661 .= '
                                    ';
$array662 = array (
);
$output661 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array662)]);

$output661 .= '
                                ';
return $output661;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments644, $renderChildrenClosure645, $renderingContext);

$output638 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
$output693 = '';

$output693 .= '
                                <br>
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper
$renderChildrenClosure695 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments694 = array();
$arguments694['additionalAttributes'] = NULL;
$arguments694['data'] = NULL;
$arguments694['aria'] = NULL;
$arguments694['class'] = NULL;
$arguments694['dir'] = NULL;
$arguments694['id'] = NULL;
$arguments694['lang'] = NULL;
$arguments694['style'] = NULL;
$arguments694['title'] = NULL;
$arguments694['accesskey'] = NULL;
$arguments694['tabindex'] = NULL;
$arguments694['onclick'] = NULL;
$arguments694['alt'] = NULL;
$arguments694['ismap'] = NULL;
$arguments694['longdesc'] = NULL;
$arguments694['usemap'] = NULL;
$arguments694['loading'] = NULL;
$arguments694['src'] = '';
$arguments694['treatIdAsReference'] = false;
$arguments694['image'] = NULL;
$arguments694['crop'] = NULL;
$arguments694['cropVariant'] = 'default';
$arguments694['fileExtension'] = NULL;
$arguments694['width'] = NULL;
$arguments694['height'] = NULL;
$arguments694['minWidth'] = NULL;
$arguments694['minHeight'] = NULL;
$arguments694['maxWidth'] = NULL;
$arguments694['maxHeight'] = NULL;
$arguments694['absolute'] = false;
$arguments694['context'] = 'Image.Preview';
$array696 = array (
);$arguments694['image'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array696);
$array697 = array (
);$arguments694['width'] = $renderingContext->getVariableProvider()->getByPath('thumbnail.width', $array697);
$array698 = array (
);$arguments694['height'] = $renderingContext->getVariableProvider()->getByPath('thumbnail.height', $array698);

$output693 .= TYPO3\CMS\Backend\ViewHelpers\ThumbnailViewHelper::renderStatic($arguments694, $renderChildrenClosure695, $renderingContext);

$output693 .= '
                            ';
return $output693;
};
$arguments688 = array();
$arguments688['then'] = NULL;
$arguments688['else'] = NULL;
$arguments688['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array690 = array();
$array691 = array (
);$array690['0'] = $renderingContext->getVariableProvider()->getByPath('file.isImage', $array691);

$expression692 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments688['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression692(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array690)
					),
					$renderingContext
				);
$arguments688['__thenClosure'] = $renderChildrenClosure689;

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);

$output638 .= '
                        </td>
                        <td class="col-control nowrap">
                            <div class="btn-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
$output723 = '';

$output723 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
$output726 = '';

$output726 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['file'] = NULL;
$arguments727['returnUrl'] = '';
$array729 = array (
);$arguments727['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array729);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure733 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments732 = array();
$arguments732['action'] = NULL;
$arguments732['arguments'] = array (
);
$arguments732['controller'] = NULL;
$arguments732['extensionName'] = NULL;
$arguments732['pluginName'] = NULL;
$arguments732['pageUid'] = NULL;
$arguments732['pageType'] = 0;
$arguments732['noCache'] = NULL;
$arguments732['noCacheHash'] = NULL;
$arguments732['section'] = '';
$arguments732['format'] = '';
$arguments732['linkAccessRestrictedPages'] = false;
$arguments732['additionalParams'] = array (
);
$arguments732['absolute'] = false;
$arguments732['addQueryString'] = false;
$arguments732['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments732['addQueryStringMethod'] = NULL;
$arguments732['action'] = 'search';
// Rendering Array
$array734 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure736 = function() use ($renderingContext, $self) {
$array737 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array737);
};
$arguments735 = array();
$arguments735['value'] = NULL;
$arguments735['keepQuotes'] = false;
$arguments735['encoding'] = NULL;
$arguments735['doubleEncode'] = true;
$renderChildrenClosure736 = ($arguments735['value'] !== null) ? function() use ($arguments735) { return $arguments735['value']; } : $renderChildrenClosure736;$array734['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments735, $renderChildrenClosure736, $renderingContext);
$arguments732['arguments'] = $array734;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments732, $renderChildrenClosure733, $renderingContext);
};
$arguments730 = array();
$arguments730['value'] = NULL;
$arguments727['returnUrl'] = isset($arguments730['value']) ? $arguments730['value'] : $renderChildrenClosure731();

$output726 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext)]);

$output726 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments738 = array();
$arguments738['key'] = NULL;
$arguments738['id'] = NULL;
$arguments738['default'] = NULL;
$arguments738['arguments'] = NULL;
$arguments738['extensionName'] = NULL;
$arguments738['languageKey'] = NULL;
$arguments738['alternativeLanguageKeys'] = NULL;
$arguments738['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editcontent';

$output726 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments738, $renderChildrenClosure739, $renderingContext)]);

$output726 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments740 = array();
$arguments740['identifier'] = NULL;
$arguments740['size'] = 'small';
$arguments740['overlay'] = NULL;
$arguments740['state'] = 'default';
$arguments740['alternativeMarkupIdentifier'] = NULL;
$arguments740['identifier'] = 'actions-page-open';

$output726 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output726 .= '
                                        </a>
                                    ';
return $output726;
};
$arguments724 = array();

$output723 .= '';

$output723 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure743 = function() use ($renderingContext, $self) {
$output744 = '';

$output744 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure746 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments745 = array();
$arguments745['identifier'] = NULL;
$arguments745['size'] = 'small';
$arguments745['overlay'] = NULL;
$arguments745['state'] = 'default';
$arguments745['alternativeMarkupIdentifier'] = NULL;
$arguments745['identifier'] = 'empty-empty';

$output744 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments745, $renderChildrenClosure746, $renderingContext);

$output744 .= '</span>
                                    ';
return $output744;
};
$arguments742 = array();
$arguments742['if'] = NULL;

$output723 .= '';

$output723 .= '
                                ';
return $output723;
};
$arguments699 = array();
$arguments699['then'] = NULL;
$arguments699['else'] = NULL;
$arguments699['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array720 = array();
$array721 = array (
);$array720['0'] = $renderingContext->getVariableProvider()->getByPath('file.isEditable', $array721);

$expression722 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments699['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression722(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array720)
					),
					$renderingContext
				);
$arguments699['__thenClosure'] = function() use ($renderingContext, $self) {
$output701 = '';

$output701 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments702 = array();
$arguments702['file'] = NULL;
$arguments702['returnUrl'] = '';
$array704 = array (
);$arguments702['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array704);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments707 = array();
$arguments707['action'] = NULL;
$arguments707['arguments'] = array (
);
$arguments707['controller'] = NULL;
$arguments707['extensionName'] = NULL;
$arguments707['pluginName'] = NULL;
$arguments707['pageUid'] = NULL;
$arguments707['pageType'] = 0;
$arguments707['noCache'] = NULL;
$arguments707['noCacheHash'] = NULL;
$arguments707['section'] = '';
$arguments707['format'] = '';
$arguments707['linkAccessRestrictedPages'] = false;
$arguments707['additionalParams'] = array (
);
$arguments707['absolute'] = false;
$arguments707['addQueryString'] = false;
$arguments707['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments707['addQueryStringMethod'] = NULL;
$arguments707['action'] = 'search';
// Rendering Array
$array709 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
$array712 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array712);
};
$arguments710 = array();
$arguments710['value'] = NULL;
$arguments710['keepQuotes'] = false;
$arguments710['encoding'] = NULL;
$arguments710['doubleEncode'] = true;
$renderChildrenClosure711 = ($arguments710['value'] !== null) ? function() use ($arguments710) { return $arguments710['value']; } : $renderChildrenClosure711;$array709['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext);
$arguments707['arguments'] = $array709;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);
};
$arguments705 = array();
$arguments705['value'] = NULL;
$arguments702['returnUrl'] = isset($arguments705['value']) ? $arguments705['value'] : $renderChildrenClosure706();

$output701 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\EditFileContentViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext)]);

$output701 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure714 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments713 = array();
$arguments713['key'] = NULL;
$arguments713['id'] = NULL;
$arguments713['default'] = NULL;
$arguments713['arguments'] = NULL;
$arguments713['extensionName'] = NULL;
$arguments713['languageKey'] = NULL;
$arguments713['alternativeLanguageKeys'] = NULL;
$arguments713['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editcontent';

$output701 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments713, $renderChildrenClosure714, $renderingContext)]);

$output701 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure716 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments715 = array();
$arguments715['identifier'] = NULL;
$arguments715['size'] = 'small';
$arguments715['overlay'] = NULL;
$arguments715['state'] = 'default';
$arguments715['alternativeMarkupIdentifier'] = NULL;
$arguments715['identifier'] = 'actions-page-open';

$output701 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments715, $renderChildrenClosure716, $renderingContext);

$output701 .= '
                                        </a>
                                    ';
return $output701;
};
$arguments699['__elseClosures'][] = function() use ($renderingContext, $self) {
$output717 = '';

$output717 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['identifier'] = NULL;
$arguments718['size'] = 'small';
$arguments718['overlay'] = NULL;
$arguments718['state'] = 'default';
$arguments718['alternativeMarkupIdentifier'] = NULL;
$arguments718['identifier'] = 'empty-empty';

$output717 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext);

$output717 .= '</span>
                                    ';
return $output717;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure748 = function() use ($renderingContext, $self) {
$output771 = '';

$output771 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
$output774 = '';

$output774 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure776 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments775 = array();
$arguments775['uid'] = NULL;
$arguments775['table'] = NULL;
$arguments775['fields'] = NULL;
$arguments775['returnUrl'] = '';
$array777 = array (
);$arguments775['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array777);
$arguments775['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure779 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments780 = array();
$arguments780['action'] = NULL;
$arguments780['arguments'] = array (
);
$arguments780['controller'] = NULL;
$arguments780['extensionName'] = NULL;
$arguments780['pluginName'] = NULL;
$arguments780['pageUid'] = NULL;
$arguments780['pageType'] = 0;
$arguments780['noCache'] = NULL;
$arguments780['noCacheHash'] = NULL;
$arguments780['section'] = '';
$arguments780['format'] = '';
$arguments780['linkAccessRestrictedPages'] = false;
$arguments780['additionalParams'] = array (
);
$arguments780['absolute'] = false;
$arguments780['addQueryString'] = false;
$arguments780['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments780['addQueryStringMethod'] = NULL;
$arguments780['action'] = 'search';
// Rendering Array
$array782 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
$array785 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array785);
};
$arguments783 = array();
$arguments783['value'] = NULL;
$arguments783['keepQuotes'] = false;
$arguments783['encoding'] = NULL;
$arguments783['doubleEncode'] = true;
$renderChildrenClosure784 = ($arguments783['value'] !== null) ? function() use ($arguments783) { return $arguments783['value']; } : $renderChildrenClosure784;$array782['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments783, $renderChildrenClosure784, $renderingContext);
$arguments780['arguments'] = $array782;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);
};
$arguments778 = array();
$arguments778['value'] = NULL;
$arguments775['returnUrl'] = isset($arguments778['value']) ? $arguments778['value'] : $renderChildrenClosure779();

$output774 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments775, $renderChildrenClosure776, $renderingContext)]);

$output774 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure787 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments786 = array();
$arguments786['key'] = NULL;
$arguments786['id'] = NULL;
$arguments786['default'] = NULL;
$arguments786['arguments'] = NULL;
$arguments786['extensionName'] = NULL;
$arguments786['languageKey'] = NULL;
$arguments786['alternativeLanguageKeys'] = NULL;
$arguments786['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output774 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments786, $renderChildrenClosure787, $renderingContext)]);

$output774 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments788 = array();
$arguments788['identifier'] = NULL;
$arguments788['size'] = 'small';
$arguments788['overlay'] = NULL;
$arguments788['state'] = 'default';
$arguments788['alternativeMarkupIdentifier'] = NULL;
$arguments788['identifier'] = 'actions-open';

$output774 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext);

$output774 .= '
                                        </a>
                                    ';
return $output774;
};
$arguments772 = array();

$output771 .= '';

$output771 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure791 = function() use ($renderingContext, $self) {
$output792 = '';

$output792 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure794 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments793 = array();
$arguments793['identifier'] = NULL;
$arguments793['size'] = 'small';
$arguments793['overlay'] = NULL;
$arguments793['state'] = 'default';
$arguments793['alternativeMarkupIdentifier'] = NULL;
$arguments793['identifier'] = 'empty-empty';

$output792 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments793, $renderChildrenClosure794, $renderingContext);

$output792 .= '</span>
                                    ';
return $output792;
};
$arguments790 = array();
$arguments790['if'] = NULL;

$output771 .= '';

$output771 .= '
                                ';
return $output771;
};
$arguments747 = array();
$arguments747['then'] = NULL;
$arguments747['else'] = NULL;
$arguments747['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array768 = array();
$array769 = array (
);$array768['0'] = $renderingContext->getVariableProvider()->getByPath('file.IsMetadataEditable', $array769);

$expression770 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments747['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression770(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array768)
					),
					$renderingContext
				);
$arguments747['__thenClosure'] = function() use ($renderingContext, $self) {
$output749 = '';

$output749 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper
$renderChildrenClosure751 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments750 = array();
$arguments750['uid'] = NULL;
$arguments750['table'] = NULL;
$arguments750['fields'] = NULL;
$arguments750['returnUrl'] = '';
$array752 = array (
);$arguments750['uid'] = $renderingContext->getVariableProvider()->getByPath('file.metadataUid', $array752);
$arguments750['table'] = 'sys_file_metadata';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure754 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['action'] = NULL;
$arguments755['arguments'] = array (
);
$arguments755['controller'] = NULL;
$arguments755['extensionName'] = NULL;
$arguments755['pluginName'] = NULL;
$arguments755['pageUid'] = NULL;
$arguments755['pageType'] = 0;
$arguments755['noCache'] = NULL;
$arguments755['noCacheHash'] = NULL;
$arguments755['section'] = '';
$arguments755['format'] = '';
$arguments755['linkAccessRestrictedPages'] = false;
$arguments755['additionalParams'] = array (
);
$arguments755['absolute'] = false;
$arguments755['addQueryString'] = false;
$arguments755['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments755['addQueryStringMethod'] = NULL;
$arguments755['action'] = 'search';
// Rendering Array
$array757 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
$array760 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array760);
};
$arguments758 = array();
$arguments758['value'] = NULL;
$arguments758['keepQuotes'] = false;
$arguments758['encoding'] = NULL;
$arguments758['doubleEncode'] = true;
$renderChildrenClosure759 = ($arguments758['value'] !== null) ? function() use ($arguments758) { return $arguments758['value']; } : $renderChildrenClosure759;$array757['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext);
$arguments755['arguments'] = $array757;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);
};
$arguments753 = array();
$arguments753['value'] = NULL;
$arguments750['returnUrl'] = isset($arguments753['value']) ? $arguments753['value'] : $renderChildrenClosure754();

$output749 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\Uri\EditRecordViewHelper::renderStatic($arguments750, $renderChildrenClosure751, $renderingContext)]);

$output749 .= '"
                                            class="btn btn-default filelist-file-edit"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments761 = array();
$arguments761['key'] = NULL;
$arguments761['id'] = NULL;
$arguments761['default'] = NULL;
$arguments761['arguments'] = NULL;
$arguments761['extensionName'] = NULL;
$arguments761['languageKey'] = NULL;
$arguments761['alternativeLanguageKeys'] = NULL;
$arguments761['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.editMetadata';

$output749 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext)]);

$output749 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments763 = array();
$arguments763['identifier'] = NULL;
$arguments763['size'] = 'small';
$arguments763['overlay'] = NULL;
$arguments763['state'] = 'default';
$arguments763['alternativeMarkupIdentifier'] = NULL;
$arguments763['identifier'] = 'actions-open';

$output749 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments763, $renderChildrenClosure764, $renderingContext);

$output749 .= '
                                        </a>
                                    ';
return $output749;
};
$arguments747['__elseClosures'][] = function() use ($renderingContext, $self) {
$output765 = '';

$output765 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure767 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments766 = array();
$arguments766['identifier'] = NULL;
$arguments766['size'] = 'small';
$arguments766['overlay'] = NULL;
$arguments766['state'] = 'default';
$arguments766['alternativeMarkupIdentifier'] = NULL;
$arguments766['identifier'] = 'empty-empty';

$output765 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments766, $renderChildrenClosure767, $renderingContext);

$output765 .= '</span>
                                    ';
return $output765;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments747, $renderChildrenClosure748, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure796 = function() use ($renderingContext, $self) {
$output809 = '';

$output809 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$output812 = '';

$output812 .= '
                                        <a href="';
$array813 = array (
);
$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array813)]);

$output812 .= '" target="_blank" class="btn btn-default filelist-file-view"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments814 = array();
$arguments814['key'] = NULL;
$arguments814['id'] = NULL;
$arguments814['default'] = NULL;
$arguments814['arguments'] = NULL;
$arguments814['extensionName'] = NULL;
$arguments814['languageKey'] = NULL;
$arguments814['alternativeLanguageKeys'] = NULL;
$arguments814['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.view';

$output812 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext)]);

$output812 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure817 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments816 = array();
$arguments816['identifier'] = NULL;
$arguments816['size'] = 'small';
$arguments816['overlay'] = NULL;
$arguments816['state'] = 'default';
$arguments816['alternativeMarkupIdentifier'] = NULL;
$arguments816['identifier'] = 'actions-document-view';

$output812 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments816, $renderChildrenClosure817, $renderingContext);

$output812 .= '
                                        </a>
                                    ';
return $output812;
};
$arguments810 = array();

$output809 .= '';

$output809 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments821 = array();
$arguments821['identifier'] = NULL;
$arguments821['size'] = 'small';
$arguments821['overlay'] = NULL;
$arguments821['state'] = 'default';
$arguments821['alternativeMarkupIdentifier'] = NULL;
$arguments821['identifier'] = 'empty-empty';

$output820 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments821, $renderChildrenClosure822, $renderingContext);

$output820 .= '</span>
                                    ';
return $output820;
};
$arguments818 = array();
$arguments818['if'] = NULL;

$output809 .= '';

$output809 .= '
                                ';
return $output809;
};
$arguments795 = array();
$arguments795['then'] = NULL;
$arguments795['else'] = NULL;
$arguments795['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
$array807 = array (
);$array806['0'] = $renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array807);

$expression808 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments795['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$arguments795['__thenClosure'] = function() use ($renderingContext, $self) {
$output797 = '';

$output797 .= '
                                        <a href="';
$array798 = array (
);
$output797 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array798)]);

$output797 .= '" target="_blank" class="btn btn-default filelist-file-view"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['key'] = NULL;
$arguments799['id'] = NULL;
$arguments799['default'] = NULL;
$arguments799['arguments'] = NULL;
$arguments799['extensionName'] = NULL;
$arguments799['languageKey'] = NULL;
$arguments799['alternativeLanguageKeys'] = NULL;
$arguments799['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.view';

$output797 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext)]);

$output797 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure802 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments801 = array();
$arguments801['identifier'] = NULL;
$arguments801['size'] = 'small';
$arguments801['overlay'] = NULL;
$arguments801['state'] = 'default';
$arguments801['alternativeMarkupIdentifier'] = NULL;
$arguments801['identifier'] = 'actions-document-view';

$output797 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments801, $renderChildrenClosure802, $renderingContext);

$output797 .= '
                                        </a>
                                    ';
return $output797;
};
$arguments795['__elseClosures'][] = function() use ($renderingContext, $self) {
$output803 = '';

$output803 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['identifier'] = NULL;
$arguments804['size'] = 'small';
$arguments804['overlay'] = NULL;
$arguments804['state'] = 'default';
$arguments804['alternativeMarkupIdentifier'] = NULL;
$arguments804['identifier'] = 'empty-empty';

$output803 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$output803 .= '</span>
                                    ';
return $output803;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments795, $renderChildrenClosure796, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure824 = function() use ($renderingContext, $self) {
$output847 = '';

$output847 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure849 = function() use ($renderingContext, $self) {
$output850 = '';

$output850 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments851 = array();
$arguments851['file'] = NULL;
$arguments851['returnUrl'] = '';
$array853 = array (
);$arguments851['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array853);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure857 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments856 = array();
$arguments856['action'] = NULL;
$arguments856['arguments'] = array (
);
$arguments856['controller'] = NULL;
$arguments856['extensionName'] = NULL;
$arguments856['pluginName'] = NULL;
$arguments856['pageUid'] = NULL;
$arguments856['pageType'] = 0;
$arguments856['noCache'] = NULL;
$arguments856['noCacheHash'] = NULL;
$arguments856['section'] = '';
$arguments856['format'] = '';
$arguments856['linkAccessRestrictedPages'] = false;
$arguments856['additionalParams'] = array (
);
$arguments856['absolute'] = false;
$arguments856['addQueryString'] = false;
$arguments856['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments856['addQueryStringMethod'] = NULL;
$arguments856['action'] = 'search';
// Rendering Array
$array858 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
$array861 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array861);
};
$arguments859 = array();
$arguments859['value'] = NULL;
$arguments859['keepQuotes'] = false;
$arguments859['encoding'] = NULL;
$arguments859['doubleEncode'] = true;
$renderChildrenClosure860 = ($arguments859['value'] !== null) ? function() use ($arguments859) { return $arguments859['value']; } : $renderChildrenClosure860;$array858['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);
$arguments856['arguments'] = $array858;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments856, $renderChildrenClosure857, $renderingContext);
};
$arguments854 = array();
$arguments854['value'] = NULL;
$arguments851['returnUrl'] = isset($arguments854['value']) ? $arguments854['value'] : $renderChildrenClosure855();

$output850 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper::renderStatic($arguments851, $renderChildrenClosure852, $renderingContext)]);

$output850 .= '"
                                            class="btn btn-default filelist-file-replace"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments862 = array();
$arguments862['key'] = NULL;
$arguments862['id'] = NULL;
$arguments862['default'] = NULL;
$arguments862['arguments'] = NULL;
$arguments862['extensionName'] = NULL;
$arguments862['languageKey'] = NULL;
$arguments862['alternativeLanguageKeys'] = NULL;
$arguments862['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.replace';

$output850 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext)]);

$output850 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments864 = array();
$arguments864['identifier'] = NULL;
$arguments864['size'] = 'small';
$arguments864['overlay'] = NULL;
$arguments864['state'] = 'default';
$arguments864['alternativeMarkupIdentifier'] = NULL;
$arguments864['identifier'] = 'actions-edit-replace';

$output850 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments864, $renderChildrenClosure865, $renderingContext);

$output850 .= '
                                        </a>
                                    ';
return $output850;
};
$arguments848 = array();

$output847 .= '';

$output847 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
$output868 = '';

$output868 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure870 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments869 = array();
$arguments869['identifier'] = NULL;
$arguments869['size'] = 'small';
$arguments869['overlay'] = NULL;
$arguments869['state'] = 'default';
$arguments869['alternativeMarkupIdentifier'] = NULL;
$arguments869['identifier'] = 'empty-empty';

$output868 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments869, $renderChildrenClosure870, $renderingContext);

$output868 .= '</span>
                                    ';
return $output868;
};
$arguments866 = array();
$arguments866['if'] = NULL;

$output847 .= '';

$output847 .= '
                                ';
return $output847;
};
$arguments823 = array();
$arguments823['then'] = NULL;
$arguments823['else'] = NULL;
$arguments823['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array844 = array();
$array845 = array (
);$array844['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReplaceable', $array845);

$expression846 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments823['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression846(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array844)
					),
					$renderingContext
				);
$arguments823['__thenClosure'] = function() use ($renderingContext, $self) {
$output825 = '';

$output825 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments826 = array();
$arguments826['file'] = NULL;
$arguments826['returnUrl'] = '';
$array828 = array (
);$arguments826['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array828);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments831 = array();
$arguments831['action'] = NULL;
$arguments831['arguments'] = array (
);
$arguments831['controller'] = NULL;
$arguments831['extensionName'] = NULL;
$arguments831['pluginName'] = NULL;
$arguments831['pageUid'] = NULL;
$arguments831['pageType'] = 0;
$arguments831['noCache'] = NULL;
$arguments831['noCacheHash'] = NULL;
$arguments831['section'] = '';
$arguments831['format'] = '';
$arguments831['linkAccessRestrictedPages'] = false;
$arguments831['additionalParams'] = array (
);
$arguments831['absolute'] = false;
$arguments831['addQueryString'] = false;
$arguments831['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments831['addQueryStringMethod'] = NULL;
$arguments831['action'] = 'search';
// Rendering Array
$array833 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure835 = function() use ($renderingContext, $self) {
$array836 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array836);
};
$arguments834 = array();
$arguments834['value'] = NULL;
$arguments834['keepQuotes'] = false;
$arguments834['encoding'] = NULL;
$arguments834['doubleEncode'] = true;
$renderChildrenClosure835 = ($arguments834['value'] !== null) ? function() use ($arguments834) { return $arguments834['value']; } : $renderChildrenClosure835;$array833['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments834, $renderChildrenClosure835, $renderingContext);
$arguments831['arguments'] = $array833;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments831, $renderChildrenClosure832, $renderingContext);
};
$arguments829 = array();
$arguments829['value'] = NULL;
$arguments826['returnUrl'] = isset($arguments829['value']) ? $arguments829['value'] : $renderChildrenClosure830();

$output825 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\ReplaceFileViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext)]);

$output825 .= '"
                                            class="btn btn-default filelist-file-replace"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure838 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments837 = array();
$arguments837['key'] = NULL;
$arguments837['id'] = NULL;
$arguments837['default'] = NULL;
$arguments837['arguments'] = NULL;
$arguments837['extensionName'] = NULL;
$arguments837['languageKey'] = NULL;
$arguments837['alternativeLanguageKeys'] = NULL;
$arguments837['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.replace';

$output825 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments837, $renderChildrenClosure838, $renderingContext)]);

$output825 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments839 = array();
$arguments839['identifier'] = NULL;
$arguments839['size'] = 'small';
$arguments839['overlay'] = NULL;
$arguments839['state'] = 'default';
$arguments839['alternativeMarkupIdentifier'] = NULL;
$arguments839['identifier'] = 'actions-edit-replace';

$output825 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments839, $renderChildrenClosure840, $renderingContext);

$output825 .= '
                                        </a>
                                    ';
return $output825;
};
$arguments823['__elseClosures'][] = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments842 = array();
$arguments842['identifier'] = NULL;
$arguments842['size'] = 'small';
$arguments842['overlay'] = NULL;
$arguments842['state'] = 'default';
$arguments842['alternativeMarkupIdentifier'] = NULL;
$arguments842['identifier'] = 'empty-empty';

$output841 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output841 .= '</span>
                                    ';
return $output841;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments823, $renderChildrenClosure824, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
$output895 = '';

$output895 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
$output898 = '';

$output898 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments899 = array();
$arguments899['file'] = NULL;
$arguments899['returnUrl'] = '';
$array901 = array (
);$arguments899['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array901);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments904 = array();
$arguments904['action'] = NULL;
$arguments904['arguments'] = array (
);
$arguments904['controller'] = NULL;
$arguments904['extensionName'] = NULL;
$arguments904['pluginName'] = NULL;
$arguments904['pageUid'] = NULL;
$arguments904['pageType'] = 0;
$arguments904['noCache'] = NULL;
$arguments904['noCacheHash'] = NULL;
$arguments904['section'] = '';
$arguments904['format'] = '';
$arguments904['linkAccessRestrictedPages'] = false;
$arguments904['additionalParams'] = array (
);
$arguments904['absolute'] = false;
$arguments904['addQueryString'] = false;
$arguments904['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments904['addQueryStringMethod'] = NULL;
$arguments904['action'] = 'search';
// Rendering Array
$array906 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
$array909 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array909);
};
$arguments907 = array();
$arguments907['value'] = NULL;
$arguments907['keepQuotes'] = false;
$arguments907['encoding'] = NULL;
$arguments907['doubleEncode'] = true;
$renderChildrenClosure908 = ($arguments907['value'] !== null) ? function() use ($arguments907) { return $arguments907['value']; } : $renderChildrenClosure908;$array906['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext);
$arguments904['arguments'] = $array906;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments904, $renderChildrenClosure905, $renderingContext);
};
$arguments902 = array();
$arguments902['value'] = NULL;
$arguments899['returnUrl'] = isset($arguments902['value']) ? $arguments902['value'] : $renderChildrenClosure903();

$output898 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext)]);

$output898 .= '"
                                            class="btn btn-default filelist-file-rename"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure911 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments910 = array();
$arguments910['key'] = NULL;
$arguments910['id'] = NULL;
$arguments910['default'] = NULL;
$arguments910['arguments'] = NULL;
$arguments910['extensionName'] = NULL;
$arguments910['languageKey'] = NULL;
$arguments910['alternativeLanguageKeys'] = NULL;
$arguments910['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.rename';

$output898 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments910, $renderChildrenClosure911, $renderingContext)]);

$output898 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure913 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments912 = array();
$arguments912['identifier'] = NULL;
$arguments912['size'] = 'small';
$arguments912['overlay'] = NULL;
$arguments912['state'] = 'default';
$arguments912['alternativeMarkupIdentifier'] = NULL;
$arguments912['identifier'] = 'actions-edit-rename';

$output898 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments912, $renderChildrenClosure913, $renderingContext);

$output898 .= '
                                        </a>
                                    ';
return $output898;
};
$arguments896 = array();

$output895 .= '';

$output895 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure915 = function() use ($renderingContext, $self) {
$output916 = '';

$output916 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments917 = array();
$arguments917['identifier'] = NULL;
$arguments917['size'] = 'small';
$arguments917['overlay'] = NULL;
$arguments917['state'] = 'default';
$arguments917['alternativeMarkupIdentifier'] = NULL;
$arguments917['identifier'] = 'empty-empty';

$output916 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments917, $renderChildrenClosure918, $renderingContext);

$output916 .= '</span>
                                    ';
return $output916;
};
$arguments914 = array();
$arguments914['if'] = NULL;

$output895 .= '';

$output895 .= '
                                ';
return $output895;
};
$arguments871 = array();
$arguments871['then'] = NULL;
$arguments871['else'] = NULL;
$arguments871['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array892 = array();
$array893 = array (
);$array892['0'] = $renderingContext->getVariableProvider()->getByPath('file.isRenamable', $array893);

$expression894 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments871['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression894(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array892)
					),
					$renderingContext
				);
$arguments871['__thenClosure'] = function() use ($renderingContext, $self) {
$output873 = '';

$output873 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper
$renderChildrenClosure875 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments874 = array();
$arguments874['file'] = NULL;
$arguments874['returnUrl'] = '';
$array876 = array (
);$arguments874['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array876);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments879 = array();
$arguments879['action'] = NULL;
$arguments879['arguments'] = array (
);
$arguments879['controller'] = NULL;
$arguments879['extensionName'] = NULL;
$arguments879['pluginName'] = NULL;
$arguments879['pageUid'] = NULL;
$arguments879['pageType'] = 0;
$arguments879['noCache'] = NULL;
$arguments879['noCacheHash'] = NULL;
$arguments879['section'] = '';
$arguments879['format'] = '';
$arguments879['linkAccessRestrictedPages'] = false;
$arguments879['additionalParams'] = array (
);
$arguments879['absolute'] = false;
$arguments879['addQueryString'] = false;
$arguments879['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments879['addQueryStringMethod'] = NULL;
$arguments879['action'] = 'search';
// Rendering Array
$array881 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
$array884 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array884);
};
$arguments882 = array();
$arguments882['value'] = NULL;
$arguments882['keepQuotes'] = false;
$arguments882['encoding'] = NULL;
$arguments882['doubleEncode'] = true;
$renderChildrenClosure883 = ($arguments882['value'] !== null) ? function() use ($arguments882) { return $arguments882['value']; } : $renderChildrenClosure883;$array881['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);
$arguments879['arguments'] = $array881;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);
};
$arguments877 = array();
$arguments877['value'] = NULL;
$arguments874['returnUrl'] = isset($arguments877['value']) ? $arguments877['value'] : $renderChildrenClosure878();

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\RenameFileViewHelper::renderStatic($arguments874, $renderChildrenClosure875, $renderingContext)]);

$output873 .= '"
                                            class="btn btn-default filelist-file-rename"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure886 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments885 = array();
$arguments885['key'] = NULL;
$arguments885['id'] = NULL;
$arguments885['default'] = NULL;
$arguments885['arguments'] = NULL;
$arguments885['extensionName'] = NULL;
$arguments885['languageKey'] = NULL;
$arguments885['alternativeLanguageKeys'] = NULL;
$arguments885['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.rename';

$output873 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments885, $renderChildrenClosure886, $renderingContext)]);

$output873 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['identifier'] = NULL;
$arguments887['size'] = 'small';
$arguments887['overlay'] = NULL;
$arguments887['state'] = 'default';
$arguments887['alternativeMarkupIdentifier'] = NULL;
$arguments887['identifier'] = 'actions-edit-rename';

$output873 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output873 .= '
                                        </a>
                                    ';
return $output873;
};
$arguments871['__elseClosures'][] = function() use ($renderingContext, $self) {
$output889 = '';

$output889 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments890 = array();
$arguments890['identifier'] = NULL;
$arguments890['size'] = 'small';
$arguments890['overlay'] = NULL;
$arguments890['state'] = 'default';
$arguments890['alternativeMarkupIdentifier'] = NULL;
$arguments890['identifier'] = 'empty-empty';

$output889 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments890, $renderChildrenClosure891, $renderingContext);

$output889 .= '</span>
                                    ';
return $output889;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
$output936 = '';

$output936 .= '
                                        <a href="#" class="btn btn-default filelist-file-info"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments937 = array();
$arguments937['key'] = NULL;
$arguments937['id'] = NULL;
$arguments937['default'] = NULL;
$arguments937['arguments'] = NULL;
$arguments937['extensionName'] = NULL;
$arguments937['languageKey'] = NULL;
$arguments937['alternativeLanguageKeys'] = NULL;
$arguments937['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.info';

$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments937, $renderChildrenClosure938, $renderingContext)]);

$output936 .= '"
                                            data-identifier="';
$array939 = array (
);
$output936 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array939)]);

$output936 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure941 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments940 = array();
$arguments940['identifier'] = NULL;
$arguments940['size'] = 'small';
$arguments940['overlay'] = NULL;
$arguments940['state'] = 'default';
$arguments940['alternativeMarkupIdentifier'] = NULL;
$arguments940['identifier'] = 'actions-document-info';

$output936 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments940, $renderChildrenClosure941, $renderingContext);

$output936 .= '
                                        </a>
                                    ';
return $output936;
};
$arguments934 = array();

$output933 .= '';

$output933 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
$output944 = '';

$output944 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments945 = array();
$arguments945['identifier'] = NULL;
$arguments945['size'] = 'small';
$arguments945['overlay'] = NULL;
$arguments945['state'] = 'default';
$arguments945['alternativeMarkupIdentifier'] = NULL;
$arguments945['identifier'] = 'empty-empty';

$output944 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments945, $renderChildrenClosure946, $renderingContext);

$output944 .= '</span>
                                    ';
return $output944;
};
$arguments942 = array();
$arguments942['if'] = NULL;

$output933 .= '';

$output933 .= '
                                ';
return $output933;
};
$arguments919 = array();
$arguments919['then'] = NULL;
$arguments919['else'] = NULL;
$arguments919['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array930 = array();
$array931 = array (
);$array930['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReadable', $array931);

$expression932 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments919['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression932(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array930)
					),
					$renderingContext
				);
$arguments919['__thenClosure'] = function() use ($renderingContext, $self) {
$output921 = '';

$output921 .= '
                                        <a href="#" class="btn btn-default filelist-file-info"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments922 = array();
$arguments922['key'] = NULL;
$arguments922['id'] = NULL;
$arguments922['default'] = NULL;
$arguments922['arguments'] = NULL;
$arguments922['extensionName'] = NULL;
$arguments922['languageKey'] = NULL;
$arguments922['alternativeLanguageKeys'] = NULL;
$arguments922['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.info';

$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext)]);

$output921 .= '"
                                            data-identifier="';
$array924 = array (
);
$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array924)]);

$output921 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure926 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments925 = array();
$arguments925['identifier'] = NULL;
$arguments925['size'] = 'small';
$arguments925['overlay'] = NULL;
$arguments925['state'] = 'default';
$arguments925['alternativeMarkupIdentifier'] = NULL;
$arguments925['identifier'] = 'actions-document-info';

$output921 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments925, $renderChildrenClosure926, $renderingContext);

$output921 .= '
                                        </a>
                                    ';
return $output921;
};
$arguments919['__elseClosures'][] = function() use ($renderingContext, $self) {
$output927 = '';

$output927 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure929 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments928 = array();
$arguments928['identifier'] = NULL;
$arguments928['size'] = 'small';
$arguments928['overlay'] = NULL;
$arguments928['state'] = 'default';
$arguments928['alternativeMarkupIdentifier'] = NULL;
$arguments928['identifier'] = 'empty-empty';

$output927 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments928, $renderChildrenClosure929, $renderingContext);

$output927 .= '</span>
                                    ';
return $output927;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments919, $renderChildrenClosure920, $renderingContext);

$output638 .= '

                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
$output988 = '';

$output988 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments989 = array();
$arguments989['file'] = NULL;
$arguments989['copyOrCut'] = 'copy';
$array991 = array (
);$arguments989['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array991);
$arguments989['copyOrCut'] = 'copy';

$output988 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments989, $renderChildrenClosure990, $renderingContext)]);

$output988 .= '"
                                            class="btn btn-default filelist-file-copy"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure993 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments992 = array();
$arguments992['key'] = NULL;
$arguments992['id'] = NULL;
$arguments992['default'] = NULL;
$arguments992['arguments'] = NULL;
$arguments992['extensionName'] = NULL;
$arguments992['languageKey'] = NULL;
$arguments992['alternativeLanguageKeys'] = NULL;
$arguments992['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.copy';

$output988 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments992, $renderChildrenClosure993, $renderingContext)]);

$output988 .= '"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments994 = array();
$arguments994['action'] = NULL;
$arguments994['arguments'] = array (
);
$arguments994['controller'] = NULL;
$arguments994['extensionName'] = NULL;
$arguments994['pluginName'] = NULL;
$arguments994['pageUid'] = NULL;
$arguments994['pageType'] = 0;
$arguments994['noCache'] = NULL;
$arguments994['noCacheHash'] = NULL;
$arguments994['section'] = '';
$arguments994['format'] = '';
$arguments994['linkAccessRestrictedPages'] = false;
$arguments994['additionalParams'] = array (
);
$arguments994['absolute'] = false;
$arguments994['addQueryString'] = false;
$arguments994['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments994['addQueryStringMethod'] = NULL;
$arguments994['action'] = 'search';
// Rendering Array
$array996 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
$array999 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array999);
};
$arguments997 = array();
$arguments997['value'] = NULL;
$arguments997['keepQuotes'] = false;
$arguments997['encoding'] = NULL;
$arguments997['doubleEncode'] = true;
$renderChildrenClosure998 = ($arguments997['value'] !== null) ? function() use ($arguments997) { return $arguments997['value']; } : $renderChildrenClosure998;$array996['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext);
$arguments994['arguments'] = $array996;

$output988 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments994, $renderChildrenClosure995, $renderingContext)]);

$output988 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
$output1009 = '';

$output1009 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1012 = array();
$arguments1012['identifier'] = NULL;
$arguments1012['size'] = 'small';
$arguments1012['overlay'] = NULL;
$arguments1012['state'] = 'default';
$arguments1012['alternativeMarkupIdentifier'] = NULL;
$arguments1012['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);
};
$arguments1010 = array();

$output1009 .= '';

$output1009 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1015 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1016 = array();
$arguments1016['identifier'] = NULL;
$arguments1016['size'] = 'small';
$arguments1016['overlay'] = NULL;
$arguments1016['state'] = 'default';
$arguments1016['alternativeMarkupIdentifier'] = NULL;
$arguments1016['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);
};
$arguments1014 = array();
$arguments1014['if'] = NULL;

$output1009 .= '';

$output1009 .= '
                                            ';
return $output1009;
};
$arguments1000 = array();
$arguments1000['then'] = NULL;
$arguments1000['else'] = NULL;
$arguments1000['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1006 = array();
$array1007 = array (
);$array1006['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array1007);
$array1006['1'] = ' == \'copy\'';

$expression1008 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'copy');};
$arguments1000['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1008(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1006)
					),
					$renderingContext
				);
$arguments1000['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1003 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1002 = array();
$arguments1002['identifier'] = NULL;
$arguments1002['size'] = 'small';
$arguments1002['overlay'] = NULL;
$arguments1002['state'] = 'default';
$arguments1002['alternativeMarkupIdentifier'] = NULL;
$arguments1002['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1002, $renderChildrenClosure1003, $renderingContext);
};
$arguments1000['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1004 = array();
$arguments1004['identifier'] = NULL;
$arguments1004['size'] = 'small';
$arguments1004['overlay'] = NULL;
$arguments1004['state'] = 'default';
$arguments1004['alternativeMarkupIdentifier'] = NULL;
$arguments1004['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);
};

$output988 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext);

$output988 .= '
                                        </a>
                                    ';
return $output988;
};
$arguments986 = array();

$output985 .= '';

$output985 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
$output1020 = '';

$output1020 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1021 = array();
$arguments1021['identifier'] = NULL;
$arguments1021['size'] = 'small';
$arguments1021['overlay'] = NULL;
$arguments1021['state'] = 'default';
$arguments1021['alternativeMarkupIdentifier'] = NULL;
$arguments1021['identifier'] = 'empty-empty';

$output1020 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext);

$output1020 .= '</span>
                                    ';
return $output1020;
};
$arguments1018 = array();
$arguments1018['if'] = NULL;

$output985 .= '';

$output985 .= '
                                ';
return $output985;
};
$arguments947 = array();
$arguments947['then'] = NULL;
$arguments947['else'] = NULL;
$arguments947['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('file.copyable', $array983);

$expression984 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments947['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$arguments947['__thenClosure'] = function() use ($renderingContext, $self) {
$output949 = '';

$output949 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure951 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments950 = array();
$arguments950['file'] = NULL;
$arguments950['copyOrCut'] = 'copy';
$array952 = array (
);$arguments950['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array952);
$arguments950['copyOrCut'] = 'copy';

$output949 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments950, $renderChildrenClosure951, $renderingContext)]);

$output949 .= '"
                                            class="btn btn-default filelist-file-copy"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure954 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments953 = array();
$arguments953['key'] = NULL;
$arguments953['id'] = NULL;
$arguments953['default'] = NULL;
$arguments953['arguments'] = NULL;
$arguments953['extensionName'] = NULL;
$arguments953['languageKey'] = NULL;
$arguments953['alternativeLanguageKeys'] = NULL;
$arguments953['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.copy';

$output949 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments953, $renderChildrenClosure954, $renderingContext)]);

$output949 .= '"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure956 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments955 = array();
$arguments955['action'] = NULL;
$arguments955['arguments'] = array (
);
$arguments955['controller'] = NULL;
$arguments955['extensionName'] = NULL;
$arguments955['pluginName'] = NULL;
$arguments955['pageUid'] = NULL;
$arguments955['pageType'] = 0;
$arguments955['noCache'] = NULL;
$arguments955['noCacheHash'] = NULL;
$arguments955['section'] = '';
$arguments955['format'] = '';
$arguments955['linkAccessRestrictedPages'] = false;
$arguments955['additionalParams'] = array (
);
$arguments955['absolute'] = false;
$arguments955['addQueryString'] = false;
$arguments955['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments955['addQueryStringMethod'] = NULL;
$arguments955['action'] = 'search';
// Rendering Array
$array957 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
$array960 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array960);
};
$arguments958 = array();
$arguments958['value'] = NULL;
$arguments958['keepQuotes'] = false;
$arguments958['encoding'] = NULL;
$arguments958['doubleEncode'] = true;
$renderChildrenClosure959 = ($arguments958['value'] !== null) ? function() use ($arguments958) { return $arguments958['value']; } : $renderChildrenClosure959;$array957['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);
$arguments955['arguments'] = $array957;

$output949 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments955, $renderChildrenClosure956, $renderingContext)]);

$output949 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure962 = function() use ($renderingContext, $self) {
$output970 = '';

$output970 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure974 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments973 = array();
$arguments973['identifier'] = NULL;
$arguments973['size'] = 'small';
$arguments973['overlay'] = NULL;
$arguments973['state'] = 'default';
$arguments973['alternativeMarkupIdentifier'] = NULL;
$arguments973['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments973, $renderChildrenClosure974, $renderingContext);
};
$arguments971 = array();

$output970 .= '';

$output970 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure976 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure978 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments977 = array();
$arguments977['identifier'] = NULL;
$arguments977['size'] = 'small';
$arguments977['overlay'] = NULL;
$arguments977['state'] = 'default';
$arguments977['alternativeMarkupIdentifier'] = NULL;
$arguments977['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments977, $renderChildrenClosure978, $renderingContext);
};
$arguments975 = array();
$arguments975['if'] = NULL;

$output970 .= '';

$output970 .= '
                                            ';
return $output970;
};
$arguments961 = array();
$arguments961['then'] = NULL;
$arguments961['else'] = NULL;
$arguments961['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array967 = array();
$array968 = array (
);$array967['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array968);
$array967['1'] = ' == \'copy\'';

$expression969 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'copy');};
$arguments961['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression969(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array967)
					),
					$renderingContext
				);
$arguments961['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure964 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments963 = array();
$arguments963['identifier'] = NULL;
$arguments963['size'] = 'small';
$arguments963['overlay'] = NULL;
$arguments963['state'] = 'default';
$arguments963['alternativeMarkupIdentifier'] = NULL;
$arguments963['identifier'] = 'actions-edit-copy-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments963, $renderChildrenClosure964, $renderingContext);
};
$arguments961['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments965 = array();
$arguments965['identifier'] = NULL;
$arguments965['size'] = 'small';
$arguments965['overlay'] = NULL;
$arguments965['state'] = 'default';
$arguments965['alternativeMarkupIdentifier'] = NULL;
$arguments965['identifier'] = 'actions-edit-copy';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments965, $renderChildrenClosure966, $renderingContext);
};

$output949 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments961, $renderChildrenClosure962, $renderingContext);

$output949 .= '
                                        </a>
                                    ';
return $output949;
};
$arguments947['__elseClosures'][] = function() use ($renderingContext, $self) {
$output979 = '';

$output979 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments980 = array();
$arguments980['identifier'] = NULL;
$arguments980['size'] = 'small';
$arguments980['overlay'] = NULL;
$arguments980['state'] = 'default';
$arguments980['alternativeMarkupIdentifier'] = NULL;
$arguments980['identifier'] = 'empty-empty';

$output979 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output979 .= '</span>
                                    ';
return $output979;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output638 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1024 = function() use ($renderingContext, $self) {
$output1055 = '';

$output1055 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1057 = function() use ($renderingContext, $self) {
$output1058 = '';

$output1058 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure1060 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1059 = array();
$arguments1059['file'] = NULL;
$arguments1059['copyOrCut'] = 'copy';
$array1061 = array (
);$arguments1059['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array1061);
$arguments1059['copyOrCut'] = 'cut';

$output1058 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments1059, $renderChildrenClosure1060, $renderingContext)]);

$output1058 .= '"
                                            class="btn btn-default filelist-file-cut"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1063 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1062 = array();
$arguments1062['key'] = NULL;
$arguments1062['id'] = NULL;
$arguments1062['default'] = NULL;
$arguments1062['arguments'] = NULL;
$arguments1062['extensionName'] = NULL;
$arguments1062['languageKey'] = NULL;
$arguments1062['alternativeLanguageKeys'] = NULL;
$arguments1062['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.cut';

$output1058 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1062, $renderChildrenClosure1063, $renderingContext)]);

$output1058 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
$output1073 = '';

$output1073 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1075 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1077 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1076 = array();
$arguments1076['identifier'] = NULL;
$arguments1076['size'] = 'small';
$arguments1076['overlay'] = NULL;
$arguments1076['state'] = 'default';
$arguments1076['alternativeMarkupIdentifier'] = NULL;
$arguments1076['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1076, $renderChildrenClosure1077, $renderingContext);
};
$arguments1074 = array();

$output1073 .= '';

$output1073 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1081 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1080 = array();
$arguments1080['identifier'] = NULL;
$arguments1080['size'] = 'small';
$arguments1080['overlay'] = NULL;
$arguments1080['state'] = 'default';
$arguments1080['alternativeMarkupIdentifier'] = NULL;
$arguments1080['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1080, $renderChildrenClosure1081, $renderingContext);
};
$arguments1078 = array();
$arguments1078['if'] = NULL;

$output1073 .= '';

$output1073 .= '
                                            ';
return $output1073;
};
$arguments1064 = array();
$arguments1064['then'] = NULL;
$arguments1064['else'] = NULL;
$arguments1064['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1070 = array();
$array1071 = array (
);$array1070['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array1071);
$array1070['1'] = ' == \'cut\'';

$expression1072 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'cut');};
$arguments1064['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1072(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1070)
					),
					$renderingContext
				);
$arguments1064['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1066 = array();
$arguments1066['identifier'] = NULL;
$arguments1066['size'] = 'small';
$arguments1066['overlay'] = NULL;
$arguments1066['state'] = 'default';
$arguments1066['alternativeMarkupIdentifier'] = NULL;
$arguments1066['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1066, $renderChildrenClosure1067, $renderingContext);
};
$arguments1064['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1068 = array();
$arguments1068['identifier'] = NULL;
$arguments1068['size'] = 'small';
$arguments1068['overlay'] = NULL;
$arguments1068['state'] = 'default';
$arguments1068['alternativeMarkupIdentifier'] = NULL;
$arguments1068['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1068, $renderChildrenClosure1069, $renderingContext);
};

$output1058 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1058 .= '
                                        </a>
                                    ';
return $output1058;
};
$arguments1056 = array();

$output1055 .= '';

$output1055 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
$output1084 = '';

$output1084 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1086 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1085 = array();
$arguments1085['identifier'] = NULL;
$arguments1085['size'] = 'small';
$arguments1085['overlay'] = NULL;
$arguments1085['state'] = 'default';
$arguments1085['alternativeMarkupIdentifier'] = NULL;
$arguments1085['identifier'] = 'empty-empty';

$output1084 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1085, $renderChildrenClosure1086, $renderingContext);

$output1084 .= '</span>
                                    ';
return $output1084;
};
$arguments1082 = array();
$arguments1082['if'] = NULL;

$output1055 .= '';

$output1055 .= '
                                ';
return $output1055;
};
$arguments1023 = array();
$arguments1023['then'] = NULL;
$arguments1023['else'] = NULL;
$arguments1023['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1052 = array();
$array1053 = array (
);$array1052['0'] = $renderingContext->getVariableProvider()->getByPath('file.cuttable', $array1053);

$expression1054 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1023['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1054(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1052)
					),
					$renderingContext
				);
$arguments1023['__thenClosure'] = function() use ($renderingContext, $self) {
$output1025 = '';

$output1025 .= '
                                        <a href="';
// Rendering ViewHelper TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper
$renderChildrenClosure1027 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1026 = array();
$arguments1026['file'] = NULL;
$arguments1026['copyOrCut'] = 'copy';
$array1028 = array (
);$arguments1026['file'] = $renderingContext->getVariableProvider()->getByPath('file.resource', $array1028);
$arguments1026['copyOrCut'] = 'cut';

$output1025 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Filelist\ViewHelpers\Uri\CopyCutFileViewHelper::renderStatic($arguments1026, $renderChildrenClosure1027, $renderingContext)]);

$output1025 .= '"
                                            class="btn btn-default filelist-file-cut"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1029 = array();
$arguments1029['key'] = NULL;
$arguments1029['id'] = NULL;
$arguments1029['default'] = NULL;
$arguments1029['arguments'] = NULL;
$arguments1029['extensionName'] = NULL;
$arguments1029['languageKey'] = NULL;
$arguments1029['alternativeLanguageKeys'] = NULL;
$arguments1029['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.cut';

$output1025 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext)]);

$output1025 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1032 = function() use ($renderingContext, $self) {
$output1040 = '';

$output1040 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1042 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1043 = array();
$arguments1043['identifier'] = NULL;
$arguments1043['size'] = 'small';
$arguments1043['overlay'] = NULL;
$arguments1043['state'] = 'default';
$arguments1043['alternativeMarkupIdentifier'] = NULL;
$arguments1043['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1043, $renderChildrenClosure1044, $renderingContext);
};
$arguments1041 = array();

$output1040 .= '';

$output1040 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1046 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1048 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1047 = array();
$arguments1047['identifier'] = NULL;
$arguments1047['size'] = 'small';
$arguments1047['overlay'] = NULL;
$arguments1047['state'] = 'default';
$arguments1047['alternativeMarkupIdentifier'] = NULL;
$arguments1047['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1047, $renderChildrenClosure1048, $renderingContext);
};
$arguments1045 = array();
$arguments1045['if'] = NULL;

$output1040 .= '';

$output1040 .= '
                                            ';
return $output1040;
};
$arguments1031 = array();
$arguments1031['then'] = NULL;
$arguments1031['else'] = NULL;
$arguments1031['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1037 = array();
$array1038 = array (
);$array1037['0'] = $renderingContext->getVariableProvider()->getByPath('file.selected', $array1038);
$array1037['1'] = ' == \'cut\'';

$expression1039 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'cut');};
$arguments1031['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1039(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1037)
					),
					$renderingContext
				);
$arguments1031['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1034 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1033 = array();
$arguments1033['identifier'] = NULL;
$arguments1033['size'] = 'small';
$arguments1033['overlay'] = NULL;
$arguments1033['state'] = 'default';
$arguments1033['alternativeMarkupIdentifier'] = NULL;
$arguments1033['identifier'] = 'actions-edit-cut-release';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1033, $renderChildrenClosure1034, $renderingContext);
};
$arguments1031['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1036 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1035 = array();
$arguments1035['identifier'] = NULL;
$arguments1035['size'] = 'small';
$arguments1035['overlay'] = NULL;
$arguments1035['state'] = 'default';
$arguments1035['alternativeMarkupIdentifier'] = NULL;
$arguments1035['identifier'] = 'actions-edit-cut';
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1035, $renderChildrenClosure1036, $renderingContext);
};

$output1025 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1031, $renderChildrenClosure1032, $renderingContext);

$output1025 .= '
                                        </a>
                                    ';
return $output1025;
};
$arguments1023['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1050 = array();
$arguments1050['identifier'] = NULL;
$arguments1050['size'] = 'small';
$arguments1050['overlay'] = NULL;
$arguments1050['state'] = 'default';
$arguments1050['alternativeMarkupIdentifier'] = NULL;
$arguments1050['identifier'] = 'empty-empty';

$output1049 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1050, $renderChildrenClosure1051, $renderingContext);

$output1049 .= '</span>
                                    ';
return $output1049;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1023, $renderChildrenClosure1024, $renderingContext);

$output638 .= '


                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1088 = function() use ($renderingContext, $self) {
$output1119 = '';

$output1119 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1121 = function() use ($renderingContext, $self) {
$output1122 = '';

$output1122 .= '
                                        <a href="#" class="btn btn-default t3js-filelist-delete"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1123 = array();
$arguments1123['key'] = NULL;
$arguments1123['id'] = NULL;
$arguments1123['default'] = NULL;
$arguments1123['arguments'] = NULL;
$arguments1123['extensionName'] = NULL;
$arguments1123['languageKey'] = NULL;
$arguments1123['alternativeLanguageKeys'] = NULL;
$arguments1123['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1123, $renderChildrenClosure1124, $renderingContext)]);

$output1122 .= '"
                                            data-identifier="';
$array1125 = array (
);
$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array1125)]);

$output1122 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1126 = array();
$arguments1126['key'] = NULL;
$arguments1126['id'] = NULL;
$arguments1126['default'] = NULL;
$arguments1126['arguments'] = NULL;
$arguments1126['extensionName'] = NULL;
$arguments1126['languageKey'] = NULL;
$arguments1126['alternativeLanguageKeys'] = NULL;
$arguments1126['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1126, $renderChildrenClosure1127, $renderingContext)]);

$output1122 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1128 = array();
$arguments1128['key'] = NULL;
$arguments1128['id'] = NULL;
$arguments1128['default'] = NULL;
$arguments1128['arguments'] = NULL;
$arguments1128['extensionName'] = NULL;
$arguments1128['languageKey'] = NULL;
$arguments1128['alternativeLanguageKeys'] = NULL;
$arguments1128['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:mess.delete';
// Rendering Array
$array1130 = array();
$array1131 = array (
);$array1130['0'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array1131);
$arguments1128['arguments'] = $array1130;

$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1128, $renderChildrenClosure1129, $renderingContext)]);

$output1122 .= '"
                                            data-check="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1132 = array();
$arguments1132['then'] = NULL;
$arguments1132['else'] = NULL;
$arguments1132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1134 = array();
$array1135 = array (
);$array1134['0'] = $renderingContext->getVariableProvider()->getByPath('settings.jsConfirmationDelete', $array1135);

$expression1136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1134)
					),
					$renderingContext
				);
$arguments1132['then'] = 1;
$arguments1132['else'] = 0;

$output1122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext);

$output1122 .= '"
                                            data-delete-url="';
$array1137 = array (
);
$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteUrl', $array1137)]);

$output1122 .= '"
                                            data-delete-type="delete_file"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1138 = array();
$arguments1138['action'] = NULL;
$arguments1138['arguments'] = array (
);
$arguments1138['controller'] = NULL;
$arguments1138['extensionName'] = NULL;
$arguments1138['pluginName'] = NULL;
$arguments1138['pageUid'] = NULL;
$arguments1138['pageType'] = 0;
$arguments1138['noCache'] = NULL;
$arguments1138['noCacheHash'] = NULL;
$arguments1138['section'] = '';
$arguments1138['format'] = '';
$arguments1138['linkAccessRestrictedPages'] = false;
$arguments1138['additionalParams'] = array (
);
$arguments1138['absolute'] = false;
$arguments1138['addQueryString'] = false;
$arguments1138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1138['addQueryStringMethod'] = NULL;
$arguments1138['action'] = 'search';
// Rendering Array
$array1140 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure1142 = function() use ($renderingContext, $self) {
$array1143 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array1143);
};
$arguments1141 = array();
$arguments1141['value'] = NULL;
$arguments1141['keepQuotes'] = false;
$arguments1141['encoding'] = NULL;
$arguments1141['doubleEncode'] = true;
$renderChildrenClosure1142 = ($arguments1141['value'] !== null) ? function() use ($arguments1141) { return $arguments1141['value']; } : $renderChildrenClosure1142;$array1140['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments1141, $renderChildrenClosure1142, $renderingContext);
$arguments1138['arguments'] = $array1140;

$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1138, $renderChildrenClosure1139, $renderingContext)]);

$output1122 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1144 = array();
$arguments1144['identifier'] = NULL;
$arguments1144['size'] = 'small';
$arguments1144['overlay'] = NULL;
$arguments1144['state'] = 'default';
$arguments1144['alternativeMarkupIdentifier'] = NULL;
$arguments1144['identifier'] = 'actions-edit-delete';

$output1122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext);

$output1122 .= '
                                        </a>
                                    ';
return $output1122;
};
$arguments1120 = array();

$output1119 .= '';

$output1119 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
$output1148 = '';

$output1148 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1149 = array();
$arguments1149['identifier'] = NULL;
$arguments1149['size'] = 'small';
$arguments1149['overlay'] = NULL;
$arguments1149['state'] = 'default';
$arguments1149['alternativeMarkupIdentifier'] = NULL;
$arguments1149['identifier'] = 'empty-empty';

$output1148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1149, $renderChildrenClosure1150, $renderingContext);

$output1148 .= '</span>
                                    ';
return $output1148;
};
$arguments1146 = array();
$arguments1146['if'] = NULL;

$output1119 .= '';

$output1119 .= '
                                ';
return $output1119;
};
$arguments1087 = array();
$arguments1087['then'] = NULL;
$arguments1087['else'] = NULL;
$arguments1087['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1116 = array();
$array1117 = array (
);$array1116['0'] = $renderingContext->getVariableProvider()->getByPath('file.isDeletable', $array1117);

$expression1118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1087['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1116)
					),
					$renderingContext
				);
$arguments1087['__thenClosure'] = function() use ($renderingContext, $self) {
$output1089 = '';

$output1089 .= '
                                        <a href="#" class="btn btn-default t3js-filelist-delete"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1091 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1090 = array();
$arguments1090['key'] = NULL;
$arguments1090['id'] = NULL;
$arguments1090['default'] = NULL;
$arguments1090['arguments'] = NULL;
$arguments1090['extensionName'] = NULL;
$arguments1090['languageKey'] = NULL;
$arguments1090['alternativeLanguageKeys'] = NULL;
$arguments1090['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1090, $renderChildrenClosure1091, $renderingContext)]);

$output1089 .= '"
                                            data-identifier="';
$array1092 = array (
);
$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array1092)]);

$output1089 .= '"
                                            data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1094 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1093 = array();
$arguments1093['key'] = NULL;
$arguments1093['id'] = NULL;
$arguments1093['default'] = NULL;
$arguments1093['arguments'] = NULL;
$arguments1093['extensionName'] = NULL;
$arguments1093['languageKey'] = NULL;
$arguments1093['alternativeLanguageKeys'] = NULL;
$arguments1093['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1093, $renderChildrenClosure1094, $renderingContext)]);

$output1089 .= '"
                                            data-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1095 = array();
$arguments1095['key'] = NULL;
$arguments1095['id'] = NULL;
$arguments1095['default'] = NULL;
$arguments1095['arguments'] = NULL;
$arguments1095['extensionName'] = NULL;
$arguments1095['languageKey'] = NULL;
$arguments1095['alternativeLanguageKeys'] = NULL;
$arguments1095['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:mess.delete';
// Rendering Array
$array1097 = array();
$array1098 = array (
);$array1097['0'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array1098);
$arguments1095['arguments'] = $array1097;

$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext)]);

$output1089 .= '"
                                            data-check="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1099 = array();
$arguments1099['then'] = NULL;
$arguments1099['else'] = NULL;
$arguments1099['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1101 = array();
$array1102 = array (
);$array1101['0'] = $renderingContext->getVariableProvider()->getByPath('settings.jsConfirmationDelete', $array1102);

$expression1103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1099['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1101)
					),
					$renderingContext
				);
$arguments1099['then'] = 1;
$arguments1099['else'] = 0;

$output1089 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1099, $renderChildrenClosure1100, $renderingContext);

$output1089 .= '"
                                            data-delete-url="';
$array1104 = array (
);
$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteUrl', $array1104)]);

$output1089 .= '"
                                            data-delete-type="delete_file"
                                            data-redirect-url="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1105 = array();
$arguments1105['action'] = NULL;
$arguments1105['arguments'] = array (
);
$arguments1105['controller'] = NULL;
$arguments1105['extensionName'] = NULL;
$arguments1105['pluginName'] = NULL;
$arguments1105['pageUid'] = NULL;
$arguments1105['pageType'] = 0;
$arguments1105['noCache'] = NULL;
$arguments1105['noCacheHash'] = NULL;
$arguments1105['section'] = '';
$arguments1105['format'] = '';
$arguments1105['linkAccessRestrictedPages'] = false;
$arguments1105['additionalParams'] = array (
);
$arguments1105['absolute'] = false;
$arguments1105['addQueryString'] = false;
$arguments1105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1105['addQueryStringMethod'] = NULL;
$arguments1105['action'] = 'search';
// Rendering Array
$array1107 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure1109 = function() use ($renderingContext, $self) {
$array1110 = array (
);return $renderingContext->getVariableProvider()->getByPath('searchWord', $array1110);
};
$arguments1108 = array();
$arguments1108['value'] = NULL;
$arguments1108['keepQuotes'] = false;
$arguments1108['encoding'] = NULL;
$arguments1108['doubleEncode'] = true;
$renderChildrenClosure1109 = ($arguments1108['value'] !== null) ? function() use ($arguments1108) { return $arguments1108['value']; } : $renderChildrenClosure1109;$array1107['searchWord'] = TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments1108, $renderChildrenClosure1109, $renderingContext);
$arguments1105['arguments'] = $array1107;

$output1089 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1105, $renderChildrenClosure1106, $renderingContext)]);

$output1089 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1111 = array();
$arguments1111['identifier'] = NULL;
$arguments1111['size'] = 'small';
$arguments1111['overlay'] = NULL;
$arguments1111['state'] = 'default';
$arguments1111['alternativeMarkupIdentifier'] = NULL;
$arguments1111['identifier'] = 'actions-edit-delete';

$output1089 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1111, $renderChildrenClosure1112, $renderingContext);

$output1089 .= '
                                        </a>
                                    ';
return $output1089;
};
$arguments1087['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1113 = '';

$output1113 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure1115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1114 = array();
$arguments1114['identifier'] = NULL;
$arguments1114['size'] = 'small';
$arguments1114['overlay'] = NULL;
$arguments1114['state'] = 'default';
$arguments1114['alternativeMarkupIdentifier'] = NULL;
$arguments1114['identifier'] = 'empty-empty';

$output1113 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments1114, $renderChildrenClosure1115, $renderingContext);

$output1113 .= '</span>
                                    ';
return $output1113;
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1087, $renderChildrenClosure1088, $renderingContext);

$output638 .= '
                            </div>
                        </td>
                        <td class="nowrap">';
$array1151 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array1151)]);

$output638 .= '</td>
                        <td class="nowrap">';
$array1152 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.lastModified', $array1152)]);

$output638 .= '</td>
                        <td class="nowrap">';
$array1153 = array (
);
$output638 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.size', $array1153)]);

$output638 .= '</td>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1155 = function() use ($renderingContext, $self) {
$output1159 = '';

$output1159 .= '<strong class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1160 = array();
$arguments1160['key'] = NULL;
$arguments1160['id'] = NULL;
$arguments1160['default'] = NULL;
$arguments1160['arguments'] = NULL;
$arguments1160['extensionName'] = NULL;
$arguments1160['languageKey'] = NULL;
$arguments1160['alternativeLanguageKeys'] = NULL;
$arguments1160['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:read';

$output1159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1160, $renderChildrenClosure1161, $renderingContext)]);

$output1159 .= '</strong>';
return $output1159;
};
$arguments1154 = array();
$arguments1154['then'] = NULL;
$arguments1154['else'] = NULL;
$arguments1154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1156 = array();
$array1157 = array (
);$array1156['0'] = $renderingContext->getVariableProvider()->getByPath('file.isReadable', $array1157);

$expression1158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1156)
					),
					$renderingContext
				);
$arguments1154['__thenClosure'] = $renderChildrenClosure1155;

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1154, $renderChildrenClosure1155, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1163 = function() use ($renderingContext, $self) {
$output1167 = '';

$output1167 .= '<strong class="text-danger">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1168 = array();
$arguments1168['key'] = NULL;
$arguments1168['id'] = NULL;
$arguments1168['default'] = NULL;
$arguments1168['arguments'] = NULL;
$arguments1168['extensionName'] = NULL;
$arguments1168['languageKey'] = NULL;
$arguments1168['alternativeLanguageKeys'] = NULL;
$arguments1168['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:write';

$output1167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1168, $renderChildrenClosure1169, $renderingContext)]);

$output1167 .= '</strong>';
return $output1167;
};
$arguments1162 = array();
$arguments1162['then'] = NULL;
$arguments1162['else'] = NULL;
$arguments1162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1164 = array();
$array1165 = array (
);$array1164['0'] = $renderingContext->getVariableProvider()->getByPath('file.isWritable', $array1165);

$expression1166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1164)
					),
					$renderingContext
				);
$arguments1162['__thenClosure'] = $renderChildrenClosure1163;

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1162, $renderChildrenClosure1163, $renderingContext);

$output638 .= '
                        </td>
                        <td class="nowrap">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1171 = function() use ($renderingContext, $self) {
$output1181 = '';

$output1181 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1183 = function() use ($renderingContext, $self) {
$output1184 = '';

$output1184 .= '
                                    <a href="#" class="filelist-file-references" data-identifier="';
$array1185 = array (
);
$output1184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array1185)]);

$output1184 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1186 = array();
$arguments1186['key'] = NULL;
$arguments1186['id'] = NULL;
$arguments1186['default'] = NULL;
$arguments1186['arguments'] = NULL;
$arguments1186['extensionName'] = NULL;
$arguments1186['languageKey'] = NULL;
$arguments1186['alternativeLanguageKeys'] = NULL;
$arguments1186['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:show_references';

$output1184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext)]);

$output1184 .= ' (';
$array1188 = array (
);
$output1184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array1188)]);

$output1184 .= ')">';
$array1189 = array (
);
$output1184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array1189)]);

$output1184 .= '</a>
                                ';
return $output1184;
};
$arguments1182 = array();

$output1181 .= '';

$output1181 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1191 = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};
$arguments1190 = array();
$arguments1190['if'] = NULL;

$output1181 .= '';

$output1181 .= '
                            ';
return $output1181;
};
$arguments1170 = array();
$arguments1170['then'] = NULL;
$arguments1170['else'] = NULL;
$arguments1170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1178 = array();
$array1179 = array (
);$array1178['0'] = $renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array1179);
$array1178['1'] = ' > 0';

$expression1180 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments1170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1178)
					),
					$renderingContext
				);
$arguments1170['__thenClosure'] = function() use ($renderingContext, $self) {
$output1172 = '';

$output1172 .= '
                                    <a href="#" class="filelist-file-references" data-identifier="';
$array1173 = array (
);
$output1172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.identifier', $array1173)]);

$output1172 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure1175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1174 = array();
$arguments1174['key'] = NULL;
$arguments1174['id'] = NULL;
$arguments1174['default'] = NULL;
$arguments1174['arguments'] = NULL;
$arguments1174['extensionName'] = NULL;
$arguments1174['languageKey'] = NULL;
$arguments1174['alternativeLanguageKeys'] = NULL;
$arguments1174['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:show_references';

$output1172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1174, $renderChildrenClosure1175, $renderingContext)]);

$output1172 .= ' (';
$array1176 = array (
);
$output1172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array1176)]);

$output1172 .= ')">';
$array1177 = array (
);
$output1172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.referenceCount', $array1177)]);

$output1172 .= '</a>
                                ';
return $output1172;
};
$arguments1170['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
                                    -
                                ';
};

$output638 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1170, $renderChildrenClosure1171, $renderingContext);

$output638 .= '
                        </td>
                    </tr>
                ';
return $output638;
};
$arguments635 = array();
$arguments635['each'] = NULL;
$arguments635['as'] = NULL;
$arguments635['key'] = NULL;
$arguments635['reverse'] = false;
$arguments635['iteration'] = NULL;
$array637 = array (
);$arguments635['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array637);
$arguments635['as'] = 'file';

$output620 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output620 .= '
                </tbody>
            </table>
        </div>
    ';
return $output620;
};
$arguments613 = array();
$arguments613['then'] = NULL;
$arguments613['else'] = NULL;
$arguments613['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array615 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$array618 = array (
);return $renderingContext->getVariableProvider()->getByPath('files', $array618);
};
$arguments616 = array();
$arguments616['subject'] = NULL;
$renderChildrenClosure617 = ($arguments616['subject'] !== null) ? function() use ($arguments616) { return $arguments616['subject']; } : $renderChildrenClosure617;$array615['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);
$array615['1'] = ' > 0';

$expression619 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments613['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression619(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array615)
					),
					$renderingContext
				);
$arguments613['__thenClosure'] = $renderChildrenClosure614;

$output608 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments613, $renderChildrenClosure614, $renderingContext);

$output608 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1192 = array();
$arguments1192['section'] = NULL;
$arguments1192['partial'] = NULL;
$arguments1192['delegate'] = NULL;
$arguments1192['renderable'] = NULL;
$arguments1192['arguments'] = array (
);
$arguments1192['optional'] = false;
$arguments1192['default'] = NULL;
$arguments1192['contentAs'] = NULL;
$arguments1192['debug'] = true;
$arguments1192['partial'] = 'ListOptions';
// Rendering Array
$array1194 = array();
$array1195 = array (
);$array1194['checkboxes'] = $renderingContext->getVariableProvider()->getByPath('checkboxes', $array1195);
$arguments1192['arguments'] = $array1194;

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1192, $renderChildrenClosure1193, $renderingContext);

$output608 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1196 = array();
$arguments1196['section'] = NULL;
$arguments1196['partial'] = NULL;
$arguments1196['delegate'] = NULL;
$arguments1196['renderable'] = NULL;
$arguments1196['arguments'] = array (
);
$arguments1196['optional'] = false;
$arguments1196['default'] = NULL;
$arguments1196['contentAs'] = NULL;
$arguments1196['debug'] = true;
$arguments1196['partial'] = 'ClipBoard';
// Rendering Array
$array1198 = array();
$array1199 = array (
);$array1198['showClipBoard'] = $renderingContext->getVariableProvider()->getByPath('showClipBoard', $array1199);
$array1200 = array (
);$array1198['clipBoardHtml'] = $renderingContext->getVariableProvider()->getByPath('clipBoardHtml', $array1200);
$arguments1196['arguments'] = $array1198;

$output608 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1196, $renderChildrenClosure1197, $renderingContext);

$output608 .= '
';
return $output608;
};
$arguments606 = array();
$arguments606['name'] = NULL;
$arguments606['name'] = 'content';

$output597 .= NULL;

$output597 .= '
</html>
';

return $output597;
}


}
#